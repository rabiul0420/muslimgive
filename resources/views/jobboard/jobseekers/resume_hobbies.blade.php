@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">

				<!-- Sidebar -->
				<div class="col-md-3 sidebar-left  hidden-xs">
				    @include('jobboard.common.seeker_panel')	                                   									  					 
			    </div>
			
				<!-- Content -->
				<div class="col-sm-9 padding-10 page-content col-thin-left">
					<div class="category-list">
						<div class="tab-box ">
						   <ul id="ad_type" class="nav nav-tabs add-tabs" role="tablist">
								<li class="@php echo (Request::segment(1)=='resume-view-step1')?'active':'' @endphp">
									<a href="{{url('resume-view-step1')}}" role="tab">Personal </a>
								</li>
								<li class="@php echo (Request::segment(1)=='resume-view-step2')?'active':'' @endphp">
									<a href="{{url('resume-view-step2')}}" role="tab">Education/Training </a>
								</li>
								<li class="@php echo (Request::segment(1)=='resume-view-step3')?'active':'' @endphp">
									<a href="{{url('resume-view-step3')}}" role="tab">Experience </a>
								</li>
								<li class="@php echo (Request::segment(1)=='resume-view-step4')?'active':'' @endphp">
									<a href="{{url('resume-view-step4')}}" role="tab">Language Skills</a>
								</li>
								<li class="@php echo (Request::segment(1)=='resume-others-skill')?'active':'' @endphp">
									<a href="{{url('resume-others-skill')}}" role="tab">Other Skills</a>
								</li>
								<li class="@php echo (Request::segment(1)=='resume-hobbies')?'active':'' @endphp">
									<a href="{{url('resume-hobbies')}}" role="tab">Hobbies </a>
								</li>
								<li class="@php echo (Request::segment(1)=='resume-reference')?'active':'' @endphp">
									<a href="{{url('resume-reference')}}" role="tab">Reference </a>
								</li>
							</ul>						
						</div>
					</div>
					 
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
						    <div class="panel-heading">
							    <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                 Specialization </a></h4>
						    </div>
						    <div id="collapseOne" class="panel-collapse collapse in">
							    <div class="panel-body" id="panelBody_spe">
                        		    <div id="commonForm_spe">
                                		<div id="commonForm_spe_0">
                                            <div class="all-info spe_0"> 
											   <div id="alertDiv_spe">
											   </div> 
											   <div class="sub-header"> <!-- <h4>Fields of Specialization (Skills)</h4>--> 
												   <div class="edit-tools"> 
												   <button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
												   </div>
										        </div>
												
												
											   <form class="row specification-form view-mode" action="{{url('resume-view-step4-specification-edit-submit')}}" method="post" id="speForm">
												   {!! csrf_field() !!}							
											       <input type="hidden" name="id" value="<?php echo $resume->id ?>">
												    <div class="form-group col-md-12">
													    <div class="" id="SkillAreaDiv">
														   <label for="">Skills<span class="btn-form-control hidden">(max 10)</span></label>
														   <div id="lstJobArea">
															   <div class="selected-location">
																   <input type="text" id="txtSkillrea" name="skills" value="{{$resume->skills}}" class="autosuggest txt-add-location ui-autocomplete-input btn-form-control form-control" onclick="SetParam(4,'hid_SkArea','',9,'');" placeholder="Add more...">
																   <div class="chips-container" id="FilterSkill"></div>
																   <input type="hidden" name="hid_SkArea" id="hid_SkArea" readonly="readonly"> 
															   </div> 
														   </div> 
													    </div>
												    </div> 
												    <input id="hid_Skill" type="hidden" name="hid_Skill" value=""> 
												    <input type="hidden" name="subCatId" value="" id="subCatId"> 
												    <div class="form-group col-md-12"> 
												       <label for="">Skill Description&nbsp;</label>
													   <textarea name="skills_description" id="skills_description" cols="30" rows="3" class="form-control btn-form-control">{{$resume->skills_description}}</textarea>
													   <p class="onclick-hidden"></p>
												    </div>
												    <div class="form-group col-md-12"><label for="">Extracurricular Activities&nbsp;</label>
													   <textarea name="skills_activities" id="txtActivities" cols="30" rows="3" class="form-control btn-form-control">{{$resume->skills_activities}}</textarea>
													   <p class="onclick-hidden"></p>
												    </div>
													<div class="col-md-12 btn-form-control hidden">
														<button type="submit" class="btn btn-primary save">Save</button>
														<a href="{{url('resume-view-step4')}}" class="btn btn-cancel">Close</a>
													</div>
											   </form>
										    </div>
                                        </div>
                             	
										
                                    <div class="empty-message m-t-40" id="noData_spe" style="display:none" ;="">
                                   	   <i class="icon icon-ribbon"></i>

                                        <p>Currently no data exist! Please click on the following button to add your specialization and extra curricular activities.</p>
                                     <div>
                                           <button onclick="getSpeAddForm('spe');" id="btnAdd_spe" class="btn btn-gray m-t-10"><i class="icon-plus"></i>&nbsp;Add specialization</button>							
                                     </div>  
                                   </div> 
                               
                              <div id="div_spe"></div>    
                             </div><!-- end commonForm_spe -->
                            </div>
						    </div>
						</div>
						
						
						<div class="panel panel-default">
						    <div class="panel-heading">
							    <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                  Language Proficiency   </a></h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse">
							    <div class="panel-body">
								    
									<?php foreach($resume->language as $k=>$row){ ?>
									
									<div id="div_lan">
										<div class="all-info lan_0">
										   <div class="sub-header"><h4>Language  <?php echo $k+1 ?></h4>
										   <div class="edit-tools">
										   <button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
										   <button class="btn lan-delete delete-btn" value="<?php echo $row->id ?>"><i class="icon-trush-can"></i>&nbsp;Delete</button>
										   </div>
										   </div>
										  
										    <form class="row language-form view-mode" action="{{url('resume-view-step4-language-edit-submit')}}" method="post" id="lanForm_0">
											   <input type="hidden" name="language_id" value="<?php echo $row->id ?>">
										       <input type="hidden" name="id" value="<?php echo $resume->id ?>">
											   <div class="form-group col-md-6">
												   <label for="">Language<abbr title="Required" class="required"></abbr></label>
												   <input type="text" class="form-control mandatory jqValidate_lan" id="50" name="language" placeholder="" value="{{$row->language}}">
												   <input type="hidden" value="-1" name="txtLanguageID">
												   <input type="hidden" class="form-control" placeholder="" id="lanItemNo" name="txtLanItemNo" value="0"> 
												</div>
											   <div class="form-group col-md-6">
												   <label for="">Reading&nbsp;<abbr title="Required" class="required"></abbr></label>
												   <select class="form-control mandatory jqValidate_lan" name="reading" id="10">
													   <option value="Select">Select</option>
													   <option value="High">High</option>
													   <option value="Medium">Medium</option>
													   <option value="Low">Low</option>
												   </select>
											   </div>
											   <div class="form-group col-md-6">
												   <label for="">Writing&nbsp;<abbr title="Required" class="required"></abbr></label>
												   <select class="form-control mandatory  jqValidate_lan" name="writing" id="10">
													   <option value="Select">Select</option><option value="High">High</option>
													   <option value="Medium">Medium</option><option value="Low">Low</option>
												   </select>
											   </div>
											   <div class="form-group col-md-6">
												   <label for="">Speaking&nbsp;<abbr title="Required" class="required"></abbr></label>
												   <select class="form-control mandatory  jqValidate_lan" name="speaking" id="10">
													   <option value="Select">Select</option>
													   <option value="High">High</option><option value="Medium">Medium</option>
													   <option value="Low">Low</option>
												   </select>
											   </div>
											   <div class="col-md-12 btn-form-control">
											   <button type="submit" class="btn btn-primary save">Save</button>
											   <a href="javascript:void(0);" onclick="closeDiv('lan');" class="btn btn-cancel">Close</a></div>
											</form>
										</div>
									</div>
									
									<?php } ?>
									
									
									<div style="display:none" class="div_lan_form" id="div_lan">
									    <input type="hidden" name="language_id" value="">
										<input type="hidden" name="id" value="<?php echo $resume->id ?>">
										<div class="all-info lan_0">
										   <div class="sub-header"><h4>Language  1</h4>
											   <div class="edit-tools" style="display: none;">
												   <button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
												   <button class="btn delete-btn"><i class="icon-trush-can"></i>&nbsp;Delete</button>
											   </div>
										   </div>
										
										    <form class="row language-form" action="{{url('resume-view-step4-language-edit-submit')}}" method="post" id="lanForm_0">
											    <input type="hidden" name="academic_id" value="">
												<input type="hidden" name="id" value="<?php echo $resume->id ?>">
												<div class="form-group col-md-6">
												   <label for="">Language<abbr title="Required" class="required"></abbr></label>
												   <input type="text" class="form-control mandatory jqValidate_lan" id="50" name="language" placeholder="" value="">
												   <input type="hidden" value="-1" name="txtLanguageID">
												   <input type="hidden" class="form-control" placeholder="" id="lanItemNo" name="txtLanItemNo" value="0"> 
												</div>
											   <div class="form-group col-md-6">
												   <label for="">Reading&nbsp;<abbr title="Required" class="required"></abbr></label>
												   <select class="form-control mandatory jqValidate_lan" name="reading" id="10">
													   <option value="Select">Select</option>
													   <option value="High">High</option>
													   <option value="Medium">Medium</option>
													   <option value="Low">Low</option>
												   </select>
											   </div>
											   <div class="form-group col-md-6">
												   <label for="">Writing&nbsp;<abbr title="Required" class="required"></abbr></label>
												   <select class="form-control mandatory  jqValidate_lan" name="writing" id="10">
													   <option value="Select">Select</option><option value="High">High</option>
													   <option value="Medium">Medium</option><option value="Low">Low</option>
												   </select>
											   </div>
											   <div class="form-group col-md-6">
												   <label for="">Speaking&nbsp;<abbr title="Required" class="required"></abbr></label>
												   <select class="form-control mandatory  jqValidate_lan" name="speaking" id="10">
													   <option value="Select">Select</option>
													   <option value="High">High</option><option value="Medium">Medium</option>
													   <option value="Low">Low</option>
												   </select>
											   </div>
											   <div class="col-md-12 btn-form-control">
											   <button type="submit" class="btn btn-primary save">Save</button>
											   <a href="javascript:void(0);" onclick="closeDiv('lan');" class="btn btn-cancel">Close</a></div>
											</form>
										</div>
									</div>                   	                   
                                    <button class="btn btn-add-lan btn-primary">add</button>
                                </div>
						    </div>
						</div>
						
						
						
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">								
                                 References  
							  </a>
							</h4>
						  </div>
						  <div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
                   
				            <?php foreach($resume->reference as $k=>$row){ ?> 
							 
								<div id="div_ref">
									<div class="all-info  ref_0">
										<div class="sub-header"><h4>Reference  <?php echo $k+1 ?></h4>
											<div class="edit-tools">
												<button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
												<button class="btn ref-delete delete-btn" value={{$row->id}} <i="">&nbsp;Delete</button>
											</div>
										</div>
									
										<form class="row reference-form view-mode" action="{{url('resume-view-step4-reference-edit-submit')}}" method="post" id="refForm_0">
											<input type="hidden" name="reference_id" value="{{$row->id}}">
											<input type="hidden" name="id" value="<?php echo $resume->id ?>">
											<div class="col-md-9 col-xs-9">
													<input type="hidden" name="hR_Code" id="hR_Code" value="-1">
													<input type="hidden" id="refItemNo" name="txtRefItemNo" value="0">
													</div>
													<div class="col-md-6">
														<div class="row">
															<div class="form-group col-md-12">
																<label for="">Name&nbsp;<abbr title="Required" class="required"></abbr></label>
																<input type="text" name="name" id="50" class="form-control mandatory jqValidate_ref" placeholder="" value="{{$row->name}}">
															</div>
															<div class="form-group col-md-12">
															<label for="">Designation&nbsp;<abbr title="Required" class="required"></abbr></label>
															<input type="text" name="designation" id="50" class="form-control mandatory jqValidate_ref" placeholder="" value="{{$row->designation}}">
															</div>
															<div class="form-group col-md-12">
															<label for="">Mobile&nbsp;</label>
															<input type="text" name="mobile" id="50" class="form-control jqValidate_ref" placeholder="" value="{{$row->mobile}}">
															</div>
															<div class="form-group col-md-12">
															<label for="">Email&nbsp;</label>
															<input type="text" name="email" id="50" class="form-control jqValidate_ref" placeholder="" value="{{$row->email}}">
															</div>
															<div class="form-group col-md-12">
																<label for="">Relation&nbsp;</label>
																<select class="form-control jqValidate_ref" name="relation" id="cboRRelation1">
																	<option value="Relative">Relative</option>
																	<option value="Family Friend">Family Friend</option>
																	<option value="Academic">Academic</option>
																	<option value="Professional">Professional</option>
																	<option value="Others">Others</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="row">
															<div class="form-group col-md-12">
															<label for="">Organization&nbsp;<abbr title="Required" class="required"></abbr></label>
															<input type="text" name="organization" id="50" class="form-control mandatory jqValidate_ref" placeholder="" value="{{$row->organization}}">
															</div>
															<div class="form-group col-md-12">
															<label for="">Phone (Off)&nbsp;</label>
															<input type="text" name="phone_off" id="50" class="form-control jqValidate_ref" placeholder="" value="{{$row->phone_off}}">
															</div>
															<div class="form-group col-md-12">
															<label for="">Phone (Res)&nbsp;</label>
															<input type="text" name="phone_res" id="50" class="form-control jqValidate_ref" placeholder="" value="{{$row->phone_res}}">
															</div>
															<div class="form-group col-md-12">
																<label for="">Address</label>
																<textarea name="address" id="250" cols="30" rows="3" class="form-control jqValidate_ref_">{{$row->address}}</textarea>
															</div>
														</div>
													</div>
											<div class="col-md-12 btn-form-control">
												<button type="submit" class="btn btn-primary save">Save</button>
												<a href="javascript:void(0)" onclick="closeDiv('ref')" class="btn btn-cancel">Close</a>
											</div>
										</form>
									</div>
								</div>
					
							<?php } ?>
					
					<div style="display:none" class="div_ref_form" id="div_ref">
						<div class="all-info  ref_0">
							<div class="sub-header"><h4>Reference  1</h4>
								<div class="edit-tools" style="display: none;">
									<button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
									<button class="btn delete-btn" <i="">&nbsp;Delete</button>
								</div>
							</div>
						
							<form class="row reference-form" action="{{url('resume-view-step4-reference-edit-submit')}}" method="post" id="refForm_0">
								<input type="hidden" name="reference_id" value="">
								<input type="hidden" name="id" value="<?php echo $resume->id ?>">
								<div class="col-md-9 col-xs-9">
								<input type="hidden" name="hR_Code" id="hR_Code" value="-1">
								<input type="hidden" id="refItemNo" name="txtRefItemNo" value="0">
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="form-group col-md-12">
										    <label for="">Name&nbsp;<abbr title="Required" class="required"></abbr></label>
										    <input type="text" name="name" id="50" class="form-control mandatory jqValidate_ref" placeholder="" value="">
										</div>
										<div class="form-group col-md-12">
										<label for="">Designation&nbsp;<abbr title="Required" class="required"></abbr></label>
										<input type="text" name="designation" id="50" class="form-control mandatory jqValidate_ref" placeholder="" value="">
										</div>
										<div class="form-group col-md-12">
										<label for="">Mobile&nbsp;</label>
										<input type="text" name="mobile" id="50" class="form-control jqValidate_ref" placeholder="" value="">
										</div>
										<div class="form-group col-md-12">
										<label for="">Email&nbsp;</label>
										<input type="text" name="email" id="50" class="form-control jqValidate_ref" placeholder="" value="">
										</div>
										<div class="form-group col-md-12">
											<label for="">Relation&nbsp;</label>
											<select class="form-control jqValidate_ref" name="relation" id="cboRRelation1">
												<option value="Relative">Relative</option>
												<option value="Family Friend">Family Friend</option>
												<option value="Academic">Academic</option>
												<option value="Professional">Professional</option>
												<option value="Others">Others</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="form-group col-md-12">
										<label for="">Organization&nbsp;<abbr title="Required" class="required"></abbr></label>
										<input type="text" name="organization" id="50" class="form-control mandatory jqValidate_ref" placeholder="" value="">
										</div>
										<div class="form-group col-md-12">
										<label for="">Phone (Off)&nbsp;</label>
										<input type="text" name="phone_off" id="50" class="form-control jqValidate_ref" placeholder="" value="">
										</div>
										<div class="form-group col-md-12">
										<label for="">Phone (Res)&nbsp;</label>
										<input type="text" name="phone_res" id="50" class="form-control jqValidate_ref" placeholder="" value="">
										</div>
										<div class="form-group col-md-12">
											<label for="">Address</label>
											<textarea name="address" id="250" cols="30" rows="3" class="form-control jqValidate_ref_"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12 btn-form-control">
									<button type="submit" class="btn btn-primary save">Save</button>
									<a href="javascript:void(0)" onclick="closeDiv('ref')" class="btn btn-cancel">Close</a>
								</div>
							</form>
						</div>
					</div>
					<button class="btn btn-add-ref btn-primary">add</button>
					
				
             </div>
						</div>
						
					  </div>
					</div>
				
			</div>
		</div>
	</div>
@endsection









