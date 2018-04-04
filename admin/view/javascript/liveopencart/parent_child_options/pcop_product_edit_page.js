//  Parent-child Options
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

var pcop = {
	
	initialized : false,
	parent_option_cnt : 0,
	texts : {},
	all_product_options : {},		// created by specific function of PCOP
	basic_product_options : {}, // created by standard product controller
	temp_id_cnt : 0,

	init : function( product_option_cnt ) {
		
		for ( var product_option_num=0; product_option_num<product_option_cnt; product_option_num++ ) {
			if ( typeof(pcop.basic_product_options[product_option_num]) != 'undefined' && typeof(pcop.basic_product_options[product_option_num]['pcop']) != 'undefined' ) {
				pcop.showOptionSettings(product_option_num, pcop.basic_product_options[product_option_num]['pcop']);
			}
		}
		
		var option_tab_href_prefix = '#tab-option';
		$('#option').on('click', 'a[href^="'+option_tab_href_prefix+'"]', function(){
			var tab_num = $(this).attr('href').substr( option_tab_href_prefix.length );
			
			pcop.updateParentSettingsForOption(tab_num);
		});
		
	},
	
	getNewTempId : function() {
		pcop.temp_id_cnt++;
		return pcop.temp_id_cnt;
	},
	getMaxExistingTempId : function(){
		var max_temp_id = 0;
		$('#tab-option input[type="hidden"][name^="product_option["][name$="[product_option_value_temp_id]"]').each(function(){
			max_temp_id = Math.max(max_temp_id, (parseInt($(this).val()) || 0) );
		});
		return max_temp_id;
	},
	
	getAllOptions : function() {
		
		var product_options = [];
		var pcop_temp_id_cnt = pcop.getMaxExistingTempId()+1;
		var option_tab_id_beginning = 'tab-option';
		$('#tab-option [id^="'+option_tab_id_beginning+'"]').each(function(){
			var $option_container = $(this);
			var tab_num = parseInt( $option_container.attr('id').substr( option_tab_id_beginning.length ) );
			if ( !isNaN(tab_num) ) {
				
				var product_option = {};
				
				var $po_id_input = $option_container.find('input[name="product_option['+tab_num+'][product_option_id]"]');
				
				product_option['product_option_id'] 			= $po_id_input.val();
				product_option['product_option_temp_id'] 	= $option_container.find('input[name="product_option['+tab_num+'][product_option_temp_id]"]').val();
				product_option['name'] 										= $option_container.find('input[name="product_option['+tab_num+'][name]"]').val();
				product_option['option_id'] 							= $option_container.find('input[name="product_option['+tab_num+'][option_id]"]').val();
				product_option['type'] 										= $option_container.find('input[name="product_option['+tab_num+'][type]"]').val();
				
				// the module uses temp ids, add them id needed
				if ( !product_option['product_option_temp_id'] ) {
					product_option['product_option_temp_id'] = pcop.getNewTempId();
					var html_temp_id = '<input type="hidden" name="product_option['+tab_num+'][product_option_temp_id]" value="'+product_option['product_option_temp_id']+'">';
					$po_id_input.before(html_temp_id);
				}
				
				
				product_option['values'] = pcop.getAllOptionValuesFromContainer($option_container, tab_num);
				
				
				product_options.push(product_option);
			}
			
		});
		
		return product_options;
	},
	
	getAllOptionValuesFromContainer : function($option_container, tab_num) {
		
		var option_value_row_id_beginning = 'option-value-row';
		var $option_value_container = $option_container.find('#option-value'+tab_num);
		
		if ( $option_value_container.length ) {
			var values = [];
			$option_value_container.find('[id^="'+option_value_row_id_beginning+'"]').each(function(){
				
				var $option_value_row = $(this);
				var row_num = parseInt( $option_value_row.attr('id').substr( option_value_row_id_beginning.length ) );
				if ( !isNaN(row_num) ) {
					var value = {};
					
					var $pov_id_input = $option_value_row.find('input[name="product_option['+tab_num+'][product_option_value]['+row_num+'][product_option_value_id]"]');
					var $pov_select = $option_value_row.find('select[name="product_option['+tab_num+'][product_option_value]['+row_num+'][option_value_id]"]');
					
					value['product_option_value_id'] = $option_value_row.find('input[name="product_option['+tab_num+'][product_option_value]['+row_num+'][product_option_value_temp_id]"]').val();
					value['product_option_value_temp_id'] = $option_value_row.find('input[name="product_option['+tab_num+'][product_option_value]['+row_num+'][product_option_value_temp_id]"]').val();
					value['product_option_value_id'] = $pov_id_input.val();
					value['option_value_id'] = $pov_select.val();
					value['name'] = $pov_select.find('option[value="'+value['option_value_id']+'"]').html();
					
					// the module uses temp ids, add them id needed
					if ( !value['product_option_value_temp_id'] ) {
						value['product_option_value_temp_id'] = pcop.getNewTempId();
						var html_temp_id = '<input type="hidden" name="product_option['+tab_num+'][product_option_value]['+row_num+'][product_option_value_temp_id]" value="'+value['product_option_value_temp_id']+'">';
						$pov_id_input.before(html_temp_id);
					}
					
					values.push(value);
				}
				
			});
			
			return values;
		}
	},
	
	getParentSettingsForOption(product_option_block_num) {
		var parents_settings = [];
		
		var $parents_container = $('#pcop_parent_options_'+product_option_block_num);
		$parents_container.find('input[data-pcop-num]').each(function(){
			var pcop_num = $(this).attr('data-pcop-num');
			var pcop_name_prefix = 'product_option['+product_option_block_num+'][pcop]['+pcop_num+']';
			var parent_settings = {};
			
			parent_settings['pcop_id'] = $parents_container.find('input[name="'+pcop_name_prefix+'[pcop_id]"]').val();
			parent_settings['pcop_or'] = $parents_container.find(':checkbox[name="'+pcop_name_prefix+'[pcop_or]"]:checked').val();
			parent_settings['parent_product_option_temp_id'] = $parents_container.find('select[name="'+pcop_name_prefix+'[parent_product_option_temp_id]"]').val();
			
			var current_values = [];
			
			$parents_container.find(':checkbox[name^="'+pcop_name_prefix+'"][name$="[values][]"]:checked').each(function(){
				current_values.push( $(this).val() );
			});
			
			parent_settings['current_values'] = current_values;
			
			parents_settings.push(parent_settings);
		});
		
		return parents_settings;
	},
	
	updateParentSettingsForOption : function(product_option_block_num) {
		var parents_settings = pcop.getParentSettingsForOption(product_option_block_num);
		$('#pcop_parent_options_'+product_option_block_num).find('tbody').html('');
		for ( var i_parents_settings in parents_settings ) {
			if ( !parents_settings.hasOwnProperty(i_parents_settings) ) continue;
			var parent_settings = parents_settings[i_parents_settings];
			pcop.addParentOption(product_option_block_num, parent_settings);
		}
	},
	
	// add one more parent option rule
	addParentOption : function(product_option_block_num, settings, p_product_options) {
		
		if ( p_product_options ) {
			var product_options = p_product_options;
		} else {
			var product_options = pcop.getAllOptions();
		}
	
		var pcop_table = $('#pcop_parent_options_'+product_option_block_num);
		//var block_number = pcop_get_product_option_block_number_by_product_option_id(product_option_id);
		
		var html = '';
		html += '<tr>';
		html += '<td>';
		html += '<div class="col-sm-4">';
		html += '<input type="hidden" data-pcop-num="'+pcop.parent_option_cnt+'">';
		html += '<input type="hidden" name="product_option['+product_option_block_num+'][pcop]['+pcop.parent_option_cnt+'][pcop_id]" value="'+(settings ? settings['pcop_id'] : '')+'">';
		html += '<select name="product_option['+product_option_block_num+'][pcop]['+pcop.parent_option_cnt+'][parent_product_option_temp_id]" id="parent_option_'+pcop.parent_option_cnt+'" class="form-control" onchange="pcop.showParentOptionValues('+pcop.parent_option_cnt+')">';
		html += '<option value="">-</option>';
		
		if (product_options) {
			for (var i_product_options in product_options) {
				if ( !product_options.hasOwnProperty(i_product_options) ) continue;
				var product_option = product_options[i_product_options];
				
				if ( $.inArray(product_option['type'], ['select','radio','image','checkbox','block','color']) != -1 ) {
					html += '<option value="'+product_option['product_option_temp_id']+'"';
					if ( settings && typeof(settings['parent_product_option_id']) != 'undefined' && product_option['product_option_id']==settings['parent_product_option_id']) {
						html += 'selected'; // for init load
					}
					if ( settings && typeof(settings['parent_product_option_temp_id']) != 'undefined' && product_option['product_option_temp_id']==settings['parent_product_option_temp_id']) {
						html += 'selected'; // for update
					}
					html += '>'+product_option['name']+'</option>';
				}
			}
		}
		
		html += '</select>';
		html += '</div>';
		html += '<div class="col-sm-4">';
		html += '<div class="well well-sm" style="height: 150px; overflow: auto; margin-bottom:0px;" id="parent_option_values_'+pcop.parent_option_cnt+'">';
		html += '';
		html += '';
		html += '</div>';
		html += '</div>';
		
		html += '<label class="col-sm-4">';
		html += '<input type="checkbox" name="product_option['+product_option_block_num+'][pcop]['+pcop.parent_option_cnt+'][pcop_or]" value="1" '+(settings && settings['pcop_or'] && settings['pcop_or']!='0' ? 'checked' : '')+'>';
		html += pcop.texts.pcop_entry_or;
		html += '</label>';
		
		html += '</td>';
		
		html += '<td>';
		html += '<button type="button" onclick="$(this).closest(\'tr\').remove();pcop.checkTextNoParentOptions('+product_option_block_num+');" data-toggle="tooltip" class="btn btn-danger"';
		html += 'title="'+pcop.texts.pcop_entry_remove_parent_option+'"><i class="fa fa-minus-circle"></i></button>';
		html += '</td>';
		html += '</tr>';
		
		pcop_table.find('tbody').append(html);
		
		pcop.showParentOptionValues(pcop.parent_option_cnt, settings, product_options );
		
		pcop.parent_option_cnt++;
		pcop.checkTextNoParentOptions(product_option_block_num);
		
	},
	
	// refresh list of values for parent option
	// pcop_parent_option_cnt - number of parent option block
	// settings - values that should be selected
	// set_parent_option_id - set parent option id to this value
	showParentOptionValues : function(parent_option_num, settings, p_product_options) {
	
		if ( p_product_options ) {
			var product_options = p_product_options;
		} else {
			var product_options = pcop.getAllOptions();
		}
	
		var parent_option_select = $('#parent_option_'+parent_option_num);
		var parent_product_option_temp_id = parent_option_select.val();
		
		var block_number = pcop.getProductOptionBlockNumberFromName( $('#parent_option_'+parent_option_num).attr('name') );
		//var block_number = pcop.getProductOptionBlockNumberByProductOptionId($('#parent_option_'+parent_option_num).attr('name'));
		if ( block_number === false ) {
			return;
		}
		var html = '';

		if (parent_product_option_temp_id) {
			for (var i_product_options in product_options) {
				if ( !product_options.hasOwnProperty(i_product_options) ) continue;
				
				var product_option = product_options[i_product_options];
				
				if (product_option['product_option_temp_id'] == parent_product_option_temp_id && product_option['values']) {
					for (var i_values in product_option['values']) {
						if ( !product_option['values'].hasOwnProperty(i_values) ) continue;
					
						var pcop_pov = product_option['values'][i_values];
					
						html += '<div class="checkbox"><label>';
						html += '<input type="checkbox" name="product_option['+block_number+'][pcop]['+parent_option_num+'][values][]" ';
						
						if ( settings && typeof(settings['values']) != 'undefined' ) { // pcop settings are set
							if ( settings.parent_product_option_temp_id && pcop_pov.product_option_value_temp_id ) { // return from unsuccessful attempt to save
								if ( $.inArray(pcop_pov.product_option_value_temp_id, settings['values']) != -1 || $.inArray(pcop_pov.product_option_value_temp_id.toString(), settings['values']) != -1 ) {
									html += ' checked ';
								}
							} else { // from saved data
								if ( $.inArray(pcop_pov['product_option_value_id'], settings['values']) != -1 ) {
									html += ' checked ';
								}
							}
						} else if ( settings && typeof(settings['current_values']) != 'undefined' ) { // from replaced content (for update)
							if ( $.inArray(pcop_pov.product_option_value_temp_id, settings['current_values']) != -1 ) {
								html += ' checked ';
							}
						}
						html += ' value="'+pcop_pov['product_option_value_temp_id']+'">';
						html += pcop_pov['name'];
						html += '</label></div>';
					}
				}
			}
		}
		
		$('#parent_option_values_'+parent_option_num).html(html);
		
	},
	
	// show parent options settings for product option
	showOptionSettings : function(product_option_block_num, pcop_data) {
		
		var html = '';
		
		html += '<div class="form-group">';
		html += '<label class="col-sm-2 control-label">'+pcop.texts.pcop_entry_settings+'</label>';
		html += '<div class="col-sm-10">';
		html += '<table id="pcop_parent_options_'+product_option_block_num+'" class="table table-striped table-bordered table-hover">';
		html += '<tbody></tbody>';
		html += '<tfoot><td width="100%"><div id="text_no_parent_options_'+product_option_block_num+'">'+pcop.texts.pcop_entry_no_parent_options+'</font></td>';
		html += '<td>';
		html += '<button type="button" onclick="pcop.addParentOption('+product_option_block_num+')" data-toggle="tooltip" class="btn btn-primary"';
		html += 'title="'+pcop.texts.pcop_entry_add_parent_option+'"><i class="fa fa-plus-circle"></i></button>';
		html += '</td></tfoot>';
		html += '</div>';
		html += '</div>';
	
		// show after "required" block
		$('#tab-option'+product_option_block_num+' div.form-group:first').after(html);
		
		if (pcop_data) {
			var product_options = pcop.getAllOptions();
			for (var i in pcop_data) {
				if ( !pcop_data.hasOwnProperty(i) ) continue;
				pcop.addParentOption(product_option_block_num, pcop_data[i], product_options);
			}
		}
	
	},
	
	// get product option block number from name product_option[X]...
	getProductOptionBlockNumberFromName : function(name) {
		var str = name.substring(15);
		str = str.substring(0, str.indexOf(']'));
		return str;
	},
	
	// get product option block number by product option id
	getProductOptionBlockNumberByProductOptionId : function(product_option_id) {
		var name = $('#tab-option input[type="hidden"][name^="product_option["][name*="[product_option_id]"][value="'+product_option_id+'"]').attr('name');
		if ( name ) {
			return pcop.getProductOptionBlockNumberFromName( name );
		} else {
			return false;
		}
	},
	
	
	// show text if there's no parent options, hide is there's some parent options
	checkTextNoParentOptions : function(product_option_block_num) {
		
		var has_parent_options = $('#pcop_parent_options_'+product_option_block_num+' tbody tr').length;
		$('#text_no_parent_options_'+product_option_block_num).toggle(!has_parent_options);
		
	},
}