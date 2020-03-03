<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:49:"template/platform/Goods/updateGoodsAttribute.html";i:1581654366;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
.table{
	width:98%;
	display:table;
    border-left: 1px dotted #e5e5e5;
    border-right: 1px dotted #e5e5e5;
    border-bottom: 1px dotted #e5e5e5;
    background: rgba(204, 204, 204, 0.09);
    padding: 0px 10px 10px 10px;
}
.table-body{
/* 	min-height:50px; */
	max-height:410px;
	overflow-y:auto;
	overflow-x:hidden;
}
.inline-block{display:inline-block;}
.w5{width:5%;}
.w75{width:14%;}
.w19{width:10%;text-align:center;float: right;}
.w100{width:100%;
    height: 40px;
    line-height: 40px;
    border-bottom: 1px dotted #e5e5e5;}
.add-spec{
	height: 40px;
    line-height: 40px;
	border-bottom:1px dotted #E6E6E6;
}
input{
	vertical-align: initial;
}
.table input[type="text"], input[type="password"], input.text, input.password {
    font: 12px/20px Arial;
    color: #777;
    background-color: #FFF;
    vertical-align: baseline;
	margin-bottom:0px;
}
.set-style dl dt {
	text-align:left;
	    width: 7%;
}
label.line-label{
	display:inline-block;
	margin-right:10px;
	font-weight:normal;
}
.edit_button{
	background-color: #53b567;
    border-color: #4bae5f;
    color: #fff;
    width: 80px;
    line-height: 30px;
    border: 0;
}
.ralationguige{
	padding:10px;
	font-weight: normal;
}
.text-active, .active>.text {
     display: block;
}

.attr_table{
	position: fixed;
	top: 10%;
	left: 50%;
	z-index: 1050;
	width: 560px;
	margin-left: -280px;
	background-color: #ffffff;
	border: 1px solid #999;
	border: 1px solid rgba(0, 0, 0, 0.3);
	outline: none;	
	box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
	background-clip: padding-box;
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
							
<section class="panel panel-default">
	<header class="panel-heading font-bold"> 修改类型 </header>
	<div class="panel-body">
		<div class="form-horizontal" id="goods_brand_form" name="form">
			<div class="form-group">
				<label class="col-sm-2 control-label">类型名称：</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="attr_name" name="attr_name" value="<?php echo $info['attr_name']; ?>" required>
				</div>
<!-- 				<label class="col-md-8 error" for="brand_name" ></label> -->
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label">属性排序：</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="sort" value="<?php echo $info['sort']; ?>" placeholder="0" onkeyup='this.value=this.value.replace(/\D/gi,"")' required>
				</div>
<!-- 				<label class="col-md-9 error" for="brand_initial" ></label> -->
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label">是否启用：</label>
				<div class="col-md-4">
					<label class="switch">
                         <input id="is_visible" type="checkbox" <?php if($info['is_use'] == 1): ?>checked="checked"<?php endif; ?>>
                         <span></span> 
                    </label>
				</div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
           	<div class="form-group">
				<div class="table">
					<label class="col-sm-2 control-label">关联规格：</label>
					<?php if($goodsguige != ''): ?>
					<div class="padding-top padding-left padding-right attr-choose-wrap clearfix" style="border-bottom: 1px dotted #e5e5e5;width: 83%;float: right;text-align: left;">
						<?php if(is_array($goodsguige['data']) || $goodsguige['data'] instanceof \think\Collection || $goodsguige['data'] instanceof \think\Paginator): if( count($goodsguige['data'])==0 ) : echo "" ;else: foreach($goodsguige['data'] as $key=>$v): ?>
						<label class="ralationguige" style="margin-top: 8px;"><input type="checkbox" value="<?php echo $v['spec_id']; ?>" <?php if(in_array(($v['spec_id']), is_array($info['spec_id_array'])?$info['spec_id_array']:explode(',',$info['spec_id_array']))): ?>checked<?php endif; ?> name="spec"/><?php echo $v['spec_name']; ?></label>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="table">
				<div class="w100">
					<div class="col-sm-2 control-label"></div>
					<div class="inline-block w75">排序</div>
					<div class="inline-block w75">属性名称</div>
					<div class="inline-block w75">所属类型</div>
					<div class="inline-block w75">属性值</div>
					<div class="inline-block w75">是否筛选</div>
					<div class="inline-block w19">操作</div>
				</div>
				<div class="table-body">
				<?php if(is_array($info['value_list']['data']) || $info['value_list']['data'] instanceof \think\Collection || $info['value_list']['data'] instanceof \think\Paginator): if( count($info['value_list']['data'])==0 ) : echo "" ;else: foreach($info['value_list']['data'] as $key=>$v): ?>
					<div class="w100 value_data">
						<div class="col-sm-2 control-label"><label style="margin-left: 5px;"><input type="checkbox"></label></div>
						<div class="inline-block w75">
							<input type="text" name="value_sort" value="<?php echo $v['sort']; ?>" onchange="updateAttrvalue('value_sort',<?php echo $v['attr_value_id']; ?>,this);" />
						</div>
						<div class="inline-block w75"  style="width:14%;">
							<input type="text" name="value_name" value="<?php echo $v['attr_value_name']; ?>" onchange="updateAttrvalue('value_name',<?php echo $v['attr_value_id']; ?>,this);" />
							<span class="spec_box_<?php echo $v['attr_value_id']; ?>">
							<?php if($v['type'] == 1): else: ?><a href="javascript:;" id="showAttrbox_<?php echo $v['attr_value_id']; ?>" onclick="showAttrbox(<?php echo $v['attr_value_id']; ?>,<?php echo $v['attr_id']; ?>,this);" style="color:#00C0FF;">编辑属性值</a><?php endif; ?>
							</span>
							<input type="hidden" name="attr_value_id" value="<?php echo $v['attr_value_id']; ?>" />
						</div>
						
						<div class="inline-block w75">
							<select class="selectbox" id="type_box_<?php echo $v['attr_value_id']; ?>" value="<?php echo $v['type']; ?>" onchange="updateAttrvalue('type_box',<?php echo $v['attr_value_id']; ?>,this);" style="width:110px;">
								<option value="1" <?php if($v['type'] == 1): ?>selected="selected"<?php endif; ?>>输入框</option>
								<option value="2" <?php if($v['type'] == 2): ?>selected="selected"<?php endif; ?>>单选框</option>
								<option value="3" <?php if($v['type'] == 3): ?>selected="selected"<?php endif; ?>>复选框</option>
							</select>
						</div>
						
						<div class="inline-block w75 w140" id="value_<?php echo $v['attr_value_id']; ?>" title="<?php echo $v['value']; ?>" >
							<?php echo $v['value']; ?>
							<input type="hidden" class="value_<?php echo $v['attr_value_id']; ?>" value="<?php echo $v['value']; ?>" />
						</div>
						
						
						<div class="inline-block w75" style="width:10%;">
							<?php if($v['is_search'] == 0): ?>
								<a href="javascript:;" class="is_search" is_search="0" onclick="updateAttrvalue('is_search',<?php echo $v['attr_value_id']; ?>,this);"><i class="fa fa-times text-danger text"></i></a>
							<?php else: ?>
								<a href="javascript:;" class="is_search" is_search="1" onclick="updateAttrvalue('is_search',<?php echo $v['attr_value_id']; ?>,this);"><i class="fa fa-check text-success text-active"></i></a>
							<?php endif; ?>
						</div>
						<div class="inline-block w19"><a href="javascript:;" onclick="delOldAttributeValue(this, <?php echo $v['attr_id']; ?>, <?php echo $v['attr_value_id']; ?>)">删除</a></div>
					</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div><div class="col-sm-2 control-label"><label style="margin-left: 5px;"></label></div><a href="javascript:;" onclick="addSpecValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            
              <!-- 点击编辑弹出框开始 -->
				<div class="attr_table" id="Attrbox" style="display:none;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">编辑属性值</h3>
					</div>
					<div class="w100">
						<div class="inline-block w5"></div>
						<div class="inline-block w75" style="width:80%;">属性名称</div>
						<div class="inline-block w19">操作</div>
					</div>
					<div class="table-body">
						<div class="w100 Spec_data">
							<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox"></label></div>
							<div class="inline-block w75" style="width:57%">
								<input type="text" name="attr_value" style="width:200px;">
							</div>
							<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>
						</div>
					</div>
					<div class="addSpec"><a href="javascript:;" onclick="addAttrSmallValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
						<div class="modal-footer">
							<input type="hidden" id="click_order"/>
							<button class="btn btn-info" onclick="submitAttrValue()" style="display:inline-block;">保存</button>
							<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
						</div>
					</div>
				<!-- 点击编辑弹出框结束 -->
          
				
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<input type="hidden" id="attr_id" value="<?php echo $attr_id; ?>" />
					<button class="edit_button" onclick="updateAttributeService();">提交</button>
<!-- 					<a href="javascript:void(0);" onclick="addGoodsBrandAjax()" class="btn btn-primary">保存</a> -->
				</div>
			</div>
		</div>
	</div>
</section>

<script>
//点击编辑属性值弹出框事件
function showAttrbox(attr_value_id,attr_id,e){
	$("#Attrbox").show();
	var click_order = $("#click_order").attr('click_order',attr_value_id);
	var value_str = $(e).parents(".value_data").find(".value_"+attr_value_id).val();
	if(value_str != undefined){
		var value_arr = value_str.split(',');
		var html = '';
		for(var i=0; i<value_arr.length; i++){
			html += '<div class="w100 Spec_data">';
			html += '<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox" style=""></label></div>';
			html += '<div class="inline-block w75" style="width:80%">';
			html += '<input type="text" name="attr_value" style="width:200px;margin-left:4px;line-height:normal;margin-top:7px;" value="'+value_arr[i]+'">';
			html += '</div>';
			html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
			html += '</div>';
		}
	}else{
		var html = '';
		html += '<div class="w100 Spec_data">';
		html += '<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox" style=""></label></div>';
		html += '<div class="inline-block w75" style="width:80%">';
		html += '<input type="text" name="attr_value" style="width:200px;margin-left:4px;line-height:normal;margin-top:7px;" value="">';
		html += '</div>';
		html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
		html += '</div>';
	}
	$(".Spec_data").remove();
	$(".attr_table .table-body").append(html);
}
$(".close").click(function(){
	
	$("#Attrbox").hide();
})
$(".btn").click(function(){
	
	$("#Attrbox").hide();
})

function addAttrSmallValue(e){
	var spec_data_num = $(".Spec_data").length;
	var html = '<div class="w100 Spec_data">';
	html += '<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox" /></label></div>';
	html += '<div class="inline-block w75" style="width:80%">';
	html += '<input type="text" name="attr_value" style="width:200px;margin-left: 4px;line-height:normal;margin-top:7px;">';
	html += '</div>';
	html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
	html += '</div>';
	$(e).parents(".attr_table").find(".table-body").append(html);

}
function delSpecValue(e){
	$(e).parents(".Spec_data").remove();
}

function submitAttrValue(){
	var click_order = $("#click_order").attr('click_order');
	var attr_value_obj = $("input[name='attr_value']");
	var attr_value_str = '';
	attr_value_obj.each(function(i){
		if(attr_value_obj.eq(i).val() != ''){
			attr_value_str += ',' + $.trim(attr_value_obj.eq(i).val());
		}
	});
	attr_value_str = attr_value_str.substr(1);
	$("#value_"+click_order).text(attr_value_str);
	$("#value_"+click_order).append('<input type="hidden" class="value_'+click_order+'" value="'+ attr_value_str +'">');
	updateAttrvalue('value', click_order, attr_value_str);
	
}

function updateAttrvalue(type,attr_value_id,e){
	$("#Attrbox").hide();
	var field_name = '';
	var field_value = '';
	if(type == 'value_sort'){
		field_name = 'sort';
		field_value = $(e).val();
	}else if(type == 'value_name'){
		field_name = 'attr_value_name';
		field_value = $(e).val();
		if(field_value == ''){
			$(e).focus();
			showMessage('error', '属性名称不能为空');
			return false;
		}
	}else if(type == 'type_box'){
		var attr_id = $("#attr_id").val();
		if($(e).val()==1){
			$(e).parents(".value_data").find(".spec_box_"+attr_value_id).html('<a href="javascript:;" style="color: #777;"></a>');
			updateAttrvalue('value',attr_value_id,'');
			field_name = 'type';
			field_value = $(e).val();
			$(e).parents(".value_data").find("#value_"+attr_value_id).html('<input type="hidden" class="value_'+attr_value_id+'" value="">');
			$("#Attrbox .Spec_data:gt(0)").remove();
			$("#Attrbox .Spec_data").eq(0).find("input[name='attr_value']").val('');
		}else{
			$(e).parents(".value_data").find(".spec_box_"+attr_value_id).html('<a href="javascript:;" id="showAttrbox_'+attr_value_id+'" onclick="showAttrbox('+attr_value_id+','+attr_id+',this);" style="color:#00C0FF;">编辑属性值</a>');
			$(e).parents(".value_data").find("#value_"+attr_value_id).html('<input type="hidden" class="value_'+attr_value_id+'" value="">');
			$("#Attrbox .Spec_data:gt(0)").remove();
			$("#Attrbox .Spec_data").eq(0).find("input[name='attr_value']").val('');
			return false;
		}
	}else if(type == 'value'){
		var type = $('#type_box_'+attr_value_id).val();
		field_name = 'value';
		field_value = e;
		if(type > 1){
			if(field_value == ''){
				$('#type_box_'+attr_value_id).focus();
				showMessage('error', '类型为单选框或复选框时，属性值不能为空');
				return false;
			}else{
				$.ajax({
					type : "post",
					url : "PLATFORM_MAIN/goods/modifyattributevalueservice",
					data : {
						'attr_value_id' : attr_value_id,
						'field_name' : 'type',
						'field_value' : type
					},
					dataType : "json",
					success : function(data) {
					}
				});
			}
		}
	}else if(type == 'is_search'){
		field_name = 'is_search';
		field_value = $(e).attr('is_search');
		if(field_value==1){
			field_value = 0;
		}else if(field_value == 0){
			field_value = 1;
		}
	}
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/goods/modifyattributevalueservice",
		data : {
			'attr_value_id' : attr_value_id,
			'field_name' : field_name,
			'field_value' : field_value
		},
		dataType : "json",
		success : function(data) {
			if(type=='is_search'){
				if(field_value==1){
					$(e).attr('is_search',1);
					$(e).parent().find(".is_search").html('<i class="fa fa-check text-success text-active"></i>');
				}else if(field_value==0){
					$(e).attr('is_search',0);
					$(e).parent().find(".is_search").html('<i class="fa fa-times text-danger text"></i>');
				}
			}
		}
	});
	
	
}
//点击改变是否可以编辑属性值
function updateAttrselectvalue(order,e){
	if($(e).val()==1){
		$(e).parents(".value_data").find(".spec_box_"+order).html('<a href="javascript:;"></a>');
	}else{
		$(e).parents(".value_data").find(".spec_box_"+order).html('<a href="javascript:;" id="showAttrbox_'+order+'" onclick="showAttrbox('+order+',this);" style="color:#00C0FF;">编辑属性值</a>');
	}
	$(e).parents(".value_data").find("#value_"+order).html('');
	$("#Attrbox .Spec_data:gt(0)").remove();
	$("#Attrbox .Spec_data").eq(0).find("input[name='attr_value']").val('');
}
function addSpecValue(e){
	var data_obj_num = $(".new_data").length;
	var html = '<div class="w100 value_data new_data">';
	html += '<div class="col-sm-2 control-label"><label style="margin-left: 5px;"> <input type="checkbox" style=""></label></div>';
	html += '<div class="inline-block w75" style="margin-right: 4px;margin-top:7px;">';
	html += '<input type="text" name="value_sort_'+data_obj_num+'" value="'+data_obj_num+'">';
	html += '</div>';
	html += '<div class="inline-block w75" style="margin-right: 5px;width:14%;">';
	html += '<input type="text" name="value_name_'+data_obj_num+'" style="margin-right:5px;"><span class="spec_box_'+data_obj_num+'"></span>';
	html += '</div>';
	html += '<div class="inline-block w75" style="margin-right: 5px;">';
	html += '<select class="selectbox_'+data_obj_num+'" id="type_'+data_obj_num+'" style="width:110px;" onchange="updateAttrselectvalue('+data_obj_num+',this);">';
	html += '<option value="1">输入框</option>';
	html += '<option value="2">单选框</option>';
	html += '<option value="3">复选框</option>';
	html += '</select>';
	html += '</div>';
	html += '<div class="inline-block w75 w140" style="margin-right: 4px;" id="value_'+data_obj_num+'">';
	html += '</div>';
	html += '<div class="inline-block w75" style="width:10%;">';
	html += '<a href="javascript:;" class="is_search is_search_'+data_obj_num+'" is_search="1" onclick="tab_is_search(this)"><i class="fa fa-check text-success text-active"></i></a>';
	html +='</div>';
	html += '<div class="inline-block w19"><a href="javascript:;" onclick="delNewAttributeValue(this)">删除</a></div>';
	html += '</div>';
	$(e).parents(".table").find(".table-body").append(html);
}
function delOldAttributeValue(e, attr_id, attr_value_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$.ajax({
					type : "post",
					url : "PLATFORM_MAIN/goods/deleteattributevalue",
					data : {
						'attr_id' : attr_id,
						'attr_value_id' : attr_value_id
					},
					dataType : "json",
					success : function(data) {
						if (data['code'] > 0) {
							$(e).parents('.w100').remove();
						}else if(data['code'] == 0){
						}else if(data['code'] == -1){
							showMessage('error', '当前属性已经使用过，不能删除！');
						}else if(data['code'] == -2){
							showMessage('error', '当前属性已经是最后一个，不能删除！');
						}
					}
				});
			},"取消,#e57373" : function(){
				$(this).dialog('close');
			}
		},
		contentText:"你确定删除吗？",
		title:"消息提醒"
	});
}
function delNewAttributeValue(e){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$(e).parents('.w100').remove();
			},"取消,#e57373" : function(){
				$(this).dialog('close');
			}
		},
		contentText:"你确定删除吗？",
		title:"消息提醒"
	});
}
function validation() {
	var attr_name = $("#attr_name");
	if (attr_name.val() == "") {
		attr_name.focus().next("span").show();
		return false;
	} else {
		attr_name.next("span").hide();
	}	
	return true;
}

var flag = false;//防止重复提交
function updateAttributeService() {
	if (!validation()) {
		return;
	}
	var attr_name = $("#attr_name").val();
	var sort = $("#sort").val();
	if ($("#is_visible").prop("checked")) {
		var is_visible = 1;
	} else {
		var is_visible = 0;
	}
	
	var select_box = '';
	$("input[name='spec']:checked").each(function(){
		select_box = select_box+','+$(this).val();
	});
	select_box = select_box.substring(1);
	var attr_id = $("#attr_id").val();
	
	var data_obj = $(".new_data");
	var data_obj_str = '';
	data_obj.each(function(i){
		if(data_obj.eq(i) != ''){
			var value_sort = $("input[name='value_sort_"+i+"']").val();
			var value_name = $.trim($("input[name='value_name_"+i+"']").val());
			if(value_name == ''){
				$("input[name='value_name_"+i+"']").focus();
				showMessage('error',"属性名称不能为空");
				flag = true;
				return false;
			}else{
				flag = false;
			}
			var type = $("#type_"+i).val();
			var value = $("#value_"+i).text();
			if(type > 1){
				if(value == ''){
					$("#type_"+i).focus();
					showMessage('error',"类型为单选框或复选框时，属性值不能为空");
					flag = true;
					return false;
				}else{
					flag = false;
				}
			}
			
			var is_search = $(".is_search_"+i).attr("is_search");
			var new_str = '';
			new_str = value_name+ '|' +type+ '|' +value_sort+ '|' +is_search+ '|' +value;
			
			data_obj_str = data_obj_str + ';' + new_str;
		}
	});
	data_obj_str = data_obj_str.substr(1);
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/goods/updategoodsattribute",
		data : {
			'attr_id' : attr_id,
			'attr_name' : attr_name,
			'sort' : sort,
			'is_visible' : is_visible,
			'select_box' :select_box,
			'data_obj_str' :data_obj_str,
		},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', "修改成功",'PLATFORM_MAIN/goods/attributelist');
			} else {
				showMessage('error', "修改失败");
				flag = false;
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