<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"template/wap/default//Order/paymentOrder.html";i:1581654518;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/order.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/payment_order_new.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/payment_order_popup.css">

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" href="APP_MAIN"><i class="icon-back"></i></a>
	<div class="head-title">订单结算</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div class="h50"></div>
<?php if($address_default['id'] != ''): ?>
<div id="addressok">
	<input type="hidden" id="addressid" value="<?php echo $address_default['id']; ?>" />
	<div class="js-order-address express-panel js-edit-address express-panel-edit">
		<ul class="express-detail">
			<a href="APP_MAIN/member/memberaddress?url=cart">
				<li class="clearfix">
					<span class="name">收货人：<?php echo $address_default['consigner']; ?></span>
					<span class="tel"><?php echo $address_default['mobile']; ?></span>
				</li>
				<li class="address-detail">收货地址：<?php echo $address_default['address_info']; ?>-<?php echo $address_default['address']; ?></li>
			</a>
		</ul>
	</div>
</div>
<?php else: ?>
<div class="empty-address-tip">
	<div id="noaddress"><a href="APP_MAIN/member/memberaddress">新增收货地址</a></div>
</div>
<?php endif; ?>

<div class="block-item express" style="padding: 0;"></div>
<section class="order">
	<?php if(is_array($itemlist) || $itemlist instanceof \think\Collection || $itemlist instanceof \think\Paginator): if( count($itemlist)==0 ) : echo "" ;else: foreach($itemlist as $key=>$list): ?>
	<div class="order-goods-item clearfix" data-subtotal="<?php echo $list['subtotal']; ?>">
		<div class="name-card block-item">
			<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $list['goods_id']; ?>" class="thumb">
				<img src="__ROOT__/<?php echo $list['picture_info']['pic_cover_micro']; ?>" alt="<?php echo $list['goods_name']; ?>" />
			</a>
			<div class="detail">
				<div class="clearfix detail-row">
					<div class="right-col">
						<input type="hidden" name="goods_skuid" value="<?php echo $list['sku_id']; ?>" />
						<input type="hidden" name="goods_point_exchange"/>
						￥<span><?php echo $list['price']; if($list['point_exchange_type']==1): if($list['point_exchange']>0): ?>
								+<?php echo $list['point_exchange']; ?>积分
							<?php endif; endif; ?>
						</span>
					</div>
					<div class="left-col">
						<h3 style="font-weight: normal;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;">
							<a href="javascript:;"><?php echo $list['goods_name']; ?></a>
						</h3>
					</div>
				</div>
				<div class="clearfix detail-row">
					<div class="right-col">
						<div class=" c-gray-darker">
							×<span><?php echo $list['num']; ?></span>
						</div>
					</div>
					<div class="left-col">
						<p class="c-gray-darker" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;"><?php if($list['sku_name'] != '0'): ?><?php echo $list['sku_name']; endif; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; endif; else: echo "" ;endif; if(count($coupon_list) >0): ?>
	<div class="item-options" data-flag="use-coupon">
		<label class="float_left">优惠券</label>
		<span class="arrow-right color-gray">不使用优惠券</span>
	</div>
	<?php endif; ?>
	
	
	<div class="item-options" data-flag="pay" data-select="0">
		<label>支付方式</label>
		<span class="arrow-right color-gray">在线支付</span>
	</div>
	
	<div class="item-options" data-flag="distribution" data-select="0">
		<label>配送方式</label>
		<?php if(!$shop_config['seller_dispatching'] && !$shop_config['buyer_self_lifting']): ?>
		<span class="color-gray">商家未配置配送方式</span>
		<?php else: if($shop_config['seller_dispatching']): ?>
			<span class="arrow-right color-gray">商家配送</span>
			<?php elseif($shop_config['buyer_self_lifting']): ?>
			<span class="arrow-right color-gray">门店自提</span>
			<?php endif; endif; ?>
	</div>
	
	<!-- 开启商家配送并且有物流公司显示 -->
	<?php if($shop_config['seller_dispatching'] && count($express_company_list)): if(is_array($express_company_list) || $express_company_list instanceof \think\Collection || $express_company_list instanceof \think\Paginator): if( count($express_company_list)==0 ) : echo "" ;else: foreach($express_company_list as $k=>$company): if($k==0): ?>
	<div class="item-options" data-flag="express_company" data-select="<?php echo $company['co_id']; ?>" data-express-fee="<?php echo $company['express_fee']; ?>">
		<label>物流公司</label>
		<span class="arrow-right color-gray"><?php echo $company['company_name']; ?></span>
	</div>
	<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
	
	<div class="item-options" data-flag="pickup_address" data-id="0" data-count="<?php echo $pickup_point_list['total_count']; ?>" style="display:none;">
		<label>自提地址</label>
		<span class="arrow-right color-gray"></span>
	</div>
	
	<?php if($shop_config['order_balance_pay'] == 1): ?>
	<div class="item-options">
		<label>使用余额<b class="account_balance">￥<?php echo $member_account['balance']; ?></b></label>
		<span>
			使用<input type="text" id="account_balance" data-max="<?php echo $member_account['balance']; ?>" placeholder="0.00"/>元
		</span>
	</div>
	<?php endif; if(count($shop_config['order_invoice_content_list'])): ?>
	<div class="item-options" data-flag="invoice" data-select="0">
		<label>发票信息<span style="font-size:12px;color:#FF9800;font-weight:bold;"></span></label>
		<span class="arrow-right color-gray">不需要发票</span>
	</div>
	
	<div class="item-options invoice">
		<label><span style="font-size:12px;color:#FF9800;font-weight:bold;">将收取<?php echo $shop_config['order_invoice_tax']; ?>%的发票税率</span></label>
	</div>
	
	<div class="item-options invoice">
		<label>发票抬头</label>
		<textarea id="invoice-title" maxlength="50" placeholder="个人或公司发票抬头"></textarea>
	</div>
	
	<div class="item-options invoice">
		<label>纳税人识别号</label>
		<textarea id="taxpayer-identification-number" maxlength="50" placeholder="纳税人识别号"></textarea>
	</div>
	
	
	<div class="item-options invoice" data-flag="invoice-content">
		<label>发票内容</label>
		<span class="arrow-right color-gray">选择发票内容</span>
	</div>
	<?php endif; ?>
	
	<div class="item-options">
		<label>买家留言</label>
		<textarea id="leavemessage" placeholder="给卖家留言" maxlength="100"></textarea>
	</div>
	
	
	<div class="order-list">
		<h3>结算信息</h3>
		<p>
			<label>共<b class="orange-bold js-goods-num">1</b>种商品&nbsp;总计</label>
			<span>￥<b class="js-total-money">0.00</b></span>
		</p>
		
		<p>
			<label>运费</label>
			<span>￥<b id="express">0.00</b></span>
		</p>
		
		<p>
			<label>总优惠</label>
			<span>￥<b id="discount_money">0.00</b></span>
		</p>
		
		
		<?php if(count($shop_config['order_invoice_content_list'])>0): ?>
		<p>
			<label>发票税额：</label>
			<span>￥<b id="invoice_tax_money">0.00</b></span>
		</p>
		<?php endif; if($shop_config['order_balance_pay'] == 1): ?>
		<p>
			<label>使用余额：</label>
			<span>￥<b id="use_balance">0.00</b></span>
		</p>
		<?php endif; ?>
	</div>
</section>

<div class="footer" style="min-height: 86px;">
	<div class="copyright">
		<div class="ft-copyright">
			<!-- <a href="APP_MAIN" target="_blank">Niushop开源商城提供技术支持</a> -->
		</div>
	</div>
</div>


<div style="height: 50px"></div>
<div class="order-total-pay bottom-fix">
	<div class="pay-container clearfix">
		<span class="c-gray-darker font-size-12">应付金额：</span>
		<span class="font-size-16 theme-price-color">￥<b id="realprice">0.00</b></span>
		<?php if($count_point_exchange>0): ?>
		<span class="font-size-16 theme-price-color" id="count-point">+<?php echo $count_point_exchange; ?>积分</span>
		<?php endif; ?>
		<button class="commit-bill-btn" onclick="submitOrder()">提交订单</button>
		<input type="hidden" id="hidden_count_point_exchange" value="<?php echo $count_point_exchange; ?>" />
		<input type="hidden" id="hidden_goods_sku_list" value="<?php echo $goods_sku_list; ?>"/>
		<input type="hidden" id="hidden_discount_money" value="<?php echo $discount_money; ?>" />
		<input type="hidden" id="hidden_express" value="<?php echo $express; ?>" />
		<input type="hidden" id="hidden_count_money" value="<?php echo $count_money; ?>" />
		<input type="hidden" id="count_point_exchange" value="<?php echo $count_point_exchange; ?>"/>
		<input type="hidden" id="hidden_full_mail_money" value="<?php echo $promotion_full_mail['full_mail_money']; ?>"/>
		<input type="hidden" id="hidden_full_mail_is_open" value="<?php echo $promotion_full_mail['is_open']; ?>"/>
		<input type="hidden" id="goods_sku_list" value="<?php echo $goods_sku_list; ?>" />
		<input type="hidden" id="hidden_order_invoice_tax" value="<?php echo $shop_config['order_invoice_tax']; ?>"/>
	</div>
</div>

<!----------------------------- 弹出层 ------------------------------>
<div class="mask-layer"></div>

<?php if(count($coupon_list)): ?>
<!-- 选择优惠券弹出框 -->
<div class="mask-layer-control" data-flag="use-coupon">
	<div class="header">选择优惠券<span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active">
				<div class="check-img"></div>
				<div class="single">不使用优惠券</div>
			</li>
			<?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coupon): $mod = ($i % 2 );++$i;?>
			<li class="item" data-id="<?php echo $coupon['coupon_id']; ?>" data-code="<?php echo $coupon['coupon_code']; ?>" data-money="<?php echo $coupon['money']; ?>">
				<div class="check-img"></div>
				<div>
					<p class="font-size-12"><?php echo $coupon['coupon_name']; ?><em class="pull-right"><?php echo $coupon['money']; ?>元</em></p>
					<p class="font-size-12 c-gray-darker">满<?php echo $coupon['at_least']; ?>元减<?php echo $coupon['money']; ?>元</p>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;">确定</button>
	</div>
</div>
<!-- 选择优惠券弹出框 -->
<?php endif; ?>

<!-- 选择支付方式弹出框 -->
<div class="mask-layer-control" data-flag="pay">
	<div class="header">选择支付方式<span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active" data-flag="0">
				<div class="check-img"></div>
				<div class="single">在线支付</div>
			</li>
			<!-- 为了用户更好的体验和理解，只要开启了货到付款就显示，不再考虑配送方式是否开启，是否有物流公司等 -->
<!-- 		if condition="$shop_config.order_delivery_pay && $shop_config.seller_dispatching && count($express_company_list)"	 -->
			<?php if($shop_config['order_delivery_pay']): ?>
			<li class="item" data-flag="4">
				<div class="check-img"></div>
				<div class="single">货到付款</div>
			</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;">确定</button>
	</div>
</div>
<!-- 选择支付方式弹出框 -->

<!-- 选择配送方式弹出框 -->
<div class="mask-layer-control" data-flag="distribution">
	<div class="header">选择配送方式<span class="close"></span></div>
	<?php if(!$shop_config['seller_dispatching'] && !$shop_config['buyer_self_lifting']): ?>
		<p style="padding: 30px;text-align: center;">商家未配置配送方式</p>
	<?php else: ?>
	<div class="list">
		<ul>
			<!-- 为了用户更好的体验和理解，只要开启了商家配送，就显示。不考虑是否有物流公司 -->
<!-- 			if condition="$shop_config.seller_dispatching && count($express_company_list)" -->
			<?php if($shop_config['seller_dispatching']): ?>
			<li class="item active" data-flag="1">
				<div class="check-img"></div>
				<div class="single">商家配送</div>
			</li>
			<?php endif; if($shop_config['buyer_self_lifting']): ?>
			<li class="item" data-flag="2">
				<div class="check-img"></div>
				<div class="single">门店自提</div>
			</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;">确定</button>
	</div>
	<?php endif; ?>
</div>
<!-- 选择配送方式弹出框 -->

<?php if($shop_config['seller_dispatching'] && count($express_company_list)): ?>
<!-- 选择物流公司弹出框 -->
<div class="mask-layer-control" data-flag="express_company">
	<div class="header">选择物流公司<span class="close"></span></div>
	<div class="list">
		<ul>
			<?php if(is_array($express_company_list) || $express_company_list instanceof \think\Collection || $express_company_list instanceof \think\Paginator): if( count($express_company_list)==0 ) : echo "" ;else: foreach($express_company_list as $k=>$company): ?>
			<li class="item <?php if($k==0): ?>active<?php endif; ?>" data-coid="<?php echo $company['co_id']; ?>" data-express-fee="<?php echo $company['express_fee']; ?>">
				<div class="check-img"></div>
				<div class="single"><?php echo $company['company_name']; ?></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;">确定</button>
	</div>
</div>
<!-- 选择物流公司弹出框 -->
<?php endif; if($shop_config['buyer_self_lifting']): ?>
<!-- 选择自提地址弹出框 -->
<div class="mask-layer-control" data-flag="pickup_address">
	<div class="header">选择自提地址<span class="close"></span></div>
	<?php if($pickup_point_list['total_count']): ?>
	<div class="list">
		<ul>
			<?php if(is_array($pickup_point_list['data']) || $pickup_point_list['data'] instanceof \think\Collection || $pickup_point_list['data'] instanceof \think\Paginator): if( count($pickup_point_list['data'])==0 ) : echo "" ;else: foreach($pickup_point_list['data'] as $k=>$pickup): ?>
			<li class="item <?php if($k==0): ?>active<?php endif; ?>" data-id="<?php echo $pickup['id']; ?>">
				<div class="check-img"></div>
				<div class="single"><?php echo $pickup['province_name']; ?>&nbsp;<?php echo $pickup['city_name']; ?>&nbsp;<?php echo $pickup['dictrict_name']; ?>&nbsp;<?php echo $pickup['address']; ?></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;">确定</button>
	</div>
	<?php else: ?>
	<p style="padding: 30px;text-align: center;">商家未配置自提点</p>
	<?php endif; ?>
</div>
<!-- 选择自提地址弹出框 -->
<?php endif; ?>

<!-- 选择发票信息弹出框 -->
<div class="mask-layer-control" data-flag="invoice">
	<div class="header">选择发票<span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active" data-flag="0">
				<div class="check-img"></div>
				<div class="single">不需要发票</div>
			</li>
			<li class="item" data-flag="1">
				<div class="check-img"></div>
				<div class="single">需要发票</div>
			</li>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;">确定</button>
	</div>
</div>
<!-- 选择发票信息弹出框 -->

<?php if(count($shop_config['order_invoice_content_list'])): ?>
<!-- 选择发票内容信息弹出框 -->
<div class="mask-layer-control" data-flag="invoice-content">
	<div class="header">选择发票内容<span class="close"></span></div>
	<div class="list">
		<ul>
			<?php if(is_array($shop_config['order_invoice_content_list']) || $shop_config['order_invoice_content_list'] instanceof \think\Collection || $shop_config['order_invoice_content_list'] instanceof \think\Paginator): if( count($shop_config['order_invoice_content_list'])==0 ) : echo "" ;else: foreach($shop_config['order_invoice_content_list'] as $k=>$invoice): ?>
			<li class="item <?php if($k==0): ?>active<?php endif; ?>">
				<div class="check-img"></div>
				<div class="single"><?php echo $invoice; ?></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;">确定</button>
	</div>
</div>
<!-- 选择发票内容信息弹出框 -->
<?php endif; ?>
<!----------------------------- 弹出层 ------------------------------>


	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/payment_order.js"></script>

</body>
</html>