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
                    <li>Home</li><li>Edit Role</li>
                </ol>
        </div>

        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-edit fa-fw "></i>
                        Roles
                        <span>> Edit Role</span>
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
                                <h2>Add Roles </h2>
                            </header>
                            <div>
                                <div class="widget-body">
                                    {!! Form::open(['action'=>['Admin\RolesController@update',$role->id],'method'=>'PUT','files'=>true]) !!}
                                    <div class="row">

                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" required value="{{$role->name}}" name="name">
                                            </div>


                                            <h3>Permissions</h3>

                                            <div class="col-xs-12 form-group">
                                                @foreach($permissions as $row)
                                                    <div class="checkbox">
                                                        <label><input name="permission[]" @php echo in_array($row->id,$exist_permission)?'checked':'' @endphp value="{{$row->id}}" type="checkbox">
                                                            {{$row->name}}
                                                        </label>
                                                    </div>
                                                    <div style="padding-left: 20px" class="row">
                                                        <div class="">
                                                            @foreach($row->child as $child)
                                                                <div class="col-md-3">
                                                                    <div class="checkbox">
                                                                        <label><input class="child-permission parent-{{$row->id}}" data-parent_id="{{$row->id}}" name="permission[]" @php echo in_array($child->id,$exist_permission)?'checked':'' @endphp value="{{$child->id}}" type="checkbox">
                                                                            {{$child->name}}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>

                                    </div>
                                        <footer>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-primary" onclick="window.history.back();">Back</button>
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
<script>
    $(function () {


        $('[name="permission[]"]').on('click', function() {
            var parent_id = $(this).val();
            $(".parent-"+parent_id).prop('checked', $(this).prop("checked"));
        })

        $('.child-permission').on('click', function() {

            var child_parent_id = $(this).attr("data-parent_id");

            if($('.parent-'+child_parent_id+':checked').length){
                $("input[value='" + child_parent_id + "']").prop('checked', true);
            }else{
                $("input[value='" + child_parent_id + "']").prop('checked', false);
            }
        })
    })
</script>
@endsection

