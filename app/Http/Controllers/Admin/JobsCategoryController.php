<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\JobsCategory;
use App\Models\Menu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JobsCategoryController extends Controller
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
        $jobs_category = JobsCategory::get();
        return view('admin.jobs_category.list',['jobs_category'=>$jobs_category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs_category.create');
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
            JobsCategory::create($allData);

            Session::flash('message', 'Record added successfully');

            return redirect()->action('Admin\JobsCategoryController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs_category=JobsCategory::select('jobs_category.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'jobs_category.role_id')
                   ->find($id);
        return view('admin.jobs_category.show',['user'=>$jobs_category]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs_category = JobsCategory::find($id);

        return view('admin.jobs_category.edit',['jobs_category'=>$jobs_category]);
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

        $jobs_category=JobsCategory::find($id);
        $jobs_category->title = $request->title;

        $jobs_category->save();


        Session::flash('message', 'Record uddated successfully');


        return redirect()->action('Admin\JobsCategoryController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobsCategory::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\JobsCategoryController@index');
    }





}
