<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"template/wap/default/Goods/goodsClassificationList.html";i:1581654509;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_goods_list.css">
<style>
.custom-search-button{top:6px;}
.category{width:95%;margin:10px auto;display: none;}
.category img{display: inline-block;width: 100%;}
.nothing-data{margin-top:50%;}
.custom-tag-list-goods dl{width:100%;}
.custom-tag-list-goods dt a {padding:0 10px;}
.custom-tag-list{height:92%;}
/* .category img{
	display: inline-block;
    vertical-align: middle;
    width: 100%;
    height: auto;
} */
/* .custom-tag-list,.custom-tag-list .custom-tag-list-menu-block,.custom-tag-list .custom-tag-list-goods{height:initial;}
 body{ 
	height:initial;
} */ 
</style>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" id="head_back" href="APP_MAIN"><i class="icon-back"></i></a>
	<div class="head-title">商品分类</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
	<!-- 平台商品分类 -->
	<!-- 搜索框样式 -->
<div class="custom-tag-list clearfix">
<!-- 	<div class="mask" id="grouGoodsListmask"></div> -->
	<?php if(count($goods_category_list_1)): ?>
	<div class="custom-tag-list-menu-block">
		<ul class="custom-tag-list-side-menu" style="position: relative;width:100%;background:#fff;" id='goods_group'>
			<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?>
			<li val="<?php echo $category['category_id']; ?>">
				<a <?php if($k==0): ?> class="selected" <?php endif; ?> onclick="showCategorySecond(this,<?php echo $category['category_id']; ?>)" data-category-id="<?php echo $category['category_id']; ?>"><span><?php echo $category['short_name']; ?></span></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<?php endif; if(count($goods_category_list_1)): ?>
	<div class="custom-tag-list-goods" id='good_list'>
		
		<!-- 一级分类频道 -->
		<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?>
		<div class="category js-category-<?php echo $category['category_id']; ?>" <?php if($k==0): ?>style="display:block;"<?php endif; ?>>
		
			<div style="width:100%;background: #ffffff;text-align: center;">
			<?php if($category['category_pic']!=''): ?>
			<img src="__UPLOAD__/<?php echo $category['category_pic']; ?>" alt="<?php echo $category['short_name']; ?>">
			<?php else: ?>
			<img src="__TEMP__/<?php echo $style; ?>/public/images/catagory.png" alt="<?php echo $category['short_name']; ?>">
			<?php endif; ?>
			</div>
			<a href="APP_MAIN/goods/goodslist?category_id=<?php echo $category['category_id']; ?>" class="all" style="color: #FFF">进入<?php echo $category['short_name']; ?>频道&nbsp;&gt;&nbsp;&gt;</a>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; if(is_array($goods_category_list_2) || $goods_category_list_2 instanceof \think\Collection || $goods_category_list_2 instanceof \think\Paginator): if( count($goods_category_list_2)==0 ) : echo "" ;else: foreach($goods_category_list_2 as $k=>$category_second): ?>
			<dl class="js-category-<?php echo $category_second['pid']; ?>" <?php if($category_second['pid']!=$goods_category_list_1[0]['category_id']): ?>style="display: none;"<?php endif; ?>>
			<dt><a href="APP_MAIN/goods/goodslist?category_id=<?php echo $category_second['category_id']; ?>"> <?php echo $category_second['category_name']; ?> </a></dt>
			<dd>
				<div class="catalog-box">
				<?php if(is_array($goods_category_list_3) || $goods_category_list_3 instanceof \think\Collection || $goods_category_list_3 instanceof \think\Paginator): if( count($goods_category_list_3)==0 ) : echo "" ;else: foreach($goods_category_list_3 as $key=>$category_third): if($category_second['category_id']==$category_third['pid']): ?>
					<div class="catalog-info">
						
						<a href="APP_MAIN/goods/goodslist?category_id=<?php echo $category_third['category_id']; ?>">
							<?php if($category_third['category_pic']!=''): ?>
							<div style=" height:40px; width: 100%;overflow: hidden;">
								<img src="__UPLOAD__/<?php echo $category_third['category_pic']; ?>" alt="<?php echo $category_third['category_name']; ?>" />
							</div>
							<?php else: ?>
							<div style=" height:40px; width: 100%;overflow: hidden;">
								<img src="__TEMP__/<?php echo $style; ?>/public/images/catagory-02.png" alt="<?php echo $category_third['category_name']; ?>" />
							</div>
							<?php endif; ?>
							<em style="margin:0;"><?php echo $category_third['category_name']; ?></em>
						</a>
					</div>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</dd>
		</dl>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="nothing-data js-children" align="center" style="display:none;">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/>
			<div>当前商品分类下没有子分类...</div>
		</div>
	</div>
	<?php else: ?>
		<div class="nothing-data" align="center">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/>
			<div>当前没有商品分类...</div>
		</div>
	<?php endif; ?>
</div>
<div style="position: fixed;bottom: 5%;right: 5%;width: 50px;z-index: 999;" onclick="location.href='APP_MAIN';">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/go_home.png" style="width: 100%;max-width: 100%;" />
</div>
<script>
$(function(){
	
	//默认显示选择的第一个商品分类数据
	if($("#goods_group li .selected").attr("data-category-id") != undefined){
		showCategorySecond($("#goods_group li .selected"),$("#goods_group li .selected").attr("data-category-id"));
	}
	
	//将没有第三级的商品分类过滤
	$("[class*='js-category']").each(function(){
		if($(this).find(".catalog-info").length == 0){
			$(this).find("dd").remove();
		}
	});
});
//显示二级分类
function showCategorySecond(obj,category_id){
	//设置选中效果
	$(".custom-tag-list-side-menu li a").removeClass("selected");
	$(obj).addClass("selected");
	$("[class*='js-category']").hide();
	$("[class$='js-category-"+category_id+"']").show();
	if($("dl[class='js-category-"+category_id+"']").length == 0){
		$(".js-children").show();
	}else{
		$(".js-children").hide();
	}
}
// $("#head_back").click(function (){
// 	var json ={
// 		"center" : "2"
// 	};
// 	window.webkit.messageHandlers.center.postMessage(json);
// })
</script>

	 
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>