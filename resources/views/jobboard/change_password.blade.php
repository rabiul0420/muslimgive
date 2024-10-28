{{--
 * LaraClassified - Geo Classified Ads CMS
 * Copyright (c) BedigitCom. All Rights Reserved
 *
 * Website: http://www.bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from Codecanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
--}}
@extends('layouts.master_biz')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">


				<div class="col-sm-5 login-box">
					<form id="loginForm" role="form" method="POST" action="{{ url('change-password-submit') }}">
						{!! csrf_field() !!}
						<div class="panel panel-default">							
							<div class="panel-body">
								<div class="form-group <?php echo ($errors->has('email')) ? 'has-error' : ''; ?>">
									<label for="email" class="control-label">Old Password</label>
									<div class="input-icon"><i class="icon-lock fa"></i>
										<input id="password" name="old_password" type="password" placeholder="Old Password" class="form-control email">
									</div>
								</div>
								<div class="form-group <?php echo ($errors->has('password')) ? 'has-error' : ''; ?>">
									<label for="password" class="control-label">New Password</label>
									<div class="input-icon"><i class="icon-lock fa"></i>
										<input id="password" name="new_password" type="password" class="form-control" placeholder="New Password">
									</div>
								</div>
								<div class="form-group">
									<button id="loginBtn" class="btn btn-primary btn-block"> Submit </button>
								</div>
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
