<?php
use Illuminate\Support\Facades\Input;

// Keywords
$keywords = Input::get('q');

// Category
//$qCategory = (isset($cat) and !empty($cat)) ? $cat->tid : Input::get('c');

$qCategory = '';


?>


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
	<div class="main-container directory_section">
        <div class="container">				
			<div class="row">
				<div class="col-md-3 sidebar-left">
				    <div class="box-title text-center"> 
					   <h2>All Category</h2>
					</div>
					<div class="container">
						<div class="category-links">
							<ul>
							    <?php foreach($bizcategory_list as $bizcategory ){ ?>
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/map-icon-pet-store.png" alt="img" data-no-retina="">
									<a href="{{ URL::to('/').'/jobboard-cat/'.$bizcategory->id  }}">
										{{ $bizcategory->name }}
									</a>
								</li>
                                <?php } ?>								
							</ul>
						</div>
					</div>	                                    									  		       
				</div>
				 
				 <div class="col-sm-9 page-content">
                
				    
				
				
					<div class="inner-box">
						<h2 class="title-2 category-title"><i class="icon-docs yewllo"></i>Bangladesh Bussiness Directory <a style="float:right" href="{{ URL::to('/').'/jobboard-create'}}">Submit Your Business</a></h2>
						
						<div class="search-row-wrapper category-search">		
							<form id="seach" name="search" action="{{ url('search-jobboard') }}" method="GET">
								
								<div class="row">
									<div class="col-sm-1">
									</div>
									<div class="col-sm-3" style="padding-left: 1px; padding-right: 1px;">
										<select name="c" id="search_category" class="form-control selecter">
											<option value="" {{ ($qCategory=='') ? 'selected="selected"' : '' }}> {{ t('All Categories') }} </option>							
												@foreach ($bizcategory_list as $itemCat)
													<option value="{{ $itemCat->id }}"> {{ $itemCat->name }} </option>
												@endforeach								
										</select>
									</div>
									<div class="col-sm-3 search-col locationicon" style="padding-left: 1px; padding-right: 1px;">
										<i class="icon-location-2 icon-append yewllo" style="margin-top: -6px; margin-left: 1px;"></i>
										<input type="text" id="loc_search" name="location" class="form-control locinput input-rel searchtag-input has-icon"
											   placeholder="{{ t('Where?') }}">
									</div>
									<div class="col-sm-2" style="padding-left: 1px; padding-right: 1px;">
										<button class="btn btn-block btn-primary search_form"><i class="fa fa-search"></i></button>
									</div>
								</div>	
							</form>
						</div>
					    <br>
						
						<div class="directory-list">
																																	
									<?php  foreach($bizdirectory_list as $k=>$bizdirectory ){  ?>

                                        <div class="row directory">
											<div class="col-md-2">
											    <a href="{{ URL::to('/').'/jobboard-detail/'.$bizdirectory->id }}"><img class="thumbnail img-responsive" src="{{ URL::to('/').'/'.$bizdirectory->image }}" alt="img" data-no-retina=""></a>
											</div>
											
											<div class="col-md-10">
											    <div class="row">
													<div class="col-md-5">
														<h2><a href="{{ URL::to('/').'/jobboard-detail/'.$bizdirectory->id }}" title="In a bid to establish dominanc">{{ $bizdirectory->company_name }}</a></h2>											    
														<i style="font-size:22px;margin-right:10px;" class="fa fa-map-marker yewllo"></i><span>{{ $bizdirectory->location }}</span>												 
																																																		 												 
													</div>
													<div class="col-md-3">
														<h4>Business Hour</h4>
														<p class="yewllo">																								
															 <?php
														if($bizdirectory->openning_days){
															$current_date = date('D');
															$oppening_days =  unserialize($bizdirectory->openning_days);												
														
															if (in_array($current_date, $oppening_days)){																											
																$current_time = date("h:i:sa");;
																$open_time = $bizdirectory->open_time;
																$close_time = $bizdirectory->close_time;																												
																if ($current_time > $open_time && $current_time < $close_time)
																{
																   echo 'Open Now';
																} else {
																	echo 'Closed Now';
																}
																														
																
															} else {
																echo 'Closed Now';
															}
														} else {
															echo 'Closed Now';
														}	
													?>
														
														
														</p>
													</div>
													<div class="col-md-4">
														<h4>Address</h4>
														 <p>{{ $bizdirectory->address }}</p>
													</div>
											    </div>
												<div class="row">
												    <!--<div class="col-md-4">
													    <i data-toggle="tooltip" title="" class="glyphicon glyphicon-phone-alt green"></i> {{ $bizdirectory->phone }}
													</div>
													<div class="col-md-4">
													    <i data-toggle="tooltip" title="" class="fa fa-envelope green"></i> {{ $bizdirectory->email }}
													</div>
													<div class="col-md-4">
													    <i data-toggle="tooltip" title="" class="fa fa-globe green"></i> {{ $bizdirectory->location }}
													</div> -->
													<ul>
															<li><i data-toggle="tooltip" title="" class="glyphicon glyphicon-phone-alt green"></i> {{ $bizdirectory->phone }}</li>
															<li><i data-toggle="tooltip" title="" class="fa fa-envelope green"></i> {{ $bizdirectory->email }}</li>
															<li><i data-toggle="tooltip" title="" class="fa fa-globe green"></i> {{ $bizdirectory->location }}</li>													
														</ul>
												</div>
											</div>
										</div>
									
									
									<!--<tr class="<?php echo ($k%2==0)?'success':'danger' ?>">									
										<td style="width:14%" class="add-img-td">
											<a href="{{ URL::to('/').'/jobboard-detail/'.$bizdirectory->id }}"><img class="thumbnail img-responsive" src="{{ URL::to('/').'/'.$bizdirectory->image }}" alt="img" data-no-retina=""></a>
										</td>
										<td style="width:25%" class="ads-details-td">
											<div>
												<p><strong> <a href="{{ URL::to('/').'/jobboard-detail/'.$bizdirectory->id }}" title="In a bid to establish dominanc">{{ $bizdirectory->company_name }}</a> </strong></p>
											</div>
										</td>
										<td style="width:14%" class="add-img-td">
											{{ $bizdirectory->location }}

										</td>
										<td style="width:14%" class="add-img-td">
											{{ $bizdirectory->address }}
										</td>
										<td style="width:20%" class="add-img-td">
										     
											 <p><span class="glyphicon glyphicon-earphone"></span> {{ $bizdirectory->phone }}</p>
											 
											 <p><span class="glyphicon glyphicon glyphicon-envelope"> </span> {{ $bizdirectory->email }}</p>
											 <p><i class="fa fa-fax" aria-hidden="true"></i> {{ $bizdirectory->	fax }}</p>
											 <p><i class="fa fa-globe" aria-hidden="true"></i> {{ $bizdirectory->website }}</p>
										</td>																
									</tr>	-->																	
									<?php } ?>										
								
						</div>

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