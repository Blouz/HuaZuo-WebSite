//  Parent-child Options
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

var pcop = {
	
	initialized : false,
	parent_option_cnt : 0,
	texts : {},
	all_product_options : {},		// created by specific function of PCOP
	basic_product_options : {}, // created by standard product controller

	init : function( product_option_cnt ) {
		
		for ( var product_option_num=0; product_option_num<product_option_cnt; product_option_num++ ) {
			if ( typeof(pcop.basic_product_options[product_option_num]) != 'undefined' && typeof(pcop.basic_product_options[product_option_num]['pcop']) != 'undefined' ) {
				pcop.showOptionSettings(product_option_num, pcop.basic_product_options[product_option_num]['pcop']);
			}
		}
		
	},
	
	// refresh list of values for parent option
	// pcop_parent_option_cnt - number of parent option block
	// settings - values that should be selected
	// set_parent_option_id - set parent option id to this value
	showParentOptionValues : function(parent_option_num, settings, set_parent_option_id) {
	
		var parent_option_select = $('#parent_option_'+parent_option_num);
		if (set_parent_option_id) {
			parent_option_select.val(set_parent_option_id);
		}
		
		var parent_option_id = parent_option_select.val();
		var block_number = pcop.getProductOptionBlockNumberFromName( $('#parent_option_'+parent_option_num).attr('name') );
		//var block_number = pcop.getProductOptionBlockNumberByProductOptionId($('#parent_option_'+parent_option_num).attr('name'));
		if ( block_number === false ) {
			return;
		}
		var html = '';
		
		var current_values = [];
		if (settings) {
			current_values = settings;
		} else {
			$('#parent_option_values_'+parent_option_num).find('input[type=checkbox]:checked').each(function(){
				current_values.push($(this).val());
			});
		}
		
		if (parent_option_id) {
			for (var i in pcop.all_product_options) {
				if ( !pcop.all_product_options.hasOwnProperty(i) ) continue;
				
				if (pcop.all_product_options[i]['option_id'] == parent_option_id && pcop.all_product_options[i]['product_option_value']) {
					for (var j in pcop.all_product_options[i]['product_option_value']) {
						if ( !pcop.all_product_options[i]['product_option_value'].hasOwnProperty(j) ) continue;
					
						var pcop_pov = pcop.all_product_options[i]['product_option_value'][j];
						html += '<div class="checkbox"><label>';
						html += '<input type="checkbox" name="product_option['+block_number+'][pcop]['+parent_option_num+'][values][]" ';
						if ( $.inArray(pcop_pov['option_value_id'], current_values) != -1 ) {
							html += ' checked ';
						}
						html += ' value="'+pcop_pov['option_value_id']+'">';
						html += pcop_pov['name'];
						html += '</label></div>';
					}
				}
			}
		}
		
		$('#parent_option_values_'+parent_option_num).html(html);
		
	},
	
	// add one more parent option rule
	addParentOption : function(product_option_block_num, settings) {
	
		var pcop_table = $('#pcop_parent_options_'+product_option_block_num);
		//var block_number = pcop_get_product_option_block_number_by_product_option_id(product_option_id);
		
		var html = '';
		html += '<tr>';
		html += '<td>';
		html += '<div class="col-sm-4">';
		html += '<input type="hidden" name="product_option['+product_option_block_num+'][pcop]['+pcop.parent_option_cnt+'][pcop_id]" value="'+(settings ? settings['pcop_id'] : '')+'">';
		html += '<select name="product_option['+product_option_block_num+'][pcop]['+pcop.parent_option_cnt+'][parent_option_id]" id="parent_option_'+pcop.parent_option_cnt+'" class="form-control" onchange="pcop.showParentOptionValues('+pcop.parent_option_cnt+')">';
		html += '<option value="">-</option>';
		
		if (pcop.all_product_options) {
			for (var i in pcop.all_product_options) {
				if ( !pcop.all_product_options.hasOwnProperty(i) ) continue;
				
				if ( $.inArray(pcop.all_product_options[i]['type'], ['select','radio','image','checkbox','block','color']) != -1 ) {
					html += '<option value="'+pcop.all_product_options[i]['option_id']+'"';
					html += ' '+( (settings && pcop.all_product_options[i]['option_id']==settings['parent_option_id']) ? 'selected' : '' )+' ';
					html += '>'+pcop.all_product_options[i]['name']+'</option>';
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
		
		pcop.showParentOptionValues(pcop.parent_option_cnt, (settings ? settings['values'] : false), (settings ? settings['parent_option_id'] : false) );
		
		pcop.parent_option_cnt++;
		pcop.checkTextNoParentOptions(product_option_block_num);
		
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
			for (var i in pcop_data) {
				if ( !pcop_data.hasOwnProperty(i) ) continue;
				pcop.addParentOption(product_option_block_num, pcop_data[i]);
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