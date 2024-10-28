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
                    <li>Home</li><li>Edit Training</li>
                </ol>
        </div>

        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Edit Training
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
                                <h2>Edit Training </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                    {!! Form::open(['action'=>['Admin\TrainingController@update',$training->id],'method'=>'PUT','files'=>true]) !!}
                                    <div class="row">
                                        <div class="col-md-8">


                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" value="{{$training->title}}" required name="title">
                                            </div>

                                            <div class="form-group">
                                                <label>Course Fee</label>
                                                <input type="text" class="form-control" value="{{$training->course_fee}}" required name="course_fee">
                                            </div>

                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" name="starting_date" value="{{$training->starting_date}}" autocomplete="off"  required class="form-control input-append date" id="datepicker">
                                            </div>

                                            <div class="form-group">
                                                <label>Duration</label>
                                                <input type="text" class="form-control" value="{{$training->duration}}" required name="duration">
                                            </div>


                                            <div class="form-group">
                                                <label>Course Materials</label>
                                                <textarea  rows="10" name="course_materials" class="form-control editor">{{$training->course_materials}}</textarea>
                                            </div>

                                            <div style="padding-left: 20px" class="form-group">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="yes" @php echo ($menu)?($menu->status=='Active')?'checked':'':'' @endphp name="is_menu" id="subscription">
                                                    <i></i>Add to Menu?</label>
                                            </div>

                                            <div class="form-group">
                                                <label>Parent</label>
                                                @php $parent->prepend('Select Parent Manu','0')  @endphp
                                                {!! Form::select('parent_id', $parent, ($menu)?$menu->parent_id:'',['class'=>'form-control']) !!}<i></i>
                                            </div>



                                            <div class="form-group">
                                                <label>Status</label>
                                                {!! Form::select('status', ['Active' => 'Active','InActive' => 'InActive'], $training->status,['class'=>'form-control']) !!}<i></i>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <img id="holder_image" src="{{asset($training->image)}}" style="margin-top:15px;margin-bottom:5px;max-width:100%;">
                                                @php $file_array = explode('/',$training->image); @endphp
                                               
                                                <div class="input-group">
                                                <tr>
                                                    <button><input type="file" name="image" id="fileToUpload"></button>
                                                </tr>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                        <footer>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a  class="btn btn-default" href="{{url('admin/training')}}">Back</a>
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

            toolbar: "insertfile undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor",
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
    </script>



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

            $('.lfm').filemanager_image('image');

            $('.ckeditor').show();
            $('iframe').css('height','300px');

        })
    </script>

@endsection
