@extends('jobboard.jobseekers.common.master')
@section('content')
	{!! csrf_field() !!}
	<div class="main-container directory_section">
        <div class="container job-details">

		
		    <div id="job-preview" class="">
                <div class="row">
					<div class="col-md-3 sidebar-left  hidden-xs">
						@include('jobboard.common.seeker_panel')	                                   									  					 
					</div>
					
				<div class="col-sm-9 job-preview">	
					
					<div class="col-sm-12">
						<h3>ONLINE APPLICATION FORM</h3>	
					</div>
                                                                
                                                                
					<div id="fromAdvance">
						<div class="col-sm-12">
																		
							<div class="apply-wrap"> 
								<form method="post" action="{{url('/online-job-apply-submit')}}" name="form1" id="form2" onsubmit="return SubmitExpFormStep02_t()">
									{!! csrf_field() !!}
									<table class="bdj">
									<thead>
										<tr>
											<th colspan="2">Submit Your Application</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												
												<div class="aoc-wrapper">
													<div class="row">
													   
														 
														<div class="col-sm-12">
																
															<div class="org-t O-res O-res-O">
																<div class="s-text">Account Name </div>
																<div class="ap-title">
																	<div class="comp-name"><?php echo Session::get('seekers_username') ?></div>
																</div>
															</div> 
															<div class="org-t O-res O-res-O">
																<div class="s-text">Company </div>
																<div class="ap-title">
																	<div class="comp-name">{{$job_detail->company_name}}</div>
																</div>
															</div>
															
															<div class="org-t O-res O-res-O">
																<div class="s-text">Position Applied </div>
																<div class="ap-title">
																	<div class="pos-apply">{{$job_detail->job_title}}</div>  
																</div>
															</div>     
															
														</div>
														
														
														
														<div class="col-sm-12">
															
															<div class="org-t O-res O-res-O">
																<div class="s-text">Your Expected Salary(Optional) </div>
																<div class="ap-title">
																	<input name="salary" id="txtExpectedSalary" class="mail_serv_text" size="10" maxlength="8" type="text"> (Monthly) 
																</div> 
															</div>
														
															
														</div>
														
														<div class="col-sm-12">
															<div class="bottom-b-wrapper">
															   <input type="submit" name="btnApply" value="Apply" onclick="if ($('#txtExpectedSalary').val().trim() != '' &amp;&amp; !(/[\D]/.exec($('#txtExpectedSalary').val().trim()) != null)) { $(this).css('pointer-events', 'none'); }">
															</div>
														</div>
														
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								
								<input type="hidden" name="user_id_seeker"  value="{{ $user->id }}">
								<input type="hidden" name="jb_employers_job_post_id"  value="{{$job_detail->id}}">
								<input type="hidden" name="user_id_employer"  value="{{$job_detail->user_id}}">

							</form>
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