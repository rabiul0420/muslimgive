@extends('jobboard.jobseekers.common.master')



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
	            <div class="col-md-3 sidebar-left  hidden-xs">
				    @include('jobboard.common.seeker_panel')	                                   									  					 
			    </div>
				
				
				 
				<div class="col-sm-9 page-content">				
					<div class="inner-box">
						<h2 class="title-2"><i class="icon-docs yewllo"></i> <a href="">Update Your Profile</a></h2>											
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('seeker-edit-profile-submit') }}">
							{!! csrf_field() !!}
							
							<div class="box">		    
								<div class="row">						            			
									<div class="col-md-6">
										<div class="form-group">	
											<label>First Name</label>
											<input type="text" name="first_name" value="{{$seeker_detail->first_name}}" class="form-control">   
									    </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">	
											<label>Last Name</label>
											<input type="text" name="last_name" value="{{$seeker_detail->last_name}}"  class="form-control">   
									    </div>
									</div>
							    </div>
						
								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Gender</label>
											<select name="gender_id" class="form-control"> 	
												<option <?php echo ($seeker_detail->gender_id==1)?'selected':'' ?> value="1">Mr</option>											
												<option <?php echo ($seeker_detail->gender_id==2)?'selected':'' ?> value="2">Mrs</option>																				
											</select>   
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Mobile</label>
											<input type="text" name="mobile" value="{{$seeker_detail->mobile}}"  placeholder="Mobile...." class="form-control">   
									    </div>
									</div>																		
							    </div>
								
								<div class="row">
								
								    <div class="col-md-6">
										<div class="form-group">	
											<label>Email</label>
											<input type="email" name="email" value="{{$seeker_detail->email}}"   class="form-control">   
									    </div>
									</div>

									
									
                                    
								
																										
							    </div>
								
								
								
					
								
								
								  
								<div class="form-group col-md-12">
								  <input type="hidden" name="id" value="1" class="form-control">
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

	

      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/assets/css/datepicker.min.css" />
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/assets/css/datepicker3.min.css" />
        

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
		  </script>	   
	
	
	
	
@endsection