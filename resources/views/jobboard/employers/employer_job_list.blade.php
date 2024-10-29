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
				<div class="col-md-9 page-content">                
					<div class="inner-box">
						<h2 class="title-2 category-title"><i class="icon-docs yewllo"></i>Job List</h2>												
						<div id="jobList" class="col-offset-120">                                        
							<div class="boxed">
								<div class="row">
									<?php foreach($job_list as $job){ ?>
									<div class="col-md-12">
										<div class="norm-jobs-wrapper" onclick="DivOpen('id=708279&amp;fcatId=1&amp;ln=1');">
											<div class="row">

							 
												<div class="col-sm-12">
													<div class="row">
														<div class="col-sm-12">
															<div class="comp-name-text">{{$job->company_name}}</div>  
														</div>
														<div class="col-sm-12">
															<div class="job-title-text">
																<a  href="{{url('job-detail').'/'.$job->id}}">{{$job->job_title}}</a>
															</div>
														</div>
														
														 
														<div class="col-sm-9">
															<div class="edu-text">
																<div class="row">
																	<div class="col-sm-2">
																		<div class="edu-text-s">
																			Education:
																		</div>
																	</div>
																	<div class="col-sm-10">
																		<div class="edu-text-d">
																			<?php echo $job->educational_requirements ?>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														
													</div>
												</div>
												
												<div class="col-sm-12">
													<div class="row">
														<div class="col-sm-9">
															<div class="exp-text">
																<div class="row">
																	<div class="col-sm-2">
																		<div class="exp-text-s">Experience:</div>
																	</div>
																	<div class="col-sm-10">
																		<div class="exp-text-d">
																			<?php echo $job->experince_requirements ?>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="dead-text">
																<div class="dead-text-s">Deadline:&nbsp;</div>
																<div class="dead-text-d">
																  
																	<strong><?php echo date('M d',strtotime($job->application_deadlines)) ?>, </strong><?php echo date('Y',strtotime($job->application_deadlines)) ?>
																</div>
															</div>
														</div>
													</div>
												
													<div class="row">
														<div class="col-sm-12">
													        <p><a class="btn btn-primary btn-xs" href="{{url('post-edit-job/'.$job->id)}}"> <i class="fa fa-edit"></i> Edit </a></p>
																																					
															<p><a class="btn btn-danger btn-xs" href="{{url('employer-job-delete/'.$job->id)}}"> <i class="fa fa-trash"></i> Delete </a></p>
												        </div>
													</div>
												
												</div>

											</div>
										</div>
									</div>
                                    <?php } ?>
								</div>
							</div>
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