<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"template/wap/default//Order/orderExpress.html";i:1582474409;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
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
    
    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/person-v4.4.css">
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/my_order_list.css">
    <script src="__TEMP__/<?php echo $style; ?>/public/js/order.js"></script>
	<script type="text/javascript">window.onerror=function(){return true;}</script>
	<script type="text/javascript">
		var CONTROLLER = "APP_MAIN/Orders";
		var APP_MAIN = 'APP_MAIN';
		function backPage(){
			window.location.href="APP_MAIN/member/";
		};
		
	</script>
	<style>
	.express_goods{
		line-height: 23px;
	    padding: 7px;
	    font-size: 12px;
	    color: #666;
		}
		.head {
   		 position: inherit;
		height:auto;
		}
		.cf-tab-item a {
		    width: 19%;
		}
		.cf-container .cf-tab-item.select a{
		color:#707070;
		border-bottom:2px solid rgb(245, 183, 8);
		}
	</style>

</head>
<body class="body-gray">
	


	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	

    <!--topbar end-->
    <div class="main myorder">
    <section class="head">
    <a class="head_back" id="backoutapp" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title">已发货订单</div>
		<div class="cf-container" data-reactid="2">
    		<div class="cf-edge" data-reactid="3"></div>
			<ul class="cf-content" data-reactid="4">
				<?php if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): if( count($order['goods_packet_list'])==0 ) : echo "" ;else: foreach($order['goods_packet_list'] as $key=>$vo): ?>
    			<li class="cf-tab-item" data-index="1" data-reactid="7"><a statusid="<?php echo $key; ?>" href="javascript:;" ><?php echo $vo['packet_name']; ?></a></li>
	    		<?php endforeach; endif; else: echo "" ;endif; ?>
	    	</ul>
		</div>
	</section>
    	<!-- 商品列表 -->
    	
	    	<?php if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): if( count($order['goods_packet_list'])==0 ) : echo "" ;else: foreach($order['goods_packet_list'] as $key=>$vo): ?>
	    	<div class="status status-<?php echo $key; ?>" data-express-id="<?php echo $vo['express_id']; ?>" data-is-express="<?php echo $vo['is_express']; ?>">
	    	<div style="height:80px;line-height:80px;">
		    	<?php if(is_array($vo['order_goods_list']) || $vo['order_goods_list'] instanceof \think\Collection || $vo['order_goods_list'] instanceof \think\Paginator): if( count($vo['order_goods_list'])==0 ) : echo "" ;else: foreach($vo['order_goods_list'] as $key=>$vg): ?>
		    	<img src="__ROOT__/<?php echo $vg['picture_info']['pic_cover_micro']; ?>" style="margin-left: 10px;"/>
		    	<?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>
		    <?php if($vo['is_express'] == 1): ?>
		    	<div style="background:#fff;" class="express_goods">
		    		<span>共<?php echo count($vo['order_goods_list']); ?>件商品，由<?php echo $vo['express_name']; ?>承运</span><br/>
		    		<span>运单编号：<?php echo $vo['express_code']; ?></span>
				</div>
				
				<div id="expressBox"></div>
				<!-- JS动态查询物流信息 -->
		    	<!-- <div style="background:#fff;margin-top:10px;color:rgb(245, 183, 8);font-size:13px;" class="express_goods js-express-info-<?php echo $vo['express_id']; ?>"></div> -->
				<?php else: ?>
	    		<!-- <div style="background:#fff;" class="express_goods">
		    		<span>共<?php echo count($vo['order_goods_list']); ?>件商品，无需物流</span><br/>
		    		<span>运单编号：--</span>
		    	</div>
		    	<div style="background:#fff;margin-top:10px;color:rgb(245, 183, 8);font-size:13px;" class="express_goods">
		    		<div>物流跟踪：</div>
			    	<div>无物流信息</div>
		    	</div> -->
	    	<?php endif; ?>
	    	</div>
	    	<?php endforeach; endif; else: echo "" ;endif; ?>
    	
    </div>
 <script>
 	$(function(){
 		$('.cf-container .cf-tab-item').eq(0).click();
 		$("div[data-express-id]").each(function(){
 			var curr = $(this);
 			var express_id = curr.attr("data-express-id");
 			var is_express = curr.attr("data-is-express");
 			if(parseInt(is_express)){
				$('.js-express-info-'+express_id).html("加载中...");
	 			if(express_id != undefined){
		 			// $.ajax({
		 	 		// 	type : 'post',
		 			// 	url : "APP_MAIN/order/getordergoodsexpressmessage",
		 			// 	data : {"express_id":express_id},
		 			// 	beforesend : function(){
		 			// 		showLoadMaskLayer();
		 			// 	},
		 			// 	success : function(data){
		 			// 		var html = '<div>物流跟踪：</div>';
		 			// 		if (data['Success'] == true) {
		 			// 			for (var i = 0; i < data["Traces"].length; i++){
		 			// 				html += '<div>'+data["Traces"][i]["AcceptStation"]+'</div>';
		 			// 				html += '<div>'+data["Traces"][i]["AcceptTime"]+'</div>';
		 			// 			}
		 			// 		}else{
		 			// 			html += '<div>无物流信息</div>';	 						
		 			// 		}
		 			// 		$('.js-express-info-'+express_id).html(html);
		 			// 		hiddenLoadMaskLayer();
		 			// 	}
		 	 		// });
	 			}
 			}
		 });
		 

		 var xml = new XMLHttpRequest();
			xml.open('post', 'http://uin8.com:8082/express', true)
			xml.setRequestHeader('Content-type', 'application/json');
			xml.onreadystatechange = function(){
				console.log(JSON.parse(xml.responseText))
				$('#expressBox').html(JSON.parse(xml.responseText).data)
			}
			xml.send(JSON.stringify({
				ExpressName: 'zhongtong',
				ExpressCode: '73119782411952' 
			}))
			


 	});
	 $('.cf-container .cf-tab-item').click(function(){
   		$('.cf-container .cf-tab-item').removeClass('select');
   		$(this).addClass('select');
   		//alert($(this).find('a').attr('statusid'));
   		$(".status").hide();
   		$(".status-"+$(this).find('a').attr('statusid')).show();
	  })
 </script>

	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>