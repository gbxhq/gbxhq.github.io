<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:74:"/home/oowin/domains/oo1.win/public_html/win/./admin/icon/template/main.htm";i:1492235052;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:79:"/home/oowin/domains/oo1.win/public_html/win/./admin/icon/template/icon_item.htm";i:1492235052;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
<link href="admin/icon/images/icon.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="static/css/tip.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" type="text/javascript"></script><script src="./data/template/admin_icon_main_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/admin_icon_main__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<nav class="navbar navbar-default bs-navbar-default navbar-fixed-top" role="navigation" style="margin:0;padding:0 10px;">
<ul class="nav nav-pills nav-pills-bottomguide">
<li class="active">
<a href="<?php echo BASESCRIPT;?>?mod=icon">图标列表</a>
</li>

<!-- <li><a href="<?php echo BASESCRIPT;?>?mod=member&op=import">从文件导入</a></li>
               <li><a href="<?php echo BASESCRIPT;?>?mod=member&op=invite">Email邀请</a></li>-->
<li class="pull-right">
<form name="search" action="<?php echo BASESCRIPT;?>?mod=icon" method="get">
<input type="hidden" name="mod" value="icon" />
<div class="input-group" style="width:180px;padding-top:4px;">
<input name="domain" type="text" value="<?php echo $domain;?>" class="form-control input-sm" placeholder="输入域名">
<a href="javascript:;" class="input-group-addon" onclick="this.parentNode.parentNode.submit()"><i class="glyphicon glyphicon-search"></i></a>
</div>
</form>
</li>

<li class="pull-right" style="padding:7px 15px 5px 5px"><label class="checkbox-inline"><input type="checkbox" onclick="selectedall(this)" />全选</label></li>
<li class="pull-right hide" id="deleteSelected"><button class="btn btn-sm btn-danger" style="margin:4px 15px 0 0;" onclick="deleteSelected()">删除所选</button></li>
<li><button class="btn btn-sm btn-primary" style="margin-top:4px;margin-left:20px;" onclick="addicon()">添加</button></li>
</ul>
</nav>
<div class="bs-container clearfix">
<div class="bs-main-container">
<div class="main-content clearfix" style="padding:15px;"><?php if(is_array($list)) foreach($list as $value) { ?><div id="icon_<?php echo $value['did'];?>" class="icon-item" did="<?php echo $value['did'];?>">
  <div class="icoblank_tip icoblank_rightbottom" style="z-index:10"></div>
  <table cellpadding="0" cellspacing="0" width="100%" height="100%" style="table-layout:fixed;">
    <tbody>
      <tr>
        <td align="center" valign="middle" style="overflow:hidden;" height="58px"><div class="icoimgContainer icoimgContainer_link" style="position:relative;width:50px;height:50px">
            <table width="100%" height="100%" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td align="center" valign="middle"><img class="img_50_50" src="<?php echo $_G['setting']['attachurl'];?><?php echo $value['pic'];?>" onerror="this.src='dzz/images/default/icodefault.png'"></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
      <tr height="35px">
        <td align="center" valign="middle"><div class="IcoText_div" style="height:40px;">
            <table cellpadding="0" cellspacing="0" width="100%" height="100%">
              <tbody>
                <tr>
                  <td valign="middle" align="center"><a class="IcoText"><?php echo $value['domain'];?></a> 
                    <?php if($value['reg']) { ?><br />
                    <?php echo $value['reg'];?> 
                    <?php } ?></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<?php } ?> 
<?php if($next) { ?>
<div id="getMore" class="icon-item-next">
  <div class="" style="width:110px;height:100px;margin:0;padding:2px;overflow:hidden;text-align:center;border-radius:5px;background:#fbfbfb"> <a class="more" href="javascript:;" onclick="getMore('<?php echo $page;?>');return false">...
    <p style="font-size:14px;line-height:35px">加载更多</p>
    </a> </div>
</div>
<?php } ?></div>
<div id="editmodal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" style="max-width:480px;min-width:280px">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">编辑</h4>
</div>
<div class="modal-body">

</div>
<div class="modal-footer" style="margin:0">
<span id="return_iconedit"></span>
<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="button" class="btn btn-primary" data-loading-text="提交中...">确定</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="icon-item-template" style="display:none">
<div id="icon__%did%_" class="icon-item" did="_%did%_">
<table cellpadding="0" cellspacing="0" width="100%" height="100%" style="table-layout:fixed;">
<tbody>
<tr>
<td align="center" valign="middle" style="overflow:hidden;" height="58px">
<div class="icoimgContainer icoimgContainer_link" style="position:relative;width:50px;height:50px">
<table width="100%" height="100%" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td align="center" valign="middle"><img class="img_50_50" src="_%pic%_"></td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
<tr height="35px">
<td align="center" valign="middle">
<div class="IcoText_div" style="height:40px;">
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
<tbody>
<tr>
<td valign="middle" align="center">
<a class="IcoText">_%domain%_</a>
<br />_%reg%_
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>
</div>

<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
jQuery(document).ready(function(e) {
jQuery(document).on('mouseenter', '.icon-item', function() {
jQuery(this).addClass('hover');
});
jQuery(document).on('mouseleave', '.icon-item', function() {
jQuery(this).removeClass('hover');
});
jQuery(document).on('click', '.icon-item', function() {
var did = jQuery(this).attr('did');
jQuery('#editmodal .modal-body').load('<?php echo ADMINSCRIPT;?>?mod=icon&op=ajax&did=' + did, function() {
jQuery('#editmodal').modal();
jQuery('#editmodal .modal-title').html('编辑');
});
});
jQuery('#editmodal button.btn-primary').click(function() {
var form = document.getElementById('iconform');
jQuery(this).button('loading');
form.onsubmit();
});
jQuery('.bs-main-container').scroll(function(e) {
var clientHeight = jQuery('.bs-main-container').height();
var scrollHeight = jQuery('.main-content').height();
if(jQuery('.bs-main-container').scrollTop() + clientHeight > scrollHeight - 20) jQuery('#getMore .more').trigger('click');
});
jQuery('.icoblank_rightbottom').click(function() {
jQuery(this).parent().toggleClass('Icoselected');
if(jQuery('.icon-item.Icoselected').length) {
jQuery('#deleteSelected').removeClass('hide');
} else {
jQuery('#deleteSelected').addClass('hide');
}
return false;
});
});

function selectedall(obj) {
var el = jQuery(obj);
if(el.is(':checked')) {
jQuery('.icon-item').addClass('Icoselected');
jQuery('#deleteSelected').removeClass('hide');
} else {
jQuery('.icon-item').removeClass('Icoselected');
jQuery('#deleteSelected').addClass('hide');
}
}

function deleteSelected() {
if(confirm('删除图标后，原先添加过此域名的图标将显示默认图标，确定要删除所选图标吗？')) {
var dids = [];
jQuery('.icon-item.Icoselected').each(function() {
dids.push(jQuery(this).attr('did'));
});
if(dids.length > 0) {
jQuery.getJSON('<?php echo ADMINSCRIPT;?>?mod=icon&op=ajax&do=delete', { dids: dids }, function(json) {
if(json.msg == 'success') {
for(var i in dids) {
jQuery('#icon_' + dids[i]).remove();
}
jQuery('#deleteSelected').addClass('hide');
}
});
}
}
}

function addicon() {
jQuery('#editmodal .modal-body').load('<?php echo ADMINSCRIPT;?>?mod=icon&op=ajax', function() {
jQuery('#editmodal').modal();
jQuery('#editmodal .modal-title').html('添加');
});
}

function succeedhandle_iconedit(url, message, values) {
var data = eval('(' + decodeURIComponent(values['data']) + ')');
appendIconitem(data);
jQuery('#editmodal button.btn-primary').button('reset');
jQuery('#editmodal').modal('hide');
};

function errorhandle_iconedit(url, message, values) {
jQuery('#editmodal button.btn-primary').button('reset');
jQuery('#editmodal').modal('hide');
}

function appendIconitem(data) {
var html = jQuery('#icon-item-template').html();
html = html.replace(/_%(\w+)%_/g, function($1) {
key = $1.replace(/[_%%_]/g, '');
return data[key] ? data[key] : '';
});

if(jQuery('#icon_' + data.did).length) {
jQuery('#icon_' + data.did).replaceWith(html);
} else {
if(jQuery('.icon-item').length) {
jQuery('.icon-item').first().before(html);
} else {
jQuery('.main-content').html(html);
}
}
}

function getMore(page) {
jQuery.get('<?php echo ADMINSCRIPT;?>?mod=icon&&do=getMore', { 'page': parseInt(page) + 1 }, function(html) {
jQuery('#getMore').replaceWith(html);
});
}
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
