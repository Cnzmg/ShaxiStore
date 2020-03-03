<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"template/wap/default/Index/discount.html";i:1579055755;s:30:"template/wap/default/base.html";i:1579075044;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_buy.css">
<style>
.custom-tag-list{
	margin-bottom:10px;
}
.group-list-box{
	width:100%;
	overflow: visible;
}
.group-list-box .group-list li {
   
    width: 43%;
    float: left;
	margin: 0 3px 5px 3px;
}
.brand-info .brand-info-right .main-btn {
    font-size: 12px;
    /* width: 52px; */
}

.slick {
    margin-top: 45px;
}
.custom-tag-list {
    margin-top: 0;
}
.custom-tag-list{
	padding-top:0;
}
</style>

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title">限时折扣</div>
</section>

<?php if($discounts_adv['is_use'] == 1): if($discounts_adv['adv_list'][0]['adv_image'] != ''): ?>
<div class="slick">
	<a href="<?php echo $discounts_adv['adv_list'][0]['adv_url']; ?>">
		<img src="__UPLOAD__/<?php echo $discounts_adv['adv_list'][0]['adv_image']; ?>" >
		<!-- style="height:<?php echo $discounts_adv['ap_height']; ?>px;" -->
	</a>
</div>
   <?php endif; endif; ?>


	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div class="custom-tag-list clearfix">
<!-- 	<div class="custom-tag-list-menu-block"> -->
<!-- 		<ul class="custom-tag-list-side-menu" style="position: relative;width:100%;" id='goods_group'> -->
<!-- 			<li val="0"><a class="selected"  onclick="showCategorySecond(this,0)"><span>全部</span></a></li> -->
<!-- 			<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?> -->
<!-- 			<li val="<?php echo $category['category_id']; ?>"> -->
<!-- 				<a onclick="showCategorySecond(this,<?php echo $category['category_id']; ?>)"><span><?php echo $category['category_name']; ?></span></a> -->
<!-- 			</li> -->
<!-- 			<?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 		</ul> -->
<!-- 	</div> -->
	<div class="group-list-box">
		<ul class="group-list"></ul>
	</div>
<script>
	$(function(){
		showCategorySecond(0,0);
	})
	function showCategorySecond(obj,category_id){
		//设置选中效果
		if($(obj).length!=0){
			$(".custom-tag-list-side-menu li a").removeClass("selected");
			$(obj).addClass("selected");
		}
		
		$.ajax({
			url:'APP_MAIN/Index/discount',
			async:false,
			data:{'category_id':category_id},
			dataType:'json',
			success:function(data){
				var list_html='';
				if(data.length==0){
					$('.group-list').html('<div class="nothing-data" align="center"><img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/><div>没有找到您想要的商品…</div></div>');
					return false;
				}
				for(key in data){	
					var item=data[key];
					var img = "";
					if(item.picture != null){
						img = item.picture.pic_cover_small;
					}
					list_html+='<li>'
						+'<div class="p-img">'
						+'<a href="APP_MAIN/goods/goodsdetail?id='+item.goods_id+'" title="'+item.goods_name+'">'
					    +'<img src="__UPLOAD__/'+img+'">'
						+'</a>'
						+'<div class="brand-time">'
						+'<i></i>'
						+'<span class="settime" starttime="'+item.start_time+'" endtime="'+item.end_time+'"></span>'
						+'</div>'
						+'</div>'
						+'<span class="brand-name">'+item.goods_name+'</span>'
						+'<div class="brand-info"  style="height:initial;">'
						+'<div class="brand-info-left"  style="float:none;">'
						+'<p class="b-price" style="float:left;margin:5px 0;">￥'+item.promotion_price+'<em>元</em></p>'
						+'<p class="buyer" style="float:right;line-height:31px;"><s>￥'+item.price+'元</s></p>'
						+'</div>'
						+'</div></li>';
				}
				$('.group-list').html(list_html);
			}
		});	
	}
	$().ready(function() {
		updateEndTime();
	});
	//倒计时函数
	function updateEndTime() {
		var date = new Date();
		var time = date.getTime(); //当前时间距1970年1月1日之间的毫秒数

		$(".settime").each(function(i) {

			var endDate = this.getAttribute("endTime"); //结束时间字符串
			
			//转换为时间日期类型
			var endDate1 = eval('new Date(' + endDate.replace(/\d+(?=-[^-]+$)/, function(a) {
				return parseInt(a, 10) - 1;
			}).match(/\d+/g) + ')');

			var endTime = endDate1.getTime(); //结束时间毫秒数
	
			var lag = (endTime - time) / 1000; //当前时间和结束时间之间的秒数
			if (lag > 0) {
				var second = Math.floor(lag % 60);
				var minite = Math.floor((lag / 60) % 60);
				var hour = Math.floor((lag / 3600) % 24);
				var day = Math.floor((lag / 3600) / 24);
				$(this).html(day + "天" + hour + "时" + minite + "分" + second + "秒");
			} else{
				$(this).html("活动已经结束啦！");
			}
		});
		setTimeout("updateEndTime()", 1000);
	}
	
</script>
</div>

	 
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>