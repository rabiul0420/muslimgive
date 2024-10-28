<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ settings('site_title',$settings) }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ settings('site_favicon',$settings) }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-">
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
          rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
             {{--menu css--}}
    <link rel="stylesheet" href="{{ asset('assets/corporate/css/2.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/corporate/css/4.css') }}" media="all"/>

    <link href="{{ asset('assets/pages/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pages/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pages/css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/themes/blue.css') }}" rel="stylesheet" id="style-color">
    <link href="{{ asset('assets/corporate/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body class="corporate ds-ui-kit-scope route--entity-view ds-theme-solidworks">


<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
    <header role="banner">

        <div class="ds-g-menu">
            <div class="pre-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <ul class="social-footer social-icons-hesder list-unstyled list-inline">
                                @if(settings('facebook',$settings))
                                    <li><a target="_blank" href="{{ settings('facebook',$settings) }}"><i
                                                    class="fa fa-facebook"></i></a></li>
                                @endif
                                @if(settings('facebook',$settings))
                                    <li><a target="_blank" href="{{ settings('google_plus',$settings) }}"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                @endif
                                @if(settings('facebook',$settings))
                                    <li><a target="_blank" href="{{ settings('twitter',$settings) }}"><i
                                                    class="fa fa-twitter"></i></a>
                                    </li>
                                @endif
                                @if(settings('facebook',$settings))
                                    <li><a target="_blank" href="{{ settings('youtube',$settings) }}"><i
                                                    class="fa fa-youtube"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-lg" type="button">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 additional-nav">
                            <ul class="list-unstyled list-inline my-account">
                                @if(Auth::check())
                                    <li><a href="{{ url('myprofile') }}">My Profile</a></li>
                                    <li>
                           <span><a href="#" title="Sign Out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                               <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                               </form>
                           </span>
                                    </li>
                                @else
                                    <li><a href="{{ url('login') }}">Log In</a></li>
                                    <li><a href="{{ url('registration') }}">Registration</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-8 col-xs-6 pull-left text-left">
                        <ul class="social-footer list-unstyled list-inline">
                            @if(settings('facebook',$settings))
                                <li><a target="_blank" href="{{ settings('facebook',$settings) }}"><i
                                                class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(settings('facebook',$settings))
                                <li><a target="_blank" href="{{ settings('google_plus',$settings) }}"><i
                                                class="fa fa-google-plus"></i></a></li>
                            @endif
                            @if(settings('facebook',$settings))
                                <li><a target="_blank" href="{{ settings('twitter',$settings) }}"><i
                                                class="fa fa-twitter"></i></a>
                                </li>
                            @endif
                            @if(settings('facebook',$settings))
                                <li><a target="_blank" href="{{ settings('youtube',$settings) }}"><i
                                                class="fa fa-youtube"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 col-md-offset-2">
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..."/>
                                <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-8 col-xs-6">
                            <ul class="nav navbar-nav pull-right">
                                <li><a href="{{ url('register') }}">Sign Up</a></li>
                            </ul>
                    </div>
                </div>
            </div>--}}
        </div>
        <div id="block-localmenu"
             class="block block-block-content block-block-contented7e55a5-7c70-494d-a4bb-10ce0f09c71e">
            <div data-more-label="More..." class="ds-menu">
                <div class="ds-menu__wrapper">
                    <ul class="ds-menu__container">
                        <li class="ds-menu__top">
                            <div class="ds-menu__title">
                                <i class=" fa fa-angle-down"></i>


                                <div class="pull-left">
                                    <a href="{{ url('/') }}">
                                        <img width="60" height="" src="{{ settings('site_logo', $settings) }}"
                                             alt="Solidworks" typeof="foaf:Image"/>
                                    </a>
                                </div>
                                <div class="pull-left">
                                    <a href="{{ url('/') }}">
                                        <span>Engineers Limited</span> <br>
                                        <span style="font-size: 10px">{{ settings('site_slogan', $settings) }}</span>
                                    </a>
                                </div>


                            </div>
                        </li>
                        <li class="ds-menu__links">
                            <ul>
                                {!! $main_menu !!}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>


@yield('content')

<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h2>About us</h2>
                <p style="margin-bottom: 10px">{{ $about_us->short_description }}</p>
                <a href="{{ url('about-us') }}" alt="">Read More</a>
            </div>
            <!-- END BOTTOM ABOUT BLOCK -->

            <!-- BEGIN BOTTOM CONTACTS -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h2>Our Contacts</h2>
                <address class="margin-bottom-40">
                    {{ settings('site_address',$settings) }}<br>
                    Email: <a
                            href="mailto:{{ settings('site_email',$settings) }}">{{ settings('site_email',$settings) }}</a><br>
                </address>
            </div>
            <!-- END BOTTOM CONTACTS -->

            <!-- BEGIN TWITTER BLOCK -->

            <!-- END TWITTER BLOCK -->
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer last-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 padding-top-10">
                <span style="color:#ffffff">{{ date('Y') }} © {{ settings('site_title',$settings) }}. ALL Rights Reserved. <a
                            href="javascript:;">Privacy
                    Policy</a> | <a href="javascript:;">Terms of Service</a>
                </span>
            </div>

            <div class="col-md-4 col-sm-4">
                <ul class="social-footer social-icons-hesder list-unstyled list-inline pull-right">
                    @if(settings('facebook',$settings))
                        <li><a target="_blank" href="{{ settings('facebook',$settings) }}"><i
                                        class="fa fa-facebook"></i></a></li>
                    @endif
                    @if(settings('facebook',$settings))
                        <li><a target="_blank" href="{{ settings('google_plus',$settings) }}"><i
                                        class="fa fa-google-plus"></i></a></li>
                    @endif
                    @if(settings('facebook',$settings))
                        <li><a target="_blank" href="{{ settings('twitter',$settings) }}"><i class="fa fa-twitter"></i></a>
                        </li>
                    @endif
                    @if(settings('facebook',$settings))
                        <li><a target="_blank" href="{{ settings('youtube',$settings) }}"><i class="fa fa-youtube"></i></a>
                        </li>
                    @endif
                </ul>
            </div>


        </div>
    </div>
</div>

<script src="{{ asset('assets/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
       {{--manu js--}}
<script src="{{ asset('assets/corporate/scripts/jq.js') }}"></script>
<script src="{{ asset('assets/corporate/scripts/1.js') }}"></script>
<script src="{{ asset('assets/corporate/scripts/2.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location.href;
        $('nav a').each(function () {
            if (this.href == url) {
                $(this).parent().addClass("active");
                $(this).parent().parent().parent().attr("class", "active");
            }
        })
    })
</script>

@yield('js')

</body>
</html>