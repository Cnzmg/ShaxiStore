<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"template/wap/default/Pay/getPayValue.html";i:1581654519;s:30:"template/wap/default/base.html";i:1581654581;s:42:"template/wap/default/controlCopyRight.html";i:1581654581;}*/ ?>
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

<!-- <link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/order.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_index.css"> -->
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/get_pay_value.css"/>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title">订单支付</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div class="head-info">
	<div class="head-pay">向<?php echo $shopname; ?>支付</div>
	<div class="head-pay-value">￥<?php echo $pay_value['pay_money']; ?></div>
</div>

<div class="pay-type-item">
	<div class="pay-item-list" id="pay-type">支付方式
	<?php if($pay_config['wchat_pay_config']['is_use']==1): ?> 
		<span id="pay-text" style="float: right;margin-right: 20px;">微信支付</span>
		<input type="hidden" id="pay_config" value="1">
	<?php elseif($pay_config['ali_pay_config']['is_use']==1): ?>
		<span id="pay-text" style="float: right;margin-right: 20px;">支付宝支付</span>
		<input type="hidden" id="pay_config" value="1">
	<?php else: ?>
		<span style="float: right;margin-right: 20px;"></span>
		<input type="hidden" id="pay_config" value="0">
	<?php endif; ?>
		<span style="float:right" class="jiantou"></span>
	</div>
	<div style="padding: 10px 0px;">支付人<span style="float:right;"><?php echo $member_info["user_info"]['nick_name']; ?></span></div>
</div>

<!-- 遮罩层 -->
<div class="shade" style="display:none;"></div>
<!-- 弹出层 --> 
<div class="popup" style="display:none;">
	<div class="codes">
		<div id="close"><p style="color:#999;">X</p></div>
		<?php if($pay_config['wchat_pay_config']['is_use']==1): ?>
			<div class="wchat-weixin">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weifu.png" class="wchat-photo">
					<span class="wchat-title">微信支付</span>
				<span id="wchatpay"></span> 
			</div>
		<?php endif; if($pay_config['ali_pay_config']['is_use']==1): ?> 
			<div class="ali-pay">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/zhifu.png" class="ali-photo">
				<span class="ali-item">支付宝支付</span>
				<span id="alipay"></span>
			</div>
		<?php endif; if($pay_config['wchat_pay_config']['is_use']==1): ?> 
		<input type="hidden" id="pay_type" value="0"> 
		<?php elseif($pay_config['ali_pay_config']['is_use']==1): ?>
		<input type="hidden" id="pay_type" value="1"> 
		<?php else: ?>
		<input type="hidden" id="pay_type" value="-1">
		<?php endif; ?>
		<input type="hidden" id="out_trade_no" value="<?php echo $pay_value['out_trade_no']; ?>">
		
	</div>
</div>
<style>
.footer {
	margin: 0 0 45px 0;
	padding: 0;
	min-height: 1px;
	text-align: center;
	line-height: 16px;
	background-color: #f8f8f8;
}

.ft-copyright {
	padding: 50px 0 20px;
	margin: 0 15px;
	font-size: 12px;
	background: url("__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png")
		no-repeat center 15px;
	background-size: 110px 30px;
}

.ft-copyright a {
	padding-top: 45px;
	color: #ccc;
}
</style>
<div class="footer" style="min-height: 86px;">
	<div class="copyright">
		<div class="ft-copyright">
			<!-- <a href="javascript:;" target="_blank">Niushop开源商城提供技术支持</a> -->
		</div>
	</div>
</div>

<section class="s-btn" style="position: fixed; left: 0; right: 0; bottom: 0; height: 50px; padding: 0; z-index: 5;">
	<button class="alipay" type="button" onclick="calculate()">确认支付￥<?php echo $pay_value['pay_money']; ?></button>
</section>
<script>
$(function(){
// 	$("#pay_type").val(0);//默认是微信支付
	$("#wchatpay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#alipay").html("<img src='" + __IMG__ + "/hgou.png'>");
})

var __IMG__ = '__TEMP__/<?php echo $style; ?>/public/images';
function calculate() {
	var pay_type = $("#pay_type").val();
	var out_trade_no = $("#out_trade_no").val();
	if (pay_type == 0) {
		//微信支付
		window.location.href = "APP_MAIN/pay/wchatpay?no=" + out_trade_no;
	} else if (pay_type == 1) {
		//支付宝支付
		window.location.href = "APP_MAIN/pay/alipay?no=" + out_trade_no;
	}else if(pay_type == -1){
		showBox("请选择支付方式");
	}
}

$("#pay-type").click(function(){
	var pay_config = $("#pay_config").val();
	if(pay_config == 1){
		$(".shade").show();
		$(".popup").show();
	}else{
		showBox("商家未配置支付方式");
	}
})

$(".ali-pay").click(function() {
	$(".shade").hide();
	$(".popup").hide();
	$("#pay_type").val(1);
	$("#alipay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#wchatpay").html("<img src='" + __IMG__ + "/hgou.png'>");
	$("#pay-text").html("支付宝支付");
})

$(".wchat-weixin").click(function() {
	$(".shade").hide();
	$(".popup").hide();
	$("#pay_type").val(0);
	$("#alipay").html("<img src='" + __IMG__ + "/hgou.png'>");
	$("#wchatpay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#pay-text").html("微信支付");
})

$("#close").click(function(){
	$(".shade").hide();
	$(".popup").hide();
})
</script>

	 
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>