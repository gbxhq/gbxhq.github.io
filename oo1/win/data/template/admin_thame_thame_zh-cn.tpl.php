<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:76:"/home/oowin/domains/oo1.win/public_html/win/./admin/thame/template/thame.htm";i:1492235054;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/thame/template/left.htm";i:1492235054;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> -<?php } ?><?php echo $_G['setting']['sitename'];?> </title>
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo htmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo htmlspecialchars($metadescription); ?> <?php } ?>" />
<meta name="generator" content="DzzOffice" />
<meta name="author" content="DzzOffice" />
<meta name="copyright" content="2012-2017 www.dzzoffice.com" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<meta name="renderer" content="webkit">
<base href="<?php echo $_G['siteurl'];?>" />
<link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css?<?php echo VERHASH;?>">

<script src="static/jquery/jquery.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="dzz/scripts/jquery.json-2.4.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<!--[if lt IE 9]>
  <script src="static/bootstrap/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="static/bootstrap/js/respond.min.js" type="text/javascript"></script>
<![endif]-->
<link href="static/css/common.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="admin/thame/images/style.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="admin/scripts/admin.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<style>
html,
body {
overflow: hidden;
background: #FBFBFB;
}

.bs-left-container {
width: 120px;
}

.bs-main-container {
margin-left: 120px;
overflow: auto;
}
</style><script src="./data/template/admin_thame_thame_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/admin_thame_thame__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<div class="bs-container clearfix">
<div class="bs-left-container  clearfix"><ul class="nav nav-pills nav-stacked nav-pills-leftguide" >
    <li <?php if(!$operation) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>">主题设置</a>
    </li>
    <li <?php if($operation=='syscolor') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=syscolor">偏好色设置</a>
    </li>
    <li <?php if($operation=='color') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=color">颜色类壁纸</a>
    </li>
    <li <?php if($operation=='repeat') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=repeat">平铺类壁纸</a>
    </li>
    <li <?php if($operation=='scale') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=scale">拉伸类壁纸</a>
    </li>
    <li <?php if($operation=='url') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=url">动态壁纸</a>
    </li>
  </ul></div>
<div class="left-drager">
<div class="left-drager-op">
<div class="left-drager-sub"></div>
</div>
</div>

<div class="bs-main-container  clearfix">

<?php if(!$operation) { ?>
<div class="main-header clearfix">
<ul class="nav nav-pills nav-pills-bottomguide">
<li <?php if(!$do) { ?> class="active"<?php } ?>>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>">全部主题</a>
</li>
<li>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&op=list">未安装主题</a>
</li>
<li class="pull-right">
<a href="<?php echo ADMINSCRIPT;?>?mod=thame&op=edit">添加主题</a>
</li>
</ul>
</div>
<div class="main-content clearfix" style="padding:20px;border-top:1px solid #FFF">
<?php if($count) { ?>
<ul id="colorContainer" class="thumbnails list-unstyled"><?php if(is_array($thames)) foreach($thames as $key => $value) { ?><li id="thame_<?php echo $value['id'];?>" class=" thame_block">
<div class="clearfix" style="position:relative;padding:10px 10px 0">
<div class="delete" style="position:absolute;right:10px;top:10px;width:100px">
<a href="javascript:;" onclick="deletethame('<?php echo $value['id'];?>');return false" title="删除"><i class="glyphicon glyphicon-trash ibtn"></i></a>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&op=edit&id=<?php echo $value['id'];?>" title="编辑"><i class="glyphicon glyphicon-edit ibtn"></i></a>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&op=cp&do=export&id=<?php echo $value['id'];?>" title="导出" target="_blank"><i class="glyphicon glyphicon-export ibtn"></i></a>
</div>
<p class="text-center">
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&op=edit&id=<?php echo $value['id'];?>"><img title="<?php echo $value['title'];?>" alt="<?php echo $value['title'];?>" class="img-thumbnail img_120_75" src="<?php echo $value['thumb'];?>" /></a>
</p>
<p class="text-center" style="margin:0">
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&op=edit&id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a>
</p>
</div>
</li>
<?php } ?>
</ul>
<?php if($multi) { ?>
<div class="text-center clearfix"><?php echo $multi;?></div>
<?php } } else { ?>
<div class="well well-small">还没有添加主题，
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&op=edit">添加主题</a>
</div>
<?php } ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
var el = jQuery('.thame_block');
el.on('mouseenter', function() {
jQuery(this).addClass('hover');
});
el.on('mouseleave', function() {
jQuery(this).removeClass('hover');
});
});

function deletethame(id) {
if(confirm('确定要删除此主题？')) {
jQuery.getJSON('<?php echo ADMINSCRIPT;?>?mod=thame&op=ajax&do=deletethame&id=' + id, function(json) {
if(json.error) {

} else {
jQuery('#thame_' + id).remove();
}
});
}
}
</script>

<?php } elseif($operation=='color') { ?>
<div class="main-header clearfix" style="position:inherit;padding:5px;"> <span style="line-height:30px;float:left">选择颜色添加&nbsp;&nbsp;</span>
<div class="input-group pull-left" style="width:180px;padding-right:20px;">
<input id="color_val" type="text" value="#000" class="form-control input-sm" placeholder="点击右侧色块选择颜色">
<a class="input-group-addon" initialized="true" id="c1" onclick="c1_frame.location='static/image/tool/getcolor.htm?c1|color_val';showMenu({'ctrlid':'c1'})" style="background-color: #000;width:30px;"></a>
</div>
<button type="button" class="btn btn-primary btn-sm pull-left" onclick="addColor(this)">添加</button>
<span style="line-height:30px;float:left" id="return_color"></span> <span id="c1_menu" style="display: none">
    			<iframe name="c1_frame" src="" frameborder="0" height="148" scrolling="no" width="210"></iframe>
</span>
</div>
<div class="main-content clearfix" style="padding:15px;border-top:1px solid #FFF">
<ul id="colorContainer" class="clearfix list-unstyled"><?php if(is_array($list)) foreach($list as $key => $value) { ?><li id="color_<?php echo $value['bid'];?>" backimg="<?php echo $value['val'];?>" class="pull-left color_block" style="width:110px;height:110px;position:relative;padding:10px">
<a href="javascript:;" style="position:absolute;right:0px;top:0px;" class="delete" onclick="deletewallpaper('<?php echo $value['bid'];?>');return false" title="删除"><i class="glyphicon glyphicon-remove-sign"></i></a>
<!--  <button style="position:absolute;right:5px;top:5px;" type="button" class="delete pull-right"  aria-hidden="true" onclick="deletewallpaper('<?php echo $value['bid'];?>')" title="删除"></button>-->
<a class="img-thumbnail" style="display:inline-block;width:90px;height:90px;background:<?php echo $value['val'];?>" title="<?php echo $value['title'];?>"></a>
</li>
<?php } ?>
</ul>
<?php if($multi) { ?>
<div class="text-center clearfix" style="margin:10px"><?php echo $multi;?></div>
<?php } if(!$count) { ?>
<div class="well well-small">还没有设置偏好色，请点击头上颜色选择器选择颜色添加</div>
<?php } ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
var el = jQuery('.color_block');
el.on('mouseenter', function() {
jQuery(this).addClass('hover');
});
el.on('mouseleave', function() {
jQuery(this).removeClass('hover');
});
el.on('click', function() {
jQuery('.color_block').removeClass('active1');
jQuery(this).addClass('active1');
document.getElementById('color_val').value = jQuery(this).attr('backimg');
document.getElementById('c1').style.backgroundColor = jQuery(this).attr('backimg');
});
});
var colorTimer = 0;

function addColor(obj) {
var color = jQuery('#color_val').val();
jQuery.getJSON('<?php echo ADMINSCRIPT;?>?mod=thame&op=ajax&do=addcolor&val=' + encodeURIComponent(color), function(json) {
if(json && json.bid > 0) {
var el = jQuery('<li id="color_' + json.bid + '" class="pull-left color_block" style="width:110px;height:110px;position:relative;padding:10px"><a href="javascript:;" style="position:absolute;right:0px;top:0px;" class="delete" onclick="deletewallpaper(\'' + json.bid + '\')" title="删除"><i class="glyphicon glyphicon-remove-sign"></i></a><a class="img-thumbnail"  style="display:inline-block;width:90px;height:90px;background:' + json.val + '"></a></li>')
.on('mouseenter', function() {
jQuery(this).addClass('hover');
})
.on('mouseleave', function() {
jQuery(this).removeClass('hover');

});
if(jQuery('#colorContainer').children().length > 0) {
jQuery('#colorContainer').children().first().before(el);
} else {
el.appendTo('#colorContainer');
}
jQuery('#return_color').html('<span class="text-success">添加成功</span>');
jQuery('.well').remove();
} else if(json && json.error) {
jQuery('#return_color').html('<span class="text-danger">' + json.error + '</span>');
}

if(colorTimer) window.clearTimeout(colorTimer);
colorTimer = window.setTimeout(function() { jQuery('#return_color').html('') }, 3000);
});
}
</script>
<?php } elseif($operation=='syscolor') { ?>
<div class="main-header clearfix" style="position:inherit;padding:5px;"> <span style="line-height:30px;float:left">选择颜色添加&nbsp;&nbsp;</span>
<div class="input-group pull-left" style="width:180px;padding-right:20px;">
<input id="color_val" type="text" value="#000" class="form-control input-sm" placeholder="点击右侧色块选择颜色">
<a class="input-group-addon" initialized="true" id="c1" onclick="c1_frame.location='static/image/tool/getcolor.htm?c1|color_val';showMenu({'ctrlid':'c1'})" style="background-color: #000;width:30px;"></a>
</div>
<button type="button" class="btn btn-primary btn-sm pull-left" onclick="addColor(this)">添加</button>
<span style="line-height:30px;float:left" id="return_color"></span> <span id="c1_menu" style="display: none">
    			<iframe name="c1_frame" src="" frameborder="0" height="148" scrolling="no" width="210"></iframe>
    		</span>
</div>
<div class="main-content clearfix" style="padding:15px;border-top:1px solid #FFF">
<ul id="colorContainer" class="clearfix list-unstyled"><?php if(is_array($list)) foreach($list as $key => $value) { ?><li id="color_<?php echo $value['bid'];?>" backimg="<?php echo $value['val'];?>" class="pull-left color_block" style="width:110px;height:110px;position:relative;padding:10px">
<a href="javascript:;" style="position:absolute;right:0px;top:0px;" class="delete" onclick="deletewallpaper('<?php echo $value['bid'];?>');return false" title="删除"><i class="glyphicon glyphicon-remove-sign"></i></a>
<a class="img-thumbnail" style="display:inline-block;width:90px;height:90px;background:<?php echo $value['val'];?>" title="<?php echo $value['title'];?>"></a>
</li>
<?php } ?>
</ul>
<?php if($multi) { ?>
<div class="text-center clearfix" style="margin:10px"><?php echo $multi;?></div>
<?php } if(!$count) { ?>
<div class="well well-small">还没有设置偏好色，请点击头上颜色选择器选择颜色添加</div>
<?php } ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
var el = jQuery('.color_block');
el.on('mouseenter', function() {
jQuery(this).addClass('hover');
});
el.on('mouseleave', function() {
jQuery(this).removeClass('hover');
});
el.bind('click', function() {
jQuery('.color_block').removeClass('active1');
jQuery(this).addClass('active1');
document.getElementById('color_val').value = jQuery(this).attr('backimg');
document.getElementById('c1').style.backgroundColor = jQuery(this).attr('backimg');

});
});
var colorTimer = 0;

function addColor() {
var color = jQuery('#color_val').val();

jQuery.getJSON('<?php echo ADMINSCRIPT;?>?mod=thame&op=ajax&do=addsyscolor&val=' + encodeURIComponent(color), function(json) {
if(json && json.bid > 0) {
var el = jQuery('<li id="color_' + json.bid + '" class="pull-left color_block" style="width:110px;height:110px;position:relative;padding:10px"><a href="javascript:;" style="position:absolute;right:0px;top:0px;" class="delete" onclick="deletewallpaper(\'' + json.bid + '\')" title="删除"><i class="glyphicon glyphicon-remove-sign"></i></a><a class="img-thumbnail"  style="display:inline-block;width:90px;height:90px;background:' + json.val + '"></a></li>')
.on('mouseenter', function() {
jQuery(this).addClass('hover');
})
.on('mouseleave', function() {
jQuery(this).removeClass('hover');

});
if(jQuery('#colorContainer').children().length > 0) {
jQuery('#colorContainer').children().first().before(el);
} else {
el.appendTo('#colorContainer');
}
jQuery('#return_color').html('<span class="text-success">添加成功</span>');
jQuery('.well').remove();
} else if(json && json.error) {
jQuery('#return_color').html('<span class="text-danger">' + json.error + '</span>');
}

if(colorTimer) window.clearTimeout(colorTimer);
colorTimer = window.setTimeout(function() { jQuery('#return_color').html('') }, 3000);
});
}
</script>
<?php } elseif($operation=='repeat') { ?>
<div class="main-header clearfix">
<ul class="nav nav-pills nav-pills-bottomguide">
<li <?p��O    ��O                    �Q(            `�M    (�O            �O     @      �O            ho $mod;?>&operation=<?php echo $operation;?>">全部</a>
</li><?php if(is_array($class)) foreach($class as $value) { ?><li <?php if($value['classid']==$classid) { ?>class="active"<?php } ?>>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&operation=<?php echo $operation;?>&classid=<?php echo $value['classid'];?>"><?php echo $value['classname'];?></a>
</li>
<?php } ?>
<li <?php if($do=='class' ) { ?> class="active"<?php } ?>>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&operation=repeat&do=class">分类管理</a>
</li>
</ul>
</div>
<?php if($do=='class') { ?>
<div class="main-content clearfix" style="padding:0;border-top:1px solid #FFF">
<form name="cpform" class="form-horizontal form-horizontal-left" method="post" action="<?php echo ADMINSCRIPT;?>?mod=thame&operation=class" id="cpform">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="type" value="<?php echo $operation;?>">
<ul id="classContainer" class="clearfix list-unstyled">
<table class="table table-hover">
<thead>
<tr>
<th width="40">&nbsp;</th>
<th width="60p">排序</th>
<th>分类名称</th>
</tr>
</thead>
<tbody><?php if(is_array($class)) foreach($class as $value) { ?><tr>
<td><input type="hidden" name="ids[<?php echo $value['classid'];?>]" value="<?php echo $value['classid'];?>">
<input type="checkbox" name="del[]" value="<?php echo $value['classid'];?>" style="width:40px;" /></td>
<td><input type="text" class="form-control" value="<?php echo $value['disp'];?>" name="disp[<?php echo $value['classid'];?>]" class="form-control" style="width:45px"></td>
<td><input value="<?php echo $value['classname'];?>" class="form-control" type="text" name="classname[<?php echo $value['classid'];?>]" class="input-lg"></td>
</tr>
<?php } ?>
</tbody>
<thead>
<tr>
<td colspan="5">&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="chkall" id="chkall" class="checkbox-inline ml20" onclick="checkAll('prefix', this.form, 'del')" title="删"> &nbsp;删？&nbsp;&nbsp;&nbsp;
<input type="submit" class="btn btn-primary" value="提交" /> &nbsp;&nbsp;&nbsp;
<button class="btn btn-success" onclick="addClass();return false">添加新分类</button>
</td>
</tr>
</thead>
</table>
</ul>
</form>
<?php if(!$class) { ?>
<div class="alert alert-warning">可以点击下面的添加分类按钮来添加分类</div>
<?php } ?>
</div>
<script type="text/javascript">
function addClass() {
var html = '<tr>';
html += '<td>&nbsp;</td>';
html += '<td><input type="text" value="0" name="newdisp[]" class="form-control" style="width:40px;" ></td>';
html += '<td><input value="" type="text" name="newclassname[]" class="form-control"></td>';
html += '</tr>';
// jQuery(html).appendTo('#classContainer');
jQuery('#classContainer tbody').append(html);
}
</script>
<?php } else { ?>
<div class="main-content clearfix" style="padding:15px;border-top:1px solid #FFF">
<div class="" style="border:1px solid #CCC;margin-bottom:10px;">
<div style="line-height:30px;height:30px;padding:0 10px;font-size:16px;font-weight:bold;background:#F7F7F7;border-bottom:1px solid #CCC;margin-bottom:10px;">添加壁纸</div>
<form name="cpform" class="form-horizontal form-horizontal-left" method="post" action="<?php echo ADMINSCRIPT;?>?mod=thame&operation=repeat&do=add" id="cpform" enctype="multipart/form-data">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="type" value="repeat">
<div class="form-group">
<label class="control-label" style="width:140px" for="classid">选择壁纸分类：</label>
<select id="classid" name="classid" style="margin: 0px;" class="form-control">
<option value="0">选择壁纸分类</option><?php if(is_array($class)) foreach($class as $value) { ?><option value="<?php echo $value['classid'];?>" <?php if($value['classid']==$classid) { ?>selected="selected"<?php } ?>><?php echo $value['classname'];?></option>
<?php } ?>
</select>
</div>
<div class="form-group">
<label class="control-label" style="width:140px" for="backimg">上传壁纸：</label>
<input name="backimg" id="backimg" value="" type="file" class="form-control">
</div>
<div class="form-group">
<label class="control-label" style="width:140px;"></label>
<input class="btn btn-primary" id="submit_stylesubmit" name="stylesubmit" title="" value="上传" type="submit">
</div>
</form>
</div>
<?php if($count) { ?>
<ul id="colorContainer" class="clearfix list-unstyled"><?php if(is_array($list)) foreach($list as $key => $value) { ?><li id="color_<?php echo $value['bid'];?>" class="pull-left color_block" style="padding:10px;width:110px;height:110px;position:relative">
<a href="javascript:;" style="position:absolute;right:0px;top:0px;" class="delete" onclick="deletewallpaper('<?php echo $value['bid'];?>');return false" title="删除"><i class="glyphicon glyphicon-remove-sign"></i></a>
<a class="img-thumbnail" style="display:inline-block;width:90px;height:90px;background:url(<?php echo $value['val'];?>)" title="<?php echo $value['title'];?>"></a>
</li>
<?php } ?>
</ul>
<?php if($multi) { ?>
<div class="text-center clearfix"><?php echo $multi;?></div>
<?php } } else { ?>
<div class="well well-small">此分类没有壁纸</div>
<?php } ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
var el = jQuery('.color_block');
el.on('mouseenter', function() {
jQuery(this).addClass('hover');
});
el.on('mouseleave', function() {
jQuery(this).removeClass('hover');
});
});
</script>
<?php } } elseif($operation=='scale') { ?>
<div class="main-header clearfix">
<ul class="nav nav-pills nav-pills-bottomguide">
<li <?php if(!$do && !$classid) { ?> class="active"<?php } ?>>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&operation=<?php echo $operation;?>">全部</a>
</li><?php if(is_array($class)) foreach($class as $value) { ?><li <?php if($value['classid']==$classid) { ?>class="active"<?php } ?>>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&operation=<?php echo $operation;?>&classid=<?php echo $value['classid'];?>"><?php echo $value['classname'];?></a>
</li>
<?php } ?>
<li <?php if($do=='class' ) { ?> class="active"<?php } ?>>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&operation=scale&do=class">分类管理</a>
</li>
</ul>
</div>
<?php if($do=='class') { ?>
<div class="main-content clearfix" style="padding:0;border-top:1px solid #FFF">
<form name="cpform" class="form-horizontal form-horizontal-left" method="post" action="<?php echo ADMINSCRIPT;?>?mod=thame&operation=class" id="cpform">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="type" value="<?php echo $operation;?>">
<ul id="classContainer" class="clearfix list-unstyled">
<table class="table table-hover">
<thead>
<tr>
<th width="40">&nbsp;</th>
<th width="60p">排序</th>
<th>分类名称</th>
</tr>
</thead>
<tbody><?php if(is_array($class)) foreach($class as $value) { ?><tr>
<td><input type="hidden" name="ids[<?php echo $value['classid'];?>]" value="<?php echo $value['classid'];?>">
<input type="checkbox" name="del[]" value="<?php echo $value['classid'];?>" style="width:40px;" /></td>
<td><input type="text" class="form-control" value="<?php echo $value['disp'];?>" name="disp[<?php echo $value['classid'];?>]" class="form-control" style="width:45px"></td>
<td><input value="<?php echo $value['classname'];?>" class="form-control" type="text" name="classname[<?php echo $value['classid'];?>]" class="input-lg"></td>
</tr>
<?php } ?>
</tbody>
<thead>
<tr>
<td colspan="5">&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="chkall" id="chkall" class="checkbox-inline ml20" onclick="checkAll('prefix', this.form, 'del')" title="删"> &nbsp;删？&nbsp;&nbsp;&nbsp;
<input type="submit" class="btn btn-primary" value="提交" /> &nbsp;&nbsp;&nbsp;
<button class="btn btn-success" onclick="addClass();return false">添加新分类</button>
</td>
</tr>
</thead>
</table>
</ul>
</form>
<?php if(!$class) { ?>
<div class="alert alert-warning">可以点击下面的添加分类按钮来添加分类</div>
<?php } ?>
</div>
<script type="text/javascript">
function addClass() {
var html = '<tr>';
html += '<td>&nbsp;</td>';
html += '<td><input type="text" value="0" name="newdisp[]" class="form-control" style="width:40px;" ></td>';
html += '<td><input value="" type="text" name="newclassname[]" class="form-control"></td>';
html += '</tr>';
// jQuery(html).appendTo('#classContainer');
jQuery('#classContainer tbody').append(html);
}
</script>
<?php } else { ?>
<div class="main-content clearfix" style="padding:10px;border-top:1px solid #FFF">
<div class="" style="border:1px solid #CCC;margin-bottom:10px;">
<div style="line-height:30px;height:30px;padding:0 10px;font-size:16px;font-weight:bold;background:#F7F7F7;border-bottom:1px solid #CCC;margin-bottom:10px;">添加壁纸</div>
<form name="cpform" class="form-horizontal form-horizontal-left" method="post" action="<?php echo ADMINSCRIPT;?>?mod=thame&operation=scale&do=add" id="cpform" enctype="multipart/form-data">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="type" value="scale">
<div class="form-group">
<label class="control-label" style="width:140px" for="classid">选择壁纸分类：</label>
<select id="classid" name="classid" style="margin: 0px;" class="form-control">
<option value="0">选择壁纸分类</option><?php if(is_array($class)) foreach($class as $value) { ?><option value="<?php echo $value['classid'];?>" <?php if($value['classid']==$classid) { ?>selected="selected"<?php } ?>><?php echo $value['classname'];?></option>
<?php } ?>
</select>
</div>
<div class="form-group">
<label class="control-label" style="width:140px" for="backimg">上传壁纸：</label>
<input name="backimg" id="backimg" value="" type="file" class="form-control">
</div>
<div class="form-group">
<label class="control-label" style="width:140px;"></label>
<input class="btn btn-primary" id="submit_stylesubmit" name="stylesubmit" title="" value="上传" type="submit">
</div>
</form>
</div>
<?php if($count) { ?>
<ul id="colorContainer" class="clearfix list-unstyled"><?php if(is_array($list)) foreach($list as $key => $value) { ?><li id="color_<?php echo $value['bid'];?>" class="pull-left color_block text-center" style="padding:10px;width:130px;height:90px;position:relative">
<a href="javascript:;" style="position:absolute;right:0px;top:0px;" class="delete" onclick="deletewallpaper('<?php echo $value['bid'];?>');return false" title="删除"><i class="glyphicon glyphicon-remove-sign"></i></a>
<a href="<?php echo $value['val'];?>" target="_blank"><img title="<?php echo $value['title'];?>" alt="<?php echo $value['title'];?>" class="img-thumbnail img_100_64" src="<?php echo $value['thumbpic'];?>" /></a>
</li>
<?php } ?>
</ul>
<?php if($multi) { ?>
<div class="text-center clearfix"><?php echo $multi;?></div>
<?php } } else { ?>
<div class="well well-small">还没有壁纸</div>
<?php } ?>

</div>
<script type="text/javascript">
jQuery(document).ready(function() {
var el = jQuery('.color_block');
el.on('mouseenter', function() {
jQuery(this).addClass('hover');
});
el.on('mouseleave', function() {
jQuery(this).removeClass('hover');
});
});
</script>
<?php } } elseif($operation=='url') { ?>
<div class="main-content clearfix" style="padding:10px;border-top:1px solid #FFF">
<div style="border:1px solid #CCC;margin-bottom:10px;">
<div style="line-height:30px;height:30px;padding:0 10px;font-size:16px;font-weight:bold;background:#F7F7F7;border-bottom:1px solid #CCC;margin-bottom:10px;">添加动态壁纸</div>
<form name="cpform" class="form-horizontal form-horizontal-left" method="post" action="<?php echo ADMINSCRIPT;?>?mod=thame&operation=url&do=add" id="cpform" enctype="multipart/form-data">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="type" value="url">
<div class="form-group">
<label class="control-label" for="title">壁纸名称：</label>
<input class="form-control" name="title" id="title" value="" type="text" style="height:auto">
<span class="help-inline">可选，壁纸的名称</span> </div>
<div class="form-group">
<label class="control-label" for="val">壁纸地址：</label>
<input class="form-control" name="val" id="val" value="" type="text" style="height:auto">
<span class="help-inline">可以是相对于根目录的相对地址，或网络地址</span> </div>
<div class="form-group">
<label class="control-label" for="backimg">上传缩略图：</label>
<input name="backimg" id="backimg" class="form-control" value="" type="file" class="file">
</div>
<div class="form-group">
<label class="control-label"></label>
<input class="btn btn-primary" id="submit_stylesubmit" name="stylesubmit" title="" value="上 传" type="submit">
</div>
</form>
</div>
<?php if($count) { ?>
<ul id="colorContainer" class="clearfix list-unstyled"><?php if(is_array($list)) foreach($list as $key => $value) { ?><li id="color_<?php echo $value['bid'];?>" class="pull-left color_block text-center" style="padding:10px;width:130px;height:90px;position:relative">
<a href="javascript:;" style="position:absolute;right:0px;top:0px;" class="delete" onclick="deletewallpaper('<?php echo $value['bid'];?>');return false" title="删除"><i class="glyphicon glyphicon-remove-sign"></i></a>
<a href="<?php echo $value['val'];?>" target="_blank"><img title="<?php echo $value['title'];?>" alt="<?php echo $value['title'];?>" class="img-thumbnail img_100_64" src="<?php echo $value['thumbpic'];?>" /></a>
</li>
<?php } ?>
</ul>
<?php if($multi) { ?>
<div class="text-center clearfix" style="margin:10px"><?php echo $multi;?></div>
<?php } } else { ?>
<div class="well well-small">还没有壁纸</div>
<?php } ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
var el = jQuery('.color_block');
el.on('mouseenter', function() {
jQuery(this).addClass('hover');
});
el.on('mouseleave', function() {
jQuery(this).removeClass('hover');
});
});
</script>

<?php } ?>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();

function deletewallpaper(bid) {
jQuery.getJSON('<?php echo ADMINSCRIPT;?>?mod=thame&op=ajax&do=delete&bid=' + bid, function(json) {
if(json.error) {
jQuery('#return_color').html('<span class="text-danger">' + json.error + '</span>');
} else {
jQuery('#color_' + bid).remove();
jQuery('#return_color').html('<span class="text-success">删除成功！</span>');
}
try {
if(colorTimer) window.clearTimeout(colorTimer);
colorTimer = window.setTimeout(function() { jQuery('#return_color').html('') }, 3000);
} catch(e) {}
});
}
</script><?php updatesession();?><?php if(debuginfo()) { ?>
<script type="text/javascript">
try{
if(console && console.log){
console.log('Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries <?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.');
}
}catch(e){}
</script>
<?php } ?>		
<script type="text/javascript">
try{
jQuery(document).on('mousedown',function(){
try{if(top!=window) top.dfire('mousedown');}catch(e){}
});
if ("onfocusin" in document){//for IE 
document.onfocusin = function() {
top.CurrentActive = true;
};
document.onfocusout = function() {
top.CurrentActive = false;
};
} else {
window.onfocus = function() {
top.CurrentActive = true;
}
window.onblur = function() {
top.CurrentActive = false;
}
}

jQuery(document).ready(function(e) {
        try{api.showLoading('hide');}catch(e){}
    });
window.onbeforeunload=function(){
try{if(!BROWSER.ie || BROWSER.ie>10) return api.showLoading('show');}catch(e){}
if(typeof beforeunload =='function') return beforeunload();
}
}catch(e){}
</script>
<?php if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="misc.php?mod=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['se��O    ��O                    �Q(            `�M    (�O            �O    �       �O            pt"></script>
<?php } ?>
</body>
</html>
