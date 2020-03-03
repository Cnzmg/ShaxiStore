<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/platform/Shop/updateShop.html";i:1581654377;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
.col-md-2 {
    line-height: 35px;
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
	<header class="panel-heading text-right bg-light">
		<ul class="nav nav-tabs pull-left">
			<li class="active"><a href="#base" data-toggle="tab">店铺信息</a></li>
			<li class=""><a href="#apply" data-toggle="tab">注册信息</a></li>
		</ul>
		<span class="hidden-sm">编辑店铺</span>
	</header>
	<div class="panel-body">
		<div class="tab-content">
			<div class="tab-pane fade active in" id="base">
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">店铺名称</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="shop_name"
										value="<?php echo $info['shop_name']; ?>">
								</div>
							</div>
							<!-- 			<div class="line line-dashed line-lg pull-in"></div> -->
							<!-- 			<div class="form-group"> -->
							<!-- 				<label class="col-sm-2 control-label">开店时间</label> -->
							<!-- 				<div class="col-md-4"> -->
							<!-- 					<input type="text" class="form-control" id="group_sort" value=""> -->
							<!-- 				</div> -->
							<!-- 			</div> -->
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">所属分类</label>
								<div class="col-md-4">
									<select id="shop_group_id" name="account"
										class="form-control m-b"> <?php if(is_array($group_list) || $group_list instanceof \think\Collection || $group_list instanceof \think\Paginator): if( count($group_list)==0 ) : echo "" ;else: foreach($group_list as $key=>$vg): ?>
										<option value="<?php echo $vg['shop_group_id']; ?>" <?php if($info['shop_group_id'] == $vg['shop_group_id']): ?>selected<?php endif; ?>><?php echo $vg['group_name']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">佣金比率</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="shop_platform_commission_rate"
										value="<?php echo $info['shop_platform_commission_rate']; ?>" style="width: 150px;float: left;">%
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">所属等级</label>
								<div class="col-md-4">
									<select id="shop_type" name="account" class="form-control m-b">
										<?php if(is_array($type_list) || $type_list instanceof \think\Collection || $type_list instanceof \think\Paginator): if( count($type_list)==0 ) : echo "" ;else: foreach($type_list as $key=>$vt): ?>
										<option value="<?php echo $vt['instance_typeid']; ?>" <?php if($info['shop_type'] == $vt['instance_typeid']): ?>selected<?php endif; ?>><?php echo $vt['type_name']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">店铺信用</label>
								<div class="col-md-4">
									<select id="shop_credit" name="account"
										class="form-control m-b">
										<option value="1" <?php if($info['shop_credit'] == 1): ?>selected<?php endif; ?>>1星</option>
										<option value="2" <?php if($info['shop_credit'] == 2): ?>selected<?php endif; ?>>2星</option>
										<option value="3" <?php if($info['shop_credit'] == 3): ?>selected<?php endif; ?>>3星</option>
										<option value="4" <?php if($info['shop_credit'] == 4): ?>selected<?php endif; ?>>4星</option>
										<option value="5" <?php if($info['shop_credit'] == 5): ?>selected<?php endif; ?>>5星</option>
									</select>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">描述相符度分数</label>
								<div class="col-md-4">
									<select id="shop_desccredit" name="account"
										class="form-control m-b">
										<option value="1" <?php if($info['shop_desccredit'] == 1): ?>selected<?php endif; ?>>1星</option>
										<option value="2" <?php if($info['shop_desccredit'] == 2): ?>selected<?php endif; ?>>2星</option>
										<option value="3" <?php if($info['shop_desccredit'] == 3): ?>selected<?php endif; ?>>3星</option>
										<option value="4" <?php if($info['shop_desccredit'] == 4): ?>selected<?php endif; ?>>4星</option>
										<option value="5" <?php if($info['shop_desccredit'] == 5): ?>selected<?php endif; ?>>5星</option>
									</select>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">服务态度分数</label>
								<div class="col-md-4">
									<select id="shop_servicecredit" name="account"
										class="form-control m-b">
										<option value="1" <?php if($info['shop_servicecredit'] == 1): ?>selected<?php endif; ?>>1星</option>
										<option value="2" <?php if($info['shop_servicecredit'] == 2): ?>selected<?php endif; ?>>2星</option>
										<option value="3" <?php if($info['shop_servicecredit'] == 3): ?>selected<?php endif; ?>>3星</option>
										<option value="4" <?php if($info['shop_servicecredit'] == 4): ?>selected<?php endif; ?>>4星</option>
										<option value="5" <?php if($info['shop_servicecredit'] == 5): ?>selected<?php endif; ?>>5星</option>
									</select>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">发货速度分数</label>
								<div class="col-md-4">
									<select id="shop_deliverycredit" name="account"
										class="form-control m-b">
										<option value="1" <?php if($info['shop_deliverycredit'] == 1): ?>selected<?php endif; ?>>1星</option>
										<option value="2" <?php if($info['shop_deliverycredit'] == 2): ?>selected<?php endif; ?>>2星</option>
										<option value="3" <?php if($info['shop_deliverycredit'] == 3): ?>selected<?php endif; ?>>3星</option>
										<option value="4" <?php if($info['shop_deliverycredit'] == 4): ?>selected<?php endif; ?>>4星</option>
										<option value="5" <?php if($info['shop_deliverycredit'] == 5): ?>selected<?php endif; ?>>5星</option>
									</select>
								</div>
							</div>
							<!-- 			<div class="line line-dashed line-lg pull-in"></div> -->
							<!-- 			<div class="form-group"> -->
							<!-- 				<label class="col-sm-2 control-label">有效期至</label> -->
							<!-- 				<div class="col-md-10"> -->
							<!-- 					<input class="input-sm input-s datepicker-input form-control" -->
							<!-- 						size="16" type="text" value="12-02-2013" -->
							<!-- 						data-date-format="dd-mm-yyyy"> -->
							<!-- 				</div> -->
							<!-- 			</div> -->
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">店铺保障开关</label>
								<div class="col-md-10">
									<div class="col-md-3">
										<p>售后无忧</p>
										<label class="switch"><input id="store_qtian"
											type="checkbox" <?php if($info['store_qtian'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
									<div class="col-md-3">
										<p>品牌代理商</p>
										<label class="switch"><input id="shop_zhping"
											type="checkbox" <?php if($info['shop_zhping'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
									<div class="col-md-3">
										<p>两小时发货</p>
										<label class="switch"><input id="shop_erxiaoshi"
											type="checkbox" <?php if($info['shop_erxiaoshi'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
									<div class="col-md-3">
										<p>退货承诺</p>
										<label class="switch"><input id="shop_tuihuo"
											type="checkbox" <?php if($info['shop_tuihuo'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
									<div class="col-md-3">
										<p>厂家直营</p>
										<label class="switch"><input id="shop_shiyong"
											type="checkbox" <?php if($info['shop_shiyong'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
									<div class="col-md-3">
										<p>实体店铺</p>
										<label class="switch"><input id="shop_shiti"
											type="checkbox" <?php if($info['shop_shiti'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
									<div class="col-md-3">
										<p>消协保证</p>
										<label class="switch"><input id="shop_xiaoxie"
											type="checkbox" <?php if($info['shop_xiaoxie'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
									<div class="col-md-3">
										<p>货到付款</p>
										<label class="switch"><input id="shop_huodaofk"
											type="checkbox" <?php if($info['shop_huodaofk'] == 1): ?>checked<?php endif; ?>><span></span></label>
									</div>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">店铺状态（开启 / 关闭）</label>
								<div class="col-md-10">
									<label class="switch"><input id="shop_state"
										type="checkbox" <?php if($info['shop_state'] == 1): ?>checked<?php endif; ?>><span></span></label>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="shop_close_info" style="display: none;">
								<div class="form-group">
									<label class="col-sm-2 control-label">关闭原因</label>
									<div class="col-md-4">
										<div id="editor" class="form-control"
											style="overflow: scroll; height: 150px; max-height: 150px"></div>
									</div>
								</div>
								<div class="line line-dashed line-lg pull-in"></div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<a href="javascript:void(0);" onclick="updateShopAjax()"
										class="btn btn-primary">保存</a>
								</div>
							</div>
						</form>
					</div>
			</div>
			<div class="tab-pane fade" id="apply">
				<section class="panel panel-default">
					<header class="panel-heading font-bold"> 公司及联系人信息 </header>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">公司名称</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="company_name"
										value="<?php echo $apply_info['company_name']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">公司所在地</label>
								<div class="col-md-2">
								<select class="form-control m-b" name="province" id="seleAreaNext" onchange="getProvince(this,'#seleAreaThird')">
			                       <option value="">请选择省</option>
			                     </select>
			                     </div>
			                     <div class="col-md-2">
			                    <select class="form-control m-b" name="city" id="seleAreaThird" onchange="getSelCity(this, '#seleAreaFouth')">
			                      <option value="">请选择市</option>
			                                          </select>
			                     </div>
			                     <div class="col-md-2">
			                    <select class="form-control m-b" name="district" id="seleAreaFouth">
			                      <option value="-1">请选择区</option>
			                    </select>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">公司详细地址</label>
								<div class="col-md-3">
									<input type="text" class="form-control"
										id="company_address_detail" value="<?php echo $apply_info['company_address_detail']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">公司电话</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="company_phone"
										value="<?php echo $apply_info['company_phone']; ?>">
								</div>
								<label class="col-sm-2 control-label">员工总数</label>
								<div class="col-md-2">
									<input type="text" class="form-control"
										id="company_employee_count" value="<?php echo $apply_info['company_employee_count']; ?>">
								</div>
								<label class="col-sm-2 control-label">注册资金（万元）</label>
								<div class="col-md-2">
									<input type="text" class="form-control"
										id="company_registered_capital" value="<?php echo $apply_info['company_registered_capital']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">联系人姓名</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="contacts_name"
										value="<?php echo $apply_info['contacts_name']; ?>">
								</div>
								<label class="col-sm-2 control-label">联系人电话</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="contacts_phone"
										value="<?php echo $apply_info['contacts_phone']; ?>">
								</div>
								<label class="col-sm-2 control-label">电子邮箱</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="contacts_email"
										value="<?php echo $apply_info['contacts_email']; ?>">
								</div>
							</div>
						</form>
					</div>
				</section>
				<section class="panel panel-default">
					<header class="panel-heading font-bold"> 营业执照信息（副本） </header>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">营业执照号</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="business_licence_number"
										value="<?php echo $apply_info['business_licence_number']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">法定经营范围</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="business_sphere"
										value="<?php echo $apply_info['business_sphere']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">营业执照电子版</label>
								<div class="col-md-3">
									<p>
									<?php if($apply_info['business_licence_number_electronic'] == ''): ?>
									<img id="imgLogo1" src="" class="imglogo"/>
									<?php else: ?>
									<img id="imgLogo1" src="__UPLOAD__/<?php echo $apply_info['business_licence_number_electronic']; ?>" class="imglogo"/>
									<?php endif; ?>
									</p>
									<a href="javascript:void(0);"
										style="display: block; position: relative; z-index: 1;"> <span
										style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
											<input hidefocus="true" size="1" class="input-file"
											name="file_upload" id="uploadImg1"
											nc_type="change_store_label" type="file"
											style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;"
											onchange="imgUpload1(this);"> <input type="hidden"
											id="Logo1" value="<?php echo $apply_info['business_licence_number_electronic']; ?>" />
									</span> <a class="btn btn-default"><i
											class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
									</a>
								</div>
							</div>
						</form>
					</div>
				</section>
				<section class="panel panel-default">
					<header class="panel-heading font-bold"> 组织机构代码证 </header>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">组织机构代码</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="organization_code"
										value="<?php echo $apply_info['organization_code']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">组织机构代码证电子版</label>
								<div class="col-md-3">
									<p>
									<?php if($apply_info['organization_code_electronic'] == ''): ?>
									<img id="imgLogo2" src="" class="imglogo"/>
									<?php else: ?>
									<img id="imgLogo2" src="__UPLOAD__/<?php echo $apply_info['organization_code_electronic']; ?>" class="imglogo"/>
									<?php endif; ?>
									</p>
									<a href="javascript:void(0);"
										style="display: block; position: relative; z-index: 1;"> <span
										style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
											<input hidefocus="true" size="1" class="input-file"
											name="file_upload" id="uploadImg2"
											nc_type="change_store_label" type="file"
											style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;"
											onchange="imgUpload2(this);"> <input type="hidden"
											id="Logo2" value="<?php echo $apply_info['organization_code_electronic']; ?>" />
									</span> <a class="btn btn-default"><i
											class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
									</a>
								</div>
							</div>
						</form>
					</div>
				</section>
				<section class="panel panel-default">
					<header class="panel-heading font-bold"> 一般纳税人证明 </header>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">一般纳税人证明</label>
								<div class="col-md-3">
									<p>
									<?php if($apply_info['general_taxpayer'] == ''): ?>
									    <img id="imgLogo3" src="" class="imglogo"/>
									<?php else: ?>
										<img id="imgLogo3" src="__UPLOAD__/<?php echo $apply_info['general_taxpayer']; ?>" class="imglogo"/>
									<?php endif; ?>
									</p>
									<a href="javascript:void(0);"
										style="display: block; position: relative; z-index: 1;"> <span
										style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
											<input hidefocus="true" size="1" class="input-file"
											name="file_upload" id="uploadImg3"
											nc_type="change_store_label" type="file"
											style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;"
											onchange="imgUpload3(this);"> <input type="hidden"
											id="Logo3" value="<?php echo $apply_info['general_taxpayer']; ?>" />
									</span> <a class="btn btn-default"><i
											class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
									</a>
								</div>
							</div>
						</form>
					</div>
				</section>
				<section class="panel panel-default">
					<header class="panel-heading font-bold"> 开户银行信息 </header>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">银行开户名</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="bank_account_name"
										value="<?php echo $apply_info['bank_account_name']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">公司银行账号</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="bank_account_number"
										value="<?php echo $apply_info['bank_account_number']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">开户银行支行名称</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="bank_name"
										value="<?php echo $apply_info['bank_name']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">支行联行号</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="bank_code"
										value="<?php echo $apply_info['bank_code']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">开户银行所在地</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="bank_address"
										value="<?php echo $apply_info['bank_address']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">开户银行许可证电子版</label>
								<div class="col-md-3">
									<p>
									<?php if($apply_info['bank_licence_electronic'] == ''): ?>
									<img id="imgLogo4" src="" class="imglogo"/>
									<?php else: ?>
									<img id="imgLogo4" src="__UPLOAD__/<?php echo $apply_info['bank_licence_electronic']; ?>" class="imglogo"/>
									<?php endif; ?>
									</p>
									<a href="javascript:void(0);"
										style="display: block; position: relative; z-index: 1;"> <span
										style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
											<input hidefocus="true" size="1" class="input-file"
											name="file_upload" id="uploadImg4"
											nc_type="change_store_label" type="file"
											style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;"
											onchange="imgUpload4(this);"> <input type="hidden"
											id="Logo4" value="<?php echo $apply_info['bank_licence_electronic']; ?>" />
									</span> <a class="btn btn-default"><i
											class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
									</a>
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">是否是结算账号</label>
								<div class="col-sm-4">
									<label class="switch"> <input id="is_settlement_account"
										type="checkbox" <?php if($apply_info['is_settlement_account'] == 1): ?>checked<?php endif; ?>> <span></span>
									</label>
								</div>
							</div>
						</form>
					</div>
				</section>
				<section class="panel panel-default" id="settlement_info" style='<?php if($apply_info['is_settlement_account'] == 1): ?>display:none;<?php endif; ?>'>
					<header class="panel-heading font-bold"> 结算账号信息 </header>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">银行开户名</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="settlement_bank_account_name"
										value="<?php echo $apply_info['settlement_bank_account_name']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">公司银行账号</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="settlement_bank_account_number"
										value="<?php echo $apply_info['settlement_bank_account_number']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">开户银行支行名称</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="settlement_bank_name"
										value="<?php echo $apply_info['settlement_bank_name']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">支行联行号</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="settlement_bank_code"
										value="<?php echo $apply_info['settlement_bank_code']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">开户银行所在地</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="settlement_bank_address"
										value="<?php echo $apply_info['settlement_bank_address']; ?>">
								</div>
							</div>
						</form>
					</div>
				</section>
				<section class="panel panel-default">
					<header class="panel-heading font-bold"> 税务登记证 </header>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">税务登记证号</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="tax_registration_certificate"
										value="<?php echo $apply_info['tax_registration_certificate']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">纳税人识别号</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="taxpayer_id"
										value="<?php echo $apply_info['taxpayer_id']; ?>">
								</div>
							</div>
							<div class="line line-dashed line-lg pull-in"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">税务登记证号电子版</label>
								<div class="col-md-3">
									<p>
									<?php if($apply_info['tax_registration_certificate_electronic'] == ''): ?>
									<img id="imgLogo5" src="" class="imglogo"/>
									<?php else: ?>
									<img id="imgLogo5" src="__UPLOAD__/<?php echo $apply_info['tax_registration_certificate_electronic']; ?>" class="imglogo"/>
									<?php endif; ?>
									</p>
									<a href="javascript:void(0);"
										style="display: block; position: relative; z-index: 1;"> <span
										style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
											<input hidefocus="true" size="1" class="input-file"
											name="file_upload" id="uploadImg5"
											nc_type="change_store_label" type="file"
											style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;"
											onchange="imgUpload5(this);"> <input type="hidden"
											id="Logo5" value="<?php echo $apply_info['tax_registration_certificate_electronic']; ?>" />
									</span> <a class="btn btn-default"><i
											class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
									</a>
								</div>
							</div>
						</form>
					</div>
				</section>
								<div class="col-sm-4 col-sm-offset-2">
									<input type="hidden" id="apply_id" value="<?php echo $apply_info['apply_id']; ?>">
									<a href="javascript:void(0);" onclick="updateShopApplyAjax()"
										class="btn btn-primary">保存</a>
								</div>
			</div>
		</div>
	</div>
	<input type="hidden" id="shop_id" value="<?php echo $info['shop_id']; ?>">
	<input type="hidden" id="company_province_id" value="<?php echo $apply_info['company_province_id']; ?>">
	<input type="hidden" id="company_city_id" value="<?php echo $apply_info['company_city_id']; ?>">
	<input type="hidden" id="company_district_id" value="<?php echo $apply_info['company_district_id']; ?>">
	
</section>
<script src="PLATFORM_JS/init_address.js" type="text/javascript"></script>
<script src="PLATFORM_JS/ajaxFileUpload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script>
if($("#company_province_id").val() == null){
	provice_id = 0;
}else{
	provice_id = $("#company_province_id").val();
}
if($("#company_city_id").val() == null){
	city_id = -1;
}else{
	city_id = $("#company_city_id").val();
}
if($("#company_district_id").val() == null){
	district_id = -1;
}else{
	district_id = $("#company_district_id").val();
}
if(provice_id == 0){
	initProvince('#seleAreaNext');
}else{
	load('province',provice_id, 'city', city_id, 'district', district_id);
}
function updateShopApplyAjax(){
	var shop_id = $("#shop_id").val();
	var apply_id = $("#apply_id").val();
	//公司及联系人信息
	var company_name = $("#company_name").val();
	var company_province_id = $("#seleAreaNext").val();
	var company_city_id = $("#seleAreaThird").val();
	var company_district_id = $("#seleAreaFouth").val();
	var company_address_detail = $("#company_address_detail").val();
	var company_phone = $("#company_phone").val();
	var company_employee_count = $("#company_employee_count").val();
	var company_registered_capital = $("#company_registered_capital").val();
	var contacts_name = $("#contacts_name").val();
	var contacts_phone = $("#contacts_phone").val();
	var contacts_email = $("#contacts_email").val();
	//营业执照信息（副本）
	var business_licence_number = $("#business_licence_number").val();
	var business_sphere = $("#business_sphere").val();
	var business_licence_number_electronic = $("#Logo1").val();
	//组织机构代码证
	var organization_code = $("#organization_code").val();
	var organization_code_electronic = $("#Logo2").val();
	//一般纳税人证明
	var general_taxpayer = $("#Logo3").val();
	//开户银行信息
	var bank_account_name = $("#bank_account_name").val();
	var bank_account_number = $("#bank_account_number").val();
	var bank_name = $("#bank_name").val();
	var bank_code = $("#bank_code").val();
	var bank_address = $("#bank_address").val();
	var bank_licence_electronic = $("#Logo4").val();
	if($("#is_settlement_account").prop("checked")){
		var is_settlement_account = 1;
	}else{
		var is_settlement_account = 2;
	}
	//结算账号信息
	if($("#is_settlement_account").prop("checked")){
		var settlement_bank_account_name = $("#bank_account_name").val();
		var settlement_bank_account_number = $("#bank_account_number").val();
		var settlement_bank_name = $("#bank_name").val();
		var settlement_bank_code = $("#bank_code").val();
		var settlement_bank_address = $("#bank_address").val();
	}else{
		var settlement_bank_account_name = $("#settlement_bank_account_name").val();
		var settlement_bank_account_number = $("#settlement_bank_account_number").val();
		var settlement_bank_name = $("#settlement_bank_name").val();
		var settlement_bank_code = $("#settlement_bank_code").val();
		var settlement_bank_address = $("#settlement_bank_address").val();
	}
	var tax_registration_certificate = $("#tax_registration_certificate").val();				//税务登记证号
	var taxpayer_id = $("#taxpayer_id").val();			//纳税人识别号
	var tax_registration_certificate_electronic = $("#Logo5").val();	//税务登记证号电子版
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/Shop/updateShopApply",
		data : {
			'apply_id' : apply_id,
			'company_name' : company_name,
			'company_province_id' : company_province_id,
			'company_city_id' : company_city_id,
			'company_district_id' : company_district_id,
			'company_address_detail' : company_address_detail,
			'company_phone' : company_phone,
			'company_employee_count' : company_employee_count,
			'company_registered_capital' : company_registered_capital,
			'contacts_name' : contacts_name,
			'contacts_phone' : contacts_phone,
			'contacts_email' : contacts_email,
			'business_licence_number' : business_licence_number,
			'business_sphere' : business_sphere,
			'business_licence_number_electronic' : business_licence_number_electronic,
			'organization_code' : organization_code,
			'organization_code_electronic' : organization_code_electronic,
			'general_taxpayer' : general_taxpayer,
			'bank_account_name' : bank_account_name,
			'bank_account_number' : bank_account_number,
			'bank_name' : bank_name,
			'bank_code' : bank_code,
			'bank_address' : bank_address,
			'bank_licence_electronic' : bank_licence_electronic,
			'is_settlement_account' : is_settlement_account,
			'settlement_bank_account_name' : settlement_bank_account_name,
			'settlement_bank_account_number' : settlement_bank_account_number,
			'settlement_bank_name' : settlement_bank_name,
			'settlement_bank_code' : settlement_bank_code,
			'settlement_bank_address' : settlement_bank_address,
			'tax_registration_certificate' : tax_registration_certificate,
			'taxpayer_id' : taxpayer_id,
			'tax_registration_certificate_electronic' : tax_registration_certificate_electronic,
		},
		async : true,
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', "编辑成功",
						'PLATFORM_MAIN/Shop/updateShop?shop_id='
								+ shop_id);
			} else {
				showMessage('error', "编辑失败");
			}
		}
	});
}
	$("#shop_state").change(function() {
		if ($("#shop_state").prop("checked")) {
			$(".shop_close_info").hide();
		} else {
			$(".shop_close_info").show();
			$("#editor").html('');
		}
	});
	$("#is_settlement_account").change(function(){
		if ($("#is_settlement_account").prop("checked")) {
			$("#settlement_info").hide();
		} else {
			$("#settlement_info").show();
		}
	});
	//添加分组
	function updateShopAjax() {
		var shop_id = $("#shop_id").val();
		var shop_name = $("#shop_name").val();
		var shop_group_id = $("#shop_group_id").val();
		var shop_platform_commission_rate = $("#shop_platform_commission_rate").val();
		var shop_type = $("#shop_type").val();
		var shop_credit = $("#shop_credit").val();
		var shop_desccredit = $("#shop_desccredit").val();
		var shop_servicecredit = $("#shop_servicecredit").val();
		var shop_deliverycredit = $("#shop_deliverycredit").val();
		//alert(shop_platform_commission_rate);
		if ($("#store_qtian").prop("checked")) {
			var store_qtian = 1;
		} else {
			var store_qtian = 0;
		}
		if ($("#shop_zhping").prop("checked")) {
			var shop_zhping = 1;
		} else {
			var shop_zhping = 0;
		}
		if ($("#shop_erxiaoshi").prop("checked")) {
			var shop_erxiaoshi = 1;
		} else {
			var shop_erxiaoshi = 0;
		}
		if ($("#shop_tuihuo").prop("checked")) {
			var shop_tuihuo = 1;
		} else {
			var shop_tuihuo = 0;
		}
		if ($("#shop_shiyong").prop("checked")) {
			var shop_shiyong = 1;
		} else {
			var shop_shiyong = 0;
		}
		if ($("#shop_shiti").prop("checked")) {
			var shop_shiti = 1;
		} else {
			var shop_shiti = 0;
		}
		if ($("#shop_xiaoxie").prop("checked")) {
			var shop_xiaoxie = 1;
		} else {
			var shop_xiaoxie = 0;
		}
		if ($("#shop_huodaofk").prop("checked")) {
			var shop_huodaofk = 1;
		} else {
			var shop_huodaofk = 0;
		}
		if ($("#shop_state").prop("checked")) {
			var shop_state = 1;
		} else {
			var shop_state = 0;
		}
		var shop_close_info = $("#editor").html();
		$.ajax({
					type : "post",
					url : "PLATFORM_MAIN/shop/updateshop",
					data : {
						'shop_id' : shop_id,
						'shop_name' : shop_name,
						'shop_group_id' : shop_group_id,
						'shop_platform_commission_rate' :shop_platform_commission_rate,
						'shop_type' : shop_type,
						'shop_credit' : shop_credit,
						'shop_desccredit' : shop_desccredit,
						'shop_servicecredit' : shop_servicecredit,
						'shop_deliverycredit' : shop_deliverycredit,
						'store_qtian' : store_qtian,
						'shop_zhping' : shop_zhping,
						'shop_erxiaoshi' : shop_erxiaoshi,
						'shop_tuihuo' : shop_tuihuo,
						'shop_shiyong' : shop_shiyong,
						'shop_shiti' : shop_shiti,
						'shop_xiaoxie' : shop_xiaoxie,
						'shop_huodaofk' : shop_huodaofk,
						'shop_state' : shop_state,
						'shop_close_info' : shop_close_info,
					},
					async : true,
					success : function(data) {
						if (data["code"] > 0) {
							showMessage('success', "编辑成功",
									'PLATFORM_MAIN/Shop/updateShop?shop_id='
											+ shop_id);
						} else {
							showMessage('error', "编辑失败");
						}
					}
				});
	}
	/**
	 *图片上传
	 */
/* 	function imgUpload(event) {
		var fileid = $(event).attr("id");   var str = $(event).next().attr("id");
		fileCommonUpload("UPLOAD_URL", fileid,"__UPLOAD__",str);
	} */
	function imgUpload1(event) {
		var fileid = $(event).attr("id");
		var data = { 'file_path' : UPLOADCOMMON };
		uploadFile(fileid,data,function(res){
			if(res.code){
				$("#imgLogo1").attr("src","__UPLOAD__/"+res.data);
				$("#Logo1").val(res.data);
				showTip(res.message,"success");
			}else{
				showTip(res.message,"error");
			}
		});
	}
	function imgUpload2(event) {
		var fileid = $(event).attr("id");
		var data = { 'file_path' : UPLOADCOMMON };
		uploadFile(fileid,data,function(res){
			if(res.code){
				$("#imgLogo2").attr("src","__UPLOAD__/"+res.data);
				$("#Logo2").val(res.data);
				showTip(res.message,"success");
			}else{
				showTip(res.message,"error");
			}
		});
	}
	function imgUpload3(event) {
		var fileid = $(event).attr("id");
		var data = { 'file_path' : UPLOADCOMMON };
		uploadFile(fileid,data,function(res){
			if(res.code){
				$("#imgLogo3").attr("src","__UPLOAD__/"+res.data);
				$("#Logo3").val(res.data);
				showTip(res.message,"success");
			}else{
				showTip(res.message,"error");
			}
		});
	}
	function imgUpload4(event) {
		var fileid = $(event).attr("id");
		var data = { 'file_path' : UPLOADCOMMON };
		uploadFile(fileid,data,function(res){
			if(res.code){
				$("#imgLogo4").attr("src","__UPLOAD__/"+res.data);
				$("#Logo4").val(res.data);
				showTip(res.message,"success");
			}else{
				showTip(res.message,"error");
			}
		});
	}
	function imgUpload5(event) {
		var fileid = $(event).attr("id");
		var data = { 'file_path' : UPLOADCOMMON };
		uploadFile(fileid,data,function(res){
			if(res.code){
				$("#imgLogo5").attr("src","__UPLOAD__/"+res.data);
				$("#Logo5").val(res.data);
				showTip(res.message,"success");
			}else{
				showTip(res.message,"error");
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