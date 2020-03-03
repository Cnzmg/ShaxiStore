<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:34:"template/platform/Index/index.html";i:1581654367;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
<title><?php echo $title_name; ?></title>
<meta name="description" content="商城, 分销, 平台, 多店铺商城, 单店铺商城, tp5.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]> <script src="js/ie/html5shiv.js" cache="false"></script> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/excanvas.js" cache="false"></script> <![endif]-->
<script src="PLATFORM_JS/app.v2.js"></script>
<!-- <script src="__STATIC__/js/jquery-1.8.1.min.js"></script> -->
<link href="__STATIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="PLATFORM_CSS/app.v2.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="PLATFORM_CSS/app.v1.css" type="text/css" /> -->
<script src="PLATFORM_JS/wysiwyg/demo.js" cache="false"></script>
<script src="__STATIC__/js/fileUpload.js"></script>
<script src="__STATIC__/js/common.js"></script>
<script>
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
<!-- 引入css js style等公共文件  start-->

<script src="__STATIC__/js/highcharts.js"></script>
<script src="__STATIC__/js/exporting.js"></script>
<style>
.nav-box{
	
}
.index-dl{
	border:1px solid ;
	overflow:hidden;
	padding:20px;
	color:#FFF;
}
.index-dl dt,.index-dl dd{
	float:left;
}
.dl-ul{
	-webkit-padding-start: 0;
	list-style-type: none;
	margin-bottom:0;
	padding-left:10px;
}
.dl-ul li:nth-child(1){
	font-size:20px;
	height:40px;
	line-height:50px;
	min-width:76px;
}
.dl-ul li:nth-child(2){
	font-size:12px;
	height:36px;
	line-height:20px;
	min-width:80px;
}
.nav-box:nth-child(1) dl{
	background-color:#0286e0;
}
.nav-box:nth-child(2) dl{
	background-color:#ff8420;
}
.nav-box:nth-child(3) dl{
	background-color:#ff4f4f;
}
.nav-box:nth-child(4) dl{
	background-color:#02e03b;
}
.nav-box:nth-child(5) dl{
	background-color:#ff7246;
}
.nav-box:nth-child(6) dl{
	background-color:#438aff;
}
.b-f{
	color:#4cc0c1;
}
</style>

<!-- 引入css js 公共文件  end-->
</head>

<body style="background:transparent;">
		<section class="bg-dark dk top-sidebar">
			<div class="navbar-header aside-md">
<!-- 				<a href="#"  data-toggle="fullscreen"><img -->
<!-- 					src="PLATFORM_IMG/logo1.png" class="m-r-sm"></a> -->
			</div>
			<ul class="nav navbar-nav navbar-right hidden-xs nav-user" style="position:fixed;top:0;right:0;z-index:10;">
				<li class="dropdown"><a href="#" class="dropdown-toggle dker"
					data-toggle="dropdown"> <span class="thumb-sm avatar pull-left">
							<img src="__STATIC__/images/default_user_portrait.gif">
					</span> <?php echo $username; ?> <b class="caret"></b>
				</a>
					<ul class="dropdown-menu animated fadeInRight">
						<span class="arrow top"></span>
						<li><a href="#">修改密码</a></li>
						<li><a href="profile.html">商城首页</a></li>
						<li class="divider"></li>
						<li><a href="PLATFORM_MAIN/Login/logout">安全退出</a></li>
					</ul>
				</li>
	<!-- 			<li class="hidden-xs">
					<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="navtop-icon icon-bell"></i> 
						<span class="badge badge-sm up bg-danger m-l-n-sm count" style="display: inline-block;">3</span> 
					</a>
			        <section class="dropdown-menu aside-xl">
			          <section class="panel bg-white">
			            <header class="panel-heading b-light bg-light"> <strong>You have <span class="count" style="display: inline;">3</span> notifications</strong> </header>
			            <div class="list-group list-group-alt animated fadeInRight"><a href="#" class="media list-group-item" style="display: block;"><span class="pull-left thumb-sm text-center"><i class="fa fa-envelope-o fa-2x text-success"></i></span><span class="media-body block m-b-none">Sophi sent you a email<br><small class="text-muted">1 minutes ago</small></span></a> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/avatar.jpg" alt="John said" class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br>
			              <small class="text-muted">10 minutes ago</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br>
			              <small class="text-muted">1 hour ago</small> </span> </a> </div>
			            <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </footer>
			          </section>
			        </section>
			    </li>
		      <li class="dropdown hidden-xs"> 
		      	<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="navtop-icon icon-search" style="height:20px;line-height:20px;"></i></a>
		        <section class="dropdown-menu aside-xl animated fadeInUp">
		          <section class="panel bg-white">
		            <form role="search">
		              <div class="form-group wrapper m-b-none">
		                <div class="input-group">
		                  <input type="text" class="form-control" placeholder="Search">
		                  <span class="input-group-btn">
		                  <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
		                  </span> </div>
		              </div>
		            </form>
		          </section>
		        </section>
		      </li> -->
		      <li class="hidden-xs"> 
		      	<a href="SHOP_MAIN" title="新窗口打开商城首页" target="_black" class="dker"><i class="navtop-icon icon-home"></i></a>
		      </li>
		      <li class="hidden-xs"> 
		      	<a href="PLATFORM_MAIN/Login/logout" title="清除缓存" class="dker"><i class="navtop-icon icon-clear"></i></a>
		      </li>
		      <li class="hidden-xs"> 
		      	<a href="PLATFORM_MAIN/Login/logout" title="安全退出管理中心" class="dker"><i class="navtop-icon icon-power-off"></i></a>
		      </li>
			</ul>
		</section>
		
		<div class="left-sidebar" id="sidebar" style="display:none;">
			<div id="first-sidebar" class="nav-primary first" >
				<ul class="nav">
						<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class='<?php if($vo['data']['module_id'] == $headid): ?>active<?php endif; ?>' style="position: relative;text-align:center;height:68px;margin:0;">
							<a href="PLATFORM_MAIN/<?php echo $vo['data']['url']; ?>.html" onclick="show_menu(<?php echo $vo['data']['module_id']; ?>)" style="height:68px;">
								<div style="padding-top:15px;padding-left:24px;">
									<i class="nav-icon <?php echo $vo['data']['icon_class']; ?>"></i>
								</div>
								<div style="margin:0;height:33px;line-height:22px;"><?php echo $vo['data']['module_name']; ?></div>
								<div class="arrow-left"></div>
							</a>
						</li> 
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
			</div>
			<div id="second-sidebar" class="nav-primary second">
				<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo['sub_menu']) || (($vo['sub_menu'] instanceof \think\Collection || $vo['sub_menu'] instanceof \think\Paginator ) && $vo['sub_menu']->isEmpty()))): ?>
												<ul class="nav menu-nav <?php if($vo['data']['module_id'] == $headid): ?>block<?php else: ?>hide<?php endif; ?>" id="menu_<?php echo $vo['data']['module_id']; ?>" >
													<?php if(is_array($vo['sub_menu']) || $vo['sub_menu'] instanceof \think\Collection || $vo['sub_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
													<li <?php if($v1['module_id'] == $second_menu_id): ?>class="active"<?php endif; ?> style="position: relative;">
														<a href="PLATFORM_MAIN/<?php echo $v1['url']; ?>.html" <?php if(strtoupper($v1['method']) == strtoupper($action)): ?>class="active"<?php endif; ?>> 
														<span><?php echo $v1['module_name']; ?></span>
														</a>
														<i class="triangle1"></i>
													</li>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</ul> 
												<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
			
		</div>
		<div id="content" class="main">
					<section class="vbox">
						<header class="header bg-white b-b b-light panel-title">
				            <p> <?php echo $frist_menu['module_name']; ?> >
								<a href="PLATFORM_MAIN/<?php echo $secend_menu['url']; ?>.html"><?php echo $secend_menu['module_name']; ?></a>
							</p>
				            <!-- 当前位置 -->
				        </header>
						<section class="scrollable wrapper">
						<?php if(!(empty($three_menu_list) || (($three_menu_list instanceof \think\Collection || $three_menu_list instanceof \think\Paginator ) && $three_menu_list->isEmpty()))): ?>
							<div class="row panel-body" style="padding-top:0px;">
						<?php if(is_array($three_menu_list) || $three_menu_list instanceof \think\Collection || $three_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $three_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vt): $mod = ($i % 2 );++$i;?>
								<a href="PLATFORM_MAIN/<?php echo $vt['url']; ?>.html" class="btn btn-sm <?php if(strtoupper($vt['method']) == strtoupper($action)): ?>btn-primary<?php else: ?>btn-default<?php endif; ?>"><?php echo $vt['module_name']; ?></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						<?php endif; ?>
						<!-- 操作提示  start -->
						<?php if(!(empty($tips) || (($tips instanceof \think\Collection || $tips instanceof \think\Paginator ) && $tips->isEmpty()))): ?>
							<section class="panel-default m-b-sm">
								<div class="alert alert-info">
									<p>
					                  <button type="button" class="close"><i class="fa fa-minus"></i></button>
					                  <i class="fa fa-hand-o-right m-r-xs"></i><strong>操作提示</strong>
					                </p>
					                <?php if(is_array($tips) || $tips instanceof \think\Collection || $tips instanceof \think\Paginator): if( count($tips)==0 ) : echo "" ;else: foreach($tips as $key=>$vt): ?>
					                   <p class="alert-p m-l-xl"><i class="fa fa-caret-right m-r-xs"></i><?php echo $vt; ?></p>
					                <?php endforeach; endif; else: echo "" ;endif; ?>
				                </div>
							</section>
						<?php endif; ?>
						<!-- 操作提示  end -->
							
<div class="index-head">
		<div class="row">
			<div class="col-md-2 nav-box" >
				<dl class="index-dl">
					<dd><img src="PLATFORM_IMG/index/platform_nav_1.png"/></dd>
					<dd class="col-sm-6" >
						<ul class="dl-ul">
							<li><?php echo $sale_data['sale_money_day']; ?></li>
							<li>今日销售总额</li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="col-md-2 nav-box" >
				<dl class="index-dl">
					<dd><img src="PLATFORM_IMG/index/platform_nav_2.png"/></dd>
					<dd class="col-sm-6" >
						<ul class="dl-ul">
							<li><?php echo $sale_data['sale_num_day']; ?></li>
							<li>今日订单总数</li>
						</ul>
					</dd>
				</dl>
			</div>
			
			<div class="col-md-2 nav-box">
				<dl class="index-dl">
					<dd><img src="PLATFORM_IMG/index/platform_nav_4.png"/></dd>
					<dd class="col-sm-6" >
						<ul class="dl-ul">
							<li><?php echo $sale_data['shop_num']; ?></li>
							<li>入驻店铺数</li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="col-md-2 nav-box" >
				<dl class="index-dl">
					<dd><img src="PLATFORM_IMG/index/platform_nav_5.png"/></dd>
					<dd class="col-sm-6" >
						<ul class="dl-ul">
							<li><?php echo $sale_data['fans_num']; ?></li>
							<li>关注粉丝数</li>
						</ul>
					</dd>
				</dl>
			</div>
		
		</div>
	
</div>
<div class="index-content">
	<div class="row">
		<div class="col-md-6">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">订单</header>
				<div class="panel-body" >
					<div class="row text-center no-gutter" style="height:138.5px;padding-top:40px;">
					<!-- font-bold 字体加粗-->
						<div class="col-xs-3  b-light">
							<span class="h2  m-t block b-f m-b"><?php echo $order_data['daifukuan']; ?></span> <small
								class="text-muted m-b block">待付款</small>
						</div>
						<div class="col-xs-3  b-light">
							<span class="h2  m-t block b-f  m-b"><?php echo $order_data['daifahuo']; ?></span> <small
								class="text-muted m-b block">待发货</small>
						</div>
						<div class="col-xs-3  b-light">
							<span class="h2 m-t block b-f  m-b"><?php echo $order_data['yifahuo']; ?></span> <small
								class="text-muted m-b block">已发货</small>
						</div>
						<div class="col-xs-3">
							<span class="h2 m-t block b-f  m-b"><?php echo $order_data['yishouhuo']; ?></span> <small
								class="text-muted m-b block">已收货</small>
						</div>
					</div>
					<div class="row text-center no-gutter" style="height:138.5px;padding-top:20px;">
						<div class="col-xs-3  b-light">
							<span class="h2 m-t block b-f m-b"><?php echo $order_data['yiwancheng']; ?></span> <small
								class="text-muted m-b block">已完成</small>
						</div>
						<div class="col-xs-3  b-light">
							<span class="h2 m-t block b-f m-b"><?php echo $order_data['yiguanbi']; ?></span> <small
								class="text-muted m-b block">已关闭</small>
						</div>
						<div class="col-xs-3  b-light">
							<span class="h2 m-t block b-f m-b"><?php echo $order_data['tuikuanzhong']; ?></span> <small
								class="text-muted m-b block">退款中</small>
						</div>
			<!-- 			<div class="col-xs-3">
							<span class="h2 m-t block b-f m-b"><?php echo $order_data['yituikuan']; ?></span> <small
								class="text-muted m-b block">已退款</small>
						</div> -->
					</div>
				</div>
				
			</section>
		</div>
		<div class="col-md-6">
		<section class="panel panel-default">
			<header class="panel-heading font-bold">会员</header>
			<div class="panel-body">
				<div id="userRegCharts" style="height: 210px"></div>
			</div>
			<footer class="panel-footer bg-white no-padder">
				<div class="row text-center no-gutter">
					<div class="col-xs-3 b-r b-light">
						<span class="h4 font-bold m-t block" id="user_num_count">0</span> <small
							class="text-muted m-b block">会员总数</small>
					</div>
					<div class="col-xs-3 b-r b-light">
						<span class="h4 font-bold m-t block" id="user_num_day">0</span> <small
							class="text-muted m-b block">本日新增</small>
					</div>
					<div class="col-xs-3 b-r b-light">
						<span class="h4 font-bold m-t block" id="user_num_yesterday">0</span> <small
							class="text-muted m-b block">昨日新增</small>
					</div>
					<div class="col-xs-3">
						<span class="h4 font-bold m-t block" id="user_num_month">0</span> <small
							class="text-muted m-b block">本月新增</small>
					</div>
				</div>
			</footer>
		</section>
	</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">商品</header>
				<div class="panel-body">
					<div id="goods_create" style="height: 210px"></div>
				</div>
				<footer class="panel-footer bg-white no-padder">				
					<div class="row text-center no-gutter">
						
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block" id="goods_num_count">0</span> <small
								class="text-muted m-b block">总商品数</small>
						</div>
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block" id="goods_num_day">0</span> <small
								class="text-muted m-b block">本日新增</small>
						</div>
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block" id="goods_num_yesterday" >0</span> <small
								class="text-muted m-b block">昨日新增</small>
						</div>
						<div class="col-xs-3">
							<span class="h4 font-bold m-t block" id="goods_num_month">0</span> <small
								class="text-muted m-b block">本月新增</small>
						</div>
					</div>
				</footer>
			</section>
		</div>
		<div class="col-md-6">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">店铺</header>
				<div class="panel-body">
					<div id="shop_create" style="height: 210px"></div>
				</div>
				<footer class="panel-footer bg-white no-padder">
					<div class="row text-center no-gutter">
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block" id="shop_num_count">0</span> <small
								class="text-muted m-b block">总和</small>
						</div>
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block" id="shop_num_day">0</span> <small
								class="text-muted m-b block">本日新增</small>
						</div>
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block" id="shop_num_yesterday">0</span> <small
								class="text-muted m-b block">昨日新增</small>
						</div>
						<div class="col-xs-3">
							<span class="h4 font-bold m-t block"  id="shop_num_month">0</span> <small
								class="text-muted m-b block">本月新增</small>
						</div>
					</div>
				</footer>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">订单统计</header>
				<div class="panel-body">
					<div id="orderCharts" style="height: 210px"></div>
				</div>			
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">销售统计</header>
				<div class="panel-body">
					<div id="goods_sales_money" style="height: 210px"></div>
				</div>				
			</section>
		</div>
	</div>
</div>

						</section>
					</section>
					<a href="#" class="hide nav-off-screen-block"
						data-toggle="class:nav-off-screen" data-target="#nav"></a>
				</div>
	</section>
<script>
var PLATFORMMAIN = 'PLATFORM_MAIN';
var UPLOAD = '__UPLOAD__';
</script>
<script>
function tab_menu(id){
	if(id == 1){
		$(".nav1").hide();
		$(".nav2").show();
	}else if(id == 2){
		$(".nav1").show();
		$(".nav2").hide();
	}
}
$(".close").click(function(){
	$(this).children('i').toggleClass("fa-minus");
	$(this).children('i').toggleClass("fa-plus");
	$(this).parents('.alert').find(".alert-p").toggleClass("hide");
});
function show_menu(pid){
// 	$(".menu-nav").removeClass('block');
// 	$(".menu-nav").addClass('hide');
// 	$("#menu_"+pid).removeClass('hide');
// 	$("#menu_"+pid).addClass('block');
	var url = $("#menu_"+pid+" li").eq(0).find('a').attr('href');
	location.href = url;
}
</script>
	<!-- Bootstrap -->
	<!-- App -->

	<script src="PLATFORM_JS/charts/easypiechart/jquery.easy-pie-chart.js"></script>
	<script src="PLATFORM_JS/charts/sparkline/jquery.sparkline.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.tooltip.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.resize.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.grow.js"></script>
	<script src="PLATFORM_JS/charts/flot/demo.js"></script>
	<script src="PLATFORM_JS/calendar/bootstrap_calendar.js"></script>
	<script src="PLATFORM_JS/calendar/demo.js"></script>
	<script src="PLATFORM_JS/sortable/jquery.sortable.js"></script>
	<script src="PLATFORM_JS/datatables/jquery.dataTables.min.js"
		cache="false"></script>
	<script src="PLATFORM_JS/nestable/jquery.nestable.js"></script>
	<script src="PLATFORM_JS/nestable/demo.js"></script>
	<script src="PLATFORM_JS/libs/underscore-min.js" cache="false"></script>
	<script src="PLATFORM_JS/fuelux/fuelux.js" cache="false"></script>
	<script src="PLATFORM_JS/fuelux/demo.datagrid.js" cache="false"></script>
	<!-- slider -->
	<script src="PLATFORM_JS/slider/bootstrap-slider.js" cache="true"></script>
	<!-- select2 -->
	<script src="PLATFORM_JS/select2/select2.min.js" cache="true"></script>

	<!-- markdown -->
	<script src="PLATFORM_JS/markdown/epiceditor.min.js" cache="true"></script>
	<script src="PLATFORM_JS/markdown/demo.js" cache="true"></script>
	
<script>
var chart,salesStatistical,weixinChart,weixinStatistical,weixinTimeStatistical,weixinOption,weixinChartsTitle, orderChartsTitle;
var saleMoneyStatistical = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var saleMoneyTimeStatistical = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
var saleMoneyChart;
var shopCreateChart;
var shopCreateTimeStatistical=["1日","2日","3日","4日","5日","6日","7日","8日","9日","10日","11日","12日","13日","14日","15日","16日","17日","18日","19日","20日","21日","22日","23日","24日","25日","26日","27日","28日","29日","30日","31日"];
var shopCreateStatistical = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var goodsCreateChart;
var goodsCreateTimeStatistical=["1日","2日","3日","4日","5日","6日","7日","8日","9日","10日","11日","12日","13日","14日","15日","16日","17日","18日","19日","20日","21日","22日","23日","24日","25日","26日","27日","28日","29日","30日","31日"];
var goodsCreateStatistical = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var weixinTimeStatistical=["1日","2日","3日","4日","5日","6日","7日","8日","9日","10日","11日","12日","13日","14日","15日","16日","17日","18日","19日","20日","21日","22日","23日","24日","25日","26日","27日","28日","29日","30日","31日"];
var weixinStatistical = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var salesStatistical=[["1日",0],["2日",0],["3日",0],["4日",0],["5日",0],["6日",0]["7日",0],["8日",0],["9日",0],["10日",0],["11日",0],["12日",0],["13日",0],["14日",0],["15日",0],["16日",0],["17日",0],["18日",0],["19日",0],["20日",0],["21日",0],["22日",0],["23日",0],["24日",0],["25日",0],["26日",0],["27日",0],["28日",0],["29日",0],["30日",0],["31日",0]];
$(function() {
	// 加载页面Title以及用户名称
	// 关注人数统计
	var focusNumberStatistical = [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
			0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ];
	chart = new Highcharts.Chart({
		chart : {
			type : 'column',
			renderTo : 'orderCharts'
		},
		title : {
			text : orderChartsTitle,
			align : "left",
			useHTML : true
		},
		lang : {
			printChart : "打印",
			downloadPNG : "导出PNG格式图片",
			downloadJPEG : "导出JPEG格式图片",
			downloadPDF : "导出PDF格式图片",
			downloadSVG : "导出SVG格式图片"
		},
		xAxis : {
			type : 'category',
			labels : {
				rotation : -45,
				style : {
					fontSize : '13px',
					fontFamily : 'Verdana, sans-serif'
				}
			}
		},
		yAxis : {
			min : 0,
			title : {
				text : ''
			}
		},
		legend : {
			enabled : false
		},
		credits : {
			enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
			text : "商城", // 显示的文字
			href : '#', // 链接地址
		},
		series : [ {
			name : '销量统计',
			data : salesStatistical,
			dataLabels : {
				enabled : false,
				color : '#FFFFFF',
				align : 'right',
				format : '{point.y:.1f}', // one decimal
				y : 0, // 10 pixels down from the top
				style : {
					fontSize : '12px',
					fontFamily : 'Verdana, sans-serif'
				}
			}
		} ]
	});


	/*focusChartsTitle += '<span class="charts-title-ordernum">关注用户总数<i>0</i></span>';
	focusChartsTitle += '<span class="charts-title-ordernum">浏览用户总数<i>0</i></span>';*/
	weixinChart = new Highcharts.Chart("userRegCharts",{
	//$('#focusCharts').highcharts({
				/*chart : {
					type : 'spline',
					renderTo : 'focusCharts'
				},*/
				title : {
					text : weixinChartsTitle,
					align : "left",
					useHTML : true
				},
				xAxis : {
					categories : weixinTimeStatistical
				},
				lang : {
					printChart : "打印",
					downloadPNG : "导出PNG格式图片",
					downloadJPEG : "导出JPEG格式图片",
					downloadPDF : "导出PDF格式图片",
					downloadSVG : "导出SVG格式图片"
				},
				yAxis : {
					title : {
						text : ''
					},
					plotLines : [ {
						value : 0,
						width : 1,
						color : '#808080'
					} ]
				},
				tooltip : {
				// valueSuffix : '°C'
				},
				legend : {
					enabled : false
				},
				credits : {
					enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
					text : '牛酷商城', // 显示的文字
					href : '#', // 链接地址
				},
				exporting : {
					allowHTML : true,
					buttons : {
						contextButton : {
						// text : '导出'
						}
					}
				},
				series : [ {
					name : '关注人数',
					data : weixinStatistical
				}				
				]
			});
	//商品销售额
	saleMoneyChart = new Highcharts.Chart("goods_sales_money",{		
		title : {
			text : "",
			align : "center",
			useHTML : true
		},
		xAxis : {
			categories : saleMoneyTimeStatistical
		},
		lang : {
			printChart : "打印",
			downloadPNG : "导出PNG格式图片",
			downloadJPEG : "导出JPEG格式图片",
			downloadPDF : "导出PDF格式图片",
			downloadSVG : "导出SVG格式图片"
		},
		yAxis : {
			title : {
				text :"元"
			},
			plotLines : [ {
				value : 0,
				width : 1,
				color : '#808080'
			} ]
		},
		tooltip : {
			 valueSuffix : "元"
		},
		legend : {
			enabled : false
		},
		credits : {
			enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
			text : '牛酷商城', // 显示的文字
			href : '#', // 链接地址
		},
		exporting : {
			allowHTML : true,
			buttons : {
				contextButton : {
				// text : '导出'
				}
			}
		},
		series : [ {
			name : '销售额',
			data : saleMoneyStatistical
		}]
	});
	//店铺入驻数量
	shopCreateChart = new Highcharts.Chart("shop_create",{		
		title : {
			text : "",
			align : "center",
			useHTML : true
		},
		xAxis : {
			categories : shopCreateTimeStatistical
		},
		lang : {
			printChart : "打印",
			downloadPNG : "导出PNG格式图片",
			downloadJPEG : "导出JPEG格式图片",
			downloadPDF : "导出PDF格式图片",
			downloadSVG : "导出SVG格式图片"
		},
		yAxis : {
			title : {
				text :"家"
			},
			plotLines : [ {
				value : 0,
				width : 1,
				color : '#808080'
			} ]
		},
		tooltip : {
			 valueSuffix : "家"
		},
		legend : {
			enabled : false
		},
		credits : {
			enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
			text : '牛酷商城', // 显示的文字
			href : '#', // 链接地址
		},
		exporting : {
			allowHTML : true,
			buttons : {
				contextButton : {
				// text : '导出'
				}
			}
		},
		series : [ {
			name : '销售额',
			data : shopCreateStatistical
		}]
	});
	//商品添加数量
	goodsCreateChart = new Highcharts.Chart("goods_create",{		
		title : {
			text : "",
			align : "center",
			useHTML : true
		},
		xAxis : {
			categories : goodsCreateTimeStatistical
		},
		lang : {
			printChart : "打印",
			downloadPNG : "导出PNG格式图片",
			downloadJPEG : "导出JPEG格式图片",
			downloadPDF : "导出PDF格式图片",
			downloadSVG : "导出SVG格式图片"
		},
		yAxis : {
			title : {
				text :"件"
			},
			plotLines : [ {
				value : 0,
				width : 1,
				color : '#808080'
			} ]
		},
		tooltip : {
			 valueSuffix : "件"
		},
		legend : {
			enabled : false
		},
		credits : {
			enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
			text : '牛酷商城', // 显示的文字
			href : '#', // 链接地址
		},
		exporting : {
			allowHTML : true,
			buttons : {
				contextButton : {
				// text : '导出'
				}
			}
		},
		series : [ {
			name : '销售额',
			data : goodsCreateStatistical
		}]
	});
});
$(function(){
	onloadWeiXinFansChart();
	onloadOrderChart();
	getGoodsSalesCharts();
	getShopCreateCharts();
	getgoodsCreateCharts();
	getGoodsCreateCount();
	getUserRegCount();
	getShopCreateCount();
});
/**
 * fans关注图标数据
 * @param e
 */
function onloadWeiXinFansChart() {
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/index/getuserregchartcount",
		async : true,
		success : function(data) {	
			weixinTimeStatistical = data[0];
			weixinChart.update({
				xAxis : {
					categories : weixinTimeStatistical
				},
				series : [ {
					name : "人数(人)",
					data : data[1]
				}]
			})
		}
	});
}

/**
 * 订单数据
 */
function onloadOrderChart() {
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/index/getorderchartcount",
		async : true,
		success : function(data) {	
			//alert(JSON.stringify(data));
		
			salesStatistical = data;
			var series = chart.series;
			while (series.length > 0) {
				series[0].remove(false);
			}
			chart.addSeries({
				data : salesStatistical
			}, false);
			chart.redraw();
		}
	});
}
function getGoodsSalesCharts(){
	//type 走势图类型 2 金额 1 数量
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/index/getgoodssaleschartcount",
		async : true,
		success : function(data) {	
				saleUnit = "元";
				saleNumStatistical = data[0];
				saleMoneyChart.update({
					xAxis : {
						categories : saleNumStatistical
					},
					tooltip : {
						 valueSuffix : saleUnit
					},
					series : [ {
						name : "销售金额",
						data : data[1]
					}],
					yAxis : {
						title : {
							text :saleUnit
						},
						plotLines : [ {
							value : 0,
							width : 1,
							color : '#808080'
						} ]
					},
				})				
		}
	});
}
//入驻店铺统计
function getShopCreateCharts(){
	//type 走势图类型 2 金额 1 数量
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/index/getshopcreatenumchartcount",
		async : true,
		success : function(data) {	
				saleUnit = "家";
				shopCreateTimeStatistical = data[0];
				shopCreateChart.update({
					xAxis : {
						categories : shopCreateTimeStatistical
					},
					tooltip : {
						 valueSuffix : saleUnit
					},
					series : [ {
						name : "入驻店铺数",
						data : data[1]
					}],
					yAxis : {
						title : {
							text :saleUnit
						},
						plotLines : [ {
							value : 0,
							width : 1,
							color : '#808080'
						} ]
					},
				})				
		}
	});
}
//新建商品统计
function getgoodsCreateCharts(){
	//type 走势图类型 2 金额 1 数量
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/index/getgoodscreatechartcount",
		async : true,
		success : function(data) {	
				saleUnit = "件";
				goodsCreateTimeStatistical = data[0];
				goodsCreateChart.update({
					xAxis : {
						categories : goodsCreateTimeStatistical
					},
					tooltip : {
						 valueSuffix : saleUnit
					},
					series : [ {
						name : "添加商品数",
						data : data[1]
					}],
					yAxis : {
						title : {
							text :saleUnit
						},
						plotLines : [ {
							value : 0,
							width : 1,
							color : '#808080'
						} ]
					},
				})				
		}
	});
}
//商品统计详情
function getGoodsCreateCount(){
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/Index/getgoodscreatecount",
		async : true,
		success : function(data) {	
			$("#goods_num_day").text(data.num_day);
			$("#goods_num_yesterday").text(data.num_yesterday);
			$("#goods_num_month").text(data.num_month);
			$("#goods_num_count").text(data.num_count);
			
		}
	})
}
//会员统计详情
function getUserRegCount(){
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/index/getuserregcount",
		async : true,
		success : function(data) {	
			$("#user_num_day").text(data.user_num_day);
			$("#user_num_yesterday").text(data.user_num_yesterday);
			$("#user_num_month").text(data.user_num_month);
			$("#user_num_count").text(data.user_num_count);
			
		}
	})
}
//店铺入驻商品统计详情
function getShopCreateCount(){
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/index/getshopcreatecount",
		async : true,
		success : function(data) {	
			$("#shop_num_day").text(data.shop_num_day);
			$("#shop_num_yesterday").text(data.shop_num_yesterday);
			$("#shop_num_month").text(data.shop_num_month);
			$("#shop_num_count").text(data.shop_num_count);
			
		}
	})
}
</script>
 <!-- <link rel="stylesheet" type="text/css" href="PLATFORM_JS/toastr/toastr.css">
<script type="text/javascript" src="PLATFORM_JS/toastr/toastr.js" charset="utf-8"></script>
<script type="text/javascript">
// function show(){
// 	toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
// 	toastr.success('修改成功');
// }
function showMessage(type, message, url){
	toastr.options.onHidden = function() { 
		alert(url);
		 window.location.href= url; 
	}
	if(type == 'success'){
		toastr.success(message);
	}
	if(type == 'error'){
		toastr.error(message);
	}
		
	
}
// 		function showMessage(type, message,url,time)
// 		{
// 			if(url == undefined){
// 				url = '';
// 			}
// 			if(time == undefined){
// 				time = 2;
// 			}
// 			//成功之后的跳转
// 			if(type == 'success')
// 				{
// 				$( "#dialog" ).dialog({				
// 		            buttons: {
// 		                "确定,#51A351": function() {
// 		                    $(this).dialog('close');
// 		                }
// 		            },
// 		            contentText:message,
// 		      		time:time,
// 		      		timeHref: url,
// 		        });
// 				}
// 			//失败之后的跳转
// 			if(type == 'error')
// 				{
// 				$( "#dialog" ).dialog({				
// 		            buttons: {
// 		                "确定,#e57373": function() {
// 		                    $(this).dialog('close');
// 		                }
// 		            },
// 		            time:time,
// 		            contentText:message,
// 		            timeHref: url,
// 		        });
// 				}
			
// 		}
	</script> -->
<link rel="stylesheet" type="text/css"
	href="PLATFORM_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $title_name; ?>';
</script>
<script type="text/javascript" src="PLATFORM_JS/jquery-ui-private.js"
	charset="utf-8"></script>
<script type="text/javascript" src="PLATFORM_JS/jQuery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
		function showMessage(type, message,url,time)
		{
			if(url == undefined){
				url = '';
			}
			if(time == undefined){
				time = 3;
			}
			//成功之后的跳转
			if(type == 'success')
				{
				$( "#dialog" ).dialog({				
		            buttons: {
		                "确定,#51A351": function() {
		                    $(this).dialog('close');
		                }
		            },
		            contentText:message,
		      		time:time,
		      		timeHref: url,
		        });
				}
			//失败之后的跳转
			if(type == 'error')
				{
				$( "#dialog" ).dialog({				
		            buttons: {
		                "确定,#e57373": function() {
		                    $(this).dialog('close');
		                }
		            },
		            time:time,
		            contentText:message,
		            timeHref: url,
		        });
				}
			
		}
		function showConfirm(content)
		{
			$( "#dialog" ).dialog({				
	            buttons: {
	                "确定,#e57373": function() {
	                    $(this).dialog('close');
	                    return 1;
	                },
	                "取消": function() {
	                    $(this).dialog('close');
	                    return 0;
	                }
	            },
	            contentText:content,
			});
			
		}
	</script>
	<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
	<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
	<script src="PLATFORM_JS/validation/jquery.validate.js" charset="utf-8" cache="false"></script>
	<script src="PLATFORM_JS/validation/messages_zh.js" charset="utf-8" cache="false"></script>
	<!-- wysiwyg -->
	<script src="PLATFORM_JS/wysiwyg/jquery.hotkeys.js" cache="false"></script>
	<script src="PLATFORM_JS/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
	<script src="PLATFORM_JS/wysiwyg/demo.js" cache="false"></script>
	
</body>
</html>