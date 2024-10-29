(function( $ ) {
      
        'use strict';   
        
        

	$( document ).ready(function() {

        window.sidebar = [];

        $("aside .btBox").each( function( index ) {
            window.sidebar.push($(this));
        });

		if ( $( '#boldthemes_theme_listing-bello-listing-package' ).val() == '' ) {
			$( '#boldthemes_theme_listing-bello-listing-package' ).val( 'bello-default-package' );
		}
		$( '#bello_select_package' ).on( 'change', function() {
			$( '#boldthemes_theme_listing-bello-listing-package' ).val( $( this ).val() );
		});

                // moving widgets before or after content on responsive
                function bt_done_resizing() {
                    if (Modernizr.mq("screen and (min-width:769px)")) {
                          window.sidebar.forEach((arrayItem) => {
                            arrayItem.appendTo("aside");
                          });
                          
                    } else if (Modernizr.mq("screen and (max-width:768px)")) {                                    

                          window.sidebar.slice().reverse().forEach((arrayItem) => {
                            if( arrayItem.hasClass("bt_widget_before") || arrayItem.hasClass("bt_widget_before_map")) {
                                arrayItem.insertBefore('.btArticleContent');
                            }
                            if(arrayItem.hasClass("bt_widget_after") || arrayItem.hasClass("bt_widget_after_map")) {
                                arrayItem.insertAfter('.btArticleContent');
                            }
                         });
                    }
                }
              
                var id;
                $(window).resize(function () {
                    clearTimeout(id);
                    id      = setTimeout(bt_done_resizing, 0);
                });                
                bt_done_resizing();
                
                $(window).load(function () {
                    bt_done_resizing();
                });                
                // /moving widgets before or after content on responsive
               
                $( '#comments-attachment' ).on('change', function(e){
                    var Element     = ((e.originalEvent.srcElement) ? (e.originalEvent.srcElement) : (e.currentTarget)); 
                    var container           = $('.comments-imgs-preview-container');
                    var container_title     = $('.comments-imgs-preview-container-title');
                    container.html(''); 
                    container_title.html(''); 
                    var img;
                    var i = 0;
                    var size = 0;
                    var number = Element.files.length;
                    
                    var number_default  = $( this ).data( 'number' ) ;
                    var size_default    = $( this ).data( 'size' ) ;
                    if ( number > number_default ){
                        alert('Max number of File(s) to upload is ' + number_default);
                        return false;
                    }else{                    
                        for(i; i < Element.files.length; i++) {                       
                            size += Element.files[i].size;
                            var id = 'uploadImg' + i; 
                            if ( i == 0 ) {
                                container.prepend('<img src="" class="comments-imgs-preview-hidden" alt="Uploaded file" id="' + id + '" width="200" style="margin:5px;">');
                            }else{
                                container.append('<img src="" class="comments-imgs-preview-hidden" alt="Uploaded file" id="' + id + '" width="200" style="margin:5px;">');    
                            }
                            img = $("#" + id);                        
                            bt_preview_image(Element.files[i], img);
                            img.removeClass('comments-imgs-preview-hidden');
                        }
                        var size_mb = parseFloat(size / 1048576).toFixed( 2 );
                        if ( Element.files.length > 0 ) {
                            var preview_text = "<p><small>Preview of <strong>" + number + "</strong> file(s) (<strong>" + size_mb + "MB</strong>) to upload.</small></p>";
                            container_title.prepend(preview_text);
                        }
                    }
                    if ( size_mb > size_default ){
                        size = 0;
                        alert('Max totalsize of File(s) to upload is ' + size_default + 'MB. Total size of your images is ' + size_mb + 'MB');
                        container.html(''); 
                        container_title.html(''); 
                        return false;
                    }
                });
                
                function bt_preview_image(element, img)
                {
                    var reader = new FileReader();
                    var file = element, reader;
                    reader.onload  = function(){
                        if (this.readyState == FileReader.DONE) {
                            img.attr('src', this.result).animate({opacity: 1}, 1700);
                        }
                    }
                    reader.readAsDataURL(file);
                }
	});
        
        

})( jQuery );