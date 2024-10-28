@extends('jobboard.jobseekers.common.master')

@section('content')
	{!! csrf_field() !!}
	<div class="main-container directory_section">
        <div class="container">
	
			

			
			
			<div class="row">
	            <div class="col-md-3 sidebar-left">
				   <!-- <div class="box-title text-center"> 
					   <h2>Employer Panel</h2>
					</div>-->
					<div class="">
					    @include('jobboard.common.employer_panel')
						<!--<div class="category-links">
							<ul>
				
								<li>
									<img src="http://localhost/classified/images/cats/fa-folder_default.png" alt="img" data-no-retina="">
									<a href="{{url('post-new-job')}}">
										Post New Job
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/images/cats/fa-folder_default.png" alt="img" data-no-retina="">
									<a href="{{url('employer-job-list')}}">
										Edit All Job
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="{{url('employer-job-application-list')}}">
										Applicatins  
									</a>
								</li>
							      <li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="#">
										Send Message To Applicant
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="{{url('seekers-logout')}}">
										Sign Out
									</a>
								</li>
								
							</ul>
						</div>-->
					</div>	                                   									  					 
			    </div>
				
				
				 
				<div class="col-sm-9 page-content">				
					<div class="inner-box">
						<h2 class="title-2"><i class="icon-docs yewllo"></i>Candidate Interview</h2>											
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('candidate-interview-submit') }}">
							{!! csrf_field() !!}
							<input type="hidden" name="id" value="<?php echo $id ?>">
							
							<div class="box">		    
								
							
								<div class="row">                               								
									<div class="col-md-12">
										<div class="form-group">
											<label">Interview Date</label>										
											<div class="input-group input-append date" id="dateRangePicker">
												<input type="text" required class="form-control" value="<?php echo isset($job->application_deadlines)?$job->application_deadlines:'' ?>"  name="interview_date" />
												<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
											</div>											
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										    <label">Interview Time</label>	
											<div class='input-group date' id='datetimepicker3'>
												<input type='text' name="interview_time" class="form-control" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										    <label>Short Message</label>	
											
												<textarea  name="short_message" class="form-control" />	</textarea>											
											
										</div>
									</div>
								</div>
																	   
								<div class="box-footer">
								    <button type="submit" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> Save</span></button>
								     <a href="{{url('employer-job-list')}}" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label">Cancel</span></a>
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
					$('#datetimepicker3').datetimepicker({
							format: 'LT'
						});	
				});
		  </script>	   
	
	
	
	
@endsection