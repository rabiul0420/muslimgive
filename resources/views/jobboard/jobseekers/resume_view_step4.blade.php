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
									<li>
										<a href="https://mybdjobs.bdjobs.com/mybdjobs/welcome.asp" class=''  >
											<i class="icon-home"></i>Home
										</a>
									</li>
									<li class="title">RESUME</li>
									<li>
										<a href="https://mybdjobs.bdjobs.com/mybdjobs/masterview.asp " class=''>
											<i class="icon-view-resume"></i>  View Resume

										</a>
									</li>
									<li>

										<a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class='' onclick="ga('send', 'event', 'EditResume', 'click', '/new_mybdjobs/step_04_view.asp', 1);
    ">
											<i class="icon-edit"></i>  Edit Resume
										</a>

									</li>


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



						<div class="btn-group tab-group" role="group" aria-label="...">
							<FORM action="LinkSubmit.asp" method="post" name="formPS_View" id="formPS_View">
								<input name="hPS" type="hidden" id="hPS" value="false"/>


								<button type="button" onclick="location.href='{{ url('resume-view-step1') }}'"><i class="fa fa-user"></i><br></br>Personal</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step2') }}'" onclick=javascript:PassUserID('Education'); class="btn btn-tab-education"  ><i class="fa fa-graduation-cap"></i>&nbsp;Education/Training</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step3') }}'" onclick=javascript:PassUserID('Employment'); class="btn btn-tab-employment"><i class="fa fa-briefcase"></i>&nbsp;Employment</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step4') }}'" class="btn active btn-tab-personal" onclick=javascript:PassUserID('Others'); class="btn btn-tab-others"><i class="fa fa-list"></i>&nbsp;Other Information</button>
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
						<div class="panel-group resume-panel-group others" id="accordion4" role="tablist" aria-multiselectable="true">
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" class="" data-toggle="collapse" data-parent="#accordion4" href="#othersOne" aria-expanded="true" aria-controls="othersOne">
											Specialization&nbsp;<i class="indicator icon-minus"></i>
										</a>
									</h4>
								</div>
								<div id="othersOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body" id="panelBody_spe">
										<div id="commonForm_spe">
											<div id="commonForm_spe_0">

											</div>
										</div>

										<div class="empty-message m-t-40" id="noData_spe"  style="display:block";>
											<i class="icon icon-ribbon"></i>

											<p>Currently no data exist! Please click on the following button to add your specialization and extra curricular activities.</p>
											<div>
												<button onclick="getSpeAddForm('spe');" id="btnAdd_spe" class="btn btn-gray m-t-10"><i class="icon-plus"></i>&nbsp;Add specialization</button>
											</div>
										</div>

										<div id="div_spe"></div>
										<!--</div>--><!-- end commonForm_spe -->
									</div>
								</div>
							</div><!--  end Specialization -->
							<!--------------------------------------language -------------------------------------->
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a role="button" class="collapsed"  data-toggle="collapse" data-parent="#accordion4" href="#othersTwo" aria-expanded="true" aria-controls="othersTwo">Language Proficiency&nbsp;<i class="indicator icon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="othersTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<div id="commonForm_lan">

											<div class="empty-message m-t-40" id="noData_lan" style="display:block">
												<i class="icon icon-language"></i>
												<p>Currently no data exist! Please click on the following button to add your language proficiency.</p>
											</div>
										</div>
										<div id="div_lan">
										</div>

										<div>
											<button class="btn btn-gray  m-t-10" id="btnAdd_lan" onclick="getAddform('lan');" style="display:block"><i class="icon-plus"></i>&nbsp;Add Language</button>
										</div>

									</div>
								</div>
							</div>
							<!----------------------------------------------------referrence-------------------------------->
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#othersThree" aria-expanded="true" aria-controls="othersThree">References&nbsp;<i class="indicator icon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="othersThree" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
									<p id="global_error_message_container" class="message_container">

										<span id="global_error_message"></span>
									</p>
									<div class="panel-body">
										<div id="commonForm_ref">

											<div class="empty-message m-t-40" id="noData_ref" style="display:block">
												<i class="icon icon-career"></i>

												<p>Currently no data exist! Please click on the following button to add your reference.</p>
											</div>

										</div>
										<div id="div_ref">
										</div>


										<div>
											<button  id="btnAdd_ref" class="btn btn-gray  m-t-10" onclick="getAddform('ref');" style="display:block"><i class="icon-plus"></i>&nbsp;Add Reference
											</button>
										</div>
									</div>
								</div>
							</div>

						</div><!-- end accordion -->
					</div><!-- another common div -->
				</div><!-- another common div -->
			</div><!-- another common div -->
		</div>
	</div>
@endsection

@section('js')

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
<!-- Fat footer -->

<div class="scroll-top-wrapper ">
         <span class="scroll-top-inner">
         <i class="glyphicon glyphicon-circle-arrow-up"></i>
         </span>
</div>
<div class="confirmation-message" style=" background-color: #68aa47;color: #ffffff;  border-radius: 4px; position: fixed;left: 20px;bottom: 20px;padding: 16px 20px;-webkit-box-shadow: 0 0 2px rgba(0,0,0,.12), 0 2px 4px rgba(0,0,0,.24);box-shadow: 0 0 2px rgba(0,0,0,.12), 0 2px 4px rgba(0,0,0,.24); display: none; z-index: 9;">
	<!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
	<span id="c_msg"></span>
</div>
<script type="text/javascript" src="https://mybdjobs.bdjobs.com/js/new_js/edit-resume.js"></script>
<script type="text/javascript">
    $('button').removeAttr('disabled');
    function getSpeAddForm(type)
    {
        $("#noData_" + type).hide(); //hide currently no data found div
        $("#btnAdd_" + type).prop('disabled', true); //add button disable
        document.getElementById("div_spe").innerHTML=""; // add div empty
        var strhtml="<div class='all-info spe_0'><div id='alertDiv_spe'></div><div class='sub-header'><div class='edit-tools'><button class='btn edit-btn' ><i class='icon-pencil-o'></i>&nbsp;Edit</button></div></div><form class='row' id='speForm'><div class='form-group col-md-12'><label for=''>skills<span class='btn-form-control'>(max 10)</span></label><div class='' id='SkillAreaDiv'> <input type='hidden' value='add' name='addField' id='addField'/><div id='lstJobArea'><div class='selected-location'><input type='text' id='txtSkillrea' name='txtSkillrea' class='autosuggest txt-add-location ui-autocomplete-input btn-form-control form-control' onClick=SetParam(4,'hid_SkArea','',9,''); placeholder='Add more...'><div class='chips-container' id='FilterSkill'></div><input  type='hidden'  name='hid_SkArea' id='hid_SkArea' readonly='readonly'></div></div></div></div><INPUT id='hid_Skill' type='hidden' name='hid_Skill' value=''><input type='hidden' name='subCatId' value='' id='subCatId'><input type='hidden' name='isBlueColor' id='isBlueColor' value='False'><div class='form-group col-md-12'><label for=''>Skill Description&nbsp:</label><textarea name='txtDescription' id='txtDescription' cols='30' rows='3' class='form-control'></textarea></div><div class='form-group col-md-12'><label for=''>Extracurricular Activities&nbsp:</label><textarea name='txtActivities' id='txtActivities' cols='30' rows='3' class='form-control'></textarea></div><div class='col-md-12 btn-form-control'><a href='javascript:void(0)' class='btn btn-primary save' onclick=commonUpdate('step_04_update_spe.asp','speForm','spe_0','EN');>Save</a> <a href='step_04_view.asp'; class='btn btn-cancel'>Close</a> </div></form></div>";
        document.getElementById("div_spe").innerHTML=strhtml;
        $('#div_' + type + ' .edit-tools').css("display", "none");
    }

    function getAddform(type)
    {
        $("#noData_" + type).hide();
        $("#btnAdd_" + type).prop('disabled', true);
        document.getElementById("div_"+type).innerHTML="";



        if ($("body  #"+type+"ItemNo").last().val()!=null){
            itemno=parseInt($("body  #"+type+"ItemNo").last().val());
        }
        else{
            itemno=-1;
        }

        itemno=itemno+1;
        //alert(itemno);
        //if($('#commonForm_tr_'+type+'_'+itemno).length == 0)
        if ((type)=="lan")
        {
            var strhtml="<div class='all-info'><div class='sub-header'><h4>Language </h4><div class='edit-tools'><button class='btn edit-btn'><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'><i class='icon-trush-can'></i>&nbsp;Delete</button></div></div><div id='alertDiv_lan'></div><form class='row view-mode' action='step_04_update_lan.asp' method='post'><div class='form-group col-md-6'><label for=''>Language<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_lan' id='50' name='txtLanguage' placeholder='' value=''><input type='hidden' value='-1' name='txtLanguageID' /><input type='hidden' class='form-control' placeholder='' id='lanItemNo' name='txtLanItemNo' value=''> </div><div class='form-group col-md-6'><label for=''>Reading&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control mandatory jqValidate_lan' name='drpReading' id='10'><option value='Select'>Select</option><option value='High'>High</option><option value='Medium'>Medium</option><option value='Low'>Low</option></select></div><div class='form-group col-md-6'><label for=''>Writing&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control mandatory  jqValidate_lan' name='drpWriting' id='10'><option value='Select'>Select</option><option value='High'>High</option><option value='Medium'>Medium</option><option value='Low'>Low</option></select></div><div class='form-group col-md-6'><label for=''>Speaking&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control mandatory  jqValidate_lan' name='drpSpeaking' id='10'><option value='Select'>Select</option><option value='High'>High</option><option value='Medium'>Medium</option><option value='Low'>Low</option></select></div><div class='col-md-12 btn-form-control hidden'><a href=javascript:void(0); class='btn btn-primary save' id='formSubmit'>Save</a><a href=javascript:void(0); onClick=closeDiv('lan'); class='btn btn-cancel'>Close</a></div></form></div>";
        }
        else
        {
            var strhtml="<div class='all-info '><div class='sub-header'><h4>Reference </h4><div class='edit-tools' style='display:block'><button class='btn edit-btn'><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn' <i class='icon-trush-can'></i>&nbsp;Delete</button></div></div><div id='alertDiv_ref' ></div><form class='row view-mode' action='step_04_update_ref.asp' method='post'><div class='col-md-9 col-xs-9'><input type='hidden' name='hR_Code' id='hR_Code' value='-1'/><input type='hidden' id='refItemNo' name='txtRefItemNo' value=''/></div><div class='col-md-6'><div class='row'><div class='form-group col-md-12'><label for=''>Name&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' name='txtName' id='50' class='form-control mandatory jqValidate_ref' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Designation&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' name='txtDesignation' id='50' class='form-control mandatory jqValidate_ref' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Mobile&nbsp;</label><input type='text' name='txtMobile' id='50' class='form-control jqValidate_ref' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Email&nbsp;</label><input type='text' name='txtEmail' id='50' class='form-control jqValidate_ref' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Relation&nbsp;</label><select class='form-control jqValidate_ref' name='drpRelation' id='cboRRelation1'><option value='Relative'>Relative</option><option value='Family Friend'>Family Friend</option><option value='Academic'>Academic</option><option value='Professional'>Professional</option><option value='Others'>Others</option></select></div></div></div><div class='col-md-6'><div class='row'><div class='form-group col-md-12'><label for=''>Organization&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' name='txtOrganization' id='50' class='form-control mandatory jqValidate_ref' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Phone (Off)&nbsp;</label><input type='text' name='txtPhoneOffice' id='50' class='form-control jqValidate_ref' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Phone (Res)&nbsp;</label><input type='text' name='txtPhoneHome' id='50' class='form-control jqValidate_ref' placeholder='' value=''><input type='hidden' name='isBlueColor' id='isBlueColor' value='False'></div><div class='form-group col-md-12'><label for=''>Address</label><textarea name='txtAddress' id='250' cols='30' rows='3' class='form-control jqValidate_ref_'></textarea></div></div></div><div class='col-md-12 btn-form-control hidden'><a id='formSubmit' class='btn btn-primary save' href='javascript:void(0)' >Save</a><a href='javascript:void(0)' onClick=closeDiv('ref')  class='btn btn-cancel'>Close</a></div></form></div>";

        }

        document.getElementById('div_'+type).innerHTML=strhtml;
        $('#div_'+type+'  #'+type+'ItemNo').last().val(itemno);
        $('#div_'+type+' form').attr('id',type+'Form_'+itemno)
        $('#div_'+type+' .all-info').addClass(type+"_"+itemno);
        $('#div_'+type+' h4').append(" "+(itemno+1));
        if ((type)=="lan")
        {
            $('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_04_update_lan.asp','lanForm_"+itemno+"','lan_"+itemno+"','EN');")
        }
        else
        {
            $('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_04_update_ref.asp','refForm_"+itemno+"','ref_"+itemno+"','EN');")
        }
        $('#div_'+type).show();
        $('#div_' + type + ' form').removeClass("view-mode");
        $('#div_' + type + ' form div').last().removeClass("hidden");
        $('#div_' + type + ' .edit-tools').css("display", "none");
        /*var value=$("#commonForm_tr_"+itemno+" #trItemNo").val();
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





