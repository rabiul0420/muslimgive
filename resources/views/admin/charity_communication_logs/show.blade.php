@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>User Profile<small>User Profile</small></h1>
        </section>
        <section class="content">
            <div class="row">

                <div class="col-xs-9">
                    <div class="box">
                        @if(Session::has('message'))
                            <div class="allert-message alert-success-message pgray  alert-lg" role="alert">
                                <p> {{ Session::get('message') }}</p>
                            </div>
                        @endif
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name: {{ $charity_communication_logs->name }}</label>
                            </div>
                            <div class="form-group">
                                <label for="email">Email: {{ $charity_communication_logs->email }}</label>
                            </div>

                            <div class="form-group">
                                <label for="name">Phone: {{ $charity_communication_logs->phone }}</label>
                            </div>

                            <div class="form-group">
                                <label>User Status : @php echo ($charity_communication_logs->status==0)?'InActive':(($charity_communication_logs->status==1)?'Pending':'Active') @endphp</label>
                            </div>
                            <div class="form-group">
                                <label>Role : {{$charity_communication_logs->role_title}}</label>
                            </div>
                            @if($charity_communication_logs->designation_title)
                            <div class="form-group">
                                <label>Designation : {{$charity_communication_logs->designation}}</label>
                            </div>
                            @endif

                            <a class="btn btn-primary" href="{{ action('CharityCommunicationLogsController@edit',['id'=>Auth::id(),'profile'=>Auth::user()->name]) }}"> Profile Update</a>
                            @if($charity_communication_logs->role_id==6)
                               <a class="btn btn-primary" href="{{ url('more-info/'.Auth::id()) }}"> More Info</a>
                            @endif



                        </div>
                        <!-- /.box-body -->

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Profile Image</h3>
                        </div>
                        <div class="box-body text-center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="@if($charity_communication_logs->profile_image != ''){{ asset($charity_communication_logs->profile_image) }} @else{{ 'http://placehold.it/200x200' }} @endif" width="100%" alt="...">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')

    <!-- Morris.js charts -->
    <script src="{{ asset('js/raphael.min.js') }}"></script>
    <script src="{{ asset('js/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('js/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('js/demo.js') }}"></script>

    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replaceClass='editor';
    </script>
    <script>
        $('#addPage').click(function () {
            var recentCounter = $('.eachSocialIconGroup').length;
            var data='<div class="form-group eachSocialIconGroup ic_clear ic_padding_top">\n' +
                '\n' +
                '                                <div class="col-sm-3 ic_padding_left_null">\n' +
                '                                    <input name="social_media['+recentCounter+'][name]" class="form-control input-sm" placeholder="Social Media" type="text">\n' +
                '                                </div>\n' +
                '                                <div class="col-sm-4">\n' + '<input name="social_media['+recentCounter+'][url]" class="form-control input-sm" placeholder="URL" type="text">\n'+
                '                                </div>\n' +
                '                                <div class="col-sm-3">\n' + '<input name="social_media['+recentCounter+'][icon]" class="form-control input-sm" placeholder="Font Awesome Icon" type="text">\n'+
                '                                </div>\n' +
                '                                <div class="col-sm-2">\n' +
                // '                                    <button type="button" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i></button>&nbsp\n' +
                '                                    <button type="button" class="btn btn-xs btn-danger" onclick="if (confirm(\'Are You Sure ?\')){ $(this).parent().parent().remove();}"><i class="fa fa-trash-o"></i></button>\n' +
                '                                </div>\n' +
                '                            </div>';
            $('.SocialIconGroup').append(data);
        });

    </script>

@endsection