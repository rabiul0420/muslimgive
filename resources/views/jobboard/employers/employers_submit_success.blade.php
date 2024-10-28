@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">				
					<h2 class="text-center">You are successfully Signup</h2>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	@parent
	
	<script type="text/javascript">
			$(function()
			{				
				// Validation		
				$(".form-signin").validate(
				{					
					// Rules for form validation
					rules:
					{
						
						username:
						{
							required: true,
	  					    remote: {
									url: './check-employer-username',
									type: "POST",
									cache: false,
									dataType: "json",
									data: {
										username: function() { return $("#username_main").val(); }
		
									},
									dataFilter: function(response) { 
										
										if(response=='false'){  
										return false;
										} else {  
										return true;
										} 
										
									}
								}
						},
						
						
						password:
						{
							required: true,
							minlength: 6,
							maxlength: 20
						},
						confirm_password:
						{
							required: true,
							minlength: 6,
							maxlength: 20,
							equalTo: '#password_main'
						}																		
					},
					
					// Messages for form validation
					messages:
					{
			            
						username:
						{
							required: 'Please enter username',
							remote: "This username already used"
						},
						
						password:
						{
							required: 'Please provide a password'
						},
						confirm_password:
						{
							required: 'Please provide a password',
							equalTo: 'Please enter the same password as above'
						}
					},					
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
			
	</script>

	<script language="javascript">
		$(document).ready(function () {
			$("#loginBtn").click(function () {
				$("#loginForm").submit();
				return false;
			});
		});
	</script>
@endsection
