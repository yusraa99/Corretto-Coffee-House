(function($){
    "use strict"; // Start of use strict  
    function animate_scroll(){
        setTimeout(function() {
            $('.elementor-column:not(.elementor-element-edit-mode)').each(function(){
                var w_top = $(window).scrollTop() + $(window).height();
                var e_top = $(this).offset().top;
                var e_end = e_top + $(this).height() + $(window).height();
                if(w_top > e_top && w_top < e_end) $(this).addClass('scroll-animated');
                else $(this).removeClass('scroll-animated');
            })
         },300);
    }
    // menu responsive
    function fix_menu_responsive(){
	    $('.th-navbar-nav-default').each(function(){
	    	if(!$(this).hasClass('default-icon')){
	    		var width = 768;
	    		if($('.elementor-editor-active').length > 0) width = 751;
		    	if($(window).width() < width) $(this).addClass('menu-style-icon');	    		
		    	else $(this).removeClass('menu-style-icon');
		    }
	    })
	}
    // swiper slider
    function el7up_swiper_slider(){
		$('.elth-swiper-slider:not(.swiper-container-initialized)').each(function(){
			var seff  = $(this);
			if($(this).hasClass('elementor-section')){
				if($(this).find('> div').hasClass('swiper-container-initialized')) return false;
				$(this).find('> div.elementor-container.slider-wrap').removeClass('swiper-wrapper');
				if(!$(this).find('> div').hasClass('swiper-container')){
					$(this).find('> div.elementor-container:not(.slider-wrap)').addClass('swiper-wrapper').removeClass('elementor-container');
					$(this).find('> div > .elementor-column').addClass('swiper-slide');
					console.log($(this).attr('class'));
					$(this).find('> div.swiper-wrapper').wrap('<div class="elementor-container swiper-container slider-wrap"></div>');
					seff  = $(this).find('> div');
					var nav_html = $(this).parent().find('.section-slider-nav').html();
					seff.parent().append(nav_html);
					$(this).parent().find('.section-slider-nav').remove();
				}
				$(this).find('> div.elementor-container.slider-wrap').removeClass('swiper-wrapper');
			}
			var slidesPerView = Number($(this).attr('data-items'));
			if(!slidesPerView) slidesPerView = 1;			

			var spaceBetween = Number($(this).attr('data-space'));
			if(!spaceBetween) spaceBetween = 0;

			var slidesPerColumn = Number($(this).attr('data-column'));
			if(!slidesPerColumn) slidesPerColumn = 1;

			var loop = $(this).attr('data-loop');
			if(loop != 'yes') loop = false;
			else loop = true;

			var auto = $(this).attr('data-auto');
			if(auto != 'yes') auto = false;
			else auto = true;			
			if(auto) slidesPerView = 'auto';

			var centeredSlides = $(this).attr('data-center');
			if(centeredSlides != 'yes') centeredSlides = false;
			else centeredSlides = true;

			var effect = $(this).attr('data-effect');

			var breakpoints = {};
			var items_tablet = Number($(this).attr('data-items-tablet'));
			var items_mobile = Number($(this).attr('data-items-mobile'));
			var items_laptop = Number($(this).attr('data-items-laptop'));
			var items_extra_tablet = Number($(this).attr('data-items-extra_tablet'));
			var space_tablet = Number($(this).attr('data-space-tablet'));
			var space_mobile = Number($(this).attr('data-space-mobile'));
			var space_laptop = Number($(this).attr('data-space-laptop'));
			var space_extra_tablet = Number($(this).attr('data-space-extra_tablet'));

			var default_items_tablet;
			var default_items_mobile;
			var default_items_laptop;
			var default_items_extra_tablet;
			var default_items_desktop = slidesPerView;
			if(slidesPerView >=2){
				default_items_laptop = default_items_extra_tablet = default_items_tablet = default_items_mobile = 1;
				default_items_desktop = 1;
			}
			if(slidesPerView >=3){
				default_items_desktop = 2;
				default_items_tablet = default_items_laptop = default_items_extra_tablet = 2;
				default_items_mobile = 1;
			}			
			if(slidesPerView >=4){
				default_items_laptop = default_items_desktop = slidesPerView-1;
				if(centeredSlides == true){
					default_items_laptop = default_items_desktop = slidesPerView-2;
				}
				default_items_extra_tablet = 3;
				default_items_tablet = 2;
				default_items_mobile = 2;
			}
			if(slidesPerView >=5){
				default_items_laptop = default_items_desktop = slidesPerView-1;
				if(centeredSlides == true){
					default_items_laptop = default_items_desktop = slidesPerView-2;
				}
				default_items_extra_tablet = 3;
				default_items_tablet = 3;
				default_items_mobile = 2;
			}

			if(default_items_laptop || default_items_extra_tablet || items_tablet || items_mobile || space_tablet || space_mobile){
				if(auto) items_tablet = items_mobile = 'auto';
				if(items_tablet == '') items_tablet = default_items_tablet;
				if(items_mobile == '') items_mobile = default_items_mobile;
				if(items_laptop == '') items_laptop = default_items_laptop;
				if(items_extra_tablet == '') items_extra_tablet = default_items_extra_tablet;
				if(space_tablet == '') space_tablet = spaceBetween;
				if(space_mobile == '') space_mobile = spaceBetween;
				if(space_laptop == '') space_laptop = spaceBetween;
				if(space_extra_tablet == '') space_extra_tablet = spaceBetween;
				breakpoints = {
					320: {
				      	slidesPerView: items_mobile,
				      	spaceBetween: space_mobile,
				      	centeredSlides: false,
				    },
				    768: {
				      	slidesPerView: items_tablet,
				      	spaceBetween: space_tablet
				    },
				    1024: {
				      	slidesPerView: items_extra_tablet,
				      	spaceBetween: space_extra_tablet
				    },
				    1200: {
				      	slidesPerView: items_extra_tablet,
				      	spaceBetween: space_extra_tablet
				    },				    
				    1366: {
				      	slidesPerView: items_laptop,
				      	spaceBetween: space_laptop
				    },				    
				    1450: {
				      	slidesPerView: slidesPerView,
				      	spaceBetween: spaceBetween
				    }
				}
				slidesPerView = 1;
			}

			var autoplay = false;
			var speed = Number($(this).attr('data-speed'));
			if(speed){
				autoplay = {};
				autoplay.delay = speed;
			}

			var navigation = $(this).attr('data-navigation');
			if(navigation != 'yes') navigation = {};
			else navigation = {
		        	nextEl: $(this).parent().find('.swiper-button-next'),
		            prevEl: $(this).parent().find('.swiper-button-prev'),
		        };

		    var pagination = $(this).attr('data-pagination');
			if(pagination != 'yes') pagination = {};
			else pagination = {
		        	el: $(this).parent().find('.swiper-pagination'),
	        		clickable: true,
		        };

			var swiper = new Swiper(seff, {
		      	slidesPerView: slidesPerView,
		      	spaceBetween: spaceBetween,
		      	slidesPerColumn: slidesPerColumn,
		      	loop: loop,
		      	centeredSlides: centeredSlides,
		      	breakpoints: breakpoints,
		      	autoplay: autoplay,
		        navigation: navigation,
		        pagination: pagination,
		        effect: effect,
		        observer: true,
				observeParents: true,
				setWrapperSize: false
		    });	
		    swiper.on('init', function (swiper) {
			  console.log(swiper);
			});	   	    
		})
	}

    // login popup
    function login_popup(){
    	$('.popup-form').find('input:not(.button)').on('focusin',function(){    		
    		$(this).parent().addClass('input-focus');
    	}).on('focusout',function(){
    		$(this).parent().removeClass('input-focus');
    	})
    	$('.popup-form').find('input:not(.button)').each(function(){
    		if($(this).val()) $(this).parent().addClass('has-value');
    		else $(this).parent().removeClass('has-value');    		
    	})
    	$('.popup-form').find('input:not(.button)').on('keyup',function(){
    		$(this).parent().removeClass('invalid');
			if($(this).val()) $(this).parent().addClass('has-value');
			else $(this).parent().removeClass('has-value');
    	})
    	$('.open-login-form,.login-popup,.register-popup,.lostpass-popup').on('click',function(e){
    		if(!$(this).parents('.disable-popup').length > 0){
	    		e.preventDefault();
	    		$('.login-popup-content-wrap').fadeIn();
	    		if($(this).hasClass('register-popup')) $('.register-link').trigger('click');
	    		if($(this).hasClass('lostpass-popup')) $('.lostpass-link').trigger('click');
	    	}
    	})
    	$('.close-login-form,.popup-overlay').on('click',function(e){
    		e.preventDefault();
    		$('.login-popup-content-wrap').fadeOut();
    	})
    	$('.popup-redirect').on('click',function(e){
    		e.preventDefault();
    		var id = $(this).attr('href');
    		$('.ms-default').fadeOut();
    		$('.popup-form').removeClass('active');
    		$(id).parents('.popup-form').addClass('active');
    	})
    	$('#login_error a').on('click',function(){
    		$('.lostpass-link').trigger('click');
    	})
    }

    // fix append css
    function fix_css_append(){
		var css_data = String($('#th-theme-style-inline-css').html());
		$('#th-theme-style-inline-css').remove();
	    if(css_data) $('head').append('<'+'style id="th-theme-style-inline-css">'+css_data+'</style>');
    }
    // Letter popup
    function letter_popup(){
    	//Popup letter
		var content = $('#boxes-content').html();
		$('#boxes-content').html('');
		if(content) $('body').append('<div id="boxes">'+content+'</div>');
		if($('#boxes').html() != ''){
			var id = '#dialog';	
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(500);	
			$('#mask').fadeTo("slow",0.6);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
	              
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(2000); 	
		
			//if close button is clicked
			$('.window .close-popup').on('click',function (e) {
				//Cancel the link behavior
				e.preventDefault();
				
				$('#mask').hide();
				$('.window').hide();
			});		
			
			//if mask is clicked
			$('#mask').on('click',function () {
				$(this).hide();
				$('.window').hide();
			});
		}
		//End popup letter
    }

    /************** FUNCTION ****************/ 
    function tool_panel(){
    	$('.dm-open').on('click',function(){
    		$('#widget_indexdm').toggleClass('active');
    		$('#indexdm_img').toggleClass('active');
    		return false;
    	})
    	$('.dm-content .item-content').on('hover',function(){
    		if(!$(this).hasClass('active')){
    			$('.img-demo').removeClass('dm-scroll-img');
				setTimeout(function() {
					$('.img-demo').addClass('dm-scroll-img');
				},20);
    			$(this).parent().find('.item-content').removeClass('active');
    			$(this).addClass('active');
    		}
			$('#indexdm_img').addClass('active');
			var img_src = $(this).find('img').attr('data-src');			
			$('.img-demo').css('display','block');
			$('.img-demo').css('background-image','url('+img_src+')');
    	});
    	$('.img-demo').mouseenter(function(){
			$(this).addClass('pause');
	        }).mouseleave(function(){
	        $(this).removeClass('pause');
	    });
    	var default_data = $('#th-theme-style-inline-css').html();    	
    	$('.dm-color').on('click',function(){
    		$(this).parent().find('.dm-color').removeClass('active');
    		$(this).addClass('active');
    		var color,color2,rgb,rgb2;
    		var data = $('.get-data-css').attr('data-css');
    		var sep = new RegExp('##', 'gi');
    		data = data.replace(sep,'"', -1);
    		// Color 1
    		var color_old = $('.get-data-css').attr('data-color');
    		var rgb_old = $('.get-data-css').attr('data-rgb');
    		var color_df = $('.get-data-css').attr('data-colordf');
    		var rgb_df = $('.get-data-css').attr('data-rgbdf');
    		if($(this).attr('data-color')) $('.get-data-css').attr('data-color',$(this).attr('data-color'));
    		if($(this).attr('data-rgb')) $('.get-data-css').attr('data-rgb',$(this).attr('data-rgb'));
    		color = $('.get-data-css').attr('data-color');    		
    		rgb = $('.get-data-css').attr('data-rgb');

    		// Color 2
    		var color2_old = $('.get-data-css').attr('data-color2');
    		var rgb2_old = $('.get-data-css').attr('data-rgb2');
    		var color2_df = $('.get-data-css').attr('data-color2df');
    		var rgb2_df = $('.get-data-css').attr('data-rgb2df');
    		if($(this).attr('data-color2')) $('.get-data-css').attr('data-color2',$(this).attr('data-color2'));
    		if($(this).attr('data-rgb2')) $('.get-data-css').attr('data-rgb2',$(this).attr('data-rgb2'));
    		color2 = $('.get-data-css').attr('data-color2');
    		rgb2 = $('.get-data-css').attr('data-rgb2');
    		if(color && color2){
    			// Color 1
	    		color_df = new RegExp(color_df, 'gi');
	    		rgb_df = new RegExp(rgb_df, 'gi');
	    		data = data.replace(color_df,color, -1);
	    		data = data.replace(rgb_df,rgb, -1);

	    		// Color 2
	    		color2_df = new RegExp(color2_df, 'gi');
	    		rgb2_df = new RegExp(rgb2_df, 'gi');
	    		data = data.replace(color2_df,color2, -1);
	    		data = data.replace(rgb2_df,rgb2, -1);

	    		if($('#th-theme-style-inline-css').length > 0) $('#th-theme-style-inline-css').html(data);
	    		else $('head').append('<'+'style id="th-theme-style-inline-css">'+data+'</style>');
	    	}
	    	else $('#th-theme-style-inline-css').html(default_data);
	    	return false;
    	})
    }
    function auto_width_megamenu(){
    	if($(window).width()>767){
	        var full_width = parseInt($('.container').innerWidth());
	        if(!$('.container').length > 0) full_width = parseInt($('.elementor-container').innerWidth());
	        console.log(full_width);
	        if($('.th-menu-inner').length > 0){
		        var main_menu_width = parseInt($('.th-menu-inner').innerWidth());
		        var main_menu_left = parseInt($('.th-menu-inner').offset().left);
		        $('.th-menu-inner > ul > li.has-mega-menu').each(function(){
		        	if($(this).find('.mega-menu').length > 0){
		        		var mega_menu_width = parseInt($(this).find('.mega-menu').innerWidth());
				        var li_width = parseInt($(this).innerWidth());
				        var seff = $(this);
				        if($('.rtl').length > 0){
				        	setTimeout(function() {
				        		main_menu_left = parseInt($(window).width() - (seff.parents('.th-menu-inner').offset().left + seff.parents('.main-nav').outerWidth()));
					        	var mega_menu_left = $(window).width() - (seff.find('.mega-menu').offset().left + seff.find('.mega-menu').outerWidth());
						        var li_left = $(window).width() - (seff.offset().left + seff.outerWidth());
						        var pos = li_left - mega_menu_left - mega_menu_width/2 + li_width/2;
						        var pos2 = pos + mega_menu_left + mega_menu_width - main_menu_left - main_menu_width;
						        if(pos2 > 0 ) pos = pos - pos2;
						        if(pos > 0 ) $(this).find('.mega-menu').css('right',pos);
						        else{
						        	if($('.container').length > 0) pos  = $(window).width() - ($('.container').offset().left + $('.container').outerWidth()) - main_menu_left + (full_width - mega_menu_width)/2;
						        	else pos  = $(window).width() - ($('.elementor-container').offset().left + $('.elementor-container').outerWidth()) - main_menu_left + (full_width - mega_menu_width)/2;
						        	seff.find('.mega-menu').css('right',pos);
						        }
						        if(mega_menu_width > full_width) seff.find('.mega-menu').css('right',0);
						       }, 2000);
				        }
				        else{
					        var mega_menu_left = $(this).find('.mega-menu').offset().left;
					        var li_left = $(this).offset().left;
					        var pos = li_left - mega_menu_left - mega_menu_width/2 + li_width/2;
					        var pos2 = pos + mega_menu_left + mega_menu_width - main_menu_left - main_menu_width;
					        if(pos2 > 0 ) pos = pos - pos2;
					        if(pos > 0 ) $(this).find('.mega-menu').css('left',pos);
					        else{
					        	if($('.container').length > 0) pos  = $('.container').offset().left  - main_menu_left + (full_width - mega_menu_width)/2;
					        	else pos  = $('.elementor-container').offset().left  - main_menu_left + (full_width - mega_menu_width)/2;
					        	$(this).find('.mega-menu').css('left',pos);
					        }
					        if(mega_menu_width > full_width) seff.find('.mega-menu').css('left',0);
					    }
				    }
		        })
		    }
	    }
    }
    //Detail Gallery
    function parallax_slider(){
    	if($('.parallax-slider').length>0){
			var ot = $('.parallax-slider').offset().top;
			var sh = $('.parallax-slider').height();
			var st = $(window).scrollTop();
			var top = (($(window).scrollTop() - ot) * 0.5) + 'px';
			if(st>ot&&st<ot+sh){
				$('.parallax-slider .item-slider').css({
					'background-position': 'center ' + top
				});
			}else{
				$('.parallax-slider .item-slider').css({
					'background-position': 'center 0'
				});
			}
		}
    }
	function detail_gallery(){
		$('a[data-toggle="tab"]').on('click',function(){
			$(this).parents('.nav-tabs').find('a[data-toggle="tab"]').not(this).removeClass('active');
			$(this).addClass('active');
			var id = $(this).attr('data-target');
			$(id).parents('.tab-content').find('.tab-pane').not(id).removeClass('active');
			$(id).addClass('active');
		})
		// $('.select-box').on('click',function(){
		// 	$(this).find('>select').trigger('click');
		// })
		if($('.detail-gallery').length>0){
			$('.detail-gallery').each(function(){
				var data=$(this).find(".carousel").data();
				var seff = $(this);
				if($(this).find(".carousel").length>0){
					$(this).find(".carousel").jCarouselLite({
						btnNext: $(this).find(".gallery-control .next"),
						btnPrev: $(this).find(".gallery-control .prev"),
						speed: 800,
						visible:data.visible,
						vertical:data.vertical,
					});
				}
				//Elevate Zoom				
				$.removeData($('.detail-gallery .mid img'), 'elevateZoom');//remove zoom instance from image
				$('.zoomContainer').remove();
				if($(window).width()>=768){
					$(this).find('.zoom-style1 .mid img').data('zoom-image', $(this).find('.zoom-style1 .mid img').attr('data-src')).elevateZoom();
					$(this).find('.zoom-style2 .mid img').data('zoom-image', $(this).find('.zoom-style2 .mid img').attr('data-src')).elevateZoom({
						scrollZoom : true
					});
					$(this).find('.zoom-style3 .mid img').data('zoom-image', $(this).find('.zoom-style3 .mid img').attr('data-src')).elevateZoom({
						zoomType: "lens",
						lensShape: "square",
						lensSize: 150,
						borderSize:1,
						containLensZoom:true,
						responsive:true
					});
					$(this).find('.zoom-style4 .mid img').data('zoom-image', $(this).find('.zoom-style4 .mid img').attr('data-src')).elevateZoom({
						zoomType: "inner",
						cursor: "crosshair",
						zoomWindowFadeIn: 500,
						zoomWindowFadeOut: 750
					});
				}
				$(this).find(".carousel a").on('click',function(event) {
					event.preventDefault();
					$(this).parents('.detail-gallery').find(".carousel a").removeClass('active');
					$(this).addClass('active');
					var z_url =  $(this).find('img').attr("data-src");
					var srcfull =  $(this).find('img').attr("data-srcfull");
					var srcset =  $(this).find('img').attr("data-srcset");
					var index =  Number($(this).parent().attr("data-number"));
					$(this).parents('.detail-gallery').find(".image-lightbox").attr("data-index",index-1);
					$(this).parents('.detail-gallery').find(".mid img").attr("src", z_url);
					$(this).parents('.detail-gallery').find(".mid img").attr("srcset", srcset);
					$('.zoomWindow,.zoomLens').css('background-image','url("'+z_url+'")');
					$.removeData($('.detail-gallery .mid img'), 'elevateZoom');//remove zoom instance from image
					$('.zoomContainer').remove();
					if($(window).width()>=768){
						$(this).parents('.detail-gallery').find('.zoom-style1 .mid img').data('zoom-image', srcfull).elevateZoom();
						$(this).parents('.detail-gallery').find('.zoom-style2 .mid img').data('zoom-image', srcfull).elevateZoom({
							scrollZoom : true
						});
						$(this).parents('.detail-gallery').find('.zoom-style3 .mid img').data('zoom-image', srcfull).elevateZoom({
							zoomType: "lens",
							lensShape: "square",
							lensSize: 150,
							borderSize:1,
							containLensZoom:true,
							responsive:true
						});
						$(this).parents('.detail-gallery').find('.zoom-style4 .mid img').data('zoom-image', srcfull).elevateZoom({
							zoomType: "inner",
							cursor: "crosshair",
							zoomWindowFadeIn: 500,
							zoomWindowFadeOut: 750
						});
					}
				});
				$('input[name="variation_id"]').on('change',function(){
					var z_url =  seff.find('.mid img').attr("src");
					$('.zoomWindow,.zoomLens').css('background-image','url("'+z_url+'")');
					$.removeData($('.detail-gallery .mid img'), 'elevateZoom');//remove zoom instance from image
					$('.zoomContainer').remove();
					$('.detail-gallery').find('.zoom-style1 .mid img').elevateZoom();
					$('.detail-gallery').find('.zoom-style2 .mid img').elevateZoom({
						scrollZoom : true
					});
					$('.detail-gallery').find('.zoom-style3 .mid img').elevateZoom({
						zoomType: "lens",
						lensShape: "square",
						lensSize: 150,
						borderSize:1,
						containLensZoom:true,
						responsive:true
					});
					$('.detail-gallery').find('.zoom-style4 .mid img').elevateZoom({
						zoomType: "inner",
						cursor: "crosshair",
						zoomWindowFadeIn: 500,
						zoomWindowFadeOut: 750
					});
				})
				$('.image-lightbox').on('click',function(event){
					event.preventDefault();
                    var gallerys = $(this).attr('data-gallery');
					var index = Number($(this).attr('data-index'));
					var data_thumb = $(this).attr('data-thumb');
					var data_src = $(this).find('img').attr('src');
					var gallerys_array = gallerys.split(',');
                    var data = [];
					var data2 = [];
					var j = 0;
					var k = 0;
					if(gallerys != ''){
						for (var i = 0; i < gallerys_array.length; i++) {
							if(gallerys_array[i] != ''){
                                if(i >= index){
                                	console.log(i);
    								data[j] = {};
    								data[j].href = gallerys_array[i];
    								j++;
                                }
                                else{
                                    data2[k] = {};
                                    data2[k].href = gallerys_array[i];
                                    k++;
                                }
							}
						};
					}
                    if(data2.length>0) data = data.concat(data2);
                    if(data_thumb){
                    	var add_thumb = [];
                    	add_thumb[0] = {};
                    	add_thumb[0].href = data_thumb;
                    	if(data_thumb == data_src) data = add_thumb.concat(data);
                    	else data = data.concat(add_thumb);
                    }
					$.fancybox.open(data);
				})
			});
		}
	}
    
    // Menu fixed
    function fixed_header(){
        var menu_element;
        menu_element = $('.main-nav:not(.menu-fixed-content)').closest('.vc_row');
        menu_element.removeClass('vc_hidden');
        if($('.menu-sticky-on').length > 0 && $(window).width()>1024){           
            var menu_class = $('.main-nav').attr('class');
            var header_height = $("#header").height()+100;
            var ht = header_height + 150;
            var st = $(window).scrollTop();

            if(!menu_element.hasClass('header-fixed') && menu_element.attr('data-vc-stretch-content') == 'true') menu_element.addClass('header-fixed');
            if(st>header_height){               
                if(menu_element.attr('data-vc-stretch-content') == 'true'){
                    if(st > ht) menu_element.addClass('active');
                    else menu_element.removeClass('active');
                    menu_element.addClass('fixed-header');
                    $('body').addClass('menu-on-fixed');
                }
                else{
                    if(st > ht) menu_element.parent().parent().addClass('active');
                    else menu_element.parent().parent().removeClass('active');
                    if(!menu_element.parent().parent().hasClass('fixed-header')){
                        menu_element.wrap( "<div class='menu-fixed-content fixed-header "+menu_class+"'><div class='container'></div></div>" );
                    }
                    $('body').removeClass('menu-on-fixed');
                    menu_element.removeClass('vc_hidden');
                }
            }else{
                menu_element.removeClass('active');
                if(menu_element.attr('data-vc-stretch-content') == 'true') menu_element.removeClass('fixed-header');
                else{
                    if(menu_element.parent().parent().hasClass('fixed-header')){
                        menu_element.unwrap();
                        menu_element.unwrap();                        
                    }
                }
                $('body').removeClass('menu-on-fixed');
                menu_element.removeClass('vc_hidden');
            }
        }
        else{
            menu_element.removeClass('active');
            if(menu_element.attr('data-vc-stretch-content') == 'true') menu_element.removeClass('fixed-header').removeClass('vc_hidden');
            else{
                if(menu_element.parent().parent().hasClass('fixed-header')){
                    menu_element.unwrap();
                    menu_element.unwrap();
                    menu_element.removeClass('vc_hidden');
                }
            }
        }
    }
    //Menu Responsive
    function fix_click_menu(){
    	if($(window).width()<768){
			if($('.btn-toggle-mobile-menu').length>0){
				return false;
			}
			else $('.main-nav li.menu-item-has-children,.main-nav li.has-mega-menu').append('<span class="btn-toggle-mobile-menu"></span>');
		}
		else{
			$('.btn-toggle-mobile-menu').remove();
			$('.main-nav .sub-menu,.main-nav .mega-menu').slideDown('fast');
		}
    }
	function rep_menu(){
		$('.toggle-mobile-menu').on('click',function(event){
			event.preventDefault();
			$(this).parents('.main-nav').toggleClass('active');
		});
		$('.main-nav').on('click','.btn-toggle-mobile-menu',function(event){
			$(this).toggleClass('active');
			$(this).prev().stop(true,false).slideToggle('fast');
		});
		$('.main-nav').on('click','.menu-item > a[href="#"]',function(event){
			event.preventDefault();
			$(this).toggleClass('active');
			$(this).next().stop(true,false).slideToggle('fast');
		});
	}

    function background(){
		$('.bg-slider .item-slider').each(function(){
			$(this).find('.banner-thumb a img').css('height',$(this).find('.banner-thumb a img').attr('height'));
			var src=$(this).find('.banner-thumb a img').attr('src');
			$(this).css('background-image','url("'+src+'")');
		});	
	}
    
    function fix_variable_product(){
    	//Fix product variable thumb    	
        $('body .variations_form select').on('change',function(){
            var id = $('input[name="variation_id"]').val();
            if(id){
                $('.product-gallery #bx-pager').find('a[data-variation_id="'+id+'"]').trigger( 'click' );
            }
        })
        // variable product
        if($('.wrap-attr-product1.special').length > 0){
            $('.attr-filter ul li a').on('click',function(){
                event.preventDefault();
                $(this).parents('ul').find('li').removeClass('active');
                $(this).parent().addClass('active');
                var attribute = $(this).parent().attr('data-attribute');
                var id = $(this).parents('ul').attr('data-attribute-id');
                $('#'+id).val(attribute);
                $('#'+id).trigger( 'change' );
                $('#'+id).trigger( 'focusin' );
                return false;
            })
            $('.attr-hover-box').on('hover',function(){
                var seff = $(this);
                var old_html = $(this).find('ul').html();
                var current_val = $(this).find('ul li.active').attr('data-attribute');
                $(this).next().find('select').trigger( 'focusin' );
                var content = '';
                $(this).next().find('select').find('option').each(function(){
                    var val = $(this).attr('value');
                    var title = $(this).html();
                    var el_class = '';
                    if(current_val == val) el_class = ' class="active"';
                    if(val != ''){
                        content += '<li'+el_class+' data-attribute="'+val+'"><a href="#" class="bgcolor-'+val+'"><span></span>'+title+'</a></li>';
                    }
                })
                if(old_html != content) $(this).find('ul').html(content);
            })
            $('body .reset_variations').on('click',function(){
                $('.attr-hover-box').each(function(){
                    var seff = $(this);
                    var old_html = $(this).find('ul').html();
                    var current_val = $(this).find('ul li.active').attr('data-attribute');
                    $(this).next().find('select').trigger( 'focusin' );
                    var content = '';
                    $(this).next().find('select').find('option').each(function(){
                        var val = $(this).attr('value');
                        var title = $(this).html();
                        var el_class = '';
                        if(current_val == val) el_class = ' class="active"';
                        if(val != ''){
	                        content += '<li'+el_class+' data-attribute="'+val+'"><a href="#" class="bgcolor-'+val+'"><span></span>'+title+'</a></li>';
	                    }
                    })
                    if(old_html != content) $(this).find('ul').html(content);
                    $(this).find('ul li').removeClass('active');
                })
            })
        }
        //end
    }
    function beforeAction(event){
    	var element   = event.target;
    	var i = 0;
    	$(element).find('.owl-item').each(function(){
			$(this).find('[data-animated]').each(function(){
				var anime = $(this).attr('data-animated');
				if(event.item.index == i){
					$(this).addClass(anime);
					$(this).addClass('animated');
				}
				else{
					$(this).removeClass(anime);
					$(this).removeClass('animated');
				}
			})
			i++;
		})
	}
    function afterAction(event){
    	var element   = event.target;
		$(element).find('.owl-item').each(function(){
			var check = $(this).hasClass('active');
			if(check==true){
				$(this).attr('class','owl-item active');
				$(this).find('[data-animated]').each(function(){
					var anime = $(this).attr('data-animated');
					$(this).addClass(anime);
					$(this).addClass('animated');
				});
			}else{
				$(this).attr('class','owl-item');
				$(this).find('[data-animated]').each(function(){
					var anime = $(this).attr('data-animated');
					$(this).removeClass(anime);
					$(this).removeClass('animated');
				});
			}
		})
	}
    function th_qty_click(){
    	//QUANTITY CLICK
		$("body").on("click",".detail-qty .qty-up",function(){
            var min = $(this).prev().attr("min");
            var max = $(this).prev().attr("max");
            var step = $(this).prev().attr("step");
            if(step === undefined) step = 1;
            if(max !==undefined && Number($(this).prev().val())< Number(max) || max === undefined || max === ''){ 
                if(step!='') $(this).prev().val(Number($(this).prev().val())+Number(step));
            }
            $( 'div.woocommerce form .button[name="update_cart"]' ).prop( 'disabled', false );
            return false;
        })
        $("body").on("click",".detail-qty .qty-down",function(){
            var min = $(this).next().attr("min");
            var max = $(this).next().attr("max");
            var step = $(this).next().attr("step");
            if(step === undefined) step = 1;
            if(Number($(this).next().val()) > Number(min)){
	            if(min !==undefined && $(this).next().val()>min || min === undefined || min === ''){
	                if(step!='') $(this).next().val(Number($(this).next().val())-Number(step));
	            }
	        }
	        $( 'div.woocommerce form .button[name="update_cart"]' ).prop( 'disabled', false );
	        return false;
        })
        $("body").on("keyup change","input.qty-val",function(){
        	$( 'div.woocommerce form .button[name="update_cart"]' ).prop( 'disabled', false );
        })
		//END
    }
    
    function th_owl_slider(){
    	//Carousel Slider
		if($('.sv-slider').length>0){
			var rtl = false;
			if($('.rtl-enable').length>0) rtl = true;
			$('.sv-slider').each(function(){
				var seff = $(this);
				var item = seff.attr('data-item');
				var speed = seff.attr('data-speed');
				var itemres = seff.attr('data-itemres');
				var nav = seff.attr('data-navigation');
				var pag = seff.attr('data-pagination');
				var text_prev = seff.attr('data-prev');
				var text_next = seff.attr('data-next');
				var margin = seff.attr('data-margin');
				var stage_padding = seff.attr('data-stage_padding');
				var start_position = seff.attr('data-start_position');
				var merge = seff.attr('data-merge');
				var loop = seff.attr('data-loop');
				var mousewheel = seff.attr('data-mousewheel');
				var animation_out = seff.attr('data-animation_out');
				var animation_in = seff.attr('data-animation_in');
				if(animation_in == 'none' || animation_in == undefined) animation_in = '';
				if(animation_out == 'none' || animation_out == undefined) animation_out = '';
				console.log(animation_in);
				var pagination = false, navigation= false, singleItem = false;
				var autoplay;
				var autoplaytimeout = 5000;
				if(!margin) margin = 0;
				if(!stage_padding) stage_padding = 0;
				if(!start_position) start_position = 0;
				if(!merge) merge = false; else merge = true;
				if(!loop) loop = false; else loop = true;
				if(!mousewheel) mousewheel = false; else mousewheel = true;
				if(speed != ''){
					autoplay = true;
					autoplaytimeout = parseInt(speed, 10);
				}
				else autoplay = false;
				// Navigation
				if(nav) navigation = true;
				if(pag) pagination = true;
				var prev_text = '<i class="la la-angle-left" aria-hidden="true"></i>';
				var next_text = '<i class="la la-angle-right" aria-hidden="true"></i>';
				if(text_prev) prev_text = text_prev;
				if(text_next) next_text = text_next;
				if(itemres == '' || itemres === undefined){
					if(item == '1') itemres = '0:1,480:1,768:1,1200:1';
					if(item == '2') itemres = '0:1,480:1,768:2,1200:2';
					if(item == '3') itemres = '0:1,480:2,768:2,992:3';
					if(item == '4') itemres = '0:1,480:2,840:3,1200:4';
					if(item >= '5') itemres = '0:1,480:2,768:3,1024:4,1200:'+item;
				}
				itemres = itemres.split(',');
				var responsive = {};
				var i;
				for (i = 0; i < itemres.length; i++) { 
				    itemres[i] = itemres[i].split(':');
				    var res_dv = {};
				    res_dv.items = parseInt(itemres[i][1], 10);
				    responsive[itemres[i][0]] = res_dv;
				}
				seff.owlCarousel({
					items: parseInt(item, 10),
				    margin: parseInt(margin, 10),
				    loop: loop,
				    stagePadding: parseInt(stage_padding, 10),
				    startPosition: parseInt(start_position, 10),
				    nav:navigation,
				    navText: [prev_text,next_text],
				    responsive: responsive,
				    autoplay: autoplay,
				    autoplayTimeout: autoplaytimeout,
				    animateOut: animation_out,
				    animateIn: animation_in,
				    dots: pagination,
				    onTranslate: beforeAction,
				    onInitialize:background,
				    rtl: rtl,
				    rewind: true,
				});
				if(mousewheel){
					seff.on('mousewheel', '.owl-stage', function (e) {
					    if (e.deltaY>0) {
					        seff.trigger('next.owl');
					    } else {
					        seff.trigger('prev.owl');
					    }
					    e.preventDefault();
					});
				}
			});			
		}
    }

    function th_all_slider(seff,number){
    	if(!seff) seff = $('.smart-slider');
    	if(!number) number = '';
    	//Carousel Slider
		if(seff.length>0){
			var rtl = false;
			if($('.rtl-enable').length>0) rtl = true;
			seff.each(function(){
				var seff = $(this);
				var item = seff.attr('data-item');
				var speed = seff.attr('data-speed');
				var itemres = seff.attr('data-itemres');
				var nav = seff.attr('data-navigation');
				var pag = seff.attr('data-pagination');
				var text_prev = seff.attr('data-prev');
				var text_next = seff.attr('data-next');
				var margin = seff.attr('data-margin');
				var stage_padding = seff.attr('data-stage_padding');
				var start_position = seff.attr('data-start_position');
				var merge = seff.attr('data-merge');
				var loop = seff.attr('data-loop');
				var mousewheel = seff.attr('data-mousewheel');
				var animation_out = seff.attr('data-animation_out');
				var animation_in = seff.attr('data-animation_in');
				if(animation_in == 'none' || animation_in == undefined) animation_in = '';
				if(animation_out == 'none' || animation_out == undefined) animation_out = '';
				var pagination = false, navigation= false, singleItem = false;
				var autoplay;
				var autoplaytimeout = 5000;
				if(!margin) margin = 0;
				if(!stage_padding) stage_padding = 0;
				if(!start_position) start_position = 0;
				if(!merge) merge = false; else merge = true;
				if(!loop) loop = false; else loop = true;
				if(!mousewheel) mousewheel = false; else mousewheel = true;
				if(speed != ''){
					autoplay = true;
					autoplaytimeout = parseInt(speed, 10);
				}
				else autoplay = false;
				// Navigation
				if(nav) navigation = true;
				if(pag) pagination = true;
				var prev_text = '<i class="la la-angle-left" aria-hidden="true"></i>';
				var next_text = '<i class="la la-angle-right" aria-hidden="true"></i>';
				if(text_prev) prev_text = text_prev;
				if(text_next) next_text = text_next;
				if(itemres == '' || itemres === undefined){
					if(item == '1') itemres = '0:1,480:1,768:1,1200:1';
					if(item == '2') itemres = '0:1,480:1,768:2,1200:2';
					if(item == '3') itemres = '0:1,480:2,768:2,992:3';
					if(item == '4') itemres = '0:1,480:2,840:3,1200:4';
					if(item >= '5') itemres = '0:1,480:2,768:3,1024:4,1200:'+item;
				}
				itemres = itemres.split(',');
				var responsive = {};
				var i;
				for (i = 0; i < itemres.length; i++) { 
				    itemres[i] = itemres[i].split(':');
				    var res_dv = {};
				    res_dv.items = parseInt(itemres[i][1], 10);
				    responsive[itemres[i][0]] = res_dv;
				}
				seff.owlCarousel({
					items: parseInt(item, 10),
				    margin: parseInt(margin, 10),
				    loop: loop,
				    stagePadding: parseInt(stage_padding, 10),
				    startPosition: parseInt(start_position, 10),
				    nav:navigation,
				    navText: [prev_text,next_text],
				    responsive: responsive,
				    autoplay: autoplay,
				    autoplayTimeout: autoplaytimeout,
				    animateOut: animation_out,
				    animateIn: animation_in,
				    dots: pagination,
				    onTranslate: beforeAction,
				    onInitialize:background,
				    rtl: rtl,
				    rewind: true,
				});
				if(mousewheel){
					seff.on('mousewheel', '.owl-stage', function (e) {
					    if (e.deltaY>0) {
					        seff.trigger('next.owl');
					    } else {
					        seff.trigger('prev.owl');
					    }
					    e.preventDefault();
					});
				}
			});			
		}
    }

    /************ END FUNCTION **************/  
	$(document).ready(function(){
		//Menu Responsive 
		letter_popup();
		parallax_slider();
		fix_click_menu();
		rep_menu();
		th_qty_click();
		detail_gallery();
		tool_panel();
		$('select').each(function(){
			$(this).wrap('<div class="select-wrap"></div>');
		})
		
		$('body').on('click','.toggler-icon',function(){
			$(this).toggleClass('menu-open');
			$(this).parents('.th-menu-container').find('.th-menu-inner').toggleClass('menu-side-active');
			$(this).parents('.th-menu-container').find('.th-navbar-nav').toggleClass('th-scrollbar');
		})
		$('body').on('click','.close-menu',function(){
			$(this).parents('.th-menu-container').find('.toggler-icon').removeClass('menu-open');
			$(this).parents('.th-menu-container').find('.th-menu-inner').removeClass('menu-side-active');
			$(this).parents('.th-menu-container').find('.th-navbar-nav').removeClass('th-scrollbar');
		})
		$('body').on('click','.menu-style-icon .indicator-icon',function(){
			$(this).parent().parent().toggleClass('sub-open');
			$(this).parent().parent().find('.sub-menu').slideToggle();
			$(this).parent().parent().find('.mega-menu').slideToggle();
			return false;
		})
		// Filter click
		$('body').on('click','.btn-filter',function(){
			$(this).parents('.filter-product').toggleClass('active');
			return false;
		})
		//Filter Price
		if($('.range-filter').length>0){
			$('.range-filter').each(function(){
				var self = $(this);
				var min_price = Number(self.find('.slider-range').attr( 'data-min' ));
				var max_price = Number(self.find('.slider-range').attr( 'data-max' ));
				self.find( ".slider-range" ).slider({
					range: true,
					min: min_price,
					max: max_price,
					values: [ min_price, max_price ],
					slide: function( event, ui ) {
						self.find( '.element-get-min' ).html(ui.values[ 0 ]);
						self.find( '.element-get-max' ).html(ui.values[ 1 ]);
					}
				});
			});
		}
		//fix row bg
		$('.fix-row-bg').each(function(){
			var row_class = $(this).attr('class');
			row_class = row_class.replace('vc_row wpb_row','');
			$(this).removeClass(row_class);
			$(this).removeClass('fix-row-bg');
			$(this).wrap('<div class="wrap-vc-row'+row_class+'"></div>');
		})
		//Cat search
		$('.select-cat-search').on('click',function(event){
			event.preventDefault();
			$(this).parents('ul').find('li').removeClass('active');
			$(this).parent().addClass('active');
			var x = $(this).attr('data-filter');
			if(x){
				x = x.replace('.','');
				$('.cat-value').val(x);
			}
			else $('.cat-value').val('');
			$('.current-search-cat').text($(this).text());
		});
		// aside-box cart
		$('.close-minicart').on('click',function(event){
			$('body').removeClass('overlay');
			$('.mini-cart-content').removeClass('active');
		});
		$('.mini-cart-box.aside-box .mini-cart-link').on('click',function(event){
			event.preventDefault();
			event.stopPropagation();
			$('body').addClass('overlay');
			$(this).next().addClass('active');
		});
		//Count item cart
        if($(".get-cart-number").length){
            var count_cart_item = $(".get-cart-number").val();
            $(".set-cart-number").html(count_cart_item);
        }

		//Fix mailchimp
        // $('.sv-mailchimp-form').each(function(){
        //     var placeholder = $(this).attr('data-placeholder');
        //     var submit = $(this).attr('data-submit');
        //     if(placeholder) $(this).find('input[name="EMAIL"]').attr('placeholder',placeholder);
        //     if(submit) $(this).find('input[type="submit"]').val(submit);
        // })      
        //Back To Top
		$('.scroll-top').on('click',function(event){
			event.preventDefault();
			$('html, body').animate({scrollTop:0}, 'slow');
		});	
		auto_width_megamenu();
	});

	$(window).load(function(){
		animate_scroll();
		setTimeout(function() {           
			el7up_swiper_slider();
        },300);
		fix_css_append();
		login_popup();
		fix_menu_responsive();
		$('#image').on('change',function(){
			var preview = $('.user-avatar img');
		  	var file    = document.querySelector('input[type=file]').files[0];
		  	var reader  = new FileReader();
		  	if(file.size < 2048000){
			  	reader.onloadend = function () {
			    	preview.attr('src',reader.result);
			  	}

			  	if (file) {
			    	reader.readAsDataURL(file);
			  	} else {
			    	preview.src = "";
			  	}
			 }
			 else $('.popup-notifi').fadeIn();
		})
		$('.popup-notifi .eicon-close,.popup-notifi').on('click',function(){
			$('.popup-notifi').fadeOut();
		})
		//Pre Load
		$('body').removeClass('preload');
		// Fix height slider
		$('.banner-slider .banner-info').each(function(){
			if($(this).find('.slider-content-text').length > 0){
				var height_content = $(this).find('.slider-content-text')["0"].clientHeight;
				$(this).css('height',height_content);
			}
		})
		// menu fixed onload
		$("#header").css('min-height','');
        if($(window).width()>1024){
            $("#header").css('min-height',$("#header").height());
            fixed_header();
        }
        else{
            $("#header").css('min-height','');
        }
		//menu fix
		if($(window).width() >= 768){
			var c_width = $(window).width();
			$('.main-nav ul ul ul.sub-menu').each(function(){
				var left = $(this).offset().left;
				if(c_width - left < 180){
					$(this).css({"left": "-100%"})
				}
				if(left < 180){
					$(this).css({"left": "100%"})
				}
			})
		}

	});// End load

	/* ---------------------------------------------
     Scripts resize
     --------------------------------------------- */
    var w_width = $(window).width();
    $(window).resize(function(){
    	var crWidth = $(window).width();
    	if(crWidth != w_width){
    		auto_width_megamenu();
    		fix_menu_responsive();
    	}
    	fix_click_menu();

    	if($('#dialog').length > 0){
	    	// popup resize
			var id = '#dialog';	
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
	              
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2);
			$(id).css('left', winW/2-$(id).width()/2);
		}
        $("#header").css('min-height','');
    });

	jQuery(window).scroll(function(){
		animate_scroll();
		fixed_header();
		parallax_slider();
		if($(window).width()>1024){
            $("#header").css('min-height',$("#header").height());
            fixed_header();
        }
        else{
            $("#header").css('min-height','');
        }
		//Scroll Top
		if($(this).scrollTop()>$(this).height()){
			$('.scroll-top').addClass('active');
		}else{
			$('.scroll-top').removeClass('active');
		}
	});// End Scroll

	$.fn.tawcvs_variation_swatches_form = function () {
        return this.each( function() {
            var $form = $( this ),
                clicked = null,
                selected = [];

            $form
                .addClass( 'swatches-support' )
                .on( 'click', '.swatch', function ( e ) {
                    e.preventDefault();
                    var $el = $( this ),
                        $select = $el.closest( '.value' ).find( 'select' ),
                        attribute_name = $select.data( 'attribute_name' ) || $select.attr( 'name' ),
                        value = $el.data( 'value' );

                    $select.trigger( 'focusin' );

                    // Check if this combination is available
                    if ( ! $select.find( 'option[value="' + value + '"]' ).length ) {
                        $el.siblings( '.swatch' ).removeClass( 'selected' );
                        $select.val( '' ).change();
                        $form.trigger( 'tawcvs_no_matching_variations', [$el] );
                        return;
                    }

                    clicked = attribute_name;

                    if ( selected.indexOf( attribute_name ) === -1 ) {
                        selected.push(attribute_name);
                    }

                    if ( $el.hasClass( 'selected' ) ) {
                        $select.val( '' );
                        $el.removeClass( 'selected' );

                        delete selected[selected.indexOf(attribute_name)];
                    } else {
                        $el.addClass( 'selected' ).siblings( '.selected' ).removeClass( 'selected' );
                        $select.val( value );
                    }

                    $select.change();
                } )
                .on( 'click', '.reset_variations', function () {
                    $( this ).closest( '.variations_form' ).find( '.swatch.selected' ).removeClass( 'selected' );
                    selected = [];
                } )
                .on( 'tawcvs_no_matching_variations', function() {
                    window.alert( wc_add_to_cart_variation_params.i18n_no_matching_variations_text );
                } );
        } );
    };

    $( function () {
        $( '.variations_form' ).tawcvs_variation_swatches_form();
        $( document.body ).trigger( 'tawcvs_initialized' );
    } );

})(jQuery);