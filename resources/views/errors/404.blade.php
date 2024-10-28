@extends('layouts.app')

@section('content')



    <!-- 404 wrapper -->
    <section class="ic-404-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset('assets/images/stop.jpg')}}" alt="Not found figure">
                </div>
                <div class="col-md-6 align-self-center ic-404-content">
                    <h2><span class="ic-404">404</span> page not found</h2>
                    <div class="ic-about-btn">
                        <a href="{{url('/')}}" class="ic-btn"><span>Back to home page</span></a>
                        <button onclick="window.history.back();" class="ic-btn"><span>Go to previous page</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 wrapper /end -->

@endsection

@section('js')




    <script type="text/javascript">

        $(document).ready(function() {


        })

    </script>



@endsection