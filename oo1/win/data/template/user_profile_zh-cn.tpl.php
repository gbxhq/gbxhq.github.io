<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:71:"/home/oowin/domains/oo1.win/public_html/win/./user/template/profile.htm";i:1492235062;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:68:"/home/oowin/domains/oo1.win/public_html/win/./user/template/left.htm";i:1492235062;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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

.bs-left-container {
width: 120px;
}

.bs-main-container {
margin-left: 120px;
overflow: auto;
}

.form-horizontal-left .form-group .controls {
width: 70%;
padding: 0 5px;
}

.form-horizontal-left .form-group .controls-container {
width: 320px;
float: left;
}

@media (max-width: 605px) {
.form-horizontal-left .control-label {
text-align: left;
width: 120px;
}
}

@media (max-width: 480px) {
.form-horizontal-left .form-group .controls-container {
width: 100%;
}
.form-horizontal-left .form-group .controls {
width: 100%;
padding: 0 5px;
}
}

@media (max-width: 420px) {
.form-horizontal-left .form-group .controls {
min-width: 100%;
}
}

.form-horizontal-left label {
padding: 7px 10px 0 0;
}

.form-horizontal-left .help-inline {
padding: 5px;
}

.form-horizontal-left .form-control {
width: 100%;
}

.has-error .form-control.privacy {
border-color: #e1e1e1;
}

.has-error .form-control.privacy:focus {
border-color: #66afe9;
}

.rq {
color: red;
}

.progress-relative {
position: relative;
height: 26px;
line-height: 24px;
background-color: #e6e6e6;
}

.progress-relative .progress-cover {
position: absolute;
text-align: center;
width: 100%;
font-size: 75%;
height: 24px;
line-height: 24px;
color: #FFF;
text-shadow: 1px 1px 1px #000;
font-weight: 700;
}
</style><script src="./data/template/user_profile_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/user_profile__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
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
<div class="main-content" style="padding:15px;">
<?php if($vid) { ?>
<div class="alert <?php if($showbtn) { ?>alert-warning<?php } else { ?>alert-success<?php } ?>" style="margin-bottom:20px;max-width:750px;line-height:1.8">
<?php if($showbtn) { ?>
<p><i class="glyphicon glyphicon-question-sign"></i> 以下信息通过审核后将不能再次修改，提交后请耐心等待核查 </p>
<?php if($_G['setting']['verify'][$vid]['desc']) { $desc=dzzcode($_G['setting']['verify'][$vid]['desc']);?><p class="ml20"><?php echo $desc;?></p>
<?php } } else { ?>
<p><i class="glyphicon glyphicon-ok"></i> 恭喜您，您的认证审核已经通过，下面的资料项已经不允许被修改 </p>
<?php } ?>

</div>
<?php } else { ?>
<div class="" style="padding:0 20px 20px 20px;max-width:450px;line-height:1.8">
<div class="progress progress-relative" style="margin:0">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $userstatus['profileprogress'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $userstatus['profileprogress'];?>%">
<span class="sr-only">资料完成 <?php echo $userstatus['profileprogress'];?>% </span>
</div>
<div class="progress-cover">资料完成 <?php echo $userstatus['profileprogress'];?>%</div>
</div>
</div>
<?php } ?>
<iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
<form id="accountform" name="accountform" class="form-horizontal form-horizontal-left" action="user.php?mod=profile" method="post" enctype="multipart/form-data" target="frame_profile" onsubmit="clearErrorInfo();">
<input type="hidden" name="profilesubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="vid" value="<?php echo $vid;?>" />

<div class="form-group">
<label class="control-label">姓 名</label>
<div class="controls-container">
<p class="form-control-static"><?php echo $_G['username'];?>&nbsp;
<?php if($qqlogin['openid'] && $qqlogin['unbind']<1) { ?><img src="user/images/qq.png" height="16" title="已经绑定QQ" />&nbsp;&nbsp;
<a href="user.php?mod=profile&amp;action=qq_unbind&amp;openid=<?php echo $qqlogin['openid'];?>">取消绑定</a>
<?php } ?>
</p>
</div>
</div><?php if(is_array($settings)) foreach($settings as $key => $value) { if($value['available']) { ?>
<div class="form-group" id="th_<?php echo $key;?>">
<label class="control-label" for="<?php echo $key;?>"><?php echo $value['title'];?><?php if($value['required']) { ?><span class="rq" title="必填">*</span><?php } ?></label>
<div class="controls-container">
<div class="controls">
<?php echo $htmls[$key];?>
</div>
<div class="pull-left">
<?php if($vid || $key=='department') { ?>
<input type="hidden" name="privacy[<?php echo $key;?>]" value="<?php echo $privacy[$key];?>" />
<?php } else { ?>
<select name="privacy[<?php echo $key;?>]" class="form-control input-sm ml10 privacy" style="width:80px;">
<option value="-1" <?php if($privacy[$key]==- 1) { ?> selected="selected" <?php } ?>>私密</option>
<option value="0" <?php if(!$privacy[$key]) { ?> selected="selected" <?php } ?>>公开</option>
<option value="1" <?php if($privacy[$key]==1 ) { ?> selected="selected" <?php } ?>>本部门</option>
<option value="2" <?php if($privacy[$key]==2 ) { ?> selected="selected" <?php } ?>>本机构</option>
</select>
<?php } ?>
</div>
</div>
</div>
<?php } } if(in_array('timeoffset', $allowitems)) { ?>
<div class="form-group">
<label class="control-label ">时区</label>
<div class="controls-container"><?php $timeoffset = array(
		'9999' => '使用系统默认',
		'-12' => '(GMT -12:00) 埃尼威托克岛, 夸贾林环礁',
		'-11' => '(GMT -11:00) 中途岛, 萨摩亚群岛',
		'-10' => '(GMT -10:00) 夏威夷',
		'-9' => '(GMT -09:00) 阿拉斯加',
		'-8' => '(GMT -08:00) 太平洋时间(美国和加拿大), 提华纳',
		'-7' => '(GMT -07:00) 山区时间(美国和加拿大), 亚利桑那',
		'-6' => '(GMT -06:00) 中部时间(美国和加拿大), 墨西哥城',
		'-5' => '(GMT -05:00) 东部时间(美国和加拿大), 波哥大, 利马, 基多',
		'-4' => '(GMT -04:00) 大西洋时间(加拿大), 加拉加斯, 拉巴斯',
		'-3.5' => '(GMT -03:30) 纽芬兰',
		'-3' => '(GMT -03:00) 巴西利亚, 布宜诺斯艾利斯, 乔治敦, 福克兰群岛',
		'-2' => '(GMT -02:00) 中大西洋, 阿森松群岛, 圣赫勒拿岛',
		'-1' => '(GMT -01:00) 亚速群岛, 佛得角群岛 [格林尼治标准时间] 都柏林, 伦敦, 里斯本, 卡萨布兰卡',
		'0' => '(GMT) 卡萨布兰卡，都柏林，爱丁堡，伦敦，里斯本，蒙罗维亚',
		'1' => '(GMT +01:00) 柏林, 布鲁塞尔, 哥本哈根, 马德里, 巴黎, 罗马',
		'2' => '(GMT +02:00) 赫尔辛基, 加里宁格勒, 南非, 华沙',
		'3' => '(GMT +03:00) 巴格达, 利雅得, 莫斯科, 奈洛比',
		'3.5' => '(GMT +03:30) 德黑兰',
		'4' => '(GMT +04:00) 阿布扎比, 巴库, 马斯喀特, 特比利斯',
		'4.5' => '(GMT +04:30) 坎布尔',
		'5' => '(GMT +05:00) 叶卡特琳堡, 伊斯兰堡, 卡拉奇, 塔什干',
		'5.5' => '(GMT +05:30) 孟买, 加尔各答, 马德拉斯, 新德里',
		'5.75' => '(GMT +05:45) 加德满都',
		'6' => '(GMT +06:00) 阿拉木图, 科伦坡, 达卡, 新西伯利亚',
		'6.5' => '(GMT +06:30) 仰光',
		'7' => '(GMT +07:00) 曼谷, 河内, 雅加达',
		'8' => '(GMT +08:00) 北京, 香港, 帕斯, 新加坡, 台北',
		'9' => '(GMT +09:00) 大阪, 札幌, 首尔, 东京, 雅库茨克',
		'9.5' => '(GMT +09:30) 阿德莱德, 达尔文',
		'10' => '(GMT +10:00) 堪培拉, 关岛, 墨尔本, 悉尼, 海参崴',
		'11' => '(GMT +11:00) 马加丹, 新喀里多尼亚, 所罗门群岛',
		'12' => '(GMT +12:00) 奥克兰, 惠灵顿, 斐济, 马绍尔群岛');?><select name="timeoffset" class="form-control"><?php if(is_array($timeoffset)) foreach($timeoffset as $key => $desc) { ?><option value="<?php echo $key;?>" <?php if($key==$space['timeoffset']) { ?> selected="selected" <?php } ?>><?php echo $desc;?></option>
<?php } ?>
</select>
<p class="mt10">当前时间 :<?php echo dgmdate($_G[timestamp]);?></p>
<p class="gray">如果发现当前显示的时间与您本地时间相差几个小时，那么您需要更改自己的时区设置 </p>
</div>
</div>
<div class="form-group">
<label class="control-label language">语言</label>
<div class="controls-container">
                    	<select name="language" class="form-control">
                        	<option value="">自动</option>
                            <?php if(is_array($langList)) foreach($langList as $key => $value) { ?>                            <option value="<?php echo $key;?>" <?php if($space['language'] == $key) { ?>selected="selected"<?php } ?> /> <?php echo $value;?></option>  
<?php } ?>
                        </select>

</div>
</div>
<?php } if(!$vid || $showbtn) { ?>
<div class="form-group">
<label class="control-label "></label>
<div class="controls">
<input type="submit" class="btn btn-primary btn-width" <?php if($vid) { ?>value="提交审核"<?php } else { ?>value="保存"<?php } ?>>
</div>
</div>
<?php } ?>
</form>
</div>
</div>
</div>

<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
jQuery(document).on('blur', '.has-error .form-control', function() {
if(this.value) jQuery(this).closest('.form-group').removeClass('has-error');
});

function show_error(fieldid, extrainfo) {
var elem = jQuery('#th_' + fieldid);
if(elem) {
elem.addClass('has-error');
elem.title = elem.innerHTML;
extrainfo = (typeof extrainfo == "string") ? extrainfo : "";

$('showerror_' + fieldid).innerHTML = "请检查该资料项 " + extrainfo;
$(fieldid).focus();
}
}

function show_success(message) {
if(message=='language updated'){
message='资料更新成功<br>由于您改变了语言选项，系统将刷新页面！';
showDialog(message, 'right', '提示信息', function() {
top.window.location.reload();
}, 0, null, '', '', '', '', 5);
}else{
message = message == '' ? '资料更新成功' : message;
showDialog(message, 'right', '提示信息', function() {
window.location.reload();
}, 0, null, '', '', '', '', 3);
}


}

function clearErrorInfo() {
jQuery('.has-error').removeClass('has-error');

}

</script>
<script src="static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><?php updatesession();?><?php if(debuginfo()) { ?>
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
