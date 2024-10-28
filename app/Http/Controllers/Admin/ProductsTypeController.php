<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\ProductsType;
use App\Models\Menu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductsTypeController extends Controller
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
        $products_type = ProductsType::get();
        return view('admin.products_type.list',['products_type'=>$products_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $templates = DB::table('templates')->pluck('title','page_name');
        $parent =  Menu::pluck('title','id');
        return view('admin.products_type.create',(['templates'=>$templates,'parent'=>$parent]));
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
            $allData['link'] = 'product/'.Str::slug($request->title, '-');
            $sponsor_type = ProductsType::create($allData);

                            /*menu*/
            $menuData['title'] = $sponsor_type->title;
            $menuData['link'] =  $sponsor_type->link;
            $menuData['status'] = ($request->is_menu=='yes')?'Active':'InActive';
            $menuData['parent_id'] = $request->parent_id;
            Menu::create($menuData);

            Session::flash('message', 'Record added successfully');

            return redirect()->action('Admin\ProductsTypeController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products_type=ProductsType::select('products_type.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'products_type.role_id')
                   ->find($id);
        return view('admin.products_type.show',['user'=>$products_type]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products_type = ProductsType::find($id);

        $menu = Menu::where('link',$products_type->link)->first();
        $parent =  Menu::pluck('title','id');
        $templates = DB::table('templates')->pluck('title','page_name');


        return view('admin.products_type.edit',['products_type'=>$products_type,'templates'=>$templates,'parent'=>$parent,'menu'=>$menu]);
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

        $products_type=ProductsType::find($id);

        $link = ProductsType::where('id',$id)->value('link');

        $products_type->title = $request->title;
        $products_type->short_description = $request->short_description;
        $products_type->image = $request->image;
        $products_type->link = 'product/'.Str::slug($request->title, '-');

        $products_type->push();

        $menu = Menu::where('link',$link)->first();

        if($menu){
            $menuData = array(
                'title' => $request->title,
                'link' => 'product/'.Str::slug($request->title, '-'),
                'status' => ($request->is_menu=='yes')?'Active':'InActive',
                'parent_id' => $request->parent_id,
            );
            Menu::where('link',$link)->update($menuData);
        }else{
            $menuData['title'] = $request->title;
            $menuData['link'] =  'product/'.Str::slug($request->title, '-');
            $menuData['status'] = ($request->is_menu=='yes')?'Active':'InActive';
            $menuData['parent_id'] = $request->parent_id;
            Menu::create($menuData);
        }



        Session::flash('message', 'Record uddated successfully');



        $products_type=ProductsType::find($id);
        $products_type->title=$request->title;

        $products_type->push();
        Session::flash('message', 'Record uddated successfully');

        return redirect()->action('Admin\ProductsTypeController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductsType::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\ProductsTypeController@index');
    }





}
