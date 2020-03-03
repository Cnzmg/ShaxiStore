<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:44:"template/wap/default//Order/orderDetail.html";i:1581654517;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/foundation.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/normalize.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/person-v4.4.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/order.js" type="text/javascript"></script>

</head>
<body class="body-gray">
	
	<section class="head">
		<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
		<div class="head-title"></div>
	</section>
	
	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div class="main myorder">
	<section class="head">
		<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
		<div class="head-title">订单详情</div>
	</section>
</div>
<div class="order-detail mt-45">
	<section class="order-detail-infor">
		<div class="order-detail-sum clear">
			<div class="sum-r order-detail-r">
				<ul class="sum-r-ul">
					<li><span class="status"><?php echo $order['status_name']; ?></span></li>
					<li><span class="label">订单号：</span><span class="value"><?php echo $order['order_no']; ?></span></li>
					<li><span class="label">订单状态：</span><span class="value"><?php echo $order['status_name']; ?></span></li>
					<li><span class="label">下单时间：</span><span class="value"><?php echo $order['create_time']; ?></span></li>
					<li><span class="label">付款方式：</span><span class="value"><?php echo $order['payment_type_name']; ?></span></li>
					<li><span class="label">付款状态：</span><span class="value"><?php echo $order['pay_status_name']; ?></span></li>
					<li><span class="label">配送方式：</span><span class="value"><?php echo $order['shipping_type_name']; ?></span></li>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="order-detail-remark">
		<div class="remark-out clear">
			<div class="remark-l order-detail-l">
				<i class="icon-talks-small"></i>
			</div>
			<div class="remark-r order-detail-r">
				<ul class="remark-r-ul">
					<li class="name">
						<span class="label">买家留言</span>
					</li>
					<li>
						<?php if($order['buyer_message'] !=''): ?>
						<span class="label"><?php echo $order['buyer_message']; ?></span>
						<?php else: ?>
						<span class="label">此订单没有留言</span>
						<?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	
	<section class="order-detail-address">
		<div class="address-out clear">
			<div class="address-l order-detail-l">
				<i class="icon-address-small"></i>
			</div>
			<div class="address-r order-detail-r">
				<ul class="address-r-ul">
					<?php switch($order['shipping_type']): case "1": ?>
						<li class="name">
							<span class="label">收货地址：</span>
							<span class="value"><?php echo $order['receiver_name']; ?>，<?php echo $order['receiver_mobile']; ?>，<?php echo $order['address']; ?>&nbsp;<?php echo $order['receiver_address']; if($order['receiver_zip']!=''): ?>&nbsp;，<?php echo $order['receiver_zip']; endif; ?></span>
						</li>
						<?php break; case "2": ?>
						<li class="name">
							<span class="label">自提地址：</span>
							<span class="value"><?php echo $order['order_pickup']['province_name']; ?>&nbsp;<?php echo $order['order_pickup']['city_name']; ?>&nbsp;<?php echo $order['order_pickup']['dictrict_name']; ?>&nbsp;<?php echo $order['order_pickup']['address']; ?></span>
						</li>
						<?php break; endswitch; if(!empty($order['buyer_invoice_info'])): if(!empty($order['buyer_invoice_info'][0]) && $order['buyer_invoice_info'][0] != ''): ?>
						<li class="name">
							<span class="label">发票抬头：</span>
							<span class="value"><?php echo $order['buyer_invoice_info'][0]; ?></span>
						</li>
						<?php endif; if(!empty($order['buyer_invoice_info'][2]) && $order['buyer_invoice_info'][2] != ''): ?>
						<li class="name">
							<span class="label">纳税人识别号：</span>
							<span class="value"><?php echo $order['buyer_invoice_info'][2]; ?></span>
						</li>
						<?php endif; if(!empty($order['buyer_invoice_info'][1]) && $order['buyer_invoice_info'][1] != ''): ?>
						<li class="name">
							<span class="label">发票内容：</span>
							<span class="value"><?php echo $order['buyer_invoice_info'][1]; ?></span>
						</li>
						<?php endif; endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<?php if($express_count > 0): ?>
	<section class="order-detail-remark">
		<div class="remark-out clear">
<!-- 			<div class="remark-l order-detail-l"> -->
<!-- 				<i class="icon-talks-smalls"></i> -->
<!-- 			</div> -->
			<div class="remark-r order-detail-r">
				<ul class="remark-r-ul">
					<li class="name">
						<a href="APP_MAIN/order/orderexpress?orderId=<?php echo $order['order_id']; ?>">
							<span class="label" style="color: rgb(245, 183, 8);">共<?php echo $express_count; ?>个包裹</span>
							<span class="label" style="color: rgb(245, 183, 8);"><?php echo $express_name; ?></span>
							<?php if($is_show_express_code): ?>
							<span class="label" style="color: rgb(245, 183, 8);">运单号:<?php echo $express_code; ?></span>
							<?php endif; ?>
							<span style="float:right;width:7px;"><img src="__TEMP__/<?php echo $style; ?>/public/images/goods_right.png"/></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<section class="order-detail-remark">
		<div class="remark-out clear">
			<div class="remark-l order-detail-l">
				<i class="icon-talks-small"></i>
			</div>
			<div class="remark-r order-detail-r">
				<ul class="remark-r-ul">
					<li class="name">
						<span class="label">买家留言</span>
					</li>
					<li>
						<?php if($order['buyer_message'] !=''): ?>
						<span class="label"><?php echo $order['buyer_message']; ?></span>
						<?php else: ?>
						<span class="label">此订单没有留言</span>
						<?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	<div class="list-myorder">
		<ul class="ul-product">
			<?php if(is_array($order['order_goods']) || $order['order_goods'] instanceof \think\Collection || $order['order_goods'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_goods'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsData): $mod = ($i % 2 );++$i;?>
			<li>
				<span class="pic"><img src="__ROOT__/<?php echo $goodsData['picture_info']['pic_cover_micro']; ?>" /></span>
				<div class="text">
					<span class="pro-name">
						<span style="color:#333333;"><?php echo $goodsData['goods_name']; ?></span>
						<?php if($goodsData['sku_name'] != ''): ?>
						<span style="color:#333333;"><?php echo $goodsData['sku_name']; ?></span>
						<?php endif; ?>
					</span>
					<br/>
					<div class="pro-pric">
						<span>价格:</span>
						<span style="color:#333333;">￥<?php echo $goodsData['price']; ?></span>
					</div>
					<div class="pro-pric">
						<span class="color"></span>
						<span>数量:</span>
						<span style="color:#333333;"><?php echo $goodsData['num']; ?></span>
					</div>
					<div class="pro-pric">
						<span>调价:</span>
						<span style="color:#333333;"><?php echo $goodsData['adjust_money']; ?></span>
					</div>
<!-- 					<div class="pro-return"></div> -->
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="money-content">
			<div class="money-row">
				<div>
					<span>商品总金额：</span>
					<span class="price">￥<?php echo $order['goods_money']; ?></span>
				</div>
				
				<div>
					<span>运费</span>
					<span class="price">￥<?php echo $order['shipping_money']; ?></span>
				</div>
				
				<?php if($order['user_platform_money']>0): ?>
				<div>
					<span>余额支付：</span>
					<span class="price">￥<?php echo $order['user_platform_money']; ?></span>
				</div>
				<?php endif; if($order['coupon_money']>0): ?>
				<div>
					<span>优惠券：</span>
					<span class="price">￥<?php echo $order['coupon_money']; ?></span>
				</div>
				<?php endif; if($order['tax_money']>0): ?>
				<div>
					<span>发票税额：</span>
					<span class="price">￥<?php echo $order['tax_money']; ?></span>
				</div>
				<?php endif; if($order['promotion_money']>0): ?>
				<div>
					<span>满减优惠：</span>
					<span class="price">￥<?php echo $order['promotion_money']; ?></span>
				</div>
				<?php endif; if($order['point']>0): ?>
				<div>
					<span>使用积分：</span>
					<span class="price"><?php echo $order['point']; ?></span>
				</div>
				<?php endif; ?>
				
				<div>
					<span>实际需支付：</span>
					<span class="price"><b style="color:#f44;">￥<?php echo $order['pay_money']; ?></b></span>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="bottom-btn-row clear"></div> -->

	
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
			<!-- <dd id="buttom_stroe" >
				<a href="APP_MAIN/index/shopstreet">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png"/>
						<span>店铺街</span>
					</div>
				</a>
			</dd> -->
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
	
</body>
</html>