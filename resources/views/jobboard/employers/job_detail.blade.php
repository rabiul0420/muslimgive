<?php echo  Session::get('jb_type'); ?>

@extends('jobboard.jobseekers.common.master')
@section('content')
	{!! csrf_field() !!}
	<div class="main-container directory_section">
        <div class="container job-details">


		    <div id="job-preview" class="job-preview">
            <div class="row m-class">
                <div class="col-md-12 col-sm-12">
                    <div class="pull-right category-wrapper">
                        <p class="category"><strong>Category:</strong>&nbsp;<?php echo $job_detail->name ?></p>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8">
					<div class="left">
						<h4 class="job-title "><?php echo $job_detail->job_title ?></h4>
						<div class="com-logo pull-right">
							<a href="{{ url('employer-job-list-company/'.$job_detail->company_id) }}">View all jobs this company</a>
							<h2 class="company-name" id="com_name"><?php echo $job_detail->company_name ?></h2>
							<img width="100" height="50" class="img-responsive" alt="" title="company logo" src="{{ url('/'.$job_detail->company_logo) }}">

						</div>


						<div class="job_des">
							<h5>Job Description / Responsibility:</h5>
							<div>
								<ul class="items-list">
									<?php $descriptions = htmlentities(nl2br($job_detail->job_description));
									   $descriptions = explode('br',$descriptions);
									   $item_nos = count($descriptions);
									   foreach($descriptions as $k=>$description){
										   if($k==0){
											  echo '<li>● '.substr($description,0,-4).'</li>';
										   }elseif($k==($item_nos-1)){
												echo '<li>● '.substr($description,6).'</li>';
										   }else{
											   echo '<li>● '.substr(substr($description,0,-4),6).'</li>';
										   }

									   }
									?>
								</ul>
							</div>
						</div>



						<div class="job_nat">
						    <div class="row">
							    <div class="col-md-3">
								<h5>Job Nature: </h5>
								</div>
								<div style="padding-top:20px" class="col-md-9">
								<?php echo $job_detail->job_role ?>
								</div>
							</div>
						</div>



						<div class="edu_req">
							<h5>Qualification Required:</h5>
							<ul class="items-list">
								<?php $descriptions = htmlentities(nl2br($job_detail->educational_requirements));
								   $descriptions = explode('br',$descriptions);
								   $item_nos = count($descriptions);
								   foreach($descriptions as $k=>$description){
									   if($k==0){
										  echo '<li>● '.substr($description,0,-4).'</li>';
									   }elseif($k==($item_nos-1)){
											echo '<li>● '.substr($description,6).'</li>';
									   }else{
										   echo '<li>● '.substr(substr($description,0,-4),6).'</li>';
									   }

								   }
								?>
							</ul>
						</div>



						<div class="edu_req">
							<h5>Experience Required:</h5>
							<ul class="items-list">
									<?php $descriptions = htmlentities(nl2br($job_detail->experince_requirements));
									   $descriptions = explode('br',$descriptions);
									   $item_nos = count($descriptions);
									   foreach($descriptions as $k=>$description){
										   if($k==0){
											  echo '<li>● '.substr($description,0,-4).'</li>';
										   }elseif($k==($item_nos-1)){
												echo '<li>● '.substr($description,6).'</li>';
										   }else{
											   echo '<li>● '.substr(substr($description,0,-4),6).'</li>';
										   }

									   }
									?>
							</ul>
						</div>



						<div class="job_req">
							<h5>Relevent Experience Required:</h5>
							<ul class="items-list">
									<?php $descriptions = htmlentities(nl2br($job_detail->relevant_requirements));
									   $descriptions = explode('br',$descriptions);
									   $item_nos = count($descriptions);
									   foreach($descriptions as $k=>$description){
										   if($k==0){
											  echo '<li>● '.substr($description,0,-4).'</li>';
										   }elseif($k==($item_nos-1)){
												echo '<li>● '.substr($description,6).'</li>';
										   }else{
											   echo '<li>● '.substr(substr($description,0,-4),6).'</li>';
										   }

									   }
									?>
							</ul>
						</div>



						<div class="job_loc " style="line-height: 24px;">
							<div class="row">
							    <div class="col-md-3">
								<h5>Job Location: </h5>
								</div>
								<div style="padding-top:20px" class="col-md-9">
								<?php echo $job_detail->job_location ?>
								</div>
							</div>
						</div>



						<div class="salary_range">
							<div class="row">
							    <div class="col-md-3">
								<h5>Salary Range: </h5>
								</div>
								<div style="padding-top:20px" class="col-md-9">
								<?php echo $job_detail->salary ?>
								</div>
							</div>
						</div>




						<div class="job_source  ">
							<div class="row">
							    <div class="col-md-3">
								<h5>Job Source: </h5>
								</div>
								<div style="padding-top:20px" class="col-md-9">
								<?php echo $job_detail->job_source ?>
								</div>
							</div>
						</div>
					</div>
                </div>
                            <div class="col-md-4 col-sm-4 right-wrapper">
                                <div class="m-view">
                                    <div class="right job-summary">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Job Summary</div>
                                            <div class="panel-body">

                                                        <h4>
                                                            <strong>Published on:</strong>&nbsp;Jun 1, 2017
                                                        </h4>

                                                <!--
                                                JOB Vacancies:
                                                -->

                                                    <h4>
                                                        <strong>Vacancy:</strong>&nbsp;1
                                                    </h4>


                                                <!--
                                                JOB Nature:
                                                -->

                                                    <h4>
                                                        <strong>Job Nature:</strong>&nbsp;Full-time
                                                    </h4>

                                                <!--
                                                Experience:
                                                -->

                                                    <h4>
                                                        <strong>Experience:</strong>&nbsp;At least 6 year(s)
                                                    </h4>

                                                <!--
                                                GENDER:
                                                -->

                                                <!--
                                                AGE:
                                                -->

                                                <!--
                                                JOB LOCATION:
                                                -->

                                                    <h4 style="line-height: 24px;">
                                                        <strong>Job Location:</strong>&nbsp;Dhaka
                                                    </h4>

                                                <!--
                                                SALARY RANGE:
                                                -->

                                                    <h4>
                                                        <strong>Salary Range:</strong>&nbsp;Negotiable
                                                    </h4>

                                                <!--
                                                APPLICATION DEADLINE:
                                                -->

                                                        <h4>
                                                            <strong>Application Deadline:</strong>&nbsp;Jun 12, 2017
                                                        </h4>

													<div class="apply text-center">
														 <?php if(Session::get('seekers_is_logged_in')){ ?>
															<?php if($apply_job){ ?>
																<span class="btn btn-success">You are allready applied</span>
															<?php }else{ ?>
																<a class="btn btn-success" href="{{url('online-job-apply/'.$job_detail->id)}}">Apply Online</a>
															<?php } ?>

														 <?php }else{ ?>
															 <button class="btn btn-success" data-toggle="modal" data-target="#myModalApply">Apply Online</button>
														 <?php } ?>
													</div>


													<div style="margin: 25px 0; text-align: center;">
<h2>Share This</h2>
	<button class="btn btn-fb share s_facebook" href="https://www.facebook.com/sharer.php?s=100&amp;p[title]=As%20you%20can%20see%2C%20passing%20a%20Closure%2C%20Mirpur&amp;u=http%3A%2F%2Flocalhost%2Fclassified_17_05_17%2Fpublic%2Fclassified_17_05_17%2Fpublic%2Fas-you-can-see-passing-a-closure%2F26.html&amp;t=As%20you%20can%20see%2C%20passing%20a%20Closure%2C%20Mirpur&amp;p[summary]=As%20you%20can%20see%2C%20passing%20a%20Closure%2C%20Mirpur&amp;p[url]=http%3A%2F%2Flocalhost%2Fclassified_17_05_17%2Fpublic%2Fclassified_17_05_17%2Fpublic%2Fas-you-can-see-passing-a-closure%2F26.html"><i class="icon-facebook"></i> </button>
	<button class="btn btn-tw share s_twitter" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fclassified_17_05_17%2Fpublic%2Fclassified_17_05_17%2Fpublic%2Fas-you-can-see-passing-a-closure%2F26.html&amp;text=As%20you%20can%20see%2C%20passing%20a%20Closure%2C%20Mirpur"><i class="icon-twitter"></i> </button>
	<button class="btn btn-danger share s_linkedin" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fclassified_17_05_17%2Fpublic%2Fclassified_17_05_17%2Fpublic%2Fas-you-can-see-passing-a-closure%2F26.html"><i class="icon-linkedin"></i> </button>
</div>

                                        </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="co-md-12 col-sm-12">
                                <div class="apply text-center">
                                     <?php if(isset($user)){  ?>
									    <?php if($apply_job){ ?>
                                            <span class="btn btn-success">you have already applied for this job</span>
										<?php }else{ ?>
										    <a class="btn btn-success" href="{{url('online-job-apply/'.$job_detail->id)}}">Apply Online</a>
										<?php } ?>

									 <?php }else{ ?>
									     <button class="btn btn-success" data-toggle="modal" data-target="#myModalApply">Apply Online</button>
									 <?php } ?>
                                </div>

                                <div class="guide text-center ">
									<span class="date">Application Deadline : <strong> Jun 12, 2017</strong></span>
                                </div>

                                <div class="company-info">
                                    <div class="information">
                                        <h5>Company Information</h5>
                                        <span>Augmedix</span>
                                        <span>Address : 1161 Mission Street Suite 210  San Francisco, CA 94103 USA BD Office: Suite 203, SS Steel Building, 17/C Panthapath, Dhaka</span>
                                        <span>Web : <a href="http://www.augmedix.com" target="_blank">www.augmedix.com</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>






        </div>

		 <div class="col-lg-12 content-box ">
					<div class="row row-featured">
						<div class="col-lg-12  box-title detail-box-title">
							<div class="inner">
								<h2>
									<span class="title-3"><b>Related Job</b></span>
									<a href="" class="sell-your-item">
										{{ t('View more') }} <i class="  icon-th-list"></i>
									</a>
								</h2>
							</div>
						</div>

						<div style="clear: both"></div>

						<div class=" relative content featured-list-row-related-jobs featured-list-row clearfix">

							<nav class="slider-nav has-white-bg nav-narrow-svg">
								<a class="prev">
									<span class="nav-icon-wrap"></span>
								</a>
								<a class="next">
									<span class="nav-icon-wrap"></span>
								</a>
							</nav>

							<div class="no-margin featured-list-slider-related-jobs featured-list-slider ">
								<?php foreach($jb_feacher as $key => $feacher): ?>
									<div class="item">
										<a href="#">
											<span class="item-carousel-thumb">
												<img class="img-responsive" src="jljk" alt="" data-no-retina style="border: 1px solid #e7e7e7; margin-top: 2px;">
											</span>
											<span class="item-name">Title here</span>
											<span class="price">
												$56
											</span>
										</a>
									</div>
								<?php endforeach; ?>

							</div>

						</div>
					</div>
				</div>









		</div>




	<div class="modal fade" id="myModalApply" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			        <form id="loginForm" role="form" method="POST" action="{{ url('login') }}">
						{!! csrf_field() !!}
						<div class="panel panel-default">
							<div class="panel-intro text-center">
								<h2 class="logo-title">
									<strong><span class="logo-icon"></span>{{ t('Log in') }} to apply the job</strong>
								</h2>
							</div>


							<div class="panel-body">
							    <input type="hidden" name="job_id" value="{{$job_detail->id}}">
								<div class="form-group <?php echo ($errors->has('email')) ? 'has-error' : ''; ?>">
									<label for="email" class="control-label">{{ t('Email Address') }}:</label>
									<div class="input-icon"><i class="icon-user fa"></i>
										<input id="email" name="email" type="text" placeholder="{{ t('Email Address') }}" class="form-control email"
											   value="{{ (session('email')) ? session('email') : old('email') }}">
									</div>
								</div>
								<input type="hidden" name="redirect" value="{{ url('online-job-apply').'/'.$job_detail->id }}">
								<div class="form-group <?php echo ($errors->has('password')) ? 'has-error' : ''; ?>">
									<label for="password" class="control-label">{{ t('Password') }}:</label>
									<div class="input-icon"><i class="icon-lock fa"></i>
										<input id="password" name="password" type="password" class="form-control" placeholder="{{ t('Password') }}">
									</div>
								</div>
								<div class="form-group">
									<button id="loginBtn" class="btn btn-primary btn-block"> {{ t('Login') }} </button>
									<label class="checkbox pull-left" style="padding-left: 20px;">
									<input type="checkbox" value="1" name="remember" id="remember"> {{ t('Keep me logged in') }} </label>
								    <p style="padding-top:10px" class="text-center pull-right"><a href="<?php echo url('password/reset'); ?>"> {{ t('Lost your password?') }} </a></p>
								</div>
							</div>

							<div class="panel-footer">
								<div style=" clear:both"></div>
								<p style="padding-top:10px" class="text-center"><a href="{{url('Signup')}}">Signup</a></p>
							</div>
						</div>
					</form>
			</div>

			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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