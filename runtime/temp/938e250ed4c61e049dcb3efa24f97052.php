<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"template/platform/Config/distributionAreaManagement.html";i:1581654354;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
table tr:nth-child(even){
background: #fff;
}
table{
	font-size:12px;
}
.table label{
	display: inline-block;
	vertical-align: middle;
	height: 20px;
	width: 140px;
	line-height: 20px;
	font-weight: normal;
}
.table label input{
	margin-top: -3px;
}
.table label span{
	margin-left: 3px;
}
.num{
	font-weight: normal;
}
.modal-infp-style label input{
	margin-top: -3px;
}
.modal-infp-style label span{
	margin-left: 3px;
}
.modal-infp-style label{
	width: 150px;
	margin-left: 10px;
	display: inline-block;
	font-weight: normal;
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
							
<div class="mod-table">
	<div class="mod-table-head">
		<div class="style0list">
			<table class="table table-striped table-main">
				<colgroup>
					<col style="width: 20%">
					<col style="width: 80%;">
				</colgroup>
				<thead>
					<tr align="left" style="border-bottom: 1px solid #E3E3E3;">
						<th>省</th>
						<th>市</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr align="left">
						<th class="province">			
							<label for="province_<?php echo $vo['province_id']; ?>"><input type="checkbox" id="province_<?php echo $vo['province_id']; ?>" value="<?php echo $vo['province_id']; ?>" name="province_id_<?php echo $vo['province_id']; ?>" onclick="provinceClick(<?php echo $vo['province_id']; ?>,this);" 
							<?php if(!(empty($provinces) || (($provinces instanceof \think\Collection || $provinces instanceof \think\Paginator ) && $provinces->isEmpty()))): if(is_array($provinces) || $provinces instanceof \think\Collection || $provinces instanceof \think\Paginator): if( count($provinces)==0 ) : echo "" ;else: foreach($provinces as $key=>$po): if($vo['province_id'] == $po): ?>checked<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>><span><?php echo $vo['province_name']; ?></span></label>	
						</th>
						<td class="city">
						<?php if(is_array($vo['city_list']) || $vo['city_list'] instanceof \think\Collection || $vo['city_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['city_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?>
							<label for="" style="width: 230px;">
								<input type="checkbox" value="<?php echo $co['city_id']; ?>" name="city_pid_<?php echo $co['province_id']; ?>" class="city_<?php echo $co['city_id']; ?>" pid="<?php echo $co['province_id']; ?>" onclick="cityClick(<?php echo $co['city_id']; ?>,<?php echo $co['province_id']; ?>,this)" <?php if(!(empty($citys) || (($citys instanceof \think\Collection || $citys instanceof \think\Paginator ) && $citys->isEmpty()))): if(is_array($citys) || $citys instanceof \think\Collection || $citys instanceof \think\Paginator): if( count($citys)==0 ) : echo "" ;else: foreach($citys as $key=>$to): if($co['city_id'] == $to): ?>checked<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>>
								<span><?php echo $co['city_name']; ?></span>
								<span class="num">(0)</span>
								<a href="javascript:;" onclick="selectDistrictAjax(<?php echo $co['city_id']; ?>,this);"  style="color: #999;">&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a>
							</label>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</td>	
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<tr>
						<td colspan="2" style="text-align:center"><button type="button" class="btn btn-success" data-dismiss="modal"
					onclick="save();">保存</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<input type="hidden" id="districts" value="<?php if(!(empty($districts) || (($districts instanceof \think\Collection || $districts instanceof \think\Paginator ) && $districts->isEmpty()))): ?><?php echo $districts; endif; ?>">
<!-- 模态框 -->
<div class="modal" id="evaluate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">选择子地区</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<?php if(is_array($districtList) || $districtList instanceof \think\Collection || $districtList instanceof \think\Paginator): $i = 0; $__LIST__ = $districtList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$do): $mod = ($i % 2 );++$i;?>
					<label for="" style="display: none;">
						<input type="checkbox" value="<?php echo $do['district_id']; ?>" name="district_pid_<?php echo $do['city_id']; ?>" class="district_<?php echo $do['district_id']; ?>">
						<span><?php echo $do['district_name']; ?></span>
					</label>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<input type="hidden" id="nowSelectCityId" value="">
			<input type="hidden" id="lowerLevelNumVal" value=""> 
			<div class="modal-footer">
			    <span style="font-size: 12px;color: red;float: left;">选择完成后点击页面最下方的保存后方可生效</span>
				<input type="hidden" id="evaluate_id" value="">
				<button type="button" class="btn btn-success" data-dismiss="modal"
					onclick="selectDistrict();">确认</button>
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal();">关闭</button>
			</div>
		</div>
	</div>
</div>
<script>
	//初始化
	$(function(){  
		var arr = $("#districts").val().split(',');
		$("input[name^=district_pid_]").each(function(i,d){
			var d_id = $(d).val();
			for (var a = 0; a <arr.length; a++) {
				if(d_id == arr[a]){
					$(".district_"+d_id).attr("checked",true);
					arr.splice(a,1);
				}
			}
		})
		$("input[name^=city_pid_]").each(function(i,d){
			var city_id = $(d).val();
			var selectNums = $("input[name=district_pid_"+city_id+"]:checked").length;
			$(this).next().next().text('('+selectNums+')');
		});
	});  
	//点击弹出模态框显示县级地区
	function selectDistrictAjax(city_id,event){
		var city_name = $(event).prev().prev("span").text();
		$("#nowSelectCityId").val(city_id);
		$("#myModalLabel").text("选择 "+city_name+" 子地区");
		$("input[name=district_pid_"+city_id+"]").parent('label').show();
		$("#evaluate").modal('show');
	}
	//点击模态框确认按钮时执行事件
	$(".btn-success").click(function(){
		var city_id = $("#nowSelectCityId").val();
		if(city_id.length>0){
			$("input[name=district_pid_"+city_id+"]").parent('label').hide();
		}
		//将选中的县的值存入数组
		var selectNum =  $("input[name=district_pid_"+city_id+"]:checked").length;
		if(selectNum >0){
			$(".city_"+city_id).attr("checked",true);
		}else{
			$(".city_"+city_id).attr("checked",false);
		}
		var province_id = $(".city_"+city_id).attr("pid");
		if($("input[name=city_pid_"+province_id+"]:checked").length>0){
			$("#province_"+province_id).attr("checked",true);
		}else{
			$("#province_"+province_id).attr("checked",false);
		}
		$(".city_"+city_id).next().next(".num").text('('+selectNum+')');
	})
	//点击省时执行时间
	function provinceClick(province_id,event){
		if($(event).is(":checked")){
			$("input[name=city_pid_"+province_id+"]:checkbox").attr("checked",true);
			$("input[name=city_pid_"+province_id+"]:checkbox").each(function (i,d){
				var city_id = $(d).val();
				$("input[name=district_pid_"+city_id+"]:checkbox").attr("checked",true);
				var selectNums = $("input[name=district_pid_"+city_id+"]:checkbox").length;
				$(this).next().next().text('('+selectNums+')');
			});
		}else{
			$("input[name=city_pid_"+province_id+"]:checkbox").attr("checked",false);
			$("input[name=city_pid_"+province_id+"]:checkbox").each(function (i,d){
				var city_id = $(d).val();
				$("input[name=district_pid_"+city_id+"]:checkbox").attr("checked",false);
				$(this).next().next().text('(0)');
			});
		}
	}
	//点击市时执行事件
	function cityClick(city_id,province_id,event){
		if($(event).is(":checked")){
			$("input[name=district_pid_"+city_id+"]:checkbox").attr("checked",true);
			var selectNums = $("input[name=district_pid_"+city_id+"]:checkbox").length;
			$(event).next().next().text('('+selectNums+')');
		}else{
			$("input[name=district_pid_"+city_id+"]:checkbox").attr("checked",false);
			$(event).next().next().text('(0)');	
		}
		if($("input[name=city_pid_"+province_id+"]:checked").length>0){
			$("input[name=province_id_"+province_id+"]:checkbox").attr("checked",true);
		}else{
			$("input[name=province_id_"+province_id+"]:checkbox").attr("checked",false);
		}
	}
	//关闭模态框
	// function closeModal(){
	// 	
	// }
	$(function(){ 
		$('#evaluate').on('hide.bs.modal', function () {
      		var city_id = $("#nowSelectCityId").val();
			if(city_id.length>0){
				$("input[name=district_pid_"+city_id+"]").parent('label').hide();
			}
  		})
   	});
	//保存所选地区
	function save(){
		var districtArray = new Array();
		$("input[name^=district_pid_]").each(function (i,d){ 
		    if(d.checked) { 
		      	districtArray.push(d.value); 
		    } 
		})
		var cityArray = new Array();
		$("input[name^=city_pid_]").each(function (i,d){ 
		    if(d.checked) { 
		      	cityArray.push(d.value); 
		    } 
		})
		var provinceArray = new Array();
		$("input[name^=province_id_]").each(function (i,d){ 
		    if(d.checked) { 
		      	provinceArray.push(d.value); 
		    } 
		})
		var province_id = provinceArray.join(',');
		var city_id = cityArray.join(',');
		var district_id =districtArray.join(',');
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/config/addorupdatedistributionareaajax",
			data : {
				"province_id" : province_id,
				"city_id" : city_id,
				"district_id" : district_id
			},
			success : function(data){
				if(data['code']>0){
					showMessage("success",data['message'],"PLATFORM_MAIN/config/distributionareamanagement");
				}
			} 
		})	
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