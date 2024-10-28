<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Menu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Carbon\Carbon;

class MenuController extends Controller
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
        $menus = Menu::get();

        foreach($menus as $row){
            $row->parent = Menu::where('id',$row->parent_id)->value('title');
        }


        return view('admin.menu.list',['menu'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent =  Menu::where('parent_id',0)->pluck('title','id');
        return view('admin.menu.create',(['parent'=>$parent]));
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
            $allData['user_id'] = Auth::id();

            Menu::create($allData);
            Session::flash('message', 'Record added successfully');

           return back();

            //return redirect()->action('Admin\MenuController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Menu::select('menu.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'menu.role_id')
                   ->find($id);
        return view('admin.menu.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manu = Menu::find($id);
        $parent =  Menu::where('parent_id',0)->pluck('title','id');
        return view('admin.menu.edit',['menu'=>$manu,'parent'=>$parent]);
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
        $user=Menu::find($id);
        $user->title=$request->title;
        $user->link=$request->link;
        $user->target=$request->target;
        $user->priority=$request->priority;
        $user->status=$request->status;
        $user->parent_id=$request->parent_id;
        $user->has_column=$request->has_column;
        $user->position=$request->position;

        $user->push();
        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\MenuController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\MenuController@index');
    }





}
