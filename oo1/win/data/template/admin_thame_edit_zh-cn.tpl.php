<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/thame/template/edit.htm";i:1492235054;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/thame/template/left.htm";i:1492235054;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
</style><script src="./data/template/admin_thame_edit_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/admin_thame_edit__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
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

<div class="main-header clearfix">
<ul class="nav nav-pills nav-pills-bottomguide">
<li>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>">全部主题</a>
</li>

<?php if(!$id) { ?>
<li class="active pull-right">
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&op=edit">添加主题</a>
</li>
<?php } if($id) { ?>
<li class="active">
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&op=edit&id=<?php echo $id;?>">编辑主题</a>
</li>
<?php } ?>
<li>
<a href="<?php echo ADMINSCRIPT;?>?mod=<?php echo $mod;?>&op=list">未安装主题</a>
</li>
</ul>
</div>

<div class="main-content clearfix" style="padding:15px 0 0;border-top:1px solid #FFF">
<form name="cpform" class="form-horizontal form-horizontal-left" method="post" action="<?php echo BASESCRIPT;?>?mod=thame&op=edit&id=<?php echo $id;?>" id="cpform" onsubmit="return  validate(this)">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="thamesubmit" value="true">
<div class="form-group">
<label class="control-label" for="name">主题名称</label>
<div class="controls">
<input name="thame[name]" id="name" value="<?php echo $thame['name'];?>" type="text" class="form-control" required="true" onblur="if(this.value==''){jQuery(this).addClass('input-error')}else{jQuery(this).removeClass('input-error');}"> &nbsp;&nbsp;
<label class="checkbox-inline "><input type="checkbox" name="thame[default]" value="1" <?php if($thame['default']>0) { ?>checked="checked"<?php } ?>>设为默认</label>
</div>
<ul class="help-block">
<li>主题名称，好的主题名称便于用户了解主题的特色</li><li>设为默认，游客或未设置主题的用户将默认使用此主题</li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="">版本</label>
<div class="controls">
<input name="thame[version]" class="form-control" value="<?php echo $thame['version'];?>" type="text" />
</div>
<span class="help-inline">主题版本号</span>
</div>
<div class="form-group">
<label class="control-label" for="">供应商</label>
<div class="controls">
<input name="thame[vendor]" class="form-control" value="<?php echo $thame['vendor'];?>" type="text" />
</div>
<span class="help-inline">主题供应商名称</span>
</div>
<div class="form-group">
<label class="control-label" for="">图片背景</label>
<div class="controls">
<input name="thame[backimg]" class="form-control" value="<?php echo $thame['backimg'];?>" type="text" />
</div>
<ul class="help-block">
<li> 留空将使用主题目录下的back.jpg作为背景</li><li> 可以是背景颜色，如:#F7F7F7 或 rgb(0,0,0)</li><li>也可以是背景图片，这里填写背景图的相对地址（相对于站点根目录）或者绝对地址</li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="">网址背景</label>
<div class="controls">
<input name="thame[url]" class="form-control" value="<?php echo $thame['url'];?>" type="text" />
</div>
<ul class="help-block">
<li> 留空，不使用</li>
						<li> 还可以利用网址作为背景（通常用于动态背景），可以是相对于站点根目录的相对地址或者绝对地址</li>
						<li class="text-danger"> 设置了网页背景后，图片背景将不起作用</li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="">背景显示方式</label>
<div class="controls  ml20">
<label class="radio radio-inline"><input type="radio" name="thame[btype]" value="1"  <?php if($thame['btype']==1 || !$thame['btype']) { ?>checked<?php } ?> />拉伸</label>
<label class="radio radio-inline"><input type="radio" name="thame[btype]" value="2" <?php if($thame['btype']==2) { ?>checked<?php } ?> />平铺</label>
<label class="radio radio-inline"><input type="radio" name="thame[btype]" value="3" <?php if($thame['btype']==3) { ?>checked<?php } ?> />居中</label>
</div>
<ul class="help-block"><li>设置背景图片的显示方式,背景为颜色或网址时不起作用</li></ul>
</div>
<div class="form-group">
<label class="control-label" for="">偏好色设置</label>
<div class="controls ml20">
<label class="radio radio-inline"><input type="radio" name="thame[enable_color]" value="0" <?php if($thame['enable_color']<1) { ?>checked<?php } ?> onclick="jQuery('#enable_color').hide()" />无</label>
<label class="radio radio-inline"><input type="radio" name="thame[enable_color]" value="1" <?php if($thame['enable_color']>0) { ?>checked<?php } ?> onclick="jQuery('#enable_color').show()" />有</label>
</div>
<div id="enable_color" class="clearfix ml20" style="padding-left:20px; <?php if($thame['enable_color']>0) { ?>display:block<?php } else { ?>display:none<?php } ?>">
<label class="control-label">默认偏好色：</label>
<input type="text" class="form-control" style="width:80px;" name="thame[color]" value="<?php echo $thame['color'];?>" />
</div>
<ul class="help-block">
<li> 此项设置是否允许用户更换主题各部分的基础色调</li>
						<li> 对于以颜色为主的主题，可以设置允许，以便用户自定义主题的基础色调</li>
						<li> 通常的没有经过优化的主题，不建议设置此项</li>
						<li> 可用值，如:#F7F7F7 或 rgb(0,0,0)</li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="folder">主题目录</label>
<div class="controls">
<select id="folder" name="thame[folder]" class="form-control" required="true"><?php if(is_array($folders)) foreach($folders as $value) { ?><option value="<?php echo $value;?>" <?php if($thame['folder']==$value) { ?>selected="selected"<?php } ?>><?php echo $value;?></option>
<?php } ?>
</select>
</div>
<ul class="help-block">
<li>注意：此项必填，并且目录名称不能为中文</li>
						<li>注意：此项值全局唯一：即每个主题必须对应一个主题目录；<br />如发现下拉列表没有可选值，说明“dzz/styles/thame/”下的所有目录所对应的的主题都已经存在；<br />如想添加新主题的话，需要在放到“dzz/styles/thame/”下新建目录，然后在此处选择</li>
						<li>自定义的主题目录放到“dzz/styles/thame/”下，即可在此调用</li>
						<li>主题的封面图命名为thumb.jpg放在此目录下</li>
						<li>此目录下的style.css中的样式将覆盖下面的各个分样式</li>
</ul>
</div><?php if(is_array($thameitems)) foreach($thameitems as $key => $value) { ?><div class="form-group">
<label class="control-label" for="<?php echo $value;?>"><?php echo $styles[$key];?></label>
<div class="controls">
<select id="<?php echo $key;?>" name="thame[modules][<?php echo $key;?>]" class="form-control">
<option value="">无</option><?php if(is_array($value)) foreach($value as $value1) { ?><option value="<?php echo $value1;?>" <?php if($thame['modules'][$key]==$value1) { ?>selected="selected"<?php } ?>><?php echo $value1;?></option>
<?php } ?>
</select>
</div>
<ul class="help-block">
<li>样式的目录不能为中文</li>
						<li>自定义的此样式目录放到“dzz/styles/<?php echo $key;?>下，即可在此调用</li>
						<li>注意：如果不选择，必选在主题目录下的style.css 中定义相关的样式</li>
</ul>
</div>
<?php } ?>
<div class="form-group">
<label class="control-label"></label>
<div class="controls">
<input type="submit" value="保存更改" class="btn btn-primary" />
</div>
</div>
</form>
<div class="tip" style="margin:10px;">
<div class="alert alert-warning">
<button type="button" class="close" data-dismiss="alert"></button>
<h5>提示信息</h5>
<ul>
<li>将自定义的样式放入"dzz/styles/目录下，这里就可以调用</li>
						<li>主题目录必选，其他如果不选，必须在主题目录下的style.css中定义相关的css</li>
						<li>主题目录下的style.css将覆盖其他相同的css</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();

function validate(form) {
if(document.getElementById('name').value == '') {
document.getElementById('name').focus();
showmessage('请填写主题名称', 'danger', 1000, 1);
return false;
}
if(document.getElementById('folder').value == '') {
document.getElementById('folder').focus();
showmessage('请选择主题目录，如果没有可选的主题目录，请到dzz/styles/thame/下新建主题目录', 'danger', 3000, 1);
return false;
}
return true;
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
<?php } if(!isset($_G['cookie']['sendwx'])) { ?>
<script src="misc.php?mod=sendwx&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } ?>
</body>
</html>
