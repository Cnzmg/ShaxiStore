<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:49:"template/platform/Config/goodsRecommendClass.html";i:1581654355;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
.col-sm-3 {
    width: 80%;
}
.alert-info{height: 165px;}
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
                <div class="col-sm-9">
                  <a href="javascript:void(0);" onclick="addBlock()" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> 添加促销版块 </a> 
                </div>
              </div>
<section class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" id="block_list">
			<?php if(is_array($goods_recommend_class) || $goods_recommend_class instanceof \think\Collection || $goods_recommend_class instanceof \think\Paginator): if( count($goods_recommend_class)==0 ) : echo "" ;else: foreach($goods_recommend_class as $key=>$v): ?>
				<div class="form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
	                <section class="panel panel-default">
	                  <header class="panel-heading"> 
	                  	<a href="javascript:void(0);" onclick="delGoodsRecommendClass(<?php echo $v['class_id']; ?>,this)" class="label bg-danger pull-right"> 删除 </a> 
	                  	<a href="javascript:void(0);" data-toggle="data" onclick="updateGoodsRecommendClass(<?php echo $v['class_id']; ?>)" class="label bg-primary pull-right"> 编辑 </a>
	                  	<?php echo $v['class_name']; ?> 
	                  </header>
	                  <table class="table table-striped m-b-none text-sm">
	                    <tbody align="center">
	                      <tr>
	                      <?php if(is_array($v['goods_list']) || $v['goods_list'] instanceof \think\Collection || $v['goods_list'] instanceof \think\Paginator): if( count($v['goods_list'])==0 ) : echo "" ;else: foreach($v['goods_list'] as $key=>$vg): ?>
	                        <td><img class="imglogo" src="__UPLOAD__/<?php echo $vg['picture_info']['pic_cover_small']; ?>" alt="<?php echo $vg['goods_info']['goods_name']; ?>" title="<?php echo $vg['goods_info']['goods_name']; ?>"></td>
	                      <?php endforeach; endif; else: echo "" ;endif; ?>
	                      </tr>
	                    </tbody>
	                  </table>
	                </section>
	              </div>
	              <div class="col-sm-2"></div>
	              </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>
		</form>
	</div>
</section>

<div class="modal fade" id="data">
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">促销商品推荐</h4>
      </div>
      <div class="modal-body" style="height:700px;overflow:auto;">
      <form class="form-horizontal">
      	<div class="form-group">
      	<div class="col-sm-12">
           <label>商品推荐模块标题名称</label>
           <input type="hidden" class="form-control" id="class_id" value="" >
           <input type="text" class="form-control" id="class_name" value="" placeholder="请输入促销模块标题名称">
           </div>
        </div>
      	<div class="form-group">
      	<div class="col-sm-12">
           <label>排序</label>
           <input type="text" class="form-control" id="sort" value="" placeholder="排序">
           </div>
      	</div>
        <div class="line line-dashed line-lg pull-in"></div>
        <div class="alert alert-warning alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <p>单击查询出的商品选中，双击已选择的可以删除，最多5个，保存后生效。</p>
                </div>
        <div class="form-group" id="goods_list">
<!--            <div class="col-sm-2"> -->
<!--            		<img class="imglogo" src="__UPLOAD__/upload/admin/album/14875633083.jpg"> -->
<!--            		<label>1231</label> -->
<!--            </div> -->
        </div>
        <div class="line line-dashed line-lg pull-in"></div>
        <p>选择要促销的推荐商品</p>
        <div class="form-group">
      	<div class="col-sm-12">
           <label class="col-sm-2 control-label">选择分类</label>
           <div class="col-sm-3">
           		<select name="account" class="form-control m-b category_first" id="category_first_id" onchange="changeCategory(this, 1)" style="width:145px;height:34px;display: inline-block;">
					<option value="0">商品分类一级</option>
					<?php if(is_array($category_list_1) || $category_list_1 instanceof \think\Collection || $category_list_1 instanceof \think\Paginator): $i = 0; $__LIST__ = $category_list_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc1): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $vc1['category_id']; ?>"><?php echo $vc1['category_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
           		<select name="account" class="form-control m-b hides category_second" id="category_second_id" onchange="changeCategory(this, 2)" style="width:145px;height:34px;">
					<option value="0">商品分类二级</option>
				</select>
				<select name="account" class="form-control m-b hides category_three" id="category_three_id" onchange="changeCategory(this, 3)" style="width:145px;height:34px;">
					<option value="0">商品分类三级</option>
				</select>
           </div>
           </div>
        </div>
        <div class="form-group">
      	<div class="col-sm-12">
           <label class="col-sm-2 control-label">商品名称</label>
           <div class="col-sm-4"><input type="text" class="form-control" id="goods_name" value="" ></div>
           <div class="col-sm-2"><button type="button" class="btn btn-default btn-success" onclick="search_goods()">搜索</button></div>
           </div>
           </div>
           <div class="line line-dashed line-lg pull-in"></div>
      <div class="form-group" id="search_goods_list">
<!--            <div class="col-sm-2"> -->
<!--            		<img class="imglogo" src="__UPLOAD__/upload/admin/album/14875633083.jpg"> -->
<!--            		<label>1231</label> -->
<!--            </div> -->
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-info" onclick="save()">保存</button>
      </div>
    </div>
    <!-- /.modal-content --> </div>
  <!-- /.modal-dialog --> </div>

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
//改变商品分类触发事件
function changeCategory(event, level){
	var category_id = $(event).val();
	if(category_id == 0){
		$(event).parent().find(".category_second option:gt(0)").remove();
		$(event).parent().find(".category_three option:gt(0)").remove();
		return false;
	}
	if(level == 1){
		$(event).parent().find(".category_second").show(300);
		$(event).parent().find(".category_second option:gt(0)").remove();
		$(event).parent().find(".category_three option:gt(0)").remove();
		loadCategoryData(category_id, $(event).parent().find(".category_second"));
	}else if(level == 2){
		$(event).parent().find(".category_three").show(300);
		$(event).parent().find(".category_three option:gt(0)").remove();
		loadCategoryData(category_id, $(event).parent().find(".category_three"));
	}
}
// 加载数据
function loadCategoryData(category_id, obj){
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/config/getgoodscategorylistajax",
		data : {
			'category_id' : category_id,
		},
		async : true,
		success : function(data) {
			//alert(JSON.stringify(data));
			var html = '';
			if(data.length > 0){
				for(var i = 0; i < data.length; i++){
					html += '<option value="'+data[i]['category_id']+'">'+data[i]['category_name']+'</option>';
				}
			}
			$(obj).append(html);
		}
	});
}
function addBlock(){
	$("class_id").val(null);
	var html = '';
	html += '<div class="form-group"><div class="col-sm-2"></div>';
	html += '<div class="col-sm-8">';
	html += '<section class="panel panel-default">';
	html += '<header class="panel-heading"> <a href="javascript:void(0);" onclick="delGoodsRecommendClass(0,this)" class="label bg-danger pull-right"> 删除 </a>';
	html += '<a href="javascript:void(0);" data-toggle="data" onclick="updateGoodsRecommendClass(0)" class="label bg-primary pull-right"> 编辑 </a> 商品推荐 </header>';
	html += '<table class="table table-striped m-b-none text-sm"><tbody align="center">';
	html += '<tr>';
	html += '</tr></tbody></table></section></div><div class="col-sm-2"></div></div>';
	$("#block_list").prepend(html);
}
function updateGoodsRecommendClass(class_id){
	$("#data").modal("show");
	$("#class_name").val();
	$("#goods_list").html();
	$("#class_id").val(class_id);
	if(class_id > 0){
		$.ajax({
			type: 'post',
			url: 'PLATFORM_MAIN/Config/getGoodsRecommendClass',
			data: {'class_id':class_id},
			async: true,
			success:function(data){
//	 			alert(JSON.stringify(data));
				$("#class_name").val(data['class_name']);
				$("#sort").val(data['sort']);
				$("#class_id").val(class_id);
				var goods_list_html = '';
				for(var i=0;i<data['goods_list'].length;i++){
					goods_list_html += '<div class="alert alert-info col-sm-2">';
					goods_list_html += '<button type="button" class="close" data-dismiss="alert">×</button>';
					goods_list_html += '<input type="checkbox" name="selected_goods" value="'+data['goods_list'][i]['goods_id']+'" style="display:none;">';
					goods_list_html += '<img class="imglogo" src="__UPLOAD__/'+data['goods_list'][i]['picture_info']['pic_cover_small']+'">';
					goods_list_html += '<label style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">'+data['goods_list'][i]['goods_info']['goods_name']+'</label>';
					goods_list_html += '</div>';
				}
				$("#goods_list").html(goods_list_html);
			}
		});
	}else{
		$("#class_name").val('');
		$("#sort").val('');
		$("#class_id").val('');	
		$('#goods_list .alert-info').remove();
	}
}
function search_goods(){
	var goods_name = $("#goods_name").val();
	if($("#category_three_id").val() > 0){
		var category_id = $("#category_three_id").val();
		var category_level = 3;
	}else if($("#category_second_id").val() > 0){
		var category_id = $("#category_second_id").val();
		var category_level = 2;
	}else{
		var category_id = $("#category_first_id").val();
		var category_level = 1;
	}
	$.ajax({
		type: 'post',
		url: 'PLATFORM_MAIN/config/searchgoods',
		data: {'goods_name':goods_name,'category_id':category_id, 'category_level':category_level},
		async: true,
		success:function(data){
			var html = '';
			if(data['data'].length > 0){
				for(var i=0;i<data['data'].length;i++){
					html += '<div class="col-sm-2" style="min-height:130px;">';
					html += '<input type="checkbox" name="select_goods" value="'+data['data'][i]['goods_id']+'" style="display:none;">';
					html += '<img class="imglogo" src="__UPLOAD__/'+data['data'][i]['pic_cover_micro']+'" onclick="addSelectGoods(this)">';
					html += '<label style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">'+data['data'][i]['goods_name']+'</label>';
					html += '</div>';
				}
			}else{
				html += '<div class="col-sm-12"><p>暂无商品</p></div>';
			}
			$("#search_goods_list").html(html);
		}
	});
}
function addSelectGoods(event){
	var goods_id_obj = $("#goods_list").find('input[name="selected_goods"]');
	var goods_id_str = '';
	for(var i=0; i<goods_id_obj.length; i++){ 
		goods_id_str += ','+goods_id_obj[i].value; //如果选中，将value添加到变量s中 
	} 
	//判断添加商品的个数
	var goods_list_obj = $("#goods_list").find('input[name="selected_goods"]');
	
	var goods_id = $(event).parent('.col-sm-2').children('input[name="select_goods"]').val();
	var goods_url = $(event).attr("src");
	var goods_name = $(event).parent('.col-sm-2').children('label').html();
	if(goods_id_str.indexOf(goods_id) > 0){
		return false;
	}else{
		var html = '';
		html += '<div class="alert alert-info col-sm-2">';
		html += '<button type="button" class="close" data-dismiss="alert">×</button>';
		html += '<input type="checkbox" name="selected_goods" value="'+goods_id+'" style="display:none;">';
		html += '<img class="imglogo" src="'+goods_url+'" style="min-width:99.2px;">';
		html += '<label style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">'+goods_name+'</label>';
		html += '</div>';
		$("#goods_list").append(html);
	}
}
function save(){
	var class_id = $("#class_id").val();
	var class_name = $("#class_name").val();
	var sort = $("#sort").val();
	var goods_id_obj = $("#goods_list").find('input[name="selected_goods"]');
	var goods_id_str = '';
	for(var i=0; i<goods_id_obj.length; i++){ 
		goods_id_str += ','+goods_id_obj[i].value; //如果选中，将value添加到变量s中 
	} 
	goods_id_str = goods_id_str.substr(1);
	$.ajax({
		type: 'post',
		url: 'PLATFORM_MAIN/Config/updategoodsrecommendclass',
		data: {'class_id':class_id,'class_name':class_name,'goods_id_str':goods_id_str,'sort':sort},
		async: true,
		success:function(data){
			$("#data").modal("hide");
			if(data['code'] > 0){
				showMessage('success',data['message'],'PLATFORM_MAIN/config/goodsrecommendclass');
			}else{
				showMessage('error',data['message']);
			}
		}
	});
}
/**
 * 删除 促销版块
 */
function delGoodsRecommendClass(class_id,e){
	if(class_id > 0){
		$( "#dialog" ).dialog({
	        buttons: {
	            "确定": function() {
	                $(this).dialog('close');
	                $.ajax({
	    				type:"post",
	    				url:"PLATFORM_MAIN/config/delgoodsrecommendclass",
	    				data:{'class_id':class_id},
	    				async:true,
	    				success:function (data) {
	    					if(data['code'] > 0){
	    						showMessage('success', data['message'], 'PLATFORM_MAIN/config/goodsrecommendclass');
	    					}else{
	    						showMessage('error', data['message']);
	    					}
	    				}
	    			});
	            },
	            "取消,#e57373": function() {
	                $(this).dialog('close');
	            }
	        },
	        contentText:"确定删除？",
	    });
	}else{
		$(e).parents('.form-group').remove()
	}
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