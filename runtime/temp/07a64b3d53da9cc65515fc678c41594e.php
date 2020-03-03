<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"template/wap/default//Shop/goodsList.html";i:1579055750;s:30:"template/wap/default/base.html";i:1579055749;}*/ ?>
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
<title><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
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

<!-- 添加样式文件 -->

</head>
<body class="body-gray">
	

<section class="head">
		<a class="head_back"  href='javascript:history.back(-1)'><i class="icon-back"></i></a>
		<div class="head-title"><?php echo $search_title; ?></div>
	</section>
<style>
	.head-title {
    margin: 0 80px;
    height: 44px;
    line-height: 44px;
    color: #333;
    font-size: 16px;
    text-align: center;
    width: 80%;
    margin: auto;
    margin-left: 15%;
}
.custom-search{
	padding: 0px;
	background-color:#f7f7f7;
}
.custom-search form {
    margin: 0;
    position: relative;
    background: none;
    border-radius: 4px;
    border: 0 none;
    overflow: hidden;
}
.custom-search-button {
    top: 6px;
}
.members_goodspic{
	margin-top: 45px;
}

</style>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<section class="members_goodspic" id="main_list">    
 	<ul>
 	<?php if(is_array($goods_list) || $goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $k=>$goods): ?>
 	<li class="gooditem"><div class="img"> <a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_id']; ?>">
 	<img class="lazy" src="__ROOT__/<?php echo $goods['pic_cover_mid']; ?>" >'
 	</a></div><div class="info">
 	<p class="goods-title"><a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_id']; ?>" ><?php echo $goods['goods_name']; ?></a></p>
 	<p class="goods-price"><em>￥<?php echo $goods['promotion_price']; ?></em></p>
 	<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_id']; ?>"><div class="goods-buy"></div></a>
 	</div></li>
 	<?php endforeach; endif; else: echo "" ;endif; ?>
 	</ul>
</section>
<script>

$(function(){
	$('.order_div span').click(function(){
		$('.order_div span').removeClass('select');
		$(this).addClass('select');
		GetgoodsList($(this).attr('value'));
	})
	$('.order_div span:nth-child(3)').click(function(){
		if(!$(this).children().is('.statu_two')){
			$(this).children().addClass('statu_two');	
		}else{
			$(this).children().removeClass('statu_two');
		}
	})
})
}
</script>		

	

	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>