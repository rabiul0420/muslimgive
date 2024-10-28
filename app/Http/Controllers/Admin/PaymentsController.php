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


class PaymentsController extends Controller
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
        foreach($payments as $payment){
            $payment->total_amount = Payments::where('user_course_id',$payment->id)->where('status','Active')->sum('amount');
        }

        return view('admin.payments.list',['payments'=>$payments]);
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
        return view('admin.payments.create',['courses'=>$courses,'users'=>$users]);
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

        Payments::create($paymentdata);


        Session::flash('message', 'Record added successfully');

            //return back();

        return redirect()->action('Admin\PaymentsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Video::select('payments.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'payments.role_id')
                   ->find($id);
        return view('admin.payments.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payments = Payments::find($id);
        $courses = Training::pluck('title','id');
        $users = User::where('type','Student')->pluck('name','id');

        return view('admin.payments.edit',['payments'=>$payments,'courses'=>$courses,'users'=>$users]);
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


        $user=Payments::find($id);

        $user->status=$request->status;
        $paymentdata['update_by'] =  Auth::id();

        $user->save();
        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\PaymentsController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Payments::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect('payments-pending');
    }



    public function payment_detail($id)
    {
        $payments = UsersCourseFee::where('id',$id)->first();
        $payments_detail = Payments::where('user_course_id',$payments->id)->where('status','Active')->get();
        return view('profile/payment_detail',['payments'=>$payments,'payments_detail'=>$payments_detail]);
    }

    public function payments_pending()
    {
        $payments = Payments::where('status','Pending')->get();
        return view('admin.payments.pending_payments',['payments'=>$payments]);
    }








}
