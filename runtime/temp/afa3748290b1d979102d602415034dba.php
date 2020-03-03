<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:43:"template/wap/default/Pay/payCallbackPc.html";i:1581654519;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>支付-<?php echo $title; ?></title>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment.css">
<style>
.cart-btn{
	background: #4CAF50;
}
.cart-btn:hover{
	background: #479C4B;
}
</style>
</head>
<body>
<?php if($status==-1): ?>
	<div style="position: absolute;width: 100%;height: 100%;background: rgba(0,0,0,0.8);text-align: center;">
		<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/other_view.png" class="other-view "/>
	</div>
<?php else: ?>
	
	<div class="header container">
		<div class="logo fl" style="width: 280px;">
			<img src="__UPLOAD__/<?php echo $web_info['logo']; ?>" style="width: 100%;" />
		</div>
	</div>
	
	<div class="layout cart-btn-wrap">
		<div class="js-main container border border-gray-white text-default">
			<div style="padding:40px;">
				<?php if($status==1): ?>
					<p style="font-size:16px;">
						<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_success.png" style="vertical-align: middle;margin-right: 10px;width: 30px;"/>您已成功付款
					</p>
				<?php else: ?>
					<p style="font-size:16px;">
						<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_error.png" style="vertical-align: middle;margin-right: 10px;width: 30px;"/>付款失败
					</p>
				<?php endif; ?>
				<p style="text-indent: 40px;">
					支付人：<span class="text-sub"><?php echo $member_info['user_info']['nick_name']; ?></span>
				</p>
				<p style="text-indent: 40px;">
					订单号：<span class="text-sub"><?php echo $out_trade_no; ?></span>
				</p>
			</div>
			<div class="padding-small order-container" style="margin-top:20px;">
				<div class="text-center">
					<a class="cart-btn text-default" href="SHOP_MAIN/member/index">进入会员中心</a>
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

<?php endif; ?>
<script>
$(function() {
	setFooterStyle();
});
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

</script>
</body>
</html>