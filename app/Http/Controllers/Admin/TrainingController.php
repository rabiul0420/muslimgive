<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Training;
use App\Models\Menu;
use Session;
use Auth;
use Illuminate\Support\Str;


class TrainingController extends Controller
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
        $training = Training::get();
        return view('admin.training.list',['training'=>$training]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent =  Menu::where('parent_id',0)->pluck('title','id');
        return view('admin.training.create',['parent'=>$parent]);
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
            $allData['link'] = 'training/'.Str::slug($request->title, '-');

            if ($request->file('image')){  
                $file=$request->file('image');
                $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
                $destinationPath = 'images/' ;
                $file->move($destinationPath,$fileName);
                $allData['image'] = $destinationPath.$fileName;
            }
            $training = Training::create($allData);
            

            /*menu*/
            $menuData['title'] = $training->title;
            $menuData['link'] =  $training->link;
            $menuData['status'] = ($request->is_menu=='yes')?'Active':'InActive';
            $menuData['parent_id'] = $request->parent_id;
            Menu::create($menuData);

            Session::flash('message', 'Record added successfully');

            //return back();

            return redirect()->action('Admin\TrainingController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Training::select('training.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'training.role_id')
                   ->find($id);
        return view('admin.training.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $training = Training::find($id);
        $menu = Menu::where('link',$training->link)->first();
        $parent =  Menu::where('parent_id',0)->pluck('title','id');

        return view('admin.training.edit',['training'=>$training,'menu'=>$menu,'parent'=>$parent]);
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


        $user=Training::find($id);
        $link = Training::where('id',$id)->value('link');
        $user->title=$request->title;
        $user->course_fee=$request->course_fee;
        $user->image=$request->image;
        $user->starting_date=$request->starting_date;
        $user->duration=$request->duration;
        $user->course_materials=$request->course_materials;
        $user->status=$request->status;
        $user->link = 'training/'.Str::slug($request->title, '-');

        if ($request->file('image')){
            $file=$request->file('image');
            $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
            $destinationPath = 'images/' ;
            $file->move($destinationPath,$fileName);
            $image = $destinationPath.$fileName;
            $user->image=$image;
        }

        $user->push();


        $menu = Menu::where('link',$link)->first();

        if($menu){
            $menuData = array(
                'title' => $request->title,
                'link' => 'training/'.Str::slug($request->title, '-'),
                'status' => ($request->is_menu=='yes')?'Active':'InActive',
                'parent_id' => $request->parent_id,
            );
            Menu::where('link',$link)->update($menuData);
        }else{
            $menuData['title'] = $request->title;
            $menuData['link'] =  'training/'.Str::slug($request->title, '-');
            $menuData['status'] = ($request->is_menu=='yes')?'Active':'InActive';
            $menuData['parent_id'] = $request->parent_id;
            Menu::create($menuData);
        }

        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\TrainingController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Training::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\TrainingController@index');
    }





}
