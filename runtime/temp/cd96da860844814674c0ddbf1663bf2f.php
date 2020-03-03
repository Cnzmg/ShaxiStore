<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"template/wap/default/Pay/payCallback.html";i:1581654519;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>支付</title>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<style>
body{padding:0;margin:0;}
article{
	text-align: center;
	margin:20px auto;
}
article h3{
	font-weight: normal;
	color:#373737;
	font-family: "微软雅黑", "Helvetica Neue", Helvetica, Arial,sans-serif;
}
article p{
	color:#00C12C;
	font-family: "微软雅黑", "Helvetica Neue", Helvetica, Arial,sans-serif;
}
article button{
	border:0;
	background: #01C12D;
	color:#ffffff;
	border-radius: 3px;
	padding:10px;
	width:90%;
	font-size:16px;
	outline: none;
	font-family: "微软雅黑", "Helvetica Neue", Helvetica, Arial,sans-serif;
	margin:15px 0;
}
.other-view{max-width: 90%;width:90%;margin-top:30px;}
</style>
</head>
<body>
<?php if($status==-1): ?>
<div style="position: absolute;width: 100%;height: 100%;background: rgba(0,0,0,0.8);text-align: center;">
<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/other_view.png" class="other-view "/>
</div>
<?php else: ?>
<article>
	<?php if($status==1): ?>
		<div class="pay-block">
			<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_success.png"/>
		</div>
		<h3>付款成功</h3>
		<p>订单号<?php echo $out_trade_no; ?></p>
	<?php else: ?>
		<div class="pay-block">
			<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_error.png"/>
		</div>
		<h3>付款失败</h3>
		<p style="color:#FF3C3C;">订单号<?php echo $out_trade_no; ?></p>
	<?php endif; ?>
	<button onclick="enterOrderList()">进入会员中心</button>
<?php endif; ?>
</article>
<script>
function enterOrderList(){
	if($(window).width()<768){
		//手机端
		location.href = 'APP_MAIN/order/myorderlist?shop_id=0';
	}else{
		//PC端
		location.href = 'SHOP_MAIN/member';
	}
}

</script>
</body>
</html>