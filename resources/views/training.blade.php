@extends('layouts.app')

@section('content')
    <!-- BEGIN SLIDER -->
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Training</li>
            </ul>
            <div class="row margin-bottom-40">
                <div class="col-md-12 col-sm-12">
                    <div class="content-page">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <ul class="tabbable faq-tabbable">
                                    @foreach($trainings as $row)
                                    <li class="@php echo ('training/'.Request::segment(2)==$row->link)?'active':'' @endphp"><a href="{{ url($row->link) }}">{{ $row->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="tab-content" style="padding:0; background: #fff;">
                                    <!-- START TAB 1 -->
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="panel-group" id="accordion1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">{{ $training->title }}</h4>
                                                </div>
                                                <div class="panel-collapse">
                                                    <div class="panel-body">
                                                        <table class="table table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <th>Course Name</th>
                                                                <td>{{ $training->title }}</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Courde Fee</th>
                                                                <td>{{ $training->course_fee }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Starting Date</th>
                                                                <td>{{ $training->starting_date }}</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Duration</th>
                                                                <td>{{ $training->duration }}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <h3>Course Materials</h3>
                                                        {!! $training->course_materials !!}

                                                        <a href="#" data-toggle="modal" style="color:#ffffff" data-target="#vd2" class="ic-btn btn btn-success animated fadeInUpShort">Apply Now</a>
                                                        <!-- Modal -->
                                                        <div class="ic-modal modal fade animatedParent animateOnce" id="vd2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="vdTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header animated fadeInUpShort">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true"><i class="icofont-close"></i>Close</span>
                                                                        </button>
                                                                        <h5>Application Form</h5>
                                                                    </div>
                                                                    <div class="modal-body vendor-message">
                                                                        <form action="#">
                                                                            <div class="form-group">
                                                                                <input class="animated fadeInUpShort form-control" name="name" required type="text" placeholder="Name">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <input class="animated fadeInUpShort form-control" required name="phone" type="text" placeholder="Phone">
                                                                            </div>

                                                                            <input type="hidden" name="training_id" value="{{ $training->id }}">

                                                                            <div class="form-group">
                                                                            <input class="animated fadeInUpShort form-control" name="email" type="email" placeholder="Email">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input class="animated fadeInUpShort form-control" required name="branch" type="text" placeholder="Branch Name">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input class="animated fadeInUpShort form-control"  name="institute" type="text" placeholder="Institute Name">
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <textarea class="animated fadeInUpShort form-control"  name="comments" cols="30" rows="5" placeholder="Write your message"></textarea>
                                                                            </div>
                                                                            <button class="ic-btn animated fadeInUpShort">Submit</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>

@endsection

@section('js')




    <script type="text/javascript">

        $(document).ready(function() {
            // bind submit handler to form
            $('form').on('submit', function(e) {
                e.preventDefault(); // prevent native submit

                var form = $(this);
                var formdata = false;
                if (window.FormData){
                    formdata = new FormData(form[0]);
                }

                var formAction = form.attr('action');

                $(".tap2").show();
                $(".tap1").show();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/application-submit',
                    type: 'POST',
                    data        : formdata,
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success     : function(data, textStatus, jqXHR){
                        $(".tap2").hide();
                        $(".tap1").hide();
                        $('.vendor-message').html('Thanks for Applocation The Course');
                        location.reload();
                    }
                });

            });

        })

    </script>



@endsection