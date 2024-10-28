<?php
use Illuminate\Support\Facades\Request;
/**
 * Logo manipulation
 */
if (config('settings.business_directory_logo') != '' and file_exists(public_path() . '/' . config('settings.jobboard_logo'))) {
	$logoFilename = last(explode('/', config('settings.jobboard_logo')));
	$logo = $logoFilename;
	$logo2x = 'pic/x/cache/logo2x/' . $logoFilename;
} else {
	$logo = 'images/logo.png';
	$logo2x = 'images/logo@2x.png';
}

// Search parameters
$queryString = (Request::getQueryString() ? ('?' . Request::getQueryString()) : '');

// Get default language
$defaultLang = \App\Larapen\Models\Language::where('default', 1)->first();
?>
<div class="container">
	<div class="header">
	  <nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"> <a href="{{ url('/') }}"><i class="icon-home"></i> Home</a></li>
							<li><a href="{{ url('/free-ads/Bangladesh') }}">Buy & Sell</a></li>
							<li><a href="{{url('online-shops')}}">Online Shops</a></li>
							<li><a href="{{url('newspapers')}}">Newspapers</a></li>
							<li><a href="{{url('directory')}}">Biz-directory</a></li>
							<li><a href="{{url('jobboard')}}">Job-board</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="{{url('contact.html')}}">Help & Support</a></li>
			  </ul>
			</div>						
		  </div>
		  </div>
		</nav>
	</div>
	
	<div class="header-bottom biz-directory-bg">		
		<div class="row">
		    <div class="col-md-3 mobile-logo">
				<a href="{{ url('jobboard') }}" class="navbar-brand logo logo-title">
					<img  width="150" src="{{ url($logo) }}" data-at2x="{{ url($logo2x) }}" style="float: left; margin: 0 5px 0 0;"
						 alt="{{ strtolower(config('settings.jobboard_name')) }}" class="tooltipHere" title="" data-placement="bottom"
						 data-toggle="tooltip" type="button"
						 data-original-title="{{ config('settings.jobboard_name') . ((isset($country) and $country->has('name')) ? ' ' . $country->get('name') : '') }}"/>
				</a>				   				
			</div>
			<div class="col-md-6 hidden-xs">
			</div>
			<div class="col-md-3">
			    <div class="bottom-top">
			        <ul class="nav navbar-nav navbar-right mobile-center mobile-log-reg">
						@if (!auth()->user())
													
							<li class="postadd">
                                  @if (Session::get('seekers_is_logged_in'))
								  <a class="btn btn-block btn-post btn-yellow upload_cv"  href="{{url('resume-upload')}}"><i class="fa fa-upload" aria-hidden="true"></i> Upload Your CV</a>
								  @else
								  <a class="btn btn-block btn-post btn-yellow upload_cv"  href="{{url('job-seekers-login')}}"><i class="fa fa-upload" aria-hidden="true"></i> Upload Your CV</a>
                                  @endif
								
								<div class="jb_login">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#jobseekers">Job Seekers</a></li>
										<li><a data-toggle="tab" href="#employers">Employers</a></li>
									</ul>

                                    <div class="tab-content">
										<div id="jobseekers" class="tab-pane fade in active">
											<form id="loginForm" role="form" method="POST" action="{{ url('job-seekers-login-submit') }}">
												{!! csrf_field() !!}
												<div class="panel panel-default">

													<div class="panel-body">
														<div class="form-group">
															<label class="control-label">Email:</label>
															<div class="input-icon"><i class="icon-user fa"></i>
																<input id="email" name="email" type="text" placeholder="Email" class="form-control">
															</div>
														</div>
														<div class="form-group <?php echo ($errors->has('password')) ? 'has-error' : ''; ?>">
															<label for="password" class="control-label">{{ t('Password') }}:</label>
															<div class="input-icon"><i class="icon-lock fa"></i>
																<input id="password" name="password" type="password" class="form-control" placeholder="{{ t('Password') }}">
															</div>
														</div>
														<div class="form-group">
															<button id="loginBtn" class="btn btn-primary btn-block"> {{ t('Login') }} </button>
														</div>
													</div>
													<div class="panel-footer">
														<label class="checkbox pull-left" style="padding-left: 20px;">
															<input type="checkbox" value="1" name="remember" id="remember"> {{ t('Keep me logged in') }} </label>
														<p class="text-center pull-right"><a href="<?php echo url('password/reset'); ?>"> {{ t('Lost your password?') }} </a>
														</p>
														<div style=" clear:both"></div>
													</div>
												</div>
											</form>
										</div>
										
										<div id="employers" class="tab-pane fade">
											  <form id="loginForm" role="form" method="POST" action="{{ url('employers-login-submit') }}">
													{!! csrf_field() !!}
													<div class="panel panel-default">

														
														<div class="panel-body">
															<div class="form-group">
																<label for="username" class="control-label">Email:</label>
																<div class="input-icon"><i class="icon-user fa"></i>
																	<input id="username" name="email" type="text" placeholder="Email" class="form-control">
																</div>
															</div>
															<div class="form-group <?php echo ($errors->has('password')) ? 'has-error' : ''; ?>">
																<label for="password" class="control-label">{{ t('Password') }}:</label>
																<div class="input-icon"><i class="icon-lock fa"></i>
																	<input id="password" name="password" type="password" class="form-control" placeholder="{{ t('Password') }}">
																</div>
															</div>
															<div class="form-group">
																<button id="loginBtn" class="btn btn-primary btn-block"> {{ t('Login') }} </button>
															</div>
														</div>
														<div class="panel-footer">
															<label class="checkbox pull-left" style="padding-left: 20px;">
															<input type="checkbox" value="1" name="remember" id="remember"> {{ t('Keep me logged in') }} </label>
															<p class="text-center pull-right"><a href="<?php echo url('password/reset'); ?>"> {{ t('Lost your password?') }} </a></p>
															<div style=" clear:both"></div>
														</div>
													</div>
												</form>
										</div>											
									</div>									  
								</div>
						    </li>						    																				
						@else
			
						
							@if (isset($user))
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<span><?php echo Session::get('employers_username') ?></span>
										<i class="icon-user fa"></i>
										<i class=" icon-down-open-big fa"></i>  
									</a>
									<ul class="dropdown-menu user-menu">
										<li><a href="{{ url('my-account-employer') }}"><i class="icon-home"></i> My Account </a></li>
										<li><a href="{{ url('post-new-job') }}"><i class="fa fa-hand-o-right"></i> Post a New Job </a></li>
										<li><a href="{{ url('employer-job-list') }}"><i class="fa fa-pencil-square-o"></i> Edit All Job </a></li>
										<li><a href="{{url('employer-job-application-list')}}"><i class="fa fa-hand-o-right"></i> Applications </a></li>
										<!--<li><a href="#"><i class="icon-home"></i> Send Message To Applicant </a></li>-->
										<li><a href="{{ url('employer-edit-profile') }}"><i class="fa fa-pencil-square-o"></i> Edit Profile </a></li>
										<li><a href="{{ url('employer-password-change') }}"><i class="fa fa-key"></i> Change Password </a></li>
										<li><a href="{{ url('seekers-logout') }}"><i class="fa fa-sign-out"></i> Sign Out</a></li>
									</ul>
								</li>	
							@endif
						@endif	
						
				</div>
				<div class="bottom-bottom">					
					<ul class="navbar-nav navbar-right ads-mobile-center">							
						<li class="postadd">
						    @if(!auth()->user())
							   <i class="icon-lock fa"></i><a href="#" class="jb_login_display">Login</a> <i class="fa fa-user-plus"></i> <a class="create-account" data-toggle="modal" data-target="#myModal" href="#">Signup</a>	
                          	@else
                                @if(isset($user))
									login as employer
								@endif
							@endif	
						</li>														 											
					</ul> 
				</div>					
			</div>
		</div>	
	</div>
</div>



<div id="myModal" class="modal fade create-account-modal" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Select Your Category</h4>
		  </div>
		  <div class="modal-body">
				<div class="row">
					<div class="col-md-6">
					   <a href="{{ url('job-seekers') }}">JOB SEEKERS</a>
					</div>
					<div class="col-md-6">
						 <a href="{{ url('employers') }}">EMPLOYERS</a>
					</div>
				</div>
		  </div>
		  <div class="modal-footer">
			   <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
		  </div>
		</div>
    </div>
</div>




