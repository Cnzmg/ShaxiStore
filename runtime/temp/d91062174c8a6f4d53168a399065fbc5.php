<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:43:"template/admin/Saleservice/consultList.html";i:1581654302;s:24:"template/admin/base.html";i:1581654310;s:41:"template/admin/controlCommonVariable.html";i:1581654310;s:30:"template/admin/pageCommon.html";i:1581654310;s:30:"template/admin/openDialog.html";i:1581654310;}*/ ?>
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
		
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<style type="text/css">
.tr-title {
	height: 30px;
	background: #E3E3E3;
	border: 1px solid rgba(234, 233, 233, 0.51);
}

.fun-a {
	margin-top: 0px;
	padding: 6px 15px 0 15px;
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

.remodal-bg.with-red-theme.remodal-is-opening, .remodal-bg.with-red-theme.remodal-is-opened
	{
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
	margin-left: 0px;
}

.edit-group {
	border-bottom: 1px solid #ebebeb;
	margin-bottom: 10px;
}

.edit-group label {
	font-weight: normal;
}

.edit-group-title {
	height: 15px;
	line-height: 15px;
	width: 140px;
	margin-top: 3px;
	margin-bottom: 3px;
}

.edit-group-button {
	border-color: #3283fa;
	border: 1px solid #bbb;
	height: 26px;
	line-height: 24px;
	padding: 0 5px;
}

.group-button-bg {
	background: #3283fa;
	color: #fff;
}

.div-pro-view-name {
	width: 75%;
}

i.hot, i.recommend, i.new {
	font-size: 12px;
	margin-right: 10px;
	font-style: normal;
	color: #fff;
	background-color: #E84C3D;
	border-radius: 2px;
	padding: 1px 2px;
}
</style>
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>

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
			
<table class="mytable">
	<tr>
		<th style="line-height:33px;">
			咨询时间：
			<input type="text" id="startDate" class="input-medium" placeholder="请选择开始日期" onclick="WdatePicker()" />
			&nbsp;-&nbsp;
			<input type="text" id="endDate" placeholder="请选择结束日期" class="input-medium" onclick="WdatePicker()" />
			咨询用户：<input id="goods_name" class="input-medium" type="text" value="" placeholder="请输入商品名称" >
			咨询类型：
			<select id="ct_id">
				<option value="">全部</option>
				<?php if(is_array($ct_list) || $ct_list instanceof \think\Collection || $ct_list instanceof \think\Paginator): if( count($ct_list)==0 ) : echo "" ;else: foreach($ct_list as $key=>$v): ?>
				<option value="<?php echo $v['ct_id']; ?>"><?php echo $v['ct_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<input type="button" onclick="LoadingInfo(1)" value="搜索" />
		</th>
	</tr>
</table>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane active">
		<table class="table table-striped table-main" border="0">
			<colgroup>
				<col style="width: 2%;">
				<col style="width: 10%;">
				<col style="width: 10%;">
				<col style="width: 10%;">
				<col style="width: 7%;">
				<col style="width: 7%;">
			</colgroup>
			<tbody>
				<tr class="table-title" style="background: white; z-index: 10; border: 1px solid #E3E3E3;">
					<th></th>
					<th colspan="2">商品</th>
					<th>咨询用户</th>
					<th colspan="1" style="text-align: center;">咨询时间</th>
					<th style="padding-right: 35px; text-align: center;">操作</th>
				</tr>
				<tr class="trcss">
					<td colspan="3">
						<label style="display: inline-block; vertical-align: middle;">
							<input onclick="CheckAll(this)" type="checkbox">
							<span style="display: inline-block; margin-left: 0px; margin-right: 10px; font-weight: 400;">全选</span>
						</label>
						<a class="btn btn-small fun-a" href="javascript:batchDelete()">批量删除</a>
					</td>
					<td colspan="3" style="text-align: right;">
						
					</td>
				</tr>
			</tbody>
			<tbody id="productTbody" style="border: 0px;"></tbody>
		</table>
	</div>
</div>
<input type="hidden" id="type" value="<?php echo $type; ?>">

<div class="modal fade hide" id="consult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">咨询管理</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table>
						<tr>
							<td><b>咨询内容：</b></td>
							<td id="consult_content"></td>
						</tr>
						<tr>
							<td><b>回复内容:</b></td>
							<td><textarea id="consult_reply"></textarea></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="consult_id" value="">
				<button type="button" class="btn btn-success" data-dismiss="modal"
					onclick="replyConsultAjax()">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
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

<script type="text/javascript">
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
		var ct_id = $("#ct_id").val();
		var type = $("#type").val();
		var start_date = $("#startDate").val();
		var end_date = $("#endDate").val();
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/saleservice/consultlist",
			data : {
				"page_index" : page_index, 
				"ct_id" : ct_id, 
				'type' : type, 
				'page_size' : $("#showNumber").val(),
				"start_date":start_date,
				"end_date":end_date,
				"goods_name" : $("#goods_name").val()
			},
			success : function(data) {
				var html = '';
				if (data["data"].length > 0) {
					for (var i = 0; i < data["data"].length; i++) {
						html += '<tr class="tr-title" style=" width: 1502px;"><td class="td-'+ data["data"][i]["consult_id"]+'"><label><input value="'
								+ data["data"][i]["consult_id"]
								+ '" tj="" name="sub" data-state="'+data["data"][i]["state"]+'" type="checkbox"></label></td>';
						html += '<td colspan="2"><div style="display: inline-block; width: 100%;" class="pro-code"><a href="SHOP_MAIN/goods/goodsinfo?goodsid='+ data["data"][i]["goods_id"]+'" target="_blank"><span style="margin-right:5px;width:60px;float:left;"><img src="__ROOT__/'+ data["data"][i]["picture_info"]["pic_cover_micro"] + '"/></span><span style="width: 335px;">'+ data["data"][i]["goods_name"] + '</span></a></td>';
								/* if(data["data"][i]["state"] == 1){
									html += '<span class="pro-code" style="color: #f35252; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已上架';
								}else{
										html += '<span class="pro-code" style="color: #27A9E3; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已下架';
								} */
						if(data["data"][i]["uid"] == 0){
							html += '<td><span class="pro-code">咨询用户： 游客</span></td>';
						}else{
							html += '<td><span class="pro-code">咨询用户： '+data["data"][i]["member_name"]+'</span></td>';
						}
						html += '<td colspan="2"><span class="pro-code" >咨询时间：'+data["data"][i]["consult_addtime"];
						html += '</span></div></td></tr>';
						html += '<tr>';
						html += '<td colspan="5" style="background: white;">';
						html += '<p><b>咨询内容:</b> <span class="consult_content">'+ data["data"][i]["consult_content"]+'</span></p>';
						if(data["data"][i]["consult_reply"] != ''){
							html += '<p><b>回复内容:</b> <span class="consult_reply">'+ data["data"][i]["consult_reply"]+'</span></p>';
						}
						html += '</td>';
						html += '<td style="background: white;"><div class="cell"><div class="bs-docs-example tooltip-demo"style="text-align: center;">';
						if(data["data"][i]["consult_reply"] != ''){
							html += '<a href="javascript:;" data-placement="bottom" data-original-title="编辑"><span class="edit" style="display: inline-block; width: 19%;" onclick="replyConsult('
								+ data["data"][i]["consult_id"]
								+ ',this)"><i class="icon-edit" style="width: initial;"></i>编辑</span></a>';
						}else{
							html += '<a href="javascript:;" data-placement="bottom" data-original-title="回复"><span class="edit" style="display: inline-block; width: 19%;" onclick="replyConsult('
								+ data["data"][i]["consult_id"]
								+ ',this)"><i class="icon-edit" style="width: initial;"></i>回复</span></a>';
						}
						
						html += '<a href="javascript:void(0)" data-placement="bottom"onclick="deleteConsult('
								+ data["data"][i]["consult_id"]
								+ ')" data-original-title="删除"><span class="del" style="display: inline-block; width: 19%;"><i class="icon-trash" style="width: initial;"></i>删除</span></a></div></div></td></tr>';
					}
				} else {
					html += '<tr align="center"><th colspan="6" style="text-align: center;font-weight: normal; color: #999;">暂无符合条件的数据记录</th></tr>';
				}
				$("#productTbody").html(html);
				initPageData(data["page_count"],data['data'].length,data['total_count']);
				$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
			}
		});
	}

	function batchDelete() {
		var consult_id= new Array();
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				consult_id.push($(this).val());
			}
		});
		if(consult_id.length ==0){
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
		deleteConsult(consult_id);
	}
	
	// 删除
	function deleteConsult(consult_id){
		$( "#dialog" ).dialog({
            buttons: {
                "确定": function() {
                    $(this).dialog('close');
                    $.ajax({
            			type : "post",
            			url : "ADMIN_MAIN/saleservice/deleteconsult",
            			data : {
            				"consult_id" : consult_id.toString()
            			},
    					dataType : "json",
            			success : function(data) {
            				if(data['code'] > 0){
            					LoadingInfo(getCurrentIndex(consult_id,'#productTbody','tr[class="tr-title"]'));
            					showMessage('success', data['message']);
            				}else{
            					showMessage('error', data['message']);
            				}
            			}
            		});
                },
                "取消,#e57373" : function(){
                	$(this).dialog('close');
                }
            },
            contentText:"你确定删除吗？",
            title:"消息提醒"
        });
	}
	//全选
	function CheckAll(event){
		var checked = event.checked;
		$("#productTbody input[type = 'checkbox']").prop("checked",checked);
	}
	//回复 弹出框
	function replyConsult(consult_id, event){
		var consult_content = $(event).parents('tr').find('.consult_content').html();
		var consult_reply = $(event).parents('tr').find('.consult_reply').html();
		if(consult_reply == undefined){
			consult_reply = '';
		}
		$("#consult_reply").val(consult_reply);
		$("#consult").modal('show');
		$("#consult_id").val(consult_id);
		$("#consult_content").html(consult_content);
	}
	// 回复提交
	function replyConsultAjax(){
		var consult_id = $("#consult_id").val();
		var consult_reply = $("#consult_reply").val();
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/saleservice/replyconsultAjax",
			data : {
				"consult_id" : consult_id, "consult_reply" : consult_reply
			},
			success : function(data) {
				if(data['code'] > 0){
					LoadingInfo(getCurrentIndex(consult_id,'#productTbody','tr[class="tr-title"]'));
					showMessage('success', data['message']);
				}else{
					showMessage('error', data['message']);
				}
			}
		});
	}
</script>

</body>
</html>