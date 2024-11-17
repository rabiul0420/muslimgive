<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\CharityCommunicationLogs;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Session;
use Auth;


class CharityCommunicationLogsController extends Controller
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
        $charity_profile = CharityCommunicationLogs::get();
        return view('admin.charity_communication_logs.list',['charity_communication_logs'=>$charity_profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries =  DB::table('country')->pluck('name','id');
        return view('admin.charity_communication_logs.create',compact('countries'));
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



        $Charity =   CharityCommunicationLogs::create($allData);

        $id = $Charity->id;


        Session::flash('message', 'Record added successfully');

        return redirect()->action('Admin\CharityCommunicationLogsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=CharityCommunicationLogs::select('charity_communication_logs.*','role.name as role_title')
                   ->join('role', 'role.id', '=', 'charity_communication_logs.role_id')
                   ->find($id);
        return view('admin.charity_communication_logs.show',['user'=>$user]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $charity_profile = CharityCommunicationLogs::find($id);
        $countries =  DB::table('country')->pluck('name','id');
        return view('admin.charity_communication_logs.edit',compact('charity_communication_logs','countries'));
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
        $CharityProfile = CharityCommunicationLogs::find($id);
        $CharityProfile->title=$request->title;
        $CharityProfile->ceo=$request->ceo;
        $CharityProfile->website=$request->website;
        $CharityProfile->link_to_cra_return=$request->link_to_cra_return;
        $CharityProfile->fiscal_year_end=$request->fiscal_year_end;
        $CharityProfile->auditors = $request->auditors;
        $CharityProfile->charitable_reg_since = $request->charitable_reg_since;
        $CharityProfile->notes=$request->notes;
        $CharityProfile->country_id= $request->country_id;
        if ($request->file('logo')){
            $file=$request->file('logo');
            $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
            $destinationPath = 'images/' ;
            $file->move($destinationPath,$fileName);
            $image = $destinationPath.$fileName;
            $CharityProfile->logo=$image;
        }
        $CharityProfile->push();

        $Charity_ca1 = CharityCa1::where('charity_id',$id)->first();
        if(empty($Charity_ca1)){
            $Charity_ca1 = new CharityCa1;
        }
        $Charity_ca1->charity_id = $id;
        $Charity_ca1->ca1_registerd = json_encode($request->ca1_registerd);
        $Charity_ca1->push();

        $Charity_ca2 = CharityCa2::where('charity_id',$id)->first();
        if(empty($Charity_ca2)){
            $Charity_ca2 = new CharityCa2;
        }
        $Charity_ca2->charity_id = $id;
        $Charity_ca2->adt_fn_st_av = json_encode($request->adt_fn_st_av);
        $Charity_ca2->py_adt_fn_st_av = json_encode($request->py_adt_fn_st_av);
        $Charity_ca2->imp_epr_avl_wfi_inf = json_encode($request->imp_epr_avl_wfi_inf);
        $Charity_ca2->ch_pr_qd_of_r = json_encode($request->ch_pr_qd_of_r);
        $Charity_ca2->fundraising_of_revenue = json_encode($request->fundraising_of_revenue);
        $Charity_ca2->Administrative_of_rv = json_encode($request->Administrative_of_rv);
        $Charity_ca2->percent_of_revenue_spent_per_year = json_encode($request->percent_of_revenue_spent_per_year);
        $Charity_ca2->no_of_months_to_spend_the_reserve = json_encode($request->no_of_months_to_spend_the_reserve);
        $Charity_ca2->transparency_20 = json_encode($request->transparency_20);
        $Charity_ca2->Cause_Spending_vs_other_spending_60 = json_encode($request->Cause_Spending_vs_other_spending_60);
        $Charity_ca2->distribution_vs_accumulation_20 = json_encode($request->distribution_vs_accumulation_20);
        $Charity_ca2->imp_epr_avl_wfi_inf = json_encode($request->imp_epr_avl_wfi_inf);
        $Charity_ca2->push();

        $Charity_ca3 = CharityCa3::where('charity_id',$id)->first();
        if(empty($Charity_ca3)){
            $Charity_ca3 = new CharityCa3;
        }
        $Charity_ca3->charity_id = $id;
        $Charity_ca3->zak_pol_cle_lab_and_acc = json_encode($request->zak_pol_cle_lab_and_acc);
        $Charity_ca3->who_mak_up_gov_boa = json_encode($request->who_mak_up_gov_boa);
        $Charity_ca3->shariah_advisory_board = json_encode($request->shariah_advisory_board);
        $Charity_ca3->nam_of_sha_adv_boa_lis = json_encode($request->nam_of_sha_adv_boa_lis);
        $Charity_ca3->ex_of_co_with_re_set_out_by_ca = json_encode($request->ex_of_co_with_re_set_out_by_ca);
        $Charity_ca3->exp_why_zak_fun_are_col_and_dis = json_encode($request->exp_why_zak_fun_are_col_and_dis);
        $Charity_ca3->exp_of_what_cha_of_cus_is_from_rec_zak = json_encode($request->exp_of_what_cha_of_cus_is_from_rec_zak);
        $Charity_ca3->zakat_funds_kept_separate = json_encode($request->zakat_funds_kept_separate);
        $Charity_ca3->tur_time_for_zak_dis_sha = json_encode($request->tur_time_for_zak_dis_sha);
        $Charity_ca3->mention_of_zakat_to_minors = json_encode($request->mention_of_zakat_to_minors);
        $Charity_ca3->vet_pro_for_zak_fun_app = json_encode($request->vet_pro_for_zak_fun_app);
        $Charity_ca3->me_of_whe_zak_is_dis_in_cash_or_oth_for = json_encode($request->me_of_whe_zak_is_dis_in_cash_or_oth_for);
        $Charity_ca3->internal_external_audit = json_encode($request->internal_external_audit);
        $Charity_ca3->mention_of_zakat_elibility_formula = json_encode($request->mention_of_zakat_elibility_formula);
        $Charity_ca3->zakat_calculator = json_encode($request->zakat_calculator);
        $Charity_ca3->men_of_zak_adm_cost_amo = json_encode($request->men_of_zak_adm_cost_amo);
        $Charity_ca3->public_fundrasing_costs = json_encode($request->public_fundrasing_costs);
        $Charity_ca3->zakat_education_bank = json_encode($request->zakat_education_bank);
        $Charity_ca3->live_zakat_calculation_support = json_encode($request->live_zakat_calculation_support);
        $Charity_ca3->for_app_on_zak_cam = json_encode($request->for_app_on_zak_cam);
        $Charity_ca3->clear_public_zakat_policy = json_encode($request->clear_public_zakat_policy);
        $Charity_ca3->zak_und_ove_1_lun_yea = json_encode($request->zak_und_ove_1_lun_yea);
        $Charity_ca3->exp_of_the_cat_of_fu = json_encode($request->exp_of_the_cat_of_fu);
        $Charity_ca3->exp_of_the_cat_of_mas = json_encode($request->exp_of_the_cat_of_mas);
        $Charity_ca3->exp_of_the_cat_of_ami_ala = json_encode($request->exp_of_the_cat_of_ami_ala);
        $Charity_ca3->exp_of_the_cat_of_al_mua_qul = json_encode($request->exp_of_the_cat_of_al_mua_qul);
        $Charity_ca3->exp_of_the_cat_of_fi_ar_ri = json_encode($request->exp_of_the_cat_of_fi_ar_ri);
        $Charity_ca3->exp_of_the_cat_of_al_gh = json_encode($request->exp_of_the_cat_of_al_gh);
        $Charity_ca3->xap_of_the_cat_of_fi_sab = json_encode($request->xap_of_the_cat_of_fi_sab);
        $Charity_ca3->push();

        $Charity_ca4 = CharityCa4::where('charity_id',$id)->first();
        if(empty($Charity_ca4)){
            $Charity_ca4 = new CharityCa4;
        }

        $board_members_names_listed = $request->board_members_names_listed;
        if($board_members_names_listed['status']=='No'){
            $board_members_names_listed['score'] = 0;
        }

        $board_members_photos_listed = $request->board_members_photos_listed;
        if($board_members_photos_listed['status']=='No'){
            $board_members_photos_listed['score'] = 0;
        }

        $board_members_at_arms_length = $request->board_members_at_arms_length;
        if($board_members_at_arms_length['status']=='No'){
            $board_members_at_arms_length['score'] = 0;
        }

        $leadership_team_names = $request->leadership_team_names;
        if($leadership_team_names['status']=='No'){
            $leadership_team_names['score'] = 0;
        }

        $leadership_team_photos = $request->leadership_team_photos;
        if($leadership_team_photos['status']=='No'){
            $leadership_team_photos['score'] = 0;
        }
      ;

        $Charity_ca4->charity_id = $id;
        $Charity_ca4->board_members_names_listed = json_encode($board_members_names_listed);
        $Charity_ca4->board_members_photos_listed = json_encode($board_members_photos_listed);
        $Charity_ca4->board_members_at_arms_length = json_encode($board_members_at_arms_length);
        $Charity_ca4->leadership_team_names = json_encode($leadership_team_names);
        $Charity_ca4->leadership_team_photos = json_encode($leadership_team_photos);
        $Charity_ca4->push();


        Session::flash('message', 'Record uddated successfully');

        return back();

        //return redirect()->action('Admin\CharityCommunicationLogsController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CharityCommunicationLogs::destroy($id); // 1 way
        Session::flash('message', 'Record deleted successfully');
        return redirect()->action('Admin\CharityCommunicationLogsController@index');
    }





}
