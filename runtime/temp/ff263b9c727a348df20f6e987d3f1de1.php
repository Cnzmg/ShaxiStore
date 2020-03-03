<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"template/platform/Config/areaManagement.html";i:1581654354;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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

<link rel="stylesheet" href="PLATFORM_CSS/areaManagement.css">
<style>
.fa{line-height: 35px;}
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
	<div class="col-sm-9" style="width:73%;">
		<a href="javascript:;" class="btn btn-sm btn-primary" onclick="addProvince()"><i class="fa fa-plus"></i> 添加一级地区 </a>
	</div>
</div>



<input type="hidden" id="pid" value="0" />
<div class="areaTable">
	<div class="areaTr">
		<div class="areaTh" style="width: 3%"></div>
		<div class="areaTh" style="width: 7%">排序</div>
		<div class="areaTh" style="width: 40%;text-align: left;">名称</div>
		<div class="areaTh" style="width: 15%;">所属区域</div>
		<div class="areaTh" style="width: 15%;">添加子地区</div>
		<div class="areaTh" style="width: 20%;">操作</div>
	</div>
	<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v1): ?>
	<div class="areaTr pid_0" id="province_id_<?php echo $v1['province_id']; ?>" isClick="false">
		<div class="areaTd" style="width: 3%;">
			<?php if($v1['issetLowerLevel'] == 1): ?>
			<a href="javascript:;" onclick="province_tab_switch(<?php echo $v1['province_id']; ?>)" class="tab_jia_<?php echo $v1['province_id']; ?>" style="display: block;"><i class="fa fa-plus-circle"></i></a>
			<a href="javascript:;" onclick="province_tab_switch(<?php echo $v1['province_id']; ?>)" class="tab_jian_<?php echo $v1['province_id']; ?>" style="display: none;"><i class="fa fa-minus-circle"></i></a>
			<?php endif; ?>
		</div>
		<div class="areaTd" style="width: 7%;">
			<input type="text" class="sort" fieldid="<?php echo $v1['province_id']; ?>" fieldname="sort" value="<?php echo $v1['sort']; ?>"  onkeyup="this.value=this.value.replace(/\D/g,'')" size="1" onchange="updateRegionAjax(1,1,this);" style="width: 32px;" />
		</div>
		<div class="areaTd province_<?php echo $v1['province_id']; ?>" style="width: 40%;text-align: left;">
			<input type="text" class="areaName" style="width: 206px;text-align: left;" fieldid="<?php echo $v1['province_id']; ?>" value="<?php echo $v1['province_name']; ?>" onchange="updateRegionAjax(1,2,this);" />
		</div>
		<div class="areaTd province_<?php echo $v1['province_id']; ?>" style="width: 15%;">
			<?php if($v1['area_name'] !=''): ?>
			<span><?php echo $v1['area_name']; ?></span>
			<?php else: ?>
			<span>-</span>
			<?php endif; ?>
		</div>
		<div class="areaTd" style="width: 15%;color: #13A5D5;">
			<a href="javascript:;" onclick="addCity(<?php echo $v1['province_id']; ?>,this);"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;添加子地区</a>
		</div>
		<div class="areaTd" style="width: 20%;color: #13A5D5;">
			<a href="javascript:;" onclick="updateProvince(<?php echo $v1['province_id']; ?>,this,<?php echo $v1['area_id']; ?>);">修改</a>
			<a href="javascript:;" onclick="delRegion(<?php echo $v1['province_id']; ?>,1)">删除</a>
		</div>
	</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<input type="hidden" id="type" />
<input type="hidden" id="event" />
<div class="modal fade " id="evaluate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">添加子地区</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table>
						<tr id="superiorRegionTr">
							<td id="myModaltype" class="right">上级地区：</td>
							<td><input type="text" id="superiorRegion" disabled="" superiorRegionId="" /></td>
						</tr>
						<tr>
							<td class="right"><span style="color:red;margin-right:10px;">*</span>地区名称：</td>
							<td><input type="text" id="regionName" style="margin-bottom: 5px;"/></td>
						</tr>
						
						<tr class="js-area-select">
							<td class="right">所属区域：</td>
							<td>
								<select style="margin: 6px 0 10px;width: 139px;" id="area_select">
									<?php if(is_array($area_list) || $area_list instanceof \think\Collection || $area_list instanceof \think\Paginator): if( count($area_list)==0 ) : echo "" ;else: foreach($area_list as $key=>$area): ?>
									<option value="<?php echo $area['area_id']; ?>"><?php echo $area['area_name']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</td>
						</tr>
						<tr id="zipcode">
							<td class="right">邮政编码：</td>
							<td><input type="text" id="zipcodeVal" maxlength="6" onkeyup="this.value=this.value.replace(/\D/g,'')" /></td>
						</tr>
						<tr>
							<td class="right">排序：</td>
							<td><input type="text" id="regionSort" onkeyup="this.value=this.value.replace(/\D/g,'')" /></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="evaluate_id" />
				<button type="button" class="btn btn-success" onclick="addOrUpdateAjax()">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
function province_tab_switch(module_id){
	if($("#province_id_"+module_id).attr("isClick") == 'false'){
		selectCityListAjax(module_id);
	}
	if($(".city_pid_"+module_id).attr('isShow')== 'true'){
		//闭合
		$(".tab_jian_"+module_id).hide();
		$(".tab_jia_"+module_id).show();
		$(".city_pid_"+module_id).hide(300);
// 		$(".district_pid_"+module_id).hide(300);
		$(".js-district_pic_"+module_id).hide(300);
		$(".city_pid_"+module_id).attr('isShow','false');
	}else{
		
		//展开时
		$(".tab_jian_"+module_id).show();
		$(".tab_jia_"+module_id).hide();
		$(".city_pid_"+module_id).show(500);
		$(".city_pid_"+module_id).attr('isShow','true');
		closeCity(module_id);
	}
}

//查找市级区域
function selectCityListAjax(province_id){
	$.ajax({
		type : "post",
		url : 'PLATFORM_MAIN/config/selectcitylistajax',
		data : {"province_id" : province_id},
		success : function(data){
			if(data.length > 0){
				addInfo = '';
				for (var i = 0; i < data.length; i++) {
					addInfo += '<div class="areaTr city_pid_'+ province_id +'" id="city_id_'+data[i]['city_id']+'" isClick="false" isShow="true">';
					addInfo += '<div class="areaTd" style="width: 3%;">';
					if(data[i]['issetLowerLevel'] == 1){
						addInfo += '<a href="javascript:;" onclick="city_tab_switch('+province_id+','+data[i]['city_id']+')" class="tab_jia_'+data[i]['city_id']+'" style="display: block;"><i class="fa fa-plus-circle"></i></a>';
						addInfo += '<a href="javascript:;" onclick="city_tab_switch('+province_id+','+data[i]['city_id']+')" class="tab_jian_'+data[i]['city_id']+'" style="display: none;"><i class="fa fa-minus-circle"></i></a>';
					}
					addInfo += '</div>';
					addInfo += '<div class="areaTd" style="width: 7%;">';
					addInfo += '<input type="text" class="sort" fieldid="'+data[i]['city_id']+'" fieldname="sort" value="'+data[i]['sort']+'"  size="1" onchange="updateRegionAjax(2,1,this);" style="width: 32px;"></div>';
					addInfo += '<div class="areaTd city_'+data[i]['city_id']+'" style="width: 40%;text-align: left;">';
					addInfo += '<span style="color: #ccc;">|——</span><input type="text" class="areaName" style="width: 206px;text-align: left;" fieldid="'+data[i]['city_id']+'" value="'+data[i]['city_name']+'"  onchange="updateRegionAjax(2,2,this);"></div>';

					addInfo += '<div class="areaTd province_38" style="width:15%;"></div>';
					
					addInfo += '<div class="areaTd" style="width: 15%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="addDistrict('+data[i]['city_id']+',this);"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;添加子地区</a></div>';
					addInfo += '<div class="areaTd" style="width: 20%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="updateCity('+data[i]['city_id']+','+ province_id +',this)" zipcode="'+data[i]['zipcode']+'">修改 </a>';
					addInfo += '<a href="javascript:;" onclick="delRegion('+data[i]['city_id']+',2)">删除</a>';
					addInfo += '</div></div>';
				}
			}
			$("#province_id_"+province_id).after(addInfo);
			$("#province_id_"+province_id).attr("isClick", 'true');
		}
	});
}

//查找市级区域
function selectDistrictListAjax(province_id,city_id){
	$.ajax({
		type : "post",
		url : 'PLATFORM_MAIN/config/selectdistrictlistajax',
		data : {"city_id" : city_id},
		success : function(data){
			//alert(JSON.stringify(data));
			if(data.length > 0){
				addInfo = '';
				for (var i = 0; i < data.length; i++) {
					addInfo += '<div class="areaTr js-district_pic_'+province_id+' district_pid_'+ city_id +'" id="district_id_'+data[i]['district_id']+'" isClick="false">';
					addInfo += '<div class="areaTd" style="width: 3%;">';
					addInfo += '</div>';
					addInfo += '<div class="areaTd" style="width: 7%;">';
					addInfo += '<input type="text" class="sort"  fieldid="'+data[i]['district_id']+'" fieldname="sort" value="'+data[i]['sort']+'"  size="1" onchange="updateRegionAjax(3,1,this);" style="width: 32px;"></div>';
					addInfo += '<div class="areaTd district_'+data[i]['district_id']+'" style="width: 40%;text-align: left;">';
					addInfo += '<span style="color: #ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span><input type="text" class="areaName" style="width: 206px;text-align: left;" fieldid="'+data[i]['district_id']+'" value="'+data[i]['district_name']+'"  onchange="updateRegionAjax(3,2,this);"></div>';
					addInfo += '<div class="areaTd" style="width: 15%;color: #13A5D5;"></div>';
					addInfo += '<div class="areaTd" style="width: 15%;color: #13A5D5;"></div>';
					addInfo += '<div class="areaTd" style="width: 20%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="updateDistrict('+data[i]['district_id']+','+ city_id +',this);">修改</a> ';
					addInfo += '<a href="javascript:;" onclick="delRegion('+data[i]['district_id']+',3)">删除</a>';
					addInfo += '</div></div>';
				}
			}
			$("#city_id_"+city_id).after(addInfo);
			$("#city_id_"+city_id).attr("isClick", 'true');
		}
	});
}

function city_tab_switch(province_id,module_id){
	if($("#city_id_"+module_id).attr("isClick") == 'false'){
		if(province_id == undefined){
			province_id = 0;
		}
		selectDistrictListAjax(province_id,module_id);
	}
	if($(".tab_jia_"+module_id).css('display') != 'block'){
		//闭合
		$(".tab_jian_"+module_id).hide();
		$(".tab_jia_"+module_id).show();
		$(".district_pid_"+module_id).hide(300);
	}else{
		//展开时
		$(".tab_jian_"+module_id).show();
		$(".tab_jia_"+module_id).hide();
		$(".district_pid_"+module_id).show(500);
	}
}

function delRegion(regionId,type){
	if(type == 1 || type == 2){
		reminderInfo = "确认删除所选地区？删除选择地区，其所有下属地区也将会同步删除且不可恢复。";
	}
	if(type == 3){
		reminderInfo = "确认删除所选地区？";
	}
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$(this).dialog('close');
				$.ajax({
					type:"post",
					url:"ADMIN_MAIN/config/deleteregion",
					data:{
						'regionId':regionId,
						'type' : type
					},
					dataType: 'json',
					success:function (data) {
						if(data['code'] > 0){
							showMessage("success", "删除成功", "PLATFORM_MAIN/config/areamanagement");
						}else{
							$("#dialog").dialog({
								 buttons: {
									"确定,#e57373": function() {
										$(this).dialog('close');
									}
								},
								contentText:data['message']
							});
						}
					}
				});
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			}
		},
		contentText : reminderInfo,
	});
}

var appCode = GetUrlAppCode();
var menuCode = GetUrlMenuCode();
if (appCode != 'PLATFORM' && appCode != "" && appCode != null) {
	$("#type").css("display", "none");
	$("#Operate ul").css("display", "none");
	$(".separationLine").css("display", "none");
}

function clearInput(){
	$("#regionSort").val('');
		$("#regionName").val('');
		$("#zipcodeVal").val('');
}
//添加省级区域
function addProvince(){
	$("#myModalLabel").text("添加一级地区");
	$("#superiorRegionTr").hide();
	$("#type").val(6);
	$("#zipcode").hide();
	$(".js-area-select").show();//只有一级地区才显示
	clearInput();
	$("#evaluate").modal('show');
}
//添加市级区域
function addCity(province_id,event){
	$("#myModalLabel").text("添加子地区");
	$("#superiorRegionTr").show();
	var superiorRegion = $("input[class='areaName'][fieldid='"+province_id+"']").val();
	var superiorRegionId = province_id;
	$(".js-area-select").hide();//只有一级地区才显示
	$("#zipcode").show();
	$("#type").val(1);
	$("#superiorRegion").val(superiorRegion);//上级地区
	$("#superiorRegion").attr("superiorRegionId",superiorRegionId);
	clearInput();
	$("#evaluate").modal('show');
}
//添加县级区域
function addDistrict(city_id,event){
	$("#myModalLabel").text("添加子地区");
	$("#superiorRegionTr").show();
	var superiorRegion = $("input[class='areaName'][fieldid='"+city_id+"']").val();
	var superiorRegionId = city_id;
	$("#zipcode").hide();
	$(".js-area-select").hide();//只有一级地区才显示
	$("#type").val(2);
	$("#superiorRegion").attr("superiorRegionId",superiorRegionId);
	$("#superiorRegion").val(superiorRegion);
	clearInput();
	$("#evaluate").modal('show'); 
}
//修改省级区域
function updateProvince(province_id,event,area_id){
	$("#event").val(province_id);
	$("#myModalLabel").text("地区编辑");
	$("#superiorRegionTr").hide();
	$(".js-area-select").show();//只有一级地区才显示
	$("#type").val(3);
	$("#zipcode").hide();
	//获取所修改地区的值
	var province_name = $(".province_"+province_id).children("input").val();
	var sort = $(".province_"+province_id).prev("div").children("input").val();
	$("#regionName").val(province_name);
	$("#regionSort").val(sort);
	if(area_id != undefined){
		$("#area_select").children("option").removeAttr("selected");
		$("#area_select").find("option[value='"+area_id+"']").attr("selected","selected");
	}
	$("#evaluate").modal('show');
}
//修改市级区域
function updateCity(city_id,pid,event){
	$("#event").val(city_id);
	$("#myModalLabel").text("地区编辑");
	$("#superiorRegionTr").show();
	$("#type").val(4);
	$("#zipcode").show();
	$(".js-area-select").hide();//只有一级地区才显示
	//获取所修改地区的值
	var superiorRegion = $(".province_"+pid).children("input").val();
	var city_name = $(".city_"+city_id).children("input").val();
	var sort = $(".city_"+city_id).prev("div").children("input").val();
	var zipcode = $(event).attr("zipcode");
	$("#superiorRegion").val(superiorRegion);
	$("#superiorRegion").attr("superiorRegionId", pid);
	$("#regionName").val(city_name);
	$("#regionSort").val(sort);
	$("#zipcodeVal").val(zipcode);
	$("#evaluate").modal('show');
}
//修改县级区域
function updateDistrict(district_id,pid,event){
	$("#event").val(district_id);
	$("#myModalLabel").text("地区编辑");
	$("#superiorRegionTr").show();
	$("#type").val(5);
	$("#zipcode").hide();
	$(".js-area-select").hide();//只有一级地区才显示
	$("#evaluate").modal('show');

	//获取所修改地区的值
	var superiorRegion = $(".city_"+pid).children("input").val();
	var district_name = $(".district_"+district_id).children("input").val();
	var sort = $(".district_"+district_id).prev("div").children("input").val();
	$("#superiorRegion").val(superiorRegion);
	$("#superiorRegion").attr("superiorRegionId", pid);
	$("#regionName").val(district_name);
	$("#regionSort").val(sort);
	$("#evaluate").modal('show');
}
//添加子级区域
function addOrUpdateAjax(){
	var type = $("#type").val();
	var superiorRegionId = $("#superiorRegion").attr("superiorRegionId");
	var regionName = $("#regionName").val();
		if($("#regionSort").val().length == 0){
			var regionSort = 0;
		}else{
			var regionSort = $("#regionSort").val();
		}
	var zipcode = $("#zipcodeVal").val();
	if(regionName==''){
		$("#regionName").focus();
		showTip('地区名称不能为空','warning');
		return false;
	}
	var area_id = 0;
	if(type ==1){
		var ajaxUrl ="PLATFORM_MAIN/config/addcityajax";
	}
	if(type ==2){
		var ajaxUrl ="PLATFORM_MAIN/config/adddistrictajax";
	}
	if(type ==3){
		var ajaxUrl ="PLATFORM_MAIN/config/updateprovinceajax";
		area_id = $("#area_select").val();//所属区域，只有一级地区有;
	}
	if(type ==4){
		var ajaxUrl ="PLATFORM_MAIN/config/updatecityajax";
	}
	if(type ==5){
		var ajaxUrl ="PLATFORM_MAIN/config/updatedistrictajax";
	}
	if(type == 6){
		var ajaxUrl ="PLATFORM_MAIN/config/addprovinceajax";
		area_id = $("#area_select").val();//所属区域，只有一级地区有;
	}
	var eventId = $("#event").val();
	$.ajax({
		type : "post",
		url : ajaxUrl,
		data : {
			"eventId" : eventId,
			"superiorRegionId" : superiorRegionId,
			"regionName" : regionName,
			"regionSort" : regionSort,
			"zipcode" : zipcode,
			"area_id" : area_id
		},
		success : function(data){
			$("#evaluate").modal('hide');
			if(data['code']>0){
				// showMessage("success", data['message'], "ADMIN_MAIN/Config/areaManagement");
				if(type == 1){
					var addInfo = "";
					addInfo += '<div class="areaTr city_pid_'+ superiorRegionId +'" id="city_id_'+data['code']+'" isClick="false" isShow="true">';
					addInfo += '<div class="areaTd" style="width: 3%;"></div>';
					addInfo += '<div class="areaTd" style="width: 7%;">';
					addInfo += '<input type="text" class="sort"  fieldid="'+data['code']+'" fieldname="sort" value="'+regionSort+'"  size="1" onchange="updateRegionAjax(2,1,this);" style="width: 32px;"></div>';
					addInfo += '<div class="areaTd city_'+data['code']+'" style="width: 40%;text-align: left;">';
					addInfo += '<span style="color: #ccc;">|——</span><input type="text" class="areaName" style="width: 206px;text-align: left;" fieldid="'+data['code']+'" value="'+regionName+'"  onchange="updateRegionAjax(2,2,this);"></div>';
					
					addInfo += '<div class="areaTd province_38" style="width: 15%;"></div>';
					
					addInfo += '<div class="areaTd" style="width: 15%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="addDistrict('+data['code']+',this);"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;添加子地区</a></div>';
					addInfo += '<div class="areaTd" style="width: 20%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="updateCity('+data['code']+','+ superiorRegionId +',this)" zipcode="'+zipcode+'">修改 </a>';
					addInfo += '<a href="javascript:;" onclick="delRegion('+data['code']+',2)">删除</a>';
					addInfo += '</div></div>';
					province_tab_switch(superiorRegionId);
					$(".city_pid_"+superiorRegionId+":last").after(addInfo);
					$(".city_pid_"+superiorRegionId).show();
				}
				if(type == 2){
					var addInfo = "";
					addInfo += '<div class="areaTr district_pid_'+ superiorRegionId +'" id="district_id_'+data['code']+'" isClick="false">';
					addInfo += '<div class="areaTd" style="width: 3%;">';
					addInfo += '</div>';
					addInfo += '<div class="areaTd" style="width: 7%;">';
					addInfo += '<input type="text" class="sort"  fieldid="'+data['code']+'" fieldname="sort" value="'+regionSort+'"  size="1" onchange="updateRegionAjax(3,1,this);" style="width: 32px;"></div>';
					addInfo += '<div class="areaTd district_'+data['code']+'" style="width: 40%;text-align: left;">';
					addInfo += '<span style="color: #ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span><input type="text" class="areaName" style="width: 206px;text-align: left;" fieldid="'+data['code']+'" value="'+regionName+'"  onchange="updateRegionAjax(3,2,this);"></div>';
					
					addInfo += '<div class="areaTd province_38" style="width: 15%;"></div>';
					
					addInfo += '<div class="areaTd" style="width: 15%;color: #13A5D5;"></div>';
					addInfo += '<div class="areaTd" style="width: 20%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="updateDistrict('+data['code']+','+ superiorRegionId +',this);">修改</a> ';
					addInfo += '<a href="javascript:;" onclick="delRegion('+data['code']+',3)">删除</a>';
					addInfo += '</div></div>';
					city_tab_switch(superiorRegionId);
					$(".district_pid_"+superiorRegionId+":last").after(addInfo);
					$(".district_pid_"+superiorRegionId).show();
					$("#regionSort").val('');
					$("#regionName").val('');
				}
				if(type == 6){
					var addInfo = "";
					addInfo += '<div class="areaTr pid_0" id="province_id_'+data['code']+'" isClick="false">';
					addInfo += '<div class="areaTd" style="width: 3%;"></div>';
					addInfo += '<div class="areaTd" style="width: 7%;">';
					addInfo += '<input type="text" class="sort"  fieldid="'+data['code']+'" fieldname="sort" value="'+regionSort+'" size="1" onchange="updateRegionAjax(1,1,this);" style="width: 32px;"></div>';
					addInfo += '<div class="areaTd province_'+data['code']+'" style="width: 40%;text-align: left;">';
					addInfo += '<input type="text" class="areaName" style="width: 206px;text-align: left;" fieldid="'+data['code']+'" value="'+regionName+'"  onchange="updateRegionAjax(1,2,this);"></div>';
					addInfo += '<div class="areaTd province_38" style="width: 15%;">';
					addInfo += '<span>'+$("#area_select").find("option[value='"+area_id+"']").text()+"</span></div>";
					
					addInfo += '<div class="areaTd" style="width: 15%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="addCity('+data['code']+',this);"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;添加子地区</a></div>';
					addInfo += '<div class="areaTd" style="width: 20%;color: #13A5D5;">';
					addInfo += '<a href="javascript:;" onclick="updateProvince('+data['code']+',this);">修改</a> ';
					addInfo += '<a href="javascript:;" onclick="delRegion('+data['code']+',1)">删除</a>';
					addInfo += '</div></div>';
					$(".pid_0:first").before(addInfo);
					$("#regionSort").val('');
					$("#regionName").val('');
				}
				if(type == 3 || type == 4 || type == 5){
					location.reload();
				}
				location.href="PLATFORM_MAIN/config/areamanagement";
			}else{
				showMessage("error",data['message']);
			}
		}
	});
}

function updateRegionAjax(regionType,upType,event){
	if(upType == 1){
		var regionSort = $(event).val();
	}else{
		var regionSort ='';
	}
	if(upType == 2){
		var regionName = $(event).val();
	}else{
		var regionName = ''
	}	
	var regionId = $(event).attr("fieldid");
	
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/config/updateregionajax",
		data : {
			"regionType" : regionType,
			"upType" : upType,
			"regionSort" : regionSort,
			"regionName" : regionName,
			"regionId" : regionId
		},
		success : function(data){
			var flag = "error";
			if(data.code>0){
				flag = "success";
			}
			showTip(data['message'],flag);
		}
	})
}

	function closeCity(province_id){
		$.ajax({
			type : "post",
			url : 'PLATFORM_MAIN/config/selectcitylistajax',
			data : {"province_id" : province_id},
			success : function(data){
				if(data.length > 0){
					for (var i = 0; i < data.length; i++) {
						$(".tab_jian_"+data[i]['city_id']).hide();
						$(".tab_jia_"+data[i]['city_id']).show();
					}
				}
			}
		});
		
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