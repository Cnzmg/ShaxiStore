<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"template/wap/default//Member/balanceWater.html";i:1579055754;s:30:"template/wap/default/base.html";i:1579075044;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_balance.css">
<style type="text/css">
.ns-table td {
	width: 100%;
}

.ns-lf {
	float: left;
}

.ns-rg {
	color: red;
	font-size: 14px;
	float: right;
}

.ns-rg-time {
	font-size: 14px;
	float: right
}
.account-option{
	 width:100%;
	 height:48px;
}
.account-option-left{
	    float: left;
    margin-top: 21px;
    text-align: center;
    line-height: 40px;
    font-size: 16px;
    border-top: 1px solid #f86126;
    border-bottom: 1px solid #f86126;
    border-right: 1px solid #f86126;
    color: #fff;
    width: 50%;
}
.account-option-right{
    float: right;
    border-left: 1px solid #f86126;
    border-top: 1px solid #f86126;
    border-bottom: 1px solid #f86126;
    border-left: none;
    text-align: center;
    line-height: 40px;
    font-size: 16px;
    color: #fff;
    width: 49.5%;
    margin-top: 21px;
}
.my-account .account-box .bottom{
	border: 1px solid #f56430;
    padding: 7px 18px;
    margin-top: 10px;
    border-radius: 6%;
    background: #ff8458;
    color: #f7f7f7;
}
/* .account-option ul li{
	float:right;
	text-align: center;
	line-height: 40px;
	font-size: 16px;
	color: #fff;
	width:50%;
} */
</style>
<script type="text/javascript">
window.onerror = function() {
	return true;
}
</script>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" id="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title">我的余额 </div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div id="main" class="detail-main">
	<div class="my-account">
		<!-- <a href="APP_MAIN/member/recharge" class="recharge">充值</a> -->
		<div class="account-box">
			<p class="balace"><?php echo $sum; ?></p>
			<p style="font-size: 14px;color: #ffc9b6;padding-bottom: 15px;">余额(元)</p>
			<a href="APP_MAIN/member/recharge" class="account-title bottom">充值</a>
		<!-- <?php if($is_use == 1): ?>
			<a href="APP_MAIN/member/toWithdraw?shop_id=<?php echo $shopid; ?>" class="account-title bottom">余额提现</a>
		<?php endif; ?> -->
			<div class="account-option">
			<ul>
				<a href="APP_MAIN/member/balancewithdraw"><li class="account-option-left">提现记录</li></a>
				<a href="APP_MAIN/member/towithdraw?shop_id=<?php echo $shopid; ?>"><li class="account-option-right">余额提现</li></a>
			</ul>
		</div>
		</div>
	</div>
	<?php if(count($balances) != 0): ?>
	<table class="ns-table">
		<?php if(is_array($balances['data']) || $balances['data'] instanceof \think\Collection || $balances['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $balances['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr align="center">
			<td style="padding-bottom: 0.2rem; font-size: 16px;"><span
				class="ns-lf" style="color: #444;"><?php echo $vo['type_name']; ?></span> <span
				class="ns-rg"><?php echo $vo['number']; ?></span></td>
			<td style="padding-top: 0.2rem; font-size: 14px; color: #888;">
				<span class="ns-lf"><?php echo $vo['text']; ?></span> <span class="ns-rg-time"><?php echo $vo['create_time']; ?></span>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<?php else: ?>
	<div>
		<div class="emptyFrame">
			<i class="user_money"></i><span>您暂时还没有余额记录哦！</span>
		</div>
	</div>
	<?php endif; ?>
</div>
<script type="text/javascript">
$("#head_back").click(function (){
    var json ={
            "center" : "2"
        }
    window.webkit.messageHandlers.center.postMessage(json);
})
</script>

	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>