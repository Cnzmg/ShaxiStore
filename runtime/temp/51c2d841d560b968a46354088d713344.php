<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"template/wap/default/Pay/pcOptionPaymentMethod.html";i:1581654519;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>请选择支付方式-<?php echo $title; ?></title>
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<style>
</style>
</head>
<body>
<div class="header container">
	<div class="logo fl" style="width:280px;">
		<a href="#">
			<img alt="<?php echo $web_info['title']; ?>收银台" src="__UPLOAD__/<?php echo $web_info['logo']; ?>" style="width:100%;" />
		</a>
	</div>
</div>

<div class="layout border-top cart-btn-wrap">
		<div class="container clearfix">
			<div
				class="fl padding-left border-left border-middle border-sub cart-address">成功提交订单</div>
		</div>
		<div class="js-main container order border border-gray-white text-default">
			<div
				class="order-info bg-gray-white padding-small-top padding-small-bottom padding-large-left padding-large-right border-bottom">
				<p>
					<?php echo $pay_value['pay_body']; ?> <span class="text-sub">支付流水号：<?php echo $pay_value['out_trade_no']; ?></span>
				</p>
				<p>
					支付人：<span class="text-sub"><?php echo $member_info['user_info']['nick_name']; ?></span>
				</p>
				<p>
					应付订单总额：<span class="text-mix">￥<?php echo $pay_value['pay_money']; ?></span>
				</p>
				<p class="text-sub" style="color: #333;">请您在<span class="font-red j_orderTime" style="color: #d93600;">00:00:00</span>内完成支付，否则订单会被自动关闭。</p>
			</div>
			<div class="padding-small order-container">
				<div class="tip-title m-l-15 m-r-15 pays">
					<span class="padding-large-left">支付方式</span>
					<div class="border border-mix"></div>
				</div>
				<div class="pay-way item-checked margin padding clearfix pays js-select-pay">
					<?php if($pay_config['wchat_pay_config']['is_use'] ==1 || $pay_config['ali_pay_config']['is_use'] == 1): if($pay_config['wchat_pay_config']['is_use']==1): ?>
						<div class="item" data-pay="wchat">
							<i></i>
							<a class="pic-center border-none" href="javascript:;">
								<img src="__TEMP__/<?php echo $style; ?>/public/images/pay/wechat_qr.png">
							</a>
						</div>
						<?php endif; if($pay_config['ali_pay_config']['is_use']==1): ?>
						<div class="item" data-pay="alipay">
							<i></i>
							<a class="pic-center border-none" href="javascript:;">
								<img src="__TEMP__/<?php echo $style; ?>/public/images/pay/alipay.png">
							</a>
						</div>
						<?php endif; else: ?>
						<span class="none_pays">后台暂未开启支付方式</span>
					<?php endif; ?>
				</div>
				<div class="text-center">
					<a class="cart-btn text-default disabled" id="pay" href="javascript:;">立即支付</a>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="copyright">
			<div class="ft-copyright">
				<a href="javascript:;" target="_blank"><?php echo $title; ?>提供技术支持</a>
			</div>
		</div>
	</div>
	<div class="mask-layer"></div>
	<article class="mask-layer-dialog">
		<header>
			<i>x</i>
		</header>
		<div class="mask-warning-img">
			<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_masklayer_warning.png"/>
		</div>
		<div class="mask-content">
			<h3>请您在新打开的页面上完成付款操作。</h3>
			<p>付款完成前，请不要关闭此窗口。<br/>完成付款后请根据您的情况点击下面的按钮</p>
			<button>已完成付款，查看我的会员中心</button>
		</div>
	</article>
	<input type="hidden" value="<?php echo $pay_value['create_time']; ?>" id="create_time" />
	<input type="hidden" value="<?php echo $shop_config['order_buy_close_time']; ?>" id="buy_close_time" />
	
<script>
var interval = null;
function countdown(){
	var date = new Date($("#create_time").val().replace(/\-/g, "\/"));//订单创建时间
	var buy_close_time = parseFloat($("#buy_close_time").val())*60*1000;//订单关闭时间
	date.setDate(date.getDate()+1);
	var date_now = new Date();//当前时间
	var end_time = date.getTime()+buy_close_time; //结束时间毫秒数
	var lag = (end_time - date_now.getTime()) / 1000; //当前时间和结束时间之间的秒数
	if (lag > 0) {
		var hour = Math.floor((lag / 3600) % 24);
		var minute = Math.floor((lag / 60) % 60);
		var second = Math.floor(lag % 60);
		if(hour == 0 && second == 0 && minute == 0){
			clearInterval(interval);
			window.history.go(-1);
		}
		if(second<10){
			second = "0"+second;
		}
		if(minute<10){
			minute = "0"+minute;
		}
		if(hour<10){
			hour = "0"+hour;
		}
		$(".j_orderTime").text(hour+":"+minute+":"+second);
	}
}

function setFooterStyle(){

	var main_height = $(".js-main").height()+220;
	var window_height = $(window).height();
	if(main_height>window_height){
		$('.footer').css("position","relative");
	}else{
		$('.footer').css("position","fixed");
	}
}

window.onresize = function(){
	setFooterStyle();
}
$(function() {
	setFooterStyle();
		
	//设置时间倒计时
	countdown();
	interval = setInterval("countdown()",1000);
	$(".js-select-pay>div").click(function() {
		$(".js-select-pay>div").removeClass("selected");
		$(this).addClass("selected");
		$("#pay").removeClass("disabled");
	})

	//去支付
	$("#pay").click(function() {
		if ($('.js-select-pay>.selected').attr("data-pay") != null) {
			var url = "APP_MAIN/";
			switch ($('.js-select-pay>.selected').attr("data-pay")) {
			case "wchat":
				url += 'pay/wchatpay?no=<?php echo $pay_value['out_trade_no']; ?>';
				break;
			case "alipay":
				//跳转到支付宝
				url += 'pay/alipay?no=<?php echo $pay_value['out_trade_no']; ?>';
				break;
			}
			window.open(url);
			$(".mask-layer-dialog").fadeIn(300);
			$(".mask-layer").fadeIn(300);
		}
	})
	
	//关闭弹出层
	$(".mask-layer-dialog header i").click(function(){
		$(".mask-layer-dialog").fadeOut(300);
		$(".mask-layer").fadeOut(300);
	})
	
	$(".mask-content button").click(function(){
		window.location.href = "SHOP_MAIN/member/index";
	})
})
</script>
</body>
</html>