@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row padding-top-40">
            <div class="col-sm-12">
                <h2>Category: {{ $category }}</h2>
            </div>
        </div>


                            <div class="row padding-bottom-40">
                                <div class="col-md-8">
                                    @foreach($jobs as $job)
                                        <div class="norm-jobs-wrapper">
                                            <a href="{{ url('job-detail/'.$job->id) }}">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h4>{{ $job->designation }}</h4>
                                                    <ul>
                                                        <li><strong>Company:</strong> {{ $job->company }}</li>
                                                        <li>
                                                            <strong>Education:</strong> {{ substr(strip_tags($job->educational_qualification),0,50).((strlen(strip_tags($job->educational_qualification))>30)?'...':'') }}
                                                        </li>
                                                        <li>
                                                            <strong>Experience:</strong> {{ substr(strip_tags($job->job_experience),0,50).((strlen(strip_tags($job->job_experience))>30)?'...':'')  }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li><strong>Job Location:</strong> {{ $job->job_location }}</li>
                                                        <li><strong>Application
                                                                Deadline: </strong>{{ date('d M, Y',strtotime($job->application_deadline)) }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>

                    </div>

                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script type="text/javascript">

        $(document).ready(function () {

        })

    </script>

@endsection