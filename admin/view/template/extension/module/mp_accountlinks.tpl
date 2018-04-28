<?php echo $header; ?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="view/javascript/modulepoints/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css" rel="stylesheet">
<script src="view/javascript/modulepoints/fontawesome-iconpicker/js/fontawesome-iconpicker.js"></script>
<?php echo $column_left; ?>
<div id="content" class="mp-wrap">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
      	<div class="storeset pull-left dropdown">
          <span><?php echo $text_store; ?></span>
          <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span><?php echo $store_name; ?></span> <i class="fa fa-angle-down"></i></button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="index.php?route=extension/module/mp_accountlinks&user_token=<?php echo $user_token; ?>&store_id=0"><?php echo $text_default; ?></a></li>
            <?php foreach($stores as $store) { ?>
            <li><a href="index.php?route=extension/module/mp_accountlinks&user_token=<?php echo $user_token; ?>&store_id=<?php echo $store['store_id']; ?>"><?php echo $store['name']; ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="pull-left">
        	<button type="submit" form="form-mp-accountlinks" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-success"><?php echo $button_save; ?></button>
        	<a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
        </div>
      </div>
      <h1 style="text-transform: uppercase;"><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="mp-tabs">
    <ul class="list-inline clearfix">
      <li class="active"><a href="#tab-general" data-toggle="tab"><i class="fa fa-cog"></i> <span><?php echo $tab_general; ?></span></a></li>
      <li><a href="#tab-link" data-toggle="tab"><i class="fa fa-link"></i> <span><?php echo $tab_link; ?></span></a></li>
      <li><a href="#tab-contact" data-toggle="tab"><i class="fa fa-question"></i> <span><?php echo $tab_contact; ?></span></a></li>
      <li><a href="#tab-color" data-toggle="tab"><i class="fa fa-eye"></i> <span><?php echo $tab_color; ?></span></a></li>
      <li><a href="#tab-css" data-toggle="tab"><i class="fa fa-desktop"></i> <span><?php echo $tab_css; ?></span></a></li>
    </ul>
 </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-mp-accountlinks" class="form-horizontal">        
          <div class="tab-content">
            <div id="tab-general" class="tab-pane active">
              <fieldset class="module-points">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="bs-callout bs-callout-info"> 
                      <h4>Module Points - Account Side Links</h4> 
                      <p>
                        Account Side Links Allow you to customize the account sidebar of your customers. Allow your customers to choose profile picture. All sidebar links and appearance can be manageable from admin.
                      </p> 
                    </div>
                  </div>
                </div>
                <h3><?php echo $fieldset_general; ?></h3>
                <br/><br/>
                <div class="form-group mp-buttons">
                  <label class="col-sm-2 control-label"><?php echo $entry_status; ?></label>
                  <div class="col-sm-2">
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                      <label class="btn btn-primary <?php echo !empty($module_mp_accountlinks_status) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_status" value="1" <?php echo (!empty($module_mp_accountlinks_status)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_enabled; ?>                            
                      </label>
                      <label class="btn btn-primary <?php echo empty($module_mp_accountlinks_status) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_status" value="0" <?php echo (empty($module_mp_accountlinks_status)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_disabled; ?>                            
                      </label>
                    </div>
                  </div>
                </div>
                <br/><br/>
                <h3><?php echo $fieldset_customer; ?></h3>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-photo"><span data-toggle="tooltip" title="<?php echo $help_photo; ?>"><?php echo $entry_photo; ?></span></label>
                  <div class="col-sm-10"><a href="" id="thumb-photo" data-toggle="image" class="img-thumbnail"><img src="<?php echo $photo; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>
                    <input type="hidden" name="module_mp_accountlinks_photo" value="<?php echo $module_mp_accountlinks_photo; ?>" id="input-photo" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-guest-photo"><span data-toggle="tooltip" title="<?php echo $help_guest_photo; ?>"><?php echo $entry_guest_photo; ?></span></label>
                  <div class="col-sm-10"><a href="" id="thumb-guest-photo" data-toggle="image" class="img-thumbnail"><img src="<?php echo $guest_photo; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>
                    <input type="hidden" name="module_mp_accountlinks_guest_photo" value="<?php echo $module_mp_accountlinks_guest_photo; ?>" id="input-guest-photo" />
                  </div>
                </div>
                <div class="form-group mp-buttons">
                  <label class="col-sm-2 control-label"><?php echo $entry_name; ?></label>
                  <div class="col-sm-2">
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                      <label class="btn btn-primary <?php echo !empty($module_mp_accountlinks_name) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_name" value="1" <?php echo (!empty($module_mp_accountlinks_name)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_show; ?>                            
                      </label>
                      <label class="btn btn-primary <?php echo empty($module_mp_accountlinks_name) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_name" value="0" <?php echo (empty($module_mp_accountlinks_name)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_hide; ?>                            
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group mp-buttons">
                  <label class="col-sm-2 control-label"><?php echo $entry_group; ?></label>
                  <div class="col-sm-2">
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                      <label class="btn btn-primary <?php echo !empty($module_mp_accountlinks_group) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_group" value="1" <?php echo (!empty($module_mp_accountlinks_group)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_show; ?>                            
                      </label>
                      <label class="btn btn-primary <?php echo empty($module_mp_accountlinks_group) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_group" value="0" <?php echo (empty($module_mp_accountlinks_group)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_hide; ?>                            
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group mp-buttons">
                  <label class="col-sm-2 control-label"><?php echo $entry_email; ?></label>
                  <div class="col-sm-2">
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                      <label class="btn btn-primary <?php echo !empty($module_mp_accountlinks_email) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_email" value="1" <?php echo (!empty($module_mp_accountlinks_email)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_show; ?>                            
                      </label>
                      <label class="btn btn-primary <?php echo empty($module_mp_accountlinks_email) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_email" value="0" <?php echo (empty($module_mp_accountlinks_email)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_hide; ?>                            
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group mp-buttons">
                  <label class="col-sm-2 control-label"><?php echo $entry_telephone; ?></label>
                  <div class="col-sm-2">
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                      <label class="btn btn-primary <?php echo !empty($module_mp_accountlinks_telephone) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_telephone" value="1" <?php echo (!empty($module_mp_accountlinks_telephone)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_show; ?>                            
                      </label>
                      <label class="btn btn-primary <?php echo empty($module_mp_accountlinks_telephone) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_telephone" value="0" <?php echo (empty($module_mp_accountlinks_telephone)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_hide; ?>                            
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id="tab-link" class="tab-pane">
              <fieldset>
                <h3><?php echo $fieldset_link; ?></h3>
                <br/>
                <div class="table-responsive">
                  <table id="link" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-left"><?php echo $column_title; ?></td>
                        <td class="text-left"><?php echo $column_link; ?></td>
                        <td class="text-left"><?php echo $column_icon; ?></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $link_row = 0; ?>
                      <?php foreach ($module_mp_accountlinks_links as $module_mp_accountlinks_link) { ?>
                      <tr id="link-row<?php echo $link_row; ?>">
                        <td>
                          <?php foreach ($languages as $language) { ?>
                          <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span>
                            <input type="text" name="module_mp_accountlinks_link[<?php echo $link_row; ?>][description][<?php echo $language['language_id']; ?>][title]" value="<?php echo isset($module_mp_accountlinks_link['description'][$language['language_id']]['title']) ? $module_mp_accountlinks_link['description'][$language['language_id']]['title'] : ''; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />
                          </div>
                          <?php } ?>
                        </td>
                        <td class="text-right">
                          <input type="text" name="module_mp_accountlinks_link[<?php echo $link_row; ?>][link]" value="<?php echo $module_mp_accountlinks_link['link']; ?>" class="form-control" />
                        </td>
                        <td class="text-right">
                          <input type="text" name="module_mp_accountlinks_link[<?php echo $link_row; ?>][icon]" value="<?php echo $module_mp_accountlinks_link['icon']; ?>" data-placement="bottomLeft" class="form-control iconpicker iconpicker-auto" />
                        </td>
                        <td class="text-left"><button type="button" onclick="$('#link-row<?php echo $link_row; ?>').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
                      </tr>
                      <?php $link_row++; ?>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="3"></td>
                        <td class="text-left"><button type="button" onclick="addLink();" data-toggle="tooltip" title="<?php echo $button_link_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
              <fieldset>
                <h3><?php echo $fieldset_more; ?></h3>                
                <br/>
                <div class="table-responsive">
                  <table id="more" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-left"><?php echo $column_title; ?></td>
                        <td class="text-left"><?php echo $column_link; ?></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $more_row = 0; ?>
                      <?php foreach ($module_mp_accountlinks_mores as $module_mp_accountlinks_more) { ?>
                      <tr id="more-row<?php echo $more_row; ?>">
                        <td>
                          <?php foreach ($languages as $language) { ?>
                          <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span>
                            <input type="text" name="module_mp_accountlinks_more[<?php echo $more_row; ?>][description][<?php echo $language['language_id']; ?>][title]" value="<?php echo isset($module_mp_accountlinks_more['description'][$language['language_id']]['title']) ? $module_mp_accountlinks_more['description'][$language['language_id']]['title'] : ''; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />
                          </div>
                          <?php } ?>
                        </td>
                        <td class="text-right">
                          <input type="text" name="module_mp_accountlinks_more[<?php echo $more_row; ?>][link]" value="<?php echo $module_mp_accountlinks_more['link']; ?>" class="form-control" />
                        </td>
                        <td class="text-left"><button type="button" onclick="$('#more-row<?php echo $more_row; ?>').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
                      </tr>
                      <?php $more_row++; ?>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="2"></td>
                        <td class="text-left"><button type="button" onclick="addMoreLink();" data-toggle="tooltip" title="<?php echo $button_more_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>
            <div id="tab-contact" class="tab-pane">
              <fieldset>
                <h3><?php echo $fieldset_contact; ?></h3>
                <div class="form-group">
                  <label class="col-sm-2 control-label"><?php echo $entry_title; ?></label>
                  <div class="col-sm-10">
                    <?php foreach ($languages as $language) { ?>
                    <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span>
                      <input type="text" name="module_mp_accountlinks_contact_description[<?php echo $language['language_id']; ?>][title]" value="<?php echo isset($module_mp_accountlinks_contact_description[$language['language_id']]) ? $module_mp_accountlinks_contact_description[$language['language_id']]['title'] : ''; ?>" placeholder="<?php echo $entry_title; ?>" class="form-control" />
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"><?php echo $entry_icon; ?></label>
                  <div class="col-sm-3">
                    <input type="text" name="module_mp_accountlinks_contact_icon" value="<?php echo $module_mp_accountlinks_contact_icon; ?>" data-placement="bottomLeft" class="form-control iconpicker iconpicker-auto" />
                  </div>
                </div>                
                <div class="form-group mp-buttons">
                  <label class="col-sm-2 control-label"><?php echo $entry_status; ?></label>
                  <div class="col-sm-2">
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                      <label class="btn btn-primary <?php echo !empty($module_mp_accountlinks_contact_status) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_contact_status" value="1" <?php echo (!empty($module_mp_accountlinks_contact_status)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_enabled; ?>                            
                      </label>
                      <label class="btn btn-primary <?php echo empty($module_mp_accountlinks_contact_status) ? 'active' : ''; ?>">
                        <input type="radio" name="module_mp_accountlinks_contact_status" value="0" <?php echo (empty($module_mp_accountlinks_contact_status)) ? 'checked="checked"' : ''; ?> />
                        <?php echo $text_disabled; ?>                            
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id="tab-color" class="tab-pane">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_profile_info_bg; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_profile_info_bg" value="<?php echo $module_mp_accountlinks_profile_info_bg; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_profile_text_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_profile_text_color" value="<?php echo $module_mp_accountlinks_profile_text_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_links_bgcolor; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_links_bgcolor" value="<?php echo $module_mp_accountlinks_links_bgcolor; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_links_text_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_links_text_color" value="<?php echo $module_mp_accountlinks_links_text_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_links_text_hover_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_links_text_hover_color" value="<?php echo $module_mp_accountlinks_links_text_hover_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_links_border_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_links_border_color" value="<?php echo $module_mp_accountlinks_links_border_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_button_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_button_color" value="<?php echo $module_mp_accountlinks_button_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_button_hover_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_button_hover_color" value="<?php echo $module_mp_accountlinks_button_hover_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_adminchat_bgcolor; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_adminchat_bgcolor" value="<?php echo $module_mp_accountlinks_adminchat_bgcolor; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_adminchat_icon_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_adminchat_icon_color" value="<?php echo $module_mp_accountlinks_adminchat_icon_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_adminchat_heading_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_adminchat_heading_color" value="<?php echo $module_mp_accountlinks_adminchat_heading_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_adminchat_form_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_adminchat_form_color" value="<?php echo $module_mp_accountlinks_adminchat_form_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo $entry_adminchat_fields_error_color; ?></label>
                    <div class="col-sm-6">
                      <div class="input-group colorpicker colorpicker-component"> 
                        <input type="text" name="module_mp_accountlinks_adminchat_fields_error_color" value="<?php echo $module_mp_accountlinks_adminchat_fields_error_color; ?>" class="form-control" /> 
                        <span class="input-group-addon"><i></i></span> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <fieldset>
                <h3><?php echo $fieldset_shadow; ?></h3>              
                <br/><br/>  
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo $entry_profile_info_bg_shadow; ?></label>
                      <div class="col-sm-6">
                        <div class="input-group colorpicker colorpicker-component"> 
                          <input type="text" name="module_mp_accountlinks_profile_info_bg_shadow" value="<?php echo $module_mp_accountlinks_profile_info_bg_shadow; ?>" class="form-control" /> 
                          <span class="input-group-addon"><i></i></span> 
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo $entry_links_icon_color; ?></label>
                      <div class="col-sm-6">
                        <div class="input-group colorpicker colorpicker-component"> 
                          <input type="text" name="module_mp_accountlinks_links_icon_color" value="<?php echo $module_mp_accountlinks_links_icon_color; ?>" class="form-control" /> 
                          <span class="input-group-addon"><i></i></span> 
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo $entry_buttons_shadow; ?></label>
                      <div class="col-sm-6">
                        <div class="input-group colorpicker colorpicker-component"> 
                          <input type="text" name="module_mp_accountlinks_buttons_shadow" value="<?php echo $module_mp_accountlinks_buttons_shadow; ?>" class="form-control" /> 
                          <span class="input-group-addon"><i></i></span> 
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo $entry_adminchat_fields_shadow; ?></label>
                      <div class="col-sm-6">
                        <div class="input-group colorpicker colorpicker-component"> 
                          <input type="text" name="module_mp_accountlinks_adminchat_fields_shadow" value="<?php echo $module_mp_accountlinks_adminchat_fields_shadow; ?>" class="form-control" /> 
                          <span class="input-group-addon"><i></i></span> 
                        </div>
                      </div>
                    </div>              
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo $entry_adminchat_fields_error_shadow; ?></label>
                      <div class="col-sm-6">
                        <div class="input-group colorpicker colorpicker-component"> 
                          <input type="text" name="module_mp_accountlinks_adminchat_fields_error_shadow" value="<?php echo $module_mp_accountlinks_adminchat_fields_error_shadow; ?>" class="form-control" /> 
                          <span class="input-group-addon"><i></i></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="tab-pane" id="tab-css">
              <fieldset>
                <h3><?php echo $fieldset_css; ?></h3>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-css"><?php echo $entry_css; ?></label>
                  <div class="col-sm-10">
                    <textarea name="module_mp_accountlinks_css" rows="10" id="input-css" class="form-control"><?php echo $module_mp_accountlinks_css; ?></textarea>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript"><!--
var link_row = <?php echo $link_row; ?>;

function addLink() {
  html  = '<tr id="link-row' + link_row + '">';
  html += '  <td class="text-right">';  
  <?php foreach ($languages as $language) { ?>
  html += '     <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span> <input type="text" name="module_mp_accountlinks_link[' + link_row + '][description][<?php echo $language['language_id']; ?>][title]" value="" class="form-control" /></div>';
  <?php } ?>
  html += '  </td>';
  html += '  <td class="text-right"><input type="text" name="module_mp_accountlinks_link[' + link_row + '][link]" value="" class="form-control" /></td>';
  html += '  <td class="text-right"><input type="text" name="module_mp_accountlinks_link[' + link_row + '][icon]" value="" data-placement="bottomLeft" class="form-control iconpicker iconpicker-auto" /></td>';
  html += '  <td class="text-left"><button type="button" onclick="$(\'#link-row' + link_row + '\').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
  html += '</tr>';

  $('#link tbody').append(html);

  $('.iconpicker-auto').iconpicker();

  link_row++;
}
//--></script>

<script type="text/javascript"><!--
var more_row = <?php echo $more_row; ?>;

function addMoreLink() {
  html  = '<tr id="more-row' + more_row + '">';
  html += '  <td class="text-right">';  
  <?php foreach ($languages as $language) { ?>
  html += '     <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span> <input type="text" name="module_mp_accountlinks_more[' + more_row + '][description][<?php echo $language['language_id']; ?>][title]" value="" class="form-control" /></div>';
  <?php } ?>
  html += '  </td>';
  html += '  <td class="text-right"><input type="text" name="module_mp_accountlinks_more[' + more_row + '][link]" value="" class="form-control" /></td>';
  html += '  <td class="text-left"><button type="button" onclick="$(\'#more-row' + more_row + '\').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
  html += '</tr>';

  $('#more tbody').append(html);

  more_row++;
}
//--></script>
<script>
$('.iconpicker-auto').iconpicker();
</script>
<script type="text/javascript"><!--
$(function() { $('.colorpicker').colorpicker(); });
//--></script>
</div>
<?php echo $footer; ?>