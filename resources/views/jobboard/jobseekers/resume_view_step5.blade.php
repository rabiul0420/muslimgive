@extends('layouts.app_cv')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-3 sidebar">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu-left-overlay"></div>
							<nav class="side-menu hidden-sm hidden-xs">
								<ul>
									<li>
										<a href="javascript:void();" class="close">&times</a>
									</li>

									<li class="title">RESUME</li>
									<li>
										<a href="https://mybdjobs.bdjobs.com/mybdjobs/masterview.asp " class=''>
											<i class="icon-view-resume"></i>  View Resume

										</a>
									</li>
									<li>

										<a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class='' onclick="ga('send', 'event', 'EditResume', 'click', '/new_mybdjobs/step_05_view.asp', 1);
    ">
											<i class="icon-edit"></i>  Edit Resume
										</a>

									</li>
									<!--<li class="title">Account</li>-->

								</ul>
							</nav>

						</div>
						<div class="col-md-12 hidden-xs hidden-sm" style="margin:0px auto 0px 5px;">


							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<ins class="adsbygoogle"
								 style="display:inline-block;width:250px;height:250px"
								 data-ad-client="ca-pub-5130888087776673"
								 data-ad-slot="2833078342"></ins>
							<script>
                                /* SquareBanner */
                                (adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

						</div>
					</div>
				</div>
				<div class="modal fade" id="myModal" role="dialog" style="display:none; height:400px; width:400px;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Updated Successfully</h4>
							</div>
							<div class="modal-body">
								<p id="F_U_message">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">

				</div>


				<div class="col-md-9 content">

					<div class="big-card">

						<div class="s-d-a-page e-resume">
							<p>Here you can edit your resume in five different steps (Personal, Education/ Training, Employment, Other Information and Photograph). To enrich your resume provide authentic information. </p>
						</div>

						<div class="row">
							<div class="col-md-6">
								<ol class="breadcrumb">


									<li><a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"><span class="icon-home"></span>&nbsp;Home</a></li>



									<li class="active">Edit Resume</li>

									<!--				<li class="active"></li>
                                    -->
								</ol>
							</div>
							<div class="col-md-6">

							</div>
						</div>

						<!--<div class="switch-back-old">
                                 <a style="color:#999;font-size:12px; font-weight:normal;" href="https://mybdjobs.bdjobs.com/mybdjobs/.asp" onclick= "ga('send', 'event', '/.asp', 'click', 'switch old version', 1);"> <i class="icon-angle-left-long"></i> Switch back to old version</a>
                       </div>-->



						<div class="btn-group tab-group" role="group" aria-label="...">
							<FORM action="LinkSubmit.asp" method="post" name="formPS_View" id="formPS_View">
								<input name="hPS" type="hidden" id="hPS" value="false"/>


								<button type="button" onclick="location.href='{{ url('resume-view-step1') }}'"><i class="fa fa-user"></i>&nbsp;Personal</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step2') }}'" onclick=javascript:PassUserID('Education'); class="btn btn-tab-education"  ><i class="fa fa-graduation-cap"></i>&nbsp;Education/Training</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step3') }}'" onclick=javascript:PassUserID('Employment'); class="btn btn-tab-employment"><i class="fa fa-briefcase"></i>&nbsp;Employment</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step4') }}'" onclick=javascript:PassUserID('Others'); class="btn btn-tab-others"><i class="fa fa-list"></i>&nbsp;Other Information</button>
								<button type="button" onclick="location.href='{{ url('resume-view-step5') }}'" class="btn active btn-tab-personal" onclick=javascript:PassUserID('Photograph'); class="btn btn-tab-photograph"><i class="fa fa-camera"></i>&nbsp;Photograph</button>

							</FORM>
						</div>





						<div class="confirmation-message">
							<!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
							<span id="c_msg"></span>
						</div>
						<div class="server-error">
							<!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
							<span id="c_msg"></span>
						</div>



						<div class="loader"></div>
						<div class="panel-group resume-panel-group photograph" id="accordion5" role="tablist" aria-multiselectable="true">
							<div class="panel">
								<div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<!-- If no information found then show this message -->
										<div class="all-info">
											<div class="empty-message m-t-20 photo-upload">
												{!! Form::open(['url'=>'resume-view-step5-edit-submit','files'=>true,'class'=>'']) !!}

													{{--<div id="noData"  style="display: inline;" >
														<p>You don't have any photo, Please upload photo </p>
													</div>--}}

												    <input type="hidden" value="{{ $basic_info->id }}" name="id">
													<div class="fileinput fileinput-new" data-provides="fileinput">
														<div class="fileinput-new thumbnail" style="">
															<img src="@php echo ($basic_info->photograph)?url('images/'.$basic_info->photograph):'http://placehold.it/200x200' @endphp" width="200px" alt="...">
														</div>
														<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
														<div>
															<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
																<input name="photograph" accept="image/*" type="file" >
															</span>
															<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
														</div>
													</div>

													<div>
														<button class="btn btn-primary btn-upload" id="uploadPhoto" type="submit"><i class="icon-upload">&nbsp;</i>Upload Photo</button>
													</div>

												{!! Form::close() !!}

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

@section('js')
<script src="{{ asset('assets/cv/js/jasny-bootstrap.min.js') }}"></script>
@endsection









