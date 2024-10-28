<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ settings('site_title', $settings) }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href="{{ settings('site_favicon', $settings) }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production-plugins.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-skins.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-rtl.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/demo.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header id="header">
        <div id="logo-group">
            <span id="logo"> <a href="{{url('admin')}}" title="Dashboard"><img src="{{ settings('site_logo', $settings) }}"  width="100" alt="SmartAdmin"></a> </span>
        </div>

        <div class="pull-right">

            <div id="hide-menu" class="btn-header pull-right">
                <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fas fa-bars"></i></a> </span>
            </div>

            <div id="logout" class="btn-header transparent pull-right">
                <span><a href="#" title="Sign Out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>
                    <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </span>
            </div>

            <div id="fullscreen" class="btn-header transparent pull-right">
                <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
            </div>

            <div class="pull-right website">
                <ul>
                    <li><a target="_blank" href="{{url('/')}}">View The Website</a></li>
                </ul>
            </div>

        </div>
    </header>

    <aside id="left-panel">
        <div class="login-info">
            <span>
                <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                    <img src="@if(Auth::user()->profile_image != ''){{ asset(Auth::user()->profile_image) }} @else{{ 'http://placehold.it/200x200' }} @endif" alt="me" class="online" />
                    <span>
                        {{Auth::user()->name}}
                    </span>
                </a>
            </span>
        </div>


        <nav>
            <ul>
                <li class="@php echo (Request::segment(1)=='' || Request::segment(1)=='home' )?'active':'' @endphp">
                    <a href="{{url('admin')}}" title="Dashboard"><i class="fas fa-tachometer-alt"></i><span class="menu-item-parent">Dashboard</span></a>
                </li>
                <li class="@php echo (Request::segment(2)=='profile')?'active':'' @endphp">
                    <a href="{{url('admin/profile/'.Auth::id())}}" title="Profile"><i class="fa fa-user"></i> <span class="menu-item-parent">My Profile</span></a>
                </li>

                @can('Administrator')
                <li class="@php echo (Request::segment(2)=='users')?'active':''  @endphp">
                    <a href="#"><i class="fa fa-lock"></i> <span class="menu-item-parent">Administrator</span></a>
                    <ul>
                        @can('User List')
                        <li class="@php echo (Request::segment(2)=='users')?'active':''  @endphp">
                            <a  href="{{ url('admin/users') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Users</span></a>
                        </li>
                        @endcan
                        @can('Roles Manager')
                        <li class="@php echo (Request::segment(2)=='roles')?'active':''  @endphp">
                            <a  href="{{ url('admin/roles') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Roles</span></a>
                        </li>
                        @endcan
                        @can('Permissions Manager')
                        {{--<li class="@php echo (Request::segment(2)=='permissions')?'active':''  @endphp">
                            <a  href="{{ url('admin/permissions') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Permissions</span></a>
                        </li>--}}
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('Menu Manager')
                <li class="@php echo (Request::segment(1)=='menus')?'active':''  @endphp">
                    <a href="#"><i class="fa fa-bars"></i> <span class="menu-item-parent">Menu</span></a>
                    <ul>
                        <li class="@php echo (Request::segment(2)=='menus' && Request::segment(3)=='')?'active':''  @endphp">
                            <a  href="{{ url('admin/menus') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Menu List</span></a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='menus' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a  href="{{ action('Admin\MenuController@create') }}" title="Dashboard"><i class="fas fa-plus-square"></i> <span class="menu-item-parent">Add Menu</span></a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('Sliders Manager')
                <li class="@php echo (Request::segment(2)=='sliders')?'active':''  @endphp">
                    <a href="#"><i class="fa fa-fw fa-sliders-h"></i> <span class="menu-item-parent">Sliders</span></a>
                    <ul>
                        <li class="@php echo (Request::segment(2)=='sliders' && Request::segment(3)=='')?'active':''  @endphp">
                            <a  href="{{ url('admin/sliders') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Slider List</span></a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='sliders' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a  href="{{ action('Admin\SlidersController@create') }}" title="Dashboard"><i class="fas fa-plus-square"></i> <span class="menu-item-parent">Add Slider</span></a>
                        </li>
                    </ul>
                </li>
                @endcan


                @can('Student Manager')
                    <li class="@php echo (in_array(Request::segment(2), array("students")))?'active':''  @endphp">
                        <a href="{{ url('admin/students') }}"><i class="fas fa-list-ul"></i> <span class="menu-item-parent">Students</span></a>
                    </li>
                @endcan

                @can('Course Applicant')
                    <li class="@php echo (in_array(Request::segment(2), array("applicatnts")))?'active':''  @endphp">
                        <a href="{{ url('admin/applicatnts') }}"><i class="fas fa-list-ul"></i> <span class="menu-item-parent">Applicants</span></a>
                    </li>
                @endcan



                @can('News Manager')
                    <li class="@php echo (in_array(Request::segment(2), array("news")))?'active':''  @endphp">
                        <a href="#"><i class="fas fa-cube"></i> <span class="menu-item-parent">News</span></a>
                        <ul>
                            <li class="@php echo (Request::segment(2)=='news' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/news') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">News List</span></a>
                            </li>
                            <li class="@php echo (Request::segment(2)=='news' && Request::segment(3)=='create')?'active':''  @endphp">
                                <a href="{{ action('Admin\NewsController@create') }}" title=""><i class="fas fa-plus-square"></i> <span class="menu-item-parent">Add News</span></a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('Charity Profile Manager')
                    <li class="@php echo (in_array(Request::segment(2), array("charity-profile")))?'active':''  @endphp">
                        <a href="#"><i class="fas fa-cube"></i> <span class="menu-item-parent">Charity Profile</span></a>
                        <ul>
                            <li class="@php echo (Request::segment(2)=='charity-profile' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/charity-profile') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Charity Profile List</span></a>
                            </li>
                            <li class="@php echo (Request::segment(2)=='charity-profile' && Request::segment(3)=='create')?'active':''  @endphp">
                                <a href="{{ action('Admin\CharityProfileController@create') }}" title=""><i class="fas fa-plus-square"></i> <span class="menu-item-parent">Add Charity Profile</span></a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('Video Manager')
                    <li class="@php echo (in_array(Request::segment(2), array("video")))?'active':''  @endphp">
                        <a href="#"><i class="fas fa-cube"></i> <span class="menu-item-parent">Video</span></a>
                        <ul>
                            <li class="@php echo (Request::segment(2)=='video' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/video') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Video List</span></a>
                            </li>
                            <li class="@php echo (Request::segment(2)=='video' && Request::segment(3)=='create')?'active':''  @endphp">
                                <a href="{{ action('Admin\VideoController@create') }}" title=""><i class="fas fa-plus-square"></i> <span class="menu-item-parent">Add Video</span></a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('Product Manager')
                    <li class="@php echo (in_array(Request::segment(2), array("products", "products-type")))?'active':''  @endphp">
                        <a href="#"><i class="fa fa-allergies"></i> <span class="menu-item-parent">Product</span></a>
                        <ul>
                            <li class="@php echo (Request::segment(2)=='products' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/products') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Product List</span></a>
                            </li>
                            <li class="@php echo (Request::segment(2)=='products-type' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/products-type') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Product Type</span></a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('Service Manager')
                    <li class="@php echo (in_array(Request::segment(2), array("service", "service-type")))?'active':''  @endphp">
                        <a href="#"><i class="fa fa-allergies"></i> <span class="menu-item-parent">Service</span></a>
                        <ul>
                            <li class="@php echo (Request::segment(2)=='service' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/service') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Service List</span></a>
                            </li>
                            <li class="@php echo (Request::segment(2)=='service-type' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/service-type') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Service Type</span></a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('Jobs')
                    <li class="@php echo (in_array(Request::segment(2), array("jobs", "jobs-category")))?'active':''  @endphp">
                        <a href="#"><i class="fa fa-allergies"></i> <span class="menu-item-parent">Jobs</span></a>
                        <ul>
                            <li class="@php echo (Request::segment(2)=='jobs' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/jobs') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">jobs List</span></a>
                            </li>
                            <li class="@php echo (Request::segment(2)=='jobs-type' && Request::segment(3)=='')?'active':''  @endphp">
                                <a  href="{{ url('admin/jobs-category') }}" title=""><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">jobs Category</span></a>
                            </li>
                        </ul>
                    </li>
                @endcan



                @can('Pages Manager')
                <li class="@php echo (Request::segment(2)=='pages' && Request::segment(3)=='')?'active':''  @endphp">
                    <a href="#"><i class="fa fa-file-alt"></i> <span class="menu-item-parent">Pages</span></a>
                    <ul>
                        <li class="@php echo (Request::segment(2)=='pages' && Request::segment(3)=='')?'active':''  @endphp">
                            <a  href="{{ url('admin/pages') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Pages</span></a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='pages' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a href="{{ action('Admin\PagesController@create') }}" title="Dashboard"><i class="fas fa-plus-square"></i> <span class="menu-item-parent">Add Pages</span></a>
                        </li>
                    </ul>
                </li>
                @endcan


               @can('Settings Manager')
                <li class="@php echo (Request::segment(2)=='system-settings')?'active':''  @endphp">
                    <a href="{{ url('admin/system-settings') }}"><i class="fas fa-wrench"></i> <span class="menu-item-parent">Settings</span></a>
                </li>
               @endcan

            </ul>
        </nav>


        <span class="minifyme" data-action="minifyMenu">
			<i class="fa fa-arrow-circle-left hit"></i>
		</span>

    </aside>

    @yield('content')


    <div class="page-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <span class="txt-color-white">{{ settings('site_title', $settings) }}  © 2018</span>
            </div>
        </div>
    </div>

</div>


<script src="{{ asset('js/libs/jquery-3.2.1.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/appcon.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>


@yield('js')



</body>
</html>
