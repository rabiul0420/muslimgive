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



@section('javascript-top')
	@parent
	@if (config('services.googlemaps.key'))
	<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googlemaps.key') }}" type="text/javascript"></script>
	@endif
@endsection

@section('content')
	{!! csrf_field() !!}

	<div class="main-container">

		@if (Session::has('flash_notification.message'))
			<div class="container" style="margin-bottom: -10px; margin-top: -10px;">
				<div class="row">
					<div class="col-lg-12">
						@include('flash::message')
					</div>
				</div>
			</div>
			<?php Session::forget('flash_notification.message'); ?>
		@endif

		@include('layouts.inc.advertising.top')


		<div class="container">
			<div class="row">
			    <div class="col-sm-9 page-content col-thin-right">
					<div class="row">
						<div class="col-sm-8">
							<div class="inner inner-box ads-details-wrapper">
								<h2><strong> <a href="http://localhost/classified_07/as-you-can-see-passing-a-closure/26.html" title="As you can see, passing a Closure">As you can see, passing a Closure</a> </strong></h2>
								<div class="ads-image">
									<h1 class="pricetag">34৳</h1>
									<?php if($bizdirectory_detail->images){ ?>
									<ul class="bxslider">
										<?php $images = unserialize($bizdirectory_detail->images);
												foreach($images as $k=> $image){ ?>										
													<li><img src="<?php echo URL::to('/').'/'.$image ?>" alt="img" data-no-retina/></li>											
										<?php } ?>
									</ul>															
									<div id="bx-pager">
										<?php foreach($images as $k=> $image){ ?>
											<a class="thumb-item-link" data-slide-index="{{ $k }}" href="">
												<img src="<?php echo URL::to('/').'/'.$image ?>" alt="img" data-no-retina/>
											</a>
										<?php } ?>	
									</div>
									<?php } ?>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
						     time
						</div>
					</div>
					<div class="row">
					    <div class="col-sm-12">
						     Business Description
						</div>
					</div>
				</div>	
				<div class="col-sm-9 page-content col-thin-right">
					<div class="row">
					   
						<div class="col-sm-4">
						     time
						</div>
					</div>
					
					<div class="row">
					    <div class="col-sm-8">
						     Business Description
						</div>
					</div>
					
					
					
					<div class="box-title">
					   <h2><strong>Company or Business Details </strong></h2>
					</div>
					<div class="inner inner-box ads-details-wrapper">
						
					
					

				

						<div class="Ads-Details">
							
							
							
							<div class="row" style="padding-bottom: 20px;">

									
									
									 <table class="table">
								
										<tbody>
										  <tr>
											<td>Business Name</td>
											<td>{{$bizdirectory_detail->company_name}}</td>
										  </tr>      
										  <tr class="success">
											<td>Business Description</td>
											<td>{{$bizdirectory_detail->description}}</td>
										  </tr>
										  <tr class="danger">
											<td>Address</td>
											<td>{{$bizdirectory_detail->address}}</td>
										  </tr>
										  <tr class="success">
											<td>Location</td>
											<td>{{$bizdirectory_detail->location}}</td>
										  </tr>
										  <tr class="danger">
											<td>Phone</td>
											<td>{{$bizdirectory_detail->phone}}</td>
										  </tr>
										  <tr class="success">
											<td>Fax</td>
											<td>{{$bizdirectory_detail->fax}}</td>
										  </tr>
										  <tr class="danger">
											<td>Email</td>
											<td>{{$bizdirectory_detail->email}}</td>
										  </tr>
										  <tr class="success">
											<td>Website</td>
											<td><a href="{{$bizdirectory_detail->website}}" target="_blank">{{$bizdirectory_detail->website}}</a></td>
										  </tr>	
										  <tr class="success">
											<td>Hours</td>
											<td>
											
											<?php
											    if($bizdirectory_detail->openning_days){
											        $current_date = date('D');
                                                    $oppening_days =  unserialize($bizdirectory_detail->openning_days);												
												
													if (in_array($current_date, $oppening_days)){																											
														$current_time = date("h:i:sa");;
														$open_time = $bizdirectory_detail->open_time;
														$close_time = $bizdirectory_detail->close_time;																												
														if ($current_time > $open_time && $current_time < $close_time)
														{
														   echo 'Open';
														} else {
															echo 'close';
														}
																												
														
													} else {
														echo 'close';
													}
												} else {
													echo 'close';
												}	
											?>
											
											</td>
										  </tr>
										</tbody>
									  </table>

							

								<br>&nbsp;<br>
							</div>
							
						</div>
					</div>
				
				</div> 
				<!--/.page-content-->

				<div class="col-sm-3 page-sidebar-right">
					<aside>						
						<div style="margin: 25px 0; text-align: center;">
							<h2>Share This</h2>
							<button class="btn btn-fb share s_facebook" href="https://www.facebook.com/sharer.php?s=100&amp;p[title]=Classified%20-%20Go%20to%20online%20market&amp;u=http%3A%2F%2Fshahjadpurvision.org%2Fclassified%2Fpublic%2Fclassified%2Fpublic%2Fdirectory-detail%2F1&amp;t=Classified%20-%20Go%20to%20online%20market&amp;p[summary]=Classified%20-%20Go%20to%20online%20market&amp;p[url]=http%3A%2F%2Fshahjadpurvision.org%2Fclassified%2Fpublic%2Fclassified%2Fpublic%2Fdirectory-detail%2F1"><i class="icon-facebook"></i> </button>
							<button class="btn btn-tw share s_twitter" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fshahjadpurvision.org%2Fclassified%2Fpublic%2Fclassified%2Fpublic%2Fdirectory-detail%2F1&amp;text=Classified%20-%20Go%20to%20online%20market"><i class="icon-twitter"></i> </button>
							<button class="btn btn-danger share s_plus" href="https://plus.google.com/share?url=http%3A%2F%2Fshahjadpurvision.org%2Fclassified%2Fpublic%2Fclassified%2Fpublic%2Fdirectory-detail%2F1"><i class="icon-googleplus-rect"></i> </button>
						</div>						
					</aside>
				</div>
			</div>

			<div style="margin-top: 30px;"></div>
			@include('layouts.inc.carousel')
			@include('layouts.inc.advertising.bottom')
			@include('layouts.inc.tools.facebook-comments')

		</div>
	</div>
@endsection




@section('javascript')
	@parent
	<script src="{{ url('assets/plugins/bxslider/jquery.bxslider.min.js') }}"></script>
	<script>
		var stateId = '<?php echo (isset($city)) ? $country->get('code') . '.' . $city->subadmin1_code : '0' ?>';

		/* JS translation */
		var lang = {
			loginToSaveAd: "@lang('global.Please log in to save the Ads.')",
			loginToSaveSearch: "@lang('global.Please log in to save your search.')",
			confirmationSaveSearch: "@lang('global.Search saved successfully !')",
			confirmationRemoveSaveSearch: "@lang('global.Search deleted successfully !')"
		};

		$('.bxslider').bxSlider({
			pagerCustom: '#bx-pager',
			controls: true,
			nextText: " @lang('global.Next') &raquo;",
			prevText: "&laquo; @lang('global.Previous') "
		});

		$(document).ready(function () {
			@if(count($errors) > 0)
				@if(count($errors) > 0 and old('msg_form')=='1')
					$('#contact_user').modal();
				@endif
				@if(count($errors) > 0 and old('abuse_form')=='1')
					$('#report_abuse').modal();
				@endif
			@endif
			@if(config('settings.show_ad_on_googlemap'))
				genGoogleMaps(
				'<?php echo config('services.googlemaps.key'); ?>',
				'<?php echo (isset($ad->city) and !is_null($ad->city)) ? addslashes($ad->city->name) . ',' . $country->get('asciiname') : $country->get('asciiname') ?>',
				'<?php echo $lang->get('abbr'); ?>'
				);
			@endif
		})
	</script>
	<script src="{{ url('assets/js/form-validation.js') }}"></script>
	<script src="{{ url('assets/js/app/show.phone.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/app/make.favorite.js') }}"></script>
@endsection