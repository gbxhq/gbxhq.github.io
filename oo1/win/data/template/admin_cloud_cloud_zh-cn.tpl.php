<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:76:"/home/oowin/domains/oo1.win/public_html/win/./admin/cloud/template/cloud.htm";i:1492235052;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/cloud/template/left.htm";i:1492235052;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
html, body {
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
</style><script src="./data/template/admin_cloud_cloud_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/admin_cloud_cloud__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<div class="bs-container clearfix">
  <div class="bs-left-container  clearfix"> 
    <?php $bz=$bz?$bz:'dzz';?><?php $clouds=DB::fetch_all("select * from ".DB::table('connect')." where 1 order by disp");?><ul class="nav nav-pills nav-stacked nav-pills-leftguide" style="margin:10px 0;">
  <li <?php if($operation=='setting') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&operation=setting">云设置</a>
  </li>
  <?php if(is_array($clouds)) foreach($clouds as $value) { ?> 
  <li <?php if($operation!='setting' && $bz==$value['bz']) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $value['bz'];?>"><?php echo $value['name'];?></a>
  </li>
  <?php } ?>
</ul>
 
  </div>
  <div class="left-drager">
    <div class="left-drager-op">
      <div class="left-drager-sub"></div>
    </div>
  </div>
  <div class="bs-main-container  clearfix" >
    <div class="main-content clearfix" >
      <form id="appform" name="appform" class="form-horizontal form-horizontal-left" action="<?php echo BASESCRIPT;?>?mod=cloud" method="post" >
        <input type="hidden" name="cloudsubmit" value="true" />
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th width="40">排序</th>
              <th width="150">名称</th>
              <th width="90">标志符</th>
              <th width="100">类型</th>
              <th>可用</th>
              <th width="100">设置</th>
            </tr>
          </thead>
          <?php if(is_array($list)) foreach($list as $value) { ?>          <tr>
            <td width="40">
            <?php if($value['bz']=='dzz') { ?>
              <input type="hidden" name="disp[<?php echo $value['bz'];?>]" value="<?php echo $value['disp'];?>" />
              <?php } else { ?>
              <input type="text" name="disp[<?php echo $value['bz'];?>]"  class="form-control"  value="<?php echo $value['disp'];?>" style="width:45px;"  />
              <?php } ?>
            </td>
            <td width="150">
            <input type="text" class="form-control"   name="name[<?php echo $value['bz'];?>]" value="<?php echo $value['name'];?>" style="max-width:150px;" /></td>
            <td><strong><?php echo $value['bz'];?></strong></td>
            <td><?php echo lang('cloud_type_'.$value['type']); ?></td>
            <td>
              <?php if($value['bz']=='dzz') { ?>
              <input type="hidden" name="available[<?php echo $value['bz'];?>]" value="2"  />
              <?php } else { ?> 
              <input type="checkbox" name="available[<?php echo $value['bz'];?>]" value="<?php echo ($value[available]?$value[available]:1)?>" <?php if($value['available']>0) { ?>checked<?php } ?> <?php if($value['warning']) { ?>disabled<?php } ?> > <span class="text-danger" style="padding-left:3px"><?php echo $value['warning'];?></span> 
              <?php } ?>
            </td>
            <td><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $value['bz'];?>">设置</a> 
              <?php if($value['warning']) { ?> 
              <br />
              <a class="text-danger" href="<?php echo BASESCRIPT;?>?mod=cloud&operation=delete&bz=<?php echo $value['bz'];?>">删除</a> 
              <?php } ?>
              </td>
          </tr>
          <?php } ?>
          <thead>
            <th valign="middle" colspan="7">
            	<input type="submit" class="btn btn-primary" value="保存设置" />
              	&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=add" class="btn btn-success">添加云</a>
            </th>
          </thead>
        </table>
        </div>
      </form>
      <div class="tip" style="margin:0 15px;">
        <div class="alert alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h5>提示信息</h5>
          <ul>
            <li>排序：值越大越靠后。</li>
						<li>此处的云设置是全站基础设置，需要有相应的api文件支持才能起作用。</li>
						<li><span class="text-danger">云停用后，与此云相关的添加服务（如添加云中不会出现此云图标，企业盘内相关的存储位置、路由规则会失效）将会暂停，但已经添加的文件和用户云盘会继续使用。</span></li>
						<li>建议由开发者添加，且添加后不可删除（从未启用过的除外)。</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">  
jQuery('.left-drager').leftDrager_layout();
</script> <?php updatesession();?><?php if(debuginfo()) { ?>
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
 
