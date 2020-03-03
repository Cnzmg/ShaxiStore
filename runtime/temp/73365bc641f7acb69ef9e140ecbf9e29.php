<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:33:"template/platform/Wchat/menu.html";i:1581654382;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:44:"template/platform/Wchat/controlWxDialog.html";i:1581654382;s:27:"template/platform/page.html";i:1581654384;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
							
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/wx_base.css">
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/wx_index.css">
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/tooltip218878.css">
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/wx_lib.css" />
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/wx_richvideo.css" />
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
<style>
.draggable-element {
    display: inline-block;
    text-align: center;
    color: rgb(51, 51, 51);
    cursor: move;
}
</style>
<script src="PLATFORM_JS/wxMenu/drag-arrange.js"></script>
<script src="PLATFORM_JS/wxMenu/wx_menu.js"></script>
<section class="panel panel-default">
	<header class="panel-heading font-bold"> 微信菜单管理 </header>
	<div class="col-lg-12">
<?php if($menu_list_count == 0): ?>
<!-- 你尚未添加任何菜单 -->
<div class="menu_initial_box js_startMenuBox">
	<p class="tips_global">你尚未添加任何菜单</p>
	<a class="btn btn_primary btn_add js_openMenu" href="javascript:void(0);">
	<i class="icon14_common add_white"></i>添加菜单</a>
</div>
<?php else: ?>
<script>
	// 在关闭页面时弹出确认提示窗口
	$(window).bind('beforeunload', function() {
		 return '为确保内容不丢失，建议点击页面的绿色“保存并发布”按钮后再离开';
	});
</script>
<?php endif; ?>
<!-- 菜单编辑 -->
<div class="menu_setting_area js_editBox" <?php if($menu_list_count == 0): ?>style="display:none;"<?php endif; ?>>
	<div class="menu_preview_area">
		<div class="mobile_menu_preview">
			<div class="mobile_hd tc"><?php echo $wx_name; ?></div>
			<div class="mobile_bd">
				<!-- 菜单 -->
				<ul class="pre_menu_list grid_line" id="menuList">
					<?php if(is_array($menu_list) || $menu_list instanceof \think\Collection || $menu_list instanceof \think\Paginator): if( count($menu_list)==0 ) : echo "" ;else: foreach($menu_list as $k=>$menu): ?>
					<!-- 加载菜单 -->
					<li class="pre_menu_item size1of<?php echo $class_index+1; if(($k+1)==$menu_list_count): ?> current<?php endif; ?>" data-menu-index="<?php echo $k+1; ?>">
					
						<!-- 一级菜单 -->
						<a href="javascript:void(0);" ondragstart="return false" class="pre_menu_link jsMenu" data-menuid="<?php echo $menu['menu_id']; ?>" data-pid="0" data-menu-eventurl = "<?php echo $menu['menu_event_url']; ?>" data-menu-type = "<?php echo $menu['menu_event_type']; ?>" data-detault-menu-type = "<?php echo $menu['menu_event_type']; ?>" data-mediaid="<?php echo $menu['media_id']; ?>" data-sort="<?php echo $menu['sort']; ?>">
						
							<?php if($menu['child_count'] > 0): ?>
							<!-- 有二级菜单，显示小图标 -->
							<i class="icon_menu_dot js_icon_menu_dot dn"></i>
							<?php endif; ?>
							<span><?php echo $menu['menu_name']; ?></span>
						</a>
						<!-- 一级菜单 -->
						
						
						<!-- 二级菜单 -->
						<div class="sub_pre_menu_box" data-submenulist="<?php echo $k+1; ?>" <?php if(($k+1)!=$menu_list_count): ?>style="display: none;"<?php endif; ?>>
							<ul class="sub_pre_menu_list">
							<?php if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator): if( count($menu['child'])==0 ) : echo "" ;else: foreach($menu['child'] as $key=>$sub_menu): ?>
								<li class="jsSubMenuInner">
									<a href="javascript:void(0);" ondragstart="return false" data-pid="<?php echo $sub_menu['pid']; ?>" data-menuid="<?php echo $sub_menu['menu_id']; ?>" data-menu-eventurl="<?php echo $sub_menu['menu_event_url']; ?>" data-menu-type = "<?php echo $sub_menu['menu_event_type']; ?>" data-detault-menu-type = "<?php echo $sub_menu['menu_event_type']; ?>" data-mediaid="<?php echo $sub_menu['media_id']; ?>" data-sort="<?php echo $sub_menu['sort']; ?>">
										<span class="sub_pre_menu_inner"><?php echo $sub_menu['menu_name']; ?></span>
									</a>
								</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							
													<!-- 限制二级菜单数量的添加 -->
								<li class="jsSubMenu" data-pid="<?php echo $menu['menu_id']; ?>" data-subindex="<?php echo $k+1; ?>" <?php if($menu['child_count'] == $MAX_SUB_MENU_LENGTH): ?>style="display:none;"<?php endif; ?>>
									<a href="javascript:void(0);" title="最多添加<?php echo $MAX_SUB_MENU_LENGTH; ?>个子菜单">
										<span class="sub_pre_menu_inner">
											<i class="icon14_menu_add" style="background-position: 0 0;"></i>
										</span>
									</a>
								</li>
							</ul>
							<i class="arrow arrow_out"></i> <i class="arrow arrow_in"></i><!-- 箭头 -->
						</div>
						<!-- 二级菜单 -->
						
						
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					
					
					
					<!-- 限制一级菜单数量的添加 -->
					<li class="js-addMenuBtn pre_menu_item size1of<?php echo $class_index+1; ?>" <?php if($menu_list_count >= $MAX_MENU_LENGTH): ?>style="display:none;"<?php endif; ?> data-class-index="<?php echo $class_index+1; ?>">
						<a href="javascript:void(0);" class="pre_menu_link " title="最多添加<?php echo $MAX_MENU_LENGTH; ?>个一级菜单">
							<i class="icon14_menu_add"></i>
							<?php if($menu_list_count==0): ?>
							<span>添加菜单</span>
							<?php endif; ?>
						</a>
					</li>
					
					
				</ul>
				<!-- 菜单 -->
			</div>
		</div>

		
		<!-- 菜单排序，后期实现拖拽 -->
		<div class="sort_btn_wrp" <?php if($menu_list_count == 0): ?>style="display:none;"<?php endif; ?>>
			<a id="orderBt" class="<?php if($menu_list_count <2): ?> dn <?php endif; ?>btn btn_default" href="javascript:void(0);">菜单排序</a>
			<span id="orderDis" class="<?php if($menu_list_count >1): ?> dn <?php endif; ?>btn btn_disabled">菜单排序</span>
			<a id="finishBt" href="javascript:void(0);" class="dn btn btn_default">完成</a>
		</div>
		
		
	</div>


	<div class="menu_form_area">
		<!-- 点击左侧菜单进行编辑操作 -->
		<div id="js_none" class="menu_initial_tips tips_global" style="display: none;">请通过拖拽左边的菜单进行排序</div>
		<div id="js_rightBox" class="portable_editor to_left">
			<div class="editor_inner">
				<div class="global_mod float_layout menu_form_hd js_second_title_bar">
					<h4 class="global_info"><?php echo $default_menu_info['menu_name']; ?></h4>
					<div class="global_extra">
						<a href="javascript:void(0);" id="jsDelBt" data-menuid="<?php echo $default_menu_info['menu_id']; ?>" data-menuname="<?php echo $default_menu_info['menu_name']; ?>">删除菜单</a>
					</div>
				</div>
				<div class="menu_form_bd" id="view">
					<div id="js_innerNone"  class="msg_sender_tips tips_global"<?php if($default_menu_info['child_count']==0): ?>style="display: none;"<?php endif; ?>>已添加子菜单，仅可设置菜单名称。</div>
					<div class="frm_control_group js_setNameBox">
						<label for="menuname" class="frm_label"><strong class="title js_menuTitle">菜单名称</strong></label>
						<div class="frm_controls">
							<span class="frm_input_box with_counter counter_in append">
								<input type="text" id="menuname"  data-switch="menuname" class="frm_input" style="box-shadow: none; padding: 0;" value="<?php echo $default_menu_info['menu_name']; ?>">
							</span>
							<p class="frm_msg fail js_titleEorTips dn" style="display: none;">字数超过上限</p>
							<p class="frm_msg fail js_titlenoTips dn" style="display: none;">请输入菜单名称</p>
							<p class="frm_tips js_titleNolTips">一级菜单不能超过5个字数</p>
						</div>
					</div>
					<div class="frm_control_group js_setGraphic" <?php if($default_menu_info['child_count']>0): ?>style="display:none;"<?php endif; ?>>
						<label for="" class="frm_label"> <strong class="title js_menuContent">菜单内容</strong></label>
						<div class="frm_controls frm_vertical_pt">
							<label class="frm_radio_label js_radio_sendMsg <?php if($default_menu_info['menu_event_type'] == 2|| $default_menu_info['menu_event_type'] == 3): ?>selected<?php endif; ?>">
								<i class="icon_radio"></i> <span class="lbl_content">发送消息</span>
							</label>
							<label class="frm_radio_label js_radio_url  <?php if($default_menu_info['menu_event_type'] == 1): ?>selected<?php endif; ?>">
								<i class="icon_radio"></i> <span class="lbl_content">跳转网页</span>
							</label>
						</div>
					</div>
					<div class="menu_content_container js_setGraphic" <?php if($default_menu_info['child_count']>0): ?>style="display:none;"<?php endif; ?>>
						<!-- 发送消息 -->
						
						<div class="menu_content send jsMain" id="edit" <?php if($default_menu_info['menu_event_type'] == 2|| $default_menu_info['menu_event_type'] == 3): ?> style="display: block;"<?php else: ?> style="display:none;"<?php endif; ?>>
							<div class="msg_sender" id="editDiv">
								<div class="msg_tab">
									<div class="tab_navs_panel"> 
										<div class="tab_navs_wrp">
											<ul class="tab_navs js_tab_navs">

												<li class="tab_nav tab_appmsg width4 selected" data-type="10" data-tab=".js_appmsgArea" data-tooltip="图文消息">
													<a href="javascript:void(0);">&nbsp;<i class="icon_msg_sender"></i><span class="msg_tab_title">图文消息</span></a>
												</li>
												<!-- 
												<li class="tab_nav tab_img width4" data-type="2" data-tab=".js_imgArea" data-tooltip="图片">
													<a href="javascript:void(0);">&nbsp;<i class="icon_msg_sender"></i><span class="msg_tab_title">图片</span></a>
												</li>

												<li class="tab_nav tab_audio width4" data-type="3" data-tab=".js_audioArea" data-tooltip="语音">
													<a href="javascript:void(0);">&nbsp;<i class="icon_msg_sender"></i><span class="msg_tab_title">语音</span></a>
												</li>
												<li class="tab_nav tab_video width4 no_extra" data-type="15" data-tab=".js_videoArea" data-tooltip="视频">
													<a href="javascript:void(0);">&nbsp;<i class="icon_msg_sender"></i><span class="msg_tab_title">视频</span></a>
												</li> -->

											</ul>
										</div>
									</div>
									<div class="tab_panel">

										<div class="tab_content">
											<div class="js_appmsgArea inner ">
											
												
												<div class="tab_cont_cover jsMsgSendTab" <?php if($default_menu_info['media_id'] != 0): ?>style="display:none;"<?php endif; ?>>
													<div class="media_cover">
														<span class="create_access">
															<a class="add_gray_wrp jsMsgSenderPopBt" href="javascript:;">
															<i class="icon36_common add_gray"></i> <strong>从素材库中选择</strong>
														</a>
														</span>
													</div>
													<div class="media_cover">
														<span class="create_access">
															<a target="_blank" class="add_gray_wrp" href="PLATFORM_MAIN/Wchat/addMedia">
																<i class="icon36_common add_gray"></i> <strong>新建图文消息</strong>
															</a>
														</span>
													</div>
												</div>
												
												<div id="show_media" <?php if($default_menu_info['media_id'] == 0): ?>style="display:none;"<?php endif; ?>>
													<div class="appmsg multi has_first_cover">
														<div class="appmsg_content">
															<div class="appmsg_info">
																<em class="appmsg_date">
																	<?php echo $default_menu_info['media_list']['create_time']; ?>
																</em>
															</div>
															<div class="cover_appmsg_item">
																<h4 class="appmsg_title js-media-title">
																	<a href="" target="_blank">
																		<?php echo $default_menu_info['media_list']['title']; ?>
																	</a>
																</h4>
																
																<!-- 封面 -->
																<div class="appmsg_thumb_wrp" 
																	<?php if($default_menu_info['media_list']['item_list_count'] >0): ?>
																	style="background-image:url('__UPLOAD__/<?php echo $default_menu_info['media_list']['item_list'][0]["cover"]; ?>')"
																	<?php endif; ?>
																>
																	
																</div>
																<a href="javascript:showDialog('微信还没有给您生成呢，想啥呢？不能预览！！！');" class="edit_mask preview_mask js_preview" >
																	<div class="edit_mask_content">
																		<p style="color:#fff;">预览文章</p>
																	</div>
																	<span class="vm_box"></span>
																</a>
															</div>
															<?php if($default_menu_info['media_list']['item_list_count'] >1): if(is_array($default_menu_info['media_list']['item_list']) || $default_menu_info['media_list']['item_list'] instanceof \think\Collection || $default_menu_info['media_list']['item_list'] instanceof \think\Paginator): if( count($default_menu_info['media_list']['item_list'])==0 ) : echo "" ;else: foreach($default_menu_info['media_list']['item_list'] as $key=>$media): ?>
															<div class="appmsg_item has_cover">
																<div class="appmsg_thumb_wrp" style="background-image:url('__UPLOAD__/<?php echo $media['cover']; ?>');"></div>
																<h4 class="appmsg_title js_title"><a href="javascript:;" target="_blank"><?php echo $media['title']; ?></a></h4>
																<a href="" class="edit_mask preview_mask js_preview" >
																	<div class="edit_mask_content">
																		<p style="color:#fff;">预览文章</p>
																	</div>
																	<span class="vm_box"></span>
																</a>
															</div>
															<?php endforeach; endif; else: echo "" ;endif; endif; ?>
														</div>
													</div>
													<a href="javascript:;" class="jsmsgSenderDelBt link_dele" data-mediaid="<?php echo $default_menu_info['media_id']; ?>">删除</a>
												</div>

											</div>
										</div>
										<!-- 
										<div class="tab_content" style="display: none;">
											<div class="js_imgArea inner ">

												<div class="tab_cont_cover jsMsgSendTab" data-index="1" data-type="2">
													<div class="media_cover">
														<span class="create_access">
															<a class="add_gray_wrp jsMsgSenderPopBt" href="javascript:;" data-type="2" data-index="1">
																<i class="icon36_common add_gray"></i> <strong>从素材库中选择</strong>
															</a>
														</span>
													</div>
													<div class="media_cover">
														<span class="create_access">
															<a class="add_gray_wrp" id="msgSendImgUploadBt" data-type="2" href="javascript:;">
																<i class="icon36_common add_gray"></i> <strong>上传图片</strong>
															</a>
														</span>
													</div>
												</div>

											</div>
										</div>

										<div class="tab_content" style="display: none;">
											<div class="js_audioArea inner ">

												<div class="tab_cont_cover jsMsgSendTab" data-index="2" data-type="3">
													<div class="media_cover">
														<span class="create_access">
															<a class="add_gray_wrp jsMsgSenderPopBt" href="javascript:;" data-type="3" data-index="2">
																<i class="icon36_common add_gray"></i> <strong>从素材库中选择</strong>
															</a>
														</span>
													</div>
													<div class="media_cover">
														<span class="create_access">
															<a class="add_gray_wrp " id="msgSendAudioUploadBt" href="javascript:;">
																<i class="icon36_common add_gray"></i> <strong>新建语音</strong>
															</a>
														</span>
													</div>
												</div>

											</div>
										</div>

										<div class="tab_content" style="display: none;">
											<div class="js_videoArea inner ">

												<div class="tab_cont_cover jsMsgSendTab" data-index="3">
													<div class="media_cover">
														<span class="create_access">
															<a class="add_gray_wrp jsMsgSenderPopBt" href="javascript:;" data-type="15" data-index="3">
																<i class="icon36_common add_gray"></i> <strong>从素材库中选择</strong>
															</a>
														</span>
													</div>
													<div class="media_cover">
														<span class="create_access">
															<a target="_blank" class="add_gray_wrp" href="/cgi-bin/appmsg?t=media/videomsg_edit&amp;action=video_edit&amp;type=15&amp;lang=zh_CN&amp;token=65573610">
																<i class="icon36_common add_gray"></i> <strong>新建视频</strong>
															</a>
														</span>
													</div>
												</div>

											</div>
										</div> -->

									</div>
								</div>
							</div>
							<p class="profile_link_msg_global menu_send mini_tips warn dn js_warn">请勿添加其他公众号的主页链接</p>
						</div>
						
						<!-- 发送消息 -->
						
						<!-- 跳转网页 -->
						
						<div class="menu_content url jsMain" id="url"  <?php if($default_menu_info['menu_event_type'] == 1): ?> style="display: block;"<?php else: ?> style="display:none;"<?php endif; ?>>
							<!-- <form action="" id="urlForm" onsubmit="return false;"> -->
								<p class="menu_content_tips tips_global">订阅者点击该子菜单会跳到以下链接</p>
								<div class="frm_control_group">
									<label for="urltext" class="frm_label"><strong class="title">页面地址</strong></label>
									<div class="frm_controls">
										<span class="frm_input_box">
											<input type="text" class="frm_input" id="urltext" data-switch="url" value="<?php echo $default_menu_info['menu_event_url']; ?>" name="urlText" style="border: 0; box-shadow: none; padding: 0;">
										</span>
										<p class="profile_link_msg_global menu_url mini_tips warn dn js_warn">请勿添加其他公众号的主页链接</p>
										<!-- <p class="frm_tips" id="js_urlTitle" style="display: none;">
											来自<span class="js_name"></span><span style="display: none;">
												-《<span class="js_title"></span>》
											</span>
										</p> -->
									</div>
								</div>
								<!--
								<div class="frm_control_group btn_appmsg_wrap">
									<div class="frm_controls">
										<p class="frm_msg fail dn" id="urlUnSelect" style="display: none;">
											<span for="urlText" class="frm_msg_content" style="display: inline;">请选择一篇文章</span>
										</p>
										 <a href="javascript:;" id="js_appmsgPop">从公众号图文消息中选择</a> 
										<a href="javascript:void(0);" class="dn btn btn_default" id="js_reChangeAppmsg">重新选择</a>
									</div>
								</div>
								-->
							<!-- </form> -->
						</div>
						
						<!-- 跳转网页 -->
						
					<!-- 	<div class="menu_content sended" style="display: none;">
							<p class="menu_content_tips tips_global">订阅者点击该子菜单会跳到以下链接</p>
							<div class="msg_wrp" id="viewDiv"></div>
							<p class="frm_tips">
								来自<span class="js_name">素材库</span><span style="display: none;">
									-《<span class="js_title"></span>》
								</span>
							</p>
						</div> -->
						
						<div id="js_errTips" style="display: none;" class="msg_sender_msg mini_tips warn"></div>
					</div>
				</div>
			</div>
			
			<!-- 左箭头 -->
			
			<span class="editor_arrow_wrp">
				<i class="editor_arrow editor_arrow_out"></i>
				<i class="editor_arrow editor_arrow_in"></i>
			</span>
			
			<!-- 左箭头 -->
			
		</div>
		<!-- 点击左侧菜单进行编辑操作 -->

	</div>
</div>
<!-- 菜单编辑 -->

<div class="tool_bar tc js_editBtn" <?php if($menu_list_count == 0): ?>style="visibility: hidden;"<?php endif; ?>>
	<span id="pubBt" class="btn btn_input btn_primary" style="display: inline-block;"><button>保存并发布</button></span>
	<a href="javascript:void(0);" class="btn btn_default" id="viewBt" style="display: inline-block;">预览</a>
</div>


<!-- 删除菜单弹出框 -->

<div class="dialog_wrp  ui-draggable" style="width: 720px; margin-left: -360px; margin-top: -186px; display: none;" id="wxDelDialog">
	<div class="dialog">
		<div class="dialog_hd">
			<h3>温馨提示</h3>
			<a href="javascript:;" class="pop_closed">关闭</a>
		</div>
		<div class="dialog_bd">
			<div class="page_msg large simple default ">
				<div class="inner group">
					<span class="msg_icon_wrapper"><i class="icon_msg warn "></i></span>
					<div class="msg_content ">
						<h4>删除确认</h4>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<div class="dialog_ft">
			<a href="javascript:;" class="btn btn_primary js_btn">确定</a> <a
				href="javascript:;" class="btn btn_default js_btn">取消</a>
		</div>
	</div>
</div>

<!-- 删除菜单弹出框 -->


<!-- 手机预览 -->
<div class="mobile_preview" id="mobileDiv" style="display: none;">
	<div class="mobile_preview_hd">
		<strong class="nickname"><?php echo $wx_name; ?></strong>
	</div>
	<div class="mobile_preview_bd">
		<ul id="viewShow" class="show_list"></ul>
	</div>
	<div class="mobile_preview_ft">
		<ul class="pre_menu_list grid_line" id="viewList">
			<?php if(is_array($menu_list) || $menu_list instanceof \think\Collection || $menu_list instanceof \think\Paginator): if( count($menu_list)==0 ) : echo "" ;else: foreach($menu_list as $k=>$menu): ?>
			<li class="pre_menu_item grid_item size1of<?php echo $menu_list_count; ?>" data-mobile-menu-index="<?php echo $k+1; ?>">
				<a href="javascript:void(0);" class="jsView pre_menu_link" title="<?php echo $menu['menu_name']; ?>" data-menuid="<?php echo $menu['menu_id']; ?>">
				<i class="icon_menu_dot"></i><?php echo $menu['menu_name']; ?></a>
				<div class="sub_pre_menu_box jsSubViewDiv" data-subIndex="<?php echo $k+1; ?>" style="display: none">
					<ul class="sub_pre_menu_list">
						<?php if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator): if( count($menu['child'])==0 ) : echo "" ;else: foreach($menu['child'] as $key=>$sub_menu): ?>
						<li>
							<a href="javascript:void(0);" data-pid="<?php echo $sub_menu['pid']; ?>" data-menuid="<?php echo $sub_menu['menu_id']; ?>" class="jsSubView" title="<?php echo $sub_menu['menu_name']; ?>"><?php echo $sub_menu['menu_name']; ?></a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<i class="arrow arrow_out"></i><i class="arrow arrow_in"></i>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<a href="javascript:void(0);" class="mobile_preview_closed btn btn_default" id="viewClose">退出预览</a>
</div>

<!-- 遮罩层 -->
<div class="mask" style="display: none;" id="maskLayer"></div>

<!-- 操作反馈弹出框 erro 失败-->
<div class="JS_TIPS page_tips success" id="wxTips" style="display:none;">
	<div class="inner"></div>
</div>

<input type="hidden" id="hidden_default_sort" />
<input type="hidden" id="hidden_default_sub_sort" />
	</div>
</section>
<!-- 选择图文素材 -->
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/wx_base.css">
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/tooltip218878.css">
<link rel="stylesheet" href="PLATFORM_CSS/wxMenu/wx_lib.css" />
<style>
.table tr td{text-align:center;vertical-align:middle;}
.table tr td:first-child{width:50%;}
.table tr td:last-child{width:20%;}
ul.mater{border:1px solid #e7e7eb;border-radius:5px;}
ul.mater li{padding:5px;border-bottom:1px solid #e7e7eb;}
ul.mater li:first-child{padding:13px 5px;}
ul.mater li:last-child{border-bottom:0px solid #e7e7eb;}
ul.mater li .btn_primary{display:inline-block;padding:3px;border-radius:3px;margin-right:10px;}
.dialog_ft .page{background:#f4f5f9;margin-top:10px;}
</style>
<div class="dialog_wrp media align_edge ui-draggable" style="display:none;width: 960px; margin-left: -480px; margin-top: -313.5px;" id="dialog_media">
	<div class="dialog">
		<div class="dialog_hd">
			<h3>选择素材</h3>
			<!--#0001#-->
			<a href="javascript:;" onclick="closeMaterial()"
				class="icon16_opr closed pop_closed">关闭</a>
			<!--%0001%-->
		</div>
		<div class="dialog_bd">
			<div class="dialog_media_container appmsg_media_dialog">
				<div class="sub_title_bar in_dialog">
					<div class="search_bar js-btn-media">
						<a class="btn btn_default" value="1" href="javascript:;" onclick="checkBtn(this)"> 文本 </a>
						<a class="btn btn_primary btn_default" value="2" href="javascript:;" onclick="checkBtn(this)"> 单图文 </a>
						<a class="btn btn_default" href="javascript:;" value="3" onclick="checkBtn(this)"> 多图文 </a>
					</div>
					<div class="appmsg_create tr">

						<!--
            <a class="" target="_blank" href="/cgi-bin/appmsg?t=media/appmsg_edit&action=edit&type=10&lang=zh_CN&token=254836048">
                <i class="icon_appmsg_small"></i><strong>新建单图文消息</strong>
            </a>
            -->
						<a class="btn btn_primary btn_add" target="_blank"
							href="PLATFORM_MAIN/Wchat/addMedia">
							<i class="icon14_common add_white"></i>新建图文消息
						</a>

					</div>
				</div>
				<div class="dialog_media_inner" style="overflow:auto;">
					<div class="table_wrp user_list">
						<table class="table" cellspacing="0">
							<tbody class="tbody" id="materia_data">
								
							</tbody>
							
						</table>
					</div>

					
				</div>
			</div>
		</div>

		<div class="dialog_ft">
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
		</div>

	</div>
</div>

<div class="mask mask_metar" style="display: none;"></div>
<script>
$(function(){
	LoadingInfo(1);
});
function checkBtn(event){
	$(".js-btn-media").find('.btn').removeClass('btn_primary');
	$(event).addClass('btn_primary');
	LoadingInfo(1);
}
/**
 * 显示素材
 */
function showMaterial(){
	$("#dialog_media").fadeIn(500);
	$(".mask_metar").fadeIn(300);
}
// function LoadingInfo(pageIndex){
// 	var type = 2;
// 	onloadMaterial(pageIndex, type);
// }
/**
 * 加载 素材 数据
 */
function LoadingInfo(pageIndex){
// 	$(".js-btn-media").find('.btn').eq(type-1).addClass('btn_primary');
	var type = $(".js-btn-media .btn_primary").attr('value');
// 	var aa = $(".js-btn-media").find('.btn').eq(type).html();
// 	alert(aa);
	var search_text = '';
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/Wchat/onloadMaterial",
		async : true,
		data : {
			"pageIndex" : pageIndex, "search_text" : search_text, "type" : type
		},
		success : function(data) {
// 			alert(JSON.stringify(data));
				$("#page_count").val(data["page_count"]);
				$("#pageNumber a").remove();
			var html = '';
			if(data['data'].length > 0){
				for(var i=0; i<data['data'].length; i++){
					if(data['data'][i]['type'] == 1){
						var type_name = '文本 ';
					}else if(data['data'][i]['type'] == 2){
						var type_name = '单图文 ';
					}else if(data['data'][i]['type'] == 3){
						var type_name = '多图文 ';
					}
					html += '<tr><td class="table_cell"><ul class="mater">';
					for(var l=0; l<data['data'][i]['item_list'].length; l++){
						var k = l+1;
						html += '<li><span class="btn_primary">'+ type_name + k+' </span><a href="#">'+data['data'][i]['item_list'][l]['title']+'</a></li>';
					}
					html += '</ul></td>';
					html += '<td>'+data['data'][i]['create_time']+'</td>';
					html += '<td class="table_cell user_opr tr"><a class="btn remark js_msgSenderRemark" onclick="selectedMaterial('+data['data'][i]['media_id']+')">选取</a></td>';
					html += '</tr>';
				}
			}else{
				html += '<tr>';
				html += '<td colspan="3" class="table_cell" style="text-align:center;">暂无素材</td>';
				html += '</tr>';
			}
			
			$("#materia_data tr").remove();
			$("#materia_data").append(html);
			var totalpage = $("#page_count").val();
			if (totalpage == 1) {
				changeClass("all");
			}
			var $html = pagenumShow(jumpNumber,totalpage,<?php echo $pageshow; ?>)
			$("#pageNumber").append($html);
		}
	});
}
/**
 * 选择 图文素材
 */
function selectedMaterial(media_id){
	getMaterial(media_id);
	closeMaterial();
}
/**
 *  取消  关闭
 */
function closeMaterial(){
	$("#dialog_media").fadeOut(300);
	$(".mask_metar").fadeOut();
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