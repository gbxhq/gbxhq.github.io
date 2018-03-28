<? if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:77:"/home/oowin/domains/oo1.win/public_html/win/./dzz/system/template/orgtree.htm";i:1492235060;s:98:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_start.htm";i:1492235056;s:96:"/home/oowin/domains/oo1.win/public_html/win/./core/template/default/common/header_simple_end.htm";i:1492235056;}*/?>
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
<link href="dzz/system/images/themes/default/style.min.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<style>
html,body{
height:100%;
width:100%;
margin:0;
overflow:hidden;
background:#FBFBFB;

}
.orgtree-search{
position:absolute;
width:100%;
left:0;
bottom:0;

}
.orgtree-search .form-control{
padding:5px 50px 5px 5px;
border:0;
border-top:1px solid #CCC;
box-shadow:none;
}
.orgtree-search .form-control:focus{
box-shadow:none;
}
.orgtree-search .search{
position:absolute;
right:25px;
top:1px;
width:24px;
height:32px;
padding:8px 5px;
}
.orgtree-search .delete {
position: absolute;
right: 1px;
top: 1px;
width:24px;
height:32px;
padding:8px 5px;
}
.orgtree-search a:hover{
background:#F7F7F7;
}
.jstree-default-responsive .jstree-anchor>.jstree-themeicon{
background-size:auto;
}
</style><script src="./data/template/dzz_system_orgtree_dzz_api_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/dzz.api.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript" >  
try{
var api=_api.init();
}catch(e){}
</script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="./data/template/dzz_system_orgtree__fun_zh-cn.js" type="text/javascript"></script><script src="dzz/scripts/_fun.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<div id="orgtree" class="orgtree-container" style="padding:5px;overflow:auto;"></div>
<div  class="orgtree-search">
        <a href="javascript:;" class="search" onclick="jstree_search();return false" title="搜索"><i class="glyphicon glyphicon-search"></i></a>
        <a href="javascript:;" class="delete" onclick="jstree_search('stop');return false" title="关闭搜索框"><i class="glyphicon glyphicon-remove"></i></a>
        <input id="jstree_search_input" type="text" placeholder="搜索部门或用户" class="form-control" onkeyup="if(event.keyCode==13){jstree_search()}"  />
    </div>

<script type="text/javascript">
var ctrlid='<?php echo $_GET['ctrlid'];?>';
var multiple='<?php echo $_GET['multiple'];?>'?true:false;
var nouser='<?php echo $_GET['nouser'];?>'?1:0;
var moderator='<?php echo $_GET['moderator'];?>'?1:0;
var ismobile='<?php echo $ismobile;?>'?1:0;
jQuery(document).ready(function(e) {
jQuery('#orgtree').css('height',parseInt(parent.jQuery('#'+ctrlid+'_dropdown_menu').css('height'))-10-(jQuery('.orgtree-search').outerHeight(true)||45));
jQuery("#orgtree").jstree({ 
"core" : {
"multiple" : multiple,
"check_callback" : false,
"themes" : { "responsive":(ismobile?true:false)},
'data':function(node,cb){
var self=this;
jQuery.post(DZZSCRIPT+'?mod=system&op=orgtree&do=orgtree',{'id':node.id,'nouser':nouser,'moderator':moderator,'zero':'<?php echo $zero;?>'},function(json){
cb.call(this,json);
},'json');
}
  },
 "checkbox" : {
  "keep_selected_style" : false
},

   "search":{ 
 "show_only_matches":true
 ,"fuzzy":false
 ,"ajax":{'url' : '<?php echo DZZSCRIPT;?>?mod=system&op=orgtree&do=search&nouser='+nouser,'dataType':'json'}
   },
  "plugins" : ["checkbox","search"]
// List of active plugins

   });


jQuery("#orgtree").on('select_node.jstree',function(e,data){
//jQuery("#orgtree").jstree(true).open_node(data.node);
//console.log(data.selected);

 });
 jQuery("#orgtree").on('changed.jstree',function(e,data){
//jQuery("#orgtree").jstree(true).toggle_node(data.node);
if(data.action=='select_node' || data.action=='deselect_node'){
formatSelected(data.selected);
}

 });
 jQuery("#orgtree").on('ready.jstree',function(e){
 var inst=jQuery("#orgtree").jstree(true);
 try{
 var orgtree=parent.selorg.openarr[ctrlid] || [];
 if(orgtree){
 for(var i in orgtree){
if(document.getElementById(orgtree[i][0])) open_node_dg(inst,document.getElementById(orgtree[i][0]),orgtree[i]);
 }
 }
 }catch(e){}
jstree_checked();
 });

 jQuery("#orgtree").on('open_node.jstree',function(e,data){
 jstree_checked();
 });


});
function open_node_dg(inst,node,arr){ //自动打开有权限的目录树
 inst.open_node(node,function(node){
 var i=jQuery.inArray(parseInt(node.id),arr);
 if(i<arr.length && i>-1 && document.getElementById(arr[i+1])) open_node_dg(inst,document.getElementById(arr[i+1]),arr);
 else{
 //inst.select_node(node);
 }
 });
 }
function jstree_checked(){
var inst=jQuery("#orgtree").jstree(true)

if(!parent.jQuery('#sel_'+ctrlid).val()) return;

var orgids=parent.jQuery('#sel_'+ctrlid).val().split(',');

var uids_node=[];
var oids_node=[]
for(var i in orgids){//生成btn-sorg
if(orgids[i].indexOf('uid_')===0){ //用户
var uid=orgids[i].replace('uid_','');
jQuery('#orgtree .jstree-node[uid='+uid+']').each(function(){
var node=inst.get_node(this);
if(node) uids_node.push(node);
});
}else{
   var node=inst.get_node(orgids[i]);
   if(node) oids_node.push(node);
}
}
if(oids_node.length){
inst.select_node(oids_node,true);
}
    if(uids_node.length){
inst.select_node(uids_node,true);
}
}
//初始化选择范围
//
function formatSelected(sels){//格式化选择的内容，并且创建右侧的发布范围
 var inst=jQuery("#orgtree").jstree(true);
var nsels=[];var rsels=[];
for(var i in sels){
var parentid=inst.get_parent(sels[i]);
if(jQuery.inArray(inst.get_parent(sels[i]),sels)<0){
if(jQuery.isNumeric(sels[i]) || sels[i]=='other'){
rsels.push(sels[i]);
}else{
rsels.push(sels[i].replace(/orgid_\d+_/,''));
}
nsels.push(sels[i]);
}
}

checkdel_by_treeSelecteds(rsels);
selectorg_add(nsels);

}
function selectorg_add(sels){ //添加到右侧 
    var inst=jQuery("#orgtree").jstree(true);
var vals=[];
for(var i in sels){
var node=inst.get_node(sels[i]);
if(jQuery.isNumeric(sels[i]) || sels[i]=='other'){
var path=node.text;
if(node.parents.length>1){
for(var j=0;j<node.parents.length-1;j++){
var nodep=inst.get_node(node.parents[j]);
if(nodep.text) path=nodep.text+'-'+path;
}
}
vals.push({'orgid':sels[i],'icon':node.icon,'text':node.text,'path':path});
}else{
vals.push({'orgid':sels[i].replace(/orgid_\d+_/,''),'icon':node.icon,'text':node.text,'path':node.text});
}
}

try{
parent.selorg.add(ctrlid,vals);
}catch(e){}

}

function checkdel_by_treeSelecteds(rsels){ //检测右侧以选择区域，在树中存在的，没有选中的删除掉；
    var inst=jQuery("#orgtree").jstree(true);
var orgids=parent.jQuery('#sel_'+ctrlid).val().split(',');
var vals=[];
for(var i in orgids){
if(jQuery.inArray(orgids[i],rsels)>-1) continue;
if(orgids[i].indexOf('uid_')===0){ //用户
var uid=orgids[i].replace('uid_','');
jQuery('#orgtree .jstree-node[uid='+uid+']').each(function(){
var node=inst.get_node(this);
if(node){//在树中，直接删除
vals.push(orgids[i]);
return;
}
});
}else{
  var node=inst.get_node(orgids[i]);
  if(node){
 vals.push(orgids[i]);
  }
}
}
try{parent.selorg.del(ctrlid,vals);}catch(e){}
}
function selectorg_remove(val){
 
  var inst=jQuery("#orgtree").jstree(true);
 
  //取消树中的选择状态
  val+='';
  
   if(val.indexOf('uid_')===0){ //用户
var uid=val.replace('uid_','');
jQuery('#orgtree .jstree-node[uid='+uid+']').each(function(){
var node=inst.get_node(this);
if(node) inst.deselect_node(node,true);
});
}else{
   var node=inst.get_node(val);
   if(node) inst.deselect_node(node,true);
}
}


function jstree_search(op){
if(op=='stop'){

jQuery('#jstree_search_input').val('');
jQuery("#orgtree").jstree(true).search();
}else{
   jQuery("#orgtree").jstree(true).search(jQuery('#jstree_search_input').val());
}
}




</script>
<script src="static/js/jstree.min.js?<?php echo VERHASH;?>" type="text/javascript"></script> 
</body>
</html>