<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\ServiceType;
use App\Models\Menu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ServiceTypeController extends Controller
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
        $service_type = ServiceType::get();
        return view('admin.service_type.list',['service_type'=>$service_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent =  Menu::pluck('title','id');
        return view('admin.service_type.create',(['parent'=>$parent]));
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
            $allData['link'] = 'service/'.Str::slug($request->title, '-');
            $sponsor_type = ServiceType::create($allData);

                            /*menu*/
            $menuData['title'] = $sponsor_type->title;
            $menuData['link'] =  $sponsor_type->link;
            $menuData['status'] = ($request->is_menu=='yes')?'Active':'InActive';
            $menuData['parent_id'] = $request->parent_id;
            Menu::create($menuData);

            Session::flash('message', 'Record added successfully');

            return redirect()->action('Admin\ServiceTypeController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service_type=ServiceType::select('service_type.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'service_type.role_id')
                   ->find($id);
        return view('admin.service_type.show',['user'=>$service_type]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_type = ServiceType::find($id);

        $menu = Menu::where('link',$service_type->link)->first();
        $parent =  Menu::pluck('title','id');
        $templates = DB::table('templates')->pluck('title','page_name');


        return view('admin.service_type.edit',['service_type'=>$service_type,'templates'=>$templates,'parent'=>$parent,'menu'=>$menu]);
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

        $service_type=ServiceType::find($id);
        $link = ServiceType::where('id',$id)->value('link');
        $service_type->title = $request->title;
        $service_type->short_description = $request->short_description;
        $service_type->image = $request->image;
        $service_type->link = 'service/'.Str::slug($request->title, '-');

        $service_type->push();

        $menu = Menu::where('link',$link)->first();

        if($menu){
            $menuData = array(
                'title' => $request->title,
                'link' => 'sponsor/'.Str::slug($request->title, '-'),
                'status' => ($request->is_menu=='yes')?'Active':'InActive',
                'parent_id' => $request->parent_id,
            );
            Menu::where('link',$link)->update($menuData);
        }else{
            $menuData['title'] = $request->title;
            $menuData['link'] =  'sponsor/'.Str::slug($request->title, '-');
            $menuData['status'] = ($request->is_menu=='yes')?'Active':'InActive';
            $menuData['parent_id'] = $request->parent_id;
            Menu::create($menuData);
        }



        Session::flash('message', 'Record uddated successfully');



        $service_type=ServiceType::find($id);
        $service_type->title=$request->title;

        $service_type->push();
        Session::flash('message', 'Record uddated successfully');

        return redirect()->action('Admin\ServiceTypeController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceType::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\ServiceTypeController@index');
    }





}
