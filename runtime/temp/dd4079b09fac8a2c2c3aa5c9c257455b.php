<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:35:"template/admin\Goods\goodsList.html";i:1505525494;s:24:"template/admin\base.html";i:1503110755;s:41:"template/admin\controlCommonVariable.html";i:1500286982;s:30:"template/admin\pageCommon.html";i:1500286981;s:30:"template/admin\openDialog.html";i:1500286981;}*/ ?>
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
</script>
		
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<style type="text/css">
.tr-title {
	height: 30px;
	background: #E3E3E3;
	border:1px solid rgba(234, 233, 233, 0.51);
}
.a-pro-view-img {
	float: left;
}

.thumbnail-img {
	width: 60px;
	margin-right: 10px;
}

.cell i {
	display: block;
}
.remodal-bg.with-red-theme.remodal-is-opening,.remodal-bg.with-red-theme.remodal-is-opened {
	filter: none;
}
	
.remodal-overlay.with-red-theme {
	background-color: #f44336;
}

.remodal.with-red-theme {
	background: #fff;
}

input[type="radio"], input[type="checkbox"] {
	margin: -1px 5px 0;
	margin-left:0px;
}
.edit-group{
	border-bottom: 1px solid #ebebeb;
	margin-bottom:10px;
}
.edit-group label{	
	font-weight:normal;
}
.edit-group-title{
	height:15px;
	line-height:15px;
	width:140px;
	margin-top:3px;
	margin-bottom:3px;
}
.edit-group-button{
	border-color: #3283fa;
	border: 1px solid #bbb;
	height: 26px;
	line-height: 24px;
	padding: 0 5px;
}
.group-button-bg{
	background: #3283fa;
	color: #fff;
}
.div-pro-view-name {
	width: 100%;
	min-height: 60px;
}
i.hot,i.recommend,i.new{font-size:12px;margin-right:5px;font-style:normal;color:#fff;background-color:#E84C3D;border-radius:2px;padding:1px 2px;}

.icon-qrcode:before {
    content: "\f029";
}
[class^="icon-"]:before, [class*=" icon-"]:before {
    text-decoration: inherit;
    display: inline-block;
    speak: none;
}
[class^="icon-"], [class*=" icon-"] {
    font-family: FontAwesome;
    font-weight: normal;
    font-style: normal;
    text-decoration: inherit;
    -webkit-font-smoothing: antialiased;
}
.goodsCategory{
	width: 216px;
	height: 300px;
	border:1px solid #CCCCCC;
	position: absolute;
	z-index: 100;
	background: #fff;
	left: 352px;
	display: none;
	overflow-y: auto;
}
.goodsCategory::-webkit-scrollbar{
	width: 8px;
} 
.goodsCategory::-webkit-scrollbar-track{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    border-radius: 10px;
    background-color: #f5f5f5;
}
.goodsCategory::-webkit-scrollbar-thumb{
    /*width: 10px;*/
    height: 20px;
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #ddd;
}
.goodsCategory ul{
	height: 280px;
	margin-top: -2px;
	margin-left: 0;
}
.goodsCategory ul li{
	text-align: left;
	padding:0 15px;
	line-height: 30px;
}
.goodsCategory ul li i{
	float: right;
	line-height: 30px;
}
.goodsCategory ul li:hover{
	cursor: pointer;
}
.goodsCategory ul li:hover,.goodsCategory ul li.selected{
	background: #00C0FF;
	color: #fff;
}
.two{
	left: 570px;
	border-left:0;
}
.three{
	left: 787px;
	width: 198px;
	border-left:0;
}
.selectGoodsCategory{
	width: 216px;
	height: 45px;
	border:1px solid #CCCCCC;
	position: absolute;
	z-index: 100;
	left: 352px;
	margin-top: 300px;
	border-collapse: collapse;
	background: #fff;
	display: none;
}
.selectGoodsCategory a{
	display: block;
	height: 30px;
	width: 100px;
	text-align: center;
	color: #fff;
	line-height: 30px;
	margin:8px;
	background: #00C0FF;
	text-decoration:none;
}
.RIGHT{
	min-height: 800px;
}
input[type=number] {    
	-moz-appearance:textfield;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {    
	-webkit-appearance: none;    
	margin: 0;
}
.table th, .table td {
	 vertical-align: middle; 
}
.recommendBox{
	width: 360px;
	display: inline-block;
	float: right;
}
.introduction_box{
	width: 360px;
	display: inline-block;
	float: right;
}
</style>

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
					
<li><a class="nscs-table-handle_green" href="ADMIN_MAIN/goods/addgoods"><i class="fa fa-plus-circle"></i>&nbsp;发布商品</a></li>

				</ul>
			</div>
		</div>
		<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;"  />
		<div class="main">
			
<div class="js-mask-category" style="display:none;background: rgba(0,0,0,0);position:fixed;width:100%;height:100%;top:0;left:0;right:0;bottom:0;z-index:90;"></div>
<table class="mytable">
	<tr>
		<th style="line-height:33px;">
			商品分类：
			<input type="text" placeholder="请选择商品分类" id="goodsCategoryOne" is_show="false">
			<div class="goodsCategory one">
				<ul>
					<?php if(is_array($oneGoodsCategory) || $oneGoodsCategory instanceof \think\Collection || $oneGoodsCategory instanceof \think\Paginator): $i = 0; $__LIST__ = $oneGoodsCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li class="js-category-one" category_id="<?php echo $vo['category_id']; ?>"><?php echo $vo['category_name']; if($vo['is_parent'] == 1): ?>
						<i class="fa fa-angle-right fa-lg"></i>
					<?php endif; ?>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="goodsCategory two" style="border-left:0;">
				<ul id="goodsCategoryTwo">
					
				</ul>
			</div>
			<div class="goodsCategory three">
				<ul id="goodsCategoryThree">
					
				</ul>
			</div>
			<div class="selectGoodsCategory">
				<a href="javascript:;" id="confirmSelect" style="float:right;">确认选择</a>
			</div>
			<input type="hidden" id="category_id_1">
			<input type="hidden" id="category_id_2">
			<input type="hidden" id="category_id_3">
			商品名称：<input id="goods_name" class="input-medium" type="text" value="<?php echo $search_info; ?>" placeholder="要搜索的商品名称" >
			上下架
			<select id="state">
				<option value="">全部</option>
                <?php if($goods_config_info['is_use'] == 1): ?>
                <option value="-1">待审核</option>
                <?php endif; ?>
				<option value="1">上架</option>
				<option value="0">下架</option>
			</select>
			<input type="button" onclick="searchData()" value="搜索" />
		</th>
	</tr>
</table>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane active">
		<table class="table table-striped table-main" border="0">
			<colgroup>
				<col width="3%">
				<col width="43%">
				<col width="12%">
				<col width="6%">
				<col width="6%">
				<col width="7%">
				<col width="7%">
				<col width="15%">
			</colgroup>
			<tbody>
				<tr class="table-title" style="background: white;z-index: 10;border: 1px solid #E3E3E3;">
					<th></th>
					<th >商品名称</th>
					<th >价格（元）</th>
					<th >总库存</th>
					<th >销量</th>
					<th>上下架</th>
					<th >排序</th>
					<th style="text-align:center;">操作</th>
				</tr>
				<tr class="trcss">
					<td colspan="5">
						<label style="display: inline-block;vertical-align: middle;">
							<input onclick="CheckAll(this)" type="checkbox" id="chek_all">
							<span style="display: inline-block; margin-left: 0px; margin-right: 10px;font-weight: 400;">全选</span>
						</label>
						<a class="btn btn-small fun-a" href="javascript:batchDelete()">批量删除</a>
						<a class="btn btn-small fun-a upstore" href="javascript:void(0)" onclick="goodsIdCount(1)">上架</a>
						<a class="btn btn-small fun-a downstore" href="javascript:void(0)" onclick="goodsIdCount(0)">下架</a>
						<!-- <a class="btn btn-small fun-a recommend" href="javascript:void(0)" onclick="ShowRecommend()" data-html="true" id="setRecommend" title="推荐"
						data-container="body" data-placement="bottom"  data-trigger="manual"
						data-content="<div class='edit-group' id='recommendType'>
 							<label class='checkbox-inline'><input type='checkbox' value='1'>热销 </label>
							<label class='checkbox-inline'><input type='checkbox' value='2'>推荐 </label>
							<label class='checkbox-inline'><input type='checkbox' value='3'>新品 </label>
							</div>
							<button class='edit-group-button group-button-bg' onclick='setRecommend();'>保存</button>
							<button class='edit-group-button' onclick='hideSetRecommend()'>取消</button>
							"
						>推荐</a> -->
						<a onclick="goodsGroupIdCount();" data-html="true" class="btn btn-small fun-a category" href="javascript:void(0)" id="editGroup" title="<h6 class='edit-group-title'>修改商品标签</h6>" data-container="body" data-placement="bottom"  data-trigger="manual"
							data-content="<div class='edit-group' id='goodsChecked' style='max-width:auto;'>
 							<?php foreach($goods_group as $vo): ?> 
 							<p>
 							<label class='checkbox-inline' style='display:inline-block;' >
								<input type='checkbox' value='<?php echo $vo['group_id']; ?>'><b><?php echo $vo['group_name']; ?></b>&nbsp;&nbsp;&nbsp;
							</label>
							<?php foreach($vo['sub_list']['data'] as $vs): ?>
							<label style='display:inline-block;'>
								<input type='checkbox' value='<?php echo $vs['group_id']; ?>'><?php echo $vs['group_name']; ?>
								</label>
								<?php endforeach; ?>
							</p>
							<?php endforeach; ?>
							</div>
							<button class='edit-group-button group-button-bg' onclick='goodsGroupUpdate();'>保存</button>
							<button class='edit-group-button' onclick='hideEditGroup()'>取消</button>
							">
							商品标签</a>
						<a href="javascript:;"  class="btn btn-small fun-a category" title="更新二维码" onclick="batchUpdateGoodsQrcode();">更新二维码</a>
						<input type='hidden' value='' id='goods_type_ids'/>
					</td>
				</tr>
			</tbody>
			<tbody id="productTbody" style="border: 0px;"></tbody>
		</table>
	</div>
</div>

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
		<p style="color:#333333; display: none;" id="bottom_copyright">Copyright © 2015-2025 NIUSHOP开源商城&nbsp;版权所有 保留一切权利<br><a href="http://www.niushop.com.cn" target="_blank" style="text-decoration: none;color:#333333;">山西牛酷信息科技有限公司&nbsp;</a>
			<span>提供技术支持&nbsp;400-886-7993</span>
		</p>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= 'Niushop开源商城';
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

<script type="text/javascript">
	//查询
	function searchData(){
		LoadingInfo(1);
	}
	
	/**
	 * 隐藏商品分组
	 */
	function hideEditGroup(){
		$("#editGroup").popover("hide");
	}
	
	function hideSetRecommend(){
		$("#setRecommend").popover("hide");
	}
	
	//查询用户列表
	function LoadingInfo(page_index) {
		var start_date = $("#startDate").val();
		var end_date = $("#endDate").val();
		var state = $("#state").val();
		var goods_name =$("#goods_name").val();
		var category_id_1 = $("#category_id_1").val();
		var category_id_2 = $("#category_id_2").val();
		var category_id_3 = $("#category_id_3").val();
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/goods/goodslist",
			data : {
				"page_index" : page_index,
				"page_size" : $("#showNumber").val(),
				"start_date":start_date,
				"end_date":end_date,
				"state":state,
				"goods_name":goods_name,
				"category_id_1" : category_id_1,
				"category_id_2" : category_id_2,
				"category_id_3" : category_id_3
			},
			success : function(data) {
				//alert(JSON.stringify(data));
				var html = '';
				if (data["data"].length > 0) {
					for (var i = 0; i < data["data"].length; i++) {
						html += '<tr class="tr-title" style=" width: 1502px;"><td class="td-'+ data["data"][i]["goods_id"]+'"><label><input value="'
							+ data["data"][i]["goods_id"]
							+ '" tj="" name="sub" data-state="'+data["data"][i]["state"]+'" type="checkbox"></label></td>';
						html += '<td colspan="7" style="width: 97%;"><div style="display: inline-block; width: 100%;" class="pro-code"><span>商家编码'+'：'
							+ data["data"][i]["code"] + '</span>';
						/* if(data["data"][i]["state"] == 1){
							html += '<span class="pro-code" style="color: #f35252; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已上架';
						}else{
							html += '<span class="pro-code" style="color: #27A9E3; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已下架';
						} */
						html += '<span class="pro-code" style="margin-left:10px;">创建时间：'+data["data"][i]["create_time"];
						
						html += '<span  class="div-flag-style" style="display: inline-block;margin:0 20px 0 40px;position:relative"> <i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i>';
						html += '<div class="QRcode" style="display: none; position: absolute;width:110px;top:28px;left:15px"id="qrcode"><p><img src="__ROOT__/'+ data["data"][i]["QRcode"]+'" style="width:110px;"></p></div></span>';
						html += '</span></div></td></tr>';
						html += '<tr><td colspan="2" style="background: white;"><div><a class="a-pro-view-img" href="SHOP_MAIN/goods/goodsinfo?goodsid='+data["data"][i]["goods_id"]+'" target="_blank"><img class="thumbnail-img"src="__ROOT__/'+data["data"][i]["pic_cover_micro"]+'">';
						html += '<div class="div-pro-view-name"><span style="color: #13A5D5;" class="thumbnail-name title='+ data["data"][i]["goods_name"]+'"><a target="_blank" style="word-break:break-all;" href="SHOP_MAIN/goods/goodsinfo?goodsid='+data["data"][i]["goods_id"]+'">'
							+ data["data"][i]["goods_name"]
							+ '</a></span><br/>';
						//html += '<div class="div-flag-style"><span class="" title=""><i class="icon-tablet"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span><span onmouseover="mouseover(this)" onmouseout="mouseout(this)"style="display: inline-block;"> <i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span>';
						//html += '<div class="QRcode" style="display: none; position: absolute;"id="qrcode"><p><img src=""></p></div></div>';
						// html += '<div class="introduction_box">'+data["data"][i]["introduction"]+'</div><br>';
						// html += '<span class="recommendBox">';
						// html += data["data"][i]["is_hot"] == 1 ? '<i class="hot">热</i>' : '';
						// html += data["data"][i]["is_recommend"] == 1 ? '<i class="recommend">荐</i>' : '';
						// html += data["data"][i]["is_new"] == 1 ? '<i class="new">新</i>' : '';
						// html += '</span></div>';
					//	html += '<div style="margin-top:10px;">';
					//	html += data["data"][i]["is_hot"] == 1 ? '<i class="hot">热</i>' : '';
					//	html += data["data"][i]["is_recommend"] == 1 ? '<i class="recommend">荐</i>' : '';
					//	html += data["data"][i]["is_new"] == 1 ? '<i class="new">新</i>' : '';
					//	html += '<span  class="div-flag-style" style="display: inline-block;"> <i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span>';
					//	html += '<div class="QRcode" style="display: none; position: absolute;"id="qrcode"><p><img src="__ROOT__/'+ data["data"][i]["QRcode"]+'" style="width:110px;"></p></div>';
					//    html += '</div>';
					    html += '</div></td>';
						html += '<td style="background: white;"><div class="priceaddactive"><span class="price-lable">原&nbsp;&nbsp;&nbsp;价：</span><span class="price-numble" style="color: #666;"id="moreChangePrice'+ data["data"][i]["goods_id"]+'"  >'
							+ data["data"][i]["price"]
							+ '</span></div>';
						html += '<div><span class="price-lable" >销售价：</span><span class="price-numble"id="moreChangePrice'+ data["data"][i]["goods_id"]+'" style="color:red;">'
							+ data["data"][i]["promotion_price"]
							+ '</span>';
						html += '</td>';
						html += '<td style="background: white;"><div class="cell"><span class="pro-stock" style="color: #666;"id="moreChangeStock'+ data["data"][i]["goods_id"] + '">'
							+ data["data"][i]["stock"]
							+ '</span></div></td>';
						html += '<td style="background: white;"><div class="cell"><span class="pro-stock" style="color: #666;"id="moreChangeStock'+ data["data"][i]["goods_id"]+'">'
							+ data["data"][i]["real_sales"]
							+ '</span></div></td>';
						if(data["data"][i]["state"] == 1){
							html += '<td style="background: white;"><a href="javascript:void(0)" onclick="modifyGoodsOnline('+data["data"][i]["goods_id"]+',0)">已上架</a></td>';
						}else if(data["data"][i]["state"] == 0 || data["data"][i]["state"] == 2){
							html += '<td style="background: white;"><a href="javascript:void(0)" onclick="modifyGoodsOnline('+data["data"][i]["goods_id"]+',1)"  style="color:#999;">已下架</a></td>';
						}else if(data["data"][i]["state"] == -1){
                            html += '<td style="background: white;">待审核</td>';
                        }else if(data["data"][i]["state"] == 10){
                            html += '<td style="background: white;">违规下架</td>';
                        }
						html += '<td style="background: white;"><div class="cell"><input class="input-mini" goods_id="'
							+ data["data"][i]["goods_id"]
							+ '" style="width:30px;text-align:center;" value="'
							+ data["data"][i]["sort"]
							+ '" onchange="changeSort(this)"' 
							+ 'type="number"></div></td>';
						html += '<td style="background: white;"><div ><div class="bs-docs-example tooltip-demo"style="text-align: center;">';
						html += '<a href="javascript:;" data-placement="bottom" data-original-title="编辑"><span class="edit" style="display: inline-block; width: 19%;" onclick="updateGoodsDetail('
							+ data["data"][i]["goods_id"]
							+ ')"><i class="icon-edit" style="width: initial;"></i>编辑</span></a>';
						html += '<a href="javascript:;" data-placement="bottom" data-original-title="复制"><span class="edit" style="display: inline-block; width: 19%;" onclick="copyGoodsDetail('
							+ data["data"][i]["goods_id"]
							+ ')"><i class="icon-edit" style="width: initial;"></i>复制</span></a>';
						// html += '<a href="javascript:;" data-placement="bottom" ><span class="edit" style="display: inline-block; " onclick="updateGoodsQrcode('
						// 		+ data["data"][i]["goods_id"]
						// 		+ ')"><i class="icon-edit" style="width: initial;"></i>更新二维码</span></a>';
						html += '<a href="javascript:void(0)" data-placement="bottom"onclick="deleteGoods('
							+ data["data"][i]["goods_id"]
							+ ')" data-original-title="删除"><span class="del" style="display: inline-block; width: 19%;"><i class="icon-trash" style="width: initial;"></i>删除</span></a></div></div></td></tr>';
					}
				} else {
					html += '<tr align="center"><th colspan="8" style="text-align: center;font-weight: normal;color: #999;">暂无符合条件的数据记录</th></tr>';
				}
				$("#productTbody").html(html);
				initPageData(data["page_count"],data['data'].length,data['total_count']);
				$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
				code();
			}
		});
	}
	//二维码.
 	function code(){
		$(".div-flag-style").mouseover(function(){
			$(this).children('.QRcode').show();
		});
		$(".div-flag-style").mouseout(function(){
			$(this).children('.QRcode').hide();
		});
	} 
	
	
	//把值传过去即可
	function updateGoodsDetail(goods_id) {
		window.location = "ADMIN_MAIN/goods/addgoods?step=2&goodsId="+ goods_id;
	}

	//全选
	function CheckAll(event){
		var checked = event.checked;
		$("#productTbody input[type = 'checkbox']").prop("checked",checked);
	}
	//商品上架id合计
	function goodsIdCount(line){
		var goods_ids= "";
        var flag = true;
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
//			    if($(this).attr("data-state") ==1 || $(this).attr("data-state") ==0){
                var state = $(this).attr("data-state");

				if(line == 1){
				    switch (Number(state))
                    {
                        case 1:
                            $( "#dialog" ).dialog({
                                buttons: {
                                    "确定": function() {
                                        $(this).dialog('close');
                                    }
                                },
                                contentText:"记录中包含已上架记录",
                                title:"消息提醒",
                            });
                            flag = false;
                            break;
                        case 10:

                            $( "#dialog" ).dialog({
                                buttons: {
                                    "确定": function() {
                                        $(this).dialog('close');
                                    }
                                },
                                contentText:"记录中包含违规下架记录",
                                title:"消息提醒",
                            });
                            flag = false;
                            break;
                        case -1:
                            $( "#dialog" ).dialog({
                                buttons: {
                                    "确定": function() {
                                        $(this).dialog('close');
                                    }
                                },
                                contentText:"记录中包含待审核记录",
                                title:"消息提醒",
                            });
                            flag = false;
                            break;
                    }
				}else{
                    switch (Number(state))
                    {
                        case 0:
                            $( "#dialog" ).dialog({
                                buttons: {
                                    "确定": function() {
                                        $(this).dialog('close');
                                    }
                                },
                                contentText:"记录中包含已下架记录",
                                title:"消息提醒",
                            });
                            flag = false;
                            break;
                        case 10:
                            $( "#dialog" ).dialog({
                                buttons: {
                                    "确定": function() {
                                        $(this).dialog('close');
                                    }
                                },
                                contentText:"记录中包含违规下架记录",
                                title:"消息提醒",
                            });
                            flag = false;
                            break;
                        case -1:
                            $( "#dialog" ).dialog({
                                buttons: {
                                    "确定": function() {
                                        $(this).dialog('close');
                                    }
                                },
                                contentText:"记录中包含待审核记录",
                                title:"消息提醒",
                            });
                            flag = false;
                            break;
                    }

                }
                goods_ids = $(this).val() + "," + goods_ids;
            }
		});

		if(!flag)return false;
		goods_ids = goods_ids.substring(0, goods_ids.length - 1);

		if(goods_ids == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		modifyGoodsOnline(goods_ids,line);
	}
	

		
	//商品上下架
	function modifyGoodsOnline(goods_ids,line){
/*
	if(line == 1){
			var url = "ModifyGoodsState";
			var lingStr = "上架";
		}else{
			var url = "ModifyGoodsState";
			var lingStr = "下架";
		} 
*/
var url = "ModifyGoodsState";

		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/Goods/"+url,
			data : {
				"goods_ids" : goods_ids,
                "state" : line
			},
			success : function(data) {
				if(data["code"] > 0 ){
					LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
					$("#dialog" ).dialog({
						buttons: {
							"确定": function() {
								$(this).dialog('close');
							}
						},
						contentText:"商品"+lingStr+"成功",
						title:"消息提醒",
						time:3
					});
				}
			}
		})
	}
	

	function batchDelete() {
		var goods_ids= new Array();
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids.push($(this).val());
			}
		});
		if(goods_ids.length ==0){
			$( "#dialog" ).dialog({
				buttons: {
					"确定,#e57373": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		deleteGoods(goods_ids);
	}
	function deleteGoods(goods_ids){
		$( "#dialog" ).dialog({
			buttons: {
				"确定": function() {
					$.ajax({
						type : "post",
						url : "ADMIN_MAIN/goods/deletegoods",
						data : {
							"goods_ids" : goods_ids.toString()
						},
						dataType : "json",
						success : function(data) {
							if(data["code"] > 0 ){
								LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
								
								$("#dialog").dialog({
									buttons: {
										"确定": function() {
											$(this).dialog('close');
										}
									},
									modal: true,
									contentText:data["message"],
									title:"消息提醒",
									time:1
								});
								$("#chek_all").prop("checked", false);
							}
						}
					});
					$(this).dialog('close');
				},
				"取消,#e57373": function() {
					$(this).dialog('close');
				},
			},
			contentText:"确定要删除吗？",
		});
	}
	
	//商品修改分组id合计
	function goodsGroupIdCount(){
		var goods_ids= "";
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids = $(this).val() + "," + goods_ids;
			}
		});
		goods_ids = goods_ids.substring(0, goods_ids.length - 1);
		if(goods_ids == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		$("#goods_type_ids").val(goods_ids);
		$("#editGroup").popover("show");
		$(".popover").css("max-width",'1000px');
	}
	
	//商品修改分组
	function goodsGroupUpdate(){
		var goods_type = "";
		var goods_ids = $("#goods_type_ids").val();
		$("#goodsChecked input[type='checkbox']:checked").each(function(){
			if (!isNaN($(this).val())) {
				goods_type = $(this).val() + "," + goods_type;
			}
		})
		if(goods_type == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		goods_type = goods_type.substring(0, goods_type.length - 1);
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/goods/modifygoodsgroup",
			data : {
				"goods_id" : goods_ids,
				"goods_type" : goods_type
			},
			success : function(data) {
				if(data["code"] > 0 ){
					$("#editGroup").popover("hide");
					LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
					$( "#dialog" ).dialog({
						buttons: {
							"确定": function() {
								$(this).dialog('close');
							}
						},
						contentText:data["message"],
						title:"消息提醒",
					});
				}
			}
		})
	}
	
	//显示 推荐选项
	function ShowRecommend(){
		var goods_ids= "";
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids = $(this).val() + "," + goods_ids;
			}
		});
		goods_ids = goods_ids.substring(0, goods_ids.length - 1);
		if(goods_ids == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		$("#goods_type_ids").val(goods_ids);
		$("#setRecommend").popover("show");
	}

	//修改为  推荐 商品
	function setRecommend(){
		var recommend_type = '';
		var goods_ids = $("#goods_type_ids").val();
		$("#recommendType input[type='checkbox']").each(function(){
			if ($(this).attr("checked") == 'checked') {
				var recommend_type_new = 1;
			}else{
				var recommend_type_new = 0;
			}
			recommend_type = recommend_type_new + "," + recommend_type;
		})
		if(recommend_type == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		recommend_type = recommend_type.substring(0, recommend_type.length - 1);
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/goods/modifygoodsrecommend",
			data : {
				"goods_id" : goods_ids,
				"recommend_type" : recommend_type
			},
			success : function(data) {
				if(data["code"] > 0 ){
					$("#setRecommend").popover("hide");
					LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
					$( "#dialog" ).dialog({
						buttons: {
							"确定": function() {
								$(this).dialog('close');
							}
						},
						contentText:data["message"],
						title:"消息提醒",
					});
				} 
			}
		})
	}
	$("#goodsCategoryOne").click(function(){
		var isShow = $("#goodsCategoryOne").attr('is_show');
		if(isShow == "false"){
			$(".one").show();
			$(".selectGoodsCategory").css("width",'216px');
			$(".selectGoodsCategory").show();
			$("#goodsCategoryOne").attr('is_show','true');
			$(".js-mask-category").show();
		}else{
			$(".one").hide();
			$(".two").hide();
			$(".three").hide();
			$(".selectGoodsCategory").css("width",'216px');
			$(".selectGoodsCategory").hide();
			$("#goodsCategoryOne").attr('is_show','false');
		}
	})
	
	$(".js-mask-category").click(function(){
		$(".one").hide();
		$(".selectGoodsCategory").hide();
		$(".two").hide();
		$(".three").hide();
		$("#goodsCategoryOne").attr('is_show', 'false');
		$(this).hide();
	})
	$(".js-category-one").click(function(){
		parentId = $(this).attr("category_id");
		category_name = $(this).text();
		$(".one ul li").not($(this)).removeClass("selected");
		$(this).addClass("selected");
		$("#goodsCategoryOne").val($.trim(category_name)+">");
		$("#category_id_1").val(parentId);
		$("#category_id_2").val('');
		$("#category_id_3").val('');
		$.ajax({
			type : 'post',
			url : "ADMIN_MAIN/goods/getcategorybyparentajax",
			data : {"parentId":parentId},
			success : function(data){
				
				if(data.length>0){
					html = '';
					for (var i = 0; i < data.length; i++) {
						html += '<li class="js-category-two" category_id="'+data[i]['category_id']+'">'+data[i]['category_name'];
						if(data[i]['is_parent'] == 1){
							html += '<i class="fa fa-angle-right fa-lg"></i>';
						}
						html += '</li>';
					}
					$("#goodsCategoryTwo").html(html);
					$(".two").show();
					$(".selectGoodsCategory").css("width",'433px');
				}else{
					$(".one").hide();
					$(".two").hide();
					$(".js-mask-category").hide();
					$(".selectGoodsCategory").hide();
					$("#goodsCategoryOne").attr('is_show', 'false');
				}
				$(".three").hide();
			}
		});
		return false;
	});
	$(".js-category-two").live("click",function(event){
		var parentId = $(this).attr("category_id");
		var category_name = $(this).text();
		$(".two ul li").not($(this)).removeClass("selected");
		$(this).addClass("selected");
		var goodsCategoryOne = $("#goodsCategoryOne").val();
		$("#goodsCategoryOne").val(goodsCategoryOne+''+category_name+'>');
		$("#category_id_2").val(parentId);
		$("#category_id_3").val('');
		$.ajax({
			type : 'post',
			url : "ADMIN_MAIN/goods/getcategorybyparentajax",
			data : {"parentId":parentId},
			success : function(data){
				if(data.length>0){
					html = ''
					for (var i = 0; i < data.length; i++) {
						html += '<li onclick="goodsCategoryThree(this);" category_id="'+data[i]['category_id']+'">'+data[i]['category_name']+'<i class="fa fa-angle-right fa-lg"></i></li>';
					}
					$("#goodsCategoryThree").html(html);
					$(".three").show();
					$(".selectGoodsCategory").css("width",'632px');
				}else{
					$(".one").hide();
					$(".two").hide();
					$(".three").hide();
					$(".selectGoodsCategory").hide();
					$(".js-mask-category").hide();
					$("#goodsCategoryOne").attr('is_show', 'false');
				}
			}
		})
		event.stopPropagation();
	});
	function goodsCategoryThree(obj){
		var parentId = $(obj).attr("category_id");
		var category_name = $(obj).text();
		$(".three ul li").not($(obj)).removeClass("selected");
		$(obj).addClass("selected");
		var goodsCategoryOne = $("#goodsCategoryOne").val();
		$("#goodsCategoryOne").val(goodsCategoryOne+''+category_name);
		$("#category_id_3").val(parentId);
		$(".one").hide();
		$(".two").hide();
		$(".three").hide();
		$(".selectGoodsCategory").hide();
		$(".js-mask-category").hide();
		$(".selectGoodsCategory").css("width",'216px');
		$("#goodsCategoryOne").attr('is_show','false');
	}
	$("#confirmSelect").click(function(){
		$(".one").hide();
		$(".two").hide();
		$(".three").hide();
		$(".selectGoodsCategory").hide();
		$(".selectGoodsCategory").css("width",'216px');
	})
	
	function copyGoodsDetail(goods_id){
		$( "#dialog" ).dialog({
			buttons: {
				"确定": function() {
					$.ajax({
						type : "post",
						url : "ADMIN_MAIN/goods/copygoods",
						data : {"goods_id":goods_id},
						dataType : "json",
						success : function(data) {
							if(data["code"] > 0 ){
								LoadingInfo(getCurrentIndex(goods_id,'#productTbody','tr[class="tr-title"]'));
								
								$("#dialog").dialog({
									buttons: {
										"确定": function() {
											$(this).dialog('close');
										}
									},
									modal: true,
									contentText:data["message"],
									title:"消息提醒",
									time:1
								});
								$("#chek_all").prop("checked", false);
							}
						}
					});
					$(this).dialog('close');
				},
				"取消,#e57373": function() {
					$(this).dialog('close');
				},
			},
			contentText:"确定要复制一条新的商品信息吗？",
		});
	}
	
	function changeSort(event){
		var sort = parseInt($(event).val());
		$(event).val(sort);
		var goods_id = $(event).attr("goods_id");
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/goods/updateGoodsSortAjax",
			data : {
				"sort" : sort,
				"goods_id" : goods_id
			},
			success : function(data){
				if(data.code>0){
					showTip(data.message,"success");
				}else{
					showTip(data.message,"error");
				}
			}
		})
	}
	
	/**
	更新二维码
	*/
	function batchUpdateGoodsQrcode(){
		var goods_ids= new Array();
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids.push($(this).val());
			}
		});
		if(goods_ids.length == 0){
			showMessage("error", "请至少选择一件商品");
			return false;
		}
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/goods/updateGoodsQrcode",
			data : {
				"goods_id" : goods_ids,
			},
			success : function(data){
				if (data["code"] > 0) {
					showMessage('success', '二维码更新成功');
					LoadingInfo(1);
				}else{
					showMessage('error', data['message']);
				}	
			}
		})
	}
</script>

</body>
</html>