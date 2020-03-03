<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/platform/Config/addBlock.html";i:1579055897;s:27:"template/platform/base.html";i:1579055862;s:44:"template/platform/controlCommonVariable.html";i:1579055862;s:33:"template/platform/openDialog.html";i:1579055862;}*/ ?>
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
<!-- 引入css js style等公共文件  start-->

<style>
.error{
	display:none;
	color:red;
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
							
<section class="panel panel-default">
	<header class="panel-heading font-bold"> 添加版块 </header>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">版块名称</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="block_name" value="">
				</div>
				<p class="error">请输入版块名称</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">简称</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="block_short_name" value="">
				</div>
				<p class="error">请输入版块简称</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">颜色风格</label>
				<div class="col-md-2">
					<input type="color" class="form-control" id="block_color" value="" style="width:74px;height:34px;">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">排序</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="sort" value="">
				</div>
				<p class="error">请输入序号</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">是否显示</label>
				<div class="col-sm-2">
					<label class="switch"> <input id="is_display"
						type="checkbox" checked> <span></span>
					</label>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐单图广告位</label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="recommend_ad_image_name" placeholder="请输入推荐单图广告位名称" value="">
				</div>
				<div class="col-md-3">
					<select name="account" class="form-control m-b"
						id="recommend_ad_image">
						<option value="0">请选择推荐单图广告位</option>
						<?php if(is_array($recommend_ad_image_list) || $recommend_ad_image_list instanceof \think\Collection || $recommend_ad_image_list instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend_ad_image_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va1): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $va1['ap_id']; ?>"><?php echo $va1['ap_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
				<p class="error">推荐单图广告位及名称不能为空</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐多图广告位</label>
				<div class="col-md-3">
					<input type="text" class="form-control"
						id="recommend_ad_images_name" placeholder="请输入推荐多图广告位名称" value="">
				</div>
				<div class="col-md-3">
					<select name="account" class="form-control m-b"
						id="recommend_ad_images">
						<option value="0">请选择推荐多图广告位</option>
						<?php if(is_array($recommend_ad_images_list) || $recommend_ad_images_list instanceof \think\Collection || $recommend_ad_images_list instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend_ad_images_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va2): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $va2['ap_id']; ?>"><?php echo $va2['ap_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
				<p class="error">推荐多图广告位及名称不能为空</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐幻灯片广告位</label>
				<div class="col-md-3">
					<input type="text" class="form-control"
						id="recommend_ad_slide_name" placeholder="请输入推荐幻灯片广告位名称" value="">
				</div>
				<div class="col-md-3">
					<select name="account" class="form-control m-b"
						id="recommend_ad_slide">
						<option value="0">请选择推荐幻灯片广告位</option>
						<?php if(is_array($recommend_ad_slide_list) || $recommend_ad_slide_list instanceof \think\Collection || $recommend_ad_slide_list instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend_ad_slide_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va3): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $va3['ap_id']; ?>"><?php echo $va3['ap_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
				<p class="error">推荐幻灯片广告位及名称不能为空</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐商品1</label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="recommend_goods_category_name_1" placeholder="请输入推荐分类商品别名" value="">
				</div>
				<select name="account" class="form-control m-b category_first" id="goods_category_first_1" style="width:145px;height:34px;display:inline-block;">
					<option value="0">请选择一级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 1): ?>
							<option value="<?php echo $vo['category_id']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<select name="account" class="form-control m-b hides category_second" id="goods_category_second_1" style="width:145px;height:34px;">
					<option value="0">请选择二级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 2): ?>
							<option value="<?php echo $vo['category_id']; ?>" pid="<?php echo $vo['pid']; ?>" style="display: none;"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<select name="account" class="form-control m-b hides category_three" id="goods_category_three_1"  style="width:145px;height:34px;">
					<option value="0">请选择三级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 3): ?>
							<option value="<?php echo $vo['category_id']; ?>" pid="<?php echo $vo['pid']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<p class="error"><label class="col-sm-2 control-label" style="margin-right: 12px;"></label>推荐分类商品别名及分类选择不可为空</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐商品2</label>
				<div class="col-md-3">
					<input type="text" class="form-control"
						id="recommend_goods_category_name_2" placeholder="请输入推荐分类商品别名"
						value="">
				</div>
				<select name="account" class="form-control m-b category_first" id="goods_category_first_2" style="width:145px;height:34px;display:inline-block;">
					<option value="0">请选择一级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 1): ?>
							<option value="<?php echo $vo['category_id']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<select name="account" class="form-control m-b hides category_second" id="goods_category_second_2" style="width:145px;height:34px;">
					<option value="0">请选择二级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 2): ?>
							<option value="<?php echo $vo['category_id']; ?>" pid="<?php echo $vo['pid']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<select name="account" class="form-control m-b hides category_three" id="goods_category_three_2"  style="width:145px;height:34px;">
					<option value="0">请选择三级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 3): ?>
							<option value="<?php echo $vo['category_id']; ?>" pid="<?php echo $vo['pid']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<p class="error"><label class="col-sm-2 control-label" style="margin-right: 12px;"></label>推荐分类商品别名及分类选择不可为空</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐商品3</label>
				<div class="col-md-3">
					<input type="text" class="form-control"
						id="recommend_goods_category_name_3" placeholder="请输入推荐分类商品别名"
						value="">
				</div>
				<select name="account" class="form-control m-b category_first" id="goods_category_first_3" style="width:145px;height:34px;display:inline-block;">
					<option value="0">请选择一级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 1): ?>
							<option value="<?php echo $vo['category_id']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<select name="account" class="form-control m-b hides category_second" id="goods_category_second_3" style="width:145px;height:34px;">
					<option value="0">请选择二级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 2): ?>
							<option value="<?php echo $vo['category_id']; ?>" pid="<?php echo $vo['pid']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<select name="account" class="form-control m-b hides category_three" id="goods_category_three_3"  style="width:145px;height:34px;">
					<option value="0">请选择三级分类</option>
					<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['level'] == 3): ?>
							<option value="<?php echo $vo['category_id']; ?>" pid="<?php echo $vo['pid']; ?>"><?php echo $vo['category_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<p class="error"><label class="col-sm-2 control-label" style="margin-right: 12px;"></label>推荐分类商品别名及分类选择不可为空</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐品牌</label>
				<div class="col-sm-10">
				<?php if(is_array($goods_brand_list) || $goods_brand_list instanceof \think\Collection || $goods_brand_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_brand_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?>
					<label class="checkbox-inline"> <input type="checkbox"
						name="recommend_brands" value="<?php echo $vb['brand_id']; ?>"> <?php echo $vb['brand_name']; ?>
					</label>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">推荐商品分类</label>
				<div class="col-sm-10">
				<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($i % 2 );++$i;?>
					<label class="checkbox-inline"> <input type="checkbox"
						name="recommend_categorys" value="<?php echo $vc['category_id']; ?>"> <?php echo $vc['category_name']; ?>
					</label>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>



			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<a href="javascript:void(0);" onclick="addBlockAjax()"
						class="btn btn-primary">保存</a>
				</div>
			</div>
		</form>
	</div>
</section>
<script>	
$(function(){
	$('.category_first').change(function(){
		var pid = $(this).val();
		//alert(JSON.stringify($(this).parent().html()));
		var obj_category_second = $(this).parent().children('.category_second');
		//obj_category_second.show();
		obj_category_second.children('option:gt(0)').hide().parent().hide();
		var category_second_option_obj = obj_category_second.children('option[pid="'+pid+'"]')
		category_second_option_obj.show().parent().show();
		obj_category_second.val(0);
		obj_category_second.trigger('change');
	})
	$('.category_second').change(function(){
		var pid = $(this).val();
		var obj_category_three = $(this).parent().children('.category_three')
		obj_category_three.val(0);
		obj_category_three.children('option:gt(0)').hide().parent().hide();
		obj_category_three.children('option[pid="'+pid+'"]').show().parent().show();
	})
})


	/**
	*添加广告位
	*/
	function addBlockAjax() {
		var block_name = $("#block_name").val();
		var block_short_name = $("#block_short_name").val();
		var block_color = $("#block_color").val();
		var sort = $("#sort").val();
		if($("#is_display").prop("checked")){
			var is_display = 1;
		}else{
			var is_display = 0;
		}
		var recommend_ad_image_name = $("#recommend_ad_image_name").val();
		var recommend_ad_image = $("#recommend_ad_image").val();
		var recommend_ad_images_name = $("#recommend_ad_images_name").val();
		var recommend_ad_images = $("#recommend_ad_images").val();
		var recommend_ad_slide_name = $("#recommend_ad_slide_name").val();
		var recommend_ad_slide = $("#recommend_ad_slide").val();
		var recommend_brands = '';
		$("input[type='checkbox'][name='recommend_brands']:checked").each(function(){ 
			recommend_brands += $(this).val()+","; 
		});
		recommend_brands = recommend_brands.substring(0,recommend_brands.length-1);
		var recommend_categorys = '';
		$("input[type='checkbox'][name='recommend_categorys']:checked").each(function(){ 
			recommend_categorys += $(this).val()+","; 
		});
		recommend_categorys = recommend_categorys.substring(0,recommend_categorys.length-1);
		var recommend_goods_category_name_1 = $("#recommend_goods_category_name_1").val();
// 		var recommend_goods_category_1 = $("#recommend_goods_category_1").val();
		var recommend_goods_category_name_2 = $("#recommend_goods_category_name_2").val();
// 		var recommend_goods_category_2 = $("#recommend_goods_category_2").val();
		var recommend_goods_category_name_3 = $("#recommend_goods_category_name_3").val();
// 		var recommend_goods_category_3 = $("#recommend_goods_category_3").val();
		if($("#goods_category_three_1").val() > 0){
			var recommend_goods_category_1 = $("#goods_category_three_1").val();
		}else if($("#goods_category_second_1").val() > 0){
			var recommend_goods_category_1 = $("#goods_category_second_1").val();
		}else{
			var recommend_goods_category_1 = $("#goods_category_first_1").val();
		}
		if($("#goods_category_three_2").val() > 0){
			var recommend_goods_category_2 = $("#goods_category_three_2").val();
		}else if($("#goods_category_second_2").val() > 0){
			var recommend_goods_category_2 = $("#goods_category_second_2").val();
		}else{
			var recommend_goods_category_2 = $("#goods_category_first_2").val();
		}
		if($("#goods_category_three_3").val() > 0){
			var recommend_goods_category_3 = $("#goods_category_three_3").val();
		}else if($("#goods_category_second_3").val() > 0){
			var recommend_goods_category_3 = $("#goods_category_second_3").val();
		}else{
			var recommend_goods_category_3 = $("#goods_category_first_3").val();
		}
		
		if(verify(block_name, recommend_ad_image_name, recommend_ad_image, recommend_ad_images_name, recommend_ad_images, recommend_ad_slide_name, recommend_ad_slide,
				recommend_goods_category_name_1, recommend_goods_category_1, recommend_goods_category_name_2, recommend_goods_category_2, recommend_goods_category_name_3, recommend_goods_category_3)){
// 		alert(block_name);
// 		alert(block_short_name);
// 		alert(block_color);
// 		alert(sort);
// 		alert(is_display);
// 		alert(recommend_ad_image_name);
// 		alert(recommend_ad_image);
// 		alert(recommend_ad_images_name);
// 		alert(recommend_ad_images);
// 		alert(recommend_ad_slide_name);
// 		alert(recommend_ad_slide);
// 		alert(recommend_brands);
// 		alert(recommend_categorys);
// 		alert(recommend_goods_category_name_1);
// 		alert(recommend_goods_category_1);
// 		alert(recommend_goods_category_name_2);
// 		alert(recommend_goods_category_2);
// 		alert(recommend_goods_category_name_3);
// 		alert(recommend_goods_category_3);
//  		verify(ad_image, link_url);
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/Config/addBlock",
			data : {
				'block_name' : block_name,
				'block_short_name' : block_short_name,
				'block_color' : block_color,
				'sort' : sort,
				'is_display' : is_display,
				'recommend_ad_image_name' : recommend_ad_image_name,
				'recommend_ad_image' : recommend_ad_image,
				'recommend_ad_images_name' : recommend_ad_images_name,
				'recommend_ad_images' : recommend_ad_images,
				'recommend_ad_slide_name' : recommend_ad_slide_name,
				'recommend_ad_slide' : recommend_ad_slide,
				'recommend_brands' : recommend_brands,
				'recommend_categorys' : recommend_categorys,
				'recommend_goods_category_name_1' : recommend_goods_category_name_1,
				'recommend_goods_category_1' : recommend_goods_category_1,
				'recommend_goods_category_name_2' : recommend_goods_category_name_2,
				'recommend_goods_category_2' : recommend_goods_category_2,
				'recommend_goods_category_name_3' : recommend_goods_category_name_3,
				'recommend_goods_category_3' : recommend_goods_category_3
			},
			async : true,
			success : function(data) {
				if (data["code"] > 0) {
					showMessage('success', "添加成功",'PLATFORM_MAIN/Config/blockList');
				}else{
					showMessage('error', "添加失败");
				}
			}
		});
		
		}
	}
	/**
	*模块输入信息验证
	*/
	function verify(
			block_name, 
			recommend_ad_image_name, recommend_ad_image, 
			recommend_ad_images_name, recommend_ad_images, 
			recommend_ad_slide_name, recommend_ad_slide,
			recommend_goods_category_name_1, recommend_goods_category_1, 
			recommend_goods_category_name_2, recommend_goods_category_2, 
			recommend_goods_category_name_3, recommend_goods_category_3
			){
		if(block_name == ''){
			$("#block_name").parent().next().show();
			$("#block_name").focus();
			return false;
		}else{
			$(".error").hide();
		}
		
		if(recommend_ad_image_name == ''){
			$("#recommend_ad_image_name").parent().next().next().show();
			return false;
		}else if(recommend_ad_image == 0){
			$("#recommend_ad_image").parent().next().show();
			return false;
		}else{
			$(".error").hide();
		}
		if(recommend_ad_images_name == ''){
			$("#recommend_ad_images_name").parent().next().next().show();
			return false;
		}else if(recommend_ad_images == 0){
			$("#recommend_ad_images").parent().next().show();
			return false;
		}else{
			$(".error").hide();
		}
		if(recommend_ad_slide_name == ''){
			$("#recommend_ad_slide_name").parent().next().next().show();
			return false;
		}else if(recommend_ad_slide == 0){
			$("#recommend_ad_slide").parent().next().show();
			return false;
		}else{
			$(".error").hide();
		}
		if(recommend_goods_category_name_1 == '' || recommend_goods_category_1 == 0){
			$("#recommend_goods_category_name_1").parent().siblings('.error').show();
			return false;
		}else{
			$(".error").hide();
		}
		if(recommend_goods_category_name_2 == '' || recommend_goods_category_2 == 0){
			$("#recommend_goods_category_name_2").parent().siblings('.error').show();
			return false;
		}else{
			$(".error").hide();
		}
		if(recommend_goods_category_name_3 == '' || recommend_goods_category_3 == 0){
			$("#recommend_goods_category_name_3").parent().siblings('.error').show();
			return false;
		}else{
			$(".error").hide();
		}
		return true;
	}
</script>

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