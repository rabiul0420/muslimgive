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
                    <li>Home</li><li>Edit Charity Profile</li>
                </ol>
        </div>

        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Add Charity Profile
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
                                <h2>Add Charity Profile </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                        {!! Form::open(['action'=>'Admin\CharityCommunicationLogsController@store','files'=>true,'class'=>'form-horizontal']) !!}
                                        <div class="row">
                                            <div class="col-md-8">

                                                <div class="form-group">
                                                    <label class="col-md-3">Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" required name="title">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3">Communication Type</label>
                                                    <div class="col-md-9">
                                                        {!! Form::select('communication_type', ['Email' => 'Email','Phone Call' => 'Phone Call','Meeting' => 'Meeting'], old('target'),['class'=>'form-control']) !!}<i></i>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-3">Date</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group date">
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            <input type="text" name="communication_date" class="form-control pull-right" id="datepicker" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="form-group">
                                                    <p class="col-md-3">Details</p>
                                                    <div class="col-md-9">
                                                        <textarea  rows="5" name="details" class="custom-scroll form-control"></textarea>
                                                    </div>
                                                </div>



                                            </div>



                                        </div>



                                    <footer>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-default" onclick="window.history.back();">Back</button>
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
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-m-d'
            })
        })
    </script>
@endsection

