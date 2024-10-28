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
                    <li>Home</li><li>Edit Menu</li>
                </ol>
        </div>

        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Edit Menu
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
                                <h2>Edit Menu </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                    {!! Form::open(['action'=>['Admin\MenuController@update',$menu->id],'method'=>'PUT','files'=>true]) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" value="{{$menu->title}}" required name="title">
                                            </div>

                                            <div class="form-group">
                                                <label>Link</label>
                                                <input type="text" class="form-control"  value="{{$menu->link}}"  name="link">
                                            </div>

                                            <div class="form-group">
                                                <label>Parent</label>
                                                @php $parent->prepend('Select Parent Manu','0')  @endphp
                                                {!! Form::select('parent_id', $parent, $menu->parent_id,['class'=>'form-control']) !!}<i></i>

                                            </div>

                                            <div class="form-group">
                                                <label>Target</label>
                                                {!! Form::select('target', ['_self' => 'None','_blank' => 'New Tab'], $menu->target,['class'=>'form-control']) !!}<i></i>
                                            </div>

                                            <div class="form-group">
                                                <label>Two Column</label>
                                                {!! Form::select('has_column', ['Yes' => 'Yes','No' => 'No'], $menu->has_column,['class'=>'form-control']) !!}<i></i>
                                            </div>

                                            <div class="form-group">
                                                <label>Position</label>
                                                {!! Form::select('position', ['Left' => 'Left','Right' => 'Right'], $menu->position,['class'=>'form-control']) !!}<i></i>
                                            </div>

                                            <div class="form-group">
                                                <label>Priority</label>
                                                <input type="number" class="form-control"  value="{{$menu->priority}}" required name="priority">
                                            </div>


                                            <div class="form-group">
                                                <label>Status</label>
                                                {!! Form::select('status', ['Active' => 'Active','InActive' => 'InActive'], $menu->status,['class'=>'form-control']) !!}<i></i>
                                            </div>

                                        </div>



                                    </div>
                                        <footer>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ url('admin/menus') }}"  class="btn btn-default">Back</a>
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
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script type="text/javascript">


        $(document).ready(function() {
            tinymce.init({
                selector: '#editor',
                plugins: 'image code | link',
                toolbar: 'undo redo | link image | code | bold | italic | underline',
                // enable title field in the Image dialog
                image_title: true,
                // enable automatic uploads of images represented by blob or data URIs
                automatic_uploads: true,
                // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
                // images_upload_url: 'postAcceptor.php',
                // here we add custom filepicker only to Image dialog
                file_picker_types: 'image',
                // and here's our custom image picker
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    // Note: In modern browsers input[type="file"] is functional without
                    // even adding it to the DOM, but that might not be the case in some older
                    // or quirky browsers like IE, so you might want to add it to the DOM
                    // just in case, and visually hide it. And do not forget do remove it
                    // once you do not need it anymore.

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.onload = function () {
                            // Note: Now we need to register the blob in TinyMCEs image blob
                            // registry. In the next release this part hopefully won't be
                            // necessary, as we are looking to handle it internally.
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            // call the callback and populate the Title field with the file name
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                        reader.readAsDataURL(file);
                    };

                    input.click();
                }
            });

        })
    </script>

@endsection