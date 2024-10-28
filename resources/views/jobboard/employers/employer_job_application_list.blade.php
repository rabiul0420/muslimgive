@extends('jobboard.jobseekers.common.master')

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
							<div class="panel">
								<div class="panel-heading panel-heading-01">
								<div class="panel">
								<div class="panel-heading panel-heading-01">
								<i class="glyphicon glyphicon-ok-sign icon-padding"></i>
								Job Applied
								</div>
								<div class="panel-body-02" style="padding-top:0px;">
								<div>
								
								<div id="txtResult">
								<table class="table table-inside" style="border:none;margin-top: 0px;width: 100%;">
								<thead>
								<tr class="panel-heading-02 ja-panel">
									<th style=" border-radius: 3px 0px 0px 0px; ">Sl</th>
									<th style="">Job Title</th>
									<th style="text-align: center;">Candidate Name </th>
									<th style="text-align: center;">Expected Salary </th>
									
									<th style="text-align: center;">action </th>
								</tr>
								</thead>
								
								<?php foreach($job_application_list as $key=>$application_list){ ?>
								
								<tbody id="1">
									<tr>
										<td style="">
											<p style="margin-bottom: 0px;">
											<?php echo $key+1 ?>.
											</p>
										</td>
										<td style="">								
											<a href="{{url('job-detail').'/'.$application_list->job_id}}" target="_blank" style="color: #0e73a9;">{{$application_list->job_title}}</a><br>
											<p class="employer-view">Applied on:
											<span>
											<i class="glyphicon glyphicon-calendar"></i> {{date('d-m-Y',(strtotime($application_list->created_at)))}}
											</span>
											</p>
										</td>
										
										<td style="text-align: center;">
											<p style="width: 50%; float: left; text-align: right;">
											<a style="color:#0066cc;"  href="{{URL::to('/').'/'.$application_list->cv}}">{{$application_list->first_name}} {{$application_list->last_name}}</a>
											</p>											
										</td>
										
										<td style="text-align: center;">
											<p style="width: 50%; float: left; text-align: right;">
											<a style="color:#0066cc;" href="salary_edit.asp?pg=1&amp;jobid=710480">{{$application_list->salary}}</a>
											</p>
										</td>
									
										<td style="text-align: center;">
											<div class="emp">																						
												<span title="">
													<a target="_blank" href="{{URL::to('/').'/'.$application_list->cv}}" class="btn">
													<i class="icon-hand-shake blue exp-modal " data-jpid="710480" data-desg="Network Manager"></i>
													<span class="btn-edit">View Resume</span>
													</a>
												</span>
											</div>
											<div class="emp">																						
												<span title="">
													<a href="{{url('candidate-interview').'/'.$application_list->id}}"  class="btn">
													<i class="icon-hand-shake blue exp-modal " data-jpid="710480" data-desg="Network Manager"></i>
													<span class="btn-edit">Invite For Interview</span>
													</a>
												</span>
											</div>
										</td>
									</tr>
								</tbody>
								
								<?php } ?>
								
								
								
								</table>
								 
								<table class="table table-inside" style="border:none;margin-top: 0px;width: 100%;">
								<tbody>
								<tr>
								<td colspan="4" style="list-style:none;">
								 
								</td>
								</tr>
								</tbody>
								</table>
								</div>
								</div>
								</div>  
								</div>  
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