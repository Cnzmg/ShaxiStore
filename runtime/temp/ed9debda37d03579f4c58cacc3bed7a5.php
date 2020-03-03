<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"template/platform/Goods/goodsCategoryList.html";i:1581654366;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
	<div class="col-sm-4">
		<a href="PLATFORM_MAIN/Goods/addGoodsCategory"
			class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> 添加商品分类</a>
	</div>
</div>
<section class="panel panel-default">
	<table class="table table-striped b-t b-light text-sm">
		<thead>
			<tr>
				<th width="10"></th>
				<th width="80">排序</th>
				<th class="center">商品分类</th>
				<th class="center">商品分类简称</th>
				<th class="center">关联类型</th>
				<th class="center">是否显示</th>
				<th class="center" width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$v1): ?>
			<tr class="pid_0" style="height: 30px;">
				<td><?php if($v1['child_list'] != array()): ?><a
					href="javascript:;" onclick="tab_switch(<?php echo $v1['category_id']; ?>)"
					class="tab_jia_<?php echo $v1['category_id']; ?>" style="display: block;"><i
						class="fa fa-plus"></i></a><a href="javascript:;"
					onclick="tab_switch(<?php echo $v1['category_id']; ?>)"
					class="tab_jian_<?php echo $v1['category_id']; ?>" style="display: none;"><i
						class="fa fa-minus"></i></a> <?php endif; ?>
				</td>
				<td><input type="text" class="form-control"
					fieldid="<?php echo $v1['category_id']; ?>" fieldname="sort"
					value="<?php echo $v1['sort']; ?>" size="1"></td>
				<td>
					<div class="col-md-12">
						<input type="text" class="form-control"
							fieldid="<?php echo $v1['category_id']; ?>" fieldname="category_name"
							value="<?php echo $v1['category_name']; ?>">
					</div>
				</td>
				<td>
					<input type="text" class="form-control" fieldid="<?php echo $v1['category_id']; ?>" fieldname="short_name" value="<?php echo $v1['short_name']; ?>">
				</td>
				<td class="center">
					<a><?php echo $v1['attr_name']; ?></a>
				</td>
				<td class="center"><a href="#"
					class="<?php echo !empty($v1['is_visible'])?'active' : ''; ?>" data-toggle="class"
					onclick="changeField(<?php echo $v1['category_id']; ?>, 'is_visible', <?php echo !empty($v1['is_visible'])?0 : 1; ?>);"><i
						class="fa fa-check text-success text-active"></i><i
						class="fa fa-times text-danger text"></i></a></td>
				<td class="center"><a
					href="PLATFORM_MAIN/goods/updategoodscategory?category_id=<?php echo $v1['category_id']; ?>">修改</a>
					<a href="javascript:void(0);"
					onclick="delCategory(<?php echo $v1['category_id']; ?>)">删除</a></td>
			</tr>
			<?php if(is_array($v1['child_list']) || $v1['child_list'] instanceof \think\Collection || $v1['child_list'] instanceof \think\Paginator): if( count($v1['child_list'])==0 ) : echo "" ;else: foreach($v1['child_list'] as $key=>$v2): ?>
			<tr class="pid_<?php echo $v1['category_id']; ?>"
				style="height: 30px; display: none;">
				<td><?php if($v2['child_list'] != array()): ?><a
					href="javascript:;" onclick="tab_switch(<?php echo $v2['category_id']; ?>)"
					class="tab_jian_<?php echo $v2['category_id']; ?>" style="display: block;"><i
						class="fa fa-minus"></i></a><a href="javascript:;"
					onclick="tab_switch(<?php echo $v2['category_id']; ?>)"
					class="tab_jia_<?php echo $v2['category_id']; ?>" style="display: none;"><i
						class="fa fa-plus"></i></a> <?php endif; ?>
				</td>
				<td><input type="text" class="form-control"
					fieldid="<?php echo $v2['category_id']; ?>" fieldname="sort"
					value="<?php echo $v2['sort']; ?>" size="1"></td>
				<td><div class="col-md-1" style="padding-right:0px;"></div>
					<div class="col-md-11">
						<input type="text" class="form-control"
							fieldid="<?php echo $v2['category_id']; ?>" fieldname="category_name"
							value="<?php echo $v2['category_name']; ?>">
					</div></td>

				<td><input type="text" class="form-control"
					fieldid="<?php echo $v2['category_id']; ?>" fieldname="short_name"
					value="<?php echo $v2['short_name']; ?>"></td>
				<td class="center">
					<?php echo $v2['attr_name']; ?>
				</td>	
				<td class="center"><a href="#"
					class="<?php echo !empty($v2['is_visible'])?'active' : ''; ?>" data-toggle="class"
					onclick="changeField(<?php echo $v2['category_id']; ?>, 'is_visible', <?php echo !empty($v2['is_visible'])?0 : 1; ?>);"><i
						class="fa fa-check text-success text-active"></i><i
						class="fa fa-times text-danger text"></i></a></td>
				<td class="center"><a
					href="PLATFORM_MAIN/goods/updategoodscategory?category_id=<?php echo $v2['category_id']; ?>">修改</a>
					<a href="javascript:void(0);"
					onclick="delCategory(<?php echo $v2['category_id']; ?>)">删除</a></td>
			</tr>
			<?php if(is_array($v2['child_list']) || $v2['child_list'] instanceof \think\Collection || $v2['child_list'] instanceof \think\Paginator): if( count($v2['child_list'])==0 ) : echo "" ;else: foreach($v2['child_list'] as $key=>$v3): ?>
			<tr class="pid_<?php echo $v2['category_id']; ?> pid_<?php echo $v1['category_id']; ?>"
				style="height: 30px; display: none;">
				<td><label></td>
				<td><input type="text" class="form-control"
					fieldid="<?php echo $v3['category_id']; ?>" fieldname="sort"
					value="<?php echo $v3['sort']; ?>" size="1"></td>
				<td>
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="text" class="form-control"
							fieldid="<?php echo $v3['category_id']; ?>" fieldname="category_name"
							value="<?php echo $v3['category_name']; ?>">
					</div>
				</td>

				<td><input type="text" class="form-control"
					fieldid="<?php echo $v3['category_id']; ?>" fieldname="short_name"
					value="<?php echo $v3['short_name']; ?>"></td>
				<td class="center">
					<?php echo $v3['attr_name']; ?>
				</td>	
				<td class="center"><a href="#"
					class="<?php echo !empty($v3['is_visible'])?'active' : ''; ?>" data-toggle="class"
					onclick="changeField(<?php echo $v3['category_id']; ?>, 'is_visible', <?php echo !empty($v3['is_visible'])?0 : 1; ?>);"><i
						class="fa fa-check text-success text-active"></i><i
						class="fa fa-times text-danger text"></i></a></td>
				<td class="center"><a
					href="PLATFORM_MAIN/goods/updategoodscategory?category_id=<?php echo $v3['category_id']; ?>">修改</a>
					<a href="javascript:void(0);"
					onclick="delCategory(<?php echo $v3['category_id']; ?>)">删除</a></td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
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
	
<script type="text/javascript">
$("table input").change(function(){
	var fieldid = $(this).attr('fieldid');
	var fieldname = $(this).attr('fieldname');
	var fieldvalue = $(this).val();
	changeField(fieldid,fieldname,fieldvalue);
});
function changeField(fieldid,fieldname,fieldvalue){
	$.ajax({
		type:"post",
		url:"PLATFORM_MAIN/goods/modifygoodscategoryfield",
		data:{'fieldid':fieldid,'fieldname':fieldname,'fieldvalue':fieldvalue},
		async:true,
		success: function (data) {
			if(data['code'] <= 0){
				showMessage('error',data['message']);
			}
		}
	});
}
	function tab_switch(module_id){
		if($(".pid_"+module_id).css('display') != 'none'){
			$(".tab_jian_"+module_id).hide();
			$(".tab_jia_"+module_id).show();
			$(".pid_"+module_id).hide(300);
		}else{
			$(".tab_jian_"+module_id).show();
			$(".tab_jia_"+module_id).hide();
			$(".pid_"+module_id).show(500);
		}
	}
	/* 删除分类 */
	function delCategory(category_id) {
		$( "#dialog" ).dialog({
            buttons: {
                "确定": function() {
                    $(this).dialog('close');
					$.ajax({
						type : "post",
						url : "PLATFORM_MAIN/goods/deletegoodscategory",
						data : {
							'category_id' : category_id
						},
						async : true,
						success : function(data) {
							if(data['code'] > 0){
								showMessage('success', data["message"],'PLATFORM_MAIN/goods/goodscategorylist');
							}else{
								showMessage('error', data["message"]);
							}
						}
					});
                },
                "取消,#e57373": function() {
                    $(this).dialog('close');
                }
            },
            contentText:"你确定删除吗？",
            title:"消息提醒"
        });
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