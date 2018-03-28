<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:90:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/showmessage.htm";i:1492235056;s:92:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_common.htm";i:1492235056;s:90:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_ajax.htm";i:1403883548;s:85:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer.htm";i:1456234930;s:90:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/footer_ajax.htm";i:1403883548;}*/?>
<?php if(!$_G['inajax']) { ?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(!empty($_G['setting']['sitename'])) { ?> <?php echo $_G['setting']['sitename'];?> - <?php } ?></title>
<meta name="keywords" content="<?php if(!empty($_G['setting']['metakeywords'])) { echo htmlspecialchars($_G['setting']['metakeywords']); } ?> " />
<meta name="description" content="<?php if(!empty($_G['setting']['metadescription'])) { echo htmlspecialchars($_G['setting']['metadescription']); ?> <?php } ?>" />
<meta name="generator" content="DzzOffice" />
    <meta name="author" content="DzzOffice" />
    <meta name="copyright" content="2012-2017 www.dzzoffice.com" />
    <meta name="MSSmartTagsPreventParsing" content="True" />
    <meta http-equiv="MSThemeCompatible" content="Yes" />
    <meta name="renderer" content="webkit">
<base href="<?php echo $_G['siteurl'];?>" />
     <link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css?<?php echo VERHASH;?>">
<script src="dzz/scripts/jquery-1.10.2.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="dzz/scripts/jquery.json-2.4.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',STYLEID = '1', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo $_G['setting']['verhash'];?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>',   SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>',disallowfloat=''</script>
 <script src="./data/template/core_common_showmessage__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
 <!--[if lt IE 9]><script src="./dzz/scripts/html5.js" type="text/javascript"></script><![endif]-->
    </head>
    <body id="nv_dzz">
<div id="append_parent" style="z-index:99999;"></div><div id="ajaxwaitid" style="z-index:99999;"></div><div id="ct" class="container " style="margin:20px">
<?php if(!$param['login']) { ?>
<div class="well" style="max-width:500px;margin:0 auto">
<?php } else { ?>
<div class="well" id="main_succeed" style="max-width:500px;margin:0 auto;display: none">
<div class="f_c altw">
<div class="alert_right">
<h5 id="succeedmessage"></h5>
<p id="succeedlocation" class="alert_btnleft"></p>
<p class="alert_btnleft"><a id="succeedmessage_href">如果您的浏览器没有自动跳转，请点击此链接</a></p>
</div>
</div>
</div>
<div class="well" id="main_message">
             
<?php } } else { ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[<?php } if($param['msgtype'] == 1 || $param['msgtype'] == 2 && !$_G['inajax']) { ?>
<div class="f_c altw">
<div id="messagetext" class="<?php echo $alerttype;?>">
<h5><?php echo $show_message;?></h5>
<?php if($url_forward) { if(!$param['redirectmsg']) { ?>
<p class="alert_btnleft"><a href="<?php echo $url_forward;?>">如果您的浏览器没有自动跳转，请点击此链接</a></p>
<?php } else { ?>
<p class="alert_btnleft"><a href="<?php echo $url_forward;?>">如果 <?php echo $refreshsecond;?> 秒后下载仍未开始，请点击此链接</a></p>
<?php } } elseif($allowreturn) { ?>
<script type="text/javascript">
if(history.length > (BROWSER.ie ? 0 : 1)) {
document.write('<p class="alert_btnleft"><a href="javascript:history.back()">[ 点击这里返回上一页 ]</a></p>');
} else {
document.write('<p class="alert_btnleft"><a href="./">[ <?php echo $_G['setting']['bbname'];?> 首页 ]</a></p>');
}
</script>
<?php } ?>
</div>
<?php if($param['login']) { } ?>
</div>
<?php } elseif($param['msgtype'] == 2) { ?>

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">提示信息</h4>
        </div>
        <div class="modal-body">
<div class="<?php echo $alerttype;?>"><?php echo $show_message;?></div>
        </div>
<div class="modal-footer">
<?php if($param['closetime']) { ?>
<span class="btn btn-link text-muted"><?php echo $param['closetime'];?> 秒后窗口关闭</span>
<?php } elseif($param['locationtime']) { ?>
<span class="btn btn-link text-muted"><?php echo $param['locationtime'];?> 秒后页面跳转</span>
<?php } if($param['login']) { ?>
<button type="button" class="btn btn-info" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');showWindow('login', 'user.php?mod=logging&action=login');"><strong>登录</strong></button>
<?php if(!$_G['setting']['bbclosed']) { ?>
<button type="button" class="btn btn-info" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');window.open('user.php?mod=rigister');"><em><?php echo $_G['setting']['reglinkname'];?></em></button>
<?php } } ?>
            <button type="button"  data-dismiss="modal" class="btn btn-default"><strong>关闭</strong></button>
</div>
<?php } else { ?><?php echo $show_message;?><?php } if(!$_G['inajax']) { ?>
</div>
</div><?php updatesession();?><?php if(!$_G['setting']['bbclosed']) { if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="misc.php?mod=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } ?>
    <?php if($_G['setting']['CorpID'] && !isset($_G['cookie']['sendwx'])) { ?>
        <script src="misc.php?mod=sendwx&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
    <?php } } if($_G['uid'] && $_G['adminid'] == 1 && !isset($_G['cookie']['checkupgrade'])) { ?>
<script src="misc.php?mod=upgrade&action=checkupgrade&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } ?>
</body>
</html>
<?php } else { echo output_ajax(); ?>]]></root><?php exit;?><?php } ?>
