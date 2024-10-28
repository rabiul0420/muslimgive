@extends('jobboard.jobseekers.common.master')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">

				<!-- Sidebar -->
				<div class="col-md-3 sidebar-left  hidden-xs">
				    <div class="box-title text-center"> 
					   <h2>Employer Panel</h2>
					</div>
					<div class="">
						<div class="category-links">
							<ul>
				
								<li>
									<img src="http://localhost/classified/images/cats/fa-folder_default.png" alt="img" data-no-retina="">
									<a href="{{url('post-new-job')}}">
										Post New Job
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/images/cats/fa-folder_default.png" alt="img" data-no-retina="">
									<a href="{{url('employer-job-list')}}">
										Edit All Job
									</a>
								</li>
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="{{url('employer-job-application-list')}}">
										Applicatins  
									</a>
								</li>
								<!--<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="#">
										Send Message To Applicant
									</a>
								</li>-->
								<li>
									<img src="http://localhost/classified/uploads/app/categories/default/fa-home.png" alt="img" data-no-retina="">
									<a href="{{url('seekers-logout')}}">
										Sign Out
									</a>
								</li>
								
							</ul>
						</div>
					</div>	                                   									  					 
			    </div>
			

				
				
				<div class="col-md-9 col-sm-12">

        <div class="panel">
           <div class="panel-heading panel-heading-01"><i class="glyphicon glyphicon-eye-open icon-padding"></i>View Resume</div>
           <div class="panel-body panel-body-02">

        
   		<div id="resume">	
        	
			<table border="0" cellpadding="0" cellspacing="0" align="center" width="750">
				<tbody>
					<tr>
						<td colspan="6">
							<table border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td width="73%" height="" align="left" valign="bottom" class="BDJApplicantsName">
										<!--Applicant's Name:-->
										{{$resume->	first_name.' '.$resume->last_name}}
										</td>
										
										<td width="27%" rowspan="2" align="right" valign="bottom">
										<!--Photograph:-->			
											<table width="140" height="140" border="0" align="center" cellpadding="0" cellspacing="7" bgcolor="#dadce1">
												<tbody>
													<tr> 
														<td width="126" height="135" align="center" bgcolor="#e2e4e5" valign="middle"> 
														<img src="{{URL::to('/').'/'.$resume->photograph}}" width="124" height="135">
														</td>
													</tr>
												</tbody>
											</table>
										
										</td>
									</tr>
							
									<tr>
										<td class="BDJNormalText04" align="left" valign="middle">
										<!--Contact Address:-->
										
											 Address: {{ $resume->present_add }} 		 
										<!--Home Phone:-->
										
											 <br>
											 Mobile No 1: {{ $resume->mobile }} 	 
										<!--Office Phone:-->
										
										<!--Mobile:-->
										
											 <br>		
											 e-mail : {{ $resume->mobile }} 
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
	
<!---------------
CAREER OBJECTIVE:
----------------->

     <table border="0" cellpadding="0" cellspacing="0" align="center" width="750">	
		 <tbody><tr>
		 <td colspan="6" style="border-bottom:1px solid #000000;">&nbsp;</td>
		 </tr>
		  
		 <tr><td colspan="6">&nbsp;</td></tr>		 
		 
		 <tr>
		 <td colspan="6" class="BDJHeadline01"><u>Career Objective:</u></td>
		 </tr>
		 
		 <tr>
		 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
		 hmmmmmm	
		 </td>
		 </tr>		
	</tbody></table>

<!--------------
CAREER SUMMARY :
---------------->

	 <table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">	
		 <tbody><tr>
		 <td colspan="6" class="BDJHeadline01"><u>Career Summary:</u></td>
		 </tr>
	
		 <tr>
		 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
		 HMMMM
		 </td>
		 </tr>
	 </tbody></table>	 

<!---------------------
SPECIAL QUALIFICATION :
----------------------->

	 <table border="0" cellpadding="0" cellspacing="0" style="margin-top:3px;" align="center" width="750">	
		 <tbody><tr>
		 <td colspan="6" class="BDJHeadline01"><u>Special Qualification:</u></td>
		 </tr>
	
		 <tr>
		 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
		 hmmhhh
		 </td>
		 </tr>
	 </tbody></table>
	 	
<!-------------------------------------------
EMPLOYMENT HISTORY, TOTAL YEAR OF EXPERIENCE:
--------------------------------------------->
	
<!----------------------
'ACADEMIC QUALIFICATION:
------------------------>

	 <table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">
	 	 <tbody><tr>
		 <td colspan="6" class="BDJHeadline01"><u>Academic Qualification:</u></td>
		 </tr>
	
		 <tr>
		 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
		 <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
		 	  <tbody><tr class="BDJNormalText02">
			  <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Exam Title</strong></td>
			  <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Concentration/Major</strong></td>
			  <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Institute</strong></td>
			  <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>Result</strong></td>
			  
			       <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>Pas.Year</strong></td> 				   
			  
			  
			       <td width="15%" align="center"><strong>Duration</strong></td>
			  
			  </tr>			 
		      
			        <tr class="BDJNormalText02">
					<!--Exam Title:-->
				    <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					HSC
					&nbsp;
					</td>
				    <!--Concentration/Major:-->
					<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					sv
					&nbsp;
					</td>
				    <!--Institute:-->
					<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					tyjyuiuyio	
					&nbsp;				
					</td>
				    <!--Result:-->
					<td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					Second Division, Marks :70%
					&nbsp;					
					</td>
				    <!--Passing Year:-->
					
						 <td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
					     2009
						 &nbsp;
					     </td>
					
					
						 <!--Duration:-->
						 <td width="15%" style="border-top:1px solid #666666" align="center">
						 4
						 &nbsp;					
						</td>
					
			        </tr><tr class="BDJNormalText02">
					<!--Exam Title:-->
				    <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					SSC
					&nbsp;
					</td>
				    <!--Concentration/Major:-->
					<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					rtjutyujy
					&nbsp;
					</td>
				    <!--Institute:-->
					<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					tiyo87o68	
					&nbsp;				
					</td>
				    <!--Result:-->
					<td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
					First Division, Marks :50%
					&nbsp;					
					</td>
				    <!--Passing Year:-->
					
						 <td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
					     2011
						 &nbsp;
					     </td>
					
					
						 <!--Duration:-->
						 <td width="15%" style="border-top:1px solid #666666" align="center">
						 -
						 &nbsp;					
						</td>
							 
		 </tr></tbody></table> 
		 </td>
		 </tr>
	 </tbody></table>

<!--------
TRAINING:
--------->

<!--------------------------
PROFESSIONAL QUALIFICATION:
--------------------------->

	 <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
	 	 <tbody><tr>
		 <td colspan="6" class="BDJHeadline01"><u>Professional Qualification:</u></td>
		 </tr>
	
		 <tr>
		 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
		 <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
			 <tbody><tr class="BDJNormalText02">
			 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Certification</strong></td>
			 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Institute</strong></td>
			 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Location</strong></td>
			 <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>From</strong></td>
			 <td width="12.5%" align="center"><strong>To</strong></td>
			 </tr>
			 	
				  <tr class="BDJNormalText02">
				  <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
				  dfhgfjhg
				  &nbsp;
				  </td>
				  <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
				  hjljkljk
				   &nbsp;
				  </td>
				  <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
				  ghkhjlkj
				   &nbsp;
				  </td>
				  <td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
				   May 4, 2017
				   &nbsp;	   
				  </td>
				  <td width="12.5%" style="border-top:1px solid #666666;" align="center">
				   May 6, 2017
				   &nbsp;	   
				  </td>
				  </tr>
			 
		 </tbody></table>	
		 </td>
		 </tr>
	 </tbody></table>
	
<!---------------------------------
CAREER AND APPLICATION INFORMATION:
----------------------------------->

	 <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
		<!--
		Career and Application Information:
		-->
		<tbody><tr>
		<td colspan="6" class="BDJHeadline01"><u>Career and Application Information:</u></td>
		</tr>
	
		<tr>
		<td colspan="6" align="left" class="BDJNormalText01">
		<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
			<!--Looking For:-->
			
				 <tbody><tr class="BDJNormalText03">
				 <td width="32%" align="left" style="padding-left:5px;">Looking For</td>
				 <td width="2%" align="center">:</td>
				 <td width="66%" align="left">
				 Mid Level Job
				 </td>
				 </tr>
			
			<!--Available For:-->
			
			<!--Present Salary:-->
			
					  <tr class="BDJNormalText03">
					  <td width="32%" align="left" style="padding-left:5px;">Present Salary</td>
					  <td width="2%" align="center">:</td>
					  <td width="66%" align="left">Tk. 2000</td>
					  </tr>
				 
			<!--Expected Salary:-->

					  <tr class="BDJNormalText03">
					  <td width="32%" align="left" style="padding-left:5px;">Expected Salary</td>
					  <td width="2%" align="center">:</td>
					  <td width="66%" align="left">Tk. 4000</td>
					  </tr>

			<!--Preferred Job Category:-->
			<tr class="BDJNormalText03">
			<td width="32%" align="left" style="padding-left:5px;">Preferred  Job Category</td>
			<td width="2%" align="center">:</td>
			<td width="66%" align="left">
			HR/Org. Development
			</td>
			</tr>
			<!--Preferred District:-->
            
			<!--Preferred Country:-->
					
			<!--Preferred Organization Types:-->
           
		</tbody></table>
		</td>
		</tr>
	</tbody></table>


<!--
Specialization:
-->

     <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
	 	<tbody><tr>
		<td colspan="6" class="BDJHeadline01"><u>Specialization:</u></td>
		</tr>
		
		     <tr>
			 <td colspan="6" align="left" class="BDJNormalText01">
			 gfjghkhjl
			 </td>
			 </tr>			  
		
</tbody></table>

<!--
EXTRA CURRICULAR ACTIVITIES, LANGUAGE PROFICIENCY:
-->

	      <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
			  <!--
			  Extra Curricular Activities:
			  -->
			  <tbody><tr>
			  <td colspan="6" class="BDJHeadline01"><u>Extra Curricular Activities:</u></td>
			  </tr>
		
			  <tr>
			  <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
			  hjljhljhk
			  </td>
			  </tr>
	 	  </tbody></table>
	 
<!--
Language Proficiency:
-->

<!--
PERSONAL DETAILS:
-->

	 <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
		<!--
		Personal Details
		-->
		<tbody><tr>
		<td colspan="6" class="BDJHeadline01"><u>Personal Details :</u></td>
		</tr>
	
		<tr>
		<td colspan="6" align="left" class="BDJNormalText01">
		<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
			<!--Fathers Name:-->
			
			<!--Mothers Name:-->
			
			<!--Date of Birth:-->
			<tbody><tr class="BDJNormalText03">
			<td width="22%" align="left" style="padding-left:5px;">Date  of Birth</td>
			<td width="2%" align="center">:</td>
			<td width="76%" align="left">
			 February 2, 1990	 
			</td>
			</tr>
			<!--Gender:-->
			<tr class="BDJNormalText03">
			<td width="22%" align="left" style="padding-left:5px;">Gender</td>
			<td width="2%" align="center">:</td>
			<td width="76%" align="left">
			Male
			</td>
			</tr>
			<!--Marital Status:-->
			<tr class="BDJNormalText03">
			<td width="22%" align="left" style="padding-left:5px;">Marital  Status </td>
			<td width="2%" align="center">:</td>
			<td width="76%" align="left">
			Married
			</td>
			</tr>
			<!--Nationality:-->
			<tr class="BDJNormalText03">
			<td align="left" style="padding-left:5px;">Nationality</td>
			<td align="center">:</td>
			<td align="left">
			Bangladeshi
			</td>
			</tr>
            
			<!--Religion:-->
			
			<!--Permanent Address:-->
			
			<!--Current Location:-->
			<tr class="BDJNormalText03">
			<td align="left" style="padding-left:5px;">Current  Location</td>
			<td align="center">:</td>
			<td align="left">			
			Dhaka Division			
			</td>
			</tr>
		</tbody></table>
		</td>
		</tr>
	</tbody></table>
	
<!--
REFERENCE:
-->

<center>
<div id="divCopyRight" class="BDJCopyRight" style="border-top:1px solid #999999; width:595px;">
	
</div>
</center>

        </div>
         
	  </div>
    </div>
</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			</div>
		</div>
	</div>
@endsection


