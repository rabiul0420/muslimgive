<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Carbon\Carbon;

class ProductsController extends Controller
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
        $products = Products::select('product.id','product.logo','product.title','product.status','product_type.title as type')->join('product_type','product_type.id','product.product_type_id')->get();
        return view('admin.products.list',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type =  DB::table('product_type')->pluck('title','id');
        return view('admin.products.create',(['type'=>$type]));
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

            Products::create($allData);
            Session::flash('message', 'Record added successfully');

            //return back();

            return redirect()->action('Admin\ProductsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Products::select('products.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'products.role_id')
                   ->find($id);
        return view('admin.products.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        $type =  DB::table('product_type')->pluck('title','id');

        return view('admin.products.edit',['products'=>$products,'type'=>$type]);
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


        $user=Products::find($id);
        $user->title=$request->title;
        $user->description=$request->description;
        $user->status=$request->status;
        if ($request->file('logo')){
            $file=$request->file('logo');
            $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
            $destinationPath = 'images/' ;
            $file->move($destinationPath,$fileName);
            $image = $destinationPath.$fileName;
            $user->logo=$image;
        }
        $user->product_type_id=$request->product_type_id;

        $user->push();
        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\ProductsController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\ProductsController@index');
    }





}
