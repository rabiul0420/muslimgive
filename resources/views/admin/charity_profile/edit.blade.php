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
                                                    <textarea  rows="5" name="auditors" class="custom-scroll form-control">{{$charity_profile->auditors}}</textarea>
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
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Registered</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <br>

                                    <h4>CORE AREA - 2 FINANCIAL ACCOUNTABILITY</h4>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Audited Financial Statements Available? </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">P.Y. Audited Financial Statements Available? </h5>
                                        </div>
                                               
									    <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('adt_fn_st_av["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="adt_fn_st_av['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="adt_fn_st_av['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Impact Report Available W. Financial Info? </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('imp_epr_avl_wfi_inf["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="imp_epr_avl_wfi_inf['score]" class="form-control" id="zip">
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="imp_epr_avl_wfi_inf['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Charitable Program + Qd - % Of Revenue </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Amount</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="Administrative_of_rv['score]" class="form-control" id="zip">
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Fundraising - % Of Revenue </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Amount</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Fundraising - % Of Revenue </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Amount</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Administrative - % Of Revenue </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Amount</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Other Spending </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Amount</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">No. Of Months To Spend The Reserve </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Months</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Cause Spending Vs. Other Spending (60%) </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Amount</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Distribution Vs Accumulation (20%)  </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Amount</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <br>

                                    <h4>CORE AREA - 3 ZAKAT POLICY COMPLIANCE</h4>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Zakat policy clearly labeled and accessible  </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('zak_pol_cle_lab_and_acc["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="zak_pol_cle_lab_and_acc['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="zak_pol_cle_lab_and_acc['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Who makes up governing board  </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('who_mak_up_gov_boa["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="who_mak_up_gov_boa['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="who_mak_up_gov_boa['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                         
									<div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Names of Shariah Advisory board listed </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('nam_of_sha_adv_boa_lis["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="nam_of_sha_adv_boa_lis['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="nam_of_sha_adv_boa_lis['target]" class="form-control" id="zip">
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanaition of compliance with regulations
                                                set out by Canadian government and CRA </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_rex_of_co_with_re_set_out_by_caegisterd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ex_of_co_with_re_set_out_by_ca['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ex_of_co_with_re_set_out_by_ca['target]" class="form-control" id="zip">
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanation why zakat funds are collected
                                                and distributed </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_reexp_why_zak_fun_are_col_and_disgisterd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="exp_why_zak_fun_are_col_and_dis['target]" class="form-control" id="zip">
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanation of what chain of custody is from
                                                receiving zakat passing to recicipent </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('exp_why_zak_fun_are_col_and_dis["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="exp_of_what_cha_of_cus_is_from_rec_zak['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="exp_of_what_cha_of_cus_is_from_rec_zak['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Zakat funds kept separate </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('exp_of_what_cha_of_cus_is_from_rec_zak["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="zakat_funds_kept_separate['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="zakat_funds_kept_separate['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Turnaround time for zakat distrution shared </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('zakat_funds_kept_separate["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="tur_time_for_zak_dis_sha['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="tur_time_for_zak_dis_sha['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Mention of zakat to minors  </h5>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('tur_time_for_zak_dis_sha["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="mention_of_zakat_to_minors['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="mention_of_zakat_to_minors['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Vetting process for zakat funds application </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('mention_of_zakat_to_minors["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="vet_pro_for_zak_fun_app['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="vet_pro_for_zak_fun_app['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Mention of whether zakat is distributed in
                                                cash or other forms </h5>
                                        </div>
                                    <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('vet_pro_for_zak_fun_app["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="me_of_whe_zak_is_dis_in_cash_or_oth_for['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="me_of_whe_zak_is_dis_in_cash_or_oth_for['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Internal/external audit  </h5>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('Internal_external_audit["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="Internal_external_audit['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="Internal_external_audit['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Mention of Zakat elibility formula  </h5>
                                        </div>
                                    <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('mention_of_zakat_elibility_formula["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Zakat Calculator </h5>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Mention of Zakat administration cost
                                                amount  </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Audited </h5>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Public fundrasing costs  </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Zakat education bank  </h5>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Live Zakat calculation support </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Formal approval on Zakat campaigns </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Clear public Zakat policy </h5>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Zakat undistributed over 1 lunar year </h5>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanation of the category of Fuaqrā </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanation of the category of Masākīn </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanation of the category of Āmilīn
                                                Alayhā </h5>
                                        </div>
                                     <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanation of the category of Al-Muallafat
                                                Qulūbuhum  </h5>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explantion of the category of Fi Ar-Riqāb  </h5>
                                        </div>
                                            <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Explanation of the category of Al-Ghārimīn  </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Exaplantion of the category of Fi Sabīlillahi </h5>
                                        </div>
                                      <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <br>

                                    <h4>CORE AREA - 4 CHARITY STATUS</h4>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Board Members' Names Listed </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Board Members' Photos Listed </h5>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                      <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Board Members' at Arm’s Length</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                            <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Leadership Team Names </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                    <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                     <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-center" for="city">Leadership Team Photos </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="state">Status</label>
                                            {!! Form::select('ca1_registerd["status"]', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="zip">Score</label>
                                            <input type="number" name="ca1_registerd['score]" class="form-control" id="zip">
                                        </div>
                                       <div class="col-md-3">
                                            <label for="zip">Target</label>
                                            <input type="number" name="ca1_registerd['target]" class="form-control" id="zip">
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

@section('js')


    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


    <script>
        var editor_config ={
            path_absolute : "/",
            selector: "textarea.editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern",
                "textcolor"
            ],

            toolbar: "insertfile undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;



                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>



    <script type="text/javascript">

        $(document).ready(function() {




            $.fn.filemanager_image = function(type, options) {
                type = type || 'file';

                this.on('click', function(e) {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                    localStorage.setItem('target_input', $(this).data('input'));
                    localStorage.setItem('target_preview', $(this).data('preview'));
                    window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
                    window.SetUrl = function (url, file_path) {
                        //set the value of the desired input to image url
                        var target_input = $('#' + localStorage.getItem('target_input'));
                        target_input.val(file_path).trigger('change');

                        // view file name
                        file_path_arr = file_path.split('/');
                        file_name = file_path_arr[file_path_arr.length-1];
                        $('.image_name').text(file_name).trigger('change');

                        //set or change the preview image src
                        var target_preview = $('#' + localStorage.getItem('target_preview'));
                        target_preview.attr('src', url).trigger('change');
                    };
                    return false;
                });
            }

            $('.lfm').filemanager_image('image');

            $('.ckeditor').show();
            $('iframe').css('height','300px');

        })
    </script>

@endsection