@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li class="active">Create new account</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                <div class="sidebar col-md-2 col-sm-2">

                </div>
                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->
                <div class="col-md-10 col-sm-10">
                    <h1>Create an account</h1>
                    <div class="content-form-page">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <fieldset>

                                        <div class="form-group">
                                            <label for="lastname" class="col-lg-4 control-label">Student Name <span class="require">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" value="{{ old('name') }}" placeholder="Enter Student Name" required name="name" class="form-control" id="lastname">
                                                <span class="text-warning">{{ $errors->first('name') }}  </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="lastname" class="col-lg-4 control-label">Phone <span class="require">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" value="{{ old('phone') }}" placeholder="Enter Phone" required name="phone" class="form-control" id="lastname">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email"  class="col-lg-4 control-label">Email <span class="require">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="email" value="{{ old('email') }}"  placeholder="Enter Email" required name="email" class="form-control" id="email">
                                                @if ($errors->has('email'))
                                                    <span class="text-warning">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">Father Name</label>
                                            <div class="col-md-8">
                                                <input id="email" type="text" class="form-control" name="father_name" placeholder="Enter Father Name" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block"><strong>{{ $errors->first('father_name') }}</strong></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">Mother Name</label>

                                            <div class="col-md-8">
                                                <input id="email" type="text" class="form-control" name="mother_name" placeholder="Enter Mother Name" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block"><strong>{{ $errors->first('mother_name') }}</strong></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">Mailing Address</label>
                                            <div class="col-md-8">
                                                <input id="email" type="text" class="form-control" name="present_address" placeholder="Enter Mother Name" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block"><strong>{{ $errors->first('present_address') }}</strong></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">University/Institute Name*:</label>

                                            <div class="col-md-8">
                                                <input id="email" type="text" class="form-control" name="educational_institute" placeholder="Enter University/Institute Name" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block"><strong>{{ $errors->first('educational_institute') }}</strong></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="contacts-name" class="col-md-4 control-label">Date of Birth</label>
                                            <div class="col-md-8">
                                                <input type="text" name="dob" autocomplete="off"  required class="form-control input-append date" id="datepicker">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="contacts-name" class="col-md-4 control-label"> Laptop/Computer*:  </label>
                                            <div class="col-md-8">
                                                <label class=""><input type="radio" required  value="Yes" name="is_computer_laptop">Yes</label>
                                                <label class=""><input type="radio" required  value="No" name="is_computer_laptop">No</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" placeholder="Enter Password" required name="password" class="form-control" id="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" placeholder="Enter Confirm Password Like Password" required class="form-control" name="password_confirmation" id="confirm-password">
                                            </div>
                                        </div>
                                    </fieldset>


                                    <div class="row">
                                        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                                            <button type="submit" class="btn btn-primary">Create an account</button>
                                        </div>
                                    </div>
                                </form>
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
@section('js')

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/assets/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/assets/css/datepicker3.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


    <script type="text/javascript">

        $(document).ready(function() {

            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '1900-01-01',
                endDate: '2020-12-30',
            })

        })

    </script>



@endsection
