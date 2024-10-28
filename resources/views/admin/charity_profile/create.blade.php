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
                    <li>Home</li><li>Edit Charity Profile</li>
                </ol>
        </div>

        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Add Charity Profile
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
                                <h2>Add Charity Profile </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                        {!! Form::open(['action'=>'Admin\CharityProfileController@store','files'=>true]) !!}
                                        <div class="row">
                                            <div class="col-md-8">

                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" value="{{old('title')}}" class="form-control" required name="title">
                                                </div>

                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input type="url" value="{{old('website')}}" class="form-control" required name="website">
                                                </div>

                                                <div class="form-group">
                                                    <label>Link To CRA Return</label>
                                                    <input type="url" value="{{old('link_to_cra_return')}}" class="form-control" required name="link_to_cra_return">
                                                </div>



                                                <div class="form-group">
                                                    <label>Auditors</label>
                                                    <textarea  rows="10" name="auditors" class="custom-scroll form-control"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Fiscal Year End</label>
                                                    <input type="text" value="{{old('fiscal_year_end')}}" class="form-control" required name="fiscal_year_end">
                                                </div>

                                                <div class="form-group">
                                                    <label>Notes</label>
                                                    <textarea  rows="10" name="notes" class="custom-scroll form-control"></textarea>
                                                </div>




                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <img id="holder" style="margin-top:15px;margin-bottom:5px;max-width:100%;">
                                                    <p class="image_name"></p>
                                                    <div class="input-group">
                                                        <tr>
                                                            <button><input type="file" name="logo" id="fileToUpload"></button>
                                                        </tr>
                                                        <input id="thumbnail" class="form-control" type="hidden" name="logo">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <footer>
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                            <button type="button" class="btn btn-default" onclick="window.history.back();">
                                                Back
                                            </button>
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


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        var editor_config ={
            path_absolute : "/",
            selector: "textarea.editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern",
                "textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
        tinymce.init(editor_config);

        $('.ckeditor').show();
        $('iframe').css('height','300px');


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

        $('#lfm').filemanager('image');


    </script>

@endsection