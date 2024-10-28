@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container resume-section">
		<div class="container">
			<div class="row">

				<div class="col-md-3 sidebar-left  hidden-xs">
				    @include('jobboard.common.seeker_panel')	                                   									  					 
			    </div>
			

				<!-- Content -->
				<div class="col-sm-9 padding-10 page-content col-thin-left">
					<div class="container">
					                   @if(session('success'))
											<div class="inner-box category-content">
												<div class="row">
													<div class="col-lg-12">
														<div class="alert alert-success pgray  alert-lg" role="alert">
															<p>{{ session('message') }}</p>
														</div>
													</div>
												</div>
											</div>
										@endif
										
					                   <?php if($resume->cv){ ?>
						                  <a target="_blank" href="{{URL::to('/').'/'.$resume->cv}}">Download CV</a>
										  <p></p>
										  <div class="all-info">
											<div class="empty-message m-t-20 photo-upload">
											 <form id="form1" class="form-inline" name="form1" action="{{url('resume-upload-submit')}}" method="post" enctype="multipart/form-data">
												  {!! csrf_field() !!}
													<input type="hidden" name="id" value="<?php echo $resume->id ?>"> 
														
														<div class="input-group">
															<span class="input-group-btn">
																<span class="btn btn-primary btn-file">
																   Change Resume<input name="picture" type="file">
																</span>
															</span>
															<?php $cv = explode('/',$resume->cv) ?>
															<input type="text" value="<?php echo end($cv) ?>" class="form-control cv" readonly>
															<input type="hidden" name="balnk_logo" value="">												
														</div>
														<p></p>
														<p></p>
														<p></p>
													
													<div class="row">
														<div class="col-md-12">                                      
															<button class="btn btn-primary btn-upload" id="uploadPhoto" type="submit"><i class="icon-upload">&nbsp;</i>Upload</button>                                        
														</div>                                   
													</div>                                
											  </form>
											</div>                       
										  </div>
									   <?php } else {?>
									       <a target="_blank" href="{{URL::to('/').'/'.$resume->cv}}">Download CV</a>
										  <p></p>
										  <div class="all-info">
											<div class="empty-message m-t-20 photo-upload">
											 <form id="form1" class="form-inline" name="form1" action="{{url('resume-upload-submit')}}" method="post" enctype="multipart/form-data">
												  {!! csrf_field() !!}
													<input type="hidden" name="id" value="<?php echo $resume->id ?>"> 
													<div class="input-group">
														<span class="input-group-btn">
															<span class="btn btn-primary btn-file">
															   Add Resume<input name="picture" type="file">
															</span>
														</span>
														<input type="text" class="form-control cv" readonly>
														<input type="hidden" name="balnk_logo" value="">												
													</div>

													<p></p>
													<p></p>
													
													<div class="row">
														<div class="col-md-12">                                      
															<button class="btn btn-primary btn-upload" id="uploadPhoto" type="submit"><i class="icon-upload">&nbsp;</i>Upload</button>                                        
														</div>                                   
													</div>                                
											  </form>
											</div>                       
										  </div>
									   <?php } ?>
									  
                    
					


					
				</div>
				
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	@parent
        <script>
				 $(document).on('change', '.btn-file :file', function() { 
				     var input = $(this),
					  numFiles = input.get(0).files ? input.get(0).files.length : 1,
					  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
				      input.trigger('fileselect', [numFiles, label]);
				});
				
				$(document).on('fileselect','.btn-file :file', function(event, numFiles, label) {						
					var input = $(this).parents('.input-group').find(':text'),
						log = numFiles > 1 ? numFiles + ' files selected' : label;						
					if( input.length ) {
						input.val(log);
					} else {
						if( log ) alert(log);
					}
					
				});								
		  </script>	   
@endsection









