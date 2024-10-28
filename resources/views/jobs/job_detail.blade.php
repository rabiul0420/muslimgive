@extends('layouts.app')
@section('content')
    <div class="clearfix">&nbsp;
    </div>
    <div class="clearfix">&nbsp;
    </div>
    <div class="main job_section">
        <div class="container job-preview">
            <div class="row margin-bottom-20">
                <div class="col-xs-12 col-md-12 text-center">
                    <p style="margin-left: 0 !important; padding-left: 0 !important; margin-bottom: 5px; color: #a94442; font-size: 20px">
                        Please read befor applying this job...</p>
                    <p style="margin-left: 0 !important; padding-left: 0 !important; margin-bottom: 5px; font-size: 16px">
                        Write your content in here...</p>
                </div>
            </div>
            <div class="row margin-bottom-40">
                <div class="col-xs-12 col-md-4">
                    <div class="right_job job-summary">
                        <div class="panel panel-default">
                            <div class="panel-heading">Information Summary</div>
                            <div class="panel-body">
                                <p><strong>Application
                                        Deadline:</strong>&nbsp;{{ date('d M, Y',strtotime($job->application_deadline)) }}
                                </p>

                                <p><strong>Salary:</strong>&nbsp;{{ $job->salary }} </p>

                                <p><strong>Job Type:</strong>&nbsp;Full Time</p>

                                <p><strong>Total Required:</strong>&nbsp;{{ $job->vacancy }} </p>

                                <p><strong>Gender:</strong>&nbsp;{{ $job->gender }} </p>

                                <p><strong>Age:</strong>&nbsp;{{ $job->age }} </p>

                                <p style="line-height: 24px;"><strong>Job
                                        Location:</strong>&nbsp;{{ $job->job_location }} </p>

                                <p><strong>Published
                                        Date:</strong>&nbsp;{{ date('d M, Y',strtotime($job->published_date)) }}</p>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">Company Information</div>
                            <div class="panel-body">
                                <p><strong>Company Name </strong>&nbsp;Community Development Centre-CODEC</p>

                                <p><strong>Address:</strong>&nbsp;Plot-02, Road-02, Lake Valley R/A, Hazi Jafor Ali
                                    Road, Foy's Lake, Khulshi, Chattogram, Bangladesh. </p>

                                <p><strong>Web:</strong>&nbsp;www.rabiul.com</p>

                                <p><strong>Business:</strong>&nbsp;CODEC is a National NGO working with the
                                    disadvantage coastal and fisherflok communities for their socio-cultural and
                                    economic development. </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content1 col-xs-12 col-md-8">
                    <div class="left_job">

                        <h2>{{ $job->designation }}</h2>

                        <h4>Job Responsibilities </h4>
                        {!! $job->responsibilities !!}

                        <h4>Educational Requirements</h4>
                        {!! $job->educational_qualification !!}

                        <h4>Job Experience</h4>
                        {!! $job->job_experience !!}

                        <h4>Additional Requirements</h4>
                        {!! $job->additional_requirements !!}

                        <h4>Total Required</h4>
                        <ul>
                            <li>{{ $job->vacancy }}</li>
                        </ul>


                        <h4>Salary Per Month</h4>
                        <ul>
                            <li>{{ $job->salary }}</li>
                        </ul>

                        <h4>Additional Benefits</h4>
                        {!! $job->additional_benefits	 !!}

                        <h4>Application Procedure</h4>
                        <ul>
                            <li>{{ $job->application_procedure }}</li>
                        </ul>

                        <h4>Company </h4>
                        <ul>
                            <li>{{ $job->company }}</li>
                        </ul>


                        <h4>Job Location</h4>
                        <ul>
                            <li>{{ $job->job_location }}</li>
                        </ul>

                        <h4>Application Deadline</h4>
                        <ul>
                            <li>{{ date('d M, Y',strtotime($job->application_deadline)) }}</li>
                        </ul>

                    </div>
                    <p class="text-center"><a style="padding: 10px 15px; color: #fff; background: #e31818;" href="#">Appliy Online</a></p>
                </div>

            </div>

        </div>
    </div>
@endsection @section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            })
    </script>
@endsection
