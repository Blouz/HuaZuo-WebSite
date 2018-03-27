//  Parent-child Options
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

pcop_front = {

	data : {},
	option_prefix : 'option',
	theme_name : '',
	timer_delayed_first_option_change_call : 0,
	html_default_values : [],
	initialized : false,
	
	init : function(p_pcop_data, p_pcop_theme_name) {
		
		if ( pcop_front.initialized ) {
			return;
		}
		
		if ( p_pcop_data ) {
			pcop_front.data = p_pcop_data;
		}
		if ( p_pcop_theme_name ) {
			pcop_front.theme_name = p_pcop_theme_name;
		}
		
		pcop_front.updateDefaultValues();
	
		if ( (pcop_front.data && Object.keys(pcop_front.data).length) || !pcop_front.theme_name ) { // !pcop_theme_name - admin section
			pcop_front.getOptionContainer().on('change', 'input:checkbox[name^="'+pcop_front.option_prefix+'"], input:radio[name^="'+pcop_front.option_prefix+'"], select[name^="'+pcop_front.option_prefix+'"]', function(){
				pcop_front.checkVisibility();
			});
		}
		
		if (pcop_front.data && Object.keys(pcop_front.data).length) {
			pcop_front.checkVisibility();
			$(document).ready(function(){ // additionally for ready (sometimes options can be changed by theme script after page loading)
				pcop_front.checkVisibility();
			});
		}
		
		pcop_front.initialized = true;
	},
	
	// option[XXX]
	// pcop_front.getProductOptionIdFromName
	getProductOptionIdFromName : function (name) {
		
		var prefix_quantity_per_option = 'quantity_per_option';
		if ( name.substr(0, prefix_quantity_per_option.length) == prefix_quantity_per_option ) {
			var str = name.substr( prefix_quantity_per_option.length + 1 );	
		} else {
			var str = name.substr( pcop_front.option_prefix.length + 1 );
		}
		var bracket_pos = str.indexOf(']');
		if (bracket_pos != -1) {
			return str.substr(0,bracket_pos);
		}
	},
	
	// pcop_front.parentValueIsSelected
	parentValueIsSelected : function (parent_product_option_id, parent_option_values) {
	
		var result = false;
		
		pcop_front.getOptionContainer().find('input:checkbox[name="'+pcop_front.option_prefix+'['+parent_product_option_id+'][]"]:checked, input:radio[name="'+pcop_front.option_prefix+'['+parent_product_option_id+']"]:checked, select[name^="'+pcop_front.option_prefix+'['+parent_product_option_id+']"], input[type=hidden][name^="'+pcop_front.option_prefix+'['+parent_product_option_id+']"]')
		.each(function(){
			if ( $(this).val() && $.inArray($(this).val(), parent_option_values) != -1 ) {
				result = true;
				return false; // stop the loop
			}
											
		});
											
		return result;
	},
	
	// pcop_front.delayedFirstOptionChangeTrigger
	delayedFirstOptionChangeTrigger : function (start_event) {
		
		clearTimeout(pcop_front.delayedFirstOptionChangeTrigger_timer);
		if (start_event) {
			pcop_front.getOptionContainer().find('[name^="'+pcop_front.option_prefix+'"]:first').change();
		} else {
			pcop_front.delayedFirstOptionChangeTrigger_timer = setTimeout(function(){
				pcop_front.delayedFirstOptionChangeTrigger(true);
			}, 200);
		}
		
	},
	
	// pcop_front.changeOptionVisibility
	changeOptionVisibility : function (product_option_id, option_toggle) {
	
		var option_name = pcop_front.option_prefix+'['+product_option_id+']';
		var option_was_visible = pcop_front.getOptionContainer().find('[name^="'+option_name+'"]').closest('div.form-group').is(':visible');
	
		pcop_front.getOptionContainer().find('[name^="'+option_name+'"]').closest('div.form-group').toggle(option_toggle);
		if ( pcop_front.getOptionContainer().find('[name^="'+option_name+'"]').closest('div.form-group').next().is('br') ) {
			pcop_front.getOptionContainer().find('[name^="'+option_name+'"]').closest('div.form-group').next().toggle(option_toggle);
		}
		
		pcop_front.getOptionContainer().find('[name^="quantity_per_option['+product_option_id+']"]').closest('div.form-group').toggle(option_toggle);
		
		
		var values_changed = false;
		
		if ( option_toggle ) { // visible
			
			if ( !option_was_visible ) { // became  visible
			
				// default values (specific for text fields)
				if ( !$('input[type="text"][name="'+option_name+'"]').val() && pcop_front.html_default_values && pcop_front.html_default_values[product_option_id] ) {
					$('input[type="text"][name="'+option_name+'"]').val(pcop_front.html_default_values[product_option_id]);
					// direct evant call for text field
					pcop_front.delayedFirstOptionChangeTrigger();
					//$('input[type="text"][name="'+option_name+'"]').change();
				}
				
				if ( typeof(qpo_resetQuantities) == 'function' ) {
					qpo_resetQuantities(2, product_option_id); //reset to defaults
				}
				
			}
			
		} else { // hidden
			if ( pcop_front.getOptionContainer().find('select[name^="'+option_name+'"]').val() ) {
			
				pcop_front.getOptionContainer().find('select[name^="'+option_name+'"]').val('');
				pcop_front.getOptionContainer().find('select[name^="'+option_name+'"]').prop('value', '');// needed sometimes
				values_changed = true;
				
			}
			if ( pcop_front.getOptionContainer().find('input:checkbox[name^="'+option_name+'"]:checked').length ) {
				pcop_front.getOptionContainer().find('input:checkbox[name^="'+option_name+'"]:checked').prop('checked', false);
				values_changed = true;
			}
			if ( pcop_front.getOptionContainer().find('input:radio[name^="'+option_name+'"]:checked').length ) {
				pcop_front.getOptionContainer().find('input:radio[name^="'+option_name+'"]:checked').prop('checked', false);
				values_changed = true;
			}
			
			var elem_other_option = pcop_front.getOptionContainer().find('input:not(:radio):not(:checkbox)[name^="'+option_name+'"]');
			if ( elem_other_option.length
				&& elem_other_option.val() ) {
			
				var val_before = elem_other_option.val();
				elem_other_option.val('');
				
				if ( elem_other_option.val() ) {
					// to fix a bug with not working "val()"
					elem_other_option.prop('value', '');
				}
				
				// Product Image Option DropDown compatibility
				if ( elem_other_option.closest('.select').length && $.fn.ddslick && elem_other_option.closest('.select').data('ddslick') ) {
					var poidd_onSelected = elem_other_option.closest('.select').data('ddslick').settings.onSelected;
					elem_other_option.closest('.select').data('ddslick').settings.onSelected = ''; // to not call event 
					elem_other_option.closest('.select').ddslick('select', {index: '0' });
					elem_other_option.closest('.select').data('ddslick').settings.onSelected = poidd_onSelected;
				}
				
				// direct event call for text field
				if ( val_before ) {
					pcop_front.delayedFirstOptionChangeTrigger();
					//$('input[type="text"][name="'+option_name+'"]').change();
				}
			}
			
			if ( pcop_front.getOptionContainer().find('textarea[name^="'+option_name+'"]').length && pcop_front.getOptionContainer().find('textarea[name^="'+option_name+'"]').val() ) {
				pcop_front.getOptionContainer().find('textarea[name^="'+option_name+'"]').val('');
			}
			
			if ( typeof(qpo_resetQuantities) == 'function' ) {
				qpo_resetQuantities(-1, product_option_id); //reset to empty
			}
			//pcop_front.getOptionContainer().find('[name^="quantity_per_option['+product_option_id+']"]').val('');
			
		}
		
		// << hided is not required
		if ( !$('#options_pcop_not_required').length ) {
			pcop_front.getOptionContainer().append('<input type="hidden" name="options_pcop_not_required" id="options_pcop_not_required" value="">');
		}
		
		if ( !$('#options_pcop_not_required').val() ) {
			var current_opts = [];
		} else {
			var current_opts = $('#options_pcop_not_required').val().split(',');
		}
		
		var new_opts = [];
		for (var i in current_opts) {
			if ( !current_opts.hasOwnProperty(i) ) continue;
			if ( current_opts[i] != product_option_id) {
				new_opts.push(current_opts[i]);
			}
		}
		
		if (!option_toggle ) {
			new_opts.push(product_option_id);
		}
		$('#options_pcop_not_required').val(new_opts.toString());
		
		if ( $('#options_pcop_not_required').val() == "NaN" ) {
			$('#options_pcop_not_required').attr('value', new_opts.toString());
		}
		
		// >> hided is not required
		
		if ( !option_was_visible && option_toggle ) { // became visible
			
			// use html defaults
			if ( pcop_front.html_default_values && typeof(pcop_front.html_default_values[product_option_id]) != 'undefined' && pcop_front.html_default_values[product_option_id] ) {
				var option_elem = pcop_front.getOptionContainer().find('[name^="'+option_name+'"]');
				if ( option_elem.length ) {
					if ( option_elem.is('select') || option_elem.is('textarea') ) {
						option_elem.val(pcop_front.html_default_values[product_option_id]);
					} else if ( option_elem.is('radio') ) {
						option_elem.find('[value="'+pcop_front.html_default_values[product_option_id]+'"]').prop('checked', true);
					} else if ( option_elem.is('checkbox') ) {
						if ( pcop_front.html_default_values[product_option_id].length ) { // should be array
							option_elem.each(function(){
								if ( $.inArray($(this).val(), pcop_front.html_default_values[product_option_id]) ) {
									$(this).prop('checked', true);
								}
							});
						}
					}
				}
			}
			
			// improved options default selected values compatibility
			if ( typeof(improvedoptions_set_defaults) == 'function' ) {
				improvedoptions_set_defaults(false, product_option_id);
			}
		}
		
		return values_changed;
	},
	
	// pcop_front.checkVisibility
	checkVisibility : function () {
	
		if (pcop_front.data && Object.keys(pcop_front.data).length) {
			
			var product_options_ids = [];
			pcop_front.getOptionContainer().find('input[name^="'+pcop_front.option_prefix+'["], textarea[name^="'+pcop_front.option_prefix+'["], select[name^="'+pcop_front.option_prefix+'["], input[type="hidden"][name^="copu_product_id"], select[name^="quantity_per_option["], input[name^="quantity_per_option["]').each(function(){
				var product_option_id = pcop_front.getProductOptionIdFromName($(this).attr('name'));
				if ( $.inArray(product_option_id, product_options_ids) == -1 ) {
					product_options_ids.push(product_option_id)
				}
			});
			
			for (var j in product_options_ids) {
				if ( !product_options_ids.hasOwnProperty(j) ) continue;
			
				var product_option_id = product_options_ids[j];
				
				if (pcop_front.data[product_option_id]) {
					var pcop_rules = pcop_front.data[product_option_id];
					
					if (pcop_rules && pcop_rules.length) {
						
						var option_toggle = true;
						var option_or_toggle = false;
						var parents_or_cnt = 0;
						
						for (var i in pcop_rules) {
							if ( !pcop_rules.hasOwnProperty(i) ) continue;
							
							var parent_product_option_id = pcop_rules[i]['parent_product_option_id'];
							var parent_option_values = pcop_rules[i]['values'];
							
							var parent_result = pcop_front.parentValueIsSelected(parent_product_option_id, parent_option_values);
							if ( pcop_rules[i]['pcop_or'] && pcop_rules[i]['pcop_or'] == '1' ) { 
								option_or_toggle = option_or_toggle || parent_result;
								parents_or_cnt++;
							} else {
								option_toggle = option_toggle && parent_result;
							}
							
						}
						
						// all standard parents rules results should be TRUE and one of _OR_ parents results should be true
						option_toggle = option_toggle && (option_or_toggle || !parents_or_cnt);
						
						if ( pcop_front.changeOptionVisibility(product_option_id, option_toggle) ) {
							// если у скрываемой опции были выбраны значения и они были выключены, запустим процедуру заново
							pcop_front.getOptionContainer().find('[name^="'+pcop_front.option_prefix+'['+product_option_id+']"]:first').change();
							//pcop_front.checkVisibility(); 
							return;
						}
						
					}
				}
			}
		}
	},
	
	// pcop_front.getOptionContainer
	getOptionContainer : function () {
		if ( !pcop_front.theme_name ) { // admin section 
			return $('#option');
		} else {
			return $('#product, section[id="content"], .boss-product').first();
		}
	},
	
	// pcop_update_data
	updateData : function (product_options) {
		pcop_front.data = {};
		if ( product_options && product_options != {} && product_options != [] ) {
			for (var i_product_options in product_options) {
				if ( !product_options.hasOwnProperty(i_product_options) ) continue;
				var product_option = product_options[i_product_options];
				if ( typeof(product_option['pcop_front']) != 'undefined' && product_option['pcop_front'] ) {
					pcop_front.data[product_option['product_option_id']] =  product_option['pcop_front'];
				}
			}
		}
	},
	
	// pcop_update_default_values
	updateDefaultValues : function () {
		pcop_front.html_default_values = [];
		pcop_front.getOptionContainer().find('[name^="option["]').each(function(){
			var option_elem = $(this);
			var product_option_id = pcop_front.getProductOptionIdFromName(option_elem.attr('name'));
			if ( option_elem.is('select,textarea,:text') ) {
				if ( $(this).val() ) {
					pcop_front.html_default_values[product_option_id] = $(this).val();
				}
			} else if ( option_elem.is(':radio:checked') ) {
				pcop_front.html_default_values[product_option_id] = $(this).val();
			} else if ( option_elem.is(':checkbox:checked') ) {
				if ( typeof(pcop_front.html_default_values[product_option_id]) == 'undefined' ) {
					pcop_front.html_default_values[product_option_id] = [];
				}
				pcop_front.html_default_values[product_option_id].push(option_elem.val());
			}
		});
	},
}	