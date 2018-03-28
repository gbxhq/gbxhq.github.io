<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:4:{s:84:"/home/oowin/domains/oo1.win/public_html/win/./dzz/connect/template/connect_index.htm";i:1492235056;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
<link href="dzz/styles/menu/default/style.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="dzz/connect/images/connect.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script src="./data/template/dzz_connect_connect_index__common_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<style>
#menu.nav-pills li a {
padding: 5px 10px;
margin: 4px 4px 0 4px;
border-radius: 3px;
}
</style><script src="./data/template/dzz_connect_connect_index_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/dzz_connect_connect_index__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<div class="container" style="height:100%">
<div class="main-header2 clearfix">
<ul class="nav nav-pills nav-pills-bottomguide pull-left">
<li class="active">
<a href="<?php echo BASESCRIPT;?>?mod=connect">我的云</a>
</li>
<li>
<a href="<?php echo BASESCRIPT;?>?mod=connect&op=addcloud">添加云</a>
</li>
</ul>
<ul id="menu" class="nav nav-pills  list-unstyled pull-right">

</ul>
</div>
<div class="main-content clearfix">
<div class="" style="padding:15px;">
<ul class="thumbnails list-unstyled "><?php if(is_array($mycloud)) foreach($mycloud as $value) { ?><li id="item_<?php echo $value['bz'];?>_<?php echo $value['id'];?>" bz="<?php echo $value['bz'];?>" cid="<?php echo $value['id'];?>" icoid="<?php echo $value['icoid'];?>" class="cloud-item ">
<div class="thumbnail" style="margin:0">
<div class="selectbox"></div>
<img src="<?php echo $value['img'];?>" width="100" icoid="<?php echo $value['icoid'];?>" />
<h5 class="text-center" style="height:20px;line-height:20px;overflow:hidden;margin-bottom:5px"><a icoid="<?php echo $value['icoid'];?>" href="javascript:;" title="<?php echo $value['cloudname'];?>"><?php echo $value['cloudname'];?></a></h5>
</div>
</li>
<?php } ?>
</ul>

</div>
</div>
</div>
<div id="right_ico" class="menu " style="display:none;">
<div class="menu-item" onClick="Open('-icoid-');jQuery('#right_contextmenu').hide();jQuery('#shadow').hide();"><span class="menu-icon icon-open"></span><span class="menu-text">打开</span></div>
<div class="menu-item delete" onClick="Delete('-cid-','-bz-');jQuery('#right_contextmenu').hide();jQuery('#shadow').hide();"><span class="menu-icon icon-delete"></span><span class="menu-text">删除</span></div>
<div class="menu-item" onClick="Rename('-cid-','-bz-');jQuery('#right_contextmenu').hide();jQuery('#shadow').hide();"><span class="menu-icon icon-rename"></span><span class="menu-text">重命名</span></div>
<div class="menu-item" onClick="Todesktop('-icoid-','-bz-');jQuery('#right_contextmenu').hide();jQuery('#shadow').hide();"><span class="menu-icon icon-desktop"></span><span class="menu-text">添加到桌面</span></div>
</div>
<div id="shadow" style="display:none;position:absolute"></div>
<div id="renameContainer" style="position:absolute;left:-500px;top:-500px;width:161px;height:35px;z-index:100">
<textarea id="rename" bz="" cid="" style="width:100%;height:100%;margin:0"></textarea>
</div>
<script type="text/javascript">
var json = <?php echo $icosdata_json;?>;
for(var i in json) {
parent._config.sourcedata.icos[i] = json[i];
}
var jsonfolder = <?php echo $folderdata_json;?>;
for(var i in jsonfolder) {
parent._config.sourcedata.folder[i] = jsonfolder[i];
}
var ajaxurl = '<?php echo DZZSCRIPT;?>?mod=connect&op=ajax';
</script>
<script src="./data/template/dzz_connect_connect_index_mycloud_zh-cn.js" type="text/javascript"></script><script src="dzz/connect/scripts/mycloud.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php updatesession();?><?php if(debuginfo()) { ?>
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
