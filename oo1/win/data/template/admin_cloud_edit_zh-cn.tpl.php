<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:6:{s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/cloud/template/edit.htm";i:1492235052;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;s:75:"/home/oowin/domains/oo1.win/public_html/win/./admin/cloud/template/left.htm";i:1492235052;s:83:"/home/oowin/domains/oo1.win/public_html/win/./admin/cloud/template/right_header.htm";i:1492235052;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_simple.htm";i:1489490190;}*/?>
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
</style><script src="./data/template/admin_cloud_edit_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/admin_cloud_edit__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
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
    <?php if($cloud['type']=='local') { ?>
    <div class="main-header "> 
      <ul class="nav nav-pills  nav-pills-bottomguide">
  <li <?php if($_GET['op']=='edit') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>"> 设置</a>
  </li>
  <li <?php if($_GET['op']=='space') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=space">空间管理</a>
  </li>
  <li <?php if($_GET['op']=='router') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=router">路由管理</a>
  </li>
  
  <?php if($_GET['op']=='routeredit') { ?> 
  <?php if($routerid) { ?>
  <li class="active"><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=routeredit&routerid=<?php echo $routerid;?>">编辑路由</a></li>
  <?php } else { ?>
  <li class="active"><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=routeredit">添加路由</a></li>
  <?php } ?> 
  <?php } ?> 
  <li <?php if($_GET['op']=='movetool') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=movetool">迁移工具</a>
  </li>
</ul>
 
    </div>
    <div class="main-content" style="padding:15px;border-top:1px solid #FFF">
      <form id="cpform" action="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>" class="form-horizontal form-horizontal-left" method="post" name="cpform">
        <input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
        <input type="hidden" value="editsubmit" name="true">
        <dl>
          <dt>名称:</dt>
          <dd class="clearfix">
            <input type="text"  name="name"  class="form-control"  value="<?php echo $cloud['name'];?>">
          </dd>
        </dl>
        <dl>
          <dt>标志符:</dt>
          <dd class="clearfix">
            <input type="text"  name="" class="form-control" value="<?php echo $cloud['bz'];?>"  disabled="disabled">
          </dd>
          <dd class="clearfix">
            <ul class="help-block ">
              <li>标志符：此类的唯一标志，全站唯一,注意区分大小写</li>
							<li>相关的api内都会按此标志符来组织和建立</li>
							<li>详细的设置和说明可以参照相关的api开发文档</li>
            </ul>
          </dd>
        </dl>
        <input class="btn btn-primary" name="editsubmit" value="保存更改" type="submit">
      </form>
    </div>
    <?php } elseif($cloud['type']=='pan') { ?>
    <div class="main-header clearfix" >
      <ul class="nav nav-pills nav-pills-bottomguide">
        <li <?php if(empty($_GET['do'])) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>">设置</a>
        </li>
        <?php if($cloud['available']>0) { ?> 
        <li <?php if($_GET['do']=='usercloud' ) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>&do=usercloud">使用用户</a>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="main-content clearfix" style="padding:15px;border-top:1px solid #FFF"> 
      <?php if($_GET['do']=='usercloud') { ?>
      <form id="appform" name="appform" class="form-horizontal form-horizontal-left" style="margin:-15px -15px 0;" action="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&do=usercloud" method="post" >
        <input type="hidden" name="cloudsubmit" value="true" />
        <input type="hidden" name="bz" value="<?php echo $bz;?>" />
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <table class="table table-hover">
          <thead>
            <tr>
              <th width="30"></th>
              <th>名称</th>
              <th>用户名</th>
              <th>添加时间</th>
            </tr>
          </thead>
          <?php if(is_array($list)) foreach($list as $value) { ?>          <tr>
            <td width="40"><input type="checkbox"  name="delete[]" value="<?php echo $value['id'];?>" /></td>
            <td ><img src="<?php echo $value['img'];?>" /><?php echo $value['cloudname'];?></td>
            <td><?php echo $value['username'];?></td>
            <td> <?php echo $value['dateline'];?> </td>
          </tr>
          <?php } ?>
          <thead>
          <td colspan="5"><input type="checkbox" name="chkall" id="chkall" onclick="checkAll('prefix', this.form, 'del')">
              &nbsp;删？ &nbsp;&nbsp;&nbsp;
              <input type="submit" class="btn btn-primary" value="提交" />
              <?php echo $multi;?> </td>
              </thead>
        </table>
      </form>
      <?php } else { ?>
      <form id="cpform" action="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>" class="form-horizontal form-horizontal-left"   method="post" name="cpform">
        <input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
        <input type="hidden" value="editsubmit" name="true">
        <dl>
          <dt>名称:</dt>
          <dd class="clearfix">
            <input type="text"  name="name" class="form-control"  value="<?php echo $cloud['name'];?>">
          </dd>
        </dl>
        <dl>
          <dt>是否允许用户添加:</dt>
          <dd class="clearfix"> 
            <?php if($cloud['available']>0) { ?>
            <label class="radio radio-inline"><input type="radio"  name="available"  value="2" <?php if($cloud['available']>1) { ?>checked="checked"<?php } ?> />是</label>
            <label class="radio radio-inline"><input type="radio"  name="available"  value="1" <?php if($cloud['available']<2) { ?>checked="checked"<?php } ?> />否</label>
            <?php } else { ?>
            <input type="hidden"  name="available"  value="<?php echo $cloud['available'];?>" />
            <?php } ?>
            <ul class="help-block">
              <?php if($cloud['warning']) { ?>
              <li><span class=" text-danger"><?php echo $cloud['warning'];?></span></li>
              <?php } ?> 
              <?php if($cloud['available']<1) { ?>
              <li><span class=" text-danger">先启用 “<?php echo $cloud['name'];?>” 后才能设置此项</span></li>
              <?php } else { ?>
              <li>设置为“否”,用户在”我的云“里”添加云“时将不出现此云</li>
              <?php } ?>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>标志符:</dt>
          <dd class="clearfix">
            <input type="text" class="form-control" name="bz" value="<?php echo $cloud['bz'];?>"  disabled="disabled">
          </dd>
        </dl>
        <dl>
          <dt>根目录:</dt>
          <dd class="clearfix">
            <input type="text"  name="root" class="form-control" value="<?php echo $cloud['root'];?>" >
            <ul class="help-block ">
              <li>设置根目录，对于某些网盘需要设置根目录。注意：目录名要区分大小写</li>
								<li>比如百度网盘只能访问apps/合作网站名称/下的文件</li>
								<li>比如：/apps/dzzoffice,结尾不加/</li>
								<li>详细的设置和说明可以参照相关的api开发文档</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>API Key:</dt>
          <dd class="clearfix">
            <input type="text"  name="key" class="form-control"  value="<?php echo $cloud['key'];?>" >
            <ul class="help-block ">
              <li>在API官网申请的开发者API KEY</li>
								<li>如：百度网盘、需要在http://open.baidu.com 中申请开通合作站点，通过后就可以获得该应用的API Key和Secret Key</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>Secret Key</dt>
          <dd class="clearfix">
            <input type="text"  name="secret" class="form-control" value="<?php echo $cloud['secret'];?>" class="span4">
            <ul class="help-block ">
              <li>在API官网申请的开发者Secret Key</li>
								<li>如：百度网盘、需要在http://open.baidu.com 中申请开通合作站点，通过后就可以获得该应用的API Key和Secret Key</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>数据表名称</dt>
          <dd class="clearfix">
            <input type="text" class="form-control" name="dname" value="<?php echo $cloud['dname'];?>" class="span4">
            <ul class="help-block ">
              <li>数据表名称，不包含表前缀。比如：数据库表名称为dzz_connect_pan,这里应该填写connect_pan</li>
            </ul>
          </dd>
        </dl>
        <input class="btn btn-primary" name="editsubmit" value="保存更改" type="submit">
      </form>
      <?php } ?> 
    </div>
    <?php } else { ?>
    <div class="main-header ">
      <ul class="nav nav-pills nav-pills-bottomguide">
        <li <?php if(empty($_GET['do'])) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>">设置</a>
        </li>
        <?php if($cloud['available']>0) { ?> 
        <li <?php if($_GET['do']=='usercloud' ) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>&do=usercloud">使用用户</a>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="main-content" style="padding:15px;border-top:1px solid #FFF"> 
      <?php if($_GET['do']=='usercloud') { ?>
      <form id="appform" name="appform" class="form-horizontal form-horizontal-left" style="margin:-15px -15px 0;" action="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&do=usercloud" method="post" >
        <input type="hidden" name="cloudsubmit" value="true" />
        <input type="hidden" name="bz" value="<?php echo $bz;?>" />
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <table class="table table-hover">
          <thead>
            <tr>
              <th width="30"></th>
              <th>名称</th>
              <th>用户名</th>
              <th>添加时间</th>
            </tr>
          </thead>
          <?php if(is_array($list)) foreach($list as $value) { ?>          <tr>
            <td width="40"><input type="checkbox"  name="delete[]" value="<?php echo $value['id'];?>" /></td>
            <td ><img src="<?php echo $value['img'];?>" /><?php echo $value['cloudname'];?></td>
            <td><?php echo $value['username'];?></td>
            <td> <?php echo $value['dateline'];?> </td>
          </tr>
          <?php } ?>
          <thead>
          <td colspan="5"><input type="checkbox" name="chkall" id="chkall" onclick="checkAll('prefix', this.form, 'del')">
              &nbsp;删？&nbsp;&nbsp;&nbsp;
              <input type="submit" class="btn btn-primary" value="提交" />
              <?php echo $multi;?> </td>
              </thead>
        </table>
      </form>
      <?php } else { ?>
      <form id="cpform" action="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>" class="form-horizontal form-horizontal-left" method="post" name="cpform">
        <input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
        <input type="hidden" value="editsubmit" name="true">
        <dl>
          <dt>名称:</dt>
          <dd class="clearfix">
            <input type="text" class="form-control" name="name"  value="<?php echo $cloud['name'];?>">
            <span class="help-inline text-muted">名称 </span> </dd>
        </dl>
        <dl>
          <dt>是否允许用户添加:</dt>
          <dd class="clearfix"> 
            <?php if($cloud['available']>0) { ?>
            <label class="radio radio-inline"> <input type="radio"  name="available"  value="2" <?php if($cloud['available']>1) { ?>checked="checked"<?php } ?> />是</label>
            <label class="radio radio-inline"> <input type="radio"  name="available"  value="1" <?php if($cloud['available']<2) { ?>checked="checked"<?php } ?> />否</label>
            <?php } else { ?>
            <input type="hidden"  name="available"  value="<?php echo $cloud['available'];?>" />
            <?php } ?>
            <ul class="help-block">
              <?php if($cloud['warning']) { ?>
              <li><span class=" text-danger"><?php echo $cloud['warning'];?></span></li>
              <?php } ?> 
              <?php if($cloud['available']<1) { ?>
              <li><span class=" text-danger">先启用 “<?php echo $cloud['name'];?>” 后才能设置此项</span></li>
              <?php } else { ?>
              <li>设置为“否”,用户在”我的云“里”添加云“时将不出现此云</li>
              <?php } ?>
              
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>标志符:</dt>
          <dd class="clearfix">
            <input type="text"  name="bz" class="form-control" value="<?php echo $cloud['bz'];?>"  disabled="disabled">
            <ul class="help-block ">
              <li>标志符：此类的唯一标志，全站唯一,注意区分大小写</li>
							<li>相关的api内都会按此标志符来组织和建立</li>
							<li>详细的设置和说明可以参照相关的api开发文档</li>
            </ul>
          </dd>
        </dl>
        <input class="btn btn-primary" name="editsubmit" value="保存更改" type="submit">
      </form>
      <?php } ?> 
    </div>
    <?php } ?> 
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
 