<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:41:"template/platform/Wchat/replayConfig.html";i:1581654382;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:44:"template/platform/Wchat/controlWxDialog.html";i:1581654382;s:27:"template/platform/page.html";i:1581654384;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
.step_0{text-align:center;margin-top:100px;}
.reply-div{border:1px solid #d3d3d3;width:360px;padding:15px;margin-top:20px;}
.cover-div{background:#f5f5f5;position:relative;}
.cover-title{position:absolute;left:0;bottom:0;background:#000;color:#fff;width:350px;padding:5px;opacity:0.6;}
.cover-pic{max-width:360px;max-height:200px;margin:auto;display:block;}
.reply-one p,h5{padding:3px 0;}
.reply-one p{color:#999;font-size:13px;}
ul.reply-more li{border-bottom:1px solid #d3d3d3;padding:10px 0;}
ul.reply-more li:after{content:'';clear:both;display:block;}
ul.reply-more li:last-child{border-bottom:0px solid #d3d3d3;padding-bottom:0;}
ul.reply-more li:first-child{padding-top:0;}
.media-div-l{width:270px;margin-right:10px;float:left;}
.media-div-r{width:80px;float:right;}
.media-img{max-width:80px;max-height:200px;margin:auto;display:block;}
.media-button{border:1px solid #d3d3d3;width:360px;border-top:0px solid #d3d3d3;background:#e7e7eb;display:table;}
.media-button a{display:inline-block;width:178.5px;text-align:center;padding:10px 0;}
.media-button a:first-child{border-right:1px solid #d3d3d3;}
.table {width: 100%;font-size: 14px; background-color: #fff;text-align: center;border-top: 1px solid #e7e7eb;border-bottom: 1px solid #e7e7eb;border-spacing: 0;}
.table>thead>tr>th{ border-bottom:none;background-color: #f1f1f1;}
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
							
	<header class="panel-heading text-right bg-light">
		<ul class="nav nav-tabs pull-left">
			<li <?php if($type == 1): ?>class="active"<?php endif; ?>><a href="PLATFORM_MAIN/wchat/replayconfig?type=1" >关注时回复</a></li>
			<li <?php if($type == 2): ?>class="active"<?php endif; ?>><a href="PLATFORM_MAIN/wchat/replayconfig?type=2" >关键字回复</a></li>
		    <li <?php if($type == 3): ?>class="active"<?php endif; ?>><a href="PLATFORM_MAIN/wchat/replayconfig?type=3" >默认回复</a></li>
		</ul>
		<span class="hidden-sm">第三方登录</span>
	</header>
	
<?php if($type == '2'): ?>
 <div class="row padder-v">
            <div class="col-sm-9">
              	   <a class="btn btn-sm btn-primary" href="PLATFORM_MAIN/wchat/addorupdatekeyreplay" ><i class="fa fa-plus"></i>&nbsp;添加关键词回复</a>
            </div>
 </div>
<?php endif; ?>	
<!-- 关注时回复 -->
<?php if($type == '1'): ?>
<div id="type1">
	<p class="step_0" <?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>您还未设置回复内容，
		<a href="javascript:;" onclick="showMaterial()">我要马上设置。</a>
	</p>
	
	<div class="step_1" <?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>style="display:none;"<?php else: ?>style="display:block;"<?php endif; ?>>
	<!-- 样式模板 -->
		<?php if(!(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty()))): if($info['media_info']['type'] == '1'): ?>
				<div class="reply-div">
					<div class="reply-text">
						<p><?php echo $info['media_info']['title']; ?></p>
					</div>
				</div>
			<?php endif; if($info['media_info']['type'] == '2'): ?>
				<div class="reply-div">
					<div class="reply-one">
						<h5><?php echo $info['media_info']['title']; ?></h5>
						<p>xx月xx日</p>
						<div class="cover-div">
							<?php if($info['media_info']['item_list'][0]['cover'] != ''): ?>
							<img class="cover-pic" src="__UPLOAD__/<?php echo $info['media_info']['item_list'][0]['cover']; ?>">
							<?php else: ?>
							<img class="cover-pic">
							<?php endif; ?>
						</div>
						<p><?php echo $info['media_info']['item_list'][0]['summary']; ?></p>
					</div>
				</div>
			<?php endif; if($info['media_info']['type'] == '3'): ?>
				<div class="reply-div">
					<ul class="reply-more">
					<?php if(is_array($info['media_info']['item_list']) || $info['media_info']['item_list'] instanceof \think\Collection || $info['media_info']['item_list'] instanceof \think\Paginator): if( count($info['media_info']['item_list'])==0 ) : echo "" ;else: foreach($info['media_info']['item_list'] as $k=>$v): if($k == '0'): ?>
							<li>
								<div class="cover-div">
									<?php if($v['cover'] != ''): ?>
									<img class="cover-pic" src="__UPLOAD__/<?php echo $v['cover']; ?>">
									<?php else: ?>
									<img class="cover-pic">
									<?php endif; ?>
									<p class="cover-title"><?php echo $v['title']; ?><p>
								</div>
							</li>
						<?php endif; if($k > '0'): ?>
							<li>
								<div class="media-div-l"><p class="media-title"><?php echo $v['title']; ?></p></div>
								<div class="media-div-r">
									<?php if($v['cover'] != ''): ?>
									<img class="media-img" src="__UPLOAD__/<?php echo $v['cover']; ?>">
									<?php else: ?>
									<img class="media-img">
									<?php endif; ?>
								</div>
							</li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			<?php endif; endif; ?>
		<div class="media-button">
			<a class="" href="javascript:;" onclick="showMaterial()">修改</a>
			<a class="" href="javascript:;" onclick="delReply()">删除</a>
		</div>
	</div>
</div>
<input type="hidden" id="id" value="<?php echo $info['id']; ?>">
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
<?php endif; if($type == '3'): ?>
<div id="type3">
	<p class="step_0" <?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>您还未设置回复内容，
		<a href="javascript:;" onclick="showMaterial()">我要马上设置。</a>
	</p>
	
	<div class="step_1" <?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>style="display:none;"<?php else: ?>style="display:block;"<?php endif; ?>>
	<!-- 样式模板 -->
		<?php if(!(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty()))): if($info['media_info']['type'] == '1'): ?>
				<div class="reply-div">
					<div class="reply-text">
						<p><?php echo $info['media_info']['title']; ?></p>
					</div>
				</div>
			<?php endif; if($info['media_info']['type'] == '2'): ?>
				<div class="reply-div">
					<div class="reply-one">
						<h5><?php echo $info['media_info']['title']; ?></h5>
						<p>xx月xx日</p>
						<div class="cover-div">
							<?php if($info['media_info']['item_list'][0]['cover'] == ''): ?>
							<img class="cover-pic" >
							<?php else: ?>
							<img class="cover-pic" src="__UPLOAD__/<?php echo $info['media_info']['item_list'][0]['cover']; ?>">
							<?php endif; ?>
						</div>
						<p><?php echo $info['media_info']['item_list'][0]['summary']; ?></p>
					</div>
				</div>
			<?php endif; if($info['media_info']['type'] == '3'): ?>
				<div class="reply-div">
					<ul class="reply-more">
					<?php if(is_array($info['media_info']['item_list']) || $info['media_info']['item_list'] instanceof \think\Collection || $info['media_info']['item_list'] instanceof \think\Paginator): if( count($info['media_info']['item_list'])==0 ) : echo "" ;else: foreach($info['media_info']['item_list'] as $k=>$v): if($k == '0'): ?>
							<li>
								<div class="cover-div">
									<?php if($v['cover'] !=''): ?>
									<img class="cover-pic" src="__UPLOAD__/<?php echo $v['cover']; ?>">
									<?php else: ?>
									<img class="cover-pic">
									<?php endif; ?>
									<p class="cover-title"><?php echo $v['title']; ?><p>
								</div>
							</li>
						<?php endif; if($k > '0'): ?>
							<li>
								<div class="media-div-l"><p class="media-title"><?php echo $v['title']; ?></p></div>
								<div class="media-div-r">
									<?php if($v['cover'] != ''): ?>
									<img class="media-img" src="__UPLOAD__/<?php echo $v['cover']; ?>">
									<?php else: ?>
									<img class="media-img">
									<?php endif; ?>
								</div>
							</li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			<?php endif; endif; ?>
		<div class="media-button">
			<a class="" href="javascript:;" onclick="showMaterial()">修改</a>
			<a class="" href="javascript:;" onclick="delReply()">删除</a>
		</div>
	</div>
</div>
<input type="hidden" id="id" value="<?php echo $info['id']; ?>">
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
<?php endif; ?>
<!-- 关键字回复 -->
<?php if($type == '2'): ?>
<div class="mod-table">
	<div class="mod-table-head">
		<div class="style0list">
			<table class="table">
				<colgroup>
					<col style="width: 40%;">
					<col style="width: 40%;">
					<col style="width: 20%;">
				</colgroup>
				<thead>
					<tr>
						<th style="width: 40%;text-align:center;">关键字</th>
						<th style="width: 40%;text-align:center;">匹配类型</th>
						<th style="width: 20%;text-align:center;">操作</th>
					</tr>
				</thead>
				<colgroup>
					<col style="width: 40%;">
					<col style="width: 40%;">
					<col style="width: 20%;">
				</colgroup>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<script>
$(function(){
	var type = $("#type").val();
	if(type == 2){
		LoadingInfo(1);
	}
});
function LoadingInfo(page_index,page_size) {
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/wchat/keyreplaylist",
		data : {
			"page_index" : page_index, "page_size" : page_size
		},
		success : function(data) {
			var html = '';
			if (data["data"].length > 0) {
				for (var i = 0; i < data["data"].length; i++) {
					html += '<tr align="center">';
					html += '<td>' + data["data"][i]["key"] + '</td>';
					if(data["data"][i]["match_type"] == 1){
						html += '<td style="width:40%">模糊匹配</td>';
					}else{
						html += '<td style="width:40%">全部匹配</td>';
					}
						html += '<td style="width:20%"><a href="PLATFORM_MAIN/wchat/addorupdatekeyreplay?id=' + data["data"][i]["id"] + '">修改</a>&nbsp;&nbsp; ';
						html += '<a href="javascript:void(0);" onclick="delKeyReply(' + data["data"][i]["id"] + ')">删除</a></td>';
					html += '</tr>';
				}
			} else {
				html += '<tr align="center"><th colspan="3">暂无符合条件的数据记录</th></tr>';
			}
			$(".style0list tbody").html(html);
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}
</script>
<?php endif; ?>
<input type="hidden" id="type" value="<?php echo $type; ?>">

<script>
function delKeyReply(id){
	$( "#dialog" ).dialog({				
        buttons: {
            "确定": function() {
                $(this).dialog('close');
                $.ajax({
            		url : PLATFORMMAIN + "/wchat/delkeyreply",
            		type : "post",
            		async : true,
            		data : { "id" : id },
            		success : function(data){
            			if(data['code'] > 0){
            				showMessage('success', data['message'], PLATFORMMAIN + "/wchat/replayconfig?type=2");
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
	
}
function getMaterial(media_id){
	$.ajax({
		url : PLATFORMMAIN + "/wchat/getweixinmediadetail",
		type : "post",
		async : true,
		data : { "media_id" : media_id },
		success : function(data){
			var html = '';
			if(data){
				html += '<div class="reply-div">';
				if(data['type'] == 1){
					html += '<div class="reply-text">';
					html += '<p>'+data['title']+'</p>';
					html += '</div>';
				}else if(data['type'] == 2){
					html += '<div class="reply-one">';
					html += '<h5>'+data['item_list'][0]['title']+'</h5>';
					html += '<p>xx月xx日</p>';
					html += '<div class="cover-div"><img class="cover-pic" src="'+UPLOAD+'/'+data['item_list'][0]['cover']+'"></div>';
					html += '<p>'+data['item_list'][0]['summary']+'</p>';
					html += '</div>';
				}else if(data['type'] == 3){
					html += '<ul class="reply-more">';
					for(var i=0; i < data['item_list'].length; i++){
						if(i < 1){
							html += '<li><div class="cover-div">';
							html += '<img class="cover-pic" src="'+UPLOAD+'/'+data['item_list'][i]['cover']+'">';
							html += '<p class="cover-title">'+data['item_list'][i]['title']+'<p>';
							html += '</div></li>';
						}else{
							html += '<li>';
							html += '<div class="media-div-l"><p class="media-title">'+data['item_list'][i]['title']+'</p></div>';
							html += '<div class="media-div-r"><img class="media-img" src="'+UPLOAD+'/'+data['item_list'][i]['cover']+'"></div>';
							html += '</li>';
						}
					}
					html += '</ul>';
				}
				html += '</div>';
			}
			var type = $("#type").val();
			$("#type"+type+" .step_0").hide();
			$("#type"+type+" .step_1").show();
			$("#type"+type+" .step_1 .reply-div").remove();
			$("#type"+type+" .step_1 .media-button").before(html);
			if(type == 1){
				addOrUpdateFollowReply(media_id);
			}else if(type == 3){
				addOrUpdateDefaultReply(media_id);
			}
		}
	})
}
/**
 * 添加 或 修改 关注时回复
 */
function addOrUpdateFollowReply(media_id){
	var id = $("#id").val();
	var type = $("#type").val();
	$.ajax({
		url : PLATFORMMAIN + "/wchat/addorupdatefollowreply",
		type : "post",
		async : true,
		data : { "media_id" : media_id, "id" : id },
		success : function(data){
			if(data['code'] > 0){
				showMessage('success', data['message']);
			}else{
				showMessage('error', data['message']);
			}
		}
	})
}
/**
 * 添加 或 修改 默认回复
 */
function addOrUpdateDefaultReply(media_id){
	var id = $("#id").val();
	var type = $("#type").val();
	$.ajax({
		url : PLATFORMMAIN + "/wchat/addorupdatedefaultreply",
		type : "post",
		async : true,
		data : { "media_id" : media_id, "id" : id },
		success : function(data){
			if(data['code'] > 0){
				showMessage('success', data['message']);
			}else{
				showMessage('error', data['message']);
			}
		}
	})
}
/**
 * 删除 回复
 */
function delReply(){
	var type = $("#type").val();
	$.ajax({
		url : PLATFORMMAIN + "/wchat/delreply",
		type : "post",
		async : true,
		data : { "type" : type},
		success : function(data){
			if(data['code'] > 0){
				showMessage('success', data['message'], PLATFORMMAIN + "/wchat/replayconfig?type="+type);
			}else{
				showMessage('error', data['message']);
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