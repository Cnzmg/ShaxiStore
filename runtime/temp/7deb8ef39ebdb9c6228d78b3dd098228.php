<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"template/wap/default//Member/accountList.html";i:1581654514;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<!-- <title><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title> -->
<title>我的商城</title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var ADMINMAIN='ADMIN_MAIN';

$(function(){
	showLoadMaskLayer();
})

$(document).ready(function(){
	hiddenLoadMaskLayer();
	//编写代码
});

//页面底部选中
function buttomActive(event){
	clearButton();
	if(event == "#buttom_home"){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#buttom_classify"){
		$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#buttom_stroe"){
		$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//显示加载遮罩层
function showLoadMaskLayer(){
	$(".mask-layer-loading").fadeIn(300);
}

//隐藏加载遮罩层
function hiddenLoadMaskLayer(){
	$(".mask-layer-loading").fadeOut(300);
}
</script>
<style>
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
</style>

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_address.css">
<style>
.addr-box {padding-top: 0px;text-align: center;}
.addr-tip {font-size: 14px;color: #8f8f8f;margin-top: 10px;}
.btn-save {margin-top: 40px;}
.div-simply{display: inline-block; width: 100%; padding: 5px; border-bottom: 1px solid #e2e2e2;}
.address.side-nav li {margin-top: 10px;margin-bottom: 5px;}
</style>

</head>
<body class="body-gray">
	
	<section class="head">
		<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
		<div class="head-title"></div>
	</section>
	
	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	

<section class="head">
	<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title">我的账户列表</div>
</section>

<ul class="side-nav address" id="ul" style="background: #eee; padding: 0">
	<?php if(is_array($account_list) || $account_list instanceof \think\Collection || $account_list instanceof \think\Paginator): if( count($account_list)==0 ) : echo "" ;else: foreach($account_list as $key=>$vo): if($vo['is_default'] == '1'): ?>
	<li id="<?php echo $vo['id']; ?>" class="current" style=" background: #fff; padding: 0; ">
	<?php else: ?>
	<li id="<?php echo $vo['id']; ?>" style=" background: #fff; padding: 0; ">
	<?php endif; ?>
		<div style="background: url('__TEMP__/<?php echo $style; ?>/public/images/border_order_top.png'); height: 2px"></div>
		<div class="div-simply">
			<span class="payStatus">姓名：</span> 
			<span class="payStatus"><span class="name"><?php echo $vo['realname']; ?>&nbsp;&nbsp;</span></span>
			<div style="display: inline-block; float: right;">
				<a href="APP_MAIN/member/updateaccount?shop_id=<?php echo $shop_id; ?>&id=<?php echo $vo['id']; ?>" style="display: inline-block; float: right;">【修改】</a> 
				<?php if(count($account_list) != 1): ?>
				<a href="javascript:void(0);" onclick="account_delete(<?php echo $vo['id']; ?>);" style="display: inline-block;">【删除】</a>
				<?php else: ?>
				<a href="javascript:void(0);" onclick="account_delete(<?php echo $vo['id']; ?>);" style="display: none; float: right;">【删除】</a>
				<?php endif; ?>
			</div>
		</div>
 		 
		<a href="javascript:void(0)" id="mo" onclick='checkAccount(<?php echo $vo['id']; ?>,this)'>
			<div class="div-simply">
				<span class="payStatus">手机号码：</span> <span class="payStatus"><span><?php echo $vo['mobile']; ?></span></span>
			</div> 
			<div class="div-simply">
				<span class="payStatus">账号类型：</span> <span class="payStatus"><span><?php echo $vo['bank_type']; ?></span></span>
			</div>
		
			<div class="div-simply" >
				<span class="payStatus">银行账号：</span> <span class="payStatus"><span><?php echo $vo['account_number']; ?></span></span>
			</div>
			<div class="div-simply" >
					<span class="payStatus">支行信息：</span>
					<span><?php echo $vo['branch_bank_name']; ?></span>
					<span class="payStatus" style="float: right; line-height: 20px;margin-right: 15px;">
						<i class="icon-success"></i>
					</span>
			</div>
		</a>
	</li> 
	<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<?php if(count($account_list) == 0): ?>
<!-- <img src="__TEMP__/<?php echo $style; ?>/public/images/adds.png" style="margin: 0 auto; display: block; margin-top: 10px; height: 100px;"> -->
	
<img src="__TEMP__/<?php echo $style; ?>/public/images/member_none_account.png" style="margin: 0 auto; display: block; margin-top: 10px;">
<div class="addr-box" style="display: block;">
	<span class="iconfont address-icon"></span>
	<p class="addr-tip">您还没有添加账户，添加一个吧!</p>
</div>
<?php endif; ?>
<button class="btn-save" onclick="window.location.href='APP_MAIN/member/addaccount?shop_id=<?php echo $shop_id; ?>';">新增账户</button>

<input type="hidden" value="<?php echo $shop_id; ?>" id="shop_id"/>

	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
	function checkAccount(id,obj){
       var shop_id=$("#shop_id").val();
		$.ajax({
			url: "APP_MAIN/member/checkaccount",
			data: { "id": id },
			type: "post",
			success: function (res) {
				showBox(res.message);
				if (res["code"] > 0) {
					$(".side-nav.address").children("li").removeClass("current");
					$(obj).parent().parent("li").addClass("current");
					if(<?php echo $flag; ?>==0){
						window.location.href="APP_MAIN/member/towithdraw?shop_id="+shop_id;
					}
					if(<?php echo $flag; ?>==2){
						window.location.href="APP_MAIN/distribution/towithdraw?shop_id="+shop_id;
					}
				}
			}
		})
	}
	function account_delete(id){
		$.ajax({
			url: "APP_MAIN/member/delaccount",
			data: { "id": id },
			type: "post",
			success: function (res) {
				showBox(res.message);
				 if (res.code == 1) {
					window.location.reload();
				}
			}
		})
	}
</script>

</body>
</html>