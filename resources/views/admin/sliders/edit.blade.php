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
                <li>Home</li><li>Edit Sliders</li>
            </ol>
        </div>

        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Edit Sliders
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
                                <h2>Edit Sliders </h2>
                            </header>
                            <div>
                                <div class="widget-body no-padding">
                                    {!! Form::open(['action'=>['Admin\SlidersController@update',$sliders->id],'method'=>'PUT','files'=>true,'class'=>'smart-form']) !!}
                                    <div class="row">

                                        <fieldset class="col-md-6">


                                            <section>
                                                <label class="label">Title</label>
                                                <label class="input">
                                                    <input type="text" value="{{$sliders->title}}" required name="title">
                                                </label>
                                            </section>

                                            <section>
                                                <label class="label">Sub Title</label>
                                                <label class="input">
                                                    <input type="text" value="{{$sliders->title_bottom}}"  name="title_bottom">
                                                </label>
                                            </section>

                                            <section>
                                                <label class="label">Link Title</label>
                                                <label class="input">
                                                    <input type="text" value="{{$sliders->button_title}}"  name="button_title">
                                                </label>
                                            </section>

                                            <section>
                                                <label class="label">Link</label>
                                                <label class="input">
                                                    <input type="text" value="{{$sliders->button_link}}"  name="button_link">
                                                </label>
                                            </section>

                                            <section>
                                                <label class="label">Target</label>
                                                <label class="select">
                                                    {!! Form::select('link_target', ['_self' => 'None','_blank' => 'New Tab'], $sliders->link_target,['class'=>'form-control']) !!}<i></i>
                                                </label>
                                            </section>

                                            <section>
                                                <label class="label">Category</label>
                                                <label class="select">
                                                    @php $category->prepend('Select Category','0')  @endphp
                                                    {!! Form::select('category_id', $category, $sliders->category_id,['class'=>'form-control']) !!}<i></i>
                                                </label>
                                            </section>

                                            <section>
                                                <label class="label">Status</label>
                                                <label class="select">
                                                    {!! Form::select('status', ['Active' => 'Active','InActive' => 'InActive'], $sliders->status,['class'=>'form-control']) !!}<i></i>
                                                </label>
                                            </section>

                                        </fieldset>

                                        <fieldset class="col-md-5">

                                            <div class="form-group">
                                                <img id="holder_image" src="{{asset($sliders->image)}}" style="margin-top:15px;margin-bottom:5px;max-width:100%;">
                                                @php $file_array = explode('/',$sliders->image); @endphp
                                                <p class="image_name">{{end($file_array)}}</p>
                                                <div class="input-group">
                                                    <tr>
                                                        <button><input type="file" name="image" id="fileToUpload"></button>
                                                    </tr>
                                                    <input id="thumbnail_image" class="form-control" type="hidden" value="{{$sliders->image}}" name="image">
                                                </div>
                                            </div>

                                        </fieldset>

                                    </div>
                                        <footer>
                                            <button type="submit" class="btn btn-primary">Update</button>
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


    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!

        $(document).ready(function() {
            $.fn.filemanager = function(type, options) {
                type = type || 'file';

                this.on('click', function(e) {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                    localStorage.setItem('target_input', $(this).data('input'));
                    localStorage.setItem('target_preview', $(this).data('preview'));
                    window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
                    window.SetUrl = function (url, file_path) {
                        //set the value of the desired input to image url
                        var target_input = $('#' + localStorage.getItem('target_input'));
                        target_input.val(file_path).trigger('change');

                        // view file name
                        file_path_arr = file_path.split('/');
                        file_name = file_path_arr[file_path_arr.length-1];
                        $('.image_name').text(file_name).trigger('change');

                        //set or change the preview image src
                        var target_preview = $('#' + localStorage.getItem('target_preview'));
                        target_preview.attr('src', url).trigger('change');
                    };
                    return false;
                });
            }
            $('.lfm').filemanager('image');

        })
    </script>

@endsection