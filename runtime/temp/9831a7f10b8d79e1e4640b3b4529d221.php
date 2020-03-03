<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"template/wap/default//Member/memberCoupon.html";i:1581654515;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
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

    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_common.css">

</head>
<body class="body-gray">
	
<section class="head">
		<a class="head_back" id="backoutapp" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title">我的优惠券</div>
	</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
 
  <div class="cf-container" data-reactid="2">
   		<div class="cf-edge" data-reactid="3"></div>
		<ul class="cf-content" data-reactid="4">
   			<li class="cf-tab-item select" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(1);">未使用</a></li>
			<li class="cf-tab-item" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(2);">已使用</a></li>
			<li class="cf-tab-item" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(3);">已过期</a></li>
			
    	</ul>
	</div>
  
    <div class="com_content">
    </div>
<script type="text/javascript">
	$(function(){
		$('.cf-container .cf-tab-item').click(function(){
       		$('.cf-container .cf-tab-item').removeClass('select');
       		$(this).addClass('select');
       	})
		getMemberCounponList(1);
	})
	function getMemberCounponList(type){
		$.ajax({
			type:'post',
			async:true,
			url:'APP_MAIN/member/membercoupon',
			data:{'type':type },
			dataType:'json',
			success:function(data){
				var listhtml='<div class="youhuiquan-list"><ul id="not_use">';
				if(data.length>0){
					$('.null_default').hide();
					for(var i=0;i<data.length;i++){
						var money=data[i]['money'];
						var coupon_code=data[i]['coupon_code'];
						var start_time=data[i]['start_time'];
						var end_time=data[i]['end_time'];
						if(type==1){
							listhtml+='<li><a class="not_use" href="javascript:;">';
						}else{
							listhtml+='<li><a class="already-use" href="javascript:;">';	
						}
						
						listhtml+='<span class="circle left"></span><span class="circle right"></span><div class="p-l"><div class="active-img">劵</div>';
						listhtml+='<div class="active-msg"><div class="clear"></div><div class="name">'+coupon_code+'</div>';
						listhtml+='<div class="date"><span>'+start_time+'</span>至<span>'+end_time+'</span></div>';
						listhtml+='</div></div><div class="p-r">';
						listhtml+='<div class="number-money">￥'+money+'</div>';
						if(type==2){
							listhtml+='<span class="uneless-img"></span></div></a></li>';	
						}else if(type==3){
							listhtml+='<span class="due-img"></span></div></a></li>';
						}else{
							listhtml+='</div></a></li>';
						}
					}
					listhtml+='</ul></div>';
				}else{
					listhtml='<div class="null_default"><i class="icon-nocontent-youhuiquan"></i><span class="nulltext">你还没有任何优惠券哦！</span></div>';
				}
				
				$('.com_content').html(listhtml);
			}
		})
	}
    $("#backoutapp").click(function (){
        var json ={
        		"center" : "1",
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