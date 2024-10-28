@extends('jobboard.jobseekers.common.master')
@section('content')
	{!! csrf_field() !!}
	<div class="main-container directory_section jobboard-section">
        <div class="container">
			<div class="row">
	            <div class="col-md-3 sidebar-left">
				    @include('jobboard.common.employer_panel')
				</div>

				<div class="col-sm-9 page-content">				
					<div class="inner-box">
						<h2 class="title-2"><i class="icon-docs yewllo"></i>Edit your company profile</h2>											
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('employer-edit-profile-submit') }}">
							{!! csrf_field() !!}
							
							<div class="box">		    																
						
								

								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Company Name</label>
											<input type="text" name="company_name" value="{{$employer_detail->company_name or ''}}" class="form-control">
									    </div>
									</div>
									
								    <div class="col-md-6">
										<div class="form-group">	
											<label>Email</label>
											<input type="email" id="email" name="email" value="{{$employer_detail->email or ''}}"  class="form-control">
									    </div>
									</div>									                                   																																		
							    </div>
								
								<div class="row">
								    <div class="col-md-6">
										<div class="form-group">	
											<label>Organization Type</label><br>
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
											<input type="text" name="company_address" value="{{$employer_detail->company_address or ''}}"   class="form-control">
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
                                                <input type="hidden" name="balnk_logo" value="{{$employer_detail->company_logo or ''}}">
											</div>
										</div>
										<?php if(isset($employer_detail->company_logo)){ ?>
												<img width="200" src="{{ url('/'.$employer_detail->company_logo) }}" alt="">
											<?php } ?>
								    </div>
									
                                																																	
							    </div>	  




							
					   
								<div class="box-footer">
								  <button type="submit" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> Update Profile</span></button>
								</div>
							</div>
							
							
						</form>																			
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

	

      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
        

	   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

        <script>
				$(document).ready(function() {
					$('#dateRangePicker')
						.datepicker({
							format: 'yyyy/mm/dd',
							startDate: '2010/01/01',
							endDate: '2020/12/30'
						})
						.on('changeDate', function(e) {
							// Revalidate the date field
							$('#dateRangeForm').formValidation('revalidateField', 'date');
						});  
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
				
				
		  </script>	   
	
	
	
	
@endsection