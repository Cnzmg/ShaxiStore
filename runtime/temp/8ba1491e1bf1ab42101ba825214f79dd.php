<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"template/wap/default//Member/shopqrcode.html";i:1581654516;s:30:"template/wap/default/base.html";i:1581654581;s:31:"template/wap/default/share.html";i:1581654581;s:39:"template/wap/default/shareContents.html";i:1581654581;}*/ ?>
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

<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/member_address.css">
<style>
body{
	background-color:#FFF;
}
.qrcode_bg img{
	margin-left:15px;
}
.shop-text{
	margin-left:15px;
	color:#333;
	font-size:15px;
}
.shop-text li{
	height:25px;
	line-height:25px;
}
.shop-align{
	display:inline-block;
	width:80px;
	
}
</style>	

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" id="backoutapp" onclick="window.history.go(-1)"
		href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title">店铺二维码</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<img class="shop-qrcode" src="APP_MAIN/member/showshopqecode?shop_id=<?php echo $shop_id; ?>" style="width:100%;margin-top:45px;"/>

<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">


	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
$(function(){
	//$(".shop-qrcode").height($(window).height()-45);
	$.ajax({
		type:"post",
		data : {"shop_id" : "<?php echo $shop_id; ?>" , "flag" : "qrcode_shop"},
		url : "APP_MAIN/member/getsharecontents",
		success : function(data){
			/* alert($("#appId").val());
			alert($("#jsTimesTamp").val());
			alert($("#jsNonceStr").val());
			alert($("#jsSignature").val()); */
			//document.write(data.share_img);
			/* $("#share_title").val(data['share_title']);
			$("#share_desc").val(data['share_contents']);
			$("#share_url").val(data['share_url']);
			$("#share_img_url").val(data['share_img']);\ */
			wx.config({
	debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
	appId: $("#appId").val(), // 必填，公众号的唯一标识
	timestamp: $("#jsTimesTamp").val(), // 必填，生成签名的时间戳
	nonceStr:  $("#jsNonceStr").val(), // 必填，生成签名的随机串
	signature: $("#jsSignature").val(),// 必填，签名，见附录1
	jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});

wx.ready(function() {

	var title = data['share_title'];
	var share_contents = data['share_contents']+'\r\n';
	var share_nick_name = data['share_nick_name']+'\r\n';
	var desc2 = share_contents+ share_nick_name + "收藏热度：★★★★★";
	var url = data['share_url'];
	var img_url = data['share_img'];
	wx.onMenuShareAppMessage({
		title: title,
		desc: desc2,
		link: url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击发送给朋友');
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "APP_MAIN/index/sharegivepoint",
				data : {
					"share" : true
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareTimeline({
		title: title,
		link: url,
		imgUrl: img_url,
		trigger: function (res) {
			// alert('用户点击分享到朋友圈');
		},
		success: function (res) {
		//alert('已分享');
			$.ajax({
				type : "post",
				url : "APP_MAIN/index/sharegivepoint",
				data : {
					"share" : true
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			// alert(JSON.stringify(res));
		}
	});
	
	// 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareQQ({
		title: title,
		desc: desc2,
		link: url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到QQ');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "APP_MAIN/index/sharegivepoint",
				data : {
					"share" : true
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareWeibo({
		title: title,
		desc: desc2,
		link: url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到微博');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "APP_MAIN/index/sharegivepoint",
				data : {
					"share" : true
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
});

		}
	});
});
$("#backoutapp").click(function (){
    var json ={
    		"center" : "1",
        }
    window.webkit.messageHandlers.center.postMessage(json);
})
</script>

</body>
</html>