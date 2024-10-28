<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Jobs;
use App\Models\JobsCategory;
use Session;
use Auth;
use Carbon\Carbon;

class JobsController extends Controller
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
        $jobs = Jobs::get();
        return view('admin.jobs.list',['jobs'=>$jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type =  JobsCategory::pluck('title','id');
        return view('admin.jobs.create',(['type'=>$type]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $jobs = new Jobs;

        $jobs->company=$request->company;
        $jobs->designation=$request->designation;
        $jobs->job_location=$request->job_location;
        $jobs->application_deadline=$request->application_deadline;
        $jobs->vacancy=$request->vacancy;
        $jobs->responsibilities=$request->responsibilities;
        $jobs->educational_qualification=$request->educational_qualification;
        $jobs->job_experience=$request->job_experience;
        $jobs->additional_requirements=$request->additional_requirements;
        $jobs->salary=$request->salary;
        $jobs->additional_benefits=$request->additional_benefits;
        $jobs->application_procedure=$request->application_procedure;
        $jobs->gender=$request->gender;
        $jobs->age=$request->age;
        $jobs->status=$request->status;
        $jobs->job_location=$request->job_location;
        $jobs->category_id=$request->category_id;

            $jobs->save();
            Session::flash('message', 'Record added successfully');

            //return back();

            return redirect()->action('Admin\JobsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Jobs::select('jobs.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'jobs.role_id')
                   ->find($id);
        return view('admin.jobs.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = Jobs::find($id);
        $type =  JobsCategory::pluck('title','id');

        return view('admin.jobs.edit',['jobs'=>$jobs,'type'=>$type]);
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


        $jobs=Jobs::find($id);
        $jobs->company=$request->company;
        $jobs->designation=$request->designation;
        $jobs->job_location=$request->job_location;
        $jobs->application_deadline=$request->application_deadline;
        $jobs->vacancy=$request->vacancy;
        $jobs->responsibilities=$request->responsibilities;
        $jobs->educational_qualification=$request->educational_qualification;
        $jobs->job_experience=$request->job_experience;
        $jobs->additional_requirements=$request->additional_requirements;
        $jobs->salary=$request->salary;
        $jobs->additional_benefits=$request->additional_benefits;
        $jobs->application_procedure=$request->application_procedure;
        $jobs->gender=$request->gender;
        $jobs->age=$request->age;
        $jobs->status=$request->status;
        $jobs->job_location=$request->job_location;
        $jobs->category_id=$request->category_id;

        $jobs->save();
        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\JobsController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jobs::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\JobsController@index');
    }





}
