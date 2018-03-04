{{ header }} {{ column_left }} 
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-featured" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class="breadcrumb">
        {% for breadcrumb in breadcrumbs %} 
        <li><a href="{{ breadcrumb.href }} ">{{ breadcrumb.text }} </a></li>
        {% endfor %} 
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>
      </div>
      <div class="panel-body">
        <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">
        <input type="hidden" name="module" value="{{ module;?>" />
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>
            <div class="col-sm-10">
              <select name="pim_Watermark[enable]" id="input-status" class="form-control">
                
								{% if enable == true %}
                <option value="true" selected="selected">{{ text_enabled }}</option>
                <option value="false">{{ text_disabled }}</option>
								{% else %}
									<option value="true">{{ text_enabled }}</option>
									<option value="false" selected="selected">{{ text_disabled }}</option>
								{% endif %}                
              </select>
            </div>
          </div>        
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-image">{{ entry_source }}</label>
            <div class="col-sm-10">
              <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ source_thumb }}" alt="" title="" data-placeholder="{{ source_thumb }}" /></a>
              <input type="hidden" name="pim_Watermark[source]" value="{{ source }}" id="input-image" />
            </div>
          </div>          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-marginRight">{{ entry_marginRight }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_Watermark[marginRight]" value="{% if marginRight %} {{ marginRight }} {% else %} '5' {% endif %}" placeholder="{{ entry_marginRight }}" id="input-marginRight" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-marginBottom">{{ entry_marginBottom }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_Watermark[marginBottom]" value="{% if marginBottom %} {{ marginBottom }} {% else %} '5' {% endif %}" placeholder="{{ entry_marginBottom }}" id="input-marginBottom" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-quality">{{ entry_quality }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_Watermark[quality]" value="{% if quality %} {{ quality }} {% else %} '90' {% endif %} " placeholder="{{ entry_quality }}" id="input-quality" class="form-control" />
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-transparency">{{ entry_transparency }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_Watermark[transparency]" value="{% if transparency %} {{ transparency }} {% else %} '10' {% endif %}" placeholder="{{ entry_transparency }}" id="input-entry_transparency" class="form-control" />
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-minPixel">{{ entry_targetMinPixel }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_Watermark[targetMinPixel]" value="{% if targetMinPixel %} {{ targetMinPixel }} {% else %} '200' {% endif %}" placeholder="{{ entry_targetMinPixel }}" id="input-minpixels" class="form-control" />
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-transparency">{{ entry_force_transparent }}</label>
            <div class="col-sm-10">
              <input type="checkbox" name="pim_Watermark[force_transparent]" value="1" id="input-transparency" class="form-control" {% if force_transparent==true %} checked="checked" {% endif %} />
            </div>
          </div>         
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}