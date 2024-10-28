@extends('jobboard.jobseekers.common.master')
@section('content')
	{!! csrf_field() !!}
	<div class="main-container jobboard_section">
        <div class="container">			
			<?php 
                if(Session::get('is_logged_in')){
					echo Session::get('password');
					echo Session::get('user_id');
				}						
			?>
			

				
				
				<div class="col-lg-12 content-box ">
	<div class="row row-featured">
		<div class="col-lg-12  box-title detail-box-title">
			<div class="inner">
				<h2>
					<span class="title-3"><b>Featured Job</b></span>
					<a href="" class="sell-your-item">
						{{ t('View more') }} <i class="  icon-th-list"></i>
					</a>
				</h2>
			</div>
		</div>

		<div style="clear: both"></div>

		<div class=" relative content featured-list-row featured-list-row-jobs clearfix">
			<nav class="slider-nav has-white-bg nav-narrow-svg">
				<a class="prev">
					<span class="nav-icon-wrap"></span>
				</a>
				<a class="next">
					<span class="nav-icon-wrap"></span>
				</a>
			</nav>
			<div class="no-margin featured-list-slider-jobs featured-list-slider">
				<?php foreach($jb_feacher as $key => $feacher): ?>
					<div class="item">
						<a href="#">
							<span class="item-carousel-thumb">
							   <img class="img-responsive" src="{{ url('/'.$feacher->company_logo) }}" alt="As you can see, passing a Closure " data-no-retina="" style="border: 1px solid #e7e7e7; margin-top: 2px;">
							</span>
							<span class="item-name"><a href="{{url('employers-job-detail').'/'.$feacher->id}}">{{$feacher->job_title}}</a></span>
						</a>
					</div>
				<?php endforeach; ?>

			</div>
		</div>		
	</div>
</div>








				<div class="row">
					<div class="col-md-12 col-sm-12">
			

						<div class="row graduate-section">
						
							<div class="col-md-9">
							
								<div class="inner-box">
									<div class="box-title detail-box-title">									
													<h2>
														<i class="fa fa-search yewllo"></i> <span class="title-3"><b>Find Your Right Job </b></span>											
													</h2>								
											</div>
								
									<div class="search-row-wrapper">		
										<form id="seach" name="search" action="{{url('employer-job-list-search')}}" method="GET">
											<div class="row">
												
												<div class="col-sm-6" style="padding-left:20px;padding-right:11px">									
													<input type="text" required  name="job_title" class="form-control" placeholder="Search By Kywords">
												</div>
												<div class="col-sm-4" style="padding-right:1px;padding-left:1px">
													<select name="organization_type_id" required id="search_category" class="form-control selecter select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																<option value="">Organization Type</option>
															<?php foreach($organization_type as $row){ ?>
																<option value="<?php echo $row->id ?>"><?php echo $row->type_name ?></option>
															<?php } ?>
													</select> 										
												</div>
												
												<div class="col-sm-2" style="padding-left:1px;padding-right:20px">
													<button class="btn btn-block btn-primary search_form"><i class="fa fa-search"></i></button>
												</div>
											</div>	
										</form>
									</div>
								</div>	
							
								<!-- All Category job-->
								<div class="graduate-category">
									<div class="box-title detail-box-title">									
											<h2>
												<i class="fa fa-th-list"></i> <span class="title-3"><b>All Category Jobs </b></span>											
											</h2>								
									</div>
								
                                    <div class="all-categories">
										<div class="row">
											<div class="col-md-4">
											   <ul>
													
													<?php foreach($jb_categories as $k=>$row){ if($k%3==0){ ?>
													<li>
														<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/0'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
													</li>
													<?php } } ?>
													
												</ul>
											</div>
											<div class="col-md-4">
											   <ul>
													
													<?php foreach($jb_categories as $k=>$row){ if($k%3==1){ ?>
													<li>
														<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/0'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
													</li>
													<?php } } ?>
													
												</ul>
											</div>
											<div class="col-md-4">
											   <ul>
													
													<?php foreach($jb_categories as $k=>$row){ if($k%3==2){ ?>
													<li>
														<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/0'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
													</li>
													<?php } }  ?>
												</ul>
											</div>																						 
										</div>
									</div>	
								</div>
								
								<!-- Graduate job-->

								<div class="all-jobs">    
									<div id="hotjobsDiv">											
											<div class="box-title detail-box-title">									
												<h2>
													<i class="fa fa-graduation-cap"></i> <span class="title-3"><b>Graduate Jobs </b></span>											
												</h2>								
											</div>
											
											<?php $jb_graduate_no = count($jb_graduate); ?>
										    <?php if($jb_graduate_no){ ?>
											<div class="row hj-row grey">											
											        <?php foreach($jb_graduate as $key=>$row){ if($key<=2){ ?>
													<div class="col-md-4 col-sm-4 col-xs-12 c-card br">
														<div class="row">
															<div class="hotJobsCompany">
																<div class="col-md-3 pr">
																	<div class="companyLogo">
																		<img width="40" height="40" src="{{ url('/'.$row->company_logo) }}" alt="Click Job Title to View Detailsâ€¦" title="Acid Survivors Foundation">
																	</div>
																</div>
																<div class="col-md-9 pl">
																	<div class="companyDetails">
																		<h5>{{$row->company_name}}</h5>
																		<ul>
																			<li><a href="{{url('employers-job-detail').'/'.$row->id}}"  title="Deputy Manager - Medical Advocacy &amp; Education ">{{$row->job_title}}</a></li>
																			</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
											   		<?php } } ?>									
										    </div>
											<?php } if($jb_graduate_no>3){ ?>
																
					
											<div class="row hj-row" style="height: auto;">
												
												<?php foreach($jb_graduate as $key=>$row){ if(2<$key && $key<=5){ ?>
													<div class="col-md-4 col-sm-4 col-xs-12 c-card br">
														<div class="row">
															<div class="hotJobsCompany">
																<div class="col-md-3 pr">
																	<div class="companyLogo">
																		<img  src="{{ url('/'.$row->company_logo) }}" alt="" title="Acid Survivors Foundation">
																	</div>
																</div>
																<div class="col-md-9 pl">
																	<div class="companyDetails">
																		<h5>{{$row->company_name}}</h5>
																		<ul>
																			<li><a href="{{url('employers-job-detail').'/'.$row->id}}"  title="Deputy Manager - Medical Advocacy &amp; Education ">{{$row->job_title}}</a></li>
																			</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
											   		<?php } } ?>
											
																								
											</div>
											<?php } if($jb_graduate_no>6){ ?>
											<div class="row hj-row grey">											
											        <?php foreach($jb_graduate as $key=>$row){ if($key<=2){ ?>
													<div class="col-md-4 col-sm-4 col-xs-12 c-card br">
														<div class="row">
															<div class="hotJobsCompany">
																<div class="col-md-3 pr">
																	<div class="companyLogo">
																		<img src="{{ url('/'.$row->company_logo) }}" alt="Click Job Title to View Detailsâ€¦" title="Acid Survivors Foundation">
																	</div>
																</div>
																<div class="col-md-9 pl">
																	<div class="companyDetails">
																		<h5>{{$row->company_name}}</h5>
																		<ul>
																			<li><a href="{{url('employers-job-detail').'/'.$row->id}}"  title="Deputy Manager - Medical Advocacy &amp; Education ">{{$row->job_title}}</a></li>
																			</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
											   		<?php } } ?>									
										    </div>
											
											<?php } ?>
											
																
																
										
									</div>
									<input type="hidden" value="1" id="hHotjobidcount">									  
								</div>

								
							</div>
							<div class="col-md-3 sidebar-left">
								<div class="box-title text-center"> 
								   <h2>Govt jobs</h2>
								</div>																
								<div class="graduate-left-category">
									<h4>GOVT JOBS</h4>
									<ul>
										<?php foreach($jb_govt as $key => $feacher): ?>
										<li><a href="{{url('employers-job-detail').'/'.$feacher->id}}">{{$feacher->job_title}}</a></li>
                                        <?php endforeach ?>										
									</ul>
								</div>	
							</div>					
						</div>      
					</div>
				</div>
			
	
			
          
			
			<div class="row">
    			<div class="col-md-12 col-sm-12">



<!-- Start blue collar jobs -->
    	


    		    <div class="skilled-job-category">
	      			
					
					<div class="box-title detail-box-title">									
											<h2>
												<i class="fa fa-cogs"></i> <span class="title-3"><b>Skilled jobs </b></span>											
											</h2>								
					</div>
                    <div class="skilled-category">
						<div class="row">
							<div class="col-md-3">
								<ul>													
									<?php foreach($jb_categories as $k=>$row){ if($k%4==0){ ?>
									<li>
										<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/3'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
									</li>
									<?php } } ?>													
								</ul>
							</div>
							<div class="col-md-3">
							    <ul>													
									<?php foreach($jb_categories as $k=>$row){ if($k%4==1){ ?>
									<li>
										<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/3'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
									</li>
									<?php } } ?>													
								</ul>
							</div>
							<div class="col-md-3">
							   <ul>													
									<?php foreach($jb_categories as $k=>$row){ if($k%4==2){ ?>
									<li>
										<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/3'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
									</li>
									<?php } } ?>									
								</ul>
							</div>
							<div class="col-md-3">
							   <ul>													
									<?php foreach($jb_categories as $k=>$row){ if($k%4==3){ ?>
									<li>
										<i class="fa fa-angle-right"></i> <a  href="{{url('employer-job-list-category').'/'.$row->id.'/3'}}" title="Accounting/Finance"><i class="icon-angle-right"></i>{{$row->name}} <span></span></a>
									</li>
									<?php } } ?>													
								</ul>
							</div>

						
							
						 </div>
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