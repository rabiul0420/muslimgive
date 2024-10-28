@extends('layouts.app_cv')
@section('content')
	<div class="leftsidebar">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class="active">My Profile</li>
			</ul>
			<div class="row">
				<div class="col-md-3 sidebar">
					@include('layouts.profile_left')
				</div>


				<div class="col-md-9 content">

					<div class="big-card">


						<div class="btn-group tab-group" role="group" aria-label="...">
							<FORM action="LinkSubmit.asp" method="post" name="formPS_View" id="formPS_View">
								<input name="hPS" type="hidden" id="hPS" value="false"/>


								<button type="button" onclick="location.href='{{ url('resume-view-step1') }}'"><i class="fa fa-user"></i>&nbsp;Personal</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step2') }}'" class="btn active btn-tab-personal" onclick=javascript:PassUserID('Education'); class="btn btn-tab-education"  ><i class="fa fa-graduation-cap"></i>&nbsp;Education/Training</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step3') }}'" onclick=javascript:PassUserID('Employment'); class="btn btn-tab-employment"><i class="fa fa-briefcase"></i>&nbsp;Employment</button>
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






						<!-- Tab panes -->
						<div class="loader"></div>

						<div class="panel-group resume-panel-group education" id="accordion2" role="tablist" aria-multiselectable="true">
							<!-- academic qualification-->
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" class="" data-toggle="collapse" data-parent="#accordion2" href="#educationOne" aria-expanded="true" aria-controls="educationOne">
											Academic Summary&nbsp;<i class="indicator icon-minus"></i>
										</a>
									</h4>
								</div>
								<div id="educationOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<div id="commonForm_aca">

											<!--<div class="panel-body">-->

											<div class="empty-message m-t-40" id="noData_aca" style="display:block">
												<i class="fa fa-graduation-cap"></i>
												<p>
													Currently no data exist! Please click on the following <br />button to add your academic qualification .
												</p>
												<!-- <button class="btn btn-gray m-t-10"><i class="icon-plus"></i>&nbsp;Add Training</button>-->
											</div>
										</div>
										<div id="div_aca">
										</div>
										<div class='text-center'>

											<button class="btn btn-gray m-t-10" id="btnAdd_aca" onclick="getAddform('aca');" ><i class="icon-plus"></i>&nbsp;Add Education (If Required)</button>
										</div>
										<!--</div>-->
									</div>
								</div>
							</div>

							<!-- end academic qualification -->
							<!-- training -->
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#educationTwo" aria-expanded="true" aria-controls="educationTwo">
											Training Summary&nbsp;<i class="indicator icon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="educationTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<!-- If no information found then show this message -->
										<div id="commonForm_tr">



											<div class="empty-message m-t-40" id="noData_tr" style="display:block">
												<i class="icon icon-graduation-cap"></i>
												<p>
													Currently no data exist! Please click on the following <br />button to add your training information.
												</p>
												<!-- <button class="btn btn-gray m-t-10"><i class="icon-plus"></i>&nbsp;Add Training</button>-->
											</div>


										</div>
										<!-- If no information found then show this message -->
										<div id="div_tr">

										</div>
										<div class='text-center'>
											<!--<button class="btn btn-gray m-t-10" id="btnAdd_tr" onclick="addCommonForm('tr');"><i class="icon-plus"></i>&nbsp;Add Training</button>-->
											<button class="btn btn-gray m-t-10" id="btnAdd_tr" onclick="getAddform('tr');" ><i class="icon-plus"></i>&nbsp;Add Training (If Required)</button>
										</div>
									</div>
								</div>
							</div>
							<!-- end training-->
							<!-- professional qualification -->
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#educationThree" aria-expanded="true" aria-controls="educationThree">
											Professional Certification Summary&nbsp;<i class="indicator icon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="educationThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: auto;">

									<p id="global_error_message_container" class="message_container">

										<span id="global_error_message"></span>
									</p>
									<div class="panel-body">
										<div id="commonForm_pq">

											<div class="empty-message m-t-40" id="noData_pq" style="display:block">
												<i class="icon icon-graduation-cap"></i>
												<p>Currently no data exist! Please click on the following button to add your professional qualification.</p>
											</div>


										</div>

										<div id="div_pq" style="display:none">

										</div>
										<div class='text-center'>
											<button class="btn btn-gray m-t-10" id="btnAdd_pq"   onclick="getAddform('pq');"><i class="icon-plus"></i>&nbsp;Add Professional Qualification </button>
										</div>
									</div>
								</div>
							</div>
							<!-- end professional qualification -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>

@endsection

@section('js')



	<script type="text/javascript">

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
            if ((type)=="aca")
            {
                var strhtml="<div class='all-info aca_0'><div class='sub-header'><div id='alertDiv_aca'></div><h4>Academic </h4><div class='edit-toolsedit-tools'><button class='btn edit-btn' ><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'></i>&nbsp;Delete</button></div></div><form class='row' id='educationFormInsert'><div class='col-md-6'><div class='row'> <div class=\'form-group col-md-12\'><label for=''>Level of Education&nbsp;<abbr title='Required' class='required'></abbr></label><select required='required' class='form-control' name='cboEduLevel' id='cboEduLevel' onchange=getEduTitle(this,'','','');><option value='-3'>PSC/5 pass</option><option value='-2'>JSC/JDC/8 pass</option><option value='1' Selected>Secondary</option><option value='2'>Higher Secondary</option><option value='3'>Diploma</option><option value='4'>Bachelor/Honors</option><option value='5'>Masters</option><option value='6'>PhD (Doctor of Philosophy)</option></select><div class='checkbox btn-form-control' id='showDegree' style='display:none;'><label><input  class='email-notification-checkbox ' style='float:left' type='checkbox' name='chkSwFrist' id='chkSwFrist' >Show this degree in summary view at employer's end</label></div></div><div class=\'education-type form-group col-md-12\'><label for=''>Exam/Degree Title:<abbr title='Required' class='required'></abbr></label><div class='row'><div class='col-md-12' id='divEduType' style='display:block;'><select class='form-control' name='txtExamTitle' id='txtExamTitle' onchange=DisableOtherEduType();><option value='SSC'>SSC</option><option value='O Level'>O Level</option><option value='Dakhil (Madrasah)'>Dakhil (Madrasah)</option><option value='SSC (Vocational)'>SSC (Vocational)</option><option value='others'>Other</option></select></div><div class='col-md-12'><input type='text' class='form-control m-t-10' style='display:none;'name='hiddenOtherEduType' id='hiddenOtherEduType' placeholder='Type exam/degree title' value=''><input type='hidden' value='1' name='educationTypeId' id='educationTypeId'/></div></div></div><input type='hidden' id='hecode' name='hecode' value='-1' /><input type='hidden' name='item_no' value='' id='acaItemNo' /><div class=\'form-group col-md-12\'><label for=''>Concentration/ Major/Group&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' id='txtMajorGroup' name='txtMajorGroup' class=\'form-control autosuggest ui-autocomplete-input\' placeholder='' value='' onClick=SetParam(6,'majorGroup','',7,'');><input type='hidden' name='hidMajor' id='hidMajor' /></div><div class=\'form-group col-md-12\' id='showBoard'><label for=''>Board&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control' name='txtExamBoard' id='txtExamBoard' ><option value='-1' Selected>Select</option><option value='6'>Barishal</option><option value='5'>Chattogram</option><option value='3'>Cumilla</option><option value='1'>Dhaka</option><option value='10'>Dinajpur</option><option value='4'>Jashore</option><option value='2'>Rajshahi</option><option value='7'>Sylhet</option><option value='8'>Madrasah</option><option value='9'>Technical</option></select></div> <div class=\'form-group col-md-12\'><label for=''>Institute Name&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' id='txtInstituteName' name='txtInstituteName' class=\'form-control autosuggest ui-autocomplete-input\' placeholder='' value='' onClick=SetParam(5,'institute','',8,'');> <label class=\'checkbox-inline m-t-10 btn-form-control\'><input type='hidden' name='hiddenInstitute' id='hiddenInstitute' /><input type='checkbox' onclick=ForeignInstituteValueChange('educationFormInsert'); id='chkFInst' name='chkFInst' value='false'> This is a foreign institute </label></div></div></div><div class='col-md-6'><div class='row'><div class=\'form-group col-md-12\'> <label for=''>Result&nbsp;<abbr title='Required' class='required'></abbr></label><select required='required' class='form-control' name='cboResult' id='cboResult' onchange=ShowMarkORGrade('educationFormInsert');><option value='-1' Selected>Select</option><option value='15'>First Division/Class</option><option value='14'>Second  Division/Class</option><option value='13'>Third Division/Class</option><option value='11'>Grade</option><option value='12'>Appeared</option><option value='10'>Enrolled</option><option value='9'>Awarded</option><option value='0'>Do not mention</option><option value='8'>Pass</option> </select><label class=\'checkbox-inline m-t-10 btn-form-control\' id='hideMarks' style='display:none;'><input id='chkHideMarks' name='chkHideMarks'  value='1' type='checkbox' onclick=PopulateMarksOption('educationFormInsert');> Hide Marks/CGPA</label> </div><div class=\'form-group col-md-12 hidden\' id='marksDiv'><label for='' id='labMarks'> Marks&nbsp;(%)&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' id='txtMarks' name='txtMarks' onblur='extractNumber(this,2,false)' onkeyup='extractNumber(this,2,false)' onkeypress='return blockNonNumbers(this, event, true, false);' class='form-control' placeholder='' value=''></div><div class=\'form-group col-md-12 hidden\' id='scaleDiv'> <label for=''>Scale&nbsp;<abbr title='Required' class='required'></abbr></label><input class='form-control' id='txtScale' name='txtScale' onblur='extractNumber(this,2,false)' onkeyup='extractNumber(this,2,false)' onkeypress='return blockNonNumbers(this, event, true, false);' placeholder='' value=''  type='text'></div><div class=\'form-group col-md-12\'><label for='' id='yrsOfPass'><span>Year of Passing</span>&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control' name='cboPassingYear' id='cboPassingYear'><option value='-1' Selected>Year</option><option value='2024'>2024</option><option value='2023'>2023</option><option value='2022'>2022</option><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option></select></div><div class=\'form-group col-md-12\'><label for=''>Duration&nbsp;<small>(Years)</small></label><input type='text' class='form-control' placeholder='' value='' name='txtEduDuration'></div><input type='hidden' name='isBlueColor' id='isBlueColor' value='False'></div></div><div class=\'form-group col-md-12\'> <label for=''>Achievement</label><input type='text' class='form-control' placeholder='' value='' name='txtAchievement'> </div><div class=\'col-md-12 btn-form-control\'> <a href=javascript:void(0); class='btn btn-primary save' id='formSubmit'>Save</a><a onClick=closeDiv('aca'); class=\'btn btn-cancel\' href=javascript:void(0);>Close</a></div></form></div>";

            }
            else if ((type)=="tr")
            {
                var strhtml="<div class='all-info'><div class='sub-header'><h4>Training</h4><div class='edit-tools'><button class='btn edit-btn'><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'><i class='icon-trush-can'></i>&nbsp;Delete</button></div></div><div id='alertDiv_tr'></div><form class='row view-mode'  action='step_02_update_tr.asp' method='post'><div class='form-group col-md-6'><label for=''>Training Title&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' id='100' placeholder='' name='txtTitle' value=''><input type='hidden' class='form-control' placeholder='' name='txtT_ID' value='-1' ><input type='hidden' class='form-control' placeholder='' id='trItemNo' name='txtTrItemNo' value=''></div><div class='form-group col-md-6'><label for=''>Country&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' id='50' placeholder='' name='txtCountry' value=''></div><div class='form-group col-md-6'><label for=''>Topics Covered</label><input type='text' class='form-control  jqValidate_tr txtTopic' id='300' placeholder='' name='txtTopic'  value=''></div><div class='form-group col-md-6'><label for=''>Training Year&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control mandatory jqValidate_tr' name='drpYear' id=''><option value='' selected='selected'>Select</option><option value='2024'>2024</option><option value='2023'>2023</option><option value='2022'>2022</option><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option></select></div><div class='form-group col-md-6'><label for=''>Institute&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' id='80' placeholder='' name='txtInstitute' value=''></div><div class='form-group col-md-6'><label for=''>Duration&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' placeholder='' id='10' name='txtDuration' value=''></div><div class='form-group col-md-6'><label for=''>Location</label><input type='text' class='form-control jqValidate_tr' id='50' placeholder='' name='txtLocation' value=''><input type='hidden' name='isBlueColor' id='isBlueColor' value='False'></div><div class='col-md-12 btn-form-control hidden'><a href=javascript:void(0); class='btn btn-primary save' id='formSubmit'>Save</a><a href=javascript:void(0); onClick=closeDiv('tr'); class='btn btn-cancel'>Close</a></div></form></div>";

            }
            else if ((type)=="pq")
            {
                var strhtml="<div class='all-info'><div class='sub-header'><h4>Professional Qualification </h4><div class='edit-tools'><button class='btn edit-btn'><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'><i class='icon-trush-can'></i>&nbsp;Delete</button></div></div><div id='alertDiv_pq'></div><form class='row view-mode' name='pqForm' method='post' action='step_02_update_prq.asp'><div class='col-md-9 col-xs-9'><input type='hidden' name='txtPQ_Code' id='pQ_Code' value='-1'><input type='hidden' id='pqItemNo'  name='txtPqItemNo' value=''></div><div class='col-md-6'><div class='row'><div class='form-group col-md-12'><label for=''>Certification&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_pq' id='80' name='txtCertification' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Institute&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' name='txtInstitute' class='form-control mandatory jqValidate_pq' id='80' placeholder='' value=''></div></div></div><div class='col-md-6'><div class='row'><div class='form-group col-md-12'><label for=''>Location</label> <input type='text' name='txtLocation' class='form-control jqValidate_pq' id='50' placeholder='' value=''></div><div class='form-group col-md-12' style='margin:0;'><label for=''>Certification Period&nbsp;<abbr title='Required' class='required'></abbr></label></div><div class=\'form-group col-md-6\'><input type='text' name='calFromDate' class='form-control  mandatory jqValidate_pq datepicker fromDate' id='1000' placeholder='mm/dd/yyyy' value=''></div><div class=\'form-group col-md-6\'><input type='text' name='calToDate' class='form-control  mandatory jqValidate_pq datepicker toDate greater' id='1000' placeholder='mm/dd/yyyy' value=''></div></div></div><input type='hidden' name='hCurrentDate' id ='hCurrentDate' value='3/26/2019'><div class='col-md-12 btn-form-control hidden'><a id='formSubmit' class='btn btn-primary save' href='javascript:void(0)'>Save</a><a href=javascript:void(0); onClick=closeDiv('pq'); class='btn btn-cancel'>Close</a></div></form></div>";

            }

            document.getElementById('div_'+type).innerHTML=strhtml;
            $('#div_'+type+'  #'+type+'ItemNo').last().val(itemno);
            if (type != "aca")
            {
                $('#div_'+type+' form').attr('id',type+'Form_'+itemno)
            }
            $('#div_'+type+' .all-info').addClass(type+"_"+itemno);
            $('#div_'+type+' h4').append(" "+(itemno+1));

            if ((type)=="aca")
            {
                $('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_02_update_aca.asp','educationFormInsert','aca_"+itemno+"','EN');")
            }
            else if ((type)=="tr")
            {
                $('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_02_update_tr.asp','trForm_"+itemno+"','tr_"+itemno+"','EN','"+itemno+"','tr');")
            }
            else if ((type)=="pq")
            {
                $('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_02_update_prq.asp','pqForm_"+itemno+"','pq_"+itemno+"','EN',"+itemno+",'pq');")
            }

            $('#div_'+type).show();
            $('#div_' + type + ' form').removeClass("view-mode");
            $('#div_' + type + ' form div').last().removeClass("hidden");
            $('#div_' + type + ' .edit-tools').css("display", "none");


        }



        $('body').on('focus',".datepicker", function(){

            $(this).datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function(ev){
                $(this).datepicker('hide');
            });
        });


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









