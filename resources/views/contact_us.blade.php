@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contacts</li>
            </ul>
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12">
                    <h1>Contacts</h1>
                    <div class="content-page">
                        <div class="row">
                            <div class="col-md-12">
                                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{settings('site_lat',$settings)}},{{settings('site_lon',$settings)}}&amp;hl=es&amp;z=14&amp;output=embed">
                                </iframe>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <h2>{{ $page->title }}</h2>
                                <p>{{ $page->short_description }}</p>

                                <!-- BEGIN FORM-->
                                <form action="#" role="form">
                                    <div class="form-group">
                                        <label for="contacts-name">Name</label>
                                        <input type="text" required name="name" class="form-control" id="contacts-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="contacts-email">Email</label>
                                        <input type="email" required name="email" class="form-control" id="contacts-email">
                                    </div>
                                    <div class="form-group">
                                        <label for="contacts-message">Message</label>
                                        <textarea class="form-control" required name="message"  rows="5" id="contacts-message"></textarea>
                                    </div>
                                    <button type="submit" class="ic-btn btn btn-primary"><span>Send</span></button>

                                    <button type="button" class="btn btn-default">Cancel</button>
                                </form>
                                <div class="modal fade" id="thankyou" tabindex="-1" role="dialog" aria-labelledby="thankyouLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h3>Thank you</h3>
                                                {{--<span class="ic-check"><i class="icofont icofont-check-circled"></i></span>
                                                <span>Registration Successful</span>
                                                <span>You get a successful mail in your eamil  </span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END FORM-->
                            </div>

                            <div class="col-md-3 col-sm-3 sidebar2">
                                <h2>Our Contacts</h2>
                                <address>
                                    {{ settings('site_address',$settings) }}
                                </address>
                                <address>
                                    <strong>Phone</strong><br>
                                   {{ settings('site_phone',$settings) }}<br>
                                </address>
                                <address>
                                    <strong>Email</strong><br>
                                    <a href="mailto:{{ settings('site_email',$settings) }}">{{ settings('site_email',$settings) }}</a><br>
                                </address>
                                <ul class="social-icons margin-bottom-40">
                                    @if(settings('facebook',$settings))
                                        <li><a target="_blank" href="{{ settings('facebook',$settings) }}" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    @endif
                                    @if(settings('facebook',$settings))
                                        <li><a target="_blank" href="{{ settings('google_plus',$settings) }}" data-original-title="Goole Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                    @endif
                                    @if(settings('facebook',$settings))
                                        <li><a target="_blank" href="{{ settings('twitter',$settings) }}" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    @endif
                                    @if(settings('facebook',$settings))
                                        <li><a target="_blank" href="{{ settings('youtube',$settings) }}" data-original-title="youtube" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                    @endif
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
@endsection

@section('js')




    <script type="text/javascript">

        $(document).ready(function() {

            // bind submit handler to form
            $('form').on('submit', function(e) {
                e.preventDefault(); // prevent native submit

                var form = $(this);
                var formdata = false;
                if (window.FormData){
                    formdata = new FormData(form[0]);
                }

                var formAction = form.attr('action');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/contact-us-send',
                    type: 'POST',
                    data        : formdata,
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success     : function(data, textStatus, jqXHR){
                        $('form').hide('show');
                        $('#thankyou').modal('show');
                    }
                });

            });




        })

    </script>


    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>



@endsection