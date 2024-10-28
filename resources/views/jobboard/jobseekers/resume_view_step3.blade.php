@extends('layouts.app_cv')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-3 sidebar">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu-left-overlay"></div>
							<nav class="side-menu hidden-sm hidden-xs">
								<ul>
									<li>
										<a href="javascript:void();" class="close">&times</a>
									</li>
									<li class="title">RESUME</li>
									<li>
										<a href="https://mybdjobs.bdjobs.com/mybdjobs/masterview.asp " class=''>
											<i class="icon-view-resume"></i>  View Resume

										</a>
									</li>
									<li>

										<a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class='' onclick="ga('send', 'event', 'EditResume', 'click', '/new_mybdjobs/step_03_view.asp', 1);
    ">
											<i class="icon-edit"></i>  Edit Resume
										</a>

									</li>



									<!--<li class="title">Account</li>-->

								</ul>
							</nav>

						</div>
						<div class="col-md-12 hidden-xs hidden-sm" style="margin:0px auto 0px 5px;">


							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<ins class="adsbygoogle"
								 style="display:inline-block;width:250px;height:250px"
								 data-ad-client="ca-pub-5130888087776673"
								 data-ad-slot="2833078342"></ins>
							<script>
                                /* SquareBanner */
                                (adsbygoogle = window.adsbygoogle || []).push({});
							</script>

							<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

						</div>

					</div>
				</div>




				<div class="modal fade" id="myModal" role="dialog" style="display:none; height:400px; width:400px;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Updated Successfully</h4>
							</div>
							<div class="modal-body">
								<p id="F_U_message">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">

				</div>


				<div class="col-md-9 content">

					<div class="big-card">

						<div class="s-d-a-page e-resume">
							<p>Here you can edit your resume in five different steps (Personal, Education/ Training, Employment, Other Information and Photograph). To enrich your resume provide authentic information. </p>
						</div>

						<div class="row">
							<div class="col-md-6">
								<ol class="breadcrumb">


									<li><a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"><span class="icon-home"></span>&nbsp;Home</a></li>



									<li class="active">Edit Resume</li>

									<!--				<li class="active"></li>
                                    -->
								</ol>
							</div>
							<div class="col-md-6">

							</div>
						</div>

						<!--<div class="switch-back-old">
                                 <a style="color:#999;font-size:12px; font-weight:normal;" href="https://mybdjobs.bdjobs.com/mybdjobs/.asp" onclick= "ga('send', 'event', '/.asp', 'click', 'switch old version', 1);"> <i class="icon-angle-left-long"></i> Switch back to old version</a>
                       </div>-->



						<div class="btn-groupbtn-group tab-group" role="group" aria-label="...">
							<FORM action="LinkSubmit.asp" method="post" name="formPS_View" id="formPS_View">
								<input name="hPS" type="hidden" id="hPS" value="false"/>


								<button type="button" onclick="location.href='{{ url('resume-view-step1') }}'"><i class="fa fa-user"></i>&nbsp;Personal</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step2') }}'" onclick=javascript:PassUserID('Education'); class="btn btn-tab-education"  ><i class="fa fa-graduation-cap"></i>&nbsp;Education/Training</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step3') }}'" class="btn active btn-tab-personal"getAddform onclick=javascript:PassUserID('Employment'); class="btn btn-tab-employment"><i class="fa fa-briefcase"></i>&nbsp;Employment</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step4') }}'" onclick=javascript:PassUserID('Others'); class="btn btn-tab-others"><i class="fa fa-list"></i>&nbsp;Other Information</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step5') }}'" onclick=javascript:PassUserID('Photograph'); class="btn btn-tab-photograph"><i class="fa fa-camera"></i>&nbsp;Photograph</button>

							</FORM>
						</div>





						<div class="confirmation-message">
							<!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
							<span id="c_msg"></span>
						</div>
						<div class="server-error">
							<!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
							<span id="c_msg"></span>
						</div>



						<div id="msgDiv">
						</div>
						<div class="loader"></div>
						<div style="" class="panel-group resume-panel-group personal" id="accordion3" role="tablist" aria-multiselectable="true">

							<div class="panel">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" class="" data-toggle="collapse" data-parent="#accordion3" href="#employmentOne" aria-expanded="true" aria-controls="employmentOne">
											Employment History&nbsp;<i class="indicator icon-minus"></i>
										</a>
									</h4>
								</div>
								<div id="employmentOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<div id="commonForm_exp">


											<div class="empty-message m-t-40" id="noData_exp" style="display:block">
												<i class="icon icon-briefcase"></i>

												<p>
													Currently no data exist! Please click on the following <br />button to add your employment information.
												</p>
												<!-- <button class="btn btn-gray m-t-10"><i class="icon-plus"></i>&nbsp;Add Training</button>-->
											</div>


										</div>

										<div id="div_exp"></div>
										<div class='text-center'>
											<!--<button class="btn btn-gray m-t-10" id="btnAdd_tr" onclick="addCommonForm('tr');"><i class="icon-plus"></i>&nbsp;Add Training</button>-->
											<button class="btn btn-gray m-t-10" id="btnAdd_exp" onclick="getAddform('exp');" ><i class="icon-plus"></i>&nbsp;Add Experience (If Required) </button>
										</div>
									</div>
								</div>
							</div>
							<!-- end employment history-->
							<!-- army -->
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a role="button" class="" data-toggle="collapse" data-parent="#accordion3" href="#employmentTwo" aria-expanded="true" aria-controls="employmentTwo">
											Employment History(For Retired Army Person)&nbsp;<i class="indicator icon-plus"></i>
										</a>

									</h4>
								</div>
								<div id="employmentTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<!-- If no information found then show this message -->
										<div id="commonForm_em">

										</div>
										<div id="div_em">
										</div>

										<div id="noData_em" style="display: block">
											<div class="empty-message m-t-40" id="">
												<i class="icon icon-rank"></i>

												<p>
													If you are a retired army person then you can give that information by clicking on the following button.
												</p>
											</div>
											<div class='text-center'>
												<button class="btn btn-gray m-t-10" id="btnAdd_em" onclick="getAddform('em');"><i class="icon-plus"></i>&nbsp;Add Experience at Bangladesh Army </button>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div></div>
					<!-- end army-->
				</div>
			</div><!-- another common div -->
		</div><!-- another common div -->
	</div><!-- another common div -->
	</div>
@endsection


@section('js')


	<script type="text/javascript">

        $(document).on('click','.promo-top .btn.close', function(e){
            e.preventDefault();
            $('.promo-top').slideUp();
            $('.promo-minimized').removeClass('hidden');
            setAssessmentCookie('MyAssessmentTopbanner',0);
        });

        $(document).ready(function(){
            setTimeout(function(){
                $('.promo-top').slideDown().removeClass('hidden');

            }, 500);

        });

        $(document).on('click','.promo-minimized i.toggle', function(e){
            e.preventDefault();
            $('.promo-top').slideDown().removeClass('inactive');


            $('.promo-minimized').addClass('hidden').removeClass('active');
            setAssessmentCookie('MyAssessmentTopbanner',1);
        });


        function checkAssessmentCookie(cookieName,show) {

            //console.log(user);
            if (show == 0) {
                //alert("Welcome again " + user);
                setAssessmentCookie(cookieName,1);
            } else {

                delete_cookie(cookieName);
            }
        }


        function delete_cookie(name) {
            document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }

        function setAssessmentCookie(cname, cvalue) {
            console.log("y");
            var d = new Date();
            exdays=1;
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; "+ expires ;

        }

	</script>

	<script language="JavaScript">
        function SubmitForm()
        {
            //alert(document.getElementById("U_ID").value);
            document.getElementById("AplyForm").submit();
        }
	</script>



	<script type="text/javascript">

        function openVediobox(strPart )
        {
            if (strPart=="Per")
            {
                var ifream= document.getElementById("Iframe");
                ifream.src="http://www.youtube.com/embed/80mJo93_4Es?rel=0&amp;wmode=Opaque";
                ifream.height="400px";
            }

        }
	</script>



	<script>
        (function(h,e,a,t,m,p) {
            m=e.createElement(a);m.async=!0;m.src=t;
            p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
        })(window,document,'script','https://u.heatmap.it/log.js');
	</script>


	<script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-56024242-1', 'auto');
        ga('send', 'pageview');

	</script>



	<script type="text/javascript">
        $(document).ready(function() {
            $('.intp').hide();
            $('.showintp').click(function() {
                $('.intp').slideToggle(500);
                $("html, body").animate({ scrollTop: $(document).height() }, 500);
            });
            $('.intp ul li').click(function() {
                $('.intp').slideUp(500);
            });

            $('.ot-partners').click(function(){
                $('.oth-partners').slideToggle();
                $(this).find('i').toggleClass('icon-plus icon-minus')
            });
        });
	</script>
	<script type="text/javascript">
        $(document).on("click",".fatFooter .in-partners",function(){
            $('.fatFooter .all-partners').slideToggle();
            $(this).find('i').toggleClass('icon-plus icon-minus');
        });
	</script>

	<script type="text/javascript">

        $(document).ready(function () {
            $('body').on('focus',".datepicker", function(){
                $(this).datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function(ev){
                    $(this).datepicker('hide');
                });
            });
        });



	</script>
	<script type="text/javascript">
        $('button').removeAttr('disabled')
        function getAddHtml(type)
        {
            $("#noData_" + type).hide(); //hide currently no data found div
            $("#btnAdd_" + type).prop('disabled', true); //add button disable
            document.getElementById("div_"+type).innerHTML=""; // add div empty

            var strhtml="<div class='all-info'><div class='sub-header'><h4>Add Experience </h4></div><form class='row' id='expForm'> <div id='alertDiv_exp'></div><div class='col-md-6'><div class='row'><div class=\'form-group col-md-12\'><label for=''>Company Name&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control' placeholder='' value='' name='txtCompany' id='txtCompany'><input type='hidden' name='h_ex_id' value=''/><input type='hidden' name='item_no' value='' id='expItemNo'/></div><div class=\'form-group col-md-12\'><label for=''>Company Business&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class=\'form-control autosuggest ui-autocomplete-input\' placeholder='' value='' id='cboBusiness' name='cboBusiness' onclick=SetParam(2,'hid_cbo_business','',6,'');><input type='hidden' name='hid_cbo_business' value='' id='hid_cbo_business'/></div><div class=\'form-group col-md-12\'><label for=''>Designation&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control' placeholder='' value='' name='txtEPosition' id='txtEPosition'></div><div class=\'form-group col-md-12\'><label for=''>Department&nbsp;</label><input type='text' class='form-control' placeholder='' value='' name='txtDept' id='txtDept'></div><div class='form-group col-md-12'><label for=''>Area of Experiences:&nbsp;<abbr title='Required' class='required'></abbr></label><div class='' id='prefOrgDiv'> <span class=\'input-note m-b-10 btn-form-control\'>Add your expertise skill (max 3)</span><div id='lstJobArea'> <div class='selected-location'> <input type='text' id='txtExpArea' name='txtExpArea' class=\'autosuggest txt-add-location ui-autocomplete-input btn-form-control form-control\' onClick=SetParam(3,'hid_ExpArea','',5,''); placeholder='Add expertise skill ...' autocomplete='off'><div class='chips-container' id='FilterWorkArea'></div> <input  type='hidden'  name='hid_ExpArea' id='hid_ExpArea' readonly='readonly'></div></div></div></div> <INPUT id='SWorkArea' type='hidden' name='SWorkArea' value=''><input type='hidden' name='subCatId' value='' id='subCatId'><input type='hidden' name='isBlueColor' id='isBlueColor' value='False'></div></div><div class='col-md-6'><div class='row'><div class=\'form-group col-md-12\'><label for=''>Responsibilities&nbsp;</label><textarea id='txtDuty' name='txtDuty' cols='30' rows='4' class='form-control '></textarea></div><div class=\'form-group col-md-12\'><label for=''>Company Location</label><input type='text' class='form-control' placeholder='' value='' name='txtCLocation' id='txtCLocation'></div><div class='form-group col-md-12' style='margin:0;'><label for=''>Employment Period&nbsp;<abbr title='Required' class='required'></abbr></label></div><div class=\'form-group col-md-6\'><input type='text' class='form-control datepicker fromDate' value='' id='cboFromDate' name='cboFromDate' placeholder='From'></div><div class=\'form-group col-md-6\'><input type='text' class='form-control datepicker toDate' value='' id='cboTODate' name='cboTODate' placeholder='To'></div><div class=\'form-group col-md-12 btn-form-control\'><label class='checkbox-inline'><input type='checkbox' name='chkContinue' id='chkContinue' onClick=SetValue('expForm'); value='ON'> Currently Working</label></div></div></div> <div class=\'col-md-12 btn-form-control\'><a href=javascript:void(0) class='btn btn-primary save' id='formSubmit'>Save</a><a href='javascript:void(0)' onClick=closeDiv('exp'); class=\'btn btn-cancel\'>Close</a></div></form></div>";
            document.getElementById("div_"+type).innerHTML=strhtml;
            $('#div_'+type).show();
        }

        function getAddform(type)
        {
            $("#noData_" + type).hide();
            $("#btnAdd_" + type).prop('disabled', true);
            document.getElementById("div_"+type).innerHTML="";


            //var Itemno=parseInt("");
            //alert(Itemno);
            //itemno=itemno+1;
            if ($("body  #"+type+"ItemNo").last().val()!=null){
                itemno=parseInt($("body  #"+type+"ItemNo").last().val());
            }
            else{
                itemno=-1;
            }

            itemno=itemno+1;
            //alert(itemno);
            //if($('#commonForm_em_'+type+'_'+itemno).length == 0)
            if(type == "exp")
            {
                var strhtml="<div class='all-info'><div class='sub-header'><h4>Add Experience </h4></div><form class='row' id='expForm'> <div id='alertDiv_exp'></div><div class='col-md-6'><div class='row'><div class=\'form-group col-md-12\'><label for=''>Company Name&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control' placeholder='' value='' name='txtCompany' id='txtCompany'><input type='hidden' name='h_ex_id' value=''/><input type='hidden' name='item_no' value='' id='expItemNo'/></div><div class=\'form-group col-md-12\'><label for=''>Company Business&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class=\'form-control autosuggest ui-autocomplete-input\' placeholder='' value='' id='cboBusiness' name='cboBusiness' onclick=SetParam(2,'hid_cbo_business','',6,'');><input type='hidden' name='hid_cbo_business' value='' id='hid_cbo_business'/></div><div class=\'form-group col-md-12\'><label for=''>Designation&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control' placeholder='' value='' name='txtEPosition' id='txtEPosition'></div><div class=\'form-group col-md-12\'><label for=''>Department&nbsp;</label><input type='text' class='form-control' placeholder='' value='' name='txtDept' id='txtDept'></div><div class='form-group col-md-12'><label for=''>Area of Experiences:&nbsp;<abbr title='Required' class='required'></abbr></label><div class='' id='prefOrgDiv'> <span class=\'input-note m-b-10 btn-form-control\'>Add your expertise skill (max 3)</span><div id='lstJobArea'> <div class='selected-location'> <input type='text' id='txtExpArea' name='txtExpArea' class=\'autosuggest txt-add-location ui-autocomplete-input btn-form-control form-control\' onClick=SetParam(3,'hid_ExpArea','',5,''); placeholder='Add expertise skill ...' autocomplete='off'><div class='chips-container' id='FilterWorkArea'></div> <input  type='hidden'  name='hid_ExpArea' id='hid_ExpArea' readonly='readonly'></div></div></div></div> <INPUT id='SWorkArea' type='hidden' name='SWorkArea' value=''><input type='hidden' name='subCatId' value='' id='subCatId'><input type='hidden' name='isBlueColor' id='isBlueColor' value='False'></div></div><div class='col-md-6'><div class='row'><div class=\'form-group col-md-12\'><label for=''>Responsibilities&nbsp;</label><textarea id='txtDuty' name='txtDuty' cols='30' rows='4' class='form-control '></textarea></div><div class=\'form-group col-md-12\'><label for=''>Company Location</label><input type='text' class='form-control' placeholder='' value='' name='txtCLocation' id='txtCLocation'></div><div class='form-group col-md-12' style='margin:0;'><label for=''>Employment Period&nbsp;<abbr title='Required' class='required'></abbr></label></div><div class=\'form-group col-md-6\'><input type='text' class='form-control datepicker fromDate' value='' id='cboFromDate' name='cboFromDate' placeholder='From'></div><div class=\'form-group col-md-6\'><input type='text' class='form-control datepicker toDate' value='' id='cboTODate' name='cboTODate' placeholder='To'></div><div class=\'form-group col-md-12 btn-form-control\'><label class='checkbox-inline'><input type='checkbox' name='chkContinue' id='chkContinue' onClick=SetValue('expForm'); value='ON'> Currently Working</label></div></div></div> <div class=\'col-md-12 btn-form-control\'><a href=javascript:void(0) class='btn btn-primary save' id='formSubmit'>Save</a><a href='javascript:void(0)' onClick=closeDiv('exp'); class=\'btn btn-cancel\'>Close</a></div></form></div>";
            }
            if(type == "em")
            {
                var strhtml="<div class='all-info em_0'><div class='sub-header'><h4>Employment </h4><div class='edit-tools'><button class='btn edit-btn'><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'</div></div><div id='alertDiv_em'></div><br/><FORM class='row view-mode' id='emForm_0' name='form1' action='step_03_update_army_new.asp' method='post'><div class='form-group'><input type='hidden' id='emItemNo'  name='txtEmItemNo' value=''><input name='hrai_ID' type='hidden' id='hrai_ID' value='-1'><div class='form-group col-md-6'><label for=''>BA No &nbsp;<abbr title='Required' class='required'></abbr></label><div class='row'><div class='col-md-4'><select name='comboBANo' id='comboBANo' required='required' class='form-control  mandatory jqValidate_em from-control-modal combo'><option value='BA'>BA</option><option value='BSS'>BSS</option><option value='JSS'>JSS</option><option value='BSP'>BSP</option><option value='BJO'>BJO</option><option value='No'>No</option></select> </div><div class='col-md-8'><input class='form-control numeric mandatory jqValidate_em from-control-modal' name='txtBANo' id='10' placeholder=''  value=''></div></div></div><div class='form-group col-md-6'><label for=''>Ranks &nbsp;<abbr title='Required' class='required'></abbr></label><select name='comboRank' id='comboRank' required='required' class='form-control  mandatory jqValidate_em from-control-modal combo'><option value='2Lt'>2Lt</option><option value='Lt'>Lt</option><option value='Capt'>Capt</option><option value='Maj'>Maj</option><option value='Lt Col'>Lt Col</option><option value='Col'>Col</option><option value='Brig Gen'>Brig Gen</option><option value='Maj Gen'>Maj Gen</option><option value='Lt Gen'>Lt Gen</option><option value='Gen'>Gen</option><option value='Snk'>Snk</option><option value='L/cpl'>L/cpl</option><option value='Cpl'>Cpl</option><option value='Sgt'>Sgt</option><option value='WO'>WO</option><option value='SWO'>SWO</option><option value='MWO'>MWO</option><option value='H/Lt'>H/Lt</option><option value='H/Capt'>H/Capt</option></select></div><div class='form-group col-md-6'><label for=''>Type  &nbsp;<abbr title='Required' class='required'></abbr></label><select name='comboType' id='comboType' required='required' class='form-control from-control-modal combo'><option value='Officer'>Officer</option><option value='JCO'>JCO</option><option value='NCO'>NCO</option></select></div><div class='form-group col-md-6'><label for=''>Arms &nbsp;<abbr title='Required' class='required'></abbr></label><select name='coboArms' id='coboArms' required='required' class='form-control mandatory jqValidate_em from-control-modal combo'><option value='AC'>AC</option><option value='Arty'>Arty</option><option value='EB'>EB</option><option value='BIR'>BIR</option><option value='Sigs'>Sigs</option><option value='Engr'>Engr</option><option value='EME'>EME</option><option value='Ord'>Ord</option><option value='ASC'>ASC</option><option value='AMC'>AMC</option><option value='AEC'>AEC</option><option value='CMP'>CMP</option><option value='ADC'>ADC</option><option value='AFNS'>AFNS</option><option value='RVFC'>RVFC</option><option value='ACC'>ACC</option></select></div><div class='form-group col-md-6'><label for=''>Trade</label><input class='form-control from-control-modal jqValidate_em' name='txtTrade' id='100' placeholder='' value=''></div><div class='form-group col-md-6'><label for=''>Course</label><input class='form-control from-control-modal jqValidate_em'  id='100' name='txtCourse' placeholder='' type='text' value=''></div><div class='form-group col-md-6'><label for=''>Date of Commission &nbsp;<abbr title='Required' class='required'></abbr></label><input class='form-control mandatory jqValidate_em from-control-modal datepicker fromDate' placeholder='mm/dd/yyyy' type='text' id='cboCommissionDate' name='cboCommissionDate' value=''><input type='hidden' name='hCurrentDate' id ='hCurrentDate' value='3/27/2019'></div><div class='form-group col-md-6'><label for=''>Date of Retirement &nbsp;<abbr title='Required' class='required'></abbr></label><input class='form-control mandatory jqValidate_em from-control-modal datepicker toDate' placeholder='mm/dd/yyyy' type='text' id='cboRetirementDate' name='cboRetirementDate' value=''></div><input type='hidden' name='verify' value='0'><div class='col-md-12 btn-form-control hidden'><a href=javascript:void(0); onClick=javascript:commonUpdate('step_03_update_army.asp','emForm_0','em_0','EN'); class='btn btn-primary save'>Save</a><a href=javascript:void(0); onClick=javascript:closeDiv('em'); class='btn btn-cancel'>Close</a></div></FORM></div></div>";
            }


            document.getElementById('div_'+type).innerHTML=strhtml;
            $('#div_'+type+'  #'+type+'ItemNo').last().val(itemno);
            if(type == "em")
            {
                $('#div_'+type+' form').attr('id',type+'Form_'+itemno)
            }
            $('#div_'+type+' .all-info').addClass(type+"_"+itemno);
            //$('#div_'+type+' h4').append(" "+(itemno+1));

            if(type == "exp")
            {
                $('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_03_update_exp.asp','expForm','exp_"+itemno+"','EN');")
            }

            if(type == "em")
            {
                $('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_03_update_army.asp','emForm_"+itemno+"','em_"+itemno+"','EN',"+itemno+",'em');")
            }

            $('#div_'+type).show();
            $('#div_' + type + ' form').removeClass("view-mode");
            $('#div_' + type + ' form div').last().removeClass("hidden");
            $('#div_' + type + ' .edit-tools').css("display", "none");
            /*var value=$("#commonForm_em_"+itemno+" #trItemNo").val();
        alert(value);*/

        }
	</script>

	<script type="text/javascript">

        $(document).ready(function(){
            $("[rel='tooltip']").tooltip();
        });




        $(function(){

            $(document).on( 'scroll', function(){

                if ($(window).scrollTop() > 100) {
                    $('.scroll-top-wrapper').addClass('show');
                } else {
                    $('.scroll-top-wrapper').removeClass('show');
                }
            });
        });



        $(function(){

            $(document).on( 'scroll', function(){

                if ($(window).scrollTop() > 100) {
                    $('.scroll-top-wrapper').addClass('show');
                } else {
                    $('.scroll-top-wrapper').removeClass('show');
                }
            });

            $('.scroll-top-wrapper').on('click', scrollToTop);
        });



        function scrollToTop() {
            verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
            element = $('body');
            offset = element.offset();
            offsetTop = offset.top;
            $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
        }
	</script>

        
@endsection










