<?php if (!defined('THINK_PATH')) exit(); /*a:14:{s:38:"template/shop/blue/Shop/shopIndex.html";i:1579055850;s:36:"template/shop/default/Shop/base.html";i:1579055796;s:31:"template/shop/default/base.html";i:1579055793;s:48:"template/shop/default/controlCommonVariable.html";i:1579055791;s:37:"template/shop/default/controlTop.html";i:1579055790;s:49:"template/shop/default/Shop/controlHeadSerach.html";i:1579055795;s:47:"template/shop/default/Shop/controlHeadMenu.html";i:1579055795;s:46:"template/shop/default/controlRightSidebar.html";i:1579055790;s:42:"template/shop/blue/Shop/controlBanner.html";i:1579055851;s:47:"template/shop/blue/Shop/controlShopAdGroup.html";i:1579055851;s:48:"template/shop/default/controlBottomLinkHelp.html";i:1579055793;s:40:"template/shop/default/controlBottom.html";i:1579055793;s:39:"template/shop/default/controlLogin.html";i:1579055791;s:40:"template/shop/default/baidu_js_push.html";i:1579055793;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<meta name="renderer" content="webkit"> 
<title><?php echo $title_before; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>&nbsp;-&nbsp;<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<!--可共用-->
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_color_style.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/iconfont.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_bottom.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript">
	var shop_main='SHOP_MAIN';//外置JS调用
	var app_main='APP_MAIN';//外置JS调用
	var upload = "__UPLOAD__";//外置JS调用
	var ADMINMAIN='ADMIN_MAIN';
	var TEMP_IMG = "__TEMP__/<?php echo $style; ?>/public/images";
	$(function(){
		//一级菜单选中	
		$('#nav li>a').removeClass('current');
		var path_info='<?php echo $path_info; ?>';
		if(path_info==''){
			$("#nav li>a[href^='SHOP_MAIN/index/index']").addClass('current');
		}else{
			$("#nav li>a[href^='SHOP_MAIN/<?php echo $path_info; ?>']").addClass('current');
		}
	})
	
	window.onload=function(){
		$.footer();
	}
</script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_cart.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_components.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.fly.min.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.method.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/nav.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//跟目录

	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
</script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>

<!--继承base可重写-->

<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/shop_index.css">
<script type="text/javascript"src="__TEMP__/<?php echo $style; ?>/public/js/shop_index.js"></script>
<script type="text/javascript"src="__TEMP__/<?php echo $style; ?>/public/js/base.js"></script>

<!-- 右侧购物车 -->

<!-- 添加css、字体文件文件 -->



</head>
<body>
<!-- 头部广告 -->



<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->

	<!--
	创建时间：2017年2月7日 12:08:45
	功能描述： 顶部， 
-->
<div class="header-top">
	<div class="header-box">
		<font id="login-info" class="login-info"></font>
		<ul>
			<li><a class="menu-hd home" href="SHOP_MAIN" target="_top"><i></i>商城首页</a></li>
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd myinfo" href="SHOP_MAIN/member/index" target="_blank"><i></i> 个人中心 <b></b></a>
					<div id="menu-2" class="menu-bd">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<a href="SHOP_MAIN/member/orderlist" target="_blank">已买到的宝贝</a>
							<a href="SHOP_MAIN/member/addresslist" target="_blank">我的地址管理</a>
							<a href="SHOP_MAIN/member/goodscollectionlist" target="_blank">我收藏的宝贝</a>
						</div>
					</div>
				</div>
			</li>
			<li class="menu-item cartbox"><a class="menu-hd cart" href="SHOP_MAIN/goods/cart" target="_top"><i></i>&nbsp;购物车</a></li>
		    <li><a class="menu-hd" target="_blank" href="ADMIN_MAIN">卖家中心</a></li> 
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd we-chat"
						href="javascript:;" target="_top"> <i></i>
						关注商城 <b></b>
					</a>
					<div id="menu-5" class="menu-bd we-chat-qrcode">
						<span class="menu-bd-mask"></span> <a target="_top"> <img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>" alt="官方微信"></a>
						<p class="font-14">关注官方微信</p>
					</div>
				</div>
			</li>
			<!-- <li class="menu-item">
				<div class="menu">
					<a href="SHOP_MAIN/helpcenter/index" class="menu-hd site-nav" target="_blank"> 商家支持 <b></b></a>
					<div id="menu-7" class="menu-bd site-nav-main">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<div class="site-nav-con">
								<a href="SHOP_MAIN/helpcenter/index?id=2" target="_blank" title="常见问题">常见问题</a>
								<a href="SHOP_MAIN/helpcenter/index?id=7" target="_blank" title="网上支付">网上支付</a>
								<a href="SHOP_MAIN/helpcenter/index?id=5" target="_blank" title="验货与签收">验货与签收</a>
								<a href="SHOP_MAIN/helpcenter/index?id=9" target="_blank" title="退款说明">退款说明</a>
							</div>
						</div>
					</div>
				</div>
			</li> -->
			<li class="menu-item"><a  href="APP_MAIN/" class="menu-hd wap-nav" > <i></i>手机端</a></li>
			<li class="menu-item"><a href="SHOP_MAIN/helpcenter/index" class="menu-hd site-nav" target="_blank">帮助中心</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$.ajax({
	type:"post",
	url:"SHOP_MAIN/components/getlogininfo",
	success:function(data){
		var login_info_html='';
		if(data!=null && data!=""){
// 			if(data["user_info"]["nick_name"]!= null && data["user_info"]["nick_name"] != ""){
				login_info_html='<a class="sn-login main-color" href="SHOP_MAIN/member/index" target="_top">'+data["user_info"]["nick_name"]+'</a><em>欢迎您回来！</em><a class="sn-register" href="javascript:logout();" target="_top">退出</a>';
				$('div.login-info').html('<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em><a href="#" target="_blank" class="color NS-USER-NAME"></a></em><a href="javascript:logout();" data-method="post" class="logout bg-color">退出</a></font>');
// 			}
		}else{
			login_info_html='<em>欢迎来到<?php echo $title; ?></em><a class="login color" href="SHOP_MAIN/login/index" target="_top">请登录</a><a class="register" href="SHOP_MAIN/login/registerbox" target="_top">免费注册</a>';	
			$('div.login-info').html('<font id="login-info" class="login-info"><a class="login color" href="SHOP_MAIN/login/index" target="_top">登录</a><a class="register bg-color" href="SHOP_MAIN/login/registerbox" target="_top">免费注册</a></font>');
		}
		$('#login-info').html(login_info_html);
	}
});

//退出登录
function logout(){
	$.ajax({
		url: "SHOP_MAIN/member/logout",
		type: "post",
		success: function (res) {
			if (res['code'] > 0) {
// 				location.href='SHOP_MAIN';
				$.msg("退出成功！");
				window.location.reload();
			} else {
				if(res["message"]!=null){
					$.msg(res["message"]);
				}
			}
		}
	})
}
</script>


<!-- 头部，菜单栏、搜索、导航栏 -->

	<input type="hidden" id='shop_id' name="shop_id" value="<?php echo $shop_id; ?>"/>


<div class="header">
	<div class="w1210 clearfix">
		<div class="logo-info">
			<?php if($web_info['logo'] != ''): ?>
				<a href="SHOP_MAIN" class="logo"><img src="__UPLOAD__/<?php echo $web_info['logo']; ?>" /></a>
			<?php endif; ?>
		</div>
		<div class="shop-info">
			<div class="shop">
				<div class="shop-name ">
					<a href="SHOP_MAIN/shop/shopindex?shop_id=<?php echo $shop_id; ?>" title="<?php echo $shop_info['shop_name']; ?>"><?php echo $shop_info['shop_name']; ?></a>
				</div>
			
				

			</div>
			<div class="shop-main">
				
				<div class="shop-score-box">
					<div class="shop-score-item">
						<div class="shop-score-title">描 述</div>
						<div class="score color">
							<span><?php echo $shop_info['shop_desccredit']; ?></span>
						</div>
					</div>
					<div class="shop-score-item">
						<div class="shop-score-title">服 务</div>
						<div class="score color">
							<span><?php echo $shop_info['shop_servicecredit']; ?></span>
						</div>
					</div>
					<div class="shop-score-item">
						<div class="shop-score-title">发 货</div>
						<div class="score color">
							<span><?php echo $shop_info['shop_deliverycredit']; ?></span>
						</div>
					</div>
				</div>
				
			</div>
			<a class="slogo-triangle">
				<i class="icon-triangle"></i>
			</a>
			<div class="extra-info">
				<div class="hd">
					<p class="shop-collect">
						<a href="SHOP_MAIN/shop/shopindex?shop_id=<?php echo $shop_id; ?>" title="<?php echo $shop_info['shop_name']; ?>" class="shop-logo">
							<?php if($shop_info['shop_logo'] == '' or $shop_info['shop_logo'] == null): ?>
							<img src="__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_logo.png">
							<?php else: ?>
								<img src="__UPLOAD__/<?php echo $shop_info['shop_logo']; ?>">
							<?php endif; ?>
							
						</a>
						<?php if($is_favorites == 0): ?>
							<a href="javascript:" onclick="collectionShopOperation(<?php echo $shop_id; ?>,'shop','',this);"  class="collect-btn bg-color">加入收藏</a>
						<?php elseif($is_favorites == -1): ?>
							<a href="SHOP_MAIN/Login/index" class="collect-btn bg-color">加入收藏</a>
						<?php else: ?>
							<a href="javascript:;" onclick="collectionShopOperation(<?php echo $shop_id; ?>,'shop','',this)"  class="collect-btn bg-color">取消收藏</a>
						<?php endif; ?>
						
					</p>
					<p class="collect-count">
						<em id="collect-count"><?php echo $shop_info['shop_collect']; ?></em>
					</p>
					<p class="collect-tip">已收藏</p>
				</div>
				<div class="bd">
					
					<div class="shop-rate">
						<h4>店铺动态评分</h4>
						<ul>
							<li>
								描述相符：
								<a target="_blank" href="javascript:void(0);">
									<em class="count color" title=""><?php echo $shop_info['shop_desccredit']; ?></em>
								</a>
							</li>
							<li>
								服务态度：
								<a target="_blank" href="javascript:void(0);">
									<em class="count color" title=""><?php echo $shop_info['shop_servicecredit']; ?></em>
								</a>
							</li>
							<li>
								发货速度：
								<a target="_blank" href="javascript:void(0);">
									<em class="count color" title=""><?php echo $shop_info['shop_deliverycredit']; ?></em>
								</a>
							</li>
						</ul>
					</div>
					
					<div class="extend ">
						<h4 class="extend-title">店铺服务</h4>
						<ul>
							<li>
								<label>店铺掌柜：</label>
								<div class="extend-right">
									<a href="/shop/1.html" class="color"><?php echo $shop_info['shop_name']; ?>店长</a>
								</div>
							</li>
							
							<li>
								<label>店铺客服：</label>
								<div class="extend-right">
									<span class="tool">
										
										<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $shop_info['shop_qq']; ?>&site=qq&menu=yes" class="service-btn">
											<img border="0" src="__TEMP__/<?php echo $style; ?>/public/images/customer_qq.gif" alt="点这里给我发消息">
										</a>
										
									</span>
								</div>
							</li>
							<li class="locus">
								<label>所在地：</label>
								<div class="extend-right">
									<span><?php echo $shop_info['live_store_address']; ?></span>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="search">
			<form class="search-form" method="get" name="" id="search-form" action="" onsubmit="">
				<input type="hidden" name="type" id="searchtype" value="">
				<div class="search-info">
					<div class="search-box">
						<div class="search-box-con">
							<input class="search-box-input" name="keyword" id="keyword" tabindex="9" autocomplete="off" value="<?php echo $keyword; ?>" onfocus="if( this.value=='请输入关键词'){ this.value=''; }else{ this.value=this.value; }" onblur="if(this.value=='')this.value='请输入关键词'" type="text">
						</div>
					</div>
					<input type="button" onclick="search_all()" value="搜全站" class="button bg-color">
				</div>
				<input type="button" onclick="search_me()" value="搜本店" class="button button-spe">
			</form>
			<ul class="hot-query">
				<!-- 默认搜索词 -->
				
				<li class="first">
					<a href="" title=""></a>
				</li>
				
			</ul>
		</div>
	</div>

<script type="text/javascript">
//全站搜索
function search_all(){
	var keyword=$('#keyword').val();
	location.href="SHOP_MAIN/goods/goodslist?keyword="+keyword;
}
//本店搜索
function search_me(){
	var keyword=$('#keyword').val();
	location.href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=0&keyword="+keyword;
}
//收藏店铺操作
function collectionShopOperation(fav_id,fav_type,log_msg,even){
	var evtext=$(even).text();
	var ajaxUrl="SHOP_MAIN/components/collectiongoodsorshop";
	var updateText="取消收藏";
	if(evtext==updateText){
		ajaxUrl="SHOP_MAIN/components/cancelcollgoodsorshop";
		updateText="加入收藏";
		$('#collect-count').text(Number($('#collect-count').text())-1);
	}else{
		$('#collect-count').text(Number($('#collect-count').text())+1);
	}
	$.ajax({
		type:"post",
		url:ajaxUrl,
		async:true,
		data:{'fav_id':fav_id,
			  'fav_type':fav_type,
			  'log_msg':log_msg
		},
		success:function(res){
			if(res['code']>0){	
				$.msg(evtext+'成功！');
				$(even).text(updateText);
			}else{
				$.msg(evtext+'失败！');
			}
			
		}
	});
}

</script>
</div>
	


<!--头部商品分类 start-->

	<!--功能：店铺头部菜单-->
<!--创建人：李志伟-->
<!--时间：2017年2月7日16:51:22-->

<div class="layout">
	
	<div class="shop-header-banner">
		<?php if($shop_banner == ''): else: ?>
			<img src="__UPLOAD__/<?php echo $shop_banner; ?>" style="width:100%;">
		<?php endif; ?>
	</div>
	
	<div class="shop-menu">
		<ul>
			<?php if($goods_group_id == ''): ?>	
			<li class="select"><a href="SHOP_MAIN/shop/shopindex?shop_id=<?php echo $shop_id; ?>" target="">首页</a></li>
			<?php else: ?>
			<li><a href="SHOP_MAIN/shop/shopindex?shop_id=<?php echo $shop_id; ?>" target="">首页</a></li>
			<?php endif; if($goods_group_id == '0'): ?>
				<li class="all-category select">
			<?php else: ?>
				<li class="all-category">
			<?php endif; ?>
				<a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=0" target="">
					全部分类
					<span class="arrow"></span>
				</a>
				<div class="all-category-coupon" style="display: none;">

					<!-- 获取店铺内商品分类 -->
					
					
							<div style="width:100%;overflow:hidden;text-align: -webkit-left;margin-left: 50px;margin-left:50px;"><a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=0" target="_blank">全部 &gt;</a></div>
						
				

					<?php foreach($goods_group_list as $vo): ?> 
						<dl>
							<dt>
								<a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=<?php echo $vo['group_id']; ?>" target="_blank"><?php echo $vo['group_name']; ?></a>
							</dt>
							<dd>
								<ul>
								<?php if(is_array($vo['child_list']) || $vo['child_list'] instanceof \think\Collection || $vo['child_list'] instanceof \think\Paginator): if( count($vo['child_list'])==0 ) : echo "" ;else: foreach($vo['child_list'] as $k1=>$v1): ?>
			
									<li>
										<a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=<?php echo $v1['group_id']; ?>" target="_blank"><?php echo $v1['group_name']; ?></a>
									</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</dd>
						</dl>
					<?php endforeach; ?>
				

				</div>
			</li>
			<!-- 获取店铺导航 -->
				<?php if(is_array($goods_group_list) || $goods_group_list instanceof \think\Collection || $goods_group_list instanceof \think\Paginator): $k = 0; $__LIST__ = $goods_group_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k < 13): if($goods_group_id == $vo['group_id']): ?>
					 	<li class="select"> <a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=<?php echo $vo['group_id']; ?>" target="_parent"><?php echo $vo['group_name']; ?></a></li>
					 <?php else: ?>
					 	<li> <a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=<?php echo $vo['group_id']; ?>" target="_parent"><?php echo $vo['group_name']; ?></a></li>
					 <?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
			
			
		</ul>
	</div>
</div>

<!--头部商品分类 end-->

<!-- 右侧固定购物车 -->

	<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shopping_cart.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/ns_collections.js" type="text/javascript"></script>
<style>
.shopcollect{
	display: inline-block;
	background: url(__TEMP__/<?php echo $style; ?>/public/images/common-icon.png) no-repeat;
	cursor: pointer;
	vertical-align: top;
	position: absolute;
	}
	
</style>
<!-- common.js 刷新了购物车数据 -->
<script>
//当浏览器窗口大小改变时，设置显示内容的高度  
window.onresize = function(){
	$(".sidebar-cartbox").find('.cart-panel-content').height($(window).height());
	$(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height());
}
$(function() {
	$(".sidebar-cartbox").find('.cart-panel-content').height($(window).height());
	$(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height());
	$.ajax({
		type:"post",
		url:"SHOP_MAIN/components/getlogininfo",
		async:true,
		success:function(data){
			if(data != null && data != ""){
				var img = data["user_info"]["user_headimg"];
				var name = data["user_info"]["nick_name"];
				$("#not_logged").css("display","none");
				$("#right_login_info").css("display","block");
				$("#right_login_info_name").text(name);
				if(img == '' ||img == null){
					$("#login_member_logo").attr('src',"__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png"); 
				}else{
					img = '__UPLOAD__/'+img;
					$("#login_member_logo").attr('src',img);
				}
			}else{
				$("#not_logged").css("display","block");
				$("#right_login_info").css("display","none");
			}
		}
	})
	$('.ajax-login').click(function(){
		$('#mask-layer-login').show();
		$('#layui-layer').show();
	})
	$('.layui-layer-close.layui-layer-close1').click(function(){
		$('#mask-layer-login').hide();
		$('#layui-layer').hide();
	})
	refreshShopCart();
});
</script>
<input type="hidden" id="hidden_uid" value="<?php echo $uid; ?>" />
<div class="right-sidebar-con">
	<div class="right-sidebar-main">
		<div class="right-sidebar-panel">
			<div id="quick-links" class="quick-links">
				<ul>
					<li class="quick-area quick-login sidebar-user-trigger">
						<!-- 用户 --> <a href="javascript:void(0);" class="quick-links-a"><i class="setting"></i></a>
						<div class="sidebar-user quick-sidebar">
							<i class="arrow-right"></i>
							<div class="sidebar-user-info">
								<!-- 没有登录的情况 _start -->
								<div class="NS-USER-NOT-LOGIN">
										<a href="SHOP_MAIN/member/index">
									<div class="user-pic">
										<div class="user-pic-mask"></div>
										<img id="login_member_logo" src="__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png">
									</div>
									</a>
									<br>
									<p id="not_logged">
										你好！请<a href="javascript:void(0);"
											class="quick-login-a color ajax-login">登录</a> | <a
											href="SHOP_MAIN/login/registerbox"
											class="color">注册</a>
									</p>
									<p id="right_login_info">
										你好！<span id="right_login_info_name"></span>
									</p>
								</div>
								<!-- 没有登录的情况 _end -->
								<!-- 有登录的情况 _start -->
								<div class="js-user-already-login" style="display: none;">
									<div class="user-have-login">
										<div class="user-pic">
											<div class="user-pic-mask"></div>
											<img src="" class="NS-USER-PIC">
										</div>
										<div class="user-info">
											<p>
												用&nbsp;&nbsp;&nbsp;户： <span class="NS-USER-NAME"></span>
											</p>
										</div>
									</div>
									<p class="m-t-10">
										<span class="prev-login"> 上次登录时间： 
											<span class="NS-USER-LAST-LOGIN"></span>
										</span>
										<a href="SHOP_MAIN/member/index" class="btn account-btn" target="_blank">个人中心</a>
										<a href="SHOP_MAIN/member/orderlist" class="btn order-btn" target="_blank">订单中心</a>
									</p>
								</div>
								<!-- 有登录的情况 _end -->
							</div>
						</div>
					</li>
					<li class="sidebar-tabs" data-ns-flag="shopping_cart">
						<!-- 购物车 -->
						<div class="cart-list quick-links-a sidebar-cartbox-trigger">
							<i class="cart"></i>
							<div class="span">购物车</div>
							<span class="ECS_CARTINFO"> <span
								class="cart_num js-cart-count">0</span>
								<div class="sidebar-cart-box">
									<h3 class="sidebar-panel-header">
										<a href="javascript:void(0);" class="title">
											<i class="cart-icon"></i> <em class="title">购物车</em>
										</a>
										<span class="close-panel"></span>
									</h3>
								</div>
							</span>
						</div>
					</li>
					<li class="sidebar-tabs" data-ns-flag="love_history">
						<a href="javascript:void(0);" class="mpbtn_history quick-links-a sidebar-historybox-trigger">
							<i class="history"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							<font id="mpbtn_histroy">我看过的</font> <i class="arrow-right"></i>
						</div>
					</li>
					<li id="collectGoods" class="sidebar-tabs" data-ns-flag="collections_goods">
						<a href="javascript:;" class="mpbtn_collect quick-links-a">
							<i class="collect"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							我收藏的商品 <i class="arrow-right"></i>
						</div>
					</li>
					<li id="collectShops" class="sidebar-tabs" data-ns-flag="collections_shops">
						<a href="javascript:;" class="mpbtn_collect quick-links-a">
							<i class="shopcollect"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							我收藏的店铺 <i class="arrow-right"></i>
						</div>
					</li>
				</ul>
			</div>
			<div class="quick-toggle">
				<ul>
					<li class="quick-area">
						<a class="quick-links-a" href="javascript:void(0);">
							<i class="customer-service"></i>
						</a>
						<div class="sidebar-service quick-sidebar">
							<i class="arrow-right"></i>
							<div class="customer-service">
								<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $web_info['web_qq']; ?>&site=qq&menu=yes">
									<span class="icon-qq"></span> QQ
								</a>
							</div>
						</div>
					</li>
					<li class="quick-area">
						<a class="quick-links-a" href="javascript:void(0);"> <i class="qr-code"></i></a>
						<div class="sidebar-code quick-sidebar" style="display: none;">
							<i class="arrow-right"></i> 
							<img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>">
						</div>
					</li>
					<li class="returnTop" style="display: none;">
						<a href="javascript:void(0);" class="return_top quick-links-a"> 
							<i class="top"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							返回顶部 <i class="arrow-right"></i>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--购物车 start-->
		<div class="right-sidebar-panels sidebar-cartbox animate-out" style="z-index: 1;">
			<div class="sidebar-cart-box">
				<h3 class="sidebar-panel-header">
					<a href="javascript:void(0);" class="title" target="_blank">
						<i class="cart-icon"></i>
						<em class="title js-sidebar-title">购物车</em>
					</a>
					<span class="close-panel"></span>
				</h3>
				<div class="sidebar-cartbox-goods-list">
					<div class="cart-panel-main">
						<div class="cart-panel-content" >
							<!-- 点击了购物车 -->
							<div class="cart-list js-cart-list"></div>
							
							<!-- 点击了我收藏的店铺 -->
							<div class="cart-list js-collections-shops"></div>
							
							<!-- 点击了我收藏的商品 -->
							<div class="cart-list js-collections-goods"></div>
							
							<!-- 点击了我看过的，浏览历史 -->
							<div class="cart-list js-love-history"></div>
							
							<div class="tip-box js-tip-box" style="display:none;">
								<i class="tip-icon"></i>
								<div class="tip-text js-tip-text">
									您的购物车里什么都没有哦<br>
									<a class="color" href="SHOP_MAIN" title="再去看看吧" target="_blank">再去看看吧</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-panel-footer" style="position: absolute;bottom: 0;width: 100%;">
					<div class="cart-footer-checkout">
						<div class="js-footer-cart" >
							<div class="number">共<strong class="count second-color js-count">0</strong>种商品</div>
							<div class="sum">
								共计：<strong class="total second-color js-total">￥0</strong>
							</div>
							<a class="btn bg-color" href="SHOP_MAIN/goods/cart" target="_blank">去购物车结算</a>
						</div>
						<a class="btn bg-color" style="width:100%;display:none;" id="refreshMore" href="" target="_blank">查看更多</a>
					</div>
				</div>
			</div>
		</div>
		<!--购物车 end-->
	</div>
</div>

<!-- 内容 -->

<input type="hidden" id='shop_id' name="shop_id" value="<?php echo $shop_id; ?>"/>

<!--广告滚动 strat-->
<!--功能：店铺首页图片滚动-->
<!--创建人：李志伟-->
<!--时间：2017年2月7日16:50:46-->

<div class="banner">
		
		
		<ul id="fullScreenSlides" class="full-screen-slides">
		<?php if(is_array($shop_ad_list) || $shop_ad_list instanceof \think\Collection || $shop_ad_list instanceof \think\Paginator): $i = 0; $__LIST__ = $shop_ad_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($key == 0): ?>
				<li style="display: list-item;">
			<?php else: ?>
				<li style="display: none;">
			<?php endif; ?> 
	           <a href="<?php echo $vo['link_url']; ?>" target="_blank" title="" style="background:url(__UPLOAD__/<?php echo $vo['ad_image']; ?>) no-repeat center center;"></a> 
	         </li>
		<?php endforeach; endif; else: echo "" ;endif; ?>	
		</ul>

		<ul class="full-screen-slides-pagination">
		<?php if(is_array($shop_ad_list) || $shop_ad_list instanceof \think\Collection || $shop_ad_list instanceof \think\Paginator): $i = 0; $__LIST__ = $shop_ad_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($key == 0): ?>
				<li class="current">
			<?php else: ?>
				<li class="">
			<?php endif; ?> 
	           <a href="javascript:void(0);"><?php echo $key; ?></a>
			</li> 
		<?php endforeach; endif; else: echo "" ;endif; ?>	
		</ul>
		
	</div>
<!--广告滚动 end-->

<!--广告栏 strat-->
<!--功能：店铺首页广告栏-->
<!--创建人：李志伟-->
<!--时间：2017年2月7日16:42:09-->
<style type="text/css">
	.shop3-title>hr{
		height: 1px;
    	background: #999;
	}
	.shop3-title>span.title{
		margin-top: -26px;
	    display: block;
	    background: #fff;
	    width: 20%;
	    margin: -32px auto 14px;
	    font-size: 24px;
	}
</style>

<!-- 促销版块开始 -->
	<?php if(count($recommend_block) >0): ?>
	<div class="shop-ad-group3">
	<?php if(is_array($recommend_block) || $recommend_block instanceof \think\Collection || $recommend_block instanceof \think\Paginator): if( count($recommend_block)==0 ) : echo "" ;else: foreach($recommend_block as $k=>$recommend_detail): ?>
	<h2 class="shop3-title" ><hr /><span class="title"><?php echo $recommend_detail['class_name']; ?></span></h2>
	
	<div class="w1210 shop-floor">
	        <div class="shop-goods-list">
	            <ul id="shoplist[type]">
	             	<?php if(is_array($recommend_detail['goods_list']) || $recommend_detail['goods_list'] instanceof \think\Collection || $recommend_detail['goods_list'] instanceof \think\Paginator): if( count($recommend_detail['goods_list'])==0 ) : echo "" ;else: foreach($recommend_detail['goods_list'] as $key=>$goods_list): ?>
	               <li class="first">	
					 <dl>
					     <dt class="goods-thumb">
					       <a target="_blank" href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $goods_list['goods_info']['goods_id']; ?>" title="<?php echo $goods_list['goods_info']['goods_name']; ?>" >
					          <img class="lazy" src="__UPLOAD__/<?php echo $goods_list['picture_info']['pic_cover_mid']; ?>"  alt="<?php echo $goods_list['picture_info']['goods_name']; ?>" >
					       </a>
					     </dt>
					 <dd class="goods-info">
					      <a target="_blank" href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $goods_list['picture_info']['goods_id']; ?>" title="<?php echo $goods_list['goods_info']['goods_name']; ?>" class="goods-name"><?php echo $goods_list['goods_info']['goods_name']; ?></a>
					        <p> 
					          <span class="goods-price color fl">￥<?php echo $goods_list['goods_info']['promotion_price']; ?></span>
					          <a target="_blank" href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $goods_list['goods_info']['goods_id']; ?>" title="立即抢购" class="shop-add-cart fr">立即抢购</a>
					         </p>
					  </dd>
					  </dl>
				 </li>
	            <?php endforeach; endif; else: echo "" ;endif; ?>
	            </ul>
	        </div>      
	</div>	
	<?php endforeach; endif; else: echo "" ;endif; ?>	
	</div>
	<?php endif; ?>	



<!-- 促销版块结束 -->





<!-- 底部 -->

<!--
	创建时间：2017年2月7日 12:11:41
	功能描述： 底部，联系我们、电话 
-->
<div class="footer">
 <div class="dsc-service">
        <div class="w w1200 relative">
            <ul class="service-list">
                <li>
                    <div class="service-tit service-zheng"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-zheng.png"></div>
                    <div class="service-txt">正品保障</div>
                </li>
                <li>
                    <div class="service-tit service-qi"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-qi.png"></i></div>
                    <div class="service-txt">七天包退</div>
                </li>
                <li>
                    <div class="service-tit service-hao"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-grin.png"></div>
                    <div class="service-txt">好评如潮</div>
                </li>
                <li>
                    <div class="service-tit service-shan"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-light.png"></i></div>
                    <div class="service-txt">闪电发货</div>
                </li>
                <li class="last">
                    <div class="service-tit service-quan"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-tronphy.png"></div>
                    <div class="service-txt">权威荣誉</div>
                </li>
            </ul>
        </div>
    </div>
<div class="dsc-help">
        <div class="w w1200">
            <div class="help-list">
				<?php if(is_array($platform_help_class) || $platform_help_class instanceof \think\Collection || $platform_help_class instanceof \think\Paginator): if( count($platform_help_class)==0 ) : echo "" ;else: foreach($platform_help_class as $key=>$class_vo): ?>
                <div class="help-item">
                    <h3><?php echo $class_vo['class_name']; ?></h3>
                    <ul>
                    	<?php if(is_array($platform_help_document) || $platform_help_document instanceof \think\Collection || $platform_help_document instanceof \think\Paginator): if( count($platform_help_document)==0 ) : echo "" ;else: foreach($platform_help_document as $key=>$document_vo): if($class_vo['class_id'] == $document_vo['class_id']): ?>	
                       <li><a href="SHOP_MAIN/helpcenter/index?id=<?php echo $document_vo['id']; ?>" title="售后流程" target="_blank"><?php echo $document_vo['title']; ?></a></li>
                    		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="help-cover">
                <div class="help-ctn">
                    <div class="help-ctn-mt">
                        <span>服务热线</span>
                        <strong><?php echo $web_info['web_phone']; ?></strong>
                    </div>
                    <div class="help-ctn-mb">
                        
                        <a id="IM" im_type="dsc" onclick="openWin(this)" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $web_info['web_qq']; ?>&site=qq&menu=yes" target="_blank" class="btn-ctn"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-csu.png" style="vertical-align: middle;">&nbsp;&nbsp;咨询客服</a>
                                            </div>
                </div>
                <div class="help-scan">
                    <div class="code" >
                    	<img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
	创建时间：2017年2月7日 12:13:09
	功能描述： 底部、公司信息 
-->
<div class="dsc-copyright">
	<div class="w w1200">
		<p class="copyright_info">
			<a href="#">Copyright © 2015-2025 Niushop开源商城&nbsp;版权所有 保留一切权利</a>
		</p>
		
		<b>

		    <a  href="javascript:;" target="_blank" class="copyright-logo"><?php echo $web_info['third_count']; ?></a>&nbsp;&nbsp;
			<a href="http://www.niushop.com.cn" target="_blank" class="copyright-logo">山西牛酷信息科技有限公司&nbsp;&nbsp;</a>
			<span>提供技术支持&nbsp;400-886-7993</span>
		</b>
	</div>
</div>




<!-- 添加js文件 -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_index.js"></script>	



<?php if($uid == ''): ?>
	<style>
.verification-code{
	position:relative;
}
.verification-code img{
	position: absolute;
	top: 5px;
	right: 5px;
	z-index:101;
	width:100px;
	height:30px;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
	$(window).on("resize",function(){
		//获取当前屏幕的宽度和高度
		var window_width = parseFloat($(window).width());
		var window_height = parseFloat($(window).height());
		//获取登录框的宽度和高度
		var div_width = parseFloat($("#layui-layer").css("width"));
		var div_height = parseFloat($("#layui-layer").css("height"));
		//确定登录框的显示位置
		var top = (window_height-div_height)/2;
		var left = (window_width-div_width)/2;
		$("#layui-layer").css({"top":top,"left":left});
	})
	//自执行一次resize函数
	$(window).trigger("resize");
});
function titleMove() {
	var moveable = true;
	var loginDiv = document.getElementById("layui-layer");
	//以下变量提前设置好
	var clientX = window.event.clientX;//鼠标水平位置
	var clientY = window.event.clientY;//鼠标垂直位置
	var moveTop = parseFloat(loginDiv.style.top);//登录框的top属性
	var moveLeft = parseFloat(loginDiv.style.left);//登录框的left属性
	var docX = parseFloat(window.innerWidth);//可视区域的宽度
	var docY = parseFloat(window.innerHeight);//可视区域的高度
	var divWidth = parseFloat(loginDiv.style.width);//登录框的宽度
	var divHeight = parseFloat(loginDiv.style.height);//登录框的高度 
	var max_width = docX-divWidth;
	var max_height = docY-divHeight;
	document.onmousemove = function MouseMove() {
		if (moveable) {
			var y = moveTop + window.event.clientY - clientY;  //当前鼠标位置减去上次鼠标位置
			var x = moveLeft + window.event.clientX - clientX;
			if (x >= 0 && y >= 0 && moveTop+divHeight<=docY &&	moveLeft+divWidth<=docX) {
				loginDiv.style.top = y + "px";
				loginDiv.style.left = x + "px";
			}else{
				if(x<0){
					loginDiv.style.left = "5px";
			}else if(y<0){
				loginDiv.style.top = "5px";
			}else if(moveTop+divHeight>docY){
				loginDiv.style.top = max_height + "px";
			}else if(moveLeft+divWidth>docX){
				loginDiv.style.left = max_width + "px";
			}
		} 
	}
}

document.onmouseup = function Mouseup() {
		moveable = false;
	}
}
</script>
<input id="goods_id" value="<?php echo $goods_info['goods_id']; ?>" type="hidden">
<div id="mask-layer-login" style="display:none;position:fixed;top:0;width:100%;height:100%;z-index:999999;background:rgba(0,0,0,0.75);"></div>
<div class="layui-layer layui-layer-page layer-anim" id="layui-layer" type="page" times="100002" showtime="0" contype="string" style="display:none;z-index: 19891015;position:fixed;width:346px;height:436px;">
	<div class="layui-layer-title" style="cursor: move;" id="control-trawaaa"  onmousedown="titleMove();">您尚未登录<span style="width:40px;display:inline-block "></span></div>
	<div id="NS_LOGIN_LAYER_DIALOG" class="layui-layer-content">
		<div id="1487644497l6UAoM" class="login-form">
			<div class="login-con pos-r">
				<div class="login-wrap">
					<div class="login-tit">
						还没有账号？<a href="SHOP_MAIN/login/registerbox" class="regist-link color">立即注册<i>&gt;</i></a>
					</div>
					<div class="login-radio">
						<ul>
							<li class="active" id="login2" onclick="setTab('login',2,2)">会员登录</li>
						</ul>
					</div>
					<!-- 普通登录 star -->
					<div id="con_login_2" class="form">
						<div class="form-group item-name">
							<!-- 错误项标注 给div另添加一个class值'error' star -->
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="text" name="txtName" id="txtName" placeholder="手机号/会员名/邮箱" class="text" tabindex="1" autocomplete="off" aria-required="true" />
							</div>
							<!-- 错误项标注 给div另添加一个class值'error' end -->
						</div>
						<div class="form-group item-password">
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="password" name="txtPWD" id="txtPWD" placeholder="请输入密码" class="text" tabindex="2"  autocomplete="off" aria-required="true" />
							</div>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="form-group verification-code">
							<div class="form-control-box">
								<input type="text" id="vertification" class="text vertification" name="vertification" placeholder="请输入验证码 " />
								<img id="verify_img" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>'" />
							</div>
						</div>
						<?php endif; ?>
<!-- 						<div class="safety"> -->
<!-- 							<label for="remember"> -->
<!-- 								<input type="checkbox" name="expire" checked="checked" type="checkbox" value="1"> -->
<!-- 								<span style="display:inline-block;padding-bottom:7px;">7天内自动登录</span> -->
<!-- 							</label> -->
<!-- 							<a class="forget-password fr" href="SHOP_MAIN/login/findpasswd" style="margin-top:2px;">忘记密码？</a> -->
<!-- 						</div> -->
						<div class="login-btn">
							<input type="hidden" name="act" value="act_login" />
							<input type="hidden" name="back_act" />
							<input type="button" name="buttom" class="btn-img btn-entry bg-color" id="loginsubmit" onclick="btnlogin(this)" value="立即登录" />
						</div>
						<div class="item-coagent">
							<?php if($Wchat_info['is_use'] == 1): ?>
								<a href="APP_MAIN/login/oauthlogin?type=WCHAT" data-id="qq" class="website-login"><i class="weixin"></i></a>
							<?php endif; if($qq_info['is_use'] == 1): ?>
								<a href="APP_MAIN/login/oauthlogin?type=QQLOGIN" data-id="wchat" class="website-login"><i class="qq"></i></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<span class="layui-layer-setwin"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span><span class="layui-layer-resize"></span>
</div>
<!-- 验证码脚本 -->
<script type="text/javascript">
// 登陆 登录时 登录按钮"变暗"
function btnlogin(event) {
	var goodsid = $("#goods_id").val();
	var userName = $('#txtName').val();
	var password = $('#txtPWD').val();
	var vertification = "";
	if(userName==''){
		$.msg('用户名不可为空');
		$('#txtName').select();
		return;
	}
	if(password==''){
		$.msg('密码不可为空');
		$('#txtPWD').select();
		return;
	}
	if("<?php echo $login_verify_code['pc']; ?>" == 1){
		vertification = $('#vertification').val();
		if(vertification == undefined || vertification==''){
			$.msg('验证码不可为空');
			$("#vertification").select();
			return;
		}
	}
	$.ajax({
		type:"post",
		url:"SHOP_MAIN/login/login",
		data:{"userName" : userName,"password" : password,"vertification" : vertification},
		success : function(data){
			if(data['code']>0){
				$("#hidden_uid").val(data['code']);
				if(goodsid == ''){
					$.msg('登陆成功！');
					window.location.reload();
				}else{
					login_buy_goods(event);
				}
			}else{
				$.msg(data['message']);
				$("#verify_img").attr("src",'<?php echo captcha_src(); ?>');
			}
		}
	});
}
function login_buy_goods(event){
	var image_url = "";
	var goodsid =  $("#goods_id").val();
	var tag = $('#mask-layer-login').attr("data-tag");
	 $.cart.add(goodsid, $(".amount-input").val(), {
		is_sku: true,
		image_url: image_url,
		event: event,
		tag : tag
	})
}
</script>
<?php endif; ?>


<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<?php if($default_client): ?>
<div style="position:fixed;right:36px;bottom:10%;z-index:999999;" onclick="location.href='APP_MAIN';" id="go_mobile">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/go_mobile.png"/>
</div>
<script>
$(function(){
	checkTerminal()
});
window.onresize = function(){
	checkTerminal();
}
function checkTerminal(){
	if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && window.screen.availWidth<768){
		//跳到手机端
		$("#go_mobile").show();
	}else{
		$("#go_mobile").hide();
	}
}
</script>
<?php endif; ?>
</body>
</html>