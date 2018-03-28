<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:82:"/home/oowin/domains/oo1.win/public_html/win/./admin/setting/template/mailcheck.htm";i:1492235054;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:77:"/home/oowin/domains/oo1.win/public_html/win/./admin/setting/template/left.htm";i:1492235054;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
</style><script src="./data/template/admin_setting_mailcheck_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/admin_setting_mailcheck__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<div class="bs-container clearfix">
<div class="bs-left-container  clearfix"><ul class="nav nav-pills nav-stacked nav-pills-leftguide" style="margin:10px 0;">
  <li <?php if($operation=='basic') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=basic">基本设置</a>
  </li>
  
  <li <?php if($operation=='datetime') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=datetime">时间设置</a>
  </li>
  <li <?php if($operation=='access') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=access">注册和访问</a>
  </li>
  
  <li <?php if($operation=='sec') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=sec">验证码设置</a>
  </li>
  <li <?php if($operation=='qqlogin') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=qqlogin">QQ登录设置</a>
  </li>
  
    <li <?php if($operation=='mail' || $op=='mailcheck') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=mail">邮件设置</a>
  </li>
   <li <?php if($operation=='at') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=at">@部门设置</a>
  	</li> 
   <li <?php if($operation=='upload') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=upload">上传设置</a>
  	</li> 
    <li <?php if($operation=='smiley' || $op=='smiley') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=smiley">表情管理</a>
  	</li> 
    <li <?php if($operation=='censor') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=censor">敏感词管理</a>
  	</li>
    
     <li <?php if($operation=='desktop') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=desktop">桌面设置</a>
  	</li> 
    <li <?php if($operation=='loginset') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=loginset">登录页设置</a>
  	</li>
    <li <?php if($operation=='qywechat' || $op=='assistant' || $op=='wxsyn') { ?>class="active"<?php } ?>>
        <a href="<?php echo BASESCRIPT;?>?mod=<?php echo $mod;?>&operation=qywechat">微信企业号</a>
  	</li>
</ul></div>
<div class="left-drager">
<div class="left-drager-op">
<div class="left-drager-sub"></div>
</div>
</div>

<div class="bs-main-container  clearfix">
<div class="main-header">
<ul class="nav nav-pills nav-pills-bottomguide">
<li>
<a href="<?php echo BASESCRIPT;?>?mod=setting&operation=mail">设置</a>
</li>
<li class="active">
<a href="<?php echo BASESCRIPT;?>?mod=setting&op=mailcheck">检测</a>
</li>
</ul>

</div>
<div class="main-content" style="padding:20px">

<form id="cpform" action="<?php echo BASESCRIPT;?>?mod=setting&op=mailcheck" class="form-horizontal form-horizontal-left" autocomplete="off" method="post" name="cpform" target="mailcheckiframe">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="mailchecksubmit">
<div class="form-group">
<label class="control-label">测试发件人:</label>
<input type="text" class="form-control" name="test_from" autocomplete="off" value="">
</div>
<div class="form-group">
<label class="control-label">测试收件人:</label>
<textarea type="textarea" class="form-control" name="test_to" autocomplete="off"></textarea>
<span class="help-block text-muted">如果要测试包含用户名的邮件地址，格式为“username &lt;user@domain.com&gt;” 。多个邮件地址用逗号分隔</span>
</div>
<div class="form-group">
<label class="control-label"></label>
<input class="btn btn-primary" id="submit_mailchecksubmit" name="mailchecksubmit" value="检测邮件发送设置" type="submit">
<iframe style="display: none" name="mailcheckiframe"> </iframe>
</div>
</form>

</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
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
