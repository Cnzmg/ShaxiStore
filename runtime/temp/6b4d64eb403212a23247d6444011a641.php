<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"template/wap/default//Member/memberAddress.html";i:1581654515;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_address.css">
<style>
.addr-box {
	padding-top: 0px;
	text-align: center;
}

.addr-tip {
	font-size: 14px;
	color: #8f8f8f;
	margin-top: 10px;
}

.btn-save {
	margin-top: 40px;
}
</style>

</head>
<body class="body-gray">
	
	<section class="head">
		<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
		<div class="head-title"></div>
	</section>
	
	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<input type="hidden" id="ref_url" value="<?php echo $pre_url; ?>">
<input type="hidden" value="<?php echo $flag; ?>" id="hidden_flag" />
<section class="head">
	<?php if($flag==1): ?>
	<a class="head_back" id="backoutapp" href="APP_MAIN/member/index"><i class="icon-back"></i></a>
	<?php else: ?>
	<a class="head_back" id="backoutapp"  href="APP_MAIN/order/paymentorder"><i class="icon-back"></i></a>
	<?php endif; ?>
	<div class="head-title">我的收货地址</div>
</section>
<ul class="side-nav address" id="ul" style="background: #eee; padding: 0">
	<?php if(is_array($list['data']) || $list['data'] instanceof \think\Collection || $list['data'] instanceof \think\Paginator): if( count($list['data'])==0 ) : echo "" ;else: foreach($list['data'] as $k=>$address): if($address['is_default'] == '1'): ?>
	<li id="<?php echo $address['id']; ?>" class="current" style="margin-bottom: 5px; background: #fff; padding: 0; margin-top: 10px;">
	<?php else: ?>
	<li id="<?php echo $address['id']; ?>" style="margin-bottom: 5px; margin-top: 5px; background: #fff; padding: 0; margin-top: 10px;">
	<?php endif; ?>
	<div style="background: url('__TEMP__/<?php echo $style; ?>/public/images/border_order_top.png'); height: 2px"></div>
		<div class="div-simply" style="display: inline-block; width: 100%; padding: 5px; border-bottom: 1px solid #e2e2e2;">
			<span class="payStatus">收货信息：</span>
			<span class="payStatus"><span class="name"><?php echo $address['consigner']; ?>&nbsp;&nbsp;</span></span>
			<div style="display: inline-block; float: right;">
				<a href="APP_MAIN/member/updatememberaddress?id=<?php echo $address['id']; ?>&flag=<?php echo $flag; ?>" style="display: inline-block; float: right;">【修改】</a>
				<?php if(count($list) > 1): ?>
					<a href="javascript:void(0);" onclick="address_delete(<?php echo $address['id']; ?>,<?php echo $address['is_default']; ?>);" style="display: inline-block; float: right;">【删除】</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="div-simply" style="display: inline-block; width: 100%; padding: 5px;border-bottom: 1px solid #e2e2e2;" onclick='selectAddress(<?php echo $address['id']; ?>,this)'>
			<span class="payStatus">手机号码：</span>
			<span class="payStatus"><span class="mobile"><?php echo $address['mobile']; ?></span></span>
		</div>
		<a href="javascript:void(0)" class="classnone" style="padding: 5px;" id="mo" onclick='selectAddress(<?php echo $address['id']; ?>,this)'>
			<span class="payStatus">详细地址：</span>
			<span class="address"><?php echo $address['address_info']; ?>&nbsp;<?php echo $address['address']; ?></span>
			<span class="payStatus" style="float: right; line-height: 20px;"><i class="icon-success"></i></span>
		</a>
	</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<?php if(count($list['data']) == 0): ?>
<img src="__TEMP__/<?php echo $style; ?>/public/images/member_none_address.png" style="margin: 0 auto; display: block; margin-top: 10px;">
<div class="addr-box">
	<p class="addr-tip">你还没有添加收货地址，添加一个吧!</p>
</div>
<?php endif; ?>
<button class="btn-save" onclick="window.location.href='APP_MAIN/Member/addMemberAddress?flag=<?php echo $flag; ?>';">新增收货地址</button>

	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
function selectAddress(id,obj){
	var ref_url = '<?php echo $url; ?>';//$("#ref_url").val();
	var flag = "<?php echo $flag; ?>";
	$.ajax({
		url: "APP_MAIN/member/updateaddressdefault",
		data: { "id": id },
		type: "post",
		success: function (res) {
			if (res["code"] > 0) {
				$(".side-nav li").removeClass("current");
				$(obj).parent().addClass("current");
				//选择银行的时候也用到了，但是单店版没有
				if(flag == "1"){
					return;
				}
				if(ref_url == 'cart'){
					window.location.href = "APP_MAIN/order/paymentorder";
				}else{
					window.location.reload();
				}
			}else{
				showBox(res["message"]);
			}
		}
	})
}
function address_delete(id,is_default){
	if(is_default == 1){
		showBox("默认地址不能删除");
		return;
	}
	$.ajax({
		url: "APP_MAIN/member/memberaddressdelete",
		data: { "id": id },
		type: "post",
		success: function (res) {
			//alert(JSON.stringify(res));
			if (res["code"] == 1) {
				window.location.href=window.location.href;
				showBox("删除成功!");
			} else {
				showBox(res["outmessage"]);
			}
		}
	})
}
$("#backoutapp").click(function (){
    var json ={
    		"center" : "1",
        }
    window.webkit.messageHandlers.center.postMessage(json);
})
</script>

</body>
</html>