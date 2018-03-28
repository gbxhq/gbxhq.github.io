<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/thame/template/list.htm";i:1492235054;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/thame/template/left.htm";i:1492235054;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
<script src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<style>
html,
body {
overflow: hidden;
background: #FBFBFB;
}
</style><script src="./data/template/admin_thame_list_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/admin_thame_list__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
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
<div class="bs-main-container">
<div class="main-header clearfix">
<ul class="nav nav-pills nav-pills-bottomguide">
<li>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>">全部主题</a>
</li>
<li class="active">
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&op=list">未安装主题</a>
</li>
<li class="pull-right">
<a href="<?php echo ADMINSCRIPT;?>?mod=thame&op=edit">添加主题</a>
</li>
</ul>
</div>

<div class="main-content clearfix" style="border-top:1px solid #FFF">

<table class="table table-hover " style="margin:0;">
<thead>
<th>主题名称</th>
<th>主题目录</th>
<th>版本</th>
<th>供应商</th>
<th>操作</th>
</thead>
<?php if($list) { if(is_array($list)) foreach($list as $value) { ?><tr>
<td><img src="dzz/styles/thame/<?php echo $value['folder'];?>/thumb.jpg" /><?php echo $value['name'];?></td>
<td><?php echo $value['folder'];?></td>
<td><?php echo $value['version'];?></td>
<td><?php echo $value['vendor'];?></td>
<td>
<a class="btn btn-link" href="<?php echo ADMINSCRIPT;?>?mod=thame&op=cp&do=install&dir=<?php echo $value['folder'];?>" title="安装">安装</a>
</td>
</tr>
<?php } } else { ?>
<tr>
<td colspan="10">还没有可以安装的主题，把主题目录上传到dzz/styles/thame/下后，可以在此选择安装</td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
</script>
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php updatesession();?><?php if(debuginfo()) { ?>
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
