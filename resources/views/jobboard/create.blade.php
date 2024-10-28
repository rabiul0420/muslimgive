<?php
use Illuminate\Support\Facades\Input;

// Keywords
$keywords = Input::get('q');

// Category
//$qCategory = (isset($cat) and !empty($cat)) ? $cat->tid : Input::get('c');

$qCategory = '';


?>


{{--
 * LaraClassified - Geo Classified Ads CMS
 * Copyright (c) BedigitCom. All Rights Reserved
 *
 * Website: http://www.bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from Codecanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
--}}
@extends('layouts.master_job')



@section('javascript-top')
	@parent
	@if (config('services.googlemaps.key'))
	<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googlemaps.key') }}" type="text/javascript"></script>
	@endif
@endsection

@section('content')
	{!! csrf_field() !!}
	<div class="main-container directory_section">
        <div class="container">
	
			

			
			
			<div class="row">
				<div class="col-md-3 sidebar-left">
				    <div class="box-title text-center"> 
					   <h2>Your Accounts</h2>
					</div>
					<div class="container">
						<div class="category-links">
							<ul>
							    @if (!Session::get('is_logged_in'))
								<li><a href="{{ url('jobboard-login') }}">{{ t('Login') }}</a></li>
							    @else
							        @if (Session::get('is_logged_in'))
									<li><a href="{{ url('jobboard-create') }}">Add New Business</a></li>
								    <li><a href="{{ url('change-password') }}">Change Password</a></li>
								    <li><a href="{{ url('jobboard-logout') }}">{{ t('Signout') }} <i class="glyphicon glyphicon-off"></i> </a></li>
									@endif   
                               @endif								
							</ul>
						</div>
					</div>	                                    									  		       
				</div>
				 
				 <div class="col-sm-6 page-content">
                
				    
				
				
					<div class="inner-box">
						<h2 class="title-2"><i class="icon-docs yewllo"></i> <a href="">Submit Your Business</a></h2>
												
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('jobboard-submit') }}">
							{!! csrf_field() !!}
							
							<div class="box">		    
								<div class="row">						            			
									<div class="col-md-6">
										<div class="form-group">	
											<label>Company/Bussiness Name</label>
											<input type="text" name="company_name"  placeholder="Company/Bussiness Name" class="form-control">   
									    </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">	
											<label>Category</label>
											<select name="category_id" class="form-control">        
												<?php foreach($categories as $category){
														if($category->parent_id == 0){
															echo '<option value="'.$category->id.'">'.$category->name.'</option>';
														} else {
															echo '<option value="'.$category->id.'">---| '.$category->name.'</option>';
														}									
												  }
												?>																				
											</select>   
									    </div>
									</div>
							    </div>
								
								<div class="row">						            			
									<div class="col-md-12">
										<div class="form-group">	
											<label>Short Description</label>
											<textarea name="description" rows="3" placeholder="Short Description" class="form-control"></textarea>    
									    </div>
									</div>
							    </div>
								
								<div class="row">						            			
									<div class="col-md-12">
										<div class="form-group">	
											<label>Keywords</label>
										    <input type="text" name="keywords" placeholder="Please type keywords seperated by commas" class="form-control">     
									    </div>
									</div>
							    </div>

                                    
							
									

								

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Location</label>
										<select name="location_id" class="form-control">        
											<?php foreach($locations as $location){
										            if($location->parent_id == 0){
														echo '<option value="'.$location->id.'">'.$location->name.'</option>';
													} else {
														echo '<option value="'.$location->id.'">---| '.$location->name.'</option>';
													}									
									          }
                                            ?>																				
										</select>  
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Address</label>
										    <input type="text" name="address"  placeholder="Address" class="form-control">   
									    </div>
									</div>																		
							    </div>
								
								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Phone</label>
										    <input type="text" name="phone" placeholder="Phone" class="form-control">   
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Fax</label>
										    <input type="text" name="fax" placeholder="Fax" class="form-control">  
									    </div>
									</div>																		
							    </div>
								
								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Email</label>
										    <input type="email" name="email"  placeholder="Email" class="form-control">   
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Website</label>
										    <input type="text" name="website"  placeholder="Website" class="form-control">  
									    </div>
									</div>																		
							    </div>
								
								<div class="row day-select">
                                    <div class="col-md-12">                                           										  
										<div class="form-group">
										    <label style="display:block">Select Business Days</label> 
											<label class="control control--checkbox">
											  <input name="openning_days[]" value="Sat" type="checkbox"/>
											  <div class="control__indicator">Sat</div>
											</label>
											<label class="control control--checkbox">
											  <input name="openning_days[]" value="Sun" type="checkbox"/>
											  <div class="control__indicator">Sun</div>
											</label>
											<label class="control control--checkbox">
											  <input name="openning_days[]" value="Mon" type="checkbox"/>
											  <div class="control__indicator">Mon</div>
											</label>
											<label class="control control--checkbox">
											  <input name="openning_days[]" value="Tue" type="checkbox"/>
											  <div class="control__indicator">Tue</div>
											</label>
											<label class="control control--checkbox">
											  <input name="openning_days[]" value="Wed" type="checkbox"/>
											  <div class="control__indicator">Wed</div>
											</label>
											<label class="control control--checkbox">
											  <input name="openning_days[]" value="Thu" type="checkbox"/>
											  <div class="control__indicator">Thu</div>
											</label>
											<label class="control control--checkbox">
											  <input name="openning_days[]" value="Fri" type="checkbox"/>
											  <div class="control__indicator">Fri</div>
											</label>
										</div>																			
									</div>
								</div>

								<div class="row">
                                    <div class="col-md-6">
									   	<div class="form-group">
											<div class='input-group date' id='datetimepicker3'>
												<input type='text' name='open_time' class="form-control" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<div class='input-group date' id='datetimepicker4'>
												<input type='text' name='close_time' class="form-control" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
										</div>	
									</div>
									<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">																		
								</div>
								
								
								
								<div class="row">
                                    <div class="col-md-12">
									<div class="form-group">
										<div id="p_scents">
											<div class="input-group">
													<span class="input-group-btn">
														<span class="btn btn-primary btn-file">
														   Add Image<input name="pictures[]" type="file">
														</span>
													</span>
													<input type="text" class="form-control" readonly>
													<a href="#" id="addScnt"><span class="glyphicon glyphicon-plus"></span></a>								
											</div>
										</div>
									</div>	
								    </div>
								</div> 
					

								


								  
									<div class="form-group col-md-12">
									  <input type="hidden" name="id" value="1" class="form-control">
									</div>	  




							
					   
								<div class="box-footer">
								  <button type="submit" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> Save</span></button>
								  <a href="http://localhost/classified/admin/bizdirectory" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label">Cancel</span></a>
								</div>
							</div>
							
							
						</form>													
							


				</div>
				</div>
				
				
				<div class="col-md-3 sidebar-left">
				    <div class="box-title text-center"> 
					   <h2>All Category</h2>
					</div>
					<div class="container">
						<div class="category-links">
							<ul>
							    <?php foreach($bizcategory_list as $bizcategory ){ ?>
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/map-icon-pet-store.png" alt="img" data-no-retina="">
									<a href="{{ URL::to('/').'/jobboard-cat/'.$bizcategory->id  }}">
										{{ $bizcategory->name }}
									</a>
								</li>
                                <?php } ?>								
							</ul>
						</div>
					</div>	                                    									  		       
				</div>
				 
				 
			</div>
		

		
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



		
	</div>
@endsection

@section('modal-abuse')
	@include('newspost.details.inc.modal-abuse')
@endsection

@section('modal-message')
	@include('newspost.details.inc.modal-message')
@endsection

@section('javascript')
	@parent
	<script src="{{ url('assets/plugins/bxslider/jquery.bxslider.min.js') }}"></script>
	<script>
		var stateId = '<?php echo (isset($city)) ? $country->get('code') . '.' . $city->subadmin1_code : '0' ?>';

		/* JS translation */
		var lang = {
			loginToSaveAd: "@lang('global.Please log in to save the Ads.')",
			loginToSaveSearch: "@lang('global.Please log in to save your search.')",
			confirmationSaveSearch: "@lang('global.Search saved successfully !')",
			confirmationRemoveSaveSearch: "@lang('global.Search deleted successfully !')"
		};

		$('.bxslider').bxSlider({
			pagerCustom: '#bx-pager',
			controls: true,
			nextText: " @lang('global.Next') &raquo;",
			prevText: "&laquo; @lang('global.Previous') "
		});

		$(document).ready(function () {
			@if(count($errors) > 0)
				@if(count($errors) > 0 and old('msg_form')=='1')
					$('#contact_user').modal();
				@endif
				@if(count($errors) > 0 and old('abuse_form')=='1')
					$('#report_abuse').modal();
				@endif
			@endif
			@if(config('settings.show_ad_on_googlemap'))
				genGoogleMaps(
				'<?php echo config('services.googlemaps.key'); ?>',
				'<?php echo (isset($ad->city) and !is_null($ad->city)) ? addslashes($ad->city->name) . ',' . $country->get('asciiname') : $country->get('asciiname') ?>',
				'<?php echo $lang->get('abbr'); ?>'
				);
			@endif
		})
		
		
		 $(document).on('change', '.btn-file :file', function() { 
				     var input = $(this),
					  numFiles = input.get(0).files ? input.get(0).files.length : 1,
					  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
				      input.trigger('fileselect', [numFiles, label]);
				});
				
				$(document).on('fileselect','.btn-file :file', function(event, numFiles, label) {						
					var input = $(this).parents('.input-group').find(':text'),
						log = numFiles > 1 ? numFiles + ' files selected' : label;						
					if( input.length ) {
						input.val(log);
					} else {
						if( log ) alert(log);
					}
					
				});
				
				 $(function () {

						var scntDiv = $('#p_scents');
								var i = $('#p_scents .input-group').size() + 1;

						$('#addScnt').click(function() {
										$('<div class="input-group"><span class="input-group-btn"><span class="btn btn-primary btn-file">Add Flyer<input name="pictures[]" type="file"></span></span><input type="text" class="form-control" readonly><a href="#" id="remScnt"><span class="glyphicon glyphicon-remove"></span></a></div>').appendTo(scntDiv);
										i++;
										return false;
								});
								
								$(document).on('click', '#remScnt', function() {  														
												$(this).parents('.input-group').remove();
												i--;								
										return false;
								});
														
							   $('.old_flyer').click(function() {  														
												$(this).parents('.old_flyer_parent').remove();																	
										return false;
								});

				});

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</script>
	<script src="{{ url('assets/js/form-validation.js') }}"></script>
	<script src="{{ url('assets/js/app/show.phone.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/app/make.favorite.js') }}"></script>
@endsection