@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li>{{ $page->title }}</li>
            </ul>

            <div class="row margin-bottom-40">
                <div class="col-md-9 col-sm-9">
                    {!! $page->description !!}
                </div>
            </div>
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                @foreach($video as $single)
                <div class="col-md-4 col-sm-4">



                        @php $youtube = explode('=',$single->video_link) @endphp
                        <div class="owl-item"><div class="recent-work-item">
                                <iframe width="100%" height="250px"  src="https://www.youtube.com/embed/{{ end($youtube)  }}"></iframe>
                                <a class="recent-work-description" href="javascript:;">
                                    <strong>{{ $single->title }}</strong>
                                </a>
                            </div>
                        </div>




                </div>
                @endforeach
            </div>


            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                        <h3 class="color_dark fw_light t_align_c m_bottom_12">Join Us on Facebook</h3>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https:///www.facebook.com/engineersbdlimited%2F&tabs&width=350&height=320&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=387757051319026" width="350" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
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