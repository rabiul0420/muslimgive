@extends('jobboard.jobseekers.common.master')
@section('content')

	<div class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-sm-8">
				
					<form class="form-signin" enctype="multipart/form-data" method="post" action="{{ url('employers-submit') }}">
							{!! csrf_field() !!}
							
							<div class="box">		    																
								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Company Name</label>
											<input type="text" name="company_name" class="form-control">   
									    </div>
									</div>
									
								    <div class="col-md-6">
										<div class="form-group">	
											<label>Email</label>
											<input type="email" id="email" required name="email"   class="form-control">   
									    </div>
									</div>	
									
                                    																																		
							    </div>
								
								<div class="row">
								    <div class="col-md-6">
										<div class="form-group">
 										     <label>Password</label>
											<input required id="password_main" type="password" name="password"   class="form-control">    
									    </div>
									</div>
								    <div class="col-md-6">
										<div class="form-group">	
											<label>Retype Password</label>
											<input required type="password" name="confirm_password"   class="form-control">   
									    </div>
									</div>																										
							    </div>
								<div class="row">
								    <div class="col-md-6">
										<div class="form-group">	
											<label>Organization Type</label>
											<select name="organization_type_id" id="search_category" class="form-control selecter select2-hidden-accessible" tabindex="-1" aria-hidden="true">
												<?php foreach($organization_type as $row){ ?>
												    <option value="<?php echo $row->id ?>"><?php echo $row->type_name ?></option>
												<?php } ?>
										    </select>  
									    </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">	
											<label>Business Description</label>
											<input type="text" name="business_description"   class="form-control">   
									    </div>
									</div>	
								</div>
							
								
								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Contact Person</label>
											<input type="text" name="contact_person"  placeholder="Name" class="form-control">   
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Contact Person Designation</label>
											<input type="text" name="contact_person_dgn"  placeholder="Designation" class="form-control">   
									    </div>
									</div>																		
							    </div>
								

								
								
								
								<div class="row">								
								    
									
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Company Address</label>
											<input type="text" name="company_address"   class="form-control">   
									    </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">	
											<label>Country</label>
											<input type="text" name="country"   class="form-control">   
									    </div>
									</div>

                                     									
							    </div>
								
								<div class="row">								
								    	
									
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>City</label>
											<input type="text" name="city"   class="form-control">   
									    </div>
									</div>	
                                    
									<div class="col-md-6">
										<div class="form-group">	
											<label>Area</label>
											<input type="text" name="area"   class="form-control">   
									    </div>
									</div>
									
							    </div>
								
								<div class="row">								
								    	
									
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Billing Address</label>
											<input type="text" name="billing_address"   class="form-control">   
									    </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">	
											<label>Contact Phone</label>
											<input type="text" name="contact_phone"   class="form-control">   
									    </div>
									</div>
									
							    </div>
								
								<div class="row">								
								    

									<div class="col-md-6">
										<div class="form-group">	
											<label>Website Address (URL)</label>
											<input type="text" name="website"   class="form-control">   
									    </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											    <label>Company Logo</label>
												<div class="input-group">
														<span class="input-group-btn">
															<span class="btn btn-primary btn-file">
															   Attachment<input name="company_logo" type="file">
															</span>
														</span>
														<input type="text" class="form-control" readonly>
																				
												</div>
											
										</div>	
								    </div>
									
                                																																	
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
									url: './check-employer-username',
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
				
				
				
				
			});			
			
	</script>

	<script language="javascript">
		$(document).ready(function () {
			$("#loginBtn").click(function () {
				$("#loginForm").submit();
				return false;
			});
		});
	</script>
@endsection
