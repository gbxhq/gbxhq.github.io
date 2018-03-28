<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:70:"/home/oowin/domains/oo1.win/public_html/win/./user/template/avatar.htm";i:1492235062;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:68:"/home/oowin/domains/oo1.win/public_html/win/./user/template/left.htm";i:1492235062;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
<link href="user/scripts/jquery.cropbox.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script src="user/scripts/hammer.js" type="text/javascript"></script>
<script src="user/scripts/jquery.mousewheel.js" type="text/javascript"></script>
<script src="user/scripts/jquery.cropbox.js" type="text/javascript"></script>
<script src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" type="text/javascript"></script><script src="./data/template/user_avatar_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/user_avatar__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<div class="bs-container clearfix">
<div class="bs-left-container  clearfix"><ul class="nav nav-pills nav-stacked nav-pills-leftguide" style="margin:10px 0;">
<li <?php if($mod=='profile' && !$vid) { ?>class="active"<?php } ?>>
<a href="user.php?&mod=profile">基本资料</a>
</li>
<li <?php if($mod=='avatar' ) { ?>class="active"<?php } ?>>
<a href="user.php?mod=avatar">修改头像</a>
</li>
<li <?php if($mod=='password' ) { ?>class="active"<?php } ?>>
<a href="user.php?mod=password">密码与安全</a>
</li><?php if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $key => $value) { if($value['available'] && (empty($value['groupid']) || ($value['groupid'] && in_array($_G['groupid'],$value['groupid'])))) { ?>
<li <?php if($mod=='profile' && $vid==$key) { ?>class="active"<?php } ?>>
<a href="user.php?mod=profile&amp;vid=<?php echo $key;?>"><?php echo $value['title'];?></a>
</li>
<?php } } ?>
</ul></div>
<div class="left-drager">
<div class="left-drager-op">
<div class="left-drager-sub"></div>
</div>
</div>
<div class="bs-main-container  clearfix">
<div class="main-content" style="padding:20px;">
<script type="text/javascript">
function updateavatar() {
window.location.href = document.location.href.replace('&reload=1', '') + '&reload=1';
}
</script>
<form id="avatar_form" method="post" autocomplete="off" action="user.php?mod=avatar">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input id="imagedata" type="hidden" name="imagedata" value="" />
<input id="aid" type="hidden" name="aid" value="0" />
<input type="hidden" name="avatarsubmit" value="true" />
</form>
<h4>设置头像</h4>
<p>如果您还没有设置自己的头像，系统会显示为默认头像，您需要自己上传一张新照片来作为自己的个人头像 </p>
<p>拖动下面的图片来需要头像位置，点击保存头像按钮保存当前头像</p>

<div class="crop-container clearfix" style="margin-bottom:10px;">
<img class="cropimage" src="avatar.php?uid=<?php echo $_G['uid'];?>&amp;size=big&amp;ramdom=1" />
</div>
<div class=" clearfix">
<div class="pull-left" style="position:relative;padding:5px;overflow:hidden">
<button class="btn btn-success">上传图片</button>
<input id="upload" name="files[]" tabIndex="-1" style="position: absolute;outline:none; filter: alpha(opacity=0); PADDING-BOTTOM: 0px; margin: 0px; padding-left: 0px; padding-right: 0px; font-family: Arial; font-size: 180px;height:40px;width:86px;display:inline-block;top: 0px; cursor: pointer; right: 0px; padding-top: 0px; opacity: 0;direction:ltr;background-image:none" type="file" accept="image/png,image/gif,image/jpeg">
</div>
<div class="pull-left ml20" style="padding:5px;"><button type="button" id="avatar_form_btn" data-loading-text="正在上传..." class="btn btn-danger" onclick="return validate()" disabled="disabled">保存头像</button></div>
</div>

</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
jQuery(document).ready(function(e) {
var corp = jQuery('.cropimage').cropbox({ width: 200, height: 200, showControls: 'auto', label: '拖动移动位置' })
.on('cropbox', function(event, results, img) {
//jQuery('.myavatar img').attr('src',img.getDataURL());
});
if(window.FileReader) {
jQuery('#upload').on('change', function() {
var reader = new FileReader();
reader.onload = function(e) {
jQuery('.cropimage').attr('src', e.target.result);
jQuery('#avatar_form_btn').prop('disabled',false);
jQuery('.cropimage').cropbox({ width: 300, height: 300, showControls: 'auto', label: '拖动移动位置' })
}
reader.readAsDataURL(this.files[0]);
this.files = null;
})
} else {
jQuery('#upload').fileupload({
url: 'user.php?mod=avatar&do=imageupload',
dataType: 'json',
autoUpload: true,
maxChunkSize: 2000000, //2M
maxFileSize: 5000000, // 5 MB
acceptFileTypes: new RegExp("(\.|\/)([jpeg|jpg|gif|png|bmp])$", 'i'),
dropZone: jQuery('.crop-container'),
pasteZone: jQuery('.crop-container'),
sequentialUploads: true

}).on('fileuploadfail', function(e, data) {
jQuery.each(data.result.files, function(index, file) {
if(file.error) {
showmessage(json.error, 'danger', 3000, 1);
}
});
}).on('fileuploaddone', function(e, data) {
jQuery.each(data.result.files, function(index, file) {
if(file.error) {
showmessage(json.error, 'danger', 3000, 1);
} else {
jQuery('#aid').val(file.data.aid);
jQuery('.cropimage').attr('src', file.data.img);
jQuery('#avatar_form_btn').prop('disabled',false);
jQuery('.cropimage').cropbox({ width: 300, height: 300, showControls: 'auto', label: '拖动移动位置' })
}
});
});
}
});

function validate() {
var inst = jQuery('.cropimage').data('cropbox');
jQuery('#imagedata').val(inst.getDataURL());
jQuery('#avatar_form_btn').button('loading');
jQuery.post('user.php?mod=avatar', jQuery('#avatar_form').serialize(), function(json) {
if(json.msg == 'success') {
showmessage('头像上传成功,由于缓存问题，可能新头像需要过段时间才能显示', 'success', 3000, 1);
window.setTimeout(function() { window.location.href = 'user.php?mod=avatar&t=' + new Date().getTime(); }, 3000);
} else {
showmessage(json.error, 'success', 3, 1);
}
jQuery('#avatar_form_btn').button('reset');
}, 'json');
return false;
}
</script>
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="dzz/scripts/jquery_file_upload/jquery.ui.widget.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="dzz/scripts/jquery_file_upload/jquery.iframe-transport.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<!-- The basic File Upload plugin -->
<script src="dzz/scripts/jquery_file_upload/jquery.fileupload.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="dzz/scripts/jquery_file_upload/jquery.fileupload-process.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="./data/template/user_avatar_jquery_fileupload-validate_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/jquery_file_upload/jquery.fileupload-validate.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php updatesession();?><?php if(debuginfo()) { ?>
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
