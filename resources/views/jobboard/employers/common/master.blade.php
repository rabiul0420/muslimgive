<?php
	$fullUrl = url(\Illuminate\Support\Facades\Request::getRequestUri());
?>
<!DOCTYPE html>
<html lang="{{ ($lang->has('abbr')) ? $lang->get('abbr') : 'en' }}">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@if (isset($lang) and isset($country) and $country->has('lang'))
		@if ($lang->get('abbr') != $country->get('lang')->get('abbr'))
			<meta name="robots" content="noindex">
			<meta name="googlebot" content="noindex">
		@endif
	@endif
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-title" content="{{ config('settings.app_name') }}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('/assets/ico/apple-touch-icon-144-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('/assets/ico/apple-touch-icon-114-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('/assets/ico/apple-touch-icon-72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ url('/assets/ico/apple-touch-icon-57-precomposed.png') }}">
	<link rel="shortcut icon" href="{{ url('/assets/ico/favicon.ico') }}">
	<title></title>

	
	@if (isset($keywords))
		<meta name="keywords" content="{{ $keywords }}"/>
	@endif
	
	
	<link rel="canonical" href="{{ $fullUrl }}"/>
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		@if (strtolower($localeCode) != strtolower($lang->get('abbr')))
			<link rel="alternate" href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{ strtolower($localeCode) }}"/>
		@endif
	@endforeach
	@if (count($dns_prefetch) > 0)
		@foreach($dns_prefetch as $dns)
			<link rel="dns-prefetch" href="{{ $dns }}">
		@endforeach
	@endif
	@if (config('services.facebook.client_id'))
		<meta property="fb:app_id" content="{{ config('services.facebook.client_id') }}"/>
	@endif
	{!! $og->renderTags() !!}

	@if (config('settings.google_site_verification'))
		<meta name="google-site-verification" content="{{ config('settings.google_site_verification') }}"/>
	@endif
	@if (config('settings.msvalidate'))
		<meta name="msvalidate.01" content="{{ config('settings.msvalidate') }}" />
	@endif
	@if (config('settings.alexa_verify_id'))
		<meta name="alexaVerifyID" content="{{ config('settings.alexa_verify_id') }}"/>
	@endif
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
	<link href="{{ url('/assets/css/style.css') . '?v=' . time() }}" rel="stylesheet">
	<link href="{{ url('/assets/css/style/default.css') . '?v=' . time() }}" rel="stylesheet">
	@if (config('app.theme'))
		<link href="{{ url('/assets/css/style/' . config('app.theme') . '.css') . '?v=' . time() }}" rel="stylesheet">
	@endif
	<link href="{{ url('/assets/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css"/>
	<link href="{{ url('/assets/css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ url('/assets/css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ url('/assets/css/flags/flags.css') }}" rel="stylesheet">
	
	<link href="{{ url('/assets/css/responsive.css') }}" rel="stylesheet">
	@if (config('settings.custom_css'))
	<style type="text/css">
		<?php
		$custom_css = config('settings.custom_css');
		$custom_css = preg_replace('/<[^>]+>/i', '', $custom_css);

		echo $custom_css . "\n";
		?>
	</style>
	@endif
	@section('css')
	@show
	@section('javascript-top')
	@show



	<link href="{{ url('/assets/css/jobboard.css') }}" rel="stylesheet">
	<script src="{{ url('/assets/js/pace.min.js') }}"></script>
</head>
<body>

<div class="confirmation-message" style="opacity: 1; bottom: -100px; display: block;">
    <span id="c_msg">The information has been updated successfully</span>
</div>

<div id="wrapper">

	@section('header')
		@if (Auth::check())
			@include('jobboard.jobseekers.common.header', ['user' => $user])
		@else
			@include('jobboard.jobseekers.common.header')
		@endif
	@show

	@section('search')
	@show



	@yield('content')

	@section('info')
	@show

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				@section('footer')
					@include('layouts.inc.footer')
				@show
			</div>
		</div>
	</div>

</div>

@section('modal-location')
@show
@section('modal-abuse')
@show
@section('modal-message')
@show

@section('javascript')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"> </script> -->
<script src="{{ url('/assets/js/jquery/1.10.1/jquery-1.10.1.js') }}"></script>
<script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/assets/plugins/retina/1.3.0/retina.js') }}" type="text/javascript"></script>
<script src="{{ url('/assets/js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ url('/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.min.js') }}"></script>
<script src="{{ url('/assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ url('/assets/plugins/SocialShare/SocialShare.min.js') }}"></script>
<script src="{{ url('/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('/assets/js/hideMaxListItem-min.js') }}"></script>
<script src="{{ url('/assets/js/modernizr.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.validate.min.js')}}"></script>
<script language="javascript">
	var siteUrl = '<?php echo url('/'); ?>';
	var languageCode = '<?php echo $lang->get('abbr'); ?>';
	var langLayout = {
		'hideMaxListItems': {
			'moreText': "{{ t('View More') }}",
			'lessText': "{{ t('View Less') }}"
		}
	};
	$(document).ready(function () {
		/* Select Boxes */
		$(".selecter").select2({
			language: '<?php echo $lang->get('abbr'); ?>',
			dropdownAutoWidth: 'true',
			minimumResultsForSearch: Infinity
		});
		/* Searchable Select Boxes */
		$(".sselecter").select2({
			language: '<?php echo $lang->get('abbr'); ?>',
			dropdownAutoWidth: 'true',
		});

		/* Social Share */
		$('.share').ShareLink({
			title: '<?php echo 'Test'; ?>',
			text: '<?php echo 'Test'; ?>',
			url: '<?php echo $fullUrl; ?>'
		});
	});
</script>
<script src="{{ url('/assets/js/script.js?time=' . time()) }}"></script>
<script type="text/javascript" src="{{ url('/assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/app/autocomplete.cities.js') }}"></script>


	<link rel="stylesheet" href="{{ url('/assets/css/slidorionsvenja9a.css') }}">

	<script src="{{ url('/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ url('/assets/js/jquery.slidorion.min.js') }}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
				$('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
    </script>

<script>
	$(document).ready(function(){
		/* $('#slidorion').slidorion({
			autoplay: false,
			first: 1,
			speed: 500,
			interval: 4000,
			effect: 'fade'
		}); */
		 $('[data-toggle="tooltip"]').tooltip();
		 
		$('.jb_login_display').click(function(event){
			event.preventDefault();
			$('.jb_login').toggle();
		});
        
		$('.create-account').click(function(event){
			$('.jb_login').hide();
		});
		
		 
	});

     

</script>
	
<script type="text/javascript" src="{{ url('/assets/tinymce/tinymce.min.js') }}"></script>
 
<script type="text/javascript">

 tinymce.init({
    content_css : "{{ url('assets/tinymce/mcecontent.css') }}",
    selector: "#DetailNews",
    theme: "modern",	
	force_p_newlines : false, 
    force_br_newlines : true, 
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor responsivefilemanager"
    ],
	relative_urls : false,
    remove_script_host : false,
    convert_urls : true,
    paste_as_text: true,
    paste_data_images: false,
    paste_auto_cleanup_on_paste : true,
    toolbar1: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | |styleselect fontsizeselect | link unlink anchor",   
    toolbar2: "| responsivefilemanager | insertfile image media |  print preview  code | forecolor backcolor emoticons |  pastetext pasteword  selectall",
    image_advtab: true,
	external_filemanager_path:"{{ url('/assets/filemanager/') }}",
    filemanager_title:"Filemanager" ,
    external_plugins: { "filemanager" : "{{ url('/assets/filemanager/plugin.min.js') }}"},
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
}); 
</script>



<script>
$(document).ready(function() { 
   $(document).on("click", ".edit-tools .edit-btn", function(){ 
	$(this).parents('div.all-info').find('.edit-tools').hide();
	$(this).parents('div.all-info').find('.btn-form-control').removeClass('hidden');
	$(this).parents('div.all-info').find('.form-group').find('.onclick-hidden').addClass('yes');
	$(this).parents('div.all-info').find('.btn-form-control .btn').show();
});
$(document).on("click", ".all-info form .btn-cancel", function(){
	$(this).parents('div.all-info').find('form').addClass('view-mode');
	$(this).parents('div.all-info').find('.edit-tools').show();
	$(this).parents('div.all-info').find('.btn-form-control').addClass('hidden');
	$(this).parents('div.all-info').find('.form-group').find('.onclick-hidden').removeClass('yes');
});

$(document).on("click", ".btn-form-control .btn", function(){  
	$(this).parents('div.all-info').find('form').addClass('view-mode');
	$(this).parents('div.all-info').find('.edit-tools').show();
	$(this).parents('div.all-info').find('.btn-form-control .btn').hide();
});

$(document).on("click", ".tab-group .btn", function(){ 
	$(this).parents('div.tab-group').find('.btn').removeClass('active');
	$(this).addClass('active');
});
function toggleIcon(e) {
$(e.target)
    .prev('.panel-heading')
    .find(".indicator")
    .toggleClass('icon-minus icon-plus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon).css('color','#000');
$('.panel-group').on('shown.bs.collapse', toggleIcon);

// EDIT RESUME TAB
$(document).on("click", ".btn-tab-personal", function(){
	$(this).parents('div.big-card').find('.resume-panel-group').hide();
	$('.resume-panel-group.personal').removeClass('hidden');
	$('.resume-panel-group.personal').show();
	// $('.loader').fadeIn();
});
$(document).on("click", ".btn-tab-education", function(){
	$(this).parents('div.big-card').find('.resume-panel-group').hide();
	$('.resume-panel-group.education').removeClass('hidden');
	$('.resume-panel-group.education').show();
});
$(document).on("click", ".btn-tab-employment", function(){
	$(this).parents('div.big-card').find('.resume-panel-group').hide();
	$('.resume-panel-group.employment').removeClass('hidden');
	$('.resume-panel-group.employment').show();
});
$(document).on("click", ".btn-tab-others", function(){
	$(this).parents('div.big-card').find('.resume-panel-group').hide();
	$('.resume-panel-group.others').removeClass('hidden');
	$('.resume-panel-group.others').show();
});
$(document).on("click", ".btn-tab-photograph", function(){
	$(this).parents('div.big-card').find('.resume-panel-group').hide();
	$('.resume-panel-group.photograph').removeClass('hidden');
	$('.resume-panel-group.photograph').show();
});


// Nationality
$(document).on("click", ".onclick", function(){
	$(this).parents('div.btn-form-control').find('.onclick-show').removeClass('hidden');
});
$(document).on("click", ".onclick-o", function(){
	$(this).parents('div.btn-form-control').find('.onclick-show').addClass('hidden');
});



$(document).on("mouseover", ".chips-container a", function(){
	$(this).parents('div.chips-container .well').addClass('hover');
});
$(document).on("mouseout", ".chips-container a", function(){
	$(this).parents('div.chips-container .well').removeClass('hover');
});


// Wells onclick hide
$(document).on("click", ".chips-container a.dismiss", function(){
	$(this).parents('div.well').fadeOut();
});

$(document).on("click", ".edit-tools .edit-btn", function(){
	$(this).parents('div.all-info').find('form').removeClass('view-mode');
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});


// GOOD AND ORDINARY EXAMPLE
$(document).on("click", ".edit-tools .edit-btn", function(){
	$(this).parents('div.all-info').find('form').removeClass('view-mode');
});

// PHOTO UPLOAD EDIT RESUME
$(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#userImg').attr('src', e.target.result);
};


$(function(){
    $('.has-spinner').click(function() {
        $(this).toggleClass('active');
    });
});

// UPLOADING
$(document).on("click", ".btn-upload", function(){
	$(this).find('i.icon-upload').removeClass('icon-upload').addClass('spin icon-circle-loader');
	$(this).addClass('uploading');
});
$(document).on("click", ".tab-group .btn", function(){
	$(this).parents('div.big-card').find('.loader').show();
	$(this).find('.panel');
});
// $('.alert.alert-dismissible').fadeIn('fast').delay(2000).fadeOut('slow');
// Applied globally on all textareas with the "autoExpand" class
$(document).one('focus.autoExpand', 'textarea.autoExpand', function(){
    var savedValue = this.value;
    this.value = '';
    this.baseScrollHeight = this.scrollHeight;
    this.value = savedValue;
})
.on('input.autoExpand', 'textarea.autoExpand', function(){
    var minRows = this.getAttribute('data-min-rows')|0, rows;
    this.rows = minRows;
    rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
    this.rows = minRows + rows;
});


                                          $('body').on('click', function (e) {
                                              $('[data-toggle="popover"]').each(function () {
                                                  if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                                                      $(this).popover('hide');
                                                  }
                                              });
                                          });
										  
 });


 
        $(document).ready(function() {
            $(".feedback-left").delay(2000).fadeIn(500);
        });
		
		/* personal section */
		
		$(function(){  
			$('.personal-form').on('submit',function(e){				
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
		});
		
		$(function(){  
			$('.cai-form').on('submit',function(e){			
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
		});
		
		
		$(function(){  
			$('.ori-form').on('submit',function(e){			
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
		});
		
		/* academic and training section */
		
		$(function(){

		    
			$('.btn-add-aca').on('click',function(e){ 
				 $(".div_aca_form").css("display", "block");
			});
			 
			$('.aca-delete').on('click',function(e){
                 var id = $(this).attr('value');				 		
				 $.ajax({
						type:"POST",
						url: './resume-view-step2-academic-delete',
						data:{id:id},
						dataType: 'html',
						success: function(data){
							
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })

			 });
			 		 		 			 
		
			$('.academic-form').on('submit',function(e){		
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
			
			
			$('.btn-add-tr').on('click',function(e){ alert(12);
				 $(".div_tr_form").css("display", "block");
			});
			 
			$('.tr-delete').on('click',function(e){
                 var id = $(this).attr('value');				 		
				 $.ajax({
						type:"POST",
						url: './resume-view-step2-training-delete',
						data:{id:id},
						dataType: 'html',
						success: function(data){
							
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })

			 });
			 		 		 			 
		
			$('.training-form').on('submit',function(e){		
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
			
			
			$('.btn-add-pq').on('click',function(e){ 
				 $(".div_pq_form").css("display", "block");
			});
			 
			$('.pq-delete').on('click',function(e){
                 var id = $(this).attr('value');				 		
				 $.ajax({
						type:"POST",
						url: './resume-view-step2-professional-delete',
						data:{id:id},
						dataType: 'html',
						success: function(data){
							
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })

			 });
			 		 		 			 
		
			$('.professional-form').on('submit',function(e){		
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
			
			
			
		});
		
		
		/* Employment   section */
		
		$(function(){  
		 
			
			$('.btn-add-exp').on('click',function(e){ 
				 $(".div_exp_form").css("display", "block");
			});
			 
			$('.exp-delete').on('click',function(e){
                 var id = $(this).attr('value');				 		
				 $.ajax({
						type:"POST",
						url: './resume-view-step3-employment-delete',
						data:{id:id},
						dataType: 'html',
						success: function(data){
							
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })

			 });
			 
			$('.employment-form').on('submit',function(e){		
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
		});
		
		/* other  section */
		
		
		
	$(function(){  
			$('.specification-form').on('submit',function(e){			
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
			
			$('.btn-add-lan').on('click',function(e){ 
				 $(".div_lan_form").css("display", "block");
			});
			 
			$('.lan-delete').on('click',function(e){
                 var id = $(this).attr('value');				 		
				 $.ajax({
						type:"POST",
						url: './resume-view-step4-language-delete',
						data:{id:id},
						dataType: 'html',
						success: function(data){
							
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })

			 });
			 
			$('.language-form').on('submit',function(e){		
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			}); 
			 
			 
			$('.btn-add-ref').on('click',function(e){ 
				 $(".div_ref_form").css("display", "block");
			});
			 
			$('.ref-delete').on('click',function(e){
                 var id = $(this).attr('value');				 		
				 $.ajax({
						type:"POST",
						url: './resume-view-step4-reference-delete',
						data:{id:id},
						dataType: 'html',
						success: function(data){
							
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })

			 });
			 
			 $('.reference-form').on('submit',function(e){		
				e.preventDefault(e);
					$.ajax({
						type:"POST",
						url: $(this).attr('action'),
						data:$(this).serialize(),
						dataType: 'html',
						success: function(data){
							$(".confirmation-message").css("bottom", "50px");							
							setInterval(function(){ $(".confirmation-message").css("bottom", "-60px"); }, 6000);
						},
						error: function(data){							
						}
				    })
			});
			
			
			
			
			
		});	
		
		
		
		
		
		
		
		
		
		
		
		
		

</script>

<script type="text/javascript">
	 //function getAddHtml()
//	 {
//		 document.getElementById("div_aca").innerHTML="";
//		 var strhtmledu="";
//		 document.getElementById("div_aca").innerHTML=strhtmledu;
//	 }
	 
	 //for training and professional qualification
	 function getAddform(type)
	 {
		 $("#noData_" + type).hide();
		  $("#btnAdd_" + type).prop('disabled', true);
		  document.getElementById("div_"+type).innerHTML="";
	
		if ($("body  #"+type+"ItemNo").last().val()!=null){
			itemno=parseInt($("body  #"+type+"ItemNo").last().val());
			}
		else{
			itemno=-1;
			}
		
		itemno=itemno+1;
		//alert(itemno);
		//if($('#commonForm_tr_'+type+'_'+itemno).length == 0)
		if ((type)=="aca")
		{
			var strhtml="<div class='all-info aca_0'><div class='sub-header'><div id='alertDiv_aca'></div><h4>Academic </h4><div class='edit-tools'><button class='btn edit-btn' ><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'></i>&nbsp;Delete</button></div></div><form class='row academic-form' action='{{url('resume-view-step2-academic-edit-submit')}}' method='post' id='educationFormInsert'><input type='hidden' name='_token' value='Zf3YzpemSyqger1Ugbaf8IqUKlGou3LV9i9kmxdI'><div class='col-md-6'><div class='row'> <div class=\'form-group col-md-12\'><label for=''>Level of Education&nbsp;<abbr title='Required' class='required'></abbr></label><select required='required' class='form-control' name='cboEduLevel' id='cboEduLevel' onchange=getEduTitle(this,'','','');><option value='-1'>Select</option><option value='-3'>PSC/5 pass</option><option value='-2'>JSC/JDC/8 pass</option><option value='1' Selected>Secondary</option><option value='2'>Higher Secondary</option><option value='3'>Diploma</option><option value='4'>Bachelor/Honors</option><option value='5'>Masters</option><option value='6'>PhD (Doctor of Philosophy)</option></select><div class='checkbox btn-form-control' id='showDegree' style='display:none;'><label><input  class='email-notification-checkbox ' style='float:left' type='checkbox' name='chkSwFrist' id='chkSwFrist' >Show this degree in summary view at employer's end</label></div></div><div class=\'education-type form-group col-md-12\'><label for=''>Exam/Degree Title:<abbr title='Required' class='required'></abbr></label><div class='row'><div class='col-md-12' id='divEduType' style='display:block;'><select class='form-control' name='txtExamTitle' id='txtExamTitle' onchange=DisableOtherEduType();><option value='SSC'>SSC</option><option value='O Level'>O Level</option><option value='Dakhil (Madrasah)'>Dakhil (Madrasah)</option><option value='SSC (Vocational)'>SSC (Vocational)</option><option value='others'>Other</option></select></div><div class='col-md-12'><input type='text' class='form-control m-t-10' style='display:none;'name='hiddenOtherEduType' id='hiddenOtherEduType' placeholder='Type exam/degree title' value=''><input type='hidden' value='1' name='educationTypeId' id='educationTypeId'/></div></div></div><input type='hidden' id='hecode' name='hecode' value='-1' /><input type='hidden' name='item_no' value='' id='acaItemNo' /><div class=\'form-group col-md-12\'><label for=''>Concentration/ Major/Group&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' id='txtMajorGroup' name='txtMajorGroup' class=\'form-control autosuggest ui-autocomplete-input\' placeholder='' value='' onClick=SetParam(6,'majorGroup','',7,'');><input type='hidden' name='hidMajor' id='hidMajor' /></div> <div class=\'form-group col-md-12\'><label for=''>Institute Name&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' id='txtInstituteName' name='txtInstituteName' class=\'form-control autosuggest ui-autocomplete-input\' placeholder='' value='' onClick=SetParam(5,'institute','',8,'');> <label class=\'checkbox-inline m-t-10 btn-form-control\'><input type='hidden' name='hiddenInstitute' id='hiddenInstitute' /><input type='checkbox' onclick=ForeignInstituteValueChange('educationFormInsert'); id='chkFInst' name='chkFInst' value='false'> This is a foreign institute </label></div></div></div><div class='col-md-6'><div class='row'><div class=\'form-group col-md-12\'> <label for=''>Result&nbsp;<abbr title='Required' class='required'></abbr></label><select required='required' class='form-control' name='cboResult' id='cboResult' onchange=ShowMarkORGrade('educationFormInsert');><option value='-1' Selected>Select</option><option value='15'>First Division/Class</option><option value='14'>Second  Division/Class</option><option value='13'>Third Division/Class</option><option value='11'>Grade</option><option value='12'>Appeared</option><option value='10'>Enrolled</option><option value='9'>Awarded</option><option value='0'>Do not mention</option><option value='8'>Pass</option> </select><label class=\'checkbox-inline m-t-10 btn-form-control\' id='hideMarks' style='display:none;'><input id='chkHideMarks' name='chkHideMarks'  value='1' type='checkbox' onclick=PopulateMarksOption('educationFormInsert');> Hide Marks/CGPA</label> </div><div class=\'form-group col-md-12 hidden\' id='marksDiv'><label for='' id='labMarks'> Marks&nbsp;(%)&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' id='txtMarks' name='txtMarks' onblur='extractNumber(this,2,false)' onkeyup='extractNumber(this,2,false)' onkeypress='return blockNonNumbers(this, event, true, false);' class='form-control' placeholder='' value=''></div><div class=\'form-group col-md-12 hidden\' id='scaleDiv'> <label for=''>Scale&nbsp;<abbr title='Required' class='required'></abbr></label><input class='form-control' id='txtScale' name='txtScale' onblur='extractNumber(this,2,false)' onkeyup='extractNumber(this,2,false)' onkeypress='return blockNonNumbers(this, event, true, false);' placeholder='' value=''  type='text'></div><div class=\'form-group col-md-12\'><label for='' id='yrsOfPass'><span>Year of Passing</span>&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control' name='cboPassingYear' id='cboPassingYear'><option value='-1' Selected>Year</option><option value='2022'>2022</option><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option></select></div><div class=\'form-group col-md-12\'><label for=''>Duration&nbsp;<small>(Years)</small></label><input type='text' class='form-control' placeholder='' value='' name='txtEduDuration'></div></div></div><div class=\'form-group col-md-12\'> <label for=''>Achievement</label><input type='text' class='form-control' placeholder='' value='' name='txtAchievement'> </div><div class=\'col-md-12 btn-form-control\'> <button type='submit' class='btn btn-primary save'>Save</button><a onClick=closeDiv('aca'); class=\'btn btn-cancel\' href=javascript:void(0);>Close</a></div></form></div>";
		
		}
		else if ((type)=="tr")
		{
			var strhtml="<div class='all-info'><div class='sub-header'><h4>Training</h4><div class='edit-tools'><button class='btn edit-btn'><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'><i class='icon-trush-can'></i>&nbsp;Delete</button></div></div><div id='alertDiv_tr'></div><form class='row view-mode'  action='step_02_update_tr.asp' method='post'><div class='form-group col-md-6'><label for=''>Training Title&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' id='100' placeholder='' name='txtTitle' value=''><input type='hidden' class='form-control' placeholder='' name='txtT_ID' value='-1' ><input type='hidden' class='form-control' placeholder='' id='trItemNo' name='txtTrItemNo' value=''></div><div class='form-group col-md-6'><label for=''>Country&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' id='50' placeholder='' name='txtCountry' value=''></div><div class='form-group col-md-6'><label for=''>Topics Covered</label><input type='text' class='form-control  jqValidate_tr' id='300' placeholder='' name='txtTopic' value=''></div><div class='form-group col-md-6'><label for=''>Training Year&nbsp;<abbr title='Required' class='required'></abbr></label><select class='form-control mandatory jqValidate_tr' name='drpYear' id=''><option value='' selected='selected'>Select</option><option value='2022'>2022</option><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option></select></div><div class='form-group col-md-6'><label for=''>Institute&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' id='80' placeholder='' name='txtInstitute' value=''></div><div class='form-group col-md-6'><label for=''>Duration&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_tr' placeholder='' id='10' name='txtDuration' value=''></div><div class='form-group col-md-6'><label for=''>Location</label><input type='text' class='form-control jqValidate_tr' id='50' placeholder='' name='txtLocation' value=''></div><div class='col-md-12 btn-form-control hidden'><a href=javascript:void(0); class='btn btn-primary save' id='formSubmit'>Save</a><a href=javascript:void(0); onClick=closeDiv('tr'); class='btn btn-cancel'>Close</a></div></form></div>";
		
		}
		else if ((type)=="pq")
		{
			var strhtml="<div class='all-info'><div class='sub-header'><h4>Professional Qualification </h4><div class='edit-tools'><button class='btn edit-btn'><i class='icon-pencil-o'></i>&nbsp;Edit</button><button class='btn delete-btn'><i class='icon-trush-can'></i>&nbsp;Delete</button></div></div><div id='alertDiv_pq'></div><form class='row view-mode' name='pqForm' method='post' action='step_02_update_prq.asp'><div class='col-md-9 col-xs-9'><input type='hidden' name='txtPQ_Code' id='pQ_Code' value='-1'><input type='hidden' id='pqItemNo'  name='txtPqItemNo' value=''></div><div class='col-md-6'><div class='row'><div class='form-group col-md-12'><label for=''>Certification&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' class='form-control mandatory jqValidate_pq' id='80' name='txtCertification' placeholder='' value=''></div><div class='form-group col-md-12'><label for=''>Institute&nbsp;<abbr title='Required' class='required'></abbr></label><input type='text' name='txtInstitute' class='form-control mandatory jqValidate_pq' id='80' placeholder='' value=''></div></div></div><div class='col-md-6'><div class='row'><div class='form-group col-md-12'><label for=''>Location</label> <input type='text' name='txtLocation' class='form-control jqValidate_pq' id='50' placeholder='' value=''></div><div class='form-group col-md-12' style='margin:0;'><label for=''>Certification Period&nbsp;<abbr title='Required' class='required'></abbr></label></div><div class=\'form-group col-md-6\'><input type='text' name='calFromDate' class='form-control  mandatory jqValidate_pq datepicker fromDate' id='1000' placeholder='mm/dd/yyyy' value=''></div><div class=\'form-group col-md-6\'><input type='text' name='calToDate' class='form-control  mandatory jqValidate_pq datepicker toDate greater' id='1000' placeholder='mm/dd/yyyy' value=''></div></div></div><input type='hidden' name='hCurrentDate' id ='hCurrentDate' value='5/9/2017'><div class='col-md-12 btn-form-control hidden'><a id='formSubmit' class='btn btn-primary save' href='javascript:void(0)'>Save</a><a href=javascript:void(0); onClick=closeDiv('pq'); class='btn btn-cancel'>Close</a></div></form></div>";
		
		}
		
		document.getElementById('div_'+type).innerHTML=strhtml;
		$('#div_'+type+'  #'+type+'ItemNo').last().val(itemno);
		if (type != "aca")
		{
			$('#div_'+type+' form').attr('id',type+'Form_'+itemno)
		}
		$('#div_'+type+' .all-info').addClass(type+"_"+itemno);
		$('#div_'+type+' h4').append(" "+(itemno+1));
		
		if ((type)=="aca")
		{
			$('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_02_update_aca.asp','educationFormInsert','aca_"+itemno+"','EN');")
		}
		else if ((type)=="tr")
		{
			$('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_02_update_tr.asp','trForm_"+itemno+"','tr_"+itemno+"','EN','"+itemno+"','tr');")
		}
		else if ((type)=="pq")
		{
			$('#div_'+type+' #formSubmit').attr("onClick","commonUpdate('step_02_update_prq.asp','pqForm_"+itemno+"','pq_"+itemno+"','EN',"+itemno+",'pq');")
		}
		
		 $('#div_'+type).show();
		 $('#div_' + type + ' form').removeClass("view-mode");
		 $('#div_' + type + ' form div').last().removeClass("hidden");
	 	 $('#div_' + type + ' .edit-tools').css("display", "none");
		
		
	 }
	 
	 	
			
			$('body').on('focus',".datepicker", function(){
	
				$(this).datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function(ev){
				$(this).datepicker('hide');
				});
			});
			

 </script>


<script type="text/javascript">

$(document).ready(function(){
	  $("[rel='tooltip']").tooltip();
  });
  
  
  
  
    $(function(){
   
	  $(document).on( 'scroll', function(){
   
		  if ($(window).scrollTop() > 100) {
			  $('.scroll-top-wrapper').addClass('show');
		  } else {
			  $('.scroll-top-wrapper').removeClass('show');
		  }
	  });
  });



  $(function(){
   
	  $(document).on( 'scroll', function(){
   
		  if ($(window).scrollTop() > 100) {
			  $('.scroll-top-wrapper').addClass('show');
		  } else {
			  $('.scroll-top-wrapper').removeClass('show');
		  }
	  });
   
	  $('.scroll-top-wrapper').on('click', scrollToTop);
  });
   
   
   
  function scrollToTop() {
	  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	  element = $('body');
	  offset = element.offset();
	  offsetTop = offset.top;
	  $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
  }
</script>






		
	
@show

{!! config('settings.seo_google_analytics') !!}


</body>
</html>