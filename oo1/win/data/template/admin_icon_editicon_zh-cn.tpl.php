<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:78:"/home/oowin/domains/oo1.win/public_html/win/./admin/icon/template/editicon.htm";i:1492235052;}*/?>
<form id="iconform" name="iconform" class="form-horizontal form-horizontal-left" action="<?php echo ADMINSCRIPT;?>?mod=icon&op=ajax" method="post" enctype="multipart/form-data" style="margin:0" onsubmit="ajaxpost(this.id,'return_iconedit','return_iconedit');">
  <input type="hidden" name="iconsubmit" value="true" />
  <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
  <input type="hidden" name="handlekey" value="iconedit" />
  <input type="hidden" name="did" value="<?php echo $did;?>" />
  <div class="form-group">
    <label class="control-label">域名：</label>
    <div class="controls">
      <input type="text" class="form-control" id="domain" name="domain" autocomplete="off" value="<?php echo $icon['domain'];?>">
    </div>
    <a class="help_inline btn btn-link" onmouseover="showTip(this,'34',this.title)" title="网址域名：如（dzzoffice.com,cs.dzzoffice.com等,通常不需要填写www前缀）"><i class="glyphicon glyphicon-question-sign"></i></a> 
  </div>
  <div class="form-group">
    <label class="control-label">图标</label>
    <div class="controls"> 
      <?php if($did>0) { ?>
      <p>
        <input id="fileiz_0" class="form-control input-sm" name="TMPiconnew" value="" style="display: none;" type="file">
        <input id="fileiz_1" class="form-control input-sm" style="" name="iconnew" value="<?php echo $_G['setting']['attachurl'];?><?php echo $icon['pic'];?>" type="text">
      </p>
      <p> <a id="fileiz_0a" style="" href="javascript:;" onclick="document.getElementById('fileiz_1a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_1').name = 'TMPiconnew';document.getElementById('fileiz_0').name = 'iconnew';document.getElementById('fileiz_0').style.display = '';document.getElementById('fileiz_1').style.display = 'none'">上传</a>&nbsp; <a id="fileiz_1a" style="font-weight: bold;" href="javascript:;" onclick="document.getElementById('fileiz_0a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_0').name = 'TMPiconnew';document.getElementById('fileiz_1').name = 'iconnew';document.getElementById('fileiz_1').style.display = '';document.getElementById('fileiz_0').style.display = 'none'">网址</a> </p>
      <?php } else { ?>
      <p>
        <input id="fileiz_0" class="form-control input-sm" name="iconnew" value="" type="file" accept="image/jpeg,image/png,image/jpg,image/gif">
        <input id="fileiz_1" class="form-control input-sm" style="display: none;" name="TMPiconnew" value="<?php echo $app['appico'];?>" type="text">
      </p>
      <p> <a id="fileiz_0a" style="font-weight: bold;" href="javascript:;" onclick="document.getElementById('fileiz_1a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_1').name = 'TMPiconnew';document.getElementById('fileiz_0').name = 'iconnew';document.getElementById('fileiz_0').style.display = '';document.getElementById('fileiz_1').style.display = 'none'">上传</a>&nbsp; <a id="fileiz_1a" style="" href="javascript:;" onclick="document.getElementById('fileiz_0a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_0').name = 'TMPiconnew';document.getElementById('fileiz_1').name = 'iconnew';document.getElementById('fileiz_1').style.display = '';document.getElementById('fileiz_0').style.display = 'none'">网址</a> </p>
      <?php } ?>
      
      <p class="text-muted">建议图片大小128X128 px</p>
    </div>
    <span class="help-block"> 
    <?php if($did) { ?><img class="img_50_50" style="padding:2px;border:1px solid #e1e1e1" src="<?php echo $_G['setting']['attachurl'];?><?php echo $icon['pic'];?>?t=<?php echo $_G['timestamp'];?>" onerror="this.src='dzz/images/default/icodefault.png'"> 
    <?php } else { ?> <img class="img_50_50" style="padding:2px;border:1px solid #e1e1e1" src="dzz/images/default/icodefault.png" > 
    <?php } ?> 
    </span> 
  </div>
  <div class="form-group">
    <label class="control-label">网址匹配正则</label>
    <div class="controls">
      <input type="text" class="form-control" name="reg" value="<?php echo $icon['reg'];?>">
    </div>
    <a class="help_inline btn btn-link glyphicon glyphicon-question-sign" style="text-decoration:none" onmouseover="showTip(this,'34',this.title)" title="匹配此网址的唯一表达式，可以是正则如：/mod=corpus&op=list/i 或普通字符如：mod=corpus&op=list ，留空只匹配域名"></a> 
  </div>
  <div class="form-group">
    <label class="control-label">匹配优先级</label>
    <div class="controls">
      <input type="text" class="form-control" name="disp" value="<?php echo $icon['disp'];?>">
    </div>
    <a class="help_inline btn btn-link glyphicon glyphicon-question-sign" style="text-decoration:none" onmouseover="showTip(this,'34',this.title)" title="同一域名下的匹配顺序，数字越大，优先级越高。当匹配区域有重叠时设置此项"></a> 
  </div>
  <div class="form-group last">
    <label class="control-label">特征后缀名</label>
    <div class="controls">
      <input type="text" class="form-control" name="ext" value="<?php echo $icon['ext'];?>">
    </div>
    <a class="help_inline btn btn-link glyphicon glyphicon-question-sign" style="text-decoration:none" onmouseover="showTip(this,'34',this.title)" title="设置此网址的特征后缀名，通过特征后缀名可以调用相应的应用打开此网址；如任务板的特征后缀可设置为：task"></a> 
  </div>
</form>
