@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">

				@if (count($errors) > 0)
					<div class="col-lg-12">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif

				@if (Session::has('flash_notification.message'))
					<div class="container" style="margin-bottom: -10px; margin-top: -10px;">
						<div class="row">
							<div class="col-lg-12">
								@include('flash::message')
							</div>
						</div>
					</div>
				@endif


				<?php $previusurl = URL::previous(); 
				     $previusurl = explode('/',$previusurl);
					 if(in_array('job-detail',$previusurl)){
						echo 'ok'; 
					 }
				?>


				<div class="col-sm-5 login-box">
					<form id="loginForm" role="form" method="POST" action="{{ url('job-seekers-login-submit') }}">
						{!! csrf_field() !!}
						<div class="panel panel-default">
							<div class="panel-intro text-center">
								<h2 class="logo-title">
									<strong><span class="logo-icon"></span>{{ t('Log in') }} to apply the job</strong>
								</h2>
							</div>
						
							
							<div class="panel-body">
								<div class="form-group <?php echo ($errors->has('email')) ? 'has-error' : ''; ?>">
									<label for="email" class="control-label">{{ t('Email Address') }}:</label>
									<div class="input-icon"><i class="icon-user fa"></i>
										<input id="email" name="email" type="text" placeholder="{{ t('Email Address') }}" class="form-control email"
											   value="{{ (session('email')) ? session('email') : old('email') }}">
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
									<label class="checkbox pull-left" style="padding-left: 20px;">
									<input type="checkbox" value="1" name="remember" id="remember"> {{ t('Keep me logged in') }} </label>
								    <p style="padding-top:10px" class="text-center pull-right"><a href="<?php echo url('password/reset'); ?>"> {{ t('Lost your password?') }} </a></p>
									
								</div>
							</div>
							<div class="panel-footer">
								
								<div style=" clear:both"></div>
								<p style="padding-top:10px" class="text-center"><a href="{{url('job-seekers')}}">Signup</a></p>
							</div>
						</div>
					</form>


				</div>

				<?php /*@include('layouts.inc.social.horizontal')*/ ?>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	@parent

	<script language="javascript">
		$(document).ready(function () {
			$("#loginBtn").click(function () {
				$("#loginForm").submit();
				return false;
			});
		});
	</script>
@endsection
