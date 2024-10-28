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
                    <li>Home</li><li>Add Products Type</li>
                </ol>
        </div>

        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Add Products Type
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
                                <h2>Add Products Type </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                        {!! Form::open(['action'=>'Admin\ProductsTypeController@store','files'=>true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" value="" class="form-control" required name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label>Short Description</label>
                                                    <textarea  rows="3" name="short_description" class="custom-scroll form-control">{{old('short_description')}}</textarea>
                                                </div>
                                                <div style="padding-left: 20px" class="form-group">
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="yes" name="is_menu" id="subscription">
                                                        <i></i>Add to Menu?</label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Parent</label>
                                                    @php $parent->prepend('Select Parent Manu','0')  @endphp
                                                    {!! Form::select('parent_id', $parent, old('parent_id'),['class'=>'form-control']) !!}<i></i>
                                                </div>
                                                <div class="form-group">
                                                    <img id="holder" style="margin-top:15px;margin-bottom:5px;max-width:100%;">
                                                    <p class="image_name"></p>
                                                    <div class="input-group">
                                                      <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" style="width: 100%" class="btn btn-primary">
                                                          <i class="fa fa-picture-o"></i> Choose Image
                                                        </a>
                                                      </span>
                                                        <input id="thumbnail" class="form-control" type="hidden" name="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <footer>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a  class="btn btn-default" href="{{ url('admin/products-type') }}">Back</a>
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

    <script type="text/javascript">
        $(document).ready(function() {

            $.fn.filemanager_image = function(type, options) {
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
            $('#lfm').filemanager_image('image');

        })
    </script>

@endsection