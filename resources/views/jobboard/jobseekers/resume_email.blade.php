@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">

				<!-- Sidebar -->
				<div class="col-md-3 sidebar-left  hidden-xs">
				    <div class="box-title text-center"> 
					   <h2>Resume</h2>
					</div>
					<div class="">
						<div class="category-links">
							<ul>
				
								<li>
									<img src="http://localhost/classified/images/cats/fa-folder_default.png" alt="img" data-no-retina="">
									<a href="{{url('resume-view')}}">
										View Resume
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/images/cats/fa-folder_default.png" alt="img" data-no-retina="">
									<a href="{{url('resume-view-step1')}}">
										Create/Edit Resume
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="{{url('resume-upload')}}">
										Upload Resume  
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="{{url('resume-email')}}">
										Email Resume
									</a>
								</li>
								
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="{{url('application-job')}}">
										Application Job  
									</a>
								</li>
								
							</ul>
						</div>
					</div>	                                   									  					 
			    </div>
			

				<!-- Content -->
				<div class="col-md-9 col-sm-12">
                              <div class="panel">

                     <div class="panel-heading panel-heading-01">
            
            <div class="row">
            <div class="col-md-8 col-xs-8">
            <i class="glyphicon glyphicon-envelope icon-padding"></i>Email Resume</div>
<div class="col-md-4 col-xs-4" style="padding: 0;">
                  <div class="video-icon pull-right">
          <a id="fancybox" href="#Wrapperbox" onclick="openVediobox();" class="video-white">
          
                      <i class="glyphicon glyphicon-facetime-video icon-padding" rel="tooltip" data-placement="top" data-original-title="Video help"></i>
                   
                    </a>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                           <br>
                          
                           <div class="panel-heading panel-heading-02">
                             Email Resume to a Company
                           </div>

                           <table class="table table-inside-email">
                           <form name="form2" id="form2" action="sendEmailCV.aspx" method="post"></form>
                              <tbody><tr>
                                 <td style="border-top:none;"><p class="table-title" style="margin-top:15px;">My Email:</p>
                                    <div class="inner-addon left-addon">
                          
                                       <input type="text" class="form-control from-control-emailresume" placeholder="Email Address" name="txtUserEmail" id="txtUserEmail" value="rabiul ok islam <rabiul0420@gmail.com>">
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td style="border-top:none; padding-top:0px;"><p class="table-title">Company Email:</p>
                                    <div class="inner-addon left-addon">
                                    
                                       <input type="text" class="form-control from-control-emailresume" placeholder="Company Email Address" name="txtCompanyEmail" id="txtCompanyEmail" value="">
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td style="border-top:none; padding-top:0px;"><p class="table-title">Subject:</p>
                                    <div class="inner-addon left-addon">
                                  
                                       <input type="text" class="form-control from-control-emailresume" placeholder="Type a Subject" name="txtMailSubject" id="txtMailSubject" value="">
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                              </tr><tr class="email-cv">
                                 <td style="border-top: 0px;">
                                    <div class="radio-items">
                                       <span class="icon">
                                          <input type="radio" id="icon" name="radioHtml" class="email-notification-checkbox" style="float:left; margin-right:5px; margin-top: 0px" checked="checked" value="bdatt">
                                       </span>
                                       <h4 class="email-notification-h4"> 
                                          My Bdjobs Format <a a="" href="#" onclick="GetPopupWindow();">(View)</a>
                                       </h4>
                                    </div>
                                    
                                    <div class="radio-items" style="width:320px;">
                                       <span class="icon">
                                          <input type="radio" name="radioHtml" value="att" id="icon" class="email-notification-checkbox" style="float:left; margin-right:5px; margin-top: 0px;" onclick="send_email();">
                                       </span>
                                       <h4 class="email-notification-h4"> 
                                          Attach Uploaded Resume 
                               </h4>
      
                               </div>
                                <input type="hidden" id="hName" name="hName" value="rabiul ok islam">
                    <input type="hidden" id="hEmailAddress" name="hEmailAddress" value="rabiul0420@gmail.com">
                    <input type="hidden" id="hid" name="hid" value="[4]4]4_6Z0\9\29">
                    <input type="hidden" id="strFileName" name="strFileName" value="">
                    
                    
                              </td></tr>

                              <tr>
                                 <td style="border-top:none; padding-top:0px;"><p class="table-title">Message:</p>
                                    <div class="input-group" style="width:100%;">
                                       <textarea class="form-control from-control-emailresume" placeholder="Your Message..." style="height:150px;" name="txtApplication" id="txtApplication"></textarea>
                                    </div>
                                    <input name="hidName" id="hidName" type="hidden" value="rabiul ok islam">
                                 </td>
                              </tr>

                              <tr>
                                 <td style="border-top:none; padding-top:0px;">
                                    <button type="submit" class="btn view-btn" onclick="return Validation_Function();"><i class="glyphicon glyphicon-send icon-padding"></i>Send Resume</button>
                                 </td>
                              </tr>
                              
                           </tbody></table>
                           
                        </div>
                        </div>
		</div>
	</div>
@endsection









