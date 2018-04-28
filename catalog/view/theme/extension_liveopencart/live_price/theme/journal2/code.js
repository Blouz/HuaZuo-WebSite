
function liveprice_getCustomMethodsOfTheme( extension ) {
	
	var methods = {
		
		init : function() {
			// disabled theme function completely
			Journal.updateProductPrice = function(){
				$.ajax({
					url: 'index.php?route=journal2/ajax/price',
					type: 'post',
					data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
					dataType: 'json',
					success: function (json) {
						var product_id = $('.product-info input[type=\'hidden\'][name="product_id"]').val();
						if ( product_id && liveopencart.related_options_instances && liveopencart.related_options_instances.length ) {
							for ( var ro_instance_i in liveopencart.related_options_instances ) {
								if ( !liveopencart.related_options_instances.hasOwnProperty(ro_instance_i) ) continue;
								var ro_instance = liveopencart.related_options_instances[ro_instance_i];
								if ( ro_instance.product_id && ro_instance.product_id == product_id ) {
									if ( ro_instance.ro_settings.spec_ofs ) { // stock status update by related options
										return;
									}
								}
							}
						}
						
						// update only stock	
						$('.description .journal-stock').removeClass('outofstock').removeClass('instock').addClass(json.cls).html(json.stock);
					}
				});
			};
		},
		
		getElementsToUpdatePriceOnClick : function() {
			return extension.getElement('#product .options ul li[data-value], #product .qty .journal-stepper');
		},
		
		getContainer : function() {
			
		},
		
		setPriceHTML : function( json ) {
			extension.getElement('#product .list-unstyled.price:first').html(json.htmls.html);
		},
		
	};
	
	return methods;
}