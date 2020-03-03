<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:35:"template/admin\Order\orderList.html";i:1500286984;s:24:"template/admin\base.html";i:1503110755;s:41:"template/admin\controlCommonVariable.html";i:1500286982;s:30:"template/admin\pageCommon.html";i:1500286981;s:30:"template/admin\openDialog.html";i:1500286981;s:37:"template/admin\Order\orderAction.html";i:1500286984;s:43:"template/admin\Order\orderRefundAction.html";i:1500286984;}*/ ?>
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
		
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<!-- <script type="text/javascript" src="__STATIC__/bootstrap/css/bootstraps.css"></script> -->
<style>
.btnstyle{
	color: #ffffff !important;
	background: green;
	display: block;
	margin: 0 auto;
	margin-bottom: 5px;
}
.modal {
	width: 1070px;
	top:50px;
	left:37%;
}
.modal-backdrop{
	 background-color: #000000;
}

.btn_offline_pay{background: #FF8400;}
.product-img{float:left;}
.product-infor{float:left;margin-left: 10px;width:60%;}
.style0list table{border:1px solid #E3E3E3;}
.style0list  tbody td {border-right: 1px solid #E3E3E3;vertical-align: middle;}
.title-tr td input[type="checkbox"]{margin:0 0 0 7px;}
.title-tr td span{margin-left:10px;}
.edit_button{display: inline-block;}
.fun-a{
	padding:6px 15px;
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
					
					<li><a class="nscs-table-handle_green" href="javascript:;" style="display: none;">右侧按钮测试</a></li>
					
				</ul>
			</div>
		</div>
		<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;"  />
		<div class="main">
			
<input type="hidden" id="order_id">
<table class="mytable">
	<tr>
		<th style="line-height:33px;">
			下单时间：<input type="text" id="startDate" class="input-medium" placeholder="请选择开始日期" onclick="WdatePicker()" />
			&nbsp;-&nbsp;
			<input type="text" id="endDate" placeholder="请选择结束日期" class="input-medium" onclick="WdatePicker()" />
			收货人姓名：<input id="userName" class="input-small" type="text" value="">
			订单编号：<input id="orderNo" class="input-medium" type="text" value=""  style="display:inline-block">
		</th>
		<th><input type="hidden" id="order_status" value="<?php echo $status; ?>"></th>
		<input type="hidden" id="print_select_ids" value="">
	</tr>
</table>
<table class="mytable">
	<tr>
		<th>
			收货人手机号：<input id="receiverMobile" class="input-small" type="text" />
<!-- 			订单状态: -->
<!-- 			<select id="order_status"> -->
<!-- 				<option value="">全部</option> -->
<!-- 				<option value="0">待付款</option> -->
<!-- 				<option value="1">待发货</option> -->
<!-- 				<option value="2">待收货</option> -->
<!-- 				<option value="3">已收货</option> -->
<!-- 				<option value="4">交易成功</option> -->
<!-- 				<option value="5">已关闭</option> -->
<!-- 				<option value="-1">退款中</option> -->
<!-- 				<option value="-2">已退款</option> -->
<!-- 			</select> -->
			支付方式：
			<select id="payment_type">
				<option value="">全部</option>
				<option value="1">微信</option>
				<option value="2">支付宝</option>
				<option value="10">线下支付</option>
			</select>
			<input type="button" onclick="searchData()" value="搜索" />
		</th>
	</tr>
</table>
<?php if($status != '' && $status != 0): ?>
<table class="mytable">
	<tr>
		<th style="line-height:33px;">
			<a class="btn btn-small fun-a" style="line-height: 25px;" id="BatchPrint" href="javascript:void(0)"><i class="icon-printer-gray"></i>批量打印快递单</a>
			<a class="btn btn-small fun-a" style="line-height: 25px;" id="BatchPrintinvoice" href="javascript:void(0)"><i class="icon-printer-gray"></i>批量打印发货单</a>
		</th>
		
	</tr>
</table>
<?php endif; ?>
<div class="style0list">
	<table>
		<colgroup>
			<col width="5%">
			<col width="30%">
			<col width="12%">
			<col width="10%">
			<col width="12%">
			<col width="10%">
			<col width="10%">
			<col width="10%">
		</colgroup>
		<thead>
			<tr align="center">
				<th><label style="margin-left: 5px;"> <input type="checkbox" onclick="CheckAll(this)"></label></th>
				<th>商品信息</th>
				<th>商品清单</th>
				<th>买家</th>
				<th>收货信息</th>
				<th>订单金额</th>
<!-- 				<th>店铺</th> -->
				<th>交易状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>
</div>

<!-- 打印发货单 -->
<!--  <div class="shade" style="width:100%;height:100%;background:#333;opacity: 0.8;"></div>  -->
<div id="prite-send" class="modal order-list-print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="H5">打印发货单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<div class="ordercontent">
			<table class="table table-border-row">
				<colgroup>
					<col style="width: 25%">
					<col style="width: 37%">
					<col style="width: 18%">
					<col style="width: 20%">
				</colgroup>
				<tr>
					<th>订单编号</th>
						<th>商品名称</th>
						<th>快递公司</th>
						<th>运单号</th>
				</tr>
				<tbody id="InvoiceList"></tbody>
			</table>
		</div>
		<form class="form-horizontal" style="display: none;">
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>发件人</label>
				<div class="controls">
					<select id="deliveryShop" class="input-large"></select>
					<span class="help-block" style="display: none;">请输入选择发件人</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<label class="checkbox"></label>
				</div>
			</div>
		</form> 
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<button class="edit_button btn-info" id="invoicePrinPreview" aria-hidden="true">打印预览</button>
		<button class="edit_button" data-dismiss="modal" aria-hidden="true" id="close-btn" style="background-color: #f8f8f8;color: #333;border: 1px solid #ddd;">关闭</button>
		<!--<button class="btn btn-info" onclick="Saveinvoice()" id="Button1"  aria-hidden="true">保存</button>-->
	</div>
</div>
<!-- 打印快递单-->

<div id="prite-send-express" class="modal order-list-print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="H5">打印快递单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<div class="ordercontent">
			<table class="table table-border-row">
				<colgroup>
					<col style="width: 25%">
					<col style="width: 37%">
					<col style="width: 18%">
					<col style="width: 20%">
				</colgroup>
				<tr>
					<th>订单编号</th>
					<th>商品名称</th>
					<th>快递公司</th>
					<th>运单号</th>
				</tr>
				<tbody id="InvoiceList-express"></tbody>
			</table>
		</div>
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>选择快递</label>
				<div class="controls">
					<select id="express_select" class="input-large">
					<?php if(is_array($expressList) || $expressList instanceof \think\Collection || $expressList instanceof \think\Paginator): $i = 0; $__LIST__ = $expressList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['co_id']; ?>"><?php echo $vo['company_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<span class="help-block" style="display: none;">请选择快递</span>
				</div>
			</div>
		</form> 
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<button class="edit_button btn-info" onclick="" id="expressPrinPreview" aria-hidden="true">打印预览</button>
		<button class="edit_button" data-dismiss="modal" aria-hidden="true" id="close-btn" style="background-color: #f8f8f8;color: #333;border: 1px solid #ddd;">关闭</button>
		<!--<button class="btn btn-info" onclick="Saveinvoice()" id="Button1"  aria-hidden="true">保存</button>-->
	</div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade hide" id="Memobox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;left:45%;top:30%;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">备注信息</h4>
			</div>
			<div class="set-style">
				<dl>
					<dt><span class="required">*</span>备注:</dt>
					<dd>
						<p>
							<textarea rows="3" cols="20" id="memo"></textarea>
						</p>
						<p class="error">请输入备注</p>
					</dd>
				</dl>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onclick="addMemoAjax()">保存</button>
			</div>
		</div>
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
 

<style>
.modal-body{max-height:none;}
.editprice-input{width:100px;}
.pick_title{float: left;line-height: 32px; width: 140px;text-align:right;}
.pick_title .required{color:red;margin-right:10px;}
textarea{width: 350px;}  
#pickup_name,#pickup_mobile{width: 350px;}  
</style>
<!-- 模态框（Modal） -->
<div id="edit-price" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 650px;display: none;overflow: overlay;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 10px;">×</button>
		<h3 id="H1">修改价格</h3>
	</div>
	<div class="modal-body">
		<table class="table table-striped table-main table-order-header">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody>
				<tr>
					<th>商品信息</th>
					<th>商品清单</th>
					<th>
						<div class="editprice-tiptxt">涨价或减价<i class="icon-tip"></i>
							<p class="text-tip">-表示减价<i class="icon-down-pic"></i></p>
						</div>
					</th>
					<th>邮费</th>
				</tr>
			</tbody>
		</table>
		<table class="table table-bordered table-order-list">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody id="OrderCommodity"></tbody>
		</table>
		<ul class="edit-price-amountpay">
			<li>
				<span class="amountpay-label">商品总价：</span>
				<span class="amountpay-price" id="goodsmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">商品优惠：</span>
				<span class="amountpay-price" id="discountmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">运费：</span>
				<span class="amountpay-price" id="modifiedFreight"></span>元
			</li>
			<li>
				<div>
					实收款： <span class="amountpay-price reality-price" id="changeTotal"></span>元
					<input type="hidden" id="hiedchangeTotal" />
				</div>
			</li>
		</ul>
	</div>
	<div class="modal-footer">
		<button class="btn btn-info" onclick="updPrice()" id="butSubmit" data-dismiss="modal" aria-hidden="true" style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<div class="modal fade" id="Delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">商品发货</h4>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<div>待发货<span id="no_shipping_num"></span>，已选<span id="checkedbox">0</span></div>
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead>
						<tr>
							<th><label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1" onclick="deliveryCheckAll(this)"></label></th>
							<th>商品</th>
							<th>数量</th>
							<th>物流 | 单号</th>
							<th>状态</th>
						</tr>
					</thead>
					<colgroup>
						<col style="width: 5%;">
						<col style="width: 40%;">
						<col style="width: 10%;">
						<col style="width: 30%;">
						<col style="width: 15%;">
					<colgroup>
					<tbody></tbody>
				</table>
				<div>
					<div style="margin-bottom:5px;">发货方式：</div>
					<label class="checkbox-inline" style="float:left;margin-right:30px;"><input type="radio" name="shipping_type" id="shipping_type0"  value="0"> 无需物流</label>
					<label class="checkbox-inline" style="float:left;"><input type="radio" name=shipping_type id="shipping_type1" value="1" checked="checked"> 需要物流</label>
						
				</div>
				<div style="clear:both;"></div>
				<div class="form-group" id="express_input">
					<select class="form-control input-lg" id="divlogistics_express_company" style="margin-bottom:5px;margin-right:15px;float:left;"></select>
					<div class="col-lg-2"><input type="text" id="divlogistics_express_no" class="form-control" placeholder="请填写快递单号" style="height:19px;"></div>
				</div>
				<div id="receiver_info"></div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="delivery_order_id" value=""/>
				<button type="button" class="btn btn-info" onclick="orderDeliverySubmit()" style="display:inline-block;">提交更改</button>
				<button type="button" class="btn" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<!-- 自提模态 -->
<div class="modal fade" id="pickup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none; margin-left:-365px; width: 700px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">商品提货</h4>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead></thead>
					<colgroup><colgroup>
					<tbody></tbody>
				</table>
				
				<div class="form-group">
				    <div class="pick_title"><span class="required">*</span>提货人：</div>
					<div class="col-lg-4"><input type="text" id="pickup_name" class="form-control" placeholder="请填写提货人姓名"></div>
				</div>
				<div class="form-group">
				    <div class="pick_title"><span class="required">*</span>提货人手机号：</div>
					<div class="col-lg-4"><input type="text" id="pickup_mobile" class="form-control" placeholder="请填写提货人手机号"></div>
				</div>
				<div class="form-group">
				    <div class="pick_title">备注：</div>
					<div class="col-lg-2"><textarea id="pickup_desc"></textarea></div>
				</div>
			
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="pickup_order_id" value=""/>
				<button type="button" class="btn btn-info" onclick="orderPickupSubmit(pickup_order_id)" style="display:inline-block;">确认提货</button>
				<button type="button" class="btn" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<script>
$("#shipping_type1").focus(function(){
	$("#express_input").show();
});

$("#shipping_type0").focus(function(){
	$("#express_input").hide();
});
/*****订单相关操作函数开始*****/
function operation(operation_type, order_id){
	if(operation_type == 'pay'){
		orderOffLinePay(order_id);//线下支付
	}else if(operation_type == 'complete'){
		orderComplete(order_id);//交易完成
	}else if(operation_type == 'delivery'){
		orderDelivery(order_id);//发货
	}else if(operation_type == 'close'){
		orderClose(order_id);//交易关闭
	}else if(operation_type == 'adjust_price'){
		modifyPrice(order_id);//修改价格
	}else if(operation_type == 'pickup'){
		pickuporder(order_id);//提货
	}else if(operation_type == 'seller_memo'){
		orderSellerMemo(order_id);//备注
	}else if(operation_type == 'logistics'){
		//查看物流
		location.href = ADMINMAIN+'/order/orderdetail?order_id='+order_id;
	}
}

function orderDelivery(order_id){
	$("#Delivery").modal('show');
	$("#divlogistics_express_company option").remove();
	$("#Delivery .modal-body table tbody tr").remove();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/orderdeliverydata",
		data : {'order_id':order_id},
		success : function(data) {
			$("#delivery_order_id").val(order_id);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_info").html(receiver_info);
			var co_html = '';
			co_html += '<option value="0">请选择物流公司</option>';
			for(var i=0;i<data['express_company_list'].length;i++){
				if(data['express_company_list'][i]['is_enabled'] == '1'){
					co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'">'+data["express_company_list"][i]["company_name"]+'</option>';
				}
			} 
			$("#divlogistics_express_company").append(co_html);
			$("#divlogistics_express_company").val(data['order_info']["shipping_company_id"]);
			
			var go_html = '';
			var no_shipping_num = 0;
			for(var i=0;i<data['order_goods_list'].length;i++){
				if(data['order_goods_list'][i]['shipping_status'] == 0){
					no_shipping_num++;
				}
				go_html += '<tr>';
				if(data['order_goods_list'][i]['shipping_status'] > 0){
					go_html += '<td><label class="checkbox-inline"><input type="checkbox" value="'+data['order_goods_list'][i]['shipping_status']+'" disabled="true"></label></td>';
				}else{
					go_html += '<td><label class="checkbox-inline"><input type="checkbox" id="'+data['order_goods_list'][i]['order_goods_id']+'" value="'+data['order_goods_list'][i]['shipping_status']+'" onclick="deliveryCheck(this)"></label></td>';
				}
				go_html += '<td><a>'+data['order_goods_list'][i]['goods_name']+'</a></td>';
				go_html += '<td>'+data['order_goods_list'][i]['num']+'</td>';
				if(data['order_goods_list'][i]['shipping_status'] == 0 || data['order_goods_list'][i]['express_info']['express_company'] == undefined){
					go_html += '<td></td>';
				}else{
					go_html += '<td>'+data['order_goods_list'][i]['express_info']['express_company']+' | '+data['order_goods_list'][i]['express_info']['express_no']+'</td>';
				}
				go_html += '<td>'+data['order_goods_list'][i]['shipping_status_name']+'</td>';
				go_html += '</tr>';
			}
			$("#no_shipping_num").html(no_shipping_num);
			$("#Delivery .modal-body table tbody").append(go_html);
		}
	});
}

function orderDeliverySubmit(){
	var order_id = $("#delivery_order_id").val();
	var order_goods_id_array = '';
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]").each(function(i){
		if(0==i){
			order_goods_id_array = $(this).attr('id');
		}else{
			order_goods_id_array += (","+$(this).attr('id'));
		}
	});
	if(order_goods_id_array == ''){
		showMessage('error', '必须选择商品');
		return false;		
	}
	var express_name = $("#divlogistics_express_company").find("option:selected").text();
	var shipping_type = $('#Delivery input[name="shipping_type"]:checked ').val();
	var express_company_id = $("#divlogistics_express_company").val();
	var express_no = $("#divlogistics_express_no").val();
	if(shipping_type == 1){
		if(express_company_id == "0"){
			showMessage('error', '必须选择物流公司');
			return false;		
		}
		if(express_no == ""){
			showMessage('error', '必须填写快递单号');
			return false;	
		}
	}
	
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/orderdelivery",
		data : {'order_id':order_id,"order_goods_id_array":order_goods_id_array,"express_name":express_name,"shipping_type":shipping_type,"express_company_id":express_company_id,"express_no":express_no},
		success : function(data) {
			$("#Delivery").modal('hide');
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}

function deliveryCheckAll(event){
	var checked = event.checked;
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0]").prop("checked",checked);
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

function deliveryCheck(event){
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

//全选
function CheckAll(event){
	var checked = event.checked;
	$(".style0list tbody input[type = 'checkbox']").prop("checked",checked);
}

function orderOffLinePay(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
					$.ajax({
						type : "post",
						url : "ADMIN_MAIN/order/orderofflinepay",
						data : {'order_id':order_id},
						success : function(data) {
							if (data["code"] > 0) {
								showMessage('success', data["message"],window.location.reload());
							}else{
								showMessage('error', data["message"]);
							}
						}
					});
					$(this).dialog('close');
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定线下支付吗？",
	});			
					
					
}
function orderComplete(order_id){
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/ordercomplete",
		data : {'order_id':order_id},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', data["message"],window.location.reload());
			}else{
				showMessage('error', data["message"]);
			}
		}
	});
}

function orderClose(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "ADMIN_MAIN/order/orderclose",
				data : {"order_id" : order_id},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定关闭订单吗？",
	});			
}

//修改价格
function modifyPrice(order_id,orderFreight){
	if(orderFreight == null){
		orderFreight = 0;
	}
	orderInfo ={
    	express_fee: 0,
		total: 0,
		goodsArray: new Array()
	};
	$("#butSubmit").val(order_id);
		var str = "";
		var Total = 0.00;
		var Count = 0;
		$.ajax({
			type: "post",
			url: "ADMIN_MAIN/order/getordergoods",
			data: { "order_id": order_id },
			dataType: "json",
			async: false,
			success: function (jsonData) {
				var Subtotal = 0.0;
				var order_info = jsonData[1];
				jsonData = jsonData[0];
				for (var i = 0 ; i < jsonData.length; i++) {
					Price = (jsonData[i].price * 1);
					Count = (jsonData[i].num * 1);
					Subtotal = parseFloat(Price) * parseInt(Count);//单商品总价
					Total += parseFloat(Subtotal * 1);
					str += "<tr>";
					str += "  <td>";
					str += "<div class='product-img'><img src='__ROOT__/"+jsonData[i]['picture_info']['pic_cover_micro'] + "'></div>";
					str += "<div class='product-infor'>";
					//原总金额
					var item_now_money = parseFloat(jsonData[i].price*jsonData[i].num)+parseFloat(jsonData[i].adjust_money);
					str += "<input type='hidden' id='total"+jsonData[i].order_goods_id+"' value='"+item_now_money*(item_now_money/parseFloat(jsonData[i].goods_money))+"'>";
					str += "<a class='name' href='APP_MAIN?id="+jsonData[i].goods_id+"' target='_blank'>" + jsonData[i].goods_name + "</a>";
					str += "<p class='specification'><span>规格:" + jsonData[i].sku_name + "</span></p>";
					str += "<div class='div-flag-style'>";
					str += "</div>";
					str += "</div>";
					str += "</td>";
					str += "<td>";
					str += "<div class='cell'><span name='Commoditymark' count='" + jsonData[i].num + "' id='" + jsonData[i].goods_id + "' dir='" + jsonData[i].price + "' value='" + jsonData[i].price + "'>￥" + jsonData[i].price + "</span></div>";
					str += "<div class='cell' id='Count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>" + jsonData[i].num + "件</div>";
					/*if(jsonData[i].adjust_money != 0){
						str += "<div class='cell' style='color:gray;'>(" + jsonData[i].adjust_money + "元)</div>";
					} */
					str += "</td>";
					str += "<td>";
					str += "<div class='editprice-discount'><input  type='hidden' id='productPrice" + jsonData[i].order_goods_id + "' value='" + jsonData[i].price + "'><input type='hidden' id='count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>";
					str += "<div class='editprice-minus'><input name='caculatePrice'  onchange=\"caculatePrice()\" id='" + jsonData[i].order_goods_id + "' value='"+jsonData[i].adjust_money+"'  class='editprice-input price' type='number'  placeholder='0'  /></div>";
					str += "</td>"; 
					if (i == 0) {
						str += "<td rowspan='"+jsonData.length+"'>";
						str += "<input onchange=\"caculatePrice()\" id='Freightnumber' type='number' placeholder='0'  class='editprice-input' value='"+order_info.shipping_money+"' ";
						if(orderFreight != 0 || orderFreight != ''){
							str += orderFreight;
						}
						str += "' min='0'/>";
						str += "<p class='muted'>直接输入邮费金额</p>";
						str += "<input type='hidden' id='hidorderNumber' value='" + jsonData[i].order_id + "'>";
						str += "<input type='hidden' id='freighthidden' value='" + orderFreight + "'>";
						str += "<input type='hidden' id='goodsmoneyhidden' value=''>";
						str += "<input type='hidden' id='favourable' value='0'>";
						str += "</td>";
						str += "</tr>";
					}
					$("#OrderCommodity").html(str);
					$("#changeTotal").html(Total.toFixed(2));
					$("#goodsmoney").html(order_info.goods_money);
					$("#goodsmoneyhidden").val(Total);
					var discount_money =order_info.point_money*1.00+order_info.coupon_money*1.00+order_info.user_money*1.00+order_info.promotion_money*1.00;
					$("#discountmoney").html(discount_money);
					$("#changeTotal").html(order_info.pay_money); 
					$("#hiedchangeTotal").html(Total);
				}
				$("#modifiedFreight").html(order_info.shipping_money);
				var freight = $("#Freightnumber").val() == 0 ? 0 : $("#Freightnumber").val(); 
				$('#edit-price').modal('show');
			}
		});
	}
	
	//重新计算
	function caculatePrice(){
		//设置邮费
		if($("#Freightnumber").val() < 0 || $("#Freightnumber").val() == ''){
			showMessage("error", "邮费错误！");
			return false;
		}
		var Freightnumber = $("#Freightnumber").val();//邮费input
		$("#modifiedFreight").html(Freightnumber);
		//调整金额
		var price = 0.00;
		$("input[name = 'caculatePrice']").each(function(i){
			if(0 == i){
				price = parseFloat($(this).val());
			}else{
				price = parseFloat($(this).val()) + parseFloat(price);
			}
		});
		var goods_money  = $("#goodsmoneyhidden").val();
		new_goods_money = (parseFloat(price)+parseFloat(goods_money)).toFixed(2);
		if(new_goods_money <0){
			$(".price").val(-goods_money);
			caculatePrice();
		}
		$("#goodsmoney").html(new_goods_money);
		// 获取邮费
		var modifiedFreight = $("#modifiedFreight").html(); 
		// 获取优惠金额
		var discountmoney = $("#discountmoney").html();
		//计算实收款
		new_hiedchangeTotal = (parseFloat(new_goods_money)+parseFloat(modifiedFreight)-parseFloat(discountmoney)).toFixed(2);
		$("#changeTotal").html(new_hiedchangeTotal);
	}
	
	/**
	* 保存修改的价格
	* $order_id, $goods_money, $shipping_fee
	*/
	function updPrice(){
		var order_id = $("#hidorderNumber").val();
		var order_goods_id_adjust_array = '';
		var shipping_fee = $("#Freightnumber").val();
		$("input[name = 'caculatePrice']").each(function(i){
			if(0 == i){
				order_goods_id_adjust_array = $(this).attr('id')+','+$(this).val();
			}else{
				order_goods_id_adjust_array += ';'+$(this).attr('id')+','+$(this).val();
			}
		});
		$.ajax({
			type: "post",
			url: "ADMIN_MAIN/order/orderadjustmoney",
			data: { "order_id": order_id, "order_goods_id_adjust_array":order_goods_id_adjust_array, "shipping_fee":shipping_fee},
			dataType: "json",
			async: false,
			success: function (data) {
			if (data["code"] > 0) {
					showMessage('success', data["message"],window.location.reload());
				}else{
					showMessage('error', data["message"]);
				}
			}
		});
	}
	
	//自提订单 进行提货
	function pickuporder(order_id)
	{
		$("#pickup").modal('show');
		$("#pickup .modal-body table tbody tr").remove();
		$("#pickup_order_id").val(order_id);
	}
	
	
	//查看订单备注
	function orderSellerMemo(order_id){
		$.ajax({
			type : 'post',
			url : "ADMIN_MAIN/order/getordersellermemo",
			data : { "order_id" : order_id },
			success : function(res){
				$("#order_id").val(order_id);
				$("#memo").val(res);
				$("#Memobox").modal("show");
			}
		});
	}
	
	// 提货进行提交数据
	function orderPickupSubmit(){
		var pickup_order_id = $("#pickup_order_id").val();
		var pickup_name = $("#pickup_name").val();
		var pickup_mobile = $("#pickup_mobile").val();
		var pickup_desc = $("#pickup_desc").val();
		if(pickup_name == ''){
			showMessage('error', '请填写提货人姓名');
			return false;
		}
		if(pickup_mobile == ''){
			showMessage('error', '请填写提货人手机号');
			return false;
		}
		if(pickup_mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
			showMessage('error', '请填写正确格式的手机号!');
			return false;
		}
		$.ajax({
			type: "post",
			url: "ADMIN_MAIN/order/pickuporder",
			data: { "order_id": pickup_order_id, "buyer_name":pickup_name, "buyer_phone":pickup_mobile, "remark":pickup_desc},
			dataType: "json",
			async: false,
			success: function (data) {
			if (data["code"] > 0) {
					showMessage('success', '提货成功',window.location.reload());
				}else{
					showMessage('error', '提货失败');
				}
			}
		});
	}
/*********订单相关操作函数结束*********/
</script>
<div class="modal fade hide" id="confirmRefund" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 650px; overflow: overlay; display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">确认退款</h4>
			</div>
			<div class="modal-body">
				<div class="form-group" style="margin-bottom:10px;">
					<label style="float: left;line-height: 32px;">退款金额：</label>
					<input type="text" id="refund_money_input" class="form-control" placeholder="请填写退款金额">
					<span style="display: none;line-height: 32px;margin-left: 5px;color: red;">请输入退款金额</span>
				</div>
				<div class="form-group" style="width: 100%;float: left;">
					<label style="font-weight: normal;">买家申请退款金额：&nbsp;&nbsp;¥<span id="apply_money">0.00</span></label>
				</div>
				<div class="form-group" style="width: 100%;float: left;">
					<label style="font-weight: normal;">买家实际付款金额：&nbsp;&nbsp;¥<span id="pay_money">0.00</span></label>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="confirm_order_id" value=""/>
				<input type="hidden" id="confirm_order_goods_id" value=""/>
				<input type="hidden" id="pay_money" value=""/>
				<input type="hidden" id="refund_require_money" value=""/>
				<button type="button" class="btn" onclick="confirmRefundOk()">确认</button>
				<button type="button" class="btn" onclick="hideModal()">取消</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="refuseRefund" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;width:300px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">拒绝退款</h4>
			</div>
			<div class="modal-body"><!-- 主要内容 --></div>
			<div class="modal-footer">
				<input type="hidden" id="refuse_order_id" value=""/>
				<input type="hidden" id="refuse_order_goods_id" value=""/>
				<button type="button" class="btn" onclick="refuseRefundType(1)">拒绝本次</button>
				<button type="button" class="btn" onclick="refuseRefundType(2)">永久拒绝</button>
			</div>
		</div>
	</div>
</div>
<script>
//refund_require_money 退款金额
function refundOperation(operation_type, order_id, order_goods_id,refund_require_money){
	if(operation_type == 'agree'){
		//同意退款
		agreeRefund(order_id, order_goods_id);
	}else if(operation_type == 'refuse'){
		//拒绝退款
		refuseRefund(order_id,order_goods_id);
	}else if(operation_type == 'confirm_receipt'){
		//确认收货
		orderGoodsConfirmRecieve(order_id,order_goods_id);
	}else if(operation_type == 'confirm_refund'){
		//确认退款
		confirmRefund(order_id,order_goods_id,refund_require_money);
	}
}
/**
 * 同意退款
 */
function agreeRefund(order_id, order_goods_id)
{
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/ordergoodsrefundagree",
		data : {'order_id':order_id,"order_goods_id":order_goods_id},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["code"]);
			}
		}
	});
}

/**
 * 拒绝退款展示
 */
function refuseRefund(order_id,order_goods_id)
{
	$("#refuse_order_id").val(order_id);
	$("#refuse_order_goods_id").val(order_goods_id);
	var left = ($(window).width()+$('#refuseRefund').outerWidth())/2;
	var top = ($(window).height()-$('#refuseRefund').outerHeight())/2;
	$("#refuseRefund").css({"left": left, "top" : top});
	$("#refuseRefund").modal('show');
}
/**
 * 拒绝退款操作
 */
function refuseRefundType(type){
	var order_id = $("#refuse_order_id").val();
	var order_goods_id = $("#refuse_order_goods_id").val();
	if(type == 1)
	{
		refund_url = "ADMIN_MAIN/order/ordergoodsrefuseonce";
	} else{
		refund_url = "ADMIN_MAIN/order/ordergoodsrefuseforever";
	}
	$.ajax({
		type : "post",
		url : refund_url,
		data : {'order_id':order_id,"order_goods_id":order_goods_id},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', "已拒绝",window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}
function orderGoodsConfirmRecieve(order_id,order_goods_id){
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/ordergoodsconfirmrecieve",
		data : {'order_id':order_id,"order_goods_id":order_goods_id},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}
/**
 * 确认退款界面显示
 * refund_require_money 退款金额
 */
function confirmRefund(order_id,order_goods_id,refund_require_money){
	$("#confirm_order_id").val(order_id);
	$("#confirm_order_goods_id").val(order_goods_id);
	$("#apply_money").text(refund_require_money);
	$("#refund_money_input").next().css("display","none");
	orderGoodsRefundMoney(order_goods_id);
	$("#confirmRefund").modal('show');
}

function hideModal(){
	$("#confirmRefund").modal('hide');
}

//验证用户输入的退款金额是否合法
function validation(){
	var refund_money = $("#refund_money_input").val();
	var pay_money = $("#pay_money").attr("data-pay-money");
	if(refund_money == ""){
		$("#refund_money_input").next().css("display","inline-block").text("请输入退款金额");
		$("#refund_money_input").focus();
		return false;
	}else{
		$("#refund_money_input").next().css("display","none");
	}
	
	if(isNaN(refund_money)){
		$("#refund_money_input").next().css("display","inline-block").text("请输入数字");
		$("#refund_money_input").focus();
		return false;
	}
	
	if(parseFloat(refund_money) < 0 || parseFloat(refund_money)>parseFloat(pay_money)){
		$("#refund_money_input").next().css("display","inline-block").text("退款金额必须大于等于0元小于"+pay_money+"元");
		$("#refund_money_input").focus();
		return false;
	}
	return true;
}


/**
 * 确认退款执行
 */
function confirmRefundOk(){
	var order_id = $("#confirm_order_id").val();
	var order_goods_id = $("#confirm_order_goods_id").val();
	var refund_money = $("#refund_money_input").val();
	if(validation()){
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/order/ordergoodsconfirmrefund",
			data : {'order_id':order_id,"order_goods_id":order_goods_id, "refund_real_money":refund_money},
			success : function(data) {
				if (data['code'] > 0) {
					showMessage('success', "已退款",window.location.reload());
				} else {
					showMessage('error', data["message"]);
				}
			}
		});
	}
}

//查询买家实际支付金额
function orderGoodsRefundMoney(order_goods_id){
	$.ajax({
		url : "ADMIN_MAIN/order/ordergoodsrefundmoney",
		type : "post",
		data : { "order_goods_id" : order_goods_id},
		success : function(data){
			$("#pay_money").text(data);
			$("#pay_money").attr("data-pay-money",data);
		}
	})
}
</script>
<script type="text/javascript">
$(function () { 
	$("[data-toggle='popover']").popover();
});
function searchData(){
	LoadingInfo(1);
}

function LoadingInfo(page_index) {
	var start_date = $("#startDate").val();
	var end_date = $("#endDate").val();
	var user_name = $("#userName").val();
	var order_no = $("#orderNo").val();
	var receiver_mobile = $("#receiverMobile").val();
	var order_status = $("#order_status").val();
	var payment_type = $("#payment_type").val();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/orderlist",
		data : {
			"page_index" : page_index,
			"page_size" : $("#showNumber").val(),
			"start_date" : start_date,
			"end_date" : end_date,
			"user_name" : user_name,
			"order_no" : order_no,
			"order_status" : order_status,
			"receiver_mobile" : receiver_mobile,
			"order_status" : order_status,
			"payment_type" : payment_type
		},
		success : function(data) {
			var html = '';
			if (data["data"].length > 0) {
				for (var i = 0; i < data["data"].length; i++) {
					var out_trade_no = data["data"][i]["out_trade_no"];//交易号
					var order_id = data["data"][i]["order_id"];//订单id
					var order_no = data["data"][i]["order_no"];//订单编号
					var create_time = data["data"][i]["create_time"];//下单时间
					var pic_cover_micro = data["data"][i]["order_item_list"][0]["picture"]['pic_cover_micro'];//商品图
					var goods_id = data["data"][i]["order_item_list"][0]["goods_id"];//商品id
					var goods_name = data["data"][i]["order_item_list"][0]["goods_name"];
					var sku_name = data["data"][i]["order_item_list"][0]["sku_name"];//商品sku
					var price = data["data"][i]["order_item_list"][0]["price"];//商品价格
					var num = data["data"][i]["order_item_list"][0]["num"];//购买数量
					var order_money = data["data"][i]["order_money"];//订单金额
					var shipping_money = data["data"][i]["shipping_money"];//运费
					var seller_memo = data["data"][i]["seller_memo"];//订单备注
					html +="<tr><td colspan='9' style='border-left: 1px solid transparent;height:10px;padding:0px;border-right: 1px solid transparent;'></td></tr>";
					
					html += '<tr class="title-tr">';
					html += '<td colspan="9"><input id="'+out_trade_no+'" type="checkbox" onclick="CheckThis()" value="'+order_id+'" name="sub">';
					html +='<span>订单编号：'+order_no+' 交易号：'+out_trade_no+'</span><span>下单时间：'+create_time+'</span></td></tr>';
					
					html += '<tr><td colspan="2" style="border-right:0;">';
					html += '<div class="product-img"><img src="__ROOT__/'+pic_cover_micro+'"></div>';
					html += '<div class="product-infor">';
					html += '<a href="SHOP_MAIN/goods/goodsinfo?goodsid='+goods_id+'" target="_blank">'+goods_name+'</a>';
					html += '<p class="specification"><span>'+sku_name+'</span></p></div>';
					html += '</div></td>';
					
					html += '<td style="border-right:1px solid #E3E3E3;text-align:center;">';
					html += '<div class="cell" style="display: inline-block;"><span>'+price+'元</span></div>';
					html += '<div class="cell">'+num+'件</div>';
					//调价
					if(data["data"][i]["order_item_list"][0]['adjust_money'] != 0){
						var adjust_money = data["data"][i]["order_item_list"][0]["adjust_money"];//调教
						html += '<div class="cell" style="display: inline-block;"><span>(调价：'+adjust_money+'元)</span></div>';
					}
					if(	data["data"][i]["order_item_list"][0]['refund_status'] != 0){
						//退款
						var order_goods_id = data["data"][i]["order_item_list"][0]["order_goods_id"];//订单项id
						var status_name = data["data"][i]["order_item_list"][0]["status_name"];//状态
						html +='<br><a href="ADMIN_MAIN/order/orderrefunddetail?itemid='+order_goods_id+'">'+status_name+'</a>';
						for(var m = 0; m < data["data"][i]["order_item_list"][0]["refund_operation"].length; m++){
							var operation_type = data["data"][i]["order_item_list"][0]["refund_operation"][m]['no'];//选项类型
							var color = data["data"][i]["order_item_list"][0]["refund_operation"][m]['color'];
							var order_goods_id = data["data"][i]["order_item_list"][0]['order_goods_id'];//订单项id
							var refund_require_money = data["data"][i]['order_item_list'][0]["refund_require_money"];//退款金额
							var name = data["data"][i]["order_item_list"][0]["refund_operation"][m]['name'];//退款状态
							html += '<a class="btn btn-info shipping btnstyle" style="text-align:center;width:50%;background-color:'+color+'" href="javascript:refundOperation(\''+operation_type+'\','+order_id+','+order_goods_id+','+refund_require_money+')">'+name+'</a>';
						}
					}
					html += '</td>';
					
					var row=1;//订单数量，用于设置跨行
					if(data["data"][i]["order_item_list"].length!=null)
					{
						row=data["data"][i]["order_item_list"].length;
					}
					html += '<td rowspan="'+row+'" style="text-align:center"><div class="cell">'+data["data"][i]["user_name"]+'<br/>'+data["data"][i]["order_from_name"]+'</div></td>';
					html += '<td rowspan="'+row+'" style="text-align:center">';
					
					//地址
					var address = data["data"][i]["receiver_province_name"]+data["data"][i]["receiver_city_name"]+data["data"][i]["receiver_district_name"]+data["data"][i]["receiver_address"];
					html += '<div style="text-align:left;"><span class="expressfee">'+data["data"][i]["receiver_name"]+'</span><br/><span class="expressfee">'+data["data"][i]["receiver_mobile"]+'</span>';
					html += '<br/><span class="expressfee">'+address+'</span>';
					html += '</div></td>';
					
					html += '<td rowspan="'+row+'" style="text-align:center">';
					html += '<div class="cell"><b class="netprice" style="color:#666;">'+order_money+'</b><br/>';
					html += '<span class="expressfee">(含快递:'+shipping_money+')</span><br/>';
					html += '<span class="expressfee">'+data["data"][i]["pay_type_name"]+'</span></div></td>';
					
					html += '<td rowspan="'+row+'"><div class="business-status" style="text-align:center">'+data["data"][i]["status_name"]+'<br></div></td>';
					html += '<td rowspan="'+row+'" style="text-align:center;">';
					html += '<a class="btn btn-info shipping btnstyle" style="background:#27a9e3;" href="ADMIN_MAIN/order/orderdetail?order_id='+order_id+'">详情</a>';

					if(data["data"][i]["operation"] != ''){
						for(var m = 0; m < data["data"][i]["operation"].length; m++){
// 							alert(JSON.stringify(data["data"][i]["operation"]));
							html += '<a class="btn btn-info shipping btnstyle" style="background:'+data["data"][i]["operation"][m]["color"]+'" href="javascript:operation(\''+data["data"][i]["operation"][m]['no']+'\','+data["data"][i]["order_id"]+')" >'+data["data"][i]["operation"][m]['name']+'</a>';
						}
					}
					html +='</td></tr>';
					//循环订单项
					//前边已经加载过一次了，所以从第二次开始循环
					for(var j = 1; j < data["data"][i]["order_item_list"].length; j++){
						var pic_cover_micro = data["data"][i]["order_item_list"][j]["picture"]['pic_cover_micro'];//商品图
						var goods_id = data["data"][i]["order_item_list"][j]["goods_id"];//商品id
						var goods_name = data["data"][i]["order_item_list"][j]["goods_name"];//商品名称
						var sku_name = data["data"][i]["order_item_list"][j]["sku_name"];//sku名称
						var price = data["data"][i]["order_item_list"][j]["price"];//价格
						var num = data["data"][i]["order_item_list"][j]["num"];//购买数量
						
						html += '<tr calss="no-rightborder"><td colspan="2" style="border-right:0;">';
						html += '<div class="product-img"><img src="__ROOT__/'+pic_cover_micro+'"></div>';
						html += '<div class="product-infor">';
						html += '<a class="name" href="SHOP_MAIN/goods/goodsinfo?goodsid='+goods_id+'" target="_blank">'+goods_name+'</a>';
						html += '<p class="specification"><span>'+sku_name+'</span></p></div>';
						html += '</div></td>';
						
						html += '<td style="border-left:0px solid #fff">';//商品信息与商品清单的分割线
						html += '<div class="cell" style="display: inline-block;"><span>'+price+'元</span></div>';
						html += '<div class="cell" style="display: inline-block;float:right">'+num+'件</div>';
						//调价
						if(data["data"][i]["order_item_list"][j]['adjust_money'] != 0){
							var adjust_money = data["data"][i]["order_item_list"][j]["adjust_money"];
							html += '<div class="cell" style="display: inline-block;"><span>(调价：'+adjust_money+'元)</span></div>';
						}
						if(	data["data"][i]["order_item_list"][j]['refund_status'] != 0)
						{
							//退款
							var order_goods_id = data["data"][i]["order_item_list"][j]["order_goods_id"];//订单项id
							var status_name = data["data"][i]["order_item_list"][j]["status_name"];//订单状态
							html +='<br><a href="ADMIN_MAIN/order/orderrefunddetail?itemid='+order_goods_id+'">'+status_name+'</a>';
							for(var m = 0; m < data["data"][i]["order_item_list"][j]["refund_operation"].length; m++){
								var operation_type = data["data"][i]["order_item_list"][j]["refund_operation"][m]['no'];//选项类型
								var color = data["data"][i]["order_item_list"][j]["refund_operation"][m]['color'];
								var order_goods_id = data["data"][i]["order_item_list"][j]['order_goods_id'];//订单项id
								var refund_require_money = data["data"][i]['order_item_list'][j]["refund_require_money"];//退款金额
								var name = data["data"][i]["order_item_list"][j]["refund_operation"][m]['name'];//退款状态
								html += '<a class="btn btn-info shipping btnstyle" style="text-align:center;width:50%;background-color:'+color+'" href="javascript:refundOperation(\''+operation_type+'\','+order_id+','+order_goods_id+','+refund_require_money+')" >'+name+'</a>';
							}
						}
						html += '</td>';
						html += '</tr>';
					}
				}
			} else {
				html += '<tr align="center"><th colspan="9">暂无符合条件的订单</th></tr>';
			}
			$(".style0list tbody").html(html);
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}

$("#BatchPrintinvoice").click(function () {
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		$(".Loading").removeClass("style01 style02").addClass("style02"); //黄色
		showMessage('success', "请先勾选文本框再进行批量操作！", "");
	}else{
		showInvoice();
	}
})

$(".close").click(function(){
	$("#prite-send").hide();
})
$("#close-btn").click(function(){
	$("#prite-send").hide();
})

//显示批量打印发货单
function showInvoice() {

	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		url: "ADMIN_MAIN/order/getorderexpresspreview",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (invoiceDate) {
			for (var i = 0; i < invoiceDate.length; i++) {
				str += "<tr>";
				str += "<td><div class='cell'>" + invoiceDate[i].order_no + "</div></td>";
				str += "<td><div class='cell'>" + invoiceDate[i].goods_name + "</div></td>";
				if(invoiceDate[i].express_company == null){
					str += "<td><div class='cell'></div></td>";
				}else{
					str += "<td><div class='cell'>" + invoiceDate[i].express_company + "</div></td>";
				}
				str += "<td><div class=;cell'>" + invoiceDate[i].express_no + "</div></td>";
				str += "</tr>";
			}
		}
	});
	
	var deliverystr = "";
	$.ajax({
		type: "post",
		url: "ADMIN_MAIN/order/getshopinfo",
		dataType: "json",
		data: "oper=getType",
		success: function (deliveryDate) {
			deliverystr += "<option value='" + deliveryDate.shopId + "'>" + deliveryDate.shopName + "</option>";
			$("#deliveryShop").html(deliverystr);
		}
	});
	
	$("#invoicePrinPreview").attr("onclick", "invoicePrinPreview('" + strIDs + "')");
	$("#InvoiceList").html(str);
	$('#prite-send').modal('show');
 
}

//打印预览 发货单
function invoicePrinPreview(ids) {
	var ShopName = $("#deliveryShop option:selected").text();
	if (ids != "") {
		$("#invoicePrintingURL").attr("href", "ADMIN_MAIN/order/printdeliverypreview?order_ids=" + ids + "&ShopName=" + ShopName + "");
		document.getElementById("invoicePrintingURL").click();
	}
}

// 打印预览
function printPreview() {
	var printQueue = new Array();
	var checks = $("#contentForCheck input[type=checkbox]");

	//  将要打印的orderID 加入打印队列
	for (var i = 0; i < checks.length; i++) {
	
		var check = $("#" + checks[i].id).prop("checked");
	
		if (check == true) {
			var checkID = $(checks[i]).val();
			var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
			//printQueue.push(strID); //  将要打印的orderID 加入打印队列
			$.ajax({
				url: "ADMIN_MAIN/order/printpreviewvalidate",
				data: { "id": strID, "condition": "checkIsCanPrtint" },
				dataType: "json",
				async : false, // 让它同步执行
				success: function (returnData) {
					//	alert(returnData.retval);
					//	alert(returnData.outmessage);
					if (returnData.retval == "1") {
						printQueue.push(strID); //  将要打印的orderID 加入打印队列
					} else if (returnData.retval == "-2") {
						Show(returnData.outmessage, "prompt");
					} else if (returnData.retval == '-1') {
						Show(returnData.outmessage, "prompt");
						// alert('要打印的订单号为 ' + strID + ' 没有找到对应的快递公司');
					}
				}
			});
		}
	}
	if (printQueue.length > 0) {
		$("#expressSinglePrintURl").attr("href", "ADMIN_MAIN/order/printexpresspreview?expressIDs=" + printQueue + "&sid="+$("#expressTemplate").val());
		//$("#expressSinglePrintURl").click();
		document.getElementById("expressSinglePrintURl").click();
	} else {
		Show("没有符合打印的订单！", "prompt");
	}
}

//批量打印快递单
$("#BatchPrint").click(function () {
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		$(".Loading").removeClass("style01 style02").addClass("style02"); //黄色
		showMessage('success', "请先勾选文本框再进行批量操作！", "");
	}else{
		showExpress();
	}
})

$(".close").click(function(){
	$("#prite-send-express").hide();
})
$("#close-btn").click(function(){
	$("#prite-send-express").hide();
})

//显示批量打印快递单
function showExpress() {

	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		url: "ADMIN_MAIN/order/getorderexpresspreview",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (invoiceDate) {
			for (var i = 0; i < invoiceDate.length; i++) {
				str += "<tr>";
				str += "<td><div class='cell'>" + invoiceDate[i].order_no + "</div></td>";
				str += "<td><div class='cell'>" + invoiceDate[i].goods_name + "</div></td>";
				if(invoiceDate[i].express_company == null){
					str += "<td><div class='cell'></div></td>";
				}else{
					str += "<td><div class='cell'>" + invoiceDate[i].express_company + "</div></td>";
				}
				str += "<td><div class=;cell'>" + invoiceDate[i].express_no + "</div></td>";
				str += "</tr>";
			}
		}
	});
	
	$("#expressPrinPreview").attr("onclick", "expressPrinPreview('" + strIDs + "')");
	$("#InvoiceList-express").html(str);
	$('#prite-send-express').modal('show');
}

//打印预览 快递单
function expressPrinPreview(ids) {
	var ShopName = $("#deliveryShop option:selected").text();
	var co_id=$("#express_select").val();
	if (ids != "") {
		$("#invoicePrintingURL").attr("href", "ADMIN_MAIN/order/printexpresspreview?order_ids=" + ids + "&ShopName=" + ShopName + "&co_id="+co_id+"");
		document.getElementById("invoicePrintingURL").click();
	}
}

function addmemo(order_id,memo){
	$("#order_id").val(order_id);
	$("#memo").val(memo);
	$("#Memobox").modal("show");
}
function addMemoAjax(){
	var order_id = $("#order_id").val();
	var memo = $("#memo").val();
	if(memo == ''){
		$(".error").css("display","block");
		return false;
	}
	$.ajax({
		url: "ADMIN_MAIN/order/addmemo",
		data: { "order_id": order_id,"memo":memo },
		type : "post",
		success: function(data) {
			if (data > 0) {
				showMessage('success','保存成功');
				location.href="ADMIN_MAIN/order/orderlist";
			}else{
				showMessage('error','保存失败');
			}
		}
	});
}
</script>

</body>
</html>