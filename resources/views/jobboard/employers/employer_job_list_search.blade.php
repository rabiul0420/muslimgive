@extends('jobboard.jobseekers.common.master')

@section('content')
	{!! csrf_field() !!}
	<div class="main-container jobboard_section">
        <div class="container">
		
		
		
		    <div class="row">
				<div class="col-md-3 sidebar-left">
				    @if (!Session::get('jb_is_logged_in'))
						<div class="box-title text-center"> 
							<h2>All Category Jobs </h2>
						</div>
						<ul>
							<?php foreach($jb_categories as $k=>$row){  ?>
							<li>
								<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/0'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
							</li>
							<?php  } ?>
						</ul>
					
					@else
							@if (Session::get('seekers_is_logged_in'))
								
							@include('jobboard.common.employer_panel')	
					@endif
						
						@endif
						
						@if (Session::get('employers_is_logged_in'))
							
						
						@include('jobboard.common.employer_panel')

					@endif		
						                                    									  		       
				</div>
				 
				<div class="col-md-9 page-content">
					<div class="inner-box">
						<div class="box-title detail-box-title">
							<h2>
								<i class="fa fa-search yewllo"></i> <span class="title-3"><b>Find Your Right Job </b></span>
							</h2>
						</div>

						<div class="search-row-wrapper">
							<form id="seach" name="search" action="{{url('employer-job-list-search')}}" method="GET">
								<div class="ads-search">
									<div class="row">
										<div class="col-xs-10 col-md-10">
											<input type="text" required  name="job_title"  value="<?php echo isset($job_title)?$job_title:'' ?>" class="form-control keyword" placeholder="Search By Kywords">
										</div>
										<div class="col-xs-2 col-md-2">
											<button class="btn btn-block btn-primary search_form"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="inner-box">
						<h2 class="title-2 category-title"><i class="icon-docs yewllo"></i>Job List</h2>						

						
						<div id="jobList" class="col-offset-120">
                                        

							<div class="boxed">

								<div class="row">

		                        <?php  if(count($job_list)){ ?>
									
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
												
												
												
												</div>

											</div>
										</div>
									</div>
                                    <?php } ?>
								<?php }else{ ?>
								     <h2>There is no search in this result</h2>
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