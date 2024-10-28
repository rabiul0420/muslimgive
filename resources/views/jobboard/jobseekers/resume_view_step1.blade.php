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
								<button type="button" onclick="location.href='{{ url('resume-view-step1') }}'" onclick=javascript:PassUserID('Education');  class="btn active btn-tab-personal"><i class="fa fa-user"></i>&nbsp;Personal</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step2') }}'"  class="btn btn-tab-education"  ><i class="fa fa-graduation-cap"></i>&nbsp;Education/Training</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step3') }}'" onclick=javascript:PassUserID('Employment'); class="btn btn-tab-employment"><i class="fa fa-briefcase"></i>&nbsp;Employment</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step4') }}'" onclick=javascript:PassUserID('Others'); class="btn btn-tab-others"><i class="fa fa-list"></i>&nbsp;Other Information</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step5') }}'" onclick=javascript:PassUserID('Photograph'); class="btn btn-tab-photograph"><i class="fa fa-camera"></i>&nbsp;Photograph</button>
							</FORM>
						</div>


						<div class="confirmation-message">
							<span id="c_msg"></span>
						</div>
						<div class="server-error">
							<span id="c_msg"></span>
						</div>

						<div class="loader"></div>

						<div style="" class="panel-group resume-panel-group personal" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" class="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Personal Details&nbsp;<i class="indicator icon-minus"></i>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="all-info per_0" id="per_0">
											<div class="sub-header">
												<div class="edit-tools">
													<button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
												</div>
											</div>
											<div id="alertDiv_per"></div>
											{!! Form::open(['url'=>'personal-form-edit-submit','files'=>true,'class'=>'row view-mode formSubmit']) !!}
											    <input type="hidden" value="{{ $basic_info->id }}" name="id">
												<div class="col-md-6">
													<div class="row">
														<div class="form-group col-md-12">
															<label for="">First Name&nbsp;<abbr title="Required" class="required"></abbr></label>
															<input type="text" class="form-control" placeholder="" value="{{ $basic_info->first_name }}" name="first_name" id="txtFirstName">
														</div>
														<div class="form-group col-md-12">
															<label for="">Last Name</label>
															<input type="text" class="form-control" placeholder="" value="{{ $basic_info->last_name }}" name="last_name" id="txtLastName">
														</div>
														<div class="form-group col-md-12">
															<label for="">Father's Name</label>
															<input type="text" class="form-control" placeholder="" value="{{ $basic_info->father_name }}" name="father_name" id="txtFName">
														</div>
														<div class="form-group col-md-12">
															<label for="">Mother's Name</label>
															<input type="text" class="form-control" placeholder="" value="{{ $basic_info->mother_name }}" name="txtMName" id="txtMName">
														</div>
														<div class="form-group col-md-12">
															<label for="">Date of Birth&nbsp;<abbr title="Required" class="required"></abbr></label>
															<input type="text" class="form-control datepicker" placeholder="" value="9/6/1999" name="txtBirthDate" id="txtBirthDate">
														</div>
														<div class="form-group col-md-12">
															<label for="">Gender&nbsp;<abbr title="Required" class="required"></abbr></label>
															<select name="cboGender"  id="cboGender" class="form-control">
																<option value="" selected>Select</option>
																<option value="Male" {{ ($basic_info->gender=='Male')?'selected':'' }}>Male</option>
																<option value="Female" {{ ($basic_info->gender=='Female')?'selected':'' }}>Female</option>
																<option value="Others" {{ ($basic_info->gender=='Others')?'selected':'' }} >Others</option>
															</select>
														</div>
														<div class="form-group col-md-12">
															<label for="">Religion</label>
															<input type="text" class="form-control" placeholder="" value="islam" name="txtReligion" id="txtReligion">
														</div>
														<div class="form-group col-md-12">
															<label for="">Marital Status&nbsp;<abbr title="Required" class="required"></abbr></label>
															<select name="cboMStatus" id="cboMStatus" class="form-control">
																<option value="-1" selected="selected">Select</option>
																<option value="2" selected>Unmarried</option>
																<option value="1" > Married </option>
																<option value="3" > Single </option>
															</select>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="row">
														<div class="form-group col-md-12">
															<div class="title-wrap">
																<label for="">Nationality&nbsp;<abbr title="Required" class="required"></abbr></label>
																<input class="form-control onclick-hidden" id="nViewFild" placeholder="" value="bangladeshi" type="text">
																<div class=" btn-form-control hidden">
																	<div>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="txtNationality" onClick="DisableNationality();" value="Bangladeshi"
																					   id="bangladeshi" > Bangladeshi
																			</label>
																		</div>
																	</div>
																</div>
															</div>

															<div class="row btn-form-control hidden">
																<div class="col-md-12">
																	<input type="text" class="form-control nationality" placeholder="For other country please type." value="bangladeshi" name="txtNationality" id="otherNationality">
																</div>
															</div>
														</div>

														<div class="form-group col-md-12">
															<label for="">National Id No</label>
															<input type="text" class="form-control" required placeholder="" value="" name="txtNationalId" id="txtNationalId">
														</div>

														<div class="form-group col-md-12">
															<label for="">Passport Number</label>
															<input type="text" class="form-control" placeholder="" value="" name="passportNo"  id="passportNo">
														</div>

														<div class="form-group col-md-12">
															<label for="">Passport Issue Date</label>
															<input type="text" class="form-control datepicker" placeholder="" value="" name="issueDate" id="issueDate">
															<input type="hidden" name="h_catId" value="" />
															<input type="hidden" name="isBlueColor" id="isBlueColor" value="False"/>
														</div>

														<div class="form-group col-md-12">
															<label for="" class="sui">Mobile No (Home)</label>
															<input type="text" class="form-control" placeholder="" value="{{ $basic_info->phone_h }}" name="phone_h" id="txtMobile" >
														</div>

														<div class="form-group col-md-12">
															<label for="">Mobile No 2</label>
															<input type="text" class="form-control" placeholder="" value="{{ $basic_info->phone_off }}" name="phone_off" id="txtPhone_H">
														</div>

														<div class="form-group col-md-12">
															<label for="" class="sui">Email</label>
															<input type="text" class="form-control" placeholder="" value="alamtuhin303@gmail.com" name="txtEmail1" id="txtEmail1" readonly>
														</div>
														<div class="form-group col-md-12">
															<label for="">Alternate Email</label>
															<input type="text" class="form-control" placeholder="" value="" name="txtEmail2"  id="txtEmail2">
															<input type="hidden" name="h_catId" value="" />
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="btn-form-control hidden">
														<button type="submit" class="btn btn-primary">Save</button>
														<a href="{{ url('resume-view-step1') }}" class="btn btn-default btn-cancel reset">Close</a>
													</div>
												</div>
											{!! Form::close() !!}
										</div>
									</div>
								</div><!-- end of collapseOne div-->
							</div><!-- end of personal details panel-->
							<!--start details address-->
							<div class="panel">

								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<!-- do in bangla -->
										<a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Address Details<i class="indicator icon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<div class="all-info adrs_0" style='display:block;'>
											<div class="sub-header">
												<div id="alertDiv_adrs"></div>
												<div class="edit-tools">
													<button class="btn edit-btn" id="addressEditBtn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
												</div>
											</div>
											{!! Form::open(['url'=>'admin/system-settings','files'=>true,'class'=>'row view-mode','id'=>'addressForm']) !!}

												<div class="col-md-6">
													<div class="address-wrap">
														<div class="form-group">
															<label for="presentAddress">Present Address<abbr title="Required" class="required"></abbr>
															</label>
															<div id="txtPresentAdd" cols="30" class="height-2x address_Previous" style="margin-bottom: 5px;">house182/road25, Pallabi, Dhaka</div>

														</div>



														<div class="select-wrap ">
															<div class="row">
																<div class="col-sm-4 pr-control btn-form-control hidden">
																	<div class="form-group">
																		<select class="form-control" id="present_district" name="present_district" onchange="GetLoadLocations(0,'present','EN','addressForm');">
																			<option value="-1" selected="">Select District</option>
																			<option value='1'>Brahmanbaria</option><option value='2'>Bagerhat</option><option value='3'>Bandarban</option><option value='4'>Barishal</option><option value='5'>Bhola</option><option value='6'>Bogura</option><option value='7'>Barguna</option><option value='8'>Chandpur</option><option value='9'>Chapainawabganj</option><option value='10'>Chattogram</option><option value='11'>Chuadanga</option><option value='12'>Cumilla</option><option value='13'>Cox's Bazar</option><option value='14' Selected>Dhaka</option><option value='15'>Dinajpur</option><option value='16'>Faridpur</option><option value='17'>Feni</option><option value='18'>Gaibandha</option><option value='19'>Gazipur</option><option value='20'>Gopalganj</option><option value='21'>Habiganj</option><option value='22'>Jamalpur</option><option value='23'>Jashore</option><option value='24'>Jhalokathi</option><option value='25'>Jhenaidah</option><option value='26'>Joypurhat</option><option value='27'>Khagrachari</option><option value='28'>Khulna</option><option value='29'>kishoreganj</option><option value='30'>Kurigram</option><option value='31'>Kushtia</option><option value='32'>Lalmonirhat</option><option value='33'>Laxmipur</option><option value='34'>Madaripur</option><option value='35'>Magura</option><option value='36'>Manikganj</option><option value='37'>Meherpur</option><option value='38'>MoulaviBazar</option><option value='39'>Munshiganj</option><option value='40'>Mymensingh</option><option value='41'>Naogaon</option><option value='42'>Narail</option><option value='43'>Narayanganj</option><option value='44'>Narsingdi</option><option value='45'>Natore</option><option value='46'>Netrokona</option><option value='47'>Nilphamari</option><option value='48'>Noakhali</option><option value='49'>Pabna</option><option value='50'>Panchagarh</option><option value='51'>Patuakhali</option><option value='52'>Pirojpur</option><option value='53'>Rajbari</option><option value='54'>Rajshahi</option><option value='55'>Rangamati</option><option value='56'>Rangpur</option><option value='57'>Satkhira</option><option value='58'>Shariatpur</option><option value='59'>Sherpur</option><option value='60'>Sirajganj</option><option value='61'>Sunamganj</option><option value='62'>Sylhet</option><option value='63'>Tangail</option><option value='64'>Thakurgaon</option>
																		</select>
																	</div>
																</div>
																<div class="col-sm-4 p-control btn-form-control hidden">
																	<div class="form-group" id="present_thanaLocation">
																		<select class="form-control" id="present_thana" name="present_thana" onchange="GetLoadLocations(1,'present','EN','addressForm');">
																			<option value="-1" selected="">Select Thana</option>
																			<option value='1102'>Adabor</option><option value='1126'>Badda</option><option value='1146'>Bangsal</option><option value='1178'>Bimanbandar</option><option value='1194'>Cantonment</option><option value='1195'>Chak Bazar</option><option value='1224'>Dakshinkhan</option><option value='1227'>Darus Salam</option><option value='1238'>Demra</option><option value='1242'>Dhamrai</option><option value='1244'>Dhanmondi</option><option value='1253'>Dohar</option><option value='1280'>Gendaria</option><option value='1293'>Gulshan</option><option value='1306'>Hazaribagh</option><option value='1320'>Jatrabari</option><option value='1333'>Kadamtali</option><option value='1334'>Kafrul</option><option value='1337'>Kalabagan</option><option value='1354'>Kamrangirchar</option><option value='1368'>Keraniganj</option><option value='1376'>Khilgaon</option><option value='1377'>Khilkhet</option><option value='1383'>Kotwali</option><option value='1397'>Lalbagh</option><option value='1431'>Mirpur</option><option value='1438'>Mohakhali</option><option value='1439'>Mohammadpur</option><option value='1448'>Motijheel</option><option value='1482'>Nawabganj</option><option value='1486'>Newmarket</option><option value='1498' Selected>Pallabi</option><option value='1499'>Paltan</option><option value='1538'>Ramna</option><option value='1540'>Rampura</option><option value='1554'>Sabujbagh</option><option value='1570'>Savar</option><option value='1572'>Shah Ali</option><option value='1574'>Shahbag</option><option value='1584'>Sher-e-Bangla Nagar</option><option value='1593'>Shyampur</option><option value='1617'>Sutrapur</option><option value='1629'>Tejgaon</option><option value='1630'>Tejgaon Industrial Area</option><option value='1640'>Turag</option><option value='1644'>Uttar Khan</option><option value='1645'>Uttara</option><option value='1658'>Joypara</option><option value='1664'>Ashulia</option><option value='1665'>Rupnagar</option><option value='1678'>Shahjahanpur</option><option value='1679'>Shahjalal Airport</option><option value='1680'>Uttara East</option><option value='1681'>Uttara West</option><option value='1682'>Vatara</option><option value='1683'>Wari</option><option value='1684'>Bangshal</option><option value='1685'>Dakshin Keraniganj</option><option value='1686'>Dakshin Khan</option><option value='1687'>Darussalam</option><option value='1688'>Dhaka Railway</option><option value='1689'>Gandaria</option><option value='1690'>Mugda</option><option value='1691'>New Market</option><option value='1692'>Shahbagh</option><option value='1693'>South Keraniganj</option><option value='1694'>Vashantek</option><option value='1752'>New Market TSO</option><option value='4006'>Shantinagar</option><option value='4007'>Banani</option>
																		</select>
																	</div>
																</div>
																<div class="col-sm-4 pl-control btn-form-control hidden">
																	<div class="form-group" id="present_POLocation">
																		<select class="form-control" id="present_p_office" name="present_p_office">
																			<option value="-1" selected="">Select P.O</option>

																		</select>
																	</div>
																</div>
															</div>

														</div>

														<div class="form-group btn-form-control hidden">
															<input type="text" class="form-control" id="present_Village" name="present_Village" value="house182/road25" placeholder="Type your House No / Road / Village">
														</div>
													</div>

												</div>
												<div class="col-md-6">
													<div class="address-wrap permanent-address">
														<div class="title-wrap">
															<label for="permanentAddress">Permanent
																Address
															</label>
															<div class="checkbox btn-form-control hidden">
																<label><input type="checkbox" class="same-address" checked name="same_address">Same as Present Address</label>
															</div>
														</div>
														<div class="disable-area disable">
															<div class="form-group">
																<textarea name="txtPermanentAdd" id="txtPermanentAdd" cols="30" class="form-control height-2x address_Previous " style="margin-bottom: 5px;">Same as present</textarea>
															</div>
														</div>
													</div>
													<input type="hidden" name="present_adrsID" value="2459978"/>
													<input type="hidden" name="permanent_adrsID" value=""/>
												</div>
												<div class="col-md-12">
													<div class="btn-form-control hidden">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <a href="{{ url('resume-view-step1') }}" class="btn btn-default btn-cancel reset">Close</a>
													</div>
												</div>
											{!! Form::close() !!}
										</div>

									</div>
								</div>
							</div><!--end details address-->
							<!-- start career application information -->
							<div class="panel">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Career and Application Information&nbsp;<i class="indicator icon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<div class="all-info cai_0">
											<div class="sub-header">
												<div id="alertDiv_cai"></div>
												<!--<h4>Your career information</h4>-->
												<div class="edit-tools">
													<button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>

												</div>
											</div>
											{!! Form::open(['url'=>'personal-form-edit-submit','files'=>true,'class'=>'row view-mode formSubmit']) !!}
												<div class="col-md-12 form-group">
													<label for="">Objective&nbsp;</label>
													<textarea name="txtObjective" id="txtObjective" cols="10" rows="3" onkeyup="countLetter(this.id , 250 , 'CADD_sp' , 'Objective' , 1)" class="form-control height-2x"></textarea>
													<span id="CADD_sp" class="btn-form-control hidden" name="CADD_sp"></span>
												</div>
												<div class="col-md-6 form-group">
													<label for="">Present Salary</label>
													<input type="text" class="form-control" placeholder="" value="" name="txtPresentSalary" id="txtPresentSalary" onBlur="extractNumber(this,0,false)" onKeyPress="return blockNonNumbers(this, event, false, false);" onKeyUp=extractNumber(this,0,false) maxlength="10">
													<span class="input-note btn-form-control hidden">TK/ Month</span>
												</div>
												<div class="col-md-6 form-group">
													<label for="">Expected Salary</label>
													<input type="text" class="form-control" placeholder="" value="" name="txtExpectedSalary" id="txtExpectedSalary" onBlur="extractNumber(this,0,false)" onKeyPress="return blockNonNumbers(this, event, false, false);" onKeyUp="extractNumber(this,0,false)" maxlength="10">
													<span class="input-note btn-form-control hidden">TK/ Month</span>
												</div>

												<div class="col-md-6 form-group">
													<label for="">Looking for (Job Level)</label>

													<input class="form-control onclick-hidden" placeholder="" id="lookForView" value="" type="text">

													<div class="btn-form-control hidden">
														<label class="radio-inline">
															<input type="radio" name="optLevel" id="levelRadio" value="Entry" > Entry Level
														</label>
														<label class="radio-inline">
															<input type="radio" name="optLevel" id="levelRadio" value="Mid" > Mid Level
														</label>

														<label class="radio-inline">
															<input type="radio" name="optLevel" id="levelRadio" value="Top" > Top Level
														</label>
													</div>
												</div>
												<div class="col-md-6 form-group">
													<label for="">Available for (Job Nature)</label>

													<input class="form-control onclick-hidden" placeholder="" value="" type="text" id="availView">

													<div class="btn-form-control hidden">
														<label class="radio-inline">
															<input type="radio" name="optAvail" id="avaiRadio" value="Full Time" > Full time
														</label>
														<label class="radio-inline">
															<input type="radio" name="optAvail" id="avaiRadio" value="Part Time" > Part time
														</label>
														<label class="radio-inline">
															<input type="radio" name="optAvail" id="avaiRadio" value="Contract" > Contract
														</label>
													</div>
												</div>
												<div class="col-md-12">
													<div class="btn-form-control hidden">
														<a href="javascript:void(0)" class="btn btn-primary save" onclick="cnahgeValueCai();commonUpdate('step_01_update_cai.asp','caiForm','cai_0','EN');">Save</a>
														<a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class="btn btn-default btn-cancel reset">Close</a>
													</div>
												</div>
											{!! Form::close() !!}
										</div>

									</div>
								</div>
							</div>

						</div> <!-- end of accordion div -->
					</div><!-- another common div -->
				</div><!-- another common div -->
			</div><!-- another common div -->
		</div><!-- another common div -->
	</div>
	</div>
	</div>
	</div>

@endsection

@section('js')
	


	<script>

	$(document).ready(function() {
	   $(document).on("click", ".edit-tools .edit-btn", function(){
		$(this).parents('div.all-info').find('.edit-tools').hide();
		$(this).parents('div.all-info').find('.btn-form-control').removeClass('hidden');
		$(this).parents('div.all-info').find('.form-group').find('.onclick-hidden').addClass('yes');
		$(this).parents('div.all-info').find('.btn-form-control .btn').show();
	});



	$(document).on("click", ".tab-group .btn", function(){
		$(this).parents('div.tab-group').find('.btn').removeClass('active');
		$(this).addClass('active');
	});
	function toggleIcon(e) {
	$(e.target)
		.prev('.panel-heading')
		.find(".indicator")
		.toggleClass('icon-minus icon-plus');
	}
	$('.panel-group').on('hidden.bs.collapse', toggleIcon).css('color','#000');
	$('.panel-group').on('shown.bs.collapse', toggleIcon);

	// EDIT RESUME TAB
	$(document).on("click", ".btn-tab-personal", function(){
		$(this).parents('div.big-card').find('.resume-panel-group').hide();
		$('.resume-panel-group.personal').removeClass('hidden');
		$('.resume-panel-group.personal').show();
		// $('.loader').fadeIn();
	});
	$(document).on("click", ".btn-tab-education", function(){
		$(this).parents('div.big-card').find('.resume-panel-group').hide();
		$('.resume-panel-group.education').removeClass('hidden');
		$('.resume-panel-group.education').show();
	});
	$(document).on("click", ".btn-tab-employment", function(){
		$(this).parents('div.big-card').find('.resume-panel-group').hide();
		$('.resume-panel-group.employment').removeClass('hidden');
		$('.resume-panel-group.employment').show();
	});
	$(document).on("click", ".btn-tab-others", function(){
		$(this).parents('div.big-card').find('.resume-panel-group').hide();
		$('.resume-panel-group.others').removeClass('hidden');
		$('.resume-panel-group.others').show();
	});
	$(document).on("click", ".btn-tab-photograph", function(){
		$(this).parents('div.big-card').find('.resume-panel-group').hide();
		$('.resume-panel-group.photograph').removeClass('hidden');
		$('.resume-panel-group.photograph').show();
	});


	// Nationality
	$(document).on("click", ".onclick", function(){
		$(this).parents('div.btn-form-control').find('.onclick-show').removeClass('hidden');
	});
	$(document).on("click", ".onclick-o", function(){
		$(this).parents('div.btn-form-control').find('.onclick-show').addClass('hidden');
	});



	$(document).on("mouseover", ".chips-container a", function(){
		$(this).parents('div.chips-container .well').addClass('hover');
	});
	$(document).on("mouseout", ".chips-container a", function(){
		$(this).parents('div.chips-container .well').removeClass('hover');
	});


	// Wells onclick hide
	$(document).on("click", ".chips-container a.dismiss", function(){
		$(this).parents('div.well').fadeOut();
	});

	$(document).on("click", ".edit-tools .edit-btn", function(){
		$(this).parents('div.all-info').find('form').removeClass('view-mode');
	});

	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();
	});


	// GOOD AND ORDINARY EXAMPLE
	$(document).on("click", ".edit-tools .edit-btn", function(){
		$(this).parents('div.all-info').find('form').removeClass('view-mode');
	});

	// PHOTO UPLOAD EDIT RESUME
	$(function () {
		$(":file").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = imageIsLoaded;
				reader.readAsDataURL(this.files[0]);
			}
		});
	});

	function imageIsLoaded(e) {
		$('#userImg').attr('src', e.target.result);
	};


	$(function(){
		$('.has-spinner').click(function() {
			$(this).toggleClass('active');
		});
	});

	// UPLOADING
	$(document).on("click", ".btn-upload", function(){
		$(this).find('i.icon-upload').removeClass('icon-upload').addClass('spin icon-circle-loader');
		$(this).addClass('uploading');
	});
	$(document).on("click", ".tab-group .btn", function(){
		$(this).parents('div.big-card').find('.loader').show();
		$(this).find('.panel');
	});
	// $('.alert.alert-dismissible').fadeIn('fast').delay(2000).fadeOut('slow');
	// Applied globally on all textareas with the "autoExpand" class
	$(document).one('focus.autoExpand', 'textarea.autoExpand', function(){
		var savedValue = this.value;
		this.value = '';
		this.baseScrollHeight = this.scrollHeight;
		this.value = savedValue;
	})
	.on('input.autoExpand', 'textarea.autoExpand', function(){
		var minRows = this.getAttribute('data-min-rows')|0, rows;
		this.rows = minRows;
		rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
		this.rows = minRows + rows;
	});
	});


    $("body").on("submit", "form.formSubmit", function (e) {
        e.preventDefault();

        var id = $(this).parents('div.all-info').attr('id');


        var form = $(this);
        var formdata = false;
        if (window.FormData) {
            formdata = new FormData(form[0]);
        }

        var formAction = form.attr('action');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: formAction,
            type: 'POST',
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

                $('#'+id).find('form').addClass('view-mode');
                $('#'+id).find('.edit-tools').show();
                $('#'+id).find('.btn-form-control .btn').hide();

                /*$('form').hide('slow');
                $('.staff-delete').hide('slow')
                $('.modalhide').show();*/

                //datatables.ajax.reload();

              /*  var timesRun = 0;
                var interval = setInterval(function () {
                    timesRun += 1;
                    if (timesRun === 1) {
                        clearInterval(interval);
                    }
                    $('.modal').modal('hide');

                }, 10);*/

            }
        });
    });







	</script>







        
@endsection









