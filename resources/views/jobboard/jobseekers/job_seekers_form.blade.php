@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">

				@if (count($errors) > 0)
					<div class="col-lg-12">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif

				@if (Session::has('flash_notification.message'))
					<div class="container" style="margin-bottom: -10px; margin-top: -10px;">
						<div class="row">
							<div class="col-lg-12">
								@include('flash::message')
							</div>
						</div>
					</div>
				@endif


				


				<div class="col-sm-8">
					<form class="form-signin" enctype="multipart/form-data" method="post" action="{{ url('job-seekers-submit') }}">
							{!! csrf_field() !!}
							
							<div class="box">		    
								<div class="row">						            			
									<div class="col-md-4">
										<div class="form-group">	
											<label>Title</label>
											<select name="gender_id" class="form-control"> 	
												<option value="1">Mr</option>											
												<option value="2">Mrs</option>																				
											</select>   
									    </div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">	
											<label>First Name</label>
											<input type="text" name="first_name" class="form-control">   
									    </div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">	
											<label>Last Name</label>
											<input type="text" name="last_name"  class="form-control">   
									    </div>
									</div>

							    </div>
								
								<div class="row">
                                    
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Mobile</label>
											<input type="text" name="mobile"  placeholder="Mobile...." class="form-control">   
									    </div>
									</div>
                                    
									<div class="col-md-6">
										<div class="form-group">	
											<label>Email</label>
											<input type="email" name="email"   class="form-control">   
									    </div>
									</div>
									
							    </div>
								
								<div class="row">
								
								    	
									
									
									
									
									<div class="col-md-6">
										<div class="form-group">
 										     <label>Password</label>
											<input type="password" id="password_main" name="password"   class="form-control">    
									    </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">	
											<label>Retype Password</label>
											<input type="password" name="confirm_password"   class="form-control">   
									    </div>
									</div>
								
																										
							    </div>
								
								
								
								
								
								
								  
								<div class="form-group col-md-12">
								  <input type="hidden" name="id" value="1" class="form-control">
								</div>	  




							
					   
								<div class="box-footer">
								  <button type="submit" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> Signup</span></button>
								</div>
							</div>
							
							
						</form>


				</div>

				<?php /*@include('layouts.inc.social.horizontal')*/ ?>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	@parent


	
	<script type="text/javascript">
			$(function()
			{				
				// Validation		
				$(".form-signin").validate(
				{					
					// Rules for form validation
					rules:
					{
						
						username:
						{
							required: true,
	  					    remote: {
									url: './check-seeker-username',
									type: "POST",
									cache: false,
									dataType: "json",
									data: {
										username: function() { return $("#username_main").val(); }
		
									},
									dataFilter: function(response) { 
										
										if(response=='false'){  
										return false;
										} else { 
										return true;
										} 
										
									}
								}
						},
						
						
						password:
						{
							required: true,
							minlength: 6,
							maxlength: 20
						},
						confirm_password:
						{
							required: true,
							minlength: 6,
							maxlength: 20,
							equalTo: '#password_main'
						}																		
					},
					
					// Messages for form validation
					messages:
					{
			            
						username:
						{
							required: 'Please enter username',
							remote: "This username already used"
						},
						
						password:
						{
							required: 'Please provide a password'
						},
						confirm_password:
						{
							required: 'Please provide a password',
							equalTo: 'Please enter the same password as above'
						}
					},					
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
			
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
@endsection
