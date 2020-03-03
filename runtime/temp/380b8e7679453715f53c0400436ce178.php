<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"template/wap/default//Goods/cart.html";i:1581654509;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
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

<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/order.css">
<link rel="stylesheet" type="text/css"href="__TEMP__/<?php echo $style; ?>/public/css/cart.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/cart.js" type="text/javascript"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/weixincommon.js"></script>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" id="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title">购物车</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div class="popup" id="popup" style="display: none"></div>
<div class="h50"></div>
<div class="cart-detail">
	<section class="cart-prolist">
		<ul class="cart-prolist-ul" style="border: 0;">
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $i=>$cart): $shop_info= explode(",",$i); ?>
			<li data-parent-shopid="<?php echo $shop_info[0]; ?>">
				<h2 class="title">
					<div class="custom-store-img"></div>
					店铺名称：<?php echo $shop_info[1];?>
					<div class="cart_ed" >
						<a id="cart_edit<?php echo $shop_info[0]; ?>" data-shopid="<?php echo $shop_info[0]; ?>" onclick="cart_edit(this,<?php echo $shop_info[0]; ?>)" style="display: block;">编辑</a>
						<a id="edit_success<?php echo $shop_info[0]; ?>" onclick="cart_succ(this,<?php echo $shop_info[0]; ?>)" style="display: none;">完成</a>
					</div>
				</h2>
			</li>
			<?php if(is_array($cart) || $cart instanceof \think\Collection || $cart instanceof \think\Paginator): if( count($cart)==0 ) : echo "" ;else: foreach($cart as $k=>$list): ?>
			<li class="cart-list-li" data-shopid="<?php echo $list['shop_id']; ?>">
				<div class="checkbox" is_check="yes" is_del='no'></div>
				<div class="product">
					<div class="pic">
						<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $list['goods_id']; ?>">
							<img src="__ROOT__/<?php echo $list['picture_info']['pic_cover_micro']; ?>" alt="商品图片">
						</a>
					</div>
					<div class="info">
						<p class="info-name">
							<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $list['goods_id']; ?>"><?php echo $list['goods_name']; ?><span><br /><?php echo $list['sku_name']; ?></span></a>
						</p>
						<!-- 	<p class="info-price">
						¥<span name="goods_price"><?php echo $list['price']; ?></span>
							<?php if($list['point_exchange_type']==1): ?>
							<span name="goods_integral" data-point="<?php echo $list['point_exchange']; ?>">
								<?php if($list['point_exchange']>0): ?>
									+<?php echo $list['point_exchange']; ?>积分
								<?php endif; ?>
							</span>
							<?php endif; ?>
						</p> -->
					</div>
				</div>
				<div class="number">
					¥<span name="goods_price"><?php echo $list['price']; ?></span>
					<?php if($list['point_exchange_type']==1): ?>
					<span name="goods_integral" data-point="<?php echo $list['point_exchange']; ?>">
						<?php if($list['point_exchange']>0): ?>
							+<?php echo $list['point_exchange']; ?>积分
						<?php endif; ?>
					</span>
					<?php endif; ?>
					×<span name="succ_amount"><?php echo $list['num']; ?></span>
					<div name="edit_num<?php echo $list['shop_id']; ?>" style="display: none;">
						<span class="ui-number">
							<button type="button" class="decrease" onclick="Cart.changeBar(&#39;-&#39;,<?php echo $list['cart_id']; ?>,this)" title="减">-</button>
							<input class="num" name="quantity" autocomplete="off" data-default-num="<?php echo $list['num']; ?>" value="<?php echo $list['num']; ?>" min="1" max="<?php echo $list['stock']; ?>" max_buy="<?php echo $list['max_buy']; ?>" data-cartid="<?php echo $list['cart_id']; ?>" data-shopid="<?php echo $list['shop_id']; ?>">
							<button type="button" class="increase" onclick="Cart.changeBar(&#39;+&#39;,<?php echo $list['cart_id']; ?>,this)" title="加">+</button>
						</span>
					</div>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
</div>
<input type="hidden" id="countlist" value="<?php echo $countlist; ?>">
<section class="cart-none" id="cart-none" style="display: none">
	<i class="cart-big"></i>
	<p class="text">您的购物车还没有商品！</p>
	<?php if($shop_id ==0): ?>
	<a href="APP_MAIN" class="btn">去逛逛</a>
	<?php else: ?>
	<a href="APP_MAIN/shop/index?shop_id=<?php echo $shop_id; ?>" class="btn">去逛逛</a>
	<?php endif; ?>
</section>

	
<div class="fixed bottom">
	<div class="btn_wrap btn_wrap_static">
		<div class="btn ttn_server" id="div_selected">
			<div style="float: left;height: 20px;width: 20px;padding-left:10px;">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/cartp2.png" is_check="yes" is_del="no" id="select_all" style="width:100%;"/>
			</div>
			<span id="sel_text">全选</span>
		</div>
		<div id="price_info">
			合计： ¥<span id="orderprice" class="price"></span>
			<br />
			<!-- <span style="color: #999;">不含运费</span> -->
		</div>
		<button class="btn btn_buy" onclick="settlement()">
			<span id="settlement">结算()</span>
		</button>
	</div>
</div>
<div class="h60"></div>
<script type="text/javascript">
var cart1 = "__TEMP__/<?php echo $style; ?>/public/images/cartp1.png";
var cart2 = "__TEMP__/<?php echo $style; ?>/public/images/cartp2.png";
//页面加载触发事件
$(function () {
	if(parseInt($("#countlist").val()) == 0){
		$(".cart-prolist").hide();
		$("#cart-none").show();
		$(".fixed.bottom").hide();
	}
});
</script>
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