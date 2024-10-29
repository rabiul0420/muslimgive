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
                    <li>Home</li><li>Edit Jobs</li>
                </ol>
        </div>

        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Edit Jobs
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
                                <h2>Edit Jobs </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                    {!! Form::open(['action'=>['Admin\JobsController@update',$jobs->id],'method'=>'PUT','files'=>true]) !!}
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" value="{{$jobs->company}}" class="form-control" required name="company">
                                            </div>

                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" value="{{$jobs->designation}}" class="form-control" required name="designation">
                                            </div>

                                            <div class="form-group">
                                                <label>Job Location</label>
                                                <input type="text" value="{{$jobs->job_location}}" class="form-control" required name="job_location">
                                            </div>
                                            <div class="form-group">
                                                <label>Application Deadline</label>
                                                <input type="text" name="application_deadline" autocomplete="off" value="{{$jobs->application_deadline}}"  required class="form-control input-append date datepicker" id="datepicker">
                                            </div>


                                            <div class="form-group">
                                                <label>Job Category</label>
                                                @php $type->prepend('Select Job Category','')  @endphp
                                                {!! Form::select('category_id', $type, $jobs->category_id,['class'=>'form-control']) !!}<i></i>
                                            </div>

                                            <div class="form-group">
                                                <label>Vacancy</label>
                                                <input type="number" value="{{$jobs->vacancy}}" class="form-control" required name="vacancy">
                                            </div>



                                            <div class="form-group">
                                                <label>Salary</label>
                                                <input type="number" value="{{$jobs->salary}}" class="form-control" required name="salary">
                                            </div>



                                            <div class="form-group">
                                                <label>Application Procedure</label>
                                                <input type="text" value="{{$jobs->application_procedure}}" class="form-control" required name="application_procedure">
                                            </div>

                                            <div class="form-group">
                                                <label>Gender</label>
                                                {!! Form::select('gender', ['Male' => 'Male','Female' => 'Female'], $jobs->gender,['class'=>'form-control']) !!}<i></i>
                                            </div>

                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="number" value="{{$jobs->age}}" class="form-control" required name="age">
                                            </div>

                                            <div class="form-group">
                                                <label>Published Date</label>
                                                <input type="text" name="published_date" autocomplete="off" value="{{$jobs->published_date}}"  required class="form-control input-append date datepicker">
                                            </div>


                                            <div class="form-group">
                                                <label>Status</label>
                                                {!! Form::select('status', ['Active' => 'Active','InActive' => 'InActive'], $jobs->status,['class'=>'form-control']) !!}<i></i>
                                            </div>
                                            <div class="form-group ckeditor">
                                                <label>Education Requirements</label>
                                                <textarea class="editor"  rows="20" name="educational_qualification" class="custom-scroll form-control">{{$jobs->educational_qualification}}</textarea>
                                            </div>


                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group ckeditor">
                                                <label>Experience Requirements</label>
                                                <textarea class="editor"  rows="20" name="job_experience" class="custom-scroll form-control">{{$jobs->job_experience}}</textarea>
                                            </div>
                                            <div class="form-group ckeditor">
                                                <label>Responsibilities</label>
                                                <textarea class="editor"  rows="20" name="responsibilities" class="custom-scroll form-control">{{$jobs->responsibilities}}</textarea>
                                            </div>

                                            <div class="form-group ckeditor">
                                                <label>Additional Requirements</label>
                                                <textarea class="editor"  rows="20" name="additional_requirements" class="custom-scroll form-control">{{$jobs->additional_requirements}}</textarea>
                                            </div>
                                            <div class="form-group ckeditor">
                                                <label>Additional Benefits</label>
                                                <textarea class="editor"  rows="20" name="additional_benefits" class="custom-scroll form-control">{{$jobs->additional_benefits}}</textarea>
                                            </div>
                                        </div>




                                    </div>
                                        <footer>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a  class="btn btn-default" href="{{url('admin/jobs')}}">Back</a>
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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


    <script>

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '1900-01-01',
            endDate: '2020-12-30',
        })

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

            toolbar: "insertfile undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
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
            $('.ckeditor textarea').css('height','140px');

        })
    </script>

@endsection