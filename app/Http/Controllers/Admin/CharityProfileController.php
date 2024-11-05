<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\CharityCa1Ca2;
use App\Models\CharityCa3;
use App\Models\CharityCa4;
use Illuminate\Http\Request;

use App\Models\Charity;
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
        $charity_profile = Charity::get();
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
        $Charity =   Charity::create($allData);

        $id = $Charity->id;

        $Charity_ca1_ca2 = CharityCa1Ca2::where('charity_id',$id)->first();
        if(empty($Charity_ca1_ca2)){
            $Charity_ca1_ca2 = new CharityCa1Ca2;
        }
        $Charity_ca1_ca2->charity_id = $id;
        $Charity_ca1_ca2->imp_epr_avl_wfi_inf = json_encode($request->imp_epr_avl_wfi_inf);
        $Charity_ca1_ca2->push();

        $Charity_ca3 = CharityCa3::where('charity_id',$id)->first();
        if(empty($Charity_ca3)){
            $Charity_ca3 = new CharityCa3;
        }
        $Charity_ca3->charity_id = $id;
        $Charity_ca3->zak_pol_cle_lab_and_acc = json_encode($request->zak_pol_cle_lab_and_acc);
        $Charity_ca1_ca2->push();

        $Charity_ca4 = CharityCa4::where('charity_id',$id)->first();
        if(empty($Charity_ca4)){
            $Charity_ca4 = new CharityCa4;  
        }
        $Charity_ca4->charity_id = $id;
        $Charity_ca4->leadership_team_names = json_encode($request->leadership_team_names);
        $Charity_ca4->board_members_names_listed = json_encode($request->board_members_names_listed);
        $Charity_ca4->push();

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
        $user=Charity::select('charity_profile.*','role.name as role_title')
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
        
        $charity_profile = Charity::find($id);

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
        $CharityProfile = Charity::find($id);
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
        if(empty($Charity_ca1_ca2)){
            $Charity_ca1_ca2 = new CharityCa1Ca2;
        }
        $Charity_ca1_ca2->charity_id = $id;
        $Charity_ca1_ca2->imp_epr_avl_wfi_inf = json_encode($request->imp_epr_avl_wfi_inf);
        $Charity_ca1_ca2->push();

        $Charity_ca3 = CharityCa3::where('charity_id',$id)->first();
        if(empty($Charity_ca3)){
            $Charity_ca3 = new CharityCa3;
        }
        $Charity_ca3->charity_id = $id;
        $Charity_ca3->xap_of_the_cat_of_fi_sab = json_encode($request->xap_of_the_cat_of_fi_sab);
        $Charity_ca3->zak_pol_cle_lab_and_acc = json_encode($request->zak_pol_cle_lab_and_acc);
        $Charity_ca3->push();

        $Charity_ca4 = CharityCa4::where('charity_id',$id)->first();
        if(empty($Charity_ca4)){
            $Charity_ca4 = new CharityCa4;
        }
        $Charity_ca4->charity_id = $id;
        $Charity_ca4->board_members_names_listed = json_encode($request->board_members_names_listed);
        $Charity_ca4->board_members_photos_listed = json_encode($request->board_members_photos_listed);
        $Charity_ca4->board_members_at_arms_length = json_encode($request->board_members_at_arms_length);
        $Charity_ca4->leadership_team_names = json_encode($request->leadership_team_names);
        $Charity_ca4->leadership_team_photos = json_encode($request->leadership_team_photos);
        $Charity_ca4->push();


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
        Charity::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\CharityProfileController@index');
    }





}
