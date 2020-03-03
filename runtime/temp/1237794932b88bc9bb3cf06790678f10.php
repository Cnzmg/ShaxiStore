<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"template/wap/default/Goods/integralCenter.html";i:1579055757;s:30:"template/wap/default/base.html";i:1579075044;}*/ ?>
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
	href="__TEMP__/<?php echo $style; ?>/public/css/control_type.css">
<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/group_buy.css">
	<style>
.slick{
	margin-top:44px;
}
.controltype{margin:0;}
.exchange{
	width:100%;height:30px;line-height:30px;border-left:2px solid #B26170;margin-top:5px;
}
.more_exchange{
	width:23%;height:30px;line-height:30px;float:right;
}
.more_exchange span{
	font-size:14px;color:#B1B1B1;
}
.more_exchange img{
	    margin-left: 5px;
    width: 6px;
    vertical-align: middle;
}
.slick img{
	width:100%;
}
</style>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" href="javascript:window.history.go(-1)"><i
		class="icon-back"></i></a>
	<div class="head-title">积分中心</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	

<?php if($discount_adv['is_use'] == 1): if($discount_adv['adv_list'][0]['adv_image'] != ''): ?>
<div class="slick">
	<!-- 广告位 -->
	<a href="<?php echo $discount_adv['adv_list'][0]['adv_url']; ?>">
		<img src="__UPLOAD__/<?php echo $discount_adv['adv_list'][0]['adv_image']; ?>" >
		<!-- style="height:<?php echo $discount_adv['ap_height']; ?>px;" -->
	</a>
</div>

    <?php endif; endif; if($discount_adv['is_use'] == 1): ?>
<div class="exchange">
	&nbsp;&nbsp;<span>火爆兑换</span>
	<a href="APP_MAIN/goods/integralcenterlist">
	<div class="more_exchange">
		<span >更多兑换</span><img src="__TEMP__/<?php echo $style; ?>/public/images/goods_right.png" >
	</div>
	</a>
</div>
<?php else: ?>
<div class="exchange" style="margin-top:48px;">
	&nbsp;&nbsp;<span>火爆兑换</span>
	<a href="APP_MAIN/goods/integralcenterlist">
	<div class="more_exchange">
		<span >更多兑换</span><img src="__TEMP__/<?php echo $style; ?>/public/images/goods_right.png" >
	</div>
	</a>
</div>
<?php endif; ?>
<section class="members_goodspic">
	<ul>
		<?php if(is_array($hotGoods['data']) || $hotGoods['data'] instanceof \think\Collection || $hotGoods['data'] instanceof \think\Paginator): if( count($hotGoods['data'])==0 ) : echo "" ;else: foreach($hotGoods['data'] as $k=>$good): ?>
		<li class="gooditem">
			<div class="img">
				<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $good['goods_id']; ?>"><img
					class="lazy" src="__UPLOAD__/<?php echo $good['pic_cover_mid']; ?>"></a>
			</div>
			<div class="info">
				<p class="goods-title">
					<a href="APP_MAIN/goods/goodsgetail?id=<?php echo $good['goods_id']; ?>"><?php echo $good['goods_name']; ?></a>
				</p>
				<p class="goods-price">
					<em>积分:<?php echo $good['point_exchange']; ?></em>
				</p>
				<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $good['goods_id']; ?>"></a>
			</div>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</section>

	 
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>