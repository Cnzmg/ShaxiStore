<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:37:"template/wap/default//Shop/index.html";i:1581654579;s:39:"template/wap/default/Shop/shopBase.html";i:1581654580;s:31:"template/wap/default/share.html";i:1581654581;s:39:"template/wap/default/shareContents.html";i:1581654581;s:37:"template/wap/default/Shop/search.html";i:1581654580;s:37:"template/wap/default/Shop/notice.html";i:1581654579;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $platform_shopname; ?></title>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript">
	var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
	var APPMAIN='APP_MAIN';	
	//页面底部选中
	function buttomActive(event){
		clearButton();
		if(event == "#buttom_home"){
			$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
		}else if(event == "#buttom_classify"){
			$("#buttom_group").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
		}else if(event == "#bottom_cart"){
			$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
		}else if(event == "#bottom_member"){
			$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
		}
	}
	function clearButton(){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
		$("#buttom_group").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
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

	$(function(){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
		showLoadMaskLayer();
	})
	$(document).ready(function(){
		hiddenLoadMaskLayer();
		//编写代码
	})
</script>
<style>
body .sub-nav.nav-b5 dd i {
	margin: 3px auto 5px auto;
}

body .fixed.bottom {
	bottom: 0;
}
.mask-layer-loading{
	position: fixed;
    width: 100%;
    height: 100%;
    /* background: rgba(0,0,0,0.5); */
    z-index: 999999;
    top: 0;
    left: 0;
    text-align: center;
	display: none;
}
.mask-layer-loading i,.mask-layer-loading img{
	text-align: center;
	color:#ffffff;
	font-size:50px;
	position: relative;
	top:50%;
}
.sub-nav.nav-b5 dd{
	width:25%;
}
</style>

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/control_type.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/shop_index.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/collection_goods_or_shop.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shop_index.js"></script>
<style>
.wap_botton{
	height: 25px;
    line-height: 25px;
    width: 65px;
    text-align: center;
    background: red;
    color: #fff;
    border-radius: 5px;
    float: right;
    margin: 0 10px 10px 0;
	font-size: 13px;
}
</style>

</head>

<body class="body-gray">
	
<?php if($onekey_subscribe['url'] != ''AND $is_subscribe == 0): ?>
<div class="fixed-focus-on">
	<i class="close" onclick="$('.fixed-focus-on').hide();">x</i>
	<div class="foucs-on-block">
	<?php if($shop_info['shop_logo'] !=''): ?>
	<img class="user-bg" src="<?php echo $shop_info['shop_logo']; ?>">
	<?php else: ?>
	<img class="user-bg" src="__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_avatar.png">
	<?php endif; if($source_user_name !=''): ?>
	<p>我是你的好友<span><?php echo $source_user_name; ?></span>,推荐给您让生意从此做好</p>
	<button onclick="location.href='<?php echo $onekey_subscribe['url']; ?>'">点击关注</button>
	<?php else: ?>
	<p>您当前还未关注微信公众账号，请点击关注</p>
	<button onclick="location.href='<?php echo $onekey_subscribe['url']; ?>'">点击关注</button>
	<?php endif; ?>
	</div>
</div>
<?php endif; ?>
<article class="user-head">

	<?php if($shop_info['shop_avatar'] !=''): ?>
	<img class="user-bg" src="__UPLOAD__/<?php echo $shop_info['shop_avatar']; ?>">
	<?php else: ?>
	<img class="user-bg" src="__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_avatar.png">
	<?php endif; ?>
	
	<div class="user-info">
		<?php if($shop_info['shop_logo'] !=''): ?>
		<img class="user-logo" src="<?php echo $shop_info['shop_logo']; ?>">
		<?php else: ?>
		<img class="user-logo" src="__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_logo.png">
		<?php endif; ?>
		<h1><?php echo $shop_info['shop_name']; ?></h1>
	</div>
	
	<div class="user-nav js-user-nav">
		<ul>
			<li><a href="APP_MAIN/shop/goodslist?shop_id=<?php echo $shop_id; ?>"><i class="fa fa-align-justify"></i>全部商品</a></li>
			<li><a href="APP_MAIN/goods/goodsgrouplist?shop_id=<?php echo $shop_id; ?>"><i class="fa fa-list-ul"></i>商品分组</a></li>
			<li onclick="collectionGoodsOrShop('.js-collection',<?php echo $shop_id; ?>,'shop','')">
				<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="js-collection">
						<?php if($is_member_fav_shop ==0): ?>
						收藏店铺
						<?php else: ?>
						已收藏
						<?php endif; ?>
					</span>
				</a>
			</li>
			<?php if($is_shop_member == 1): ?>
				<li><a href="APP_MAIN/member/index?shop_id=<?php echo $shop_id; ?>" style="color:red;"><i class="fa fa-heart"></i>会员中心</a></li>
			<?php else: ?>
				<li><a href="javascript:;" onclick="userAssociateShop(<?php echo $shop_id; ?>,this)"><i class="fa fa-heart"></i>申请会员</a></li>
			<?php endif; ?>
		</ul>
	</div>
</article>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div style="display:none;position: fixed;left: 10px;z-index: 999999;top:25%;border-radius: 100%;height:30px;width:30px;line-height: 30px;text-align: center;">
	<a href="APP_MAIN" style="color: #ffffff;">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/shop_goback.png"/>
	</a>
</div>
<input type="hidden" id="shop_id" value="<?php echo $shop_info['shop_id']; ?>">
<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">
<script>
$(function(){
$.ajax({
	type:"post",
	url : "APP_MAIN/shop/getsharecontents",
	data : {
		'shop_id':$("#shop_id").val()
	},
	success : function(data){
		//alert(JSON.stringify(data));
			/* $("#share_title").val(data['share_title']);
			$("#share_desc").val(data['share_contents']);
			$("#share_url").val(data['share_url']);
			$("#share_img_url").val(data['share_img']);\ */
			
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
		
		})
		
	$(".user-logo").next().css("padding-left",(parseInt($(".user-logo").width())+10)+"px");
})
</script>


<script>var is_member_fav_shop = "<?php echo $is_member_fav_shop; ?>";</script>
<div class="com-content">

<!-- {1include file='wap/default/Shop/navi'/} -->
<style type="text/css">.custom-search-button{top: 1px!important;}</style>
<div style="width: 100%;background-color: #fff;padding: 10px 0px;">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<div class="editing"><div class="control-group">
    <div class="custom-search" >
        <form action="" method="GET">
            <input type="text" class="custom-search-input" placeholder="搜索商品" value='' >
            <button type="button" class="custom-search-button">搜索</button>
        </form>
    </div>
    <div class="component-border"></div>
</div>
<div class="sort">
    <i class="sort-handler"></i>
</div>
</div>
</div>
<script type="text/javascript"> 
function ScrollImgLeft(){ 
	var speed=30; 
	var scroll_begin = document.getElementById("scroll_begin"); 
	var scroll_end = document.getElementById("scroll_end"); 
	var scroll_div = document.getElementById("scroll_div"); 
	scroll_end.innerHTML=scroll_begin.innerHTML; 
    function Marquee(){ 
		if(scroll_end.offsetWidth-scroll_div.scrollLeft<=0) 
		scroll_div.scrollLeft-=scroll_begin.offsetWidth; 
		else 
		scroll_div.scrollLeft++; 
    } 
	var MyMar=setInterval(Marquee,speed); 
	scroll_div.onmouseover=function() {clearInterval(MyMar);} 
	scroll_div.onmouseout=function() {MyMar=setInterval(Marquee,speed);} 
} 
</script>
<?php if($notice['is_enable'] == 1): ?>
<div style="height:40px;line-height:40px;border-top:1px solid #E8E8E8;border-bottom:1px solid #E8E8E8;">
        <div style="width:10%;float:left;margin-left:5%;">
              <img src="__TEMP__/<?php echo $style; ?>/public/images/horn.png" style="margin-top:10px;width:20px;height:20px;"/>
        </div>              
		<div class="custom-notice"  style="float:left;width:85%;height:40px;overflow:hidden;line-height:40px;font-size:10px;font-family:'宋体';background:#FFF;color:#E82E2E;">
		    <div class="custom-notice-inner" style="width:90%;height:40px;margin:0 auto;white-space: nowrap;overflow:hidden;" id="scroll_div" class="scroll_div">
		        <div class="custom-notice-scroll" id="scroll_begin" style="display:inline;">
		            <span class="js-scroll-notice" style="position: relative;">
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		         <?php echo $notice['notice_message']; ?>    
		        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
		         <?php echo $notice['notice_message']; ?>    
		       			      
                    </span>
		        </div>
		        <div id="scroll_end" style="display:inline;"></div> 
		    </div>
		     <script type="text/javascript">ScrollImgLeft();</script> 
		</div>
</div> 
<?php endif; if(count($recommend_block) >0): if(is_array($recommend_block) || $recommend_block instanceof \think\Collection || $recommend_block instanceof \think\Paginator): if( count($recommend_block)==0 ) : echo "" ;else: foreach($recommend_block as $k=>$recommend_detail): ?>
	<div class="control">
		<div class="control_l">
			<!-- <span class="control_l_img"><img src="__TEMP__/<?php echo $style; ?>[images]" alt="" /></span> -->
			<h1><i></i><?php echo $recommend_detail['class_name']; ?><i></i></h1>
		</div>
	</div>
	<section class="members_goodspic">
		<ul>
			<?php if(is_array($recommend_detail['goods_list']) || $recommend_detail['goods_list'] instanceof \think\Collection || $recommend_detail['goods_list'] instanceof \think\Paginator): if( count($recommend_detail['goods_list'])==0 ) : echo "" ;else: foreach($recommend_detail['goods_list'] as $key=>$goods_list): ?>
			<li class="gooditem">
				<div class="img">
					<a href="APP_MAIN/Goods/goodsDetail?id=<?php echo $goods_list['goods_info']['goods_id']; ?>"><img class="lazy" src="__UPLOAD__/<?php echo $goods_list['picture_info']['pic_cover_mid']; ?>"></a>
				</div>
				<div class="info">
					<p class="goods-title"><a href="APP_MAIN/Goods/goodsDetail?id=<?php echo $goods_list['goods_info']['goods_id']; ?>&shop_id=<?php echo $goods_list['goods_info']['shop_id']; ?>"><?php echo $goods_list['goods_info']['goods_name']; ?></a></p>
					<p class="goods-price" style="width:48%;float:left;"><em>￥<?php echo $goods_list['goods_info']['promotion_price']; ?></em></p>
<!-- 					<a href="javascript:CartGoodsInfo(<?php echo $goods_list['goods_info']['goods_id']; ?>,<?php echo $goods_list['goods_info']['state']; ?>)"><div class="goods-buy"></div></a> -->
					<a target="_blank" href="APP_MAIN/Goods/goodsDetail?id=<?php echo $goods_list['goods_info']['goods_id']; ?>&shop_id=<?php echo $goods_list['goods_info']['shop_id']; ?>" title="立即抢购" class="shop-add-cart fr" style="display: inherit;"><div class="wap_botton">立即抢购</div></a>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
	<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	<div class="h60"></div>
</div>

	
	<div class="fixed bottom">
		<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
		<dl class="sub-nav nav-b5">
			<dd id="buttom_home">
				<a href="APP_MAIN/shop/index?shop_id=<?php echo $shop_id; ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png"/>
						<span>首页</span>
						<!--<i class="fa fa-home fa-2x"></i> -->
					</div>
				</a>
			</dd>
			<dd id="buttom_group">
				<a href="APP_MAIN/goods/goodsgrouplist?shop_id=<?php echo $shop_id; ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
						<span>商品分组</span>
					</div>
				</a>
			</dd>
			<dd id="bottom_cart" >
				<a href="APP_MAIN/goods/cart?shop_id=<?php echo $shop_id; ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
						<span>购物车</span>
					</div>
				</a>
			</dd>
			<dd id="bottom_member" >
				<a href="APP_MAIN/member/index?shop_id=<?php echo $shop_id; ?>">
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
		<!-- <i class="fa fa-spinner fa-pulse"></i> -->
	</div>
	
</body>
</html>