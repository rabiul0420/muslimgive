@extends('admin.layouts.app')

@section('content')

    <div id="main" role="main">
        <div id="ribbon">
				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>
            <ol class="breadcrumb">
                <li>Home</li><li>Edit Charity Profile</li>
            </ol>
        </div>

        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Edit Charity Profile
                    </h1>
                </div>
            </div>

            @if(Session::has('message'))
                <div class="allert-message alert-success-message pgray  alert-lg" role="alert">
                    <p class=""> {{ Session::get('message') }}</p>
                </div>
            @endif


            <!-- widget grid -->
            <section id="widget-grid" class="">

                <article class="">
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Edit Charity Profile </h2>
                        </header>
                        <div>
                            <div class="widget-body">
                                {!! Form::open(['action'=>['Admin\CharityProfileController@update',$charity_profile->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="form-group">
                                            <label class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="{{$charity_profile->title}}" required name="title">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3">CEO</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="{{$charity_profile->ceo}}" required name="ceo">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3">Website</label>
                                            <div class="col-md-9">
                                                <input type="url" value="{{$charity_profile->website}}" class="form-control" required name="website">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3">Link To CRA Return</label>
                                            <div class="col-md-9">
                                                <input type="url" value="{{$charity_profile->link_to_cra_return}}" class="form-control" required name="link_to_cra_return">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3">Auditors</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$charity_profile->auditors}}" class="form-control" required name="auditors">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3">Fiscal Year End</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$charity_profile->fiscal_year_end}}" class="form-control" required name="fiscal_year_end">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="col-md-3">Notes</p>
                                            <div class="col-md-9">
                                                <textarea  rows="5" name="notes" class="custom-scroll form-control">{{$charity_profile->notes}}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3">Country</label>
                                            @php $countries->prepend('Select Country','')  @endphp
                                            <div class="col-md-9">
                                                {!! Form::select('country_id', $countries, $charity_profile->country_id,['class'=>'form-control']) !!}<i></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <img id="holder_image" src="{{asset($charity_profile->logo)}}" style="margin-top:15px;margin-bottom:5px;max-width:100%;">
                                            @php $file_array = explode('/',$charity_profile->logo); @endphp

                                            <div class="input-group">
                                                <tr>
                                                    <button><input type="file" name="logo" id="fileToUpload"></button>
                                                </tr>
                                                <input id="thumbnail_image" class="form-control" type="hidden" value="{{$charity_profile->logo}}" name="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4>CORE AREA - 1 CHARITY STATUS</h4>
                                @php $ca1_registerd = json_decode($charity_profile->charity_ca1->ca1_registerd); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Registered</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('ca1_registerd[status]', ['Active' => 'Active','InActive' => 'InActive'], $ca1_registerd->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="ca1_registerd[score]"  value="{{ $ca1_registerd->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="ca1_registerd[target]"  value="{{ $ca1_registerd->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                <br>

                                <h4>CORE AREA - 2 FINANCIAL ACCOUNTABILITY</h4>
                                @php $adt_fn_st_av = json_decode($charity_profile->charity_ca2->adt_fn_st_av); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Audited Financial Statements Available? </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('adt_fn_st_av[status]', ['Active' => 'Active','InActive' => 'InActive'], $adt_fn_st_av->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="adt_fn_st_av[score]"  value="{{ $adt_fn_st_av->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="adt_fn_st_av[target]"  value="{{ $adt_fn_st_av->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $py_adt_fn_st_av = json_decode($charity_profile->charity_ca2->py_adt_fn_st_av); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">P.Y. Audited Financial Statements Available? </h5>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('py_adt_fn_st_av[status]', ['Active' => 'Active','InActive' => 'InActive'], $py_adt_fn_st_av->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="py_adt_fn_st_av[score]"  value="{{ $py_adt_fn_st_av->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="py_adt_fn_st_av[target]"  value="{{ $py_adt_fn_st_av->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $imp_epr_avl_wfi_inf = json_decode($charity_profile->charity_ca2->imp_epr_avl_wfi_inf); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Impact Report Available W. Financial Info? </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('imp_epr_avl_wfi_inf[status]', ['Active' => 'Active','InActive' => 'InActive'], $imp_epr_avl_wfi_inf->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="imp_epr_avl_wfi_inf[score]"  value="{{ $imp_epr_avl_wfi_inf->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="imp_epr_avl_wfi_inf[target]"  value="{{ $imp_epr_avl_wfi_inf->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $ch_pr_qd_of_r	 = json_decode($charity_profile->charity_ca2->ch_pr_qd_of_r	); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Charitable Program + Qd - % Of Revenue </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Amount</label>
                                        <input type="number" name="ch_pr_qd_of_r[amount]"  value="{{ $ch_pr_qd_of_r->amount??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="ch_pr_qd_of_r[score]"  value="{{ $ch_pr_qd_of_r->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="ch_pr_qd_of_r[target]"  value="{{ $ch_pr_qd_of_r->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $fundraising_of_revenue = json_decode($charity_profile->charity_ca2->fundraising_of_revenue); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Fundraising - % Of Revenue </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Amount</label>
                                        <input type="number" name="fundraising_of_revenue[amount]"  value="{{ $fundraising_of_revenue->amount??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="fundraising_of_revenue[score]"  value="{{ $fundraising_of_revenue->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="fundraising_of_revenue[target]"  value="{{ $fundraising_of_revenue->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $Administrative_of_rv = json_decode($charity_profile->charity_ca2->Administrative_of_rv); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Administrative - % Of Revenue </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Amount</label>
                                        <input type="number" name="Administrative_of_rv[amount]"  value="{{ $Administrative_of_rv->amount??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="Administrative_of_rv[score]"  value="{{ $Administrative_of_rv->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="Administrative_of_rv[target]"  value="{{ $Administrative_of_rv->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $percent_of_revenue_spent_per_year = json_decode($charity_profile->charity_ca2->percent_of_revenue_spent_per_year); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">% Of Revenue Spent Per Year </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Amount</label>
                                        <input type="number" name="percent_of_revenue_spent_per_year[amount]"  value="{{ $percent_of_revenue_spent_per_year->amount??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="percent_of_revenue_spent_per_year[score]"  value="{{ $percent_of_revenue_spent_per_year->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="percent_of_revenue_spent_per_year[target]"  value="{{ $percent_of_revenue_spent_per_year->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $no_of_months_to_spend_the_reserve = json_decode($charity_profile->charity_ca2->no_of_months_to_spend_the_reserve); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">No. Of Months To Spend The Reserve </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Months</label>
                                        <input type="number" name="no_of_months_to_spend_the_reserve[months]"  value="{{ $no_of_months_to_spend_the_reserve->months??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="no_of_months_to_spend_the_reserve[score]"  value="{{ $no_of_months_to_spend_the_reserve->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="no_of_months_to_spend_the_reserve vsterd[target]" value="{{ $no_of_months_to_spend_the_reserve->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $transparency_20 = json_decode($charity_profile->charity_ca2->transparency_20); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Transparency (20%) </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Amount</label>
                                        <input type="number" name="transparency_20[amount]"  value="{{ $transparency_20->amount??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="transparency_20[score]"  value="{{ $transparency_20->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="transparency_20[target]"  value="{{ $transparency_20->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $Cause_Spending_vs_other_spending_60 = json_decode($charity_profile->charity_ca2->Cause_Spending_vs_other_spending_60); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Cause Spending Vs. Other Spending (60%) </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Amount</label>
                                        <input type="number" name="Cause_Spending_vs_other_spending_60[amount]" value="{{ $Cause_Spending_vs_other_spending_60->amount??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="Cause_Spending_vs_other_spending_60[score]" value="{{ $Cause_Spending_vs_other_spending_60->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="Cause_Spending_vs_other_spending_60[target]" value="{{ $Cause_Spending_vs_other_spending_60->ore??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $distribution_vs_accumulation_20 = json_decode($charity_profile->charity_ca2->distribution_vs_accumulation_20); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Distribution Vs Accumulation (20%)  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Amount</label>
                                        <input type="number" name="distribution_vs_accumulation_20[amount]" value="{{ $distribution_vs_accumulation_20->amount??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="distribution_vs_accumulation_20[score]" value="{{ $distribution_vs_accumulation_20->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="distribution_vs_accumulation_20[target]" value="{{ $distribution_vs_accumulation_20->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                <br>

                                <h4>CORE AREA - 3 ZAKAT POLICY COMPLIANCE</h4>
                                @php $zak_pol_cle_lab_and_acc = json_decode($charity_profile->charity_ca3->zak_pol_cle_lab_and_acc); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Zakat policy clearly labeled and accessible  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('zak_pol_cle_lab_and_acc[status]', ['Active' => 'Active','InActive' => 'InActive'], $zak_pol_cle_lab_and_acc->status??'' ,['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="zak_pol_cle_lab_and_acc[score]" value="{{ $zak_pol_cle_lab_and_acc->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="zak_pol_cle_lab_and_acc[target]" value="{{ $zak_pol_cle_lab_and_acc->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $who_mak_up_gov_boa = json_decode($charity_profile->charity_ca3->who_mak_up_gov_boa); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Who makes up governing board  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('who_mak_up_gov_boa[status]', ['Active' => 'Active','InActive' => 'InActive'],  $who_mak_up_gov_boa->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="who_mak_up_gov_boa[score]" value="{{ $who_mak_up_gov_boa->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="who_mak_up_gov_boa[target]" value="{{ $leaderwho_mak_up_gov_boaship_team_photos->stargetcore??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $nam_of_sha_adv_boa_lis = json_decode($charity_profile->charity_ca3->nam_of_sha_adv_boa_lis); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Names of Shariah Advisory board listed </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select(' [status]', ['Active' => 'Active','InActive' => 'InActive'], $nam_of_sha_adv_boa_lis->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="nam_of_sha_adv_boa_lis[score]" value="{{ $nam_of_sha_adv_boa_lis->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="nam_of_sha_adv_boa_lis[target]" value="{{ $nam_of_sha_adv_boa_lis->target??'' }}" class="form-control" id="zip">
                                    </div>
                                    
                                </div>

                                @php $ex_of_co_with_re_set_out_by_ca = json_decode($charity_profile->charity_ca3->ex_of_co_with_re_set_out_by_ca); @endphp
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanaition of compliance with regulations
                                            set out by Canadian government and CRA </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('ex_of_co_wshariah_advisory_board	ith_re_set_out_by_ca[status]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="ex_of_co_with_re_set_out_by_ca[score]" value="{{ $ex_of_co_with_re_set_out_by_ca->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="ex_of_co_with_re_set_out_by_ca[target]" value="{{ $ex_of_co_with_re_set_out_by_ca->target??'' }}" class="form-control" id="zip">
                                    </div>


                                    @php $exp_why_zak_fun_are_col_and_dis = json_decode($charity_profile->charity_ca3->exp_why_zak_fun_are_col_and_dis); @endphp
                                </div><div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanation why zakat funds are collected
                                            and distributed </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_why_zak_fun_are_col_and_dis[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_why_zak_fun_are_col_and_dis->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="ex_of_co_with_re_set_out_by_ca[score]" value="{{ $exp_why_zak_fun_are_col_and_dis->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_why_zak_fun_are_col_and_dis[target]" value="{{ $exp_why_zak_fun_are_col_and_dis->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $exp_of_what_cha_of_cus_is_from_rec_zak = json_decode($charity_profile->charity_ca3->exp_of_what_cha_of_cus_is_from_rec_zak); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanation of what chain of custody is from
                                            receiving zakat passing to recicipent </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_of_what_cha_of_cus_is_from_rec_zak[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_of_what_cha_of_cus_is_from_rec_zak->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="exp_of_what_cha_of_cus_is_from_rec_zak[score]" value="{{ $exp_of_what_cha_of_cus_is_from_rec_zak->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_of_what_cha_of_cus_is_from_rec_zak[target]" value="{{ $exp_of_what_cha_of_cus_is_from_rec_zak->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $zakat_funds_kept_separate = json_decode($charity_profile->charity_ca3->zakat_funds_kept_separate); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Zakat funds kept separate </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('zakat_funds_kept_separate[status]', ['Active' => 'Active','InActive' => 'InActive'], $zakat_funds_kept_separate->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="zakat_funds_kept_separate[score]" value="{{ $zakat_funds_kept_separate->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="zakat_funds_kept_separate[target]" value="{{ $zakat_funds_kept_separate->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $tur_time_for_zak_dis_sha = json_decode($charity_profile->charity_ca3->tur_time_for_zak_dis_sha); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Turnaround time for zakat distrution shared </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('tur_time_for_zak_dis_sha[status]', ['Active' => 'Active','InActive' => 'InActive'], $tur_time_for_zak_dis_sha->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="tur_time_for_zak_dis_sha[score]" value="{{ $tur_time_for_zak_dis_sha->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="tur_time_for_zak_dis_sha[target]" value="{{ $tur_time_for_zak_dis_sha->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $mention_of_zakat_to_minors = json_decode($charity_profile->charity_ca3->mention_of_zakat_to_minors); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Mention of zakat to minors  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('mention_of_zakat_to_minors[status]', ['Active' => 'Active','InActive' => 'InActive'], $mention_of_zakat_to_minors->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="mention_of_zakat_to_minors[score]" value="{{ $mention_of_zakat_to_minors->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="mention_of_zakat_to_minors[target]" value="{{ $mention_of_zakat_to_minors->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $vet_pro_for_zak_fun_app = json_decode($charity_profile->charity_ca3->vet_pro_for_zak_fun_app); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Vetting process for zakat funds application </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('vet_pro_for_zak_fun_app[status]', ['Active' => 'Active','InActive' => 'InActive'], $me_of_whe_zak_is_dis_in_cash_or_oth_for->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="vet_pro_for_zak_fun_app[score]" value="{{ $vet_pro_for_zak_fun_app->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="vet_pro_for_zak_fun_app[target]"value="{{ $vet_pro_for_zak_fun_app->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $me_of_whe_zak_is_dis_in_cash_or_oth_for = json_decode($charity_profile->charity_ca3->me_of_whe_zak_is_dis_in_cash_or_oth_for); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Mention of whether zakat is distributed in
                                            cash or other forms </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('me_of_whe_zak_is_dis_in_cash_or_oth_for["status"]', ['Active' => 'Active','InActive' => 'InActive'], $me_of_whe_zak_is_dis_in_cash_or_oth_for->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="me_of_whe_zak_is_dis_in_cash_or_oth_for[score]" value="{{ $me_of_whe_zak_is_dis_in_cash_or_oth_for->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="me_of_whe_zak_is_dis_in_cash_or_oth_for[target]" value="{{ $me_of_whe_zak_is_dis_in_cash_or_oth_for->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $internal_external_audit = json_decode($charity_profile->charity_ca3->internal_external_audit); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Internal/external audit  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('Internal_external_audit[status]', ['Active' => 'Active','InActive' => 'InActive'], $internal_external_audit->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="Internal_external_audit[score]" value="{{ $internal_external_audit->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="Internal_external_audit[target]" value="{{ $internal_external_audit->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $mention_of_zakat_elibility_formula = json_decode($charity_profile->charity_ca3->mention_of_zakat_elibility_formula); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Mention of Zakat elibility formula  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('mention_of_zakat_elibility_formula["status"]', ['Active' => 'Active','InActive' => 'InActive'], $mention_of_zakat_elibility_formula->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="mention_of_zakat_elibility_formula[score]" value="{{ $mention_of_zakat_elibility_formula->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="mention_of_zakat_elibility_formula[target]" value="{{ $mention_of_zakat_elibility_formula->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $zakat_calculator = json_decode($charity_profile->charity_ca3->zakat_calculator); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Zakat Calculator </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('zakat_calculator[status]', ['Active' => 'Active','InActive' => 'InActive'], $men_of_zak_adm_cost_amo->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="zakat_calculator[score]" value="{{ $zakat_calculator->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="zakat_calculator[target]" value="{{ $zakat_calculator->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $men_of_zak_adm_cost_amo = json_decode($charity_profile->charity_ca3->men_of_zak_adm_cost_amo); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Mention of Zakat administration cost
                                            amount  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('men_of_zak_adm_cost_amo[status]', ['Active' => 'Active','InActive' => 'InActive'], $men_of_zak_adm_cost_amo->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="men_of_zak_adm_cost_amo[score]" value="{{ $men_of_zak_adm_cost_amo->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="men_of_zak_adm_cost_amo[target]" value="{{ $men_of_zak_adm_cost_amo->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                    
                                @php $public_fundrasing_costs = json_decode($charity_profile->charity_ca3->public_fundrasing_costs); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Public fundrasing costs  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('public_fundrasing_costs[status]', ['Active' => 'Active','InActive' => 'InActive'], $public_fundrasing_costs->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="public_fundrasing_costs[score]" value="{{ $public_fundrasing_costs->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="public_fundrasing_costs[target]" value="{{ $public_fundrasing_costs->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $zakat_education_bank = json_decode($charity_profile->charity_ca3->zakat_education_bank); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Zakat education bank  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('zakat_education_bank[status]', ['Active' => 'Active','InActive' => 'InActive'], $zakat_education_bank->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="zakat_education_bank[score]" value="{{ $zakat_education_bank->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="zakat_education_bank[target]" value="{{ $zakat_education_bank->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $live_zakat_calculation_support = json_decode($charity_profile->charity_ca3->live_zakat_calculation_support); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Live Zakat calculation support </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('live_zakat_calculation_support[status]', ['Active' => 'Active','InActive' => 'InActive'], $live_zakat_calculation_support->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="live_zakat_calculation_support[score]" value="{{ $live_zakat_calculation_support->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="live_zakat_calculation_support[target]" value="{{ $live_zakat_calculation_support->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $for_app_on_zak_cam = json_decode($charity_profile->charity_ca3->for_app_on_zak_cam); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Formal approval on Zakat campaigns </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('for_app_on_zak_cam[status]', ['Active' => 'Active','InActive' => 'InActive'], $for_app_on_zak_cam->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="for_app_on_zak_cam[score]" value="{{ $for_app_on_zak_cam->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="for_app_on_zak_cam[target]" value="{{ $for_app_on_zak_cam->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $clear_public_zakat_policy = json_decode($charity_profile->charity_ca3->clear_public_zakat_policy); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Clear public Zakat policy </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('for_app_on_zak_cam[status]', ['Active' => 'Active','InActive' => 'InActive'], $clear_public_zakat_policy->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="clear_public_zakat_policy[score]" value="{{ $clear_public_zakat_policy->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="clear_public_zakat_policy[target]" value="{{ $clear_public_zakat_policy->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $zak_und_ove_1_lun_yea = json_decode($charity_profile->charity_ca3->zak_und_ove_1_lun_yea); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Zakat undistributed over 1 lunar year </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('zak_und_ove_1_lun_yea[status]', ['Active' => 'Active','InActive' => 'InActive'], $zak_und_ove_1_lun_yea->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="zak_und_ove_1_lun_yea[score]" value="{{ $zak_und_ove_1_lun_yea->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="zak_und_ove_1_lun_yea[target]" value="{{ $zak_und_ove_1_lun_yea->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $exp_of_the_cat_of_fu = json_decode($charity_profile->charity_ca3->exp_of_the_cat_of_fu); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanation of the category of Fuaqrā </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_of_the_cat_of_fu[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_of_the_cat_of_fu->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="exp_of_the_cat_of_fu[score]" value="{{ $exp_of_the_cat_of_fu->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_of_the_cat_of_fu[target]" value="{{ $exp_of_the_cat_of_fu->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $exp_of_the_cat_of_mas = json_decode($charity_profile->charity_ca3->exp_of_the_cat_of_mas); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanation of the category of Masākīn </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_of_the_cat_of_mas[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_of_the_cat_of_mas->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="exp_of_the_cat_of_mas[score]" value="{{ $exp_of_the_cat_of_mas->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_of_the_cat_of_mas[target]" value="{{ $exp_of_the_cat_of_mas->score??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $exp_of_the_cat_of_ami_ala = json_decode($charity_profile->charity_ca3->exp_of_the_cat_of_ami_ala); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanation of the category of Āmilīn
                                            Alayhā </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_of_the_cat_of_ami_ala[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_of_the_cat_of_ami_ala->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="exp_of_the_cat_of_ami_ala[score]" value="{{ $exp_of_the_cat_of_ami_ala->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_of_the_cat_of_ami_ala[target]" value="{{ $exp_of_the_cat_of_ami_ala->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $exp_of_the_cat_of_al_mua_qul = json_decode($charity_profile->charity_ca3->exp_of_the_cat_of_al_mua_qul); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanation of the category of Al-Muallafat
                                            Qulūbuhum  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_of_the_cat_of_al_mua_qul[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_of_the_cat_of_al_mua_qul->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="exp_of_the_cat_of_al_mua_qul[score]" value="{{ $exp_of_the_cat_of_al_mua_qul->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_of_the_cat_of_al_mua_qul[target]" value="{{ $exp_of_the_cat_of_al_mua_qul->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $exp_of_the_cat_of_fi_ar_ri = json_decode($charity_profile->charity_ca3->exp_of_the_cat_of_fi_ar_ri); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explantion of the category of Fi Ar-Riqāb  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_of_the_cat_of_fi_ar_ri[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_of_the_cat_of_fi_ar_ri->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="exp_of_the_cat_of_fi_ar_ri[score]" value="{{ $exp_of_the_cat_of_fi_ar_ri->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_of_the_cat_of_fi_ar_ri[target]" value="{{ $exp_of_the_cat_of_fi_ar_ri->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $exp_of_the_cat_of_al_gh = json_decode($charity_profile->charity_ca3->exp_of_the_cat_of_al_gh); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Explanation of the category of Al-Ghārimīn  </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('exp_of_the_cat_of_al_gh[status]', ['Active' => 'Active','InActive' => 'InActive'], $exp_of_the_cat_of_al_gh->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="exp_of_the_cat_of_al_gh[score]" value="{{ $exp_of_the_cat_of_al_gh->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="exp_of_the_cat_of_al_gh[target]" value="{{ $exp_of_the_cat_of_al_gh->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $xap_of_the_cat_of_fi_sab = json_decode($charity_profile->charity_ca3->xap_of_the_cat_of_fi_sab); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Exaplantion of the category of Fi Sabīlillahi </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('xap_of_the_cat_of_fi_sab[status]', ['Active' => 'Active','InActive' => 'InActive'], $xap_of_the_cat_of_fi_sab->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="xap_of_the_cat_of_fi_sab[score]" value="{{ $xap_of_the_cat_of_fi_sab->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="xap_of_the_cat_of_fi_sab[target]" value="{{ $xap_of_the_cat_of_fi_sab->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                <br>

                                <h4>CORE AREA - 4 CHARITY STATUS</h4>
                                @php $board_members_names_listed = json_decode($charity_profile->charity_ca4->board_members_names_listed); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Board Members' Names Listed </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('board_members_names_listed[status]', ['Active' => 'Active','InActive' => 'InActive'], '',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="board_members_names_listed[score]" value="{{ $board_members_names_listed->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="board_members_names_listed[target]" value="{{ $board_members_names_listed->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $board_members_photos_listed = json_decode($charity_profile->charity_ca4->board_members_photos_listed); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Board Members' Photos Listed </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('board_members_photos_listed[status]', ['Active' => 'Active','InActive' => 'InActive'], $board_members_photos_listed->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="board_members_photos_listed[score]" value="{{ $board_members_photos_listed->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="board_members_photos_listed[target]" value="{{ $board_members_photos_listed->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>
                                @php $leadership_team_names = json_decode($charity_profile->charity_ca4->leadership_team_names); @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Board Members' at Arm’s Length</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('leadership_team_names["status"]', ['Active' => 'Active','InActive' => 'InActive'], $leadership_team_names->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="leadership_team_names['score]" value="{{ $leadership_team_names->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="leadership_team_names['target]" value="{{ $leadership_team_names->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $leadership_team_names = json_decode($charity_profile->charity_ca4->leadership_team_names); @endphp

                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Leadership Team Names </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('leadership_team_names[status]', ['Active' => 'Active','InActive' => 'InActive'],$leadership_team_names->status??'' ,['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="leadership_team_names[score]" value="{{ $leadership_team_names->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="leadership_team_names[target]" value="{{ $leadership_team_names->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                @php $leadership_team_photos = json_decode($charity_profile->charity_ca4->leadership_team_photos); @endphp

                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center" for="city">Leadership Team Photos </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state">Status</label>
                                        {!! Form::select('leadership_team_photos[status]', ['Active' => 'Active','InActive' => 'InActive'], $leadership_team_photos->status??'',['class'=>'form-control']) !!}<i></i>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Score</label>
                                        <input type="number" name="leadership_team_photos[score]" value="{{ $leadership_team_photos->score??'' }}" class="form-control" id="zip">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="zip">Target</label>
                                        <input type="number" name="leadership_team_photos[target]" value="{{ $leadership_team_photos->target??'' }}" class="form-control" id="zip">
                                    </div>
                                </div>

                                <br> 

                                <footer>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a  class="btn btn-default" href="{{url('admin/charity-profile')}}">Back</a>
                                </footer>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </article>

            </section>



        </div>


    </div>
@endsection


