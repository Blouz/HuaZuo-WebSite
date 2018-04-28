//  Live Price PRO / Живая цена PRO
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

var lppro_methods = {
		addDiscount : function(data) {
			discount_row = lppro_methods.addDiscountSpecial(data, 'discount', discount_row);
		},
		
		addSpecial : function(data) {
			special_row = lppro_methods.addDiscountSpecial(data, 'special', special_row);
		},
		
		addDiscountSpecial : function(data, name, current_row) {
			html  = '<tr id="'+name+'-row' + current_row + '">';
			
			var manufacturer = data ? data['manufacturer'] : '';
			var manufacturer_id = data ? data['manufacturer_id'] : '';
			var category = data ? data['category'] : '';
			var category_id = data ? data['category_id'] : '';
			var customer_group_id = data ? data['customer_group_id'] : '';
			var quantity = data ? data['quantity'] : '';
			var priority = data ? data['priority'] : '';
			var price_prefix = data ? data['price_prefix'] : '';
			var price = data ? data['price'] : '';
			var date_start = data ? data['date_start'] : '';
			var date_end = data ? data['date_end'] : '';
			
			var setting_name = 'liveprice_settings['+name+'s]['+current_row+']';
			
			html += '  <td class="text-left">';
			html += '    <input type="text" name="'+setting_name+'[category]" value="'+category+'" placeholder="'+liveprice_texts.text_category_all+'" class="form-control" />';
			html += '    <input type="hidden" name="'+setting_name+'[category_id]" value="'+category_id+'" />';
			html += '  </td>';
			
			html += '  <td class="text-left">';
			html += '    <input type="text" name="'+setting_name+'[manufacturer]" value="'+manufacturer+'" placeholder="'+liveprice_texts.text_manufacturer_all+'" id="input-manufacturer" class="form-control" />';
			html += '    <input type="hidden" name="'+setting_name+'[manufacturer_id]" value="'+manufacturer_id+'" />';
			html += '  </td>';
			
			html += '  <td class="text-left"><select name="'+setting_name+'[customer_group_id]" class="form-control">';
			html += '    <option value="-1" '+(customer_group_id==-1 ? 'selected':'')+'>'+liveprice_texts.liveprice_all_customers_groups+'</option>';
			for (var i_customer_groups in customer_groups) {
				if ( !customer_groups.hasOwnProperty(i_customer_groups) ) continue;
				var customer_group = customer_groups[i_customer_groups];
				html += '		<option value="'+customer_group.customer_group_id+'" '+(customer_group_id==customer_group.customer_group_id ? 'selected':'')+'>';
				html += '			'+customer_group.name+'</option>';
			}
			html += '  </select></td>';
			if ( name == 'discount' ) {
				html += '  <td class="text-right" style="max-width: 100px"><input type="text" name="'+setting_name+'[quantity]" value="'+quantity+'" placeholder="'+liveprice_texts.entry_quantity+'" class="form-control" /></td>';
			}
			html += '  <td class="text-right" style="max-width: 100px"><input type="text" name="'+setting_name+'[priority]" value="'+priority+'" placeholder="'+liveprice_texts.entry_priority+'" class="form-control" /></td>';
			
			html += '  <td class="text-left" style="width: 100px"><select name="'+setting_name+'[price_prefix]" class="form-control" >';
			html += '    <option value="=" '+(price_prefix=='=' ? 'selected':'')+'>=</option>';
			html += '    <option value="%" '+(price_prefix=='%' ? 'selected':'')+'>&minus; %</option>';
			html += '    <option value="_" '+(price_prefix=='_' ? 'selected':'')+'>= %</option>';
			html += '  </select></td>';
			
			html += '  <td class="text-right" style="min-width: 100px; max-width: 150px;"><input type="text" name="'+setting_name+'[price]" value="'+price+'" placeholder="'+liveprice_texts.entry_price+'" class="form-control" /></td>';
			html += '  <td class="text-left" style="width: 150px;"><div class="input-group date"><input type="text" name="'+setting_name+'[date_start]" value="'+(date_start=='0000-00-00'?'':date_start)+'" placeholder="'+liveprice_texts.entry_date_start+'" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';
			html += '  <td class="text-left" style="width: 150px;"><div class="input-group date"><input type="text" name="'+setting_name+'[date_end]" value="'+(date_end=='0000-00-00'?'':date_end)+'" placeholder="'+liveprice_texts.entry_date_end+'" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';
			html += '  <td class="text-left"><button type="button" onclick="$(\'#'+name+'-row' + current_row + '\').remove();" data-toggle="tooltip" title="'+liveprice_texts.button_remove+'" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
			html += '</tr>';
		
			$('#'+name+' tbody').append(html);
		
			$('.date').datetimepicker({
				pickTime: false
			});
			
			lppro_methods.enableDiscountSpecialAutocomplete(setting_name);
		
			current_row++;
			
			return current_row;
		},
		
		enableDiscountSpecialAutocomplete : function(setting_name) {
			
			// Manufacturer
			$('input[name="'+setting_name+'[manufacturer]"]').autocomplete({
				'source': function(request, response) {
					$.ajax({
						url: 'index.php?route=catalog/manufacturer/autocomplete&user_token='+liveprice_user_token+'&filter_name=' +  encodeURIComponent(request),
						dataType: 'json',
						success: function(json) {
							json.unshift({
								manufacturer_id: -1,
								name: liveprice_texts.text_manufacturer_all
							});
			
							response($.map(json, function(item) {
								return {
									label: item['name'],
									value: item['manufacturer_id']
								}
							}));
						}
					});
				},
				'select': function(item) {
					$(this).val( $(this).attr('placeholder') == item['label'] ? '' : item['label']);
					$(this).siblings('[name*="[manufacturer_id]"]').val(item['value']);
				}
			});
			
			// Category
			$('input[name="'+setting_name+'[category]"]').autocomplete({
				'source': function(request, response) {
					$.ajax({
						url: 'index.php?route=catalog/category/autocomplete&user_token='+liveprice_user_token+'&filter_name=' +  encodeURIComponent(request),
						dataType: 'json',
						success: function(json) {
							
							json.unshift({
								category_id: -1,
								name: liveprice_texts.text_category_all
							});
							
							response($.map(json, function(item) {
								return {
									label: item['name'],
									value: item['category_id']
								}
							}));
						}
					});
				},
				'select': function(item) {
					$(this).val( $(this).attr('placeholder') == item['label'] ? '' : item['label']);
					$(this).siblings('[name*="[category_id]"]').val(item['value']);
				}
			});
		},
		
		
		addCustomizeDiscountsHtmlElem : function(customize_discounts_cnt, block, name, id) {
			var html = '';
			html+= '<div ><i class="fa fa-minus-circle"></i> '+name;
			html+= '<input type="hidden" name="liveprice_settings[dqc]['+customize_discounts_cnt+']['+block+'][]" value="'+id+'" />';
			html+= '</div>';
			return html;
		},
		
		addCustomizeDiscounts : function(settings) {
		
			var html = '';
			
			html+= '<div class="form-group" data-cd="'+customize_discounts_cnt+'" >';
			
			html+= '<div class="col-sm-2">';
			html+= '<div class="col-sm-12">';
			html+= '<label class="control-label">'+liveprice_texts.entry_discount_quantity_spec+'</label>';
			html+= '</div>';
			html+= '<div class="col-sm-12">';
			html+= '<select name="liveprice_settings[dqc]['+customize_discounts_cnt+'][discount_quantity]" class="form-control">';
			html+= '<option value="0" '+(typeof(settings)!='undefined'&&settings['discount_quantity']==0 ? 'selected' : '')+' >'+liveprice_texts.text_discount_quantity_0+'</option>';
			html+= '<option value="1" '+(typeof(settings)!='undefined'&&settings['discount_quantity']==1 ? 'selected' : '')+' >'+liveprice_texts.text_discount_quantity_1+'</option>';
			html+= '<option value="2" '+(typeof(settings)!='undefined'&&settings['discount_quantity']==2 ? 'selected' : '')+' >'+liveprice_texts.text_discount_quantity_2+'</option>';
			html+= '</select>';
			html+= '<span class="help-block" style="display: none;" data-notify="ro">'+liveprice_texts.text_relatedoptions_notify+'</span>';
			html+= '</div>';
			html+= '</div>';
			
			html+= '<div class="col-sm-3">';
			html+= '<label class="control-label" >'+liveprice_texts.entry_categories_spec+'</label>';
			html+= '<input type="text" name="category" value="" placeholder="'+liveprice_texts.entry_categories_spec+'" data-cd="input-category-'+customize_discounts_cnt+'" class="form-control" />';
			html+= '<div data-cd="product-category-'+customize_discounts_cnt+'" class="well well-sm" style="height: 150px; overflow: auto;">';
			if ( typeof(settings)!='undefined' && typeof(settings['categories'])!='undefined') {
				for (var i in settings['categories']) {
					var category = settings['categories'][i];
					html+= lppro_methods.addCustomizeDiscountsHtmlElem(customize_discounts_cnt, 'categories', category['name'], category['category_id']);
				}
			}
			html+= '</div>';
			html+= '</div>';
			
			html+= '<div class="col-sm-3">';
			html+= '<label class="control-label" >'+liveprice_texts.entry_manufacturers_spec+'</label>';
			html+= '<input type="text" name="manufacturer" value="" placeholder="'+liveprice_texts.entry_manufacturers_spec+'" data-cd="input-manufacturer-'+customize_discounts_cnt+'" class="form-control" />';
			html+= '<div data-cd="product-manufacturer-'+customize_discounts_cnt+'" class="well well-sm" style="height: 150px; overflow: auto;">';
			if ( typeof(settings)!='undefined' && typeof(settings['manufacturers'])!='undefined') {
				for (var i in settings['manufacturers']) {
					var manufacturer = settings['manufacturers'][i];
					html+= lppro_methods.addCustomizeDiscountsHtmlElem(customize_discounts_cnt, 'manufacturers', manufacturer['name'], manufacturer['manufacturer_id']);
				}
			}
			html+= '</div>';
			html+= '</div>';
			
			html+= '<div class="col-sm-3">';
			html+= '<label class="control-label">'+liveprice_texts.entry_products_spec+'</label>';
			html+= '<input type="text" name="related" value="" placeholder="'+liveprice_texts.entry_products_spec+'" data-cd="input-related-'+customize_discounts_cnt+'" class="form-control" />';
			html+= '<div data-cd="product-related-'+customize_discounts_cnt+'" class="well well-sm" style="height: 150px; overflow: auto;">';
			if ( typeof(settings)!='undefined' && typeof(settings['products'])!='undefined') {
				for (var i in settings['products']) {
					var product = settings['products'][i];
					html+= lppro_methods.addCustomizeDiscountsHtmlElem(customize_discounts_cnt, 'products', product['name'], product['product_id']);
				}
			}
			html+= '</div>';
			html+= '</div>';
			
			html+= '<div class="col-sm-1">';
			html+= '<a class="btn btn-danger" onclick="$(\'[data-cd='+customize_discounts_cnt+']\').remove();"><i class="fa fa-minus-circle"></i></a>';
			html+= '</div>';
			
			html+= '</div>';
			html+= '<hr data-cd="'+customize_discounts_cnt+'">';
			
			
			$('#add_customize_discounts_button').parent().before(html);
			lppro_methods.enableCustomizeDiscountAutocomplete(customize_discounts_cnt);
			
			customize_discounts_cnt++;
		
		},
		
		enableCustomizeDiscountAutocomplete : function(customize_discounts_cnt) {
			// Category
			$('[data-cd="'+customize_discounts_cnt+'"] input[name=\'category\']').autocomplete({
				'source': function(request, response) {
					$.ajax({
						url: 'index.php?route=catalog/category/autocomplete&user_token='+liveprice_user_token+'&filter_name=' +  encodeURIComponent(request),
						dataType: 'json',
						success: function(json) {
							response($.map(json, function(item) {
								return {
									label: item['name'],
									value: item['category_id']
								}
							}));
						}
					});
				},
				'select': function(item) {
					$('[data-cd="'+customize_discounts_cnt+'"] input[name=\'category\']').val('');
					$('[data-cd="product-category-'+customize_discounts_cnt+'"] [value="'+item['value']+'"]').parent().remove();
					$('[data-cd="product-category-'+customize_discounts_cnt+'"]').append( lppro_methods.addCustomizeDiscountsHtmlElem(customize_discounts_cnt, 'categories', item['label'], item['value']) );
				}
			});
			$('[data-cd="product-category-'+customize_discounts_cnt+'"]').delegate('.fa-minus-circle', 'click', function() {
				$(this).parent().remove();
			});
			
			// Manufacturer
			$('[data-cd="'+customize_discounts_cnt+'"] input[name=\'manufacturer\']').autocomplete({
				'source': function(request, response) {
					$.ajax({
						url: 'index.php?route=catalog/manufacturer/autocomplete&user_token='+liveprice_user_token+'&filter_name=' +  encodeURIComponent(request),
						dataType: 'json',
						success: function(json) {
							response($.map(json, function(item) {
								return {
									label: item['name'],
									value: item['manufacturer_id']
								}
							}));
						}
					});
				},
				'select': function(item) {
					$('[data-cd="'+customize_discounts_cnt+'"] input[name=\'manufacturer\']').val('');
					$('[data-cd="product-manufacturer-'+customize_discounts_cnt+'"] [value="'+item['value']+'"]').parent().remove();
					$('[data-cd="product-manufacturer-'+customize_discounts_cnt+'"]').append( lppro_methods.addCustomizeDiscountsHtmlElem(customize_discounts_cnt, 'manufacturers', item['label'], item['value']) );
				}
			});
			$('[data-cd="product-manufacturer-'+customize_discounts_cnt+'"]').delegate('.fa-minus-circle', 'click', function() {
				$(this).parent().remove();
			});
			// Product
			$('[data-cd="'+customize_discounts_cnt+'"] input[name=\'related\']').autocomplete({
				'source': function(request, response) {
					$.ajax({
						url: 'index.php?route=catalog/product/autocomplete&user_token='+liveprice_user_token+'&filter_name=' +  encodeURIComponent(request),
						dataType: 'json',
						success: function(json) {
							response($.map(json, function(item) {
								return {
									label: item['name'],
									value: item['product_id']
								}
							}));
						}
					});
				},
				'select': function(item) {
					$('[data-cd="'+customize_discounts_cnt+'"] input[name=\'related\']').val('');
					$('[data-cd="product-related-'+customize_discounts_cnt+'"] [value="'+item['value']+'"]').parent().remove();
					$('[data-cd="product-related-'+customize_discounts_cnt+'"]').append( lppro_methods.addCustomizeDiscountsHtmlElem(customize_discounts_cnt, 'products', item['label'], item['value']) );
				}
			});
			
			$('[data-cd="product-related-'+customize_discounts_cnt+'"]').delegate('.fa-minus-circle', 'click', function() {
				$(this).parent().remove();
			});
		}
	}
