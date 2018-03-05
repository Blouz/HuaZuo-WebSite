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
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>
      </div>
      <div class="panel-body">
        <form action="{{ action; ?>" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">
        <input type="hidden" name="module" value="{{ module;?>" />
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-width">{{ entry_width }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_AutoResize[maxWidth]" value="{{ maxWidth }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-height">{{ entry_height }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_AutoResize[maxHeight]" value="{{ maxHeight }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-height">{{ entry_quality }}</label>
            <div class="col-sm-10">
              <input type="text" name="pim_AutoResize[quality]" value="{% if quality %} {{ quality }} {% else %} '90' {% endif %}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />
            </div>
          </div>          
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}