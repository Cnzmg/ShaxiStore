<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"template/wap/default//Index/shopStreet.html";i:1579055755;s:30:"template/wap/default/base.html";i:1579075044;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/shopStreet.css">

<!-- 添加样式文件 -->
<style type="text/css">
.vertical-bar{
	border-left: 1px solid #efefef;
	height: 64px;
	vertical-align: middle;
	display: inline-block;
	margin-top: 5px;
	float: left;
}
</style>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)">
<!-- 	<i class="icon-back"></i> -->
	</a>
	<div class="head-title">
		<div class="custom-search" >
			<form action="" method="get">
				<input type="text" class="custom-search-input" style="position:relative;" placeholder="请输入店铺名称" value='<?php echo $shop_name; ?>' id="shop">
				<button type="button" class="custom-search-button" onclick="search()">搜索</button>
			</form>
		</div>
	</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div class="order_div">
	<!-- 全部 -->
	<?php if($shop_group_name == ''): if($order_type == ''): ?>
			<span class="select" id="shop_group"><a href="javascript:;">全部 </a>
		<?php else: ?>
			<span id="shop_group">全部
		<?php endif; else: ?>
		<span id="shop_group"><?php echo $shop_group_name; endif; ?>
		</span>

	<!-- 销量 -->
	<?php if($order_type == 1): ?>
		<span class="select" >
	<?php else: ?>
		<span>
	<?php endif; if($order_type == 1 && $sort == 'desc'): ?>
			<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=1&sort=asc&shop_group_name=<?php echo $shop_group_name; ?>">销量<i class='desc_selected'></i></a>
			<?php else: ?>
			<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=1&sort=desc&shop_group_name=<?php echo $shop_group_name; ?>">销量
				<?php if($order_type != 1): ?>
					<i class="desc"></i>
				<?php else: ?>
					<i class="asc_selected"></i>
				<?php endif; ?>
			</a>
		<?php endif; ?>
		</span>

	<!-- 信誉 -->
	<?php if($order_type == 2): ?>
		<span class="select" >
	<?php else: ?>
		<span>
	<?php endif; if($order_type == 2 && $sort == 'desc'): ?>
		<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=2&sort=asc&shop_group_name=<?php echo $shop_group_name; ?>">信誉<i class='desc_selected'></i></a>
		<?php else: ?>
		<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=2&sort=desc&shop_group_name=<?php echo $shop_group_name; ?>">信誉
			<?php if($order_type != 2): ?>
				<i class="desc"></i>
			<?php else: ?>
				<i class="asc_selected"></i>
			<?php endif; ?>
		</a>
	<?php endif; ?>
	</span>
		
	<!-- 筛选 -->
	<span><a href="javascript:;"><i class="screening"></i>筛选</a></span>
</div>
<!-- 店铺列表 -->
<div class="main">
	<?php if($total_count == 0): ?>
	<div class="nothing-data" align="center">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/>
		<div>没有找到您想要的商品…</div>
	</div>
	<?php else: ?>
	<ul class="shop-list">
		 <?php if(is_array($shop_list) || $shop_list instanceof \think\Collection || $shop_list instanceof \think\Paginator): if( count($shop_list)==0 ) : echo "" ;else: foreach($shop_list as $key=>$vo): ?>
		<li>
			<a href="APP_MAIN/shop/index?shop_id=<?php echo $vo['shop_id']; ?>"  title="<?php echo $vo['shop_name']; ?>">
				
					<div class="store-name">
						<h1><?php echo $vo['shop_name']; ?></h1>
						<?php if($vo['shop_type'] == 1): ?>
						<span class="flag-stores">直营店</span>
						<?php else: ?>
<!-- 						<span class="flag-brand">普通店</span> -->
						<?php endif; ?>
						<span class="flag-security">保</span>
						<img  src="__TEMP__/<?php echo $style; ?>/public/images/right_arrow.png" class="right-arrow" />
					</div>
				<div class="store-item">
					<?php if($vo['shop_logo'] == '' or $vo['shop_logo'] == null): ?>
					<img alt="" src="__TEMP__/<?php echo $style; ?>/public/images/default_shop_logo.png" class="store-logo">
					<?php else: ?>
					<img alt="" src="__UPLOAD__/<?php echo $vo['shop_logo']; ?>"  class="store-logo">
					<?php endif; ?>
					<div class="store-right">
						<div class="store-detail">
							<div class="left">
								<div class="scope-business">经营范围：<strong><?php echo $vo['grou_name']; ?></strong></div>
								<div class="good-rate">好评率：<strong>90%</strong></div>
								<div class="credibility">信誉：
								<?php for($i = 0;$i<5;$i++){
							if( $vo["shop_credit"] <= $i){?>
										<img style="vertical-align: middle;width:15px;" src="__TEMP__/<?php echo $style; ?>/public/images/credibility_starts_none.png" alt='<?php echo $vo["shop_credit"]; ?>' />
								<?php	}else{?>
									<img style="vertical-align: middle;width:15px;" src="__TEMP__/<?php echo $style; ?>/public/images/credibility_starts.png" alt='<?php echo $vo["shop_credit"]; ?>' />
								<?php }
						} ?>
								</div>
							</div>
							<!-- <i class="vertical-bar"></i>
							<div class="right" style="margin-top:12px;">
								<address>太原</address>
							</div> -->
						</div>
					</div>
				</div>
			</a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<?php endif; ?>
</div>
<!-- 导航 -->
<!-- 全部分类 -->
<div class="total_content" style="display:none;">
	<div class="total_left">
		<ul>
			<?php if($shop_group_id == ''): ?>
			<li><a target="_self" href="APP_MAIN/index/shopstreet" class="selected"><span>全部</span></a></li>
			<?php else: ?>
			<li><a target="_self" href="APP_MAIN/index/shopstreet" ><span>全部</span></a></li>
			<?php endif; foreach($shop_group_list as $vo): if($vo['shop_group_id'] == $shop_group_id): ?>
				<li>
					<a  class="selected" target="_self" href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $vo['shop_group_id']; ?>" title="<?php echo $vo['group_name']; ?>" class="selected">
						<span><?php echo $vo['group_name']; ?></span>
					</a>
				</li>
				<?php else: ?>
				<li>
					<a target="_self" href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $vo['shop_group_id']; ?>&shop_group_name=<?php echo $vo['group_name']; ?>" title="<?php echo $vo['group_name']; ?>">
						<span><?php echo $vo['group_name']; ?></span>
					</a>
				</li>
				<?php endif; endforeach; ?>
		</ul>
	</div>
</div>

	
	<div style="height:58px;"></div>
	<div class="fixed bottom">
		<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
		<dl class="sub-nav nav-b5">
			<dd id="buttom_home">
				<a href="APP_MAIN">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/home_check.png"/>
						<span>首页</span>
					</div>
				</a>
			</dd>
			<dd id="buttom_classify">
				<a href="APP_MAIN/goods/goodsClassificationList">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
						<span>分类</span>
					</div>
				</a>
			</dd>
			<dd id="buttom_stroe" >
				<a href="APP_MAIN/index/shopstreet">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png"/>
						<span>店铺街</span>
					</div>
				</a>
			</dd>
			<dd id="bottom_cart" >
				<a href="APP_MAIN/goods/cart">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
						<span>购物车</span>
					</div>
				</a>
			</dd>
			<dd id="bottom_member" >
				<a href="APP_MAIN/Member/index">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
						<span>会员中心</span>
					</div>
				</a>
			</dd>
		</dl>
	</div>
	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
$("#shop_group ").click(function(){
	if($(".total_content").is(":hidden")){
		$(".total_content").show();
	}else{
		$(".total_content").hide();
	}
});
function search(){
	var shop_name_1=$('#shop').val();
	location.href="APP_MAIN/index/shopStreet?shop_name="+shop_name_1;
}

$(function(){
	buttomActive('#buttom_stroe');
});
</script>

</body>
</html>