<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Hajji;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use App\User;
use App\Models\EducationalInfo;
use View;

class HajjiController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hajji = User::select('users.*','districts.bn_name as district','upazilas.bn_name as upazila')
            ->leftJoin('districts','districts.id','users.district_id')
            ->leftJoin('upazilas','upazilas.id','users.upzilla_id')
            ->where('type','Student')
            ->get();
        return view('admin.hajji.list',['hajji'=>$hajji]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hajj_setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $allData=$request->all();

            $allData['features'] = serialize($request->feature);

            HajjSetup::create($allData);
            Session::flash('message', 'Record added successfully');

            //return back();

            return redirect()->action('Admin\HajjiController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::select('users.*','districts.bn_name as district','upazilas.bn_name as upazila')
            ->leftJoin('districts','districts.id','users.district_id')
            ->leftJoin('upazilas','upazilas.id','users.upzilla_id')
            ->find($id);

        $add['division'] = DB::table('divisions')->where('id',$user->division_id)->value('bn_name');
        $add['district'] = DB::table('districts')->where('id',$user->district_id)->value('bn_name');
        $add['upazila'] = DB::table('upazilas')->where('id',$user->upzilla_id)->value('bn_name');

        $educational_info = EducationalInfo::where('user_id',$user->id)->first();


        View::share('add',$add);
        View::share('educational_info',$educational_info);

        return view('admin.hajji.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hajj_setup = HajjSetup::find($id);

        return view('admin.hajji.edit',['hajj_setup'=>$hajj_setup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=HajjSetup::find($id);
        $user->title=$request->title;
        $user->hajj_date=$request->hajj_date;
        $user->last_date_passport=$request->last_date_passport;
        $user->status=$request->status;

        $user->push();
        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\HajjiController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\HajjiController@index');
    }





}
