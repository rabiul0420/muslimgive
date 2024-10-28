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
                    <li>Home</li><li>Add Hajji</li>
                </ol>
        </div>

        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Add Hajji
                    </h1>
                </div>
            </div>

            @if(Session::has('message'))
                <div class="allert-message alert-success-message pgray  alert-lg" role="alert">
                    <p class=""> {{ Session::get('message') }}</p>
                </div>
            @endif


            <!-- widget grid -->
            <section id="widget-grid" class="">



                    <article class="">
                        <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                            <header>
                                <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                                <h2>Add Hajji </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                        {!! Form::open(['action'=>'Admin\HajjSetupController@store','files'=>true]) !!}
                                        <div class="row">
                                            <div class="col-md-8">

                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" value="{{old('title')}}" class="form-control" required name="title">
                                                </div>

                                                <div class="form-group">
                                                    <label>Hajj Date</label>
                                                        <div class="input-group">
                                                            <input type="text" value="{{old('hajj_date')}}"  placeholder="Select a date" name="hajj_date" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Last Date of Passport</label>
                                                        <div class="input-group">
                                                            <input type="text" value="{{old('last_date_passport')}}"  placeholder="Select a date" name="last_date_passport" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                </div>




                                                <div class="form-group">
                                                    <label>Status</label>
                                                    {!! Form::select('status', ['Active' => 'Active','InActive' => 'InActive'], old('status'),['class'=>'form-control']) !!}<i></i>
                                                </div>


                                            </div>

                                        </div>

                                        <footer>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{ url('admin/hajj-setup') }}" class="btn btn-default">Back</a>
                                        </footer>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
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