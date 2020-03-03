<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:38:"template/admin/Account/shopReport.html";i:1579055960;s:24:"template/admin/base.html";i:1579055938;s:41:"template/admin/controlCommonVariable.html";i:1579055938;s:30:"template/admin/pageCommon.html";i:1579055938;s:30:"template/admin/openDialog.html";i:1579055938;}*/ ?>
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
		
<script src="ADMIN_JS/highcharts.js"></script>
<script src="ADMIN_JS/exporting.js"></script>
<style  type="text/css">
body{
	font: 12px/20px "Hiragino Sans GB","Microsoft Yahei",arial,ç€¹å¬©ç¶‹,"Helvetica Neue",Helvetica,STHeiTi,sans-serif !important;
}
.alert{
	color: #C09853;
	height:auto;
}
.alert-info{
	color: #3A87AD;
}
.w210{
	width:210px;
}
.h30 {
	height: 30px !important;
}
.top-alert{
	border: 1px solid #FBEED5;
}
.w450 {
	width: 450px!important;
}
.mr50 {
	margin-right: 50px !important;
}
.count-box li{
	font: 12px/20px 'Hiragino Sans GB','Microsoft Yahei',arial,ç€¹å¬©ç¶‹,'Helvetica Neue',Helvetica,STHeiTi,sans-serif;
}
.mytable {border: 0;}
.style0list tbody td {vertical-align: middle;}
.style0list  tbody tr {border-bottom: 1px dashed  #E3E3E3;}
a{
	cursor:pointer;
}

.charts-nav ul li{
	float:left;
	margin-left:20px;
}

.mt5 li{
	font: 12px/20px 'Hiragino Sans GB','Microsoft Yahei',arial,ç€¹å¬©ç¶‹,'Helvetica Neue',Helvetica,STHeiTi,sans-serif;
}
.text{
	height:18px;
}
.tabmenu{
	border-bottom: 1px solid #e6e6e6;
	
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
			
<div class="alert mt10">
	<ul class="mt5">
		<li>1、符合以下任何一种条件的订单即为有效订单：1）采用在线支付方式支付并且已付款；2）采用货到付款方式支付并且交易已完成</li>
		<li>2、统计图展示了符合搜索条件的有效订单中的下单总金额和下单数量在时间段内的走势情况及与前一个时间段的趋势对比</li>
	</ul>
</div>
<table class="search-form">
	<input type="hidden" name="act" value="statistics_sale" />
	<input type="hidden" name="op" value="sale" />
	<tbody>
		<tr>
			<td class="tr">
				<div class="fr">
					<label class="submit-border"><input type="submit" class="submit" value="搜索" onclick="search();"></label>
				</div>
				<div class="fr">
					<div class="fl" style="margin-right:3px;">
						<select name="search_type" id="search_type" class="querySelect" >
							<option value="1">按照天统计</option>
							<option value="3">按照周统计</option>
							<option value="4">按照月统计</option>
						</select>
					</div>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<div class="alert alert-info mt10" style="clear:both;">
	<ul class="mt5">
		<li>
			<span class="w210 fl h30" style="display:block;">
				<i title="店铺符合搜索条件的订单总金额" class="tip icon-question-sign"></i>
				总下单金额：<strong id="money">0元</strong>
			</span>
			<span class="w210 fl h30" style="display:block;">
				<i title="店铺符合搜索条件的订单数量" class="tip icon-question-sign"></i>
				总下单量：<strong id="num">0</strong>
			</span>
		</li>
	</ul>
	<div style="clear:both;"></div>
</div>

<div id="stat_tabs" class="ui-tabs ui-tabs-nav" style="min-height:500px;padding-top:10px;">
	<div class="tabmenu">
	<ul class="tab pngFix">
		<li class="ui-tabs-selected">
			<a class="a-nav"onclick="getGoodsSalesCharts(1)">下单金额</a>
		</li>
		<li>
			<a class="a-nav" onclick="getGoodsSalesCharts(2)">下单量</a>
		</li>
	</ul>
</div>
<!-- 下单金额 -->
	<div id="money_div" style="width: 930px; display: block;" class="ui-tabs-panel" data-highcharts-chart="1">
		<div class="highcharts-container" id="highcharts-2" style="position: relative; overflow: hidden; width: 930px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &amp; quot; Lucida Grande&amp;quot; , &amp; quot; Lucida Sans Unicode&amp;quot; , Verdana , Arial, Helvetica, sans-serif; font-size: 12px;"></div>
	</div>
	<!-- 下单量 -->
	<div id="num_div" style="width: 930px; "class="ui-tabs-panel ui-tabs-hide hide" >
		<div class="highcharts-container" id="highcharts-3" style="position: relative; overflow: hidden; width: 930px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &amp; quot; Lucida Grande&amp;quot; , &amp; quot; Lucida Sans Unicode&amp;quot; , Verdana , Arial, Helvetica, sans-serif; font-size: 12px;"></div>
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
var saleNumChart,saleNumStatistical,saleNumStatistical, saleUnit,saleTitle,saleMoneyChart,saleMoneyStatistical,saleTimeStatistical,saleMoneyTimeStatistical;
var saleTimeStatistical = [ '00:00', '01:00', '02:00', '03:00', '04:00',
							'05:00', '06:00', '07:00', '08:00', '09:00',
							'10:00', '11:00', '12:00', '13:00', '14:00',
							'15:00', '16:00', '17:00', '18:00', '19:00',
							'20:00', '21:00', '22:00', '23:00' ];
var saleMoneyTimeStatistical = [ '00:00', '01:00', '02:00', '03:00', '04:00',
 							'05:00', '06:00', '07:00', '08:00', '09:00',
							'10:00', '11:00', '12:00', '13:00', '14:00',
							'15:00', '16:00', '17:00', '18:00', '19:00',
							'20:00', '21:00', '22:00', '23:00' ];
var  saleNumStatistical = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var  saleMoneyStatistical = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
$(function() {

	saleNumChart = new Highcharts.Chart("highcharts-2",{
		title : {
			text : "下单金额统计",
			align : "center",
			useHTML : true
		},
		xAxis : {
			categories : saleTimeStatistical
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
				text :saleUnit
			},
			plotLines : [ {
				value : 0,
				width : 1,
				color : '#808080'
			} ]
		},
		tooltip : {
			valueSuffix : saleUnit
		},
		legend : {
			enabled : false
		},
		credits : {
			enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
			text : 'Niushop商城', // 显示的文字
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
			name : '今日',
			data : saleNumStatistical
		}]
	});
	
	saleMoneyChart = new Highcharts.Chart("highcharts-3",{
		title : {
			text : "订单量统计",
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
				text :saleUnit
			},
			plotLines : [ {
				value : 0,
				width : 1,
				color : '#808080'
			} ]
		},
		tooltip : {
			 valueSuffix : saleUnit
		},
		legend : {
			enabled : false
		},
		credits : {
			enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
			text : 'Niushop商城', // 显示的文字
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
			name : '今日',
			data : saleMoneyStatistical
		}]
	});
	search(1);
});
var var_type = 1 ;
//走势图数据
function getGoodsSalesCharts(type){
	$(".a-nav").css("background-color","#FFF");
	$(".a-nav").css("color","#27A9E3");

	var num = type-1;
	$(".a-nav:eq("+num+")").css("background-color","#27A9E3");
	$(".a-nav:eq("+num+")").css("color","#FFF");
	var date = $("#search_type").val();
	var_type = type;
	//type 走势图类型 1 金额 2 数量
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/account/getshoporderchartcount",
		data:{ "type":type, "date":date},
		success : function(data) {	
			if(type == 1){
				saleUnit = "元";
				saleNumStatistical = data[0];
				saleNumChart.update({
					xAxis : {
						categories : saleNumStatistical
					},
					tooltip : {
						 valueSuffix : saleUnit
					},
					series : [ {
						name : "订单金额",
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
				
				$("#num_div").hide();
				$("#money_div").show();
			}else{
				saleUnit = "笔";
				saleTimeStatistical = data[0];
				saleMoneyChart.update({
					xAxis : {
						categories : saleTimeStatistical
					},
					tooltip : {
						 valueSuffix : saleUnit
					},
					series : [ {
						name : "订单量",
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
				$("#num_div").show();
				$("#money_div").hide();
			}
		
		}
	});
}
/**
 * 下单量级下单金额统计
 */
function getShopSaleInfo(){
	var date = $("#search_type").val();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/account/getordershopsalecount",
		data:{"date":date},
		success : function(data) {
			$("#money").text(data["count_money"]);
			$("#num").text(data["count_num"]);
		}
	})
}
/**
 *时间筛选
 */
 function search(){
	 getGoodsSalesCharts(var_type);
	 getShopSaleInfo();
}
</script>

</body>
</html>