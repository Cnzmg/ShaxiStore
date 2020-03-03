<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:44:"template/admin/Goods/selectCategoryNext.html";i:1581654293;s:24:"template/admin/base.html";i:1581654310;s:41:"template/admin/controlCommonVariable.html";i:1581654310;s:57:"template/admin/Goods/controlEditGoodsCommonResources.html";i:1581654292;s:38:"template/admin/Goods/fileAlbumImg.html";i:1581654292;s:52:"template/admin/Goods/controlEditGoodsCommonHTML.html";i:1581654292;s:54:"template/admin/Goods/controlEditGoodsCommonScript.html";i:1581654292;s:30:"template/admin/pageCommon.html";i:1581654310;s:30:"template/admin/openDialog.html";i:1581654310;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<meta charset="UTF-8">
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
		<link rel="shortcut icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
		<link rel="stylesheet" type="text/css" href="__STATIC__/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/bootstrap/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/seller_center.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
		<style>
		.wrapper{width:1268px;}
		.help-block{color:red;}
		.ncsc-admin-info{cursor: pointer;}
		.ncsc-path a{text-decoration:none;}
		.is-upgrade{width: 7px;height: 7px;background: red;border-radius: 50%;position: absolute;z-index: 5;bottom: 9px;display: none;}
		.modal-header:hover{cursor: move;}
		</style>
		<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
		<script src="__STATIC__/bootstrap/js/bootstrap.js"></script>
		<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
		<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
		<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
		<script src="__STATIC__/js/common.js"></script>
		<script src="__STATIC__/js/seller.js"></script>
		<script src="__STATIC__/js/load_task.js"></script>
		<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
		<script src="ADMIN_JS/jquery-ui.min.js"></script>
		<script src="ADMIN_JS/ns_tool.js"></script>
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
</script>
		
<!-- 编辑商品时，用到的JS、CSS资源 -->
<!-- 编辑商品，公共CSS、JS文件引用 -->
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<!-- 选择商品图，弹出框的样式 -->
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<link href="__STATIC__/sku/jquery.ui.css" type="text/css" rel="stylesheet">
<link href="__STATIC__/sku/goods_create.css" type="text/css" rel="stylesheet">
<link href="__STATIC__/sku/base.css" type="text/css" rel="stylesheet">
<link href='ADMIN_CSS/drag_haul/jquery.gridly.css' rel='stylesheet' type='text/css'>
<link href='ADMIN_CSS/drag_haul/sample.css' rel='stylesheet' type='text/css'>
<link href='ADMIN_CSS/select_category_next.css' rel='stylesheet' type='text/css'>
<link href="ADMIN_CSS/goods/editgoods.css" rel="stylesheet" type="text/css">
<script type="text/javascript" charset="utf-8" src="ADMIN_JS/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="ADMIN_JS/ueditor/ueditor.all.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="ADMIN_JS/ueditor/zh-cn.js"></script>
<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script>
<script src="ADMIN_JS/image_common.js" type="text/javascript"></script>
<script src="ADMIN_JS/kindeditor-min.js" type="text/javascript"></script>
<!--  用  验证商品输入信息-->
<script src="ADMIN_JS/jscommon.js" type="text/javascript"></script>
<!-- 用 ，加载数据-->
<script src="ADMIN_JS/art_dialog.source.js"></script>
<script src="ADMIN_JS/iframe_tools.source.js"></script>
<!-- 我的图片 -->
<script src="ADMIN_JS/material_managedialog.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script src='ADMIN_JS/goods/init_address.js'></script>
<script src="ADMIN_JS/goods/release_good_second.js"></script>
<script type="text/javascript" src="ADMIN_JS/goods/goods_sku_create.js"></script>
<script type="text/javascript" src="ADMIN_JS/plugin/jquery.toTop.min.js"></script>
<style>
.category-text{
	display:inline-block;
	background-color:#FFF;
	min-width:150px;
	height:30px;
	line-height:30px;
	border:1px solid #dcdcdc;
	float:left;
}
.category-button{
	display:inline-block;
	background-color:#FFF;
	height:32px;
	line-height:32px;
	float:left;
	border:1px solid #dcdcdc;
	border-left:none;
	padding-left:10px;
	padding-right:10px;
	background-color:#eee;
	font-size:13px;
}
.select-button{
	padding-left:9px;
	padding-right:9px;
	padding-top:2px;
	padding-bottom:2px;
	font-size:12px;
	border:1px solid #dcdcdc;
	background-color:#eeeeee;
}
.extend-name-category{
	margin-bottom:10px;
}
.extend-name-category .do-style{
	display:inline-block;
	/* margin-left:5px; */
	color:#27a9e3;
	cursor:pointer;
}

/* 商品标签 */
.gruop-button{
	padding-left: 9px;
    padding-right: 9px;
    padding-top: 4px;
    padding-bottom: 4px;
    font-size: 12px;
    border: 1px solid #dcdcdc;
    background-color: #eeeeee;
	float:left;
}
.add-on{
	margin:0;
    vertical-align: middle;	
}
.goods-gruop-div{
	display:none;
	float:left;
	margin-left:10px;
}
.check-button{
	height:30px;
	padding-left: 9px;
    padding-right: 9px;
    padding-top: 2px;
    padding-bottom: 2px;
	font-size:12px;
	background-color:#eeeeee;
	border:1px solid #cccccc;
}
.goods-gruop-select{
	width:130px;
}
.span-error{
	height:30px;
	line-height:30px;
	color:red;
	display:none;
}
</style>
<script>
var timeoutID = null;//延迟双击编辑规格值
var img_id_arr = "";//图片标识ID
var speciFicationsFlag = 0;// 0：商品图的选择，1:商品详情的图片
var shopImageFlag = -1;//所点击的商品图片标识
var goodsFigure = null;//商品图对象
// 实例化编辑器，建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
var ue = UE.getEditor('editor');
</script>

	</head>
<body>
<header class="ncsc-head-layout">
	<div class="wrapper">
		<div class="ncsc-admin">
			<div class="ncsc-admin-headimg">
			<?php if($user_headimg != ''): ?>
				<img src="__ROOT__/<?php echo $user_headimg; ?>"/>
			<?php else: ?>
				<img src="__STATIC__/images/default_user_portrait.gif"/>
			<?php endif; ?>
			</div>
			<span class="user-name ncsc-admin-info" data-toggle="dropdown"><?php echo $user_name; ?></span>
			<a class="ncsc-admin-a ncsc-admin-info" data-toggle="dropdown"><i class="ncsc-admin-i ncsc-admin-down"></i></a>
			<a class="ncsc-admin-a h40"><i class="ncsc-admin-line"></i></a>
			<a class="ncsc-admin-a" href="SHOP_MAIN" target="_blank"><i class="ncsc-admin-i ncsc-admin-home"></i></a>
			<a class="ncsc-admin-a" href="ADMIN_MAIN/login/logout" title="安全退出管理中心"><i class="ncsc-admin-i ncsc-admin-off"></i></a>
			<div class="user-operation dropdown-menu">
				<a href="javascript:;" title="修改密码" onclick="editpassword()"><i class="fa fa-wrench"></i>修改密码</a>
				<a href="javascript:;" title="更新缓存" onclick="delcache()"><i class="fa fa-send"></i>更新缓存</a>
			</div>
		</div>
		<div class="center-logo">
			<a href="ADMIN_MAIN"><img src="ADMIN_IMG/shop_logo.png"/></a>
		</div>
		<div class="index-search-container" style="position: relative;">
			<div class="index-sitemap" onclick="nav_open()">
				<a href="javascript:void(0);">导航管理<i class="icon-angle-down"></i></a>
				<div class="sitemap-menu" style="display: none; z-index: 1000;">
					<div class="title-bar" onclick="nav_close()">
						<h2>
							<i class="icon-sitemap"></i>管理导航<em></em>
						</h2>
						<span id="closeSitemap" class="close">X</span>
					</div>
					<div id="quicklink_list" class="content">
						<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
						<dl>
							<dt><?php echo $nav['data']['module_name']; ?></dt>
							<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
							<dd>
								<a href="ADMIN_MAIN/<?php echo $nav_sub['url']; ?>"> <?php echo $nav_sub['module_name']; ?></a>
							</dd>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</dl>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			<div class="search-bar">
				<input type="hidden" name="act" value="search" /> 
				<input type="text" id="search_goods" name="keyword" placeholder="商品搜索" class="search-input-text" />
				<input type="submit" class="search-input-btn pngFix" onclick="search()" value="" />
			</div>
		</div>
		<nav class="ncsc-nav">
			<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
			<dl class="current_nav" onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
				<dt>
					<a href="ADMIN_MAIN/<?php echo $per['url']; ?>"><?php echo $per['module_name']; ?></a>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</dt>
				<dd class="arrow"></dd>
			</dl>
			<?php else: ?>
			<dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
				<dt>
					<a href="ADMIN_MAIN/<?php echo $per['url']; ?>"><?php echo $per['module_name']; ?></a>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</dt>
			</dl>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</nav>
	</div>
</header>

<!-- 左边菜单的加载 -->
<div class="MAIN" style="min-height: 94vh;">
	
	<div class="LEFT">
		<div id="accordion2" class="accordion leftmenu">
			<div class="accordion-group">
				<div class="sidebarX">
					<?php if($frist_menu['module_picture'] != ''): ?>
					<img src="__UPLOAD__/<?php echo $frist_menu['module_picture']; ?>" />
					<?php else: ?>
					<img src="__STATIC__/images/admin_left_logo.png" />
					<?php endif; ?>
					<h2><?php echo $frist_menu['module_name']; ?></h2>
				</div>
				<div class="accordion-body collapse in" id="collapseOne">
					<ul class="nav nav-pills nav-stacked" id="left_menu-small">
						<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
						<li class="active"><h1></h1><a href="ADMIN_MAIN/<?php echo $leftitem['url']; ?>"><?php echo $leftitem['module_name']; ?></a></li>
						<?php else: ?>
						<li><a href="ADMIN_MAIN/<?php echo $leftitem['url']; ?>"><?php echo $leftitem['module_name']; ?></a></li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 右边主要内容的加载 -->
	<div class="RIGHT">
		<div class="ncsc-path">
			<a href="ADMIN_MAIN"><i class="icon-desktop"></i><?php echo $title_name; ?></a>
			<?php if($frist_menu['module_name'] != ''): ?>
			<i class="icon-angle-right"></i>
			<a href="ADMIN_MAIN/<?php echo $frist_menu['url']; ?>"><?php echo $frist_menu['module_name']; ?></a>
			<?php endif; if($secend_menu['module_name'] != ''): ?>
			<i class="icon-angle-right"></i>
				<!-- 需要加跳转链接用这个：ADMIN_MAIN/<?php echo $secend_menu['url']; ?> -->
				<a href="javascript:;"><?php echo $secend_menu['module_name']; ?></a>
			<?php endif; ?>
		</div>
		<!--顶部边框开始  -->
		<div class="tabmenu">
			<ul class="tab pngFix">
				<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
				<li class="active"><a href="ADMIN_MAIN/<?php echo $child_menu['url']; ?>"><?php echo $child_menu['menu_name']; ?></a></li>
				<?php else: ?>
				<li class="daohang_no"><a href="ADMIN_MAIN/<?php echo $child_menu['url']; ?>"><?php echo $child_menu['menu_name']; ?></a></li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="right_side_operation">
				<ul>
					
					<li><a class="nscs-table-handle_green" href="javascript:;" style="display: none;">右侧按钮测试</a></li>
					
				</ul>
			</div>
		</div>
		<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;"  />
		<div class="main">
			
<div class="ncsc-form-goods">
	<h3 class="js-goods-info">商品信息</h3>
	<dl>
		<dt><i class="required">*</i>商品分类：</dt>
		<dd id="tbcNameCategory" data-flag="category" data-goods-id="0" cid="" data-attr-id="" cname="">
			<span class="category-text" ></span>
			<button class="category-button">选择</button>
			<span><label for="g_name" class="error"><i class="icon-exclamation-sign"></i>商品分类不能为空</label></span>
			<span class="help-inline">请选择商品分类</span>
		</dd>
	</dl>
	<dl>
		<dt>扩展分类：</dt>
		<dd id = "extend_name_category_box">
			<div class="extend-name-category-box">	
			</div>
			<div class="clear">
			<button  class="select-button"onclick="addExtentCategoryBox();"><i class="fa fa-plus-square"></i>&nbsp;添加</button>
			</div>
		
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>商品名称：</dt>
		<dd>
			<input class="productname" type="text" id="txtProductTitle" placeholder="请输入商品名称，不能超过60个字" />
			<span class="help-inline">请填写商品名称</span>
		</dd>
	</dl>
	<dl>
		<dt>商品促销语：</dt>
		<dd>
			<input class="productname" type="text" id="txtIntroduction" placeholder="请输入促销语，不能超过60个字符" />
			<span class="help-inline">商品促销语输入不正确</span>
		</dd>
	</dl>
	<dl>
		<dt>关键词：</dt>
		<dd>
			<input class="productname" type="text" id="txtKeyWords" placeholder="商品关键词用于SEO搜索" />
			<span class="help-inline">请输入商品促销语，不能超过40个字符</span>
		</dd>
	</dl>
	<dl>
		<dt>供货商：</dt>
		<dd>
			<select id="supplierSelect">
				<option value="0">请选择供货商</option>
					<?php if(is_array($supplier_list) || $supplier_list instanceof \think\Collection || $supplier_list instanceof \think\Paginator): if( count($supplier_list)==0 ) : echo "" ;else: foreach($supplier_list as $key=>$sup): ?>
						<option value="<?php echo $sup['supplier_id']; ?>"><?php echo $sup['supplier_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<span class="help-inline">请选择商品类型</span>
		</dd>
	</dl>
	<dl>
		<dt>市场价：</dt>
		<dd>
			<input class="goods_price" type="number"  id="txtProductMarketPrice" min="0" placeholder="0" /><em class="add-on">元</em>
			<span class="help-inline">商品市场不能为空且需是数字</span> 
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>销售价：</dt>
		<dd>
			<input class="goods_price" type="number" id="txtProductSalePrice" min="0" placeholder="0" /><em class="add-on">元</em>
			<span class="help-inline">商品现价不能为空且需是数字</span>
		</dd>
	</dl>
	<dl>
		<dt>成本价：</dt>
		<dd>
			<input class="goods_price" type="number"  id="txtProductCostPrice" min="0" placeholder="0" /><em class="add-on">元</em>
			<span class="help-inline">商品成本不能为空且需是数字</span>
		</dd>
	</dl>
	<dl>
		<dt>基础销量：</dt>
		<dd>
			<input type="number" class="span1" id="BasicSales" placeholder="0" />
			<span class="help-inline">基础销量需是数字</span>
		</dd>
	</dl>
	<dl>
		<dt>基础点击数：</dt>
		<dd>
			<input type="number" class="span1" id="BasicPraise" placeholder="0" />
			<span class="help-inline">基础点击数需是数字</span>
		</dd>
	</dl>
	<dl>
		<dt>基础分享数：</dt>
		<dd>
			<input type="number" class="span1" id="BasicShare" placeholder="0" />
			<span class="help-inline">基础分享数需是数字</span>
		</dd>
	</dl>
	<dl>
		<dt>商家编码：</dt>
		<dd>
			<input type="text" id="txtProductCodeA" placeholder="请输入商家编码" />
			<span class="help-inline">请输入商家编码，不能超过40个字符</span>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>总库存：</dt>
		<dd>
			<input type="number" class="goods-stock" id="txtProductCount" min="0" value="0" />
			<span class="help-inline">请输入总库存数量，必须是大于0的整数</span>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>库存预警：</dt>
		<dd>
			<input type="number" class="goods-stock"  id="txtMinStockLaram" min="0" value="0" />
			<span class="help-inline">请输入库存预警数，必须是大于0的整数</span>
			<p class="hint">设置最低库存预警值。当库存低于预警值时商家中心商品列表页库存列红字提醒。<br>0为不预警。</p>
		</dd>
	</dl>

	<h3 class="js-goods-type">商品类型</h3>
	<dl>
		<dt>商品类型：</dt>
		<dd>
			<select id="goodsType">
				<option value="0">请选择商品类型</option>
				<?php if(is_array($goods_attribute_list) || $goods_attribute_list instanceof \think\Collection || $goods_attribute_list instanceof \think\Paginator): if( count($goods_attribute_list)==0 ) : echo "" ;else: foreach($goods_attribute_list as $key=>$attribute): if($goods_attr_id == $attribute['attr_id']): ?>
				<option value="<?php echo $attribute['attr_id']; ?>" selected="selected"><?php echo $attribute['attr_name']; ?></option>
				<?php else: ?>
				<option value="<?php echo $attribute['attr_id']; ?>"><?php echo $attribute['attr_name']; ?></option>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<span class="help-inline">请选择商品类型</span>
		</dd>
	</dl>
	<dl>
		<dt><span class="color-red"></span></dt>
		<dd>
			<table class="goods-sku js-goods-sku"></table>
		</dd>
	</dl>
	<dl class="control-group js-spec-table" name="skuTable" style="display: none;">
		<dt><span class="color-red"></span>商品库存：</dt>
		<dd>
			<div class="controls">
				<div class="js-goods-stock control-group" style="font-size: 14px; margin-top: 10px;">
					<div id="stock-region" class="sku-group"> 
						<table class="table-sku-stock">
							<thead></thead>
							<tbody></tbody>
							<tfoot></tfoot>
						</table>
					</div>
				</div>
			</div>
		</dd>
	</dl>
	<dl class="control-group js-goods-attribute-block" style="display:none;">
		<dt><span class="color-red"></span>商品属性：</dt>
		<dd>
			<div class="controls">
				<table class="goods-sku-attribute js-goods-sku-attribute" style="margin:0;"></table>
			</div>
		</dd>
	</dl>

	<h3 class="js-goods-img">商品图片</h3>
	<dl>
		<dt><i class="required">*</i>商品图片：</dt>
		<dd>
			<div id="goods_picture_box"class="controls" style="background-color:#FFF;border: 1px solid #E9E9E9;">
				<div class="ncsc-goods-default-pic">
					<div class="goodspic-uplaod" style="padding: 15px;">
						<div class='img-box' style="min-height:160px;">
							<div class="upload-thumb" id="default_uploadimg"> 
								<img src="ADMIN_IMG/album/default_goods_image_240.gif">
							</div>
						</div>
						<div class="clear"></div>
						<span class="img-error">最少需要一张图片作为商品主图</span>
						<p class="hint">上传商品图片，<font color="red">第一张图片将作为商品主图</font>,支持同时上传多张图片,多张图片之间可随意调整位置；支持jpg、gif、png格式上传或从图片空间中选择，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存在图片空间的默认分类中。</p>
						<div class="handle">
							<div class="ncsc-upload-btn">
								<a href="javascript:void(0);">
									<span>
										<input style="cursor:pointer;font-size:0;" type="file" id="fileupload" hidefocus="true" class="input-file" name="file_upload"multiple="multiple" />
									</span>
									<p>图片上传</p>
								</a>
							</div>
							<a class="ncsc-btn mt5"  id="img_box"nctype="show_image" href="javascript:void(0);">从图片空间选择</a>
						</div>
					</div>
				</div>
			</div>
			<span class="help-inline">最少需要一张图片作为商品主图</span>
		</dd>
	</dl>
	<dl>
		<dt><i class="required"></i>规格图片：</dt>
		<dd>
			<div class="sku-picture-div">
				<!-- <span class="sku-picture-span sku-picture-active">颜色</span>
				<span class="sku-picture-span">尺码</span>
				<span class="sku-picture-span">款式</span> -->
			</div>
			<div class="clear"></div>
			<div class="sku-picture-box">
		 		<!-- <div>
					<h4 class="sku-picture-h3">蓝色</h4>
					<div class="controls" style="background-color:#FFF;border: 1px solid #E9E9E9;">
						<div class="ncsc-goods-default-pic">
							<div class="goodspic-uplaod" style="padding: 15px;">
								<div class='sku-img-box' style="min-height:160px;">
									<div class="upload-thumb" id="sku_default_uploadimg"> 
										<img src="ADMIN_IMG/album/default_goods_image_240.gif">
									</div>
								</div>
								<div class="clear"></div>
								<span class="img-error">最少需要一张图片作为商品主图</span>
								<p class="hint">上传商品图片，<font color="red">第一张图片将作为商品主图</font>,支持同时上传多张图片,多张图片之间可随意调整位置；支持jpg、gif、png格式上传或从图片空间中选择，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存在图片空间的默认分类中。</p>
								<div class="handle">
									<div class="ncsc-upload-btn">
										<a href="javascript:void(0);">
											<span>
												<input style="cursor:pointer;font-size:0;" file_type="sku" spec_id="1" spec_value_id="2"type="file"  hidefocus="true" class="input-file" name="file_upload"multiple="multiple" />
											</span>
											<p>图片上传</p>
										</a>
									</div>
									<a class="ncsc-btn mt5"  id="img_box"nctype="show_image" href="javascript:void(0);">从图片空间选择</a>
								</div>
							</div>
						</div>
					</div>				
				</div>  -->
			</div>
			
		</dd>
	</dl>
	<style>
.upload-thumb{
	display:block !important;
	float:left;
	width:147px !important;
	height:147px !important;
	position:relative;
}
.upload-thumb img{
	width:100%;
	height:100%;
}
.img-box, .sku-img-box{
	overflow:hidden;
}
.off-box, .sku-off-box{
	position:absolute;
	width:18px;
	height:18px;
	right:0;
	top:0;
	line-height: 18px;
	background-color:#FFF;
	cursor:pointer;
}

.black-bg{
	position:absolute;
	right:0;
	top:0;
	left:0;
	bottom:0;
	background-color:rgba(0,0,0,0.3);	
}
.img-error{
	color:red;s
	height:25px;
	line-height:25px;
	display:none;
}
</style>
<script src="ADMIN_JS/drag-arrange.js" type="text/javascript" charset="utf-8"></script>
<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script> 
<script type="text/javascript" src="__STATIC__/js/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="__STATIC__/js/jquery.fileupload.js" charset="utf-8"></script>

<input type="hidden" id="album_id"value="<?php foreach($album_list as $vo): if($vo['is_default'] == '1'): ?><?php echo $vo['album_id']; endif; endforeach; ?>"/>
<script type="text/javascript">
var dataAlbum
$(function() {
	//给图片更换位置事件
	$('.draggable-element').arrangeable();
	
  	var album_id = $("#album_id").val();
  	dataAlbum = {
  			"album_id" : album_id,
  			"type" : "1,2,3,4",
  			'file_path' : UPLOADGOODS
  		};
    // ajax 上传图片
    var upload_num = 0; // 上传图片成功数量
    $('#fileupload').fileupload({
        url: 'ADMIN_MAIN/upload/photoalbumupload',
        dataType: 'json',
        formData:dataAlbum,
        add: function (e,data) {
        	$("#goods_picture_box .img-error").hide();
        	$("#goods_picture_box #default_uploadimg").remove();
        	//显示上传图片框
        	var html = "";
        	$.each(data.files, function (index, file) {
        		html +='<div class="upload-thumb draggable-element"  nstype="' + file.name + '">'; 
        		html +='<img nstype="goods_image" src="ADMIN_IMG/album/uoload_ing.gif">';  
        		html +='<input type="hidden"  class="upload_img_id" nstype="goods_image" value="">'; 
        		html +='<div class="black-bg hide">'; 
        		html +='<div class="off-box">&times;</div>'; 
            	html +='</div>'; 
        		html +='</div>'; 
            });
            $(html).appendTo('#goods_picture_box .img-box');
          //模块可拖动事件
        	$('#goods_picture_box .draggable-element').arrangeable();
        	data.submit();    	
        },
        done: function (e,data) {
        	var param = data.result;
            $this = $('#goods_picture_box div[nstype="' + param.origin_file_name + '"]');
           if(param.state > 0){
	           	$this.removeAttr("nstype");
	           	$this.children("img").attr("src","__UPLOAD__/"+param.file_name);
	           	$this.children("input[type='hidden']").val(param.file_id);           	
            }else{
            	$this.remove();
            	$("#goods_picture_box .img-error").text("请检查您上传的文件是否有误").show();               	
            }                   
        }      
    })
    
  

    //图片幕布出现
    $(".draggable-element").live('mouseenter',function(){  
    	  $(this).children(".black-bg").show();
    });
  	//图片幕布消失
    $(".draggable-element").live('mouseleave',function(){    	
  	  $(this).children(".black-bg").hide();
  	});
  	
  //sku图片幕布出现
    $(".sku-draggable-element").live('mouseenter',function(){  
    	  $(this).children(".black-bg").show();
    });
  	//sku图片幕布消失
    $(".sku-draggable-element").live('mouseleave',function(){    	
  	  $(this).children(".black-bg").hide();
  	});
  	
  	//删除页面图片元素
    $(".off-box").live('click',function(){ 
    	if($(".img-box .upload-thumb").length == 1){
    		var html = "";
    		html +='<div class="upload-thumb" id="default_uploadimg">';
    		html +='<img nstype="goods_image" src="ADMIN_IMG/album/default_goods_image_240.gif">';
    		html +='<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';      
    		html +='</div>';
    		$(html).appendTo('.img-box');
    	}
    	$(this).parent().parent().remove();           
  	});
    $(".sku-off-box").live('click',function(){ 
    	if($(this).parent().parent().parent().find(".sku-img-box .upload-thumb").length == 1){
    		var html = "";
    		html +='<div class="upload-thumb" id="default_uploadimg">';
    		html +='<img nstype="goods_image" src="ADMIN_IMG/album/default_goods_image_240.gif">';
    		html +='<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';      
    		html +='</div>';
    		$(html).appendTo('.sku-img-box');
    	}
    	$(this).parent().parent().remove();           
  	});

});
function img_upload(){
	
}
//sku图片上传
function file_upload(obj){
	var spec_id = $(obj).attr("spec_id");
	var spec_value_id = $(obj).attr("spec_value_id");
	$('.sku-draggable-element'+spec_id+'-'+spec_value_id).arrangeable();
	  //sku图片上传
    $(obj).fileupload({
        url: 'ADMIN_MAIN/upload/photoalbumupload',
        dataType: 'json',
        formData:dataAlbum,
        add: function (e,data) {
        	
        	var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
        	var spec_id = box_obj.attr("spec_id");
        	var spec_value_id = box_obj.attr("spec_value_id");
        	box_obj.find(".img-error").hide();
        	box_obj.find("#sku_default_uploadimg").remove();
        	//显示上传图片框
        	var html = "";
        	$.each(data.files, function (index, file) {
        		html +='<div class="upload-thumb sku-draggable-element'+ spec_id +'-'+ spec_value_id +' sku-draggable-element"  nstype="' + file.name + '">'; 
        		html +='<img nstype="goods_image" src="ADMIN_IMG/album/uoload_ing.gif">';  
        		html +='<input type="hidden"  class="sku_upload_img_id" nstype="goods_image" spec_id="" spec_value_id="" value="">'; 
        		html +='<div class="black-bg hide">'; 
        		html +='<div class="sku-off-box">&times;</div>'; 
            	html +='</div>'; 
        		html +='</div>'; 
            });
        	
        	box_obj.find('.sku-img-box').append(html);
          //模块可拖动事件
        	$('.sku-draggable-element'+spec_id+'-'+ spec_value_id ).arrangeable();
        	data.submit();    	
        },
        done: function (e,data) {
        	var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
        	var spec_id = box_obj.attr("spec_id");
        	var spec_value_id = box_obj.attr("spec_value_id");
        	var param = data.result;
            $this = box_obj.find('div[nstype="' + param.origin_file_name + '"]');
           if(param.state > 0){
	           	$this.removeAttr("nstype");
	           	$this.children("img").attr("src","__UPLOAD__/"+param.file_name);
	           	$this.children("input[type='hidden']").val(param.file_id); 
	        	$this.children("input[type='hidden']").attr("spec_id", spec_id);
	        	$this.children("input[type='hidden']").attr("spec_value_id", spec_value_id);
	        	//将上传的规格图片记录
	        	for(var i = 0; i < $sku_goods_picture.length ; i ++ ){
	        		if($sku_goods_picture[i].spec_id == spec_id && $sku_goods_picture[i].spec_value_id == spec_value_id){
	        			$sku_goods_picture[i]["sku_picture_query"].push({"pic_id":param.file_id, "pic_cover_mid":param.file_name});
	        		}
	        	}
            }else{
            	$this.remove();
            	box_obj.find(".img-error").text("请检查您上传的文件是否有误").show();               	
            }                   
        }      
    })
}
</script>

	<h3 class="js-goods_detail">商品详情</h3>
	<dl>
		<dt>商品品牌：</dt>
		<dd>
			<select id="brandSelect">
				<option value="0">请选择商品品牌</option>
				<?php if(is_array($goodsbrand_list) || $goodsbrand_list instanceof \think\Collection || $goodsbrand_list instanceof \think\Paginator): if( count($goodsbrand_list)==0 ) : echo "" ;else: foreach($goodsbrand_list as $key=>$brand): ?>
				<option value="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<span class="help-inline">请选择商品品牌</span>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>商品描述：</dt>
		<dd>
		<div class="controls" id="discripContainer">
			<textarea id="tareaProductDiscrip" name="discripArea" style="height: 500px; width: 800px; display: none;"></textarea>
			<script id="editor" type="text/plain" style="width: 800px; height: 500px;"></script>
			<span class="help-inline">请填写商品描述</span>
		</div>
		</dd>
	</dl>

	<h3 class="js-goods-express-info">商品物流信息</h3>
	<dl>
		<dt>所在地：</dt>
		<dd>
			<select id="provinceSelect" onchange="getProvince(this,'#citySelect',-1)">
				<option value="0">请选择省</option>
			</select>
			<select id="citySelect">
				<option value="0">请选择市</option>
			</select>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>运费：</dt>
		<dd>
			<div class="controls">
				<label class="radio inline normal"><input type="radio" name="fare" value="0" checked="checked" />免邮</label>
				<label class="radio inline normal"><input type="radio" name="fare" value="1" /> 买家承担运费</label>
				<span class="help-inline">请选择运费类型</span>
			</div>
		</dd>
	</dl>
	<dl id="valuation-method" style="display: none">
		<dt><i class="required">*</i>计价方式：</dt>
		<dd>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="3" checked="checked" />计件</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="2" />体积</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="1" />重量</label>
		</dd>
	</dl>
	<dl id="commodity-weight" style="display: none">
		<dt><i class="required">*</i>商品重量：</dt>
		<dd>
			<input type="number" class="goods-stock" id="goods_weight" min="0" value="0" />公斤
			<span class="help-inline">商品重量必须大于0</span>
		</dd>
	</dl>
	<dl id="commodity-volume" style="display: none">
		<dt><i class="required">*</i>商品体积：</dt>
		<dd>
			<input type="number" class="goods-stock" id="goods_volume" min="0" value="0" />立方米
			<span class="help-inline">商品体积必须大于0</span>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>库存显示：</dt>
		<dd>
			<div class="controls">
				<label class="radio inline normal"><input type="radio" name="stock" checked="checked" value="1" /> 是</label>
				<label class="radio inline normal"><input type="radio" name="stock" value="0" /> 否</label>
				<span class="help-inline">请选择库存是否显示</span>
			</div>
		</dd>
	</dl>

	<h3 class="js-goods-point">积分购买设置</h3>
	<dl>
		<dt><i class="required">*</i>积分设置：</dt>
		<dd>
			<div class="controls">
				<label class="radio inline normal"><input type="radio" name="integralSelect" value="0" checked="checked" /> 非积分兑换</label>
				<label class="radio inline normal"><input type="radio" name="integralSelect" value="1" />积分兑换</label>
			</div>
		</dd>
	</dl>
	<dl id="integral-exchange" style="display: none">
		<dt>积分兑换：</dt>
		<dd>
			<div class="controls">
				<input id="integration_available_use" class="input-mini" placeholder="0" min="0" type="number" onchange="integrationChange(this);" />&nbsp;积分
				<span class="help-inline">请设置积分</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>购买可赠送：</dt>
		<dd>
			<div class="controls">
				<input id="integration_available_give" class="input-mini" placeholder="0" min="0" type="number" onchange="integrationChange(this);" />&nbsp;积分
			</div>
		</dd>
	</dl>
	
	<h3 class="js-goods-other">其他信息</h3>
	<div class="js-mask-category" style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 90; display: none; background: rgba(0, 0, 0, 0);"></div>	
	<dl>
		<dt>商品标签：</dt>
		<dd>
			<div class="group-text-check-box">
				<div class="controls product-category-position">
					<div class="productcategory-selected" id="productcategory-selected"></div>
					<button  class="gruop-button" onclick="showGoodsGroup();"><i class="fa fa-plus-square"></i>&nbsp;添加商品标签</button>
					<div class="goods-gruop-div">
						<select class="goods-gruop-select">	
						<?php foreach($group_list as $k=>$v): ?>
							<option value="<?php echo $v['group_id']; ?>"><?php echo $v['group_name']; ?></option>
						<?php endforeach; ?>
						</select>
						<button class="check-button" onclick="checkGoodsGroup();">确认</button>
					</div>
					<span class="span-error">暂无可选的商品标签</span>
				</div>									
			</div>			
		</dd>
	</dl>
	<dl>
		<dt>每人限购：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="input-mini" min="0" placeholder="0" id="PurchaseSum"/>
				<span class="help-inline">件</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>是否上架：</dt>
		<dd>
			<div class="controls">
				<label class="radio inline normal"><input type="radio" name="shelves" value="1" checked="checked" /> 立刻上架</label>
				<label class="radio inline normal"><input type="radio" name="shelves" value="2" /> 放入仓库</label>
			</div>
		</dd>
	</dl>
</div>
<div class="btn-submit">
     <input type="hidden" name="is_use" value="<?php echo $goods_config_info['is_use']; ?>"></input>
	<button class="btn btn-info" id="btnSave" type="button" onClick="SubmitProductInfo(0,'ADMIN_MAIN','SHOP_MAIN')">保存</button>
	<button class="btn btn-info" id="btnSave2" type="button" onClick="SubmitProductInfo(1,'ADMIN_MAIN','SHOP_MAIN')">保存并预览</button>
</div>
<!-- 编辑商品公共代码 -->
<!-- <nav class="sidebar-right" style="display:none;"> -->
<!-- 	<ul> -->
<!-- 		<li> -->
<!-- 			<img src="ADMIN_IMG/goods/return_top.png" title="飞回顶部" /> -->
<!-- 		</li> -->
<!-- 	</ul> -->
<!-- </nav> -->

<div id="fixedNavBar">
	<h3>页面导航</h3>
	<ul>
		<li data-floor="js-goods-info"><a href="javascript:;">商品信息</a></li>
		<li data-floor="js-goods-type"><a href="javascript:;">商品类型</a></li>
		<li data-floor="js-goods-img"><a href="javascript:;">商品图片</a></li>
		<li data-floor="js-goods_detail"><a href="javascript:;">商品详情</a></li>
		<li data-floor="js-goods-express-info"><a href="javascript:;">商品物流信息</a></li>
		<li data-floor="js-goods-point"><a href="javascript:;">积分购买设置</a></li>
		<li data-floor="js-goods-other"><a href="javascript:;">其他信息</a></li>
	</ul>
</div>
<script type='text/javascript' src='ADMIN_JS/drag_haul/sample.js' ></script>
<input type="hidden" id="goodsId" value="<?php echo $goods_id; ?>" />
<input type="hidden" id="shop_type" value="<?php echo $shop_type; ?>" />
<?php if($goods_id != 0): ?>
<input type="hidden" id="hidQRcode" value="0" />
<input type="hidden" id="hidden_qrcode" value="<?php echo $goods_info['QRcode']; ?>" />
<input type="hidden" id="hidden_sort" value="<?php echo $goods_info['sort']; ?>" />
<?php else: ?>
<input type="hidden" id="hidQRcode" value="1" />
<input type="hidden" id="hidden_qrcode" value="" />
<input type="hidden" id="hidden_sort" value="0" />
<?php endif; ?>
<script type="text/javascript">
// 	$(".sidebar-right").toTop();
	//返回顶部效果
// 	$(".sidebar-right").hover(function(){
// 		$(this).find("img").attr("src","ADMIN_IMG/goods/return_top_hover.png");
// 	},function(){
// 		$(this).find("img").attr("src","ADMIN_IMG/goods/return_top.png");
// 	});
	if(parseInt($("#goodsId").val()) > 0){
		initProvince("#provinceSelect",function(){
			//编辑商品时，加载数据
			$("#provinceSelect").find("option[value='"+province_id+"']").attr("selected",true);
			getProvince("#provinceSelect",'#citySelect',city_id);
		});
		
	}else{
		initProvince("#provinceSelect");
	}
	
	function PopUpCallBack(id, src) {
		
		var idArr, srcArr;
		if (id.indexOf(",")) {
			idArr = id.split(',');
			srcArr = src.split(',');
		} else {
			idArr = new Array(id);
			srcArr = new Array(src);
		}
		//alert(JSON.stringify(srcArr));
		switch(speciFicationsFlag){
		case 0:
			//商品主图
			if(srcArr.length>=1){
				$("#default_uploadimg").remove();
				html = "";
				for(var i=0;i<srcArr.length;i++){
					html +='<div class="upload-thumb draggable-element"  >'; 
	        		html +='<img  src="__UPLOAD__/'+srcArr[i]+'">';  
	        		html +='<input type="hidden"  class="upload_img_id"  value="'+idArr[i]+'">'; 
	        		html +='<div class="black-bg hide">'; 
	        		html +='<div class="off-box">&times;</div>'; 
	            	html +='</div>'; 
	        		html +='</div>'; 
				}
                $(html).appendTo('.img-box');
			}
			//模块可拖动事件
			$('.draggable-element').arrangeable();
			/* $(goodsFigure).children("a").show(); */
			break;
		case 1:
			//商品详情
			for (var i = 0; i < srcArr.length; i++) {
				var description = "<img src='__UPLOAD__/"+srcArr[i]+"' />";
				ue.setContent(description, true);
			}
			break;
		}
	}
	
	function setGoodsFigure(goodsFigure) {
		this.goodsFigure = goodsFigure;
	}

	//设置商品详情的图片
	function setUeditorImg() {
		speciFicationsFlag = 1;
		OpenPricureDialog("PopPicure", ADMINMAIN, 5);
	}

	/**
	 *图片上传
	 */
	function imgUpload(event) {
		var fileid = $(event).attr("id");
		var str = $(event).next().attr("id");
		var curr = $(event).parent();
		var parent = curr.prev().prev();
		var data = { 
			'file_path' : UPLOADGOODSSKU,
			'goods_path' : $("#goodsId").val()
		};
		uploadFile(fileid,data,function(res){
			if(res.code>0){
				var imgpath = "#img"+str;
				var imgval = "#"+str;
				$(imgpath).attr("src","__UPLOAD__/"+res.data);
				$(imgval).val(res.data);
// 				if(isResourcesExist("__UPLOAD__/"+res.data)){
					curr.popover("hide");
// 				}
				var spec = {
					flag : parent.hasClass("selected"),
					spec_id : parent.attr("data-spec-id"),
					spec_name : parent.attr("data-spec-name"),
					spec_value_id : parent.attr("data-spec-value-id"),
					spec_value_data : $("#"+str).val()
				};
				editSpecValueData(spec);//修改图片对应的修改SKU数据
				showTip(res.message,"success");
			}else{
				showTip(res.message,"warning");
			}
		});
	}

	/*
	* 判断资源文件是否存在
	* 2017年6月15日 19:03:12 王永杰
	*/
	function isResourcesExist(resources_url){
		var exist = false;
		if(resources_url != ""){
			$.ajax(resources_url, {
				type: 'get',
				timeout: 100,
				async : false,
				success : function(){
					exist = true;
				},
				error: function() {
					exist = false;
				}
			});
		}
		return exist;
	}
	/**
	*扩展分类个数
	*/
	var extent_sort = 0;
	$(function() {
		if(parseInt("<?php echo $extent_sort; ?>") > 0){
			extent_sort = parseInt("<?php echo $extent_sort; ?>");
		}
	})
</script>

		</div>
		<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination pagination-right">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" />条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
$(function() {
	try{
		$("#turn-ul").show();//显示分页
		LoadingInfo(1);//通过此方法调用分页类
	}catch(e){
		$("#turn-ul").hide();
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}

</script>
		
		<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
		<div class="common-tip-message js-common-tip">
			<div class="inner"></div>
		</div>
	</div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>原密码</label>
				<div class="controls">
					<input type="password" id="pwd0" placeholder="请输入原密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>新密码</label>
				<div class="controls">
					<input type="password" id="pwd1" placeholder="请输入新密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls">
					<input type="password" id="pwd2" placeholder="请输入确认密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn btn-info" onclick="submitPassword()"  style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!--修改密码弹框结束  -->
<div class="footer">
	<div id="faq" style="background: #eee; padding-top: 10px;">
		<div class="faq-wrapper"></div>
	</div>
	<div id="footer" class="wrapper">
		<p>
			<?php if(is_array($ShopNavigationData) || $ShopNavigationData instanceof \think\Collection || $ShopNavigationData instanceof \think\Paginator): if( count($ShopNavigationData)==0 ) : echo "" ;else: foreach($ShopNavigationData as $key=>$vo): if($key>0): ?> |<?php endif; if($vo['nav_type'] == 0): if($vo['is_blank'] == 1): ?>
						<a target="_blank" href="SHOP_MAIN<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php else: ?>
						<a href="SHOP_MAIN<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php endif; else: if($vo['is_blank'] == 1): ?>
						<a target="_blank" href="<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php else: ?>
						<a href="<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
		</p>
		<!-- <p style="color:#333333; display: none;" id="bottom_copyright">Copyright © 2015-2025 NIUSHOP开源商城&nbsp;版权所有 保留一切权利<br><a href="http://www.niushop.com.cn" target="_blank" style="text-decoration: none;color:#333333;">山西牛酷信息科技有限公司&nbsp;</a>
			<span>提供技术支持&nbsp;400-886-7993</span>
		</p> -->
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '我的商城';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
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
	if(type == 'error'){
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

function showConfirm(content){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script>
$(function(){
	
	$('.index-sitemap > a').bind("click", function() {
		$(".sitemap-menu-arrow").slideDown("slow");
		$(".sitemap-menu").slideDown("slow");
	});
	$('.add-quickmenu > a').bind("click", function() {
		$(".sitemap-menu-arrow").slideDown("slow");
		$(".sitemap-menu").slideDown("slow");
	});
	$('#closeSitemap').bind("click", function() {
		$(".sitemap-menu-arrow").slideUp("fast");
		$(".sitemap-menu").slideUp("fast");
	});
});
function add_nav_class(doc) {
	$(doc).addClass("hover");
}

function remove_nav_class(doc) {
	$(doc).removeClass("hover");
}

// 显示导航管理
function nav_open() {
	var one = new Array();
	var two = new Array();
	var three = new Array();
	$(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
		if (c < 5) {
			one.push($(e).height());
		} else if (c > 4 && c < 10) {
			two.push($(e).height());
		} else if (c > 9 && c < 15) {
			three.push($(e).height());
		}
	})
	$(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
		if (c < 5) {
			var one_max_height = Math.max.apply(Math, one);
			$(e).height(one_max_height);
		} else if (c > 4 && c < 10) {
			var two_max_height = Math.max.apply(Math, two);
			$(e).height(two_max_height);
		} else if (c > 9 && c < 15) {
			var three_max_height = Math.max.apply(Math, three);
			$(e).height(three_max_height);
		}
	})
	$(".sitemap-menu-arrow").show();
	$(".sitemap-menu").show();
}
// 隐藏导航管理
function nav_close() {
	$(".sitemap-menu-arrow").hide();
	$(".sitemap-menu").hide();
}
// 系统注销菜单的控制
var closetimer = 0;
function exitSystemOver() {
	cancelColseMenu();
	$("#exit_System").css("display", "block");
};

function exitSystemOut() {
	closetimer = window.setTimeout(mclose, 600);
};

function cancelColseMenu() {
	window.clearTimeout(closetimer);
	closetimer = null;
};

function mclose() {
	$("#exit_System").css("display", "none");
}
</script>

</body>
</html>