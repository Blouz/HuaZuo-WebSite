
// execute immedialtely
$('head').append( '<style id="poip_temp_page_loading_style">#product-gallery { height: 0px }</style>' );


function setPoipProductCustomMethods(poip_product) {

	poip_product.custom_methods.getImageElement = function(container_selector, image) {
		var $elem = poip_product.getElement(container_selector+' a[href="'+image+'"]:first');
		if ( !$elem.length ) {
			var $elem = poip_product.getElement(container_selector+' a:first').clone();
			$elem.attr('href', image);
			$elem.find('img').attr('src', image);
		}
		return $elem;
	}
	
	poip_product.custom_methods.displayAdditionalImages = function() {
		$('#poip_temp_page_loading_style').remove();
	}
	
	poip_product.custom_methods['setVisibleImages.instead'] = function(images, counter) {
		
		poip_product.works.set_visible_images = true;
		
		clearTimeout(poip_product.timers.set_visible_images);
		if (!counter) counter = 1;
		if (counter == 1000) {
			poip_product.works.set_visible_images = false;
			return;
		}
		
		var $product_gallery = poip_product.getAdditionalImagesBlock();
		if ( $product_gallery.find('.swiper').length ) { // new slider, found in Journal2 2.8.3 
		
			var carousel_selector = '#product-gallery .swiper-container';
			var carousel_elem = poip_product.getElement(carousel_selector);
			
			if ( carousel_elem.length ) {
				
				if ( !poip_product.getElement('[data-poip="images"]').length ) {
					carousel_elem.parent().parent().before('<div data-poip="images" style="display:none;"></div>');
					carousel_elem.find('a').each(function(){
						poip_product.getElement('[data-poip="images"]').append( poip_common.getOuterHTML($(this)) );
					});
				}
				
				// for popup gallery
				var popup_gallery_selector = '.product-info .image-gallery';
				var $popup_gallery = poip_product.getElement(popup_gallery_selector);
				if ( !poip_product.getElement('[data-poip="popup_images"]').length && $popup_gallery.length ) {
					$popup_gallery.before('<div style="display:none!important" data-poip="popup_images"></div>');
					$popup_gallery.find('a').each( function(){
						poip_product.getElement('[data-poip="popup_images"]').append( poip_common.getOuterHTML($(this)) );
					});
				}
				
				if ( !poip_product.custom_data.set_visible_images_is_called ) {
					if ( document.readyState != "complete" || !carousel_elem.find('.swiper-wrapper').length || typeof(carousel_elem[0]['swiper']) == 'undefined' ) {
						poip_product.timers.set_visible_images = setTimeout(function(){
							poip_product.custom_methods['setVisibleImages.instead'](images, counter+1);
						}, 100);
						return;
					}
					poip_product.custom_data.set_visible_images_is_called = true;
				} else {
					var current_imgs = [];
					carousel_elem.find('a').each( function(){
						current_imgs.push($(this).attr('href'));
					});
					
					if ( current_imgs.toString() == images.toString() ) {
						poip_product.works.set_visible_images = false;
						return; // nothing to change
					}
				}
				
				var carousel_instance = carousel_elem[0]['swiper'];
				
				carousel_instance.removeAllSlides();
				
				poip_common.each(images, function(image){
					var $elem = poip_product.custom_methods.getImageElement('[data-poip="images"]', image);
					carousel_instance.appendSlide(poip_common.getOuterHTML($elem));
				});
				
				//block_gallery.css('height', '');
				
				
				// update the additional popup gallery
				$popup_gallery.html('');
				poip_common.each(images, function(image){
					var $elem = poip_product.custom_methods.getImageElement('[data-poip="popup_images"]', image);
					$popup_gallery.append(poip_common.getOuterHTML($elem));
				});
				$popup_gallery.replaceWith(poip_common.getOuterHTML($popup_gallery));
				
				if (!$('html').hasClass('quickview')) {
					
					$('#lg-intense-zoom').off('click');
					$('.zm-viewer').off('click');
					$('#lg-intense-zoom').die('click');
					$('.zm-viewer').die('click');
					$('#image').parent().off('click');
					$('.gallery-text').off('click');
					
				}
				
				Journal.productPageGallery();
				
				/* additional images click */
				poip_product.getElement('#product-gallery a').off('click');
				poip_product.getElement('#product-gallery .swiper-wrapper a').off('click');
				poip_product.getElement('#product-gallery a').click(function (e) {
				//$('.product-info .image-additional a').click(function (e) {
						e.preventDefault();
						var index = poip_product.getElement('.product-info .image-additional a').index( $(this) );
						var thumb = $(this).find('img').attr('src');
						var image = $(this).attr('href');
						Journal.changeProductImage(thumb, image, index);
						//return false;
				});
				
			}
			
		} else if ( $product_gallery.is('.image-additional-grid') ) { // just images
			
			
			var html = '';
			poip_common.each(images, function(image){
				
				var poip_img = poip_product.getImageBySrc(image, 'popup');
				var title = poip_img.title || poip_product.default_image_title;
				
				html+= '<a class="swiper-slide" href="'+poip_img.popup+'" title="'+title+'" data-poip-visible="true"><img src="'+poip_img.thumb+'" title="'+title+'" alt="'+title+'" itemprop="image"/></a>';
				
			});
			poip_product.getAdditionalImagesBlock().html(html);
			
			poip_product.getAdditionalImagesBlock().find('a').click(function (e) {
					e.preventDefault();
					var index = poip_product.getElement('.product-info .image-additional a').index( $(this) );
					var thumb = $(this).find('img').attr('src');
					var image = $(this).attr('href');
					Journal.changeProductImage(thumb, image, index);
					//return false;
			});
			
			/*
			// use show/hide
			var shown_img = [];
			poip_product.getAdditionalImagesBlock().find('a').each( function(){
				if ( $.inArray( $(this).attr('href'), images) != -1 && $.inArray( $(this).attr('href'), shown_img) == -1) {
					$(this).show();
					$(this).attr('data-poip-visible', true);
					shown_img.push($(this).attr('href'));
				} else {
					$(this).hide();
					$(this).removeAttr('data-poip-visible');
				}
			});
			*/
			
			if ( poip_product.getElement('.popup-gallery').data('magnificPopup') ) {
				poip_product.getElement('.popup-gallery').data('magnificPopup').delegate = 'a.popup-image[data-poip-visible]';
			}
			
		} else { 
			console.log('unknown Journal2 image view');
		}
	
		poip_product.custom_methods.displayAdditionalImages();
		
		poip_product.works.set_visible_images = false;
	}
	
	poip_product.custom_methods['getAdditionalImagesBlock.instead'] = function(){
		return poip_product.getElement("#product-gallery");
	}
	
	poip_product.custom_methods['setMainImage.instead'] = function(image){
		
		var $additional_image = poip_product.getElement('#product-gallery a[href="'+image+'"]:first');
		
		var index = poip_product.getElement('#product-gallery a').index( $additional_image );
		var thumb = poip_product.getElement('#product-gallery a').find('img').attr('src');
		
		Journal.changeProductImage(thumb, image, index);
		
		if ( $('div.zm-viewer').length) {
			
			var poip_img = poip_product.getImageBySrc(image, 'popup');
			if ( poip_img ) {
				poip_product.getElement('#image').data('imagezoom').changeImage(poip_img.popup, poip_img.popup);
			}
		}
	}
	
	
	poip_product.custom_methods['setProductOptionValue.after'] = function(value){
		
		if (poip_product.getElement('.option ul li[data-value='+value+']').length) {
			poip_product.getElement('.option ul li[data-value='+value+']').click();
			return;
		}
	}
	
}