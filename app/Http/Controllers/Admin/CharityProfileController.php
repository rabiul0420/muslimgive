<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\CharityCa1Ca2;
use App\Models\CharityCa3;
use Illuminate\Http\Request;

use App\Models\CharityProfile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Carbon\Carbon;

class CharityProfileController extends Controller
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
        $charity_profile = CharityProfile::get();
        return view('admin.charity_profile.list',['charity_profile'=>$charity_profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.charity_profile.create');
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
            if ($request->file('logo')){
                $file=$request->file('logo');
                $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
                $destinationPath = 'images/' ;
                $file->move($destinationPath,$fileName);
                $allData['logo'] = $destinationPath.$fileName;
            }

            CharityProfile::create($allData);



            Session::flash('message', 'Record added successfully');
            return redirect()->action('Admin\CharityProfileController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=CharityProfile::select('charity_profile.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'charity_profile.role_id')
                   ->find($id);
        return view('admin.charity_profile.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $charity_profile = CharityProfile::find($id);

        return view('admin.charity_profile.edit',['charity_profile'=>$charity_profile]);
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


        $CharityProfile = CharityProfile::find($id);
        $CharityProfile->title=$request->title;
        $CharityProfile->website=$request->website;
        $CharityProfile->link_to_cra_return=$request->link_to_cra_return;
        $CharityProfile->fiscal_year_end=$request->fiscal_year_end;
        $CharityProfile->auditors = $request->auditors;
        $CharityProfile->charitable_reg_since = $request->charitable_reg_since;
        $CharityProfile->notes=$request->notes;
        if ($request->file('logo')){
            $file=$request->file('logo');
            $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
            $destinationPath = 'images/' ;
            $file->move($destinationPath,$fileName);
            $image = $destinationPath.$fileName;
            $CharityProfile->logo=$image;
        }
        $CharityProfile->push();

        $Charity_ca1_ca2 = CharityCa1Ca2::where('charity_id',$id)->first();
        $Charity_ca1_ca2->ca1_registerd = $request->ca1_registerd;

        $Charity_ca1_ca2->push();

        $Charity_ca3 = CharityCa3::where('charity_id',$id)->first();
        $Charity_ca3->ca1_registerd = $request->ca1_registerd;

        $Charity_ca3->push();


        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\CharityProfileController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CharityProfile::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\CharityProfileController@index');
    }





}
