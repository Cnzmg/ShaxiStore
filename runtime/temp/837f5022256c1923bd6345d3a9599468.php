<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:43:"template/wap/default/Goods/goodsDetail.html";i:1581654509;s:30:"template/wap/default/base.html";i:1581654581;s:45:"template/wap/default/Goods/controlDetail.html";i:1581654509;s:42:"template/wap/default/controlCopyRight.html";i:1581654581;s:39:"template/wap/default/shareContents.html";i:1581654581;s:31:"template/wap/default/share.html";i:1581654581;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/mall.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_detail.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/goods_product.js"></script>
<script language="javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jscommon.js" language="javascript" charset="gb2312"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js" type="text/javascript"></script>
<style>
.js-shelves {
	display: none;
}
</style>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title"><?php echo $shopname; ?></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/scroll.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/scroll.js" type="text/javascript"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/countdown.js" type="text/javascript"></script>
<style>
.address-select{
	width: 30%;
    float: left;
    border: 1px solid #e5e5e5;
	height: 20px;
    line-height: 20px;
    margin: 5px 15px;
    margin-left: 0;
}

</style>
<!-- 商品详情 -->
<div class="h50" style="height:45px;"></div>
<section id="banner">
	<div class="shop_slider shop_slider_auto" data-tag="module-slider" data-height="320px">
		<div class="inner" data-tag="slider-warp" >
			<ul class="pic_list" data-tag="slider-list">
			<?php if(is_array($goods_detail['img_list']) || $goods_detail['img_list'] instanceof \think\Collection || $goods_detail['img_list'] instanceof \think\Paginator): if( count($goods_detail['img_list'])==0 ) : echo "" ;else: foreach($goods_detail['img_list'] as $key=>$img_list): ?>
				<li style="width: 320px;">
					<div>
						<img alt="图片" class="pp_init_img" src="__ROOT__/<?php echo $img_list['pic_cover_big']; ?>" />
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="bar_wrap">
			<ul class="bar" data-tag="slider-page">
				<li class="cur"></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
</section>
<?php if($goods_detail['promotion_info'] != ''): ?>
<div class="goods-header js-goods-header goods-activity clearfix">
	<input type="hidden" id="end_time"  value="<?php echo $goods_detail['promotion_detail']['end_time']; ?>"/>
	<div class="goods-price">
		<div class="current-price activity-price">
			<span>￥</span><i class="js-goods-price price"><?php echo $goods_detail['promotion_price']; ?></i>
			<span class="price-title js-price-title ">限时折扣</span>
		</div>
		<em class="original-price"><?php echo $goods_detail['price']; ?></em>
		<div class="font-size-12 overview-countdown js-activity-tips started " data-status="started">
			<div class="countdown-title">距结束仅剩</div>
			<div class="js-discount-time countdown" data-countdown="3542691">
			<span class="c-red js-day">00</span> 天 
			<span class="c-red js-hour">00</span> 时 
			<span class="c-red js-min">00</span> 分 
			<span class="c-red js-sec">00</span> 秒</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="buy_area">
	<div class="fn_wrap">
		<h1 class="title" id="itemName"><?php echo $goods_detail['goods_name']; ?></h1>
	</div>
	<div class="price_wrap">
		<span class="tit" id="priceTitle"></span> 
		<span class="price" price="<?php echo $goods_detail['promotion_price']; ?>">
			<span style="font-size:14px;display: inline-block;vertical-align: middle;">￥</span>
			<?php if($goods_detail['promotion_price'] < $goods_detail['member_price']): ?><?php echo $goods_detail['promotion_price']; else: ?><?php echo $goods_detail['member_price']; endif; if($goods_detail['point_exchange_type']==1 && $goods_detail['point_exchange']>0): ?>
			<span style="font-size:16px;display: inline-block;vertical-align: middle;">+<?php echo $goods_detail['point_exchange']; ?>积分</span>
			<?php endif; ?>
		</span>
		<span class="flag" id="priceDis" style="display: none"></span>
	</div>
	
	<?php if($goods_detail['max_buy']>0): ?>
	<hr class="with-margin-l" />
	<hr class="divider-line" />
	<div class="price_postage">
		<span class="price_postage_tit">
		<i style="color: #fff;font-size: 12px;padding: 3px;background: #f44;border-radius: 2px;">限购数量</i>&nbsp;<?php echo $goods_detail['max_buy']; ?>个</span>
	</div>
	<?php endif; ?>
	<hr class="with-margin-l" />
	<div class="stock-detail" >
<!-- 			<span class="price_postage_tit">运费：<?php echo $goods_detail['shipping_fee_name']; ?></span> -->
	</div>
</div>
<hr class="with-margin-l" />
<hr class="divider-line" />
<?php if($goods_detail['mansong_name'] != ''): ?>
<div class="price_postage">
	<span class="price_postage_tit js-reduced-send single"><i style="color: #fff;font-size: 12px;padding: 3px;background: #f44;border-radius: 2px;">满减</i>&nbsp;<?php echo $goods_detail['mansong_name']; ?></span>
</div>
<hr class="with-margin-l" />
<hr class="divider-line" />
<?php endif; if($goods_detail['give_point'] != 0): ?>
<div class="price_postage">
	<span class="price_postage_tit"><i class="fa fa-database" style="color: #F44;margin-right: 5px;"></i>赠送积分<span style="color:#F44;padding:0;"><?php echo $goods_detail['give_point']; ?></span>分</span>
</div>
<hr class="with-margin-l" />
<?php endif; ?>
	<div class="statistics">
		<div class="app-field clearfix">
			<div class="control-group">
				<div class="custom-store block-item">
					<a class="custom-store-link clearfix" href="APP_MAIN/shop/index?shop_id=<?php echo $goods_detail['shop_id']; ?>">
						<div class="custom-store-img"></div>
						<div class="custom-store-name"><?php echo $goods_detail['shop_name']; ?></div>
						<div class="custom-store-enter">进入店铺</div>
					</a>
				</div>
				<div class="component-border"></div>
			</div>
			<div class="sort">
				<i class="sort-handler"></i>
			</div>
		</div>
		<hr class="with-margin-l" /> 

		<div class="price_postage">
			<span class="price_postage_tit">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/pro_detail_shop.jpg"/>
				<span style="font-size: 12px;" >企业认证</span>
				<img src="__TEMP__/<?php echo $style; ?>/public/images/pro_detail_shop.jpg"/>
				<span >担保交易</span>
				<img src="__TEMP__/<?php echo $style; ?>/public/images/pro_detail_shop.jpg"/>
				<span class="rz-name font-size-12 c-gray-darker">线下门店</span>
			</span>
		</div>
		
	</div>
	
	<div class="mod_tab_wrap">
		<div class="mod_tab" id="detailTab">
			<span onclick="showProperty(this,1)" class="cur">商品详情</span>
			<span onclick="showProperty(this,2)" >商品属性</span>
			<span onclick="showProperty(this,3)">商品评价</span>
		</div>
	</div>
	
	<!-- 商品详情 -->
	<div class="detail_info_wrap" id="p-detail">
		<div class="detail_list" id="content"><?php echo $goods_detail['description']; ?></div>
	</div>
	<!-- 商品属性 -->
	<div class="detail_info_wrap p-attribute" id="p-attribute" style="display:none;" >
		<?php if(count($goods_detail['goods_attribute_list']) > 0): ?>
			<ul class="attribute-ul">
				<?php foreach($goods_detail["goods_attribute_list"] as $vo): ?>
				<li>
					<em><?php echo $vo['attr_value']; ?>：</em>
					<span id="goods_attr_" title="<?php echo $vo['attr_value_name']; ?>" class="goods-attr-value"><?php echo $vo['attr_value_name']; ?></span>
				</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	
	<!-- 商品评论 -->
	<div class="comment-type" id="productproperty" style="display:none;">
		<ul class="tab-nav">
			<li class="productproperty-list current" data-type="0" >全部<em>(<?php echo $evaluates_count['evaluate_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="4"  >图片 <em>(<?php echo $evaluates_count['imgs_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="1" >好评 <em>(<?php echo $evaluates_count['praise_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="2" >中评 <em>(<?php echo $evaluates_count['center_count']; ?>)</em></li>
			<li class="productproperty-list" data-type="3" > 差评 <em>(<?php echo $evaluates_count['bad_count']; ?>)</em></li>
		</ul>
		<!-- 评论展示 -->
		<div id="comment_content">
			<div class="comment-con"></div>
		</div>
	</div>
	
	<style>
.footer {
	margin: 0 0 45px 0;
	padding: 0;
	min-height: 1px;
	text-align: center;
	line-height: 16px;
	background-color: #f8f8f8;
}

.ft-copyright {
	padding: 50px 0 20px;
	margin: 0 15px;
	font-size: 12px;
	background: url("__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png")
		no-repeat center 15px;
	background-size: 110px 30px;
}

.ft-copyright a {
	padding-top: 45px;
	color: #ccc;
}
</style>
<div class="footer" style="min-height: 86px;">
	<div class="copyright">
		<div class="ft-copyright">
			<!-- <a href="javascript:;" target="_blank">Niushop开源商城提供技术支持</a> -->
		</div>
	</div>
</div>
	<!-- 弹出框 -->
	<div class="success-tip-line" id="success_tip_line" style="display: none;">成功加入购物车！</div>
	<div class="mask" id="mask" style="display: none;"></div>
	<span id="addcart_way" style="display: none;"><i></i></span>
	<section class="s-buy" id="s_buy">
		<div class="popup"  id="popup" style="-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;display: none"></div>
		<ul class="s-buy-ul">
			<li class="s-buy-pro">
				<span class="pro-img">
					<input type="hidden" id="default_img" value="<?php echo $goods_detail['img_list'][0]['pic_id']; ?>" />
					<img src="__ROOT__/<?php echo $goods_detail['img_list'][0]['pic_cover_small']; ?>" >
				</span>
				<div class="pro-info">
					<p class="name" ><?php echo $goods_detail['goods_name']; ?></p>
					<p class="pro-price" id="price">
						￥<?php if($goods_detail['promotion_price'] < $goods_detail['member_price']): ?><?php echo $goods_detail['promotion_price']; else: ?><?php echo $goods_detail['member_price']; endif; if($goods_detail['point_exchange_type']==1 && $goods_detail['point_exchange']>0): ?>
						<span style="font-size:16px;display: inline-block;vertical-align: middle;">+<?php echo $goods_detail['point_exchange']; ?>积分</span>
						<?php endif; ?>
					</p>
				</div>
				<i class="icon-close" id="icon_close"></i>
			</li>
		</ul>
		<hr class="with-margin-l" />
		<ul class="s-buy-ul specification" id="specification">
			<?php if(is_array($goods_detail['spec_list']) || $goods_detail['spec_list'] instanceof \think\Collection || $goods_detail['spec_list'] instanceof \think\Paginator): if( count($goods_detail['spec_list'])==0 ) : echo "" ;else: foreach($goods_detail['spec_list'] as $k=>$spec): ?>
			<li class="s-buy-li" >
				<div class="left"><?php echo $spec['spec_name']; ?>：</div>
				<div class="right" name="specvals" >
				<?php if(is_array($spec['value']) || $spec['value'] instanceof \think\Collection || $spec['value'] instanceof \think\Paginator): if( count($spec['value'])==0 ) : echo "" ;else: foreach($spec['value'] as $key=>$spec_value): if($spec_value['spec_id'] == $spec['spec_id']): ?>
						<button class="select" name="Span<?php echo $k; ?>" id="<?php echo $spec_value['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>" onclick="change(this);">
						<?php echo $spec_value['spec_value_name']; ?>
						</button>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</li>
			<hr class="with-margin-l" />
			<?php endforeach; endif; else: echo "" ;endif; if(is_array($goods_detail['sku_list']) || $goods_detail['sku_list'] instanceof \think\Collection || $goods_detail['sku_list'] instanceof \think\Paginator): if( count($goods_detail['sku_list'])==0 ) : echo "" ;else: foreach($goods_detail['sku_list'] as $k=>$pro_skus): ?>
			<input type="hidden" id="goods_sku<?php echo $k; ?>" value="<?php echo $pro_skus['attr_value_items']; ?>" stock="<?php echo $pro_skus['stock']; ?>" <?php if($pro_skus['promote_price'] < $pro_skus['member_price']): ?>price="<?php echo $pro_skus['promote_price']; ?>" <?php else: ?>price="<?php echo $pro_skus['member_price']; ?>"<?php endif; ?> promotion_price="<?php echo $pro_skus['promote_price']; ?>" member_price="<?php echo $pro_skus['member_price']; ?>" skuid="<?php echo $pro_skus['sku_id']; ?>" skuname="<?php echo $pro_skus['sku_name']; ?>" class="sku-array">
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<input type="hidden" id="goods_sku_num" value="100">
			<li class="s-buy-li">
				<div class="left" style="float:left;">购买数量：</div>
				<div class="right">
					<span class="reduce quantity-minus-disabled">-</span>
					<input class="number" name="quantity" autocomplete="off" value="1" min="1" max="<?php echo $goods_detail['stock']; ?>" id="num" />
					<span class="add">+</span>
				</div>
				<span style="display: inline-block;margin-top:5px;color:#333;" id="Stock">剩余<?php echo $goods_detail['stock']; ?>件</span>
				<?php if($goods_detail['max_buy'] != '0' AND $goods_detail['max_buy'] != -1): ?>
				<span style="display: inline-block;margin-top:5px;color:#333;">限购<?php echo $goods_detail['max_buy']; ?>件</span>
				<?php endif; ?>
			</li>
		</ul>
		<ul class="s-buy-ul">
			<li class="s-buy-btn">
				<a class="btn" id="submit_ok" tag="buyBtn1">确定</a>
				<input id="hiddPDetailID" type="hidden" value="<?php echo $goods_detail['goods_id']; ?>"/>
				<input id="hiddSkuId" type="hidden" />
				<input id="hiddSkuName" type="hidden" />
				<input id="hiddSkuprice" type="hidden" />
				<input id="hiddStock" type="hidden" value="<?php echo $goods_detail['stock']; ?>"/>
				<input type="hidden" id="hidden_shop_name" value="<?php echo $goods_detail['shop_name']; ?>"/>
				<input type="hidden" id="hidden_shop_id" value="<?php echo $goods_detail['shop_id']; ?>"/>
				<input type="hidden" id="is_sale" value="<?php echo $goods_detail['state']; ?>" />
				<input type="hidden" id="goods_id" value="<?php echo $goods_detail['goods_id']; ?>" />
				<input type="hidden" id="code" value="<?php echo $goods_detail['code']; ?>" />
				<input type="hidden" id="max_buy" value="<?php echo $goods_detail['max_buy']; ?>" />
				<input type="hidden" id="hidden_current_num" value="<?php echo $num; ?>" />
			</li>
		</ul>
	</section>
<script type="text/javascript">
$(function () {
	countDown();//计时器
	
	//分享
	$.ajax({
		type:"post",
		data : {"shop_id" : "<?php echo $shop_id; ?>" , "flag" : "goods" , "goods_id" : "<?php echo $goods_id; ?>"},
		url : "APP_MAIN/goods/getShareContents",
		success : function(data){
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

//商品评价
$(".comment-type li").click(function() {
	var type = $(this).data("type");
	var target = $(this);
	$(".comment-type").find("li").removeClass("current");
	$(".comment-type").find("i").removeClass("cur");
	$(target).addClass("current");
	$(target).children().addClass("cur");
	GetDataList();
})


function showProperty(sobj,type){
	$("#detailTab span").removeClass("cur");
	$(sobj).addClass("cur");
	if(type==1){
		$("#productproperty").hide();
		$("#p-detail").show(); 
		$("#p-attribute").hide();
	}else if(type == 2){
		$("#productproperty").hide();
		$("#p-detail").hide();
		$("#p-attribute").show();
	}else{
		$("#productproperty").show();
		$("#p-detail").hide(); 
		$("#p-attribute").hide();
		GetDataList();
	}
}

/**
* 分页显示
* @param {Object} pageindex
*/
function GetDataList(){
	var commentsType=$(".comment-type li.current").attr('data-type');
	$.ajax({
		type:"post",
		url:"APP_MAIN/Goods/getGoodsComments",
		data:{'comments_type' : commentsType, "goods_id" : $("#goods_id").val() },
		dataType:'json',
		success:function(data){
			var listhtml='';
			if(data['data'].length==0){
				$('.comment-con').html('<div class="tip-box"><i class="tip-icon"></i><div class="tip-text">还没有任何评价哦</div></div>');
				$('#pagination').hide();
				return false;
			}
			for(var i=0;i<data['data'].length;i++){
				var dataitem=data['data'][i];
				var member_name=dataitem['member_name'];
				member_name=dataitem['is_anonymous']==1?member_name.replace(member_name.substring(1,member_name.length),'***')+'(匿名)':member_name;
				listhtml+=' <div class="tablelist" style="border-bottom: 1px solid #e5e5e5;margin-bottom: 10px;">'
					+'<div class="user_info" style="margin-right:10px;">'
					+'<div class="face"><img src="__TEMP__/<?php echo $style; ?>/public/images/default_user_portrait_0.png" style="width:35px;border-radius: 50%;"/></div>'
					+'<div class="name-box">'+member_name+'</div>'
					+'</div>'
					+'<dl>'
					+'<dd>'+dataitem['content']+'</dd>'
				if(dataitem['image']!=''){
					var imgs_arr=dataitem['image'].split(',');
					listhtml+='<dd style="margin:5px 0;">'
					for(var key in imgs_arr){
						listhtml+='<img src="__UPLOAD__/'+imgs_arr[key]+'" alt="" style="max-width:100%"/>';	
					}
					listhtml+='</dd>';
					listhtml+='<dd class="photo-viewer"></dd>'
				}	
				listhtml+='<div class="date"><span>'+dataitem['addtime']+'</span> <span></span></div>';
				listhtml+='</dl>';
				if(dataitem['again_content']!=''){
					
					listhtml+='<div style="margin-left:-1px;float:right;margin-top: 9px;width:75%;">追加评价：</div>'
					+'<dl>'
					+'<div style="width: 26%;margin-right: 10px;height:auto;float: left;"></div>'
					+'<dd>'+dataitem['again_content']+'</dd>'
					if(dataitem['again_image']!=''){
						var imgs_arr=dataitem['again_image'].split(',');
						listhtml+='<dd>'
						for(var key in imgs_arr){
							listhtml+='<img src="__UPLOAD__/'+imgs_arr[key]+'" alt="" />';
						}
						listhtml+='</dd>';
					}
					listhtml+='<div class="date"><span>'+dataitem['again_addtime']+'</span> <span></span></div>';
					listhtml+='</dl>';
				}
				listhtml+='</div>';
			}
			$(".comment-con").html(listhtml);
		}
	});
}
</script>
	<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">

	
<div class="js-bottom-opts bottom-fix">
	<div class="responsive-wrapper">
		<a id="global-cart" href="APP_MAIN/goods/cart?shop_id=<?php echo $shop_id; ?>" class="new-btn buy-cart <?php if($carcount>0): ?>buy-cart-msg<?php endif; ?> ">
		
			<i class="iconfont icon-shopping-cart"></i>
			<span class="desc">购物车</span>
		</a>
		<div class="big-btn-2-1">
			<a href="javascript:;" class="big-btn orange-btn" id="addCart">加入购物车</a>
			<a href="javascript:;" class="big-btn red-btn" id="buyBtn1">立即购买</a>
		</div>
	</div>
</div>
<div class="btn_wrap btn_wrap_static btn_wrap_nocart no-server js-shelves">
	<div class="product-status">该商品已下架</div>
</div>
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>

	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>