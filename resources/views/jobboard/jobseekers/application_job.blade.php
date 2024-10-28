@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">

				<!-- Sidebar -->
				<div class="col-md-3 sidebar-left  hidden-xs">
				    @include('jobboard.common.seeker_panel')	                                   									  					 
			    </div>
			

				<!-- Content -->
				<div class="col-md-9 col-sm-12">
                              <div class="panel">

                    <div class="panel-heading panel-heading-01">           
						
			<div class="panel">
				<div class="panel-heading panel-heading-01">
					<i class="glyphicon glyphicon-ok-sign icon-padding"></i>
					Job Applied
				</div>


                    <div class="panel-body-02" style="padding-top:0px;">
                        <div>
							<div class="row animation_image" id="animation_image" align="center" style="display: none;">
								<div class="loading-image" id="waitingdiv">
									<img src="https://mybdjobs.bdjobs.com/mybdjobs/images/loading.gif" alt="Loading...">
								</div>
							</div>
							<div id="txtResult">
            					

						
						   
						   <table class="table table-inside" style="border:none;margin-top: 0px;width: 100%;">
							  <thead>
                              	
                                     <tr class="panel-heading-02 ja-panel">
                                        <th style=" border-radius: 3px 0px 0px 0px; ">Sl</th>
                                        <th style="">Job Title</th>
                                        <th style="text-align: center;">Expected Salary </th>
                                        <th style="border-radius: 0px 3px 0px 0px; text-align: center;">
                                           Interview Call
                                           <span style="font-size: 10px; font-weight: normal; padding: 0px;">
                                              (by Employer)
                                           </span>
                                        </th>
                                     </tr>
                                    
							  </thead>
							  
							  <?php foreach($application_job_list as $key=>$application_job){ ?>
				
							  <tbody id="<?php echo $key+1 ?>">
								 <tr>
									<td style="">
									   <p style="margin-bottom: 0px;">
                                       		<?php echo $key+1 ?>.                                             
									   </p>
									</td>
                                    
				 
									<td style="">
									   <p style="margin-bottom: 0px;">
									   {{$application_job->company_name or ''}}
									   </p>
									   <a href="{{url('job-detail').'/'.$application_job->jb_employers_job_post_id}}" target="_blank" style="color: #0e73a9;">{{$application_job->job_title}}</a><br>
                                           <p class="employer-view">Applied on:
                                              <span>
                                                 <i class="glyphicon glyphicon-calendar"></i> {{date('d-m-Y',strtotime($application_job->created_at))}}
                                              </span>											 
                                           </p>                                       
									</td>
                                    
									<td style="text-align: center;">
									   <p style="width: 50%; float: left; text-align: right;">
										 <?php echo $application_job->salary ?>
									   </p>								   
									</td>
                                    
									<td style="text-align: center;">
									    <?php if($application_job->interview_call){ ?>
										 <p>									                                             
                                           <i class="glyphicon glyphicon-ok check-mark check-mark-invisible" style="padding-left: 10px; margin: 0px;"></i>
									     
									   </p>
									   <?php echo $application_job->interview_date; ?>
							             <?php } else{ ?>
									   <p>									                                             
                                           <i class="glyphicon glyphicon-remove check-mark check-mark-invisible" style="padding-left: 10px; margin: 0px;"></i>
									   </p>
										 <?php } ?>									   
									</td>
                                                                                                         
							  </tr>
							  </tbody>
							  
							  <?php } ?>
							  														  						
							  
   						</table>
   <!-- pagination table -->
	<table class="table table-inside" style="border:none;margin-top: 0px;width: 100%;">
	 <tbody>
		<tr>
			<td colspan="4" style="list-style:none;">
			<!-- START PAGINATION-->        	
			   
			</td>
		</tr>
	  
	</tbody>
  </table> 
  

	                         
                            </div>
                        </div>

                </div> <!-- end of panel-body-02 -->
				
		</div> <!-- end of panel -->
	</div>
						
                    
                       

                           
                           
                        </div>
                        </div>
		</div>
	</div>
@endsection









