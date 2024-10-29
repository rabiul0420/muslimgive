@extends('jobboard.jobseekers.common.master')

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
						<h2 class="title-2"><i class="icon-docs yewllo"></i> <a href="">Post New Job</a></h2>
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('post-new-job-edit-submit') }}">
							{!! csrf_field() !!}
							<input type="hidden" name="id" value="<?php echo (isset($job->id))?$job->id:'' ?>">

							<div class="box">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Job Title</label>
											<input type="text" name="job_title" value="<?php echo isset($job->job_title)?$job->job_title:'' ?>"  placeholder="Title" class="form-control">
									    </div>
									</div>
							    </div>



								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Job Type</label>
										    <select name="job_type" class="form-control selecter">

												<option <?php echo (isset($job->job_type))?(($job->job_type=='1')?'selected':''):'' ?> value="1">Govt. Job</option>
												<option <?php echo (isset($job->job_type))?(($job->job_type=='2')?'selected':''):'' ?> value="2">Graduate Job</option>
												<option <?php echo (isset($job->job_type))?(($job->job_type=='3')?'selected':''):'' ?> value="3">Skilled Job</option>

											</select>
									    </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Category</label>
										    <select name="category_id" class="form-control selecter">
											<?php foreach($jb_categories as $category){ ?>
												<option  value="{{$category->id}}">{{$category->name}}</option>
											<?php } ?>
											</select>
									    </div>
									</div>
							    </div>





								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Job Role</label>
										    <select name="job_role" class="form-control selecter">
												<option <?php echo (isset($job->job_title))?(($job->job_role=='Fulltime')?'selected':''):'' ?> value="Fulltime">Fulltime</option>
												<option <?php echo (isset($job->job_title))?(($job->job_role=='Part Time')?'selected':''):'' ?> value="Part Time">Part Time</option>
												<option <?php echo (isset($job->job_title))?(($job->job_role=='Parmanent')?'selected':''):'' ?> value="Parmanent">Parmanent</option>
												<option <?php echo (isset($job->job_title))?(($job->job_role=='Temporary')?'selected':''):'' ?> value="Temporary">Temporary</option>
											</select>
									    </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
										    <label>Position</label>
										    <select name="role_type" class="form-control selecter">
												<option <?php echo (isset($job->role_type))?(($job->role_type=='Managerial Senior')?'selected':''):'' ?> value="Managerial Senior">Managerial Senior</option>
												<option <?php echo (isset($job->role_type))?(($job->role_type=='Junior')?'selected':''):'' ?> value="Junior">Junior</option>
												<option <?php echo (isset($job->role_type))?(($job->role_type=='Entry Level')?'selected':''):'' ?> value="Entry Level">Entry Level</option>
												<option <?php echo (isset($job->role_type))?(($job->role_type=='Trainee')?'selected':''):'' ?> value="Trainee">Trainee</option>
											</select>
									    </div>
									</div>
							    </div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Short Description</label>
											<textarea name="job_description" rows="3" placeholder="Job Description" class="form-control"><?php echo isset($job->job_description)?$job->job_description:'' ?></textarea>
									    </div>
									</div>
							    </div>

								 <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Educational Requirements </label>
										    <textarea name="educational_requirements" rows="3" placeholder="Educational Requirements" class="form-control"><?php echo isset($job->educational_requirements)?$job->educational_requirements:'' ?></textarea>
									    </div>
									</div>
							    </div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Experince Requirements</label>
										    <textarea name="experince_requirements" rows="3" placeholder="Experince Requirements" class="form-control"><?php echo isset($job->experince_requirements)?$job->experince_requirements:'' ?> </textarea>
									    </div>
									</div>
							    </div>


                                <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Relevant Requirements</label>
										    <textarea name="relevant_requirements" rows="3" placeholder="Relevant Requirements" class="form-control"><?php echo isset($job->relevant_requirements)?$job->relevant_requirements:'' ?></textarea>
									    </div>
									</div>
							    </div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Salary</label>
										    <input type="text" name="salary" value="<?php echo isset($job->salary)?$job->salary:'' ?>"  placeholder="Salary" class="form-control">
									    </div>
									</div>
                                    <div class="col-md-6">
										<div class="form-group">
										    <label>Do you want to feature this  Job?</label>
										    <select name="feachered" class="form-control selecter">
												<option <?php echo (isset($job->feachered))?(($job->feachered=='0')?'selected':''):'' ?> value="0">No</option>
												<option <?php echo (isset($job->feachered))?(($job->feachered=='1')?'selected':''):'' ?> value="1">Yes</option>

											</select>
									    </div>
									</div>


							    </div>

								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Job Location</label>
										    <input type="text" name="job_location" value="<?php echo isset($job->job_location)?$job->job_location:'' ?>"  placeholder="Job Location" class="form-control">
									    </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Job Source</label>
										    <input type="text" name="job_source" value="<?php echo isset($job->job_source)?$job->job_source:'' ?>"  placeholder="Job Source" class="form-control">
									    </div>
									</div>
							    </div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
												<label>Application Deadlines</label>
												<div class="input-group input-append date" id="datepicker">
													<input type="text" required class="form-control" value="<?php echo isset($job->application_deadlines)?$job->application_deadlines:'' ?>"  name="application_deadlines" />
													<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
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
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/assets/css/datepicker.min.css"/>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/assets/css/datepicker3.min.css"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
        <script>
				$(document).ready(function() {

                    $('#datepicker').datepicker({
                        format: 'yyyy-mm-dd',
                        startDate: '1900-01-01',
                        endDate: '2020-12-30',
                    })


					/*$('#dateRangePicker')
						.datepicker({
							format: 'yyyy/mm/dd',
							startDate: '2010/01/01',
							endDate: '2020/12/30'
						})
						.on('changeDate', function(e) {
							// Revalidate the date field
							$('#dateRangeForm').formValidation('revalidateField', 'date');
						});*/
				});
		  </script>
@endsection