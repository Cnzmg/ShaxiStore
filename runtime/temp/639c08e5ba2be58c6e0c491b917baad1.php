<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"template/platform/Config/webConfig.html";i:1581654359;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
	<header class="panel-heading font-bold"> 网站设置 </header>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">网站标题</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="title" value="<?php echo $website['title']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">官方网址</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="web_url" value="<?php echo $website['web_url']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">联系地址</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="web_address" value="<?php echo $website['web_address']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">网站二维码</label>
				<div class="col-md-4">
					<img src="__ROOT__/<?php echo $qrcode_path; ?>" title=""><!-- <p><img src="<?php echo $website['web_qrcode']; ?>" title=""></p> -->
				</div>
				
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">网站描述</label>
                <div class="col-sm-4">
                    <div id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px"><?php echo $website['web_desc']; ?></div>
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                  <label class="col-lg-2 control-label">网站Logo</label>
                  <div class="col-md-4">
					<p><img id="imgLogo" src="__UPLOAD__/<?php echo $website['logo']; ?>" class="imglogo"/></p>
                         <a href="javascript:void(0);" style="display:block;position:relative;z-index:1;">
                              <span style="width: 97px;height: 34px;position: absolute;left: 0;top: 0;z-index: 2;cursor: pointer;"> 
                              <input hidefocus="true" size="1" class="input-file" name="file_upload" id="uploadImg" nc_type="change_store_label" type="file" style="width: 97px;height: 34px;padding: 0;margin: 0;border: none 0;opacity: 0;filter: alpha(opacity = 0);cursor: pointer;" onchange="imgUpload(this);"> 
							  <input type="hidden" id="Logo" value="<?php echo $website['logo']; ?>" />
							  </span>
						<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
					    </a>
				</div>
           </div>
           <div class="line line-dashed line-lg pull-in"></div>
              <div class="form-group">
                  <label class="col-lg-2 control-label">公众号二维码</label>
                       <div class="col-md-4">
						<p><img id="imgLogo1" src="__UPLOAD__/<?php echo $website['web_qrcode']; ?>" class="imglogo"/></p>
                           <a href="javascript:void(0);" style="display:block;position:relative;z-index:1;">
                            <span style="width: 97px;height: 34px;position: absolute;left: 0;top: 0;z-index: 2;cursor: pointer;"> 
                            <input hidefocus="true" size="1" class="input-file" name="file_upload" id="uploadImg1" nc_type="change_store_label" type="file" style="width: 97px;height: 34px;padding: 0;margin: 0;border: none 0;opacity: 0;filter: alpha(opacity = 0);cursor: pointer;" onchange="imgUpload1(this);"> 
							<input type="hidden" id="Logo1" value="<?php echo $website['web_qrcode']; ?>" />
							</span>
							<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
						</a>
					</div>
              </div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">网站关键字</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="key_words" value="<?php echo $website['key_words']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">电话</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="web_phone" value="<?php echo $website['web_phone']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">邮箱</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="web_email" value="<?php echo $website['web_email']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">qq</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="web_qq" value="<?php echo $website['web_qq']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">微信</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="web_weixin" value="<?php echo $website['web_weixin']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">网站备案号</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="web_icp" value="<?php echo $website['web_icp']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">网站风格</label>
				<div class="col-sm-4">
					<select id="style_id" name="account" class="form-control m-b">
						<?php if(is_array($style_list) || $style_list instanceof \think\Collection || $style_list instanceof \think\Paginator): $i = 0; $__LIST__ = $style_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $v['style_id']; ?>" <?php if($website['style_id'] == $v['style_id']): ?> selected<?php endif; ?>><?php echo $v['style_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">PC端商城运营状态</label>
				 <div class="total">
					  <label for="navigationtype1" style="padding:8px;" class="in"><input type="radio" value="1" name="navigationtype" id="navigationtype1" <?php if($website['web_status'] == 1): ?>checked<?php endif; ?>/>开启</label>
				      <label for="navigationtype2" style="paddind:8px;" class="out"><input type="radio" value="2" name="navigationtype" id="navigationtype2" <?php if($website['web_status'] == 2): ?>checked<?php endif; ?>/>关闭</label>
		 	     </div>
		 	     <p class="col-sm-4" style="margin-left: 16.66%;margin-top: 10px;color: #BBB;">暂时将站点关闭，其他人无法访问，但不影响管理员访问</p>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">WAP端商城运营状态</label>
				 <div class="total">
					  <label for="waptype1" class="go"><input type="radio" value="1" name="waptype" id="waptype1" <?php if($website['wap_status'] == 1): ?>checked<?php endif; ?>/>开启</label>
			      	  <label for="waptype2" class="come"><input type="radio" value="2" name="waptype" id="waptype2" <?php if($website['wap_status'] == 2): ?>checked<?php endif; ?>/>关闭</label>
		 	     </div>
		 	     <p class="col-sm-4" style="width:100%;margin-left: 16.66%;margin-top: 10px;color: #BBB;">暂时将站点关闭，其他人无法访问，但不影响管理员访问</p>
				 <div style="margin-left:16.66%;">
					<textarea name="store_zy" rows="2" id="close_reason" class="textarea w400" style="width:350px;height:100px;"><?php echo $website['close_reason']; ?></textarea>
				    <p class="hint" style="color:#BBB;margin-top:10px;">请填写站点关闭原因，将在前台显示</p>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">商城第三方统计代码</label>
				 <div style="margin-left:16.66%;">
					<textarea name="store_zy" rows="2" id="third_count" class="textarea w400" style="width:350px;height:100px;"><?php echo $website['third_count']; ?></textarea>
				    <p class="hint" style="color:#BBB;margin-top:10px;">页面底部可以显示第三方统计</p>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<a href="javascript:void(0);" onclick="setConfigAjax()" class="btn btn-primary">保存</a>
				</div>
			</div>
		</form>
	</div>
</section>
<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script>
/**
 *图片上传
 */
/* function imgUpload(event) {
	var fileid = $(event).attr("id");   var str = $(event).next().attr("id");
	fileCommonUpload("UPLOAD_URL", fileid,"__UPLOAD__",str);
} */
function imgUpload(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imgLogo").attr("src","__UPLOAD__/"+res.data);
			$("#Logo").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}
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
	function setConfigAjax(){
		var title = $("#title").val();
		var web_url = $("#web_url").val();
		var web_address = $("#web_address").val();
		var web_desc = $("#editor").html();
		var Logo = $("#Logo").val();
		var web_qrcode = $("#Logo1").val();
		var key_words = $("#key_words").val();
		var web_phone = $("#web_phone").val();
		var web_email = $("#web_email").val();
		var web_qq = $("#web_qq").val();
		var web_weixin = $("#web_weixin").val();
		var web_icp = $("#web_icp").val();
		var web_style = $("#style_id").val();
		var web_status = $("input[name='navigationtype']:checked").val();
		var wap_status = $("input[name='waptype']:checked").val();
		var third_count = $("#third_count").val();
		var close_reason = $("#close_reason").val();
		 $.ajax({
			type:"post",
			url:"PLATFORM_MAIN/Config/webConfig",
			data:{
				'title':title,
				'web_url':web_url,
				'web_address':web_address,
				'web_desc':web_desc,
				'logo':Logo,
				'web_qrcode':web_qrcode,
				'key_words':key_words,
				'web_phone':web_phone,
				'web_email':web_email,
				'web_qq':web_qq,
				'web_weixin':web_weixin,
				'web_icp':web_icp,
				'web_style':web_style,
				'web_status' : web_status,
				'wap_status' : wap_status,
				'third_count' : third_count,
				'close_reason' : close_reason
			},
			async:true,
			success:function (data) {
				if (data["code"] > 0) {
					showMessage('success', data["message"],"PLATFORM_MAIN/Config/webConfig");
				}else{
					showMessage('error', data["message"]);
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