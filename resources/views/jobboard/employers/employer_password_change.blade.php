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
	            <div class="col-md-3 sidebar-left">
				    @include('jobboard.common.employer_panel')
				</div>
				
				
				 
				<div class="col-sm-9 page-content">				
					<div class="inner-box">
						<h2 class="title-2"><i class="icon-docs yewllo"></i> <a href="">Submit Your Business</a></h2>											
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('employer-password-change-submit') }}">
							{!! csrf_field() !!}
							
							<div class="box">		    																
								<div class="row">								
								    <div class="col-md-6">
										<div class="form-group">
 										     <label>Old password</label>
											<input required type="password" name="old_password"   class="form-control">    
									    </div>
									</div>		
									
                                    <div class="col-md-6">
										<div class="form-group">
 										     <label>Password</label>
											<input required type="password" name="new_password"   class="form-control">    
									    </div>
									</div>																																		
							    </div>
								
								<div class="row">								
								    <div class="col-md-6">
										<div class="form-group">	
											<label>Retype Password</label>
											<input required type="password" name="confirm_new_password"   class="form-control">   
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
		  </script>	   
	
	
	
	
@endsection