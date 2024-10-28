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
@extends('layouts.master_job')
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


				


				<div class="col-sm-8">
					<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('jobboard-submit') }}">
							{!! csrf_field() !!}
							
							<div class="box">		    
								<div class="row">						            			
									<div class="col-md-6">
										<div class="form-group">	
											<label>Company/Bussiness Name</label>
											<input type="text" name="company_name"  placeholder="Company/Bussiness Name" class="form-control">   
									    </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">	
											<label>Category</label>
											<select name="category_id" class="form-control">        
												<option value="1">Automobile</option><option value="2">---| Track</option><option value="3">---| riksha</option><option value="4">---| van</option><option value="5">Food</option><option value="6">---| rice</option><option value="7">Service</option><option value="8">Sports</option>																				
											</select>   
									    </div>
									</div>
							    </div>
								
								<div class="row">						            			
									<div class="col-md-12">
										<div class="form-group">	
											<label>Short Description</label>
											<textarea name="description" rows="3" placeholder="Short Description" class="form-control"></textarea>    
									    </div>
									</div>
							    </div>
								
								<div class="row">						            			
									<div class="col-md-12">
										<div class="form-group">	
											<label>Keywords</label>
										    <input type="text" name="keywords" placeholder="Please type keywords seperated by commas" class="form-control">     
									    </div>
									</div>
							    </div>

                                    
							
									

								

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Category</label>
											<select name="category_id" class="form-control">        
												<option value="1">Automobile</option><option value="2">---| Track</option><option value="3">---| riksha</option><option value="4">---| van</option><option value="5">Food</option><option value="6">---| rice</option><option value="7">Service</option><option value="8">Sports</option>																				
											</select>   
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Address</label>
										    <input type="text" name="address"  placeholder="Address" class="form-control">   
									    </div>
									</div>																		
							    </div>
								
								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Phone</label>
										    <input type="text" name="phone" placeholder="Phone" class="form-control">   
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Fax</label>
										    <input type="text" name="fax" placeholder="Fax" class="form-control">  
									    </div>
									</div>																		
							    </div>
								
								<div class="row">
                                    <div class="col-md-6">
										<div class="form-group">	
											<label>Email</label>
										    <input type="email" name="email"  placeholder="Email" class="form-control">   
									    </div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label>Website</label>
										    <input type="text" name="website"  placeholder="Website" class="form-control">  
									    </div>
									</div>																		
							    </div>
								
							

								  
									<div class="form-group col-md-12">
									  <input type="hidden" name="id" value="1" class="form-control">
									</div>	  




							
					   
								<div class="box-footer">
								  <button type="submit" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> Save</span></button>
								  <a href="http://localhost/classified/admin/bizdirectory" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label">Cancel</span></a>
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
