(function ($) {

	//new WOW().init();

	jQuery(window).load(function() { 
            //jQuery("#preloader").delay(100).fadeOut("slow");
            //jQuery("#load").delay(100).fadeOut("slow");
	});

	//$('#container').imagesLoaded( function() {
		// images have loaded
		//alert("foobar");
	//});	
	
	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                //$(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                //$(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
	});
	
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
		$('.page-scroll a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});
				
	$('a.back').click(function(){
		$(".vacancy-form-holder").hide({duration:'220',easing:'easeOutExpo'});
		$('.vacancy-list-holder').show({duration:'220',easing:'easeOutExpo'});				
		return false;
	});
	
       
    
    $('#fileupload').fileupload({
        url: $(this).attr('data-url'),
        dataType: 'json',
        //acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        //maxFileSize:2000000, // 2000 KB
        sequentialUploads: false,
        add: function (e, data) {
                var uploadErrors = [];
                //var acceptFileTypes = /\/(pdf|xml)$/i;
                var acceptFileTypes = /(\.|\/)(gif|jpe?g|png)$/i;
                if(data.originalFiles[0]['type'].length && !acceptFileTypes.test(data.originalFiles[0]['type'])) {
                        uploadErrors.push('Invalid file type, aborted');
                }
                //console.log(data.originalFiles[0]['size']) ;
                if(data.originalFiles[0]['size'] > 5000000) {
                        uploadErrors.push('Filesize is too big');
                }
                if(uploadErrors.length > 0) {
                        alert(uploadErrors.join("\n"));
                } else {
                        //data.context = $('<p/>').text('Subiendo...').appendTo('.img_holder_xhr');
                        data.submit();
                }
        },
        done: function (e, data) {
            e.preventDefault();
            $.each(data.result.files, function (index, file) {	
                //alert(file.error);
                $('.img-thumbnail a.colorbox')
                .prop('href',base_URL + file.url).empty()
                .html('<img src="'+base_URL + file.thumbnailUrl+'"//>');
                $('input[name="image_temp"]').attr('value',file.name);
            });			
            $('.progress').hide();			
            $('.button-submit').show({duration:'260',easing:'easeInOutBack'});
        },
        progressall: function (e, data) {
			e.preventDefault();
            var progress = parseInt(data.loaded / data.total * 100, 10);
			$('.progress').show();
            $('.progress .progress-bar').css(
                'width',
                progress + '%'
            ).html(progress+'% Sedang mengunggah, mohon menunggu..');
            $('.button-submit').hide({duration:'260',easing:'easeInOutBack'});
        }
    })
    .on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
                var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
            //console.log(files);
        });
    })
    .prop('disabled', !$.support.fileInput)
    .parent().addClass($.support.fileInput ? undefined : 'disabled');

    $('#fileupload').bind('fileuploadprogress', function (e, data) {
            // Log the current bitrate for this upload:
            //console.log(data.bitrate);
    });
    
    if ($(".colorbox").attr('href') !== '#') {
        $(".colorbox").colorbox({
                rel: 'nofollow',
                width:'640',
                maxWidth:'640px',
                innerWidth:'640px',
                preloading:false
        });
    }
    
    $('.datepicker').datepicker({format: 'dd/mm/yyyy'});
    $('.popover_bootbox').click(function(){
        var image = $(this).attr('rel');
        var html = '<div class="text-center"><img class="img-responsive img-center" src="'+image+'" alt="'+image+'" width="100%"/></div>';
        bootbox.alert({message:html,closeButton:false});
    });
    $(document).on('click', '.bootbox', function (event) {
        bootbox.hideAll();
    });
    $('#form-register').submit(function(e) {
        e.preventDefault();
        var url = base_URL + 'account/register/';	
        $.colorbox({html:'<div class="text-center"><br/><img width="40" height="40" src="'+base_URL+'assets/public/img/spinner.gif"/><br/><br/><h4>Sedang Mengirim</h4></div>',width:200,height:200,preloading:false,scrolling:false,transition:'fade',overlayClose:false,escKey:false,closeButton:false});
        $.ajax({
            type: "POST",
            url: url,
            data: $(this).serializeArray(),
            //cache: true,
            //async: true,
            timeout: 8000,
            dataType: "JSON",
            success: function(json) {
				// Check returned data from Parse JSON result
                if (json.result === 'OK' && json.label !== '') {
				  location.href = json.label;
                } else if (json.errors !== undefined) {
					var html = '';
					$.each(json.errors, function (index, error) {	
						html += error;
					});
					bootbox.alert({message:html,closeButton:false});
				}			
                // Empty loader
                //$('#result_callback').empty();
                // Empty loader image
                //$('#loader').html('');
            },
            complete: function(message) { 
				$.colorbox.close();
            },
            error: function(x,message,t) { 
                if(message==="timeout") {
					console.log("got timeout");
                } else {
					//alert(message);
                }	
            }
		});    
    });  
    
    $('.reload_captcha').click(function() {
        var url	= $(this).attr('rel');		
        $.ajax({
            type: "POST",
            url: url,
            cache: false,
            async: false,	
            success: function(msg){
                $('.reload_captcha').empty().html(msg);
                // Need random for browser recache
                img = $('.reload_captcha').find('img');
                src = img.attr('src');
                ran	= img.fadeOut(50).fadeIn(50).attr('src', src + '?=' + Math.random());
            },
            complete: function(msg) {},
            error: function(msg) {}
        });
        return false;	
    });
        
})(jQuery);



function popupCenter(url, title, w, h) {
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 