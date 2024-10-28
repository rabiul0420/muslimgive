@extends('admin.layouts.app')

@section('content')

    <div id="main" role="main">
        <div id="ribbon">
				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>
            <ol class="breadcrumb">
                <li>Home</li><li>Student Detail</li>
            </ol>
        </div>

        <div id="content">



            @if(Session::has('message'))
                <div class="allert-message alert-success-message pgray  alert-lg" role="alert">
                    <p class=""> {{ Session::get('message') }}</p>
                </div>
            @endif


        <!-- widget grid -->
            <section id="widget-grid" class="">

                <article class="sortable-grid ui-sortable">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-10" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" role="widget">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Student Detail</h2>
                        </header>

                        <!-- widget div-->
                        <div role="content">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <div class="panel-group smart-accordion-default" id="accordion-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1" aria-expanded="true" class=""> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Basic Information </a></h4>
                                        </div>
                                        <div id="collapseOne-1" class="panel-collapse collapse in" aria-expanded="true" style="">
                                            <table class="table table-hover">
                                                <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>{{ $user->title.' '.$user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Mother Name</th>
                                                    <td>{{ $user->mother_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Father Name</th>
                                                    <td>{{ $user->father_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <td>{{ ($user->dob !='0000-00-00')?$user->dob:'' }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Image</th>
                                                    <td><a target="_blank" href="{{ Storage::url($user->national_id_photo) }}"><img src="{{ Storage::url($user->national_id_photo) }}" height="50" alt=""></a></td>
                                                </tr>


                                                <tr>
                                                    <th>Division</th>
                                                    <td>{{ $add['division'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th>District</th>
                                                    <td>{{ $add['district'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Upazilla</th>
                                                    <td>{{ $add['upazila'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Villege</th>
                                                    <td>{{ $user->per_villlege }}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" class="collapsed" aria-expanded="false"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Contact Information</a></h4>
                                        </div>
                                        <div id="collapseTwo-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <table class="table table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <th>Mobile No</th>
                                                        <td>{{ $user->phone or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Home No</th>
                                                        <td>{{ $user->home_phone or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>{{ $user->email or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Reference</th>
                                                        <td>{{ $user->reference or '' }}</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed" aria-expanded="false"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Educational Information </a></h4>
                                        </div>
                                        <div id="collapseThree-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <table class="table table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <th>University/Institute Name</th>
                                                        <td>{{ $educational_info->institute_name or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Office Contact Number</th>
                                                        <td>{{ $educational_info->officer_contact_number or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td>{{ $educational_info->address or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Class/Year</th>
                                                        <td>{{ $educational_info->class_year or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Branch Name</th>
                                                        <td>{{ $educational_info->branch_name or '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Course Title</th>
                                                        <td>{{ $educational_info->course_title or '' }}</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>







                                </div>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>



            </section>



        </div>


    </div>
@endsection

@section('js')

    <script src="{{ asset('js/libs/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function() {


            $(function () {

                $(".datepicker").datepicker({
                    changeMonth: true,
                    numberOfMonths: 1,
                    prevText: '<i class="fa fa-chevron-left"></i>',
                    nextText: '<i class="fa fa-chevron-right"></i>',
                    dateFormat: 'yy-mm-dd',
                });

            })
        })

    </script>

@endsection




