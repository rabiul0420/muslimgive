@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li>Service</li>
            </ul>

            <div class="row margin-bottom-40">
                <div class="col-md-9 col-sm-9">
                    {{ $type->title }}
                </div>
            </div>
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12 package">

                    <div class="row recent-work margin-bottom-40">

                        <div class="col-md-12">
                            <div class="owl-carousel owl-carousel3 owl-theme owl-loaded">



                                <div class="owl-stage-outer">

                                    @foreach($service as $single)
                                        <div class="owl-item" style="width: 280px; margin-right: 0px;"><div class="recent-work-item">
                                                <em>
                                                    <img src="{{url($single->logo)}}" alt="Amazing Project" class="img-responsive">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="{{url($single->logo)}}" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                                </em>
                                                <a class="recent-work-description" href="javascript:;">
                                                    <strong>{{ $single->title }}</strong>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript">

        $(document).ready(function() {

        })

    </script>

@endsection