<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:44:"template/platform/Promotion/mansongList.html";i:1581654373;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:27:"template/platform/page.html";i:1581654384;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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

<style>
.modal-infp-style{
width:90%;
	margin:10px auto;
}
.modal-infp-style table{
	width:100%;
}
.modal-infp-style table tr td{
	border: 1px solid #e6e6e6;
    padding: 10px;
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
							

<div class="row padder-v">
	<div class="col-sm-9" style="width:21%;"></div>
	<div class="col-sm-2">
		<input type="text" id="search_text" class="input-sm form-control" placeholder="请输入活动名称">
	</div>
	<div class="col-sm-1">
		<button class="btn btn-sm btn-default" type="button"
			onclick="LoadingInfo(1)">搜索</button>
	</div>
</div>
<section class="panel panel-default">
	<table class="table table-striped b-t b-light text-sm">
		<thead>
			<tr>
				<th width="20"><input type="checkbox"></th>
				<th>活动名称</th>
				<th>有效时间</th>
				<th>审核状态</th>
				<th>活动状态</th>
				<th>创建时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody id="list">
			<tr></tr>
		</tbody>
	</table>
	<script src="PLATFORM_JS/page.js"></script>
<footer class="panel-footer">
	<div class="row" id="page">
		<div class="col-sm-5" >
<!--                     <select class="input-sm form-control input-s-sm inline"> -->
<!--                       <option value="0">Bulk action</option> -->
<!--                       <option value="1">Delete selected</option> -->
<!--                       <option value="2">Bulk edit</option> -->
<!--                       <option value="3">Export</option> -->
<!--                     </select> -->
<!--                     <button class="btn btn-sm btn-default">Apply</button> -->
        </div>
		<div class="col-sm-2 text-center"> 
			<small class="text-muted inline m-tb-8">总计 <span id="total_count_num"></span>个记录 分为<span id="page_count_num"></span>页</small> 
		</div>
		<div class="col-sm-5 text-right text-center-xs">
			<ul class="pagination pagination-sm m-t-none m-b-none">
				<li><a id="beginPage" class="btn btn-sm btn-default disabled">首页</a></li>
				<li><a id="prevPage" class="btn btn-sm btn-default disabled">上一页</a></li>
				<li id="pageNumber"></li>
				<li><a id="nextPage" class="btn btn-sm btn-default">下一页</a></li>
				<li><a id="lastPage" class="btn btn-sm btn-default">末页</a></li>
			</ul>
		</div>
		<input type="hidden" id="page_count" />
	</div>
</footer>
<script>
$(function() {
	$("#page").show();//显示分页z
});
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	$("#page ul li a.active").removeClass("active");
	$(obj).addClass("active");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
$("#beginPage").click(function() {
	if(jumpNumber!=1){
		jumpNumber = 1;
		LoadingInfo(1);
		changeClass("begin");
	}
});
//上一页
$("#prevPage").click(function() {
	var obj = $("#pageNumber .active");
	var index = parseInt(obj.text()) - 1;
	if (index > 0) {
		obj.removeClass("active");
		obj.prev().addClass("active");
		jumpNumber = index;
		LoadingInfo(index);
		//判断是否是第一页
		if (index == 1) {
			changeClass("prev");
		} else {
			changeClass();
		}
	}
});
//下一页
$("#nextPage").click(function() {
	var obj = $("#pageNumber .active");
	//当前页加一（下一页）
	var index = parseInt(obj.text()) + 1;
	if (index <= $("#page_count").val()) {
		jumpNumber = index;
		LoadingInfo(index);
		obj.removeClass("active");
		obj.next().addClass("active");
		//判断是否是最后一页
		if (index == $("#page_count").val()) {
			changeClass("next");
		} else {
			changeClass();
		}
	}
});
//末页
$("#lastPage").click(
		function() {
			jumpNumber = $("#page_count").val();
			if(jumpNumber>1){
				LoadingInfo(jumpNumber);
				$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
				changeClass("next");
			}
		});
</script>
</section>

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
	
<script src="PLATFORM_JS/page.js"></script>
<footer class="panel-footer">
	<div class="row" id="page">
		<div class="col-sm-5" >
<!--                     <select class="input-sm form-control input-s-sm inline"> -->
<!--                       <option value="0">Bulk action</option> -->
<!--                       <option value="1">Delete selected</option> -->
<!--                       <option value="2">Bulk edit</option> -->
<!--                       <option value="3">Export</option> -->
<!--                     </select> -->
<!--                     <button class="btn btn-sm btn-default">Apply</button> -->
        </div>
		<div class="col-sm-2 text-center"> 
			<small class="text-muted inline m-tb-8">总计 <span id="total_count_num"></span>个记录 分为<span id="page_count_num"></span>页</small> 
		</div>
		<div class="col-sm-5 text-right text-center-xs">
			<ul class="pagination pagination-sm m-t-none m-b-none">
				<li><a id="beginPage" class="btn btn-sm btn-default disabled">首页</a></li>
				<li><a id="prevPage" class="btn btn-sm btn-default disabled">上一页</a></li>
				<li id="pageNumber"></li>
				<li><a id="nextPage" class="btn btn-sm btn-default">下一页</a></li>
				<li><a id="lastPage" class="btn btn-sm btn-default">末页</a></li>
			</ul>
		</div>
		<input type="hidden" id="page_count" />
	</div>
</footer>
<script>
$(function() {
	$("#page").show();//显示分页z
});
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	$("#page ul li a.active").removeClass("active");
	$(obj).addClass("active");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
$("#beginPage").click(function() {
	if(jumpNumber!=1){
		jumpNumber = 1;
		LoadingInfo(1);
		changeClass("begin");
	}
});
//上一页
$("#prevPage").click(function() {
	var obj = $("#pageNumber .active");
	var index = parseInt(obj.text()) - 1;
	if (index > 0) {
		obj.removeClass("active");
		obj.prev().addClass("active");
		jumpNumber = index;
		LoadingInfo(index);
		//判断是否是第一页
		if (index == 1) {
			changeClass("prev");
		} else {
			changeClass();
		}
	}
});
//下一页
$("#nextPage").click(function() {
	var obj = $("#pageNumber .active");
	//当前页加一（下一页）
	var index = parseInt(obj.text()) + 1;
	if (index <= $("#page_count").val()) {
		jumpNumber = index;
		LoadingInfo(index);
		obj.removeClass("active");
		obj.next().addClass("active");
		//判断是否是最后一页
		if (index == $("#page_count").val()) {
			changeClass("next");
		} else {
			changeClass();
		}
	}
});
//末页
$("#lastPage").click(
		function() {
			jumpNumber = $("#page_count").val();
			if(jumpNumber>1){
				LoadingInfo(jumpNumber);
				$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
				changeClass("next");
			}
		});
</script>
<script type="text/javascript">
$(function(){
	LoadingInfo(1);
});
	function LoadingInfo(pageIndex) {
		var search_text = $("#search_text").val();
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/promotion/mansongList",
			async : true,
			data : {
				"pageIndex" : pageIndex, "search_text" : search_text
			},
			success : function(data) {
				//alert(JSON.stringify(data));
				$("#total_count_num").text(data["total_count"]);
				$("#page_count_num").text(data["page_count"]);
				$("#page_count").val(data["page_count"]);
				$("#pageNumber a").remove();
				var html = '';
				if (data["data"].length > 0) {
					for (var i = 0; i < data["data"].length; i++) {
						html += '<tr>';
						html += '<td><input type="checkbox" name="sub" value="'+ data['data'][i]['mansong_id']+'"></td>';
						html += '<td>'+data['data'][i]['mansong_name']+'</td>';
						html += '<td>' + data["data"][i]["start_time"] + '--'+data["data"][i]['end_time']+'</td>';
						if(data['data'][i]['examine_status'] == 0){
							html += '<td>待审核</td>';
						}else if(data['data'][i]['examine_status'] == 1){
							html += '<td>已通过</td>';
						}else if(data['data'][i]['examine_status'] == 2){
							html += '<td>已拒绝</td>';
						}
						if(data['data'][i]['status'] == 0){
							html += '<td>未发布</td>';
						}else if(data['data'][i]['status'] == 1){
							html += '<td>正常</td>';
						}else if(data['data'][i]['status'] == 3){
							html += '<td>关闭</td>';
						}else if(data['data'][i]['status'] == 4){
							html += '<td>结束</td>';
						}
						html += '<td>' + data["data"][i]["create_time"] + '</td>';
						html += '<td>';
						if(data['data'][i]['examine_status'] == 0){
							html +='<a href="javascript:;" onclick="setStatusType(' + data["data"][i]["mansong_id"] + ',1);">通过</a>&nbsp;&nbsp;<a href="javascript:;" onclick="setStatusType(' + data["data"][i]["mansong_id"] + ',2);">拒绝</a>&nbsp;&nbsp;';
						}
						
						
						if(data['data'][i]['status'] != 3){
							html +='<a href="javascript:;" onclick="closeMansong('+data['data'][i]['mansong_id']+',0);">关闭</a>&nbsp;&nbsp;';
						}
						if(data['data'][i]['status'] != 1){
							html +='<a href="javascript:;" onclick="delMansong('+data['data'][i]['mansong_id']+');">删除</a>&nbsp;&nbsp;';
						}
						
						html +='<a href="PLATFORM_MAIN/promotion/promotioninfo?mansong_id=' + data["data"][i]["mansong_id"] + '">查看</a></td>';
						html += '</tr>';
					}
				} else {
					html += '<tr align="center"><th colspan="8">暂无符合条件的订单</th></tr>';
				}
				$("#list").html(html);
				var totalpage = $("#page_count").val();
				if (totalpage == 1) {
					changeClass("all");
				}
				var $html = pagenumShow(jumpNumber,totalpage,<?php echo $pageshow; ?>)
				$("#pageNumber").append($html);
			}
		});
	}
	function searchData(){
		LoadingInfo(1);
	}
	
	function setStatusType(mansong_id,type){
		$.ajax({
			type:"post",
			url : "PLATFORM_MAIN/promotion/setstatus",
			async : true,
			data : {
				"mansong_id" : mansong_id, 'type':type
			},
			success : function(data) {
				if (data["code"] > 0) {
					showMessage('success', data["message"],'PLATFORM_MAIN/Promotion/mansongList');
				}else{
					showMessage('error', data["message"]);
				}	
			}
		})
	}
	
	
	//关闭满减送
	function closeMansong(mansong_id){
		$.ajax({
			type:"post",
			url : "PLATFORM_MAIN/Promotion/closeMansong",
			async : true,
			data : {
				"mansong_id" : mansong_id
			},
			success : function(data) {
				if (data["code"] > 0) {
					showMessage('success', data["message"],'PLATFORM_MAIN/Promotion/mansongList');
				}else{
					showMessage('error', data["message"]);
				}	
			}
		})
	}
	//删除满减送
	function delMansong(mansong_id){
		$.ajax({
			type:"post",
			url : "PLATFORM_MAIN/Promotion/delMansong",
			async : true,
			data : {
				"mansong_id" : mansong_id
			},
			success : function(data) {
				if (data["code"] > 0) {
					showMessage('success', data["message"],'PLATFORM_MAIN/Promotion/mansongList');
				}else{
					showMessage('error', data["message"]);
				}	
			}
		})
	}
	function mansongInfo(mansong_id){
		$("#mansongInfo").modal("show");
		$.ajax({
			type:"get",
			url : "PLATFORM_MAIN/Promotion/getMansongDetail",
			async : true,
			data : {
				"mansong_id" : mansong_id
			},
			success : function(data) {
				$("#gift_name").text(data["mansong_name"]);
				$("#time").text(data['start_time']+' 至 '+data['end_time']);
				switch(data['status']){	
					case 0:
						var status_name = '未发布';
				 		break;
					case 1:
						var status_name = '正常';
				  		break;
					case 3:
						var status_name = '已关闭';
						break;
					case 4:
						var status_name = '已结束';
						break;
				}
				$("#status").text(status_name);
				var rule_html = '';
				for(var i=0;i<data['rule'].length;i++){
					rule_html += '<tr class="rule">';
					rule_html += '<td>'+data['rule'][i]['price']+'</td>';
					rule_html += '<td>'+data['rule'][i]['discount']+'</td>';
					rule_html += '<td>'+data['rule'][i]['free_shipping_name']+'</td>';
					rule_html += '<td>'+data['rule'][i]['give_point']+'</td>';
					rule_html += '<td>'+data['rule'][i]['coupon_name']+'</td>';
					rule_html += '<td>'+data['rule'][i]['gift_name']+'</td>';
					rule_html += '</tr>';
				}
				$("#mansongInfo table tr.rule").remove();
				$("#rule").after(rule_html);
				var goods_list = '';
				for(var i=0;i<data['goods_list'].length;i++){
					goods_list += '<tr class="goods_list">';
					goods_list += '<td><img src="__ROOT__/'+data['goods_list'][i]['picture']['pic_cover_micro']+'"></td>';
					goods_list += '<td colspan="5">'+data['goods_list'][i]['goods_name']+'</td>';
					goods_list += '</tr>';
				}
				$("#mansongInfo table tr.goods_list").remove();
				$("#goods_list").after(goods_list);
			}
		})
	}
</script>
<!-- 模态框（Modal） -->
<div class="modal fade hide" id="mansongInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">满减送详情</h4>
            </div>
            <div class="modal-body">
            	<div class="modal-infp-style">
            		<table>
            			<tr>
            				<td>活动名称</td>
            				<td colspan='5' id="gift_name"></td>
            			</tr>
            			<tr>
            				<td>有效期</td>
            				<td colspan='5' id="time"></td>
            			</tr>
            			<tr>
            				<td>活动状态</td>
            				<td colspan='5' id="status"></td>
            			</tr>
            			<tr>
            				<td colspan='6'>优惠规则</td>
            			</tr>
            			<tr id="rule">
            				<td>满足金额</td>
            				<td>减现金</td>
            				<td>免邮费</td>
            				<td>送积分</td>
            				<td>送优惠券</td>
            				<td>送赠品</td>
            			</tr>
            			<tr>
            				<td colspan='6'>商品列表</td>
            			</tr>
            			<tr id="goods_list">
            				<td></td>
            				<td colspan='5'>商品名称</td>
            			</tr>
            		</table>
            	</div>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button></div>
        </div>
    </div>
</div>
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