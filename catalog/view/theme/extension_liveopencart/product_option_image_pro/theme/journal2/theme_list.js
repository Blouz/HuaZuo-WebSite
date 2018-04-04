


poip_list.custom_methods['displayProductListImages.after'] = function(server_response) {
	
	var	products = server_response['products'];
	
	// add empty divs to make height of product blocks the same
	
	poip_common.each(products, function(product, product_id){
		
		var updated_product_ids = [];
		$('img[data-poip-product-id="'+product_id+'"]').each( function(){
			
			if ( $.inArray(product_id, updated_product_ids) == -1 ) {
			
				var max_height = 0;
				
				$container = $(this).closest('.carousel-product, .section-product, .main-products, .box-content').first();
				$container.find('[data-poip_id="poip_img"]').each(function(){
					max_height = Math.max( max_height, $(this).height() );
				});
				
				if ( max_height ) {
					$container.find('[data-poip-product-id]').each(function(){
						if ( $(this).closest('.image').siblings('[data-poip_id="poip_img"]').length ) {
							$(this).closest('.image').siblings('[data-poip_id="poip_img"]').css('height', ''+max_height+'px');
						} else {
							var html='<div data-poip_id="poip_img" style="z-index: 5; margin-top: 5px; position: relative; height: '+max_height+'px;"> </div>';
							$(this).closest('.image').after(html);
						}
						updated_product_ids.push( $(this).attr('data-poip-product-id') );
					});
				}
			}
		});
	});
	
		
	// for the home page box of products (custom-sections) - refresh to increase height automatically to have enough place for option images
	if ( typeof(Journal.equalHeight) == 'function' && $('div[data-poip_id="poip_img"]').closest('.box-content').length ) {
		var $isotope = $('div[data-poip_id="poip_img"]').closest('.product-grid');
		var $filter = $isotope.closest('.custom-sections').find('.box-heading a[data-option-value].selected');
		Journal.equalHeight($isotope.find('.product-grid-item'), '[data-poip_id="poip_img"]');
		if ( typeof($isotope.isotope) == 'function' && $filter.length ) {
			$isotope.isotope({
				filter: '.' + $filter.attr('data-option-value')
			});
		}
	}

}