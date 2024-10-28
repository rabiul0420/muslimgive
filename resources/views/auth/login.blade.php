@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li class="active">Login</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                <div class="sidebar col-md-3 col-sm-3">

                </div>
                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-9">
                    <h1>Login</h1>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                           {{ Session::get('message') }}
                        </div>
                    @endif
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <div class="content-form-page">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <form class="form-horizontal form-without-legend" method="post" action="{{url('login')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" name="email" required value="{{ old('email') }}" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="password" name="password" required class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-offset-4 padding-left-0">
                                            <a href="{{ url('password/reset') }}">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                                            <hr>
                                            {{--<div class="login-socio">
                                                <p class="text-muted">or login using:</p>
                                                <ul class="social-icons">
                                                    <li><a href="javascript:;" data-original-title="facebook" class="facebook" title="facebook"></a></li>
                                                    <li><a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a></li>
                                                    <li><a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a></li>
                                                    <li><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a></li>
                                                </ul>
                                            </div>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 pull-right">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
@endsection
