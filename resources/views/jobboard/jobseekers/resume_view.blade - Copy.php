
@extends('layouts.master_job')
@section('content')
	<div class="main-container">
		<div class="container">
			<div class="row">

				<!-- Sidebar -->
				<div class="col-md-3 sidebar-left  hidden-xs">
				    @include('jobboard.common.seeker_panel')	                                   									  					 
			    </div>
			

				
				
				<div class="col-md-9 col-sm-12">

        <div class="panel">
           <div class="panel-heading panel-heading-01"><i class="glyphicon glyphicon-eye-open icon-padding"></i>View Resume</div>
           <div class="panel-body panel-body-02">

        
   		<div id="resume">	
        	
			<table border="0" cellpadding="0" cellspacing="0" align="center" width="700">
				<tbody>
					<tr>
						<td colspan="6">
							<table border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td width="73%" height="" align="left" valign="bottom" class="BDJApplicantsName">
										<!--Applicant's Name:-->
										{{$resume->first_name.' '.$resume->last_name}}
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
										
											 Address: <?php echo $resume->present_add ?> 		 
										<!--Home Phone:-->
										
											 <br>
											 Mobile No 1: <?php echo $resume->mobile ?>	 
										<!--Office Phone:-->
										
										<!--Mobile:-->
										
											 <br>		
											 e-mail : <?php echo $resume->email ?>
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

    <table border="0" cellpadding="0" cellspacing="0" align="center" width="700">	
		<tbody><tr>
			 <td colspan="6" style="border-bottom:1px solid #000000;">&nbsp;</td>
			 </tr>
			  
			 <tr><td colspan="6">&nbsp;</td></tr>		 
			 
			 <tr>
			 <td colspan="6" class="BDJHeadline01"><u>Career Objective:</u></td>
			 </tr>
			 
			 <tr>
			 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
			 <?php echo $resume->objective ?>	
			 </td>
			 </tr>		
		</tbody>
	</table>

<!--------------
CAREER SUMMARY :
---------------->

	<table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="700">	
		<tbody>
		    <tr>
			 <td colspan="6" class="BDJHeadline01"><u>Career Summary:</u></td>
			</tr>
		
			<tr>
			 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
			 <?php echo $resume->career_summery ?>
			 </td>
			</tr>
		</tbody>
	</table>	 

<!---------------------
SPECIAL QUALIFICATION :
----------------------->

	<table border="0" cellpadding="0" cellspacing="0" style="margin-top:3px;" align="center" width="700">	
		<tbody><tr>
			 <td colspan="6" class="BDJHeadline01"><u>Special Qualification:</u></td>
			 </tr>
		
			 <tr>
			 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
			 <?php echo $resume->special_qualification ?>
			 </td>
			 </tr>
		 </tbody>
	 </table>
	 	
<!-------------------------------------------
EMPLOYMENT HISTORY, TOTAL YEAR OF EXPERIENCE:
--------------------------------------------->
	
<!----------------------
'ACADEMIC QUALIFICATION:
------------------------>

	<table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="700">
	 	 <tbody><tr>
		 <td colspan="6" class="BDJHeadline01"><u>Academic Qualification:</u></td>
		 </tr>
	
		 <tr>
		 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
		 <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
		 	  <tbody>
			  <tr class="BDJNormalText02">
			  <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Exam Title</strong></td>
			  <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Concentration/Major</strong></td>
			  <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Institute</strong></td>
			  <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>Result</strong></td>
			  
			       <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>Pas.Year</strong></td> 				   
			  
			  
			       <td width="15%" align="center"><strong>Duration</strong></td>
			  
			  </tr>			 
		      <?php foreach($resume->academic as $key=>$row){ ?>
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
					
			    </tr>
			  <?php } ?>	
				
				</tbody>
				</table> 
		 </td>
		 </tr>
	    </tbody>
	</table>

<!--------
TRAINING:
--------->

<!--------------------------
PROFESSIONAL QUALIFICATION:
--------------------------->

	<table border="0" cellpadding="0" cellspacing="0" align="center" width="700" style="margin-top:3px;">
	 	<tbody><tr>
		 <td colspan="6" class="BDJHeadline01"><u>Professional Qualification:</u></td>
		 </tr>
	
		 <tr>
		 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
		 <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
			 <tbody>
				<tr class="BDJNormalText02">
					 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Certification</strong></td>
					 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Institute</strong></td>
					 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Location</strong></td>
					 <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>From</strong></td>
					 <td width="12.5%" align="center"><strong>To</strong></td>
				</tr>
			 	<?php foreach($resume->professional as $key=>$row){ ?>
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
				<?php } ?>
			 
		 </tbody></table>	
		 </td>
		 </tr>
	    </tbody>
	</table>
	
<!---------------------------------
CAREER AND APPLICATION INFORMATION:
----------------------------------->

	<table border="0" cellpadding="0" cellspacing="0" align="center" width="700" style="margin-top:3px;">
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
				 <?php echo $resume->job_level; ?>
				 </td>
				 </tr>
			
			<!--Available For:-->
			
			<!--Present Salary:-->
			
					  <tr class="BDJNormalText03">
					  <td width="32%" align="left" style="padding-left:5px;">Present Salary</td>
					  <td width="2%" align="center">:</td>
					  <td width="66%" align="left">Tk. <?php echo $resume->present_salary; ?></td>
					  </tr>
				 
			<!--Expected Salary:-->

					  <tr class="BDJNormalText03">
					  <td width="32%" align="left" style="padding-left:5px;">Expected Salary</td>
					  <td width="2%" align="center">:</td>
					  <td width="66%" align="left">Tk. <?php echo $resume->expected_salary; ?></td>
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
	    </tbody>
	</table>


<!--
Specialization:
-->

    <table border="0" cellpadding="0" cellspacing="0" align="center" width="700" style="margin-top:3px;">
	 	<tbody><tr>
		<td colspan="6" class="BDJHeadline01"><u>Specialization:</u></td>
		</tr>
		
		     <tr>
			 <td colspan="6" align="left" class="BDJNormalText01">
			 gfjghkhjl
			 </td>
			 </tr>			  
		
        </tbody>
    </table>

<!--
EXTRA CURRICULAR ACTIVITIES, LANGUAGE PROFICIENCY:
-->

	    <table border="0" cellpadding="0" cellspacing="0" align="center" width="700" style="margin-top:3px;">
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
	 	    </tbody>
		</table>
	 
<!--
Language Proficiency:
-->

<!--
PERSONAL DETAILS:
-->

	<table border="0" cellpadding="0" cellspacing="0" align="center" width="700" style="margin-top:3px;">
		<!--
		Personal Details
		-->
		<tbody><tr>
		<td colspan="6" class="BDJHeadline01"><u>Personal Details :</u></td>
		</tr>
	
		<tr>
		<td colspan="6" align="left" class="BDJNormalText01">
		<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
			<tbody>
			<tr class="BDJNormalText03">
				<td width="22%" align="left" style="padding-left:5px;">Date  of Birth</td>
				<td width="2%" align="center">:</td>
				<td width="76%" align="left">
				 <?php echo date('d-m-Y',strtotime($resume->dob)) ?>	 
				</td>
			</tr>
			<!--Gender:-->
			<tr class="BDJNormalText03">
			<td width="22%" align="left" style="padding-left:5px;">Gender</td>
			<td width="2%" align="center">:</td>
			<td width="76%" align="left">
			<?php echo ($resume->gender_id==1)?'Male':'Female' ?>	
			</td>
			</tr>
			<!--Marital Status:-->
			<tr class="BDJNormalText03">
			<td width="22%" align="left" style="padding-left:5px;">Marital  Status </td>
			<td width="2%" align="center">:</td>
			<td width="76%" align="left">
			<?php echo ($resume->mstatus==1)?'Married':(($resume->mstatus==2)?'Unmarried':'Single') ?>	
			</td>
			</tr>
			<!--Nationality:-->
			<tr class="BDJNormalText03">
			<td align="left" style="padding-left:5px;">Nationality</td>
			<td align="center">:</td>
			<td align="left">
			<?php echo $resume->nationality ?>	
			</td>
			</tr>
            
		
		</tbody></table>
		</td>
		</tr>
	    </tbody>
	</table>
	
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


