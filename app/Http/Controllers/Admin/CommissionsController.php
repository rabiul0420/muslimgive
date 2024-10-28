<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\UsersCourseFee;
use App\Models\Training;
use App\User;
use Session;
use Auth;


class CommissionsController extends Controller
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
        $payments = UsersCourseFee::get();
        return view('admin.commissions.list',['payments'=>$payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Training::pluck('title','id');
        $users = User::where('type','Student')->pluck('name','id');
        return view('admin.commissions.create',['courses'=>$courses,'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id = $request->user_id;
        $course_id = $request->course_id;

        if (UsersCourseFee::where(['user_id'=>$user_id,'course_id'=>$course_id])->exists()) {
            $user_course_id = UsersCourseFee::where(['user_id'=>$user_id,'course_id'=>$course_id])->value('id');
        }else{
            $ucfdata['user_id'] = $user_id;
            $ucfdata['course_id'] = $request->course_id;
            $ucfdata['course_fee'] = Training::where('id',$course_id)->value('course_fee');
            $user_course = UsersCourseFee::create($ucfdata);
            $user_course_id = $user_course->id;
        }

        $paymentdata['user_course_id'] = $user_course_id;
        $paymentdata['amount'] =  $request->amount;
        $paymentdata['type'] =  'Cash';
        $paymentdata['status'] =  'Active';
        $paymentdata['payment_by'] =  Auth::id();

        commissions::create($paymentdata);


        Session::flash('message', 'Record added successfully');

            //return back();

        return redirect()->action('Admin\CommissionsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Video::select('commissions.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'commissions.role_id')
                   ->find($id);
        return view('admin.commissions.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userscoursefee = UsersCourseFee::find($id);
        $courses = Training::pluck('title','id');
        $users = User::where('type','Student')->pluck('name','id');

        return view('admin.commissions.edit',['userscoursefee'=>$userscoursefee,'courses'=>$courses,'users'=>$users]);
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


        $user=UsersCourseFee::find($id);

        $user->discount=$request->discount;

        $user->save();
        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\CommissionsController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        commissions::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect('commissions-pending');
    }



    public function payment_detail($id)
    {
        $commissions = UsersCourseFee::where('id',$id)->first();
        $commissions_detail = commissions::where('user_course_id',$commissions->id)->where('status','Active')->get();
        return view('profile/payment_detail',['commissions'=>$commissions,'commissions_detail'=>$commissions_detail]);
    }

    public function commissions_pending()
    {
        $commissions = commissions::where('status','Pending')->get();
        return view('admin.commissions.pending_commissions',['commissions'=>$commissions]);
    }








}
