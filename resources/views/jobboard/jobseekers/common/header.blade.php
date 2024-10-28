<?php
//echo Session::get('jb_type');exit;

use Illuminate\Support\Facades\Request;
/**
 * Logo manipulation
 */
if (config('settings.jobboard_logo') != '' and file_exists(public_path() . '/' . config('settings.jobboard_logo'))) {
	$logoFilename = last(explode('/', config('settings.jobboard_logo')));
	$logo = $logoFilename;
	$logo2x = 'pic/x/cache/logo2x/' . $logoFilename;
} else {
	$logo = 'images/logo.png';
	$logo2x = 'images/logo@2x.png';
}
$logo = config('settings.jobboard_logo');
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
			  <a class="navbar-brand" href="{{ url('jobboard') }}"><img width="150" class="visible-xs" src="{{ url('images/logo_m.png') }}" alt="{{ strtolower(config('settings.jobboard_logo')) }}"/></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li> <a href="{{ url('/') }}"><i class="icon-home"></i> Home</a></li>
							<li><a href="{{ url('/free-ads/Bangladesh') }}">Buy & Sell</a></li>
							<li><a href="{{url('online-shops')}}">Online Shops</a></li>
							<li><a href="{{url('newspapers')}}">Newspapers</a></li>
							<li><a href="{{url('directory')}}">Biz-directory</a></li>
							<li class="active"><a href="{{url('jobboard')}}">Job-board</a></li>
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
		    <div class="col-md-3 mobile-logo hidden-xs">
				<a href="{{ url('jobboard') }}" class="navbar-brand logo logo-title">
					<img  width="200" src="{{ url($logo) }}" data-at2x="{{ url($logo2x) }}" style="float: left; margin: 0 5px 0 0;"
						 alt="{{ strtolower(config('settings.jobboard_name')) }}" class="tooltipHere" title="" data-placement="bottom"
						 data-toggle="tooltip" type="button"
						 data-original-title="{{ config('settings.jobboard_name') . ((isset($country) and $country->has('name')) ? ' ' . $country->get('name') : '') }}"/>
				</a>				   				
			</div>
			<div class="col-md-5 hidden-xs">
			</div>
			<div class="col-md-4 account-part">
			    <div class="bottom-top">
			        <ul class="mobile-center mobile-log-reg job">
						@if (!auth()->user())													
							<li class="login-right">							
								<i class="icon-lock fa"></i><a href="{{url('login')}}" class="">Login</a> <i class="fa fa-user-plus"></i> <a href="{{url('signup')}}">{{ t('Signup') }}</a>
							</li>
							
						    <li class="postadd login-right">                                
								<a class="btn btn-block btn-post btn-yellow upload_cv"  href="{{url('login')}}"><i class="fa fa-upload" aria-hidden="true"></i> Upload Your CV</a>
						    </li>
							
							
						@else					
							@if (isset($user))
								<?php if(Session::get('jb_type')){ ?>
							        <?php if(Session::get('jb_type')=='employer'){ ?>
										<li><a href="{{ url(trans('routes.logout')) }}">{{ t('Signout') }} <i class="glyphicon glyphicon-off"></i> </a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span>{{ $user->name }}</span>
												<i class="icon-user fa"></i>
												<i class=" icon-down-open-big fa"></i>  
											</a>
											<ul class="dropdown-menu user-menu">
												<li><a href="{{ url('account') }}"><i class="icon-home"></i> @lang('global.Personal Home') </a></li>
												<li><a href="{{ url('post-new-job') }}"><i class="fa fa-hand-o-right"></i> Post a New Job </a></li>
												<li><a href="{{ url('employer-job-list') }}"><i class="fa fa-pencil-square-o"></i> Edit All Job </a></li>
												<li><a href="{{url('employer-job-application-list')}}"><i class="fa fa-hand-o-right"></i> Applications </a></li>
												<!--<li><a href="#"><i class="icon-home"></i> Send Message To Applicant </a></li>-->
												<li><a href="{{ url('employer-edit-profile') }}"><i class="fa fa-pencil-square-o"></i> Edit Profile </a></li>
												<li><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Sign Out</a></li>
											</ul>
										</li>
										<li class="postadd login-right">
											 
											  <a class="btn btn-block btn-post btn-yellow upload_cv"  href="{{url('post-new-job')}}"><i class="fa fa-plus" aria-hidden="true"></i> Post a New Job</a>
										
										</li>
									<?php } else { ?>
									    <li><a href="{{ url(trans('routes.logout')) }}">{{ t('Signout') }} <i class="glyphicon glyphicon-off"></i> </a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span>{{ $user->name }}</span>
												<i class="icon-user fa"></i>
												<i class=" icon-down-open-big fa"></i>
											</a>
											<ul class="dropdown-menu user-menu">
												<li class="active"><a href="{{ url('account') }}"><i class="icon-home"></i>@lang('global.Personal Home')</a></li>
												<!--<li><a href="{{ url('resume-view') }}"><i class="fa fa-eye"></i> View Resume</a></li>
												<li><a href="{{url('resume-view-step1')}}"><i class="fa fa-pencil-square-o"></i> Edit Resume </a></li>-->
												<li><a href="{{url('resume-upload')}}"><i class="fa fa-upload"></i> Upload Resume </a></li>
												<!--<li><a href="{{url('resume-email')}}"><i class="icon-star-circled"></i> Email Resume </a></li>-->
												<!--<li><a href="{{ url('seeker-edit-profile') }}"><i class="fa fa-pencil-square-o yewllo"></i> Edit Profile </a></li>-->
												<li><a href="{{ url('application-job') }}"><i class="fa fa-hand-o-right"></i>  Application Job </a></li>
												<li><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Sign Out</a></li>
											</ul>
										</li>
										<li class="postadd login-right">

											  <a class="btn btn-block btn-post btn-yellow upload_cv"  href="{{url('resume-upload')}}"><i class="fa fa-upload" aria-hidden="true"></i> Upload Your CV</a>
										</li>
									<?php } ?>	
                                <?php } else{ ?>
                               
								@if (!auth()->user())
									<li class="">							
										<i class="icon-lock fa"></i><a href="{{url('login')}}" class="">Login</a>
										<i class="fa fa-user-plus"></i> <a href="{{url('signup')}}">{{ t('Signup') }}</a>
									</li>                            						
								@else
									@if (isset($user))
										<li><a href="{{ url(trans('routes.logout')) }}">{{ t('Signout') }} <i class="glyphicon glyphicon-off"></i> </a></li>
											
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<span>{{ $user->name }}</span>
												<i class="icon-user fa"></i>
												<i class=" icon-down-open-big fa"></i>
											</a>
											<ul class="dropdown-menu user-menu">
												<li class="active"><a href="{{ url('account') }}"><i class="icon-home"></i> @lang('global.Personal Home') </a></li>
												<li><a href="{{ url('select-account').'/1' }}"><i class="fa fa-black-tie" aria-hidden="true"></i> Job Seeker </a></li>
												<li><a href="{{ url('select-account').'/2' }}"><i class="fa fa-eye"></i> Employer </a></li>
												<li><a href="{{ url('logout') }}"><i class="icon-star-circled"></i> Signout </a></li>
											</ul>
										</li>
										
										<li class="postadd login-right">
											<a class="btn btn-block btn-post btn-yellow upload_cv"  href="{{url('resume-upload')}}"><i class="fa fa-upload" aria-hidden="true"></i> Upload Your CV</a>
										</li>
										
									@endif
								@endif
					
								<!--<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<span>Select Account</span>
										<i class=" icon-down-open-big fa"></i>
									</a>
									<ul class="dropdown-menu user-menu">
										<li ><a href="{{ url('select-account').'/1' }}"><i class="fa fa-black-tie" aria-hidden="true"></i></i>Job Seeker</a></li>
										<li><a href="{{ url('select-account').'/2' }}"><i class="fa fa-eye"></i> Employer</a></li>
									</ul>
								</li>-->
                                <?php } ?>								
							@endif
						@endif
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




