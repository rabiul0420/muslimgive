@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="page-slider margin-bottom-40 margin-top-40">
        <div class="row">
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide carousel-slider">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-frontend">
                        @foreach($sliders as $k=>$slider)
                            <li data-target="#carousel-example-generic" data-slide-to="{{ $k }}"
                                class="{{ ($k==0)?'active':'' }}"></li>
                        @endforeach
                    </ol>


                    <div class="carousel-inner" role="listbox">
                        @foreach($sliders as $k=>$slider)
                            <div style="background-image: url({{$slider->image}}); background-repeat: no-repeat; background-size: cover; background-position: center;"
                                 class="item carousel-item-eight {{ ($k==0)?'active':'' }}">
                            </div>
                    @endforeach


                    <!-- Controls -->
                        <a class="left carousel-control carousel-control-shop carousel-control-frontend"
                           href="#carousel-example-generic" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="right carousel-control carousel-control-shop carousel-control-frontend"
                           href="#carousel-example-generic" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">


                <div class="user_card">

                    <div class="d-flex justify-content-center form_container">
                         <h2>Login Form</h2>
                        <form method="post" action="{{url('login')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="email" required value="{{ old('email') }}" class="form-control input_user" value="" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input type="password"  type="password" name="password" required class="form-control input_pass" value="" placeholder="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="button" class="btn login_btn">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="{{ url('register') }}" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links forgot-password">
                            <a href="{{ url('password/reset') }}">Forget Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <h2>Our Training Services</h2>
        <div class="row margin-bottom-40">
            @foreach($training as $single)
                <div class="col-md-4 col-xs-12">
                    <div class="well training-course"><a
                                href="{{ url('training/'.Illuminate\Support\Str::slug($single->title, '-')) }}"><img
                                    class="img-responsive" src="{{ url($single->image) }}"></a>
                        <h4>
                            <a href="{{ url('training/'.Illuminate\Support\Str::slug($single->title, '-')) }}">{{ $single->title }}</a>
                        </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s</p>
                        <p><a href="{{ url('training/'.Illuminate\Support\Str::slug($single->title, '-')) }}"><i
                                        style="padding: 8px 12px; border-radius: 50%; border: 2px solid #64aed9;"
                                        class="fa fa-angle-right"></i> Learn More</a></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div style="width: 100%; background: #f1f1f1; padding: 50px 0 40px 0;">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="text-left text-uppercase">Job Categories</h2>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <div class="category-list">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <ul>
                                @foreach($job_category as $key=>$category)
                                    @if($key%3==0 && $category->jobs->count())
                                    <li>
                                        <a href="{{ url('job-category/'.$category->id) }}" title="{{ $category->title }}"><i class="fa fa-angle-right"></i>
                                            {{ $category->title  }} <span>({{ $category->jobs->count() }})</span></a>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <ul>
                                @foreach($job_category as $key=>$category)
                                    @if($key%3==1 && $category->jobs->count())
                                        <li>
                                            <a href="{{ url('job-category/'.$category->id) }}" title="{{ $category->title }}"><i class="fa fa-angle-right"></i>
                                                {{ $category->title  }} <span>({{ $category->jobs->count() }})</span></a>
                                        </li>
                                    @endif
                                    @endforeach
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4e">
                            <ul>
                                @foreach($job_category as $key=>$category)
                                    @if($key%3==2 && $category->jobs->count())
                                        <li>
                                            <a href="{{ url('job-category/'.$category->id) }}" title="{{ $category->title }}"><i class="fa fa-angle-right"></i>
                                                {{ $category->title  }} <span>({{ $category->jobs->count() }})</span></a>
                                        </li>
                                    @endif
                                    @endforeach

                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection