<html>
<head>
    <style>
                                       /*for pad*/
        @page{margin:0; }
        body{padding-bottom: 150px;padding-top: 100px;padding-left: 50px; padding-right: 50px}
        .footer p{  padding-left:20px;  }
                            /*for body*/
       body{  font-size: 16px;  }
       p.text-right{  text-align: right;  }
       table{  width: 100%;  }

    </style>
</head>
<body>


    <div class="main">
        <table class="">
            <tbody>
            <tr class="first">
                <td colspan="3">
                    {{ $basic_info->first_name.' '.$basic_info->last_name }}
                </td>
                <td colspan="3">
                    <img src="@php echo $_SERVER["DOCUMENT_ROOT"].'/images/'.$basic_info->photograph @endphp" width="100px" alt="...">
                </td>
            </tr>

            <tr class="first">
                <td colspan="6">
                    {{ $basic_info->present_add }}

                    <br />
                    Mobile No 1: {{ $basic_info->phone_h }}

                    <br />
                    e-mail : {{ $basic_info->email }}
                </td>
            </tr>


            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750">

                        <tr><td colspan="6">&nbsp;</td></tr>

                        <tr>
                            <td colspan="6" class="BDJHeadline01"><U>Career Objective:</U></td>
                        </tr>

                        <tr>
                            <td colspan="6" align="left" style="padding-left:5px;word-break: break-all;" class="BDJNormalText01">
                                {{ $basic_info->objective }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">


                        <table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">

                            <tr>
                                <td colspan="6" class="BDJHeadline01"><U>Employment History:</U></td>
                            </tr>

                            <tr>
                                <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                    <STRONG>Total Year of Experience :</STRONG> 0.0 Year(s)
                                </td>
                            </tr>
                            @foreach($exp_infos as $key=>$exp)

                            <tr>
                                <td width="22" align="center" style="padding-left:5px;" class="BDJNormalText01">{{ $key+1 }}.</td>
                                <td width="750" colspan="5" align="left" class="BDJBoldText01">
                                    <U>{{ $exp->designation }} ( April 5, 2019 -  April 5, 2019)</U>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" class="BDJHeadline02">&nbsp;</td>
                                <td colspan="5" align="left" class="BDJNormalText01">

                                    <STRONG>{{ $exp->company_name }}</STRONG>
                                    <br />

                                    Company Location : {{ $exp->company_location }}
                                    <br />

                                    Department: {{ $exp->department }}
                                    <br />

                                    <STRONG><I><U>Duties/Responsibilities:</U></I></STRONG>
                                    <br />
                                    {{ $exp->responsibilities }}
                                </td>
                            </tr>

                            @endforeach
                        </table>


                </td>
            </tr>


            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">
                        <tr>
                            <td colspan="6" class="BDJHeadline01"><U>Academic Qualification:</U></td>
                        </tr>

                        <tr>
                            <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666;word-break: break-all;">
                                    <tr class="BDJNormalText02">
                                        <td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Exam Title</STRONG></td>
                                        <td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Concentration/Major</STRONG></td>
                                        <td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Institute</STRONG></td>
                                        <td width="12.5%" align="center" style="border-right:1px solid #666666"><STRONG>Result</STRONG></td>

                                        <td width="12.5%" align="center" style="border-right:1px solid #666666"><STRONG>Pas.Year</STRONG></td>


                                        <td width="15%" align="center"><STRONG>Duration</STRONG></td>

                                    </tr>

                                    @foreach($aca_info as $aca)
                                        <tr class="BDJNormalText02">
                                            <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $aca->education_level }}
                                            </td>
                                            <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $aca->concentration }}
                                            </td>
                                            <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $aca->education_level }}
                                            </td>
                                            <td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                &nbsp;{{ $aca->instute_name }}
                                            </td>

                                            <td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
                                                &nbsp;{{ $aca->passing_year }}
                                            </td>

                                            <td width="15%" style="border-top:1px solid #666666" align="center">
                                                {{ $aca->duration }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                        <tbody><tr>
                            <td colspan="6" class="BDJHeadline01"><u>Training Summary:</u></td>
                        </tr>

                        <tr>
                            <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666; word-break: break-all;">
                                    <tbody><tr class="BDJNormalText02">
                                        <td width="19%" align="center" style="border-right:1px solid #666666"><strong>Training Title</strong></td>
                                        <td width="19%" align="center" style="border-right:1px solid #666666"><strong>Topic</strong></td>
                                        <td width="15%" align="center" style="border-right:1px solid #666666"><strong>Institute</strong></td>
                                        <td width="15%" align="center" style="border-right:1px solid #666666"><strong>Country</strong></td>
                                        <td width="15%" align="center" style="border-right:1px solid #666666"><strong>Location</strong></td>
                                        <td width="2%" align="center" style="border-right:1px solid #666666"><strong>Year</strong></td>
                                        <td width="15%" align="center"><strong>Duration</strong></td>
                                    </tr>

                                    @foreach($tr_info as $tr)

                                        <tr class="BDJNormalText02">
                                            <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $tr->training_title }}
                                                &nbsp;
                                            </td>
                                            <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666; padding-left:1px;">
                                                {{ $tr->topics_covered }}
                                                &nbsp;
                                            </td>
                                            <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $tr->institute }}
                                                &nbsp;
                                            </td>
                                            <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $tr->country }}
                                                &nbsp;
                                            </td>
                                            <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $tr->location }}
                                                &nbsp;
                                            </td>
                                            <td width="10%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $tr->training_year }}
                                                &nbsp;
                                            </td>
                                            <td width="15%" align="center" style="border-top:1px solid #666666;">
                                                {{ $tr->duration }}
                                                &nbsp;
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody></table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                        <tbody><tr>
                            <td colspan="6" class="BDJHeadline01"><u>Professional Qualification:</u></td>
                        </tr>

                        <tr>
                            <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666;word-break: break-all;">
                                    <tbody><tr class="BDJNormalText02">
                                        <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Certification</strong></td>
                                        <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Institute</strong></td>
                                        <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Location</strong></td>
                                        <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>From</strong></td>
                                        <td width="12.5%" align="center"><strong>To</strong></td>
                                    </tr>

                                    @foreach($pq_info as $pq)

                                        <tr class="BDJNormalText02">
                                            <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $pq->certification }}
                                                &nbsp;
                                            </td>
                                            <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $pq->institute }}
                                            </td>
                                            <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $pq->location }}
                                                &nbsp;
                                            </td>
                                            <td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                {{ $pq->start_date }}
                                                &nbsp;
                                            </td>
                                            <td width="12.5%" style="border-top:1px solid #666666;" align="center">
                                                {{ $pq->end_date }}
                                                &nbsp;
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody></table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                        <!--
                        Career and Application Information:
                        -->
                        <tr>
                            <td colspan="6" class="BDJHeadline01"><U>Career and Application Information:</U></td>
                        </tr>

                        <tr>
                            <td colspan="6" align="left" class="BDJNormalText01">
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                                    <!--Looking For:-->

                                    <tr class="BDJNormalText03">
                                        <td width="32%" align="left" style="padding-left:5px;">Looking For</td>
                                        <td width="2%" align="center">:</td>
                                        <td width="66%" align="left">
                                            {{ $basic_info->job_level }}
                                        </td>
                                    </tr>

                                    <!--Available For:-->

                                    <tr class="BDJNormalText03">
                                        <td width="32%" align="left" style="padding-left:5px;">Available  For</td>
                                        <td width="2%" align="center">:</td>
                                        <td width="66%" align="left">
                                            {{ $basic_info->job_nature }}
                                        </td>
                                    </tr>

                                    <!--Present Salary:-->

                                    <tr class="BDJNormalText03">
                                        <td width="32%" align="left" style="padding-left:5px;">Present Salary</td>
                                        <td width="2%" align="center">:</td>
                                        <td width="66%" align="left">Tk. {{ $basic_info->present_salary }}</td>
                                    </tr>

                                    <!--Expected Salary:-->

                                    <tr class="BDJNormalText03">
                                        <td width="32%" align="left" style="padding-left:5px;">Expected Salary</td>
                                        <td width="2%" align="center">:</td>
                                        <td width="66%" align="left">Tk. {{ $basic_info->expected_salary }}</td>
                                    </tr>

                                    <!--Preferred Organization Types:-->

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                        <tr>
                            <td colspan="6" class="BDJHeadline01"><U>Language Proficiency:</U></td>
                        </tr>

                        <tr>
                            <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="border:1px solid #666666">
                                    <tr class="BDJNormalText02">
                                        <td width="25%" align="center" style="border-right:1px solid #666666"><STRONG>Language</STRONG></td>
                                        <td width="25%" align="center" style="border-right:1px solid #666666"><STRONG>Reading</STRONG></td>
                                        <td width="25%" align="center" style="border-right:1px solid #666666"><STRONG>Writing</STRONG></td>
                                        <td width="25%" align="center"><STRONG>Speaking</STRONG></td>
                                    </tr>
                                    @foreach($lan_infos as $lan_info)

                                        <tr class="BDJNormalText02">
                                            <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">{{ $lan_info->language }}&nbsp;</td>
                                            <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">{{ $lan_info->reading }}&nbsp;</td>
                                            <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">{{ $lan_info->writing }}&nbsp;</td>
                                            <td width="25%" align="center" style="border-top:1px solid #666666;">{{ $lan_info->speaking }}&nbsp;</td>
                                        </tr>

                                    @endforeach

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                        <!--
                        Personal Details
                        -->
                        <tr>
                            <td colspan="6" class="BDJHeadline01"><U>Personal Details :</U></td>
                        </tr>

                        <tr>
                            <td colspan="6" align="left" class="BDJNormalText01">
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="word-break: break-all;">
                                    <!--Fathers Name:-->

                                    <tr class="BDJNormalText03">
                                        <td width="22%" align="left" style="padding-left:5px;">Father's Name </td>
                                        <td width="2%" align="center">:</td>
                                        <td width="76%" align="left">
                                            {{ $basic_info->father_name }}
                                        </td>
                                    </tr>

                                    <!--Mothers Name:-->

                                    <tr class="BDJNormalText03">
                                        <td width="22%" align="left" style="padding-left:5px;">Mother's Name </td>
                                        <td width="2%" align="center">:</td>
                                        <td width="76%" align="left">
                                            {{ $basic_info->mother_name }}
                                        </td>
                                    </tr>

                                    <!--Date of Birth:-->
                                    <tr class="BDJNormalText03">
                                        <td width="22%" align="left" style="padding-left:5px;">Date  of Birth</td>
                                        <td width="2%" align="center">:</td>
                                        <td width="76%" align="left">
                                            {{ $basic_info->dob }}
                                        </td>
                                    </tr>
                                    <!--Gender:-->
                                    <tr class="BDJNormalText03">
                                        <td width="22%" align="left" style="padding-left:5px;">Gender</td>
                                        <td width="2%" align="center">:</td>
                                        <td width="76%" align="left">
                                            {{ $basic_info->gender }}
                                        </td>
                                    </tr>
                                    <!--Marital Status:-->
                                    <tr class="BDJNormalText03">
                                        <td width="22%" align="left" style="padding-left:5px;">Marital  Status </td>
                                        <td width="2%" align="center">:</td>
                                        <td width="76%" align="left">
                                            {{ $basic_info->mstatus }}
                                        </td>
                                    </tr>
                                    <!--Nationality:-->
                                    <tr class="BDJNormalText03">
                                        <td align="left" style="padding-left:5px;">Nationality</td>
                                        <td align="center">:</td>
                                        <td align="left">
                                            {{ $basic_info->nationality }}
                                        </td>
                                    </tr>

                                    <!--Religion:-->

                                    <tr class="BDJNormalText03">
                                        <td align="left" style="padding-left:5px;">Religion</td>
                                        <td align="center">:</td>
                                        <td align="left">
                                            {{ $basic_info->religion }}
                                        </td>
                                    </tr>

                                    <!--Permanent Address:-->

                                    <tr class="BDJNormalText03">
                                        <td align="left" style="padding-left:5px;">Permanent  Address</td>
                                        <td align="center">:</td>
                                        <td align="left">
                                            {{ $basic_info->permanent_add }}
                                        </td>
                                    </tr>

                                    <!--Current Location:-->
                                    <tr class="BDJNormalText03">
                                        <td align="left" style="padding-left:5px;">Current  Location</td>
                                        <td align="center">:</td>
                                        <td align="left">
                                            {{ $basic_info->present_add }}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                        <!--
                        Reference:
                        -->
                        <tr>
                            <td colspan="6" class="BDJHeadline01"><U>Reference (s):</U></td>
                        </tr>
                        @foreach($ref_infos as $ref_info)
                            <tr>
                                <td colspan="6" align="left" class="BDJNormalText01">
                                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="word-break: break-all;">

                                        <!--Name:-->

                                        <tr class="BDJNormalText03">

                                            <td width="22%" align="left" style="padding-left:5px;">Name </td>
                                            <td width="2%" align="center">:</td>
                                            <td width="35%" align="left" >
                                                {{ $ref_info->name }}
                                                &nbsp;
                                            </td>

                                            <td width="41%" align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>

                                        <!--Organization:-->

                                        <tr class="BDJNormalText03">

                                            <td width="22%" align="left" style="padding-left:5px;">Organization</td>
                                            <td width="2%" align="center">:</td>
                                            <td width="35%" align="left" >
                                                {{ $ref_info->organization }}
                                                &nbsp;
                                            </td>

                                            <td width="41%" align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>

                                        <!--Designation:-->

                                        <tr class="BDJNormalText03">

                                            <td width="22%" align="left" style="padding-left:5px;">Designation</td>
                                            <td width="2%" align="center">:</td>
                                            <td width="35%" align="left" >
                                                {{ $ref_info->designation }}
                                                &nbsp;
                                            </td>

                                            <td width="41%" align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>

                                        <!--Address:-->

                                        <tr class="BDJNormalText03">

                                            <td width="22%" align="left" style="padding-left:5px;">Address</td>
                                            <td width="2%" align="center">:</td>
                                            <td width="35%" align="left" >
                                                {{ $ref_info->address }}
                                                &nbsp;
                                            </td>

                                            <td width="41%" align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>

                                        <!--Phone(Off):-->

                                        <!--Phone(Res):-->

                                        <tr class="BDJNormalText03">

                                            <td align="left" style="padding-left:5px;">Phone (Res.) </td>
                                            <td align="center">:</td>
                                            <td align="left" >
                                                {{ $ref_info->phone_res }}
                                                &nbsp;
                                            </td>

                                            <td align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>

                                        <!--Mobile:-->

                                        <tr class="BDJNormalText03">

                                            <td align="left" style="padding-left:5px;">Mobile</td>
                                            <td align="center">:</td>
                                            <td align="left" >
                                                {{ $ref_info->mobile }}
                                                &nbsp;
                                            </td>

                                            <td align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>

                                        <!--E-Mail:-->

                                        <tr class="BDJNormalText03">

                                            <td align="left" style="padding-left:5px;">E-Mail</td>
                                            <td align="center">:</td>
                                            <td align="left" >
                                                {{ $ref_info->email }}
                                                &nbsp;
                                            </td>

                                            <td align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>

                                        <!--Relation:-->

                                        <tr class="BDJNormalText03">

                                            <td align="left" style="padding-left:5px;">Relation</td>
                                            <td align="center">:</td>
                                            <td align="left" >
                                                {{ $ref_info->relation }}
                                                &nbsp;
                                            </td>

                                            <td align="left" style="padding-left: 10px;">

                                            </td>

                                        </tr>


                                        <tr class="BDJNormalText03">
                                            <td align="left">&nbsp;</td>
                                            <td align="center">&nbsp;</td>
                                            <td colspan="2" align="left">
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </td>
            </tr>





            </tbody>
        </table>
    </div>
</body>


