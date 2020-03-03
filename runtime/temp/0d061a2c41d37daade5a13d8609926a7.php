<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:40:"template/platform/Member/memberList.html";i:1581654370;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:27:"template/platform/page.html";i:1581654384;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/member_list.css" />
<style>
/* .adduserinfo{
	background: #65bd77;
    border: 0;
    color: #fff;
    line-height: 30px;
} */
.table>tbody#list>tr>td>img{max-height:60px;}
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
	<div class="col-sm-9" style="width:74%;">
<!-- 	<input type="button" value="添加会员" onclick="add_user();" class="adduserinfo"/> -->
	<a href="javascript:;" class="btn btn-sm btn-primary" onclick="add_user();"><i class="fa fa-plus"></i> 添加会员 </a></div>
	<div class="col-sm-2">
		<div class="input-group">
			<input type="text" class="input-sm form-control" id="search_text"
				placeholder="请输入用户名">
		</div>
	</div>
	<div class="col-sm-1">
		<div class="input-group">
			<span class="input-group-btn">
				<button class="btn btn-sm btn-default" type="button"
					onclick="LoadingInfo(1)">搜索</button>
			</span>
		</div>
	</div>
</div>
<section class="panel panel-default">
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th width="20"><input type="checkbox"></th>
					<th>会员</th>
					<th class="center">会员等级</th>
					<th class="center">积分</th>
					<th class="center">账户余额</th>
					<th class="center">注册&登录</th>
					<th class="center">状态</th>
					<th class="center">操作</th>
				</tr>
			</thead>
			<tbody id="list">
				<tr></tr>
			</tbody>
		</table>
	</div>
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

<!-- 充值购物币（Modal）开始 -->
<div class="modal fade" id="rechargeCoin">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">充值购物币</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-12">
							<label
								style="float: left; margin-right: 20px; line-height: 35px;">购物币个数:</label>
							<input type="text" class="form-control" id="num"
								placeholder="请输入充值购物币个数"
								style="width: 200px; float: left; margin-right: 10px;">
							<span class="help-block m-b-none" style="line-height: 35px;">个</span>
						</div>

					</div>
					<div>
						<lable
							style="float: left;margin-right: 20px;line-height: 35px;font-weight: 600;">备注：</lable>
						<textarea id="text" type="text"
							style="width: 300px; height: 80px; border-color: #d9d9d9; border-radius: 2px;"></textarea>
						<input type="hidden" id="uid" value="" />
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-info"
					onclick="addRechargeCoin()">保存</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal -->
</div>
<!-- 充值购物币（Modal）结束 -->
<!-- 余额调整 -->
<div class="modal" id="recharge_balance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">调整余额</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table>
						<tr>
							<td>当前余额</td>
							<td colspan='3' id="current_balance"></td>
						</tr>
						<tr>
							<td>调整金额</td>
							<td colspan='3' id="time"><input type="number" id="balance" class="balance" />增加或减少</td>
						</tr>
						<tr>
							<td>备注</td>
							<td colspan='3' id="time"><textarea id="remark_balance"></textarea></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="balance_id" />
				<button class="btn btn-info" onclick="addAccount(2)" id="butSubmit" data-dismiss="modal" aria-hidden="true" style="display:inline-block;">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>

<!-- 积分调整 -->
<div class="modal" id="recharge_point" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">调整积分</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table>
						<tr>
							<td>当前积分</td>
							<td colspan='3' id="current_point"></td>
						</tr>
						<tr>
							<td>调整积分</td>
							<td colspan='3' id="time"><input type="number" id="point" class="point">增加或减少</td>
						</tr>
						<tr>
							<td>备注</td>
							<td colspan='3' id="time"><textarea id="remark_point"></textarea></td>
						</tr>
					</table>
					
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="point_id" />
				<button class="btn btn-info" onclick="addAccount(1)" id="butSubmit" data-dismiss="modal" aria-hidden="true" style="display:inline-block;">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>
<!-- 添加会员 -->
<div class="modal" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">添加会员</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style" style="height:260px;overflow:auto;">
					<table class="modal-tab">
						<tr>
							<td style="width:20%;"><span class="required">*</span>用户名</td>
							<td colspan='3'>
								<input type="text" id="username"/>
								<span id="usernameyz"></span>
								<input type="hidden" value="不存在" id="isset_username"/>
							</td>
						</tr>
						<tr>
							<td><span class="required">*</span>登录密码</td>
							<td colspan='3'><input type="password" id="password" class="balance"></td>
						</tr>
						<tr>
							<td style="width:22%;">昵称</td>
							<td colspan='3'>
								<input type="text" id="nickname"/>
							</td>
						</tr>
						<tr>
							<td>会员等级</td>
							<td colspan='3'>
								<p>
									<?php if($level_list['data']): ?>
									<select id="member_level">
										<?php if(is_array($level_list['data']) || $level_list['data'] instanceof \think\Collection || $level_list['data'] instanceof \think\Paginator): if( count($level_list['data'])==0 ) : echo "" ;else: foreach($level_list['data'] as $key=>$vo): ?>
										<option value="<?php echo $vo['level_id']; ?>"><?php echo $vo['level_name']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
									<?php else: ?>
									<span>暂无会员等级分类</span>
									<?php endif; ?>
								</p>
							</td>
						</tr>
						<tr>
							<td>手机号码</td>
							<td colspan='3'><input type="text" id="telephone"/></td>
						</tr>
						<tr>
							<td>邮箱地址</td>
							<td colspan='3'><input type="text" id="member_email"/></td>
						</tr>
						<tr>
							<td>性别</td>
							<td><label><input type="radio" checked="checked" name="sex" value="1"/>男&nbsp;&nbsp;</label><label><input name="sex" type="radio" value="2"/>女&nbsp;&nbsp;</label><label><input name="sex" type="radio" value="0"/>保密</label></td>
						</tr>
						<tr>
							<td>账户状态</td>
							<td><label><input type="radio" checked="checked" name="status" value="1"/>正常&nbsp;&nbsp;</label><label><input name="status" type="radio" value="0"/>锁定</label></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<button class="btn btn-info" onclick="addUser()" id="butSubmit"  style="display:inline-block;">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>
<input type="hidden" id="modify_uid"/>

<!-- 修改会员 -->
<div class="modal" id="modify_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">编辑会员</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style" style="height:260px;overflow:auto;">
					<table class="modal-tab">
						<tr>
							<td style="width:20%"><span class="required">*</span>用户名</td>
							<td colspan='3'>
								<span id="modify_username"></span>
								<span id="modify_usernameyz"></span>
								<input type="hidden" value="不存在" id="modify_isset_username"/>
							</td>
						</tr>
						<tr>
							<td style="width:20%">昵称</td>
							<td colspan='3'><input type="text" id="modify_nickname"/></td>
						</tr>
						<tr>
							<td>会员等级</td>
							<td colspan='3'>
								<p>
									<?php if($level_list['data']): ?>
									<select id="modify_member_level">
										<?php if(is_array($level_list['data']) || $level_list['data'] instanceof \think\Collection || $level_list['data'] instanceof \think\Paginator): if( count($level_list['data'])==0 ) : echo "" ;else: foreach($level_list['data'] as $key=>$vo): ?>
										<option value="<?php echo $vo['level_id']; ?>"><?php echo $vo['level_name']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
									<?php else: ?>
									<span>暂无会员等级分类</span>
									<?php endif; ?>
								</p>
							</td>
						</tr>
						<tr>
							<td>手机号码</td>
							<td colspan='3'><input type="text" id="modify_telephone" value=""/></td>
						</tr>
						<tr>
							<td>邮箱地址</td>
							<td colspan='3'><input type="text" id="modify_member_email"/></td>
						</tr>
						<tr>
							<td>性别</td>
							<td id="sex"><label><input type="radio" name="sex" value="1"/>男&nbsp;&nbsp;</label><label><input name="sex" type="radio" value="2"/>女&nbsp;&nbsp;</label><label><input name="sex" type="radio" value="0"/>保密</label></td>
						</tr>
						<tr>
							<td>账户状态</td>
							<td id="status"><label><input type="radio" name="status" value="1"/>正常&nbsp;&nbsp;</label><label><input name="status" type="radio" value="0"/>锁定</label></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="modify_username_hidden" />
				<button class="btn btn-info" onclick="modifyUser()" id="butSubmit"  style="display:inline-block;">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>
<!-- 修改会员 -->
<div class="modal" id="modify_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">重置密码</h4>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table class="modal-tab">
						<tr>
							<td style="width:20%">密码</td>
							<td colspan='3'><input type="text" id="modify_passwords"/></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="modify_userid" />
				<button class="btn btn-info" onclick="modifypassword()" id="butSubmit"  style="display:inline-block;">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>



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

$(function(){
	LoadingInfo(1);
})
	function LoadingInfo(pageIndex) {
		var search_text = $("#search_text").val();
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/member/memberlist",
			async : true,
			data : {
				"pageIndex" : pageIndex, "search_text" : search_text
			},
			success : function(data) {
// 				alert(JSON.stringify(data));
				var html = '';
				$("#total_count_num").text(data["total_count"]);
				$("#page_count_num").text(data["page_count"]);
				$("#page_count").val(data["page_count"]);
				$("#pageNumber a").remove();
				if (data["data"].length > 0) {
					for (var i = 0; i < data["data"].length; i++) {
						html += '<tr align="center">';
						html += '<td><div class="cell"><label ><input name="sub" type="checkbox" value="'+ data["data"][i]["uid"]+'" ></label></div></td>';
						html += '<td align="left">';
							
						if(data["data"][i]["user_headimg"] ==""){
							html += '<img src="__STATIC__/images/default_user_portrait.gif" class="head-portrait" />';
							if(data["data"][i]["user_name"] == '' || data["data"][i]["user_name"] == null){
								html+='用户名:'+'--'+'<br/>';
							}else{
								html+='用户名:'+data["data"][i]["user_name"] +'<br/>';
							}
							if (data["data"][i]["user_tel"] == null || "" == data["data"][i]["user_tel"]) {
								if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+'--'+'<br/>'+'邮箱 : '+'--';
								} else {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+'--'+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								}
							} else {
								if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+'--';
								} else {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								}
							}
						}else{
							html += '<img src="__UPLOAD__/'+data["data"][i]["user_headimg"]+'" class="head-portrait" />';
							if (data["data"][i]["user_tel"] == null || "" == data["data"][i]["user_tel"]) {
								if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+'--'+'<br/>'+'邮箱 : '+'--';
								} else {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+'--'+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								}
							} else {
								if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+'--';
								} else {
									html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								}
							}
						}
						html += '</td>';
						if(data["data"][i]["level_name"]==null || data["data"][i]["level_name"]==undefined){
							html += '<td class="tal">--</td>';
						}else{
							html += '<td class="tal">' + data["data"][i]["level_name"] + '</td>';
						}
						html += '<td class="tal">' + data["data"][i]["point"] + '</td>';
						html += '<td class="tal">'+'¥'+ data["data"][i]["balance"] +'</td>';
						html += '<td class="tal">' +'注册时间 : '+ data["data"][i]["reg_time"] +'<br>'+'最后登录 : '+ data["data"][i]["current_login_time"]+'</td>';
						html += data["data"][i]["user_status"] == 0 ? '<td style="color:red;">锁定</td>' : '<td style="color:green;">正常</td>';
						html += '<td><a href="PLATFORM_MAIN/member/pointdetail?member_id='+ data['data'][i]['uid'] +'">积分明细</a>&nbsp;&nbsp;';
						html += '<a href="PLATFORM_MAIN/member/accountdetail?member_id='+ data['data'][i]['uid'] +'">余额明细</a><br/>';
						html += '<a onclick="recharge_point('+ data["data"][i]["uid"]+','+ data["data"][i]["point"] +')">积分调整</a>&nbsp;&nbsp;';
						html += '<a onclick="recharge_balance('+ data["data"][i]["uid"]+','+data["data"][i]["balance"]+')">余额调整</a><br/>';
						
						if(data["data"][i]["is_system"] != 1){
							if(data["data"][i]["user_status"] == 0){
								html += '<a onclick="unlockuser('+ data["data"][i]["uid"]+')">设置解锁&nbsp;&nbsp;&nbsp;</a>';
							}else{
								html += '<a onclick="lockuser('+ data["data"][i]["uid"]+')">设置锁定&nbsp;&nbsp;&nbsp;</a>';
							}
							html += '<a onclick="modify_password('+ data["data"][i]["uid"]+')">重置密码</a><br/>';
							
							html += '<a onclick="modify_user('+ data["data"][i]["uid"]+')">修改</a>&nbsp;&nbsp;<a onclick="delete_user('+ data["data"][i]["uid"]+')">删除</a><br/>';
							
						}
						html += '</td>'
						html += '</tr>';
					}
					
				} else {
					html += '<tr align="center"><th colspan="9">暂无符合条件的数据记录</th></tr>';
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
//添加会员弹出
function add_user(){
	$("#add_user").modal("show");
}
//添加会员
function addUser(){
	var username = $("#username").val();
	var nickname = $("#nickname").val();
	var password = $("#password").val();
	var level_name = $("#member_level").val();
	var tel = $("#telephone").val();
	var email = $("#member_email").val();
	var sex = $("input[name='sex']:checked").val();
	var status = $("input[name='status']:checked").val();
	
	if (username == '') {
		showMessage('error','用户名不能为空');
		return;
	}
	
	if(!checkUserName(username)){
		showMessage('error','用户名已存在');
		return;
	}
	//检测输入的会员用户名是否已经存在
	$("#username").blur(function(){
		var username = $(this).val();
		$(this).css("border","1px solid #ccc");
		$("#usernameyz").css("color","black").text("");
		$("#isset_username").attr("value","不存在");
		if(username === $("#modify_username_hidden").val()){
 			return;
 		}
		checkUserName(username);
	});
	function checkUserName(username){
		var flag = true;
		$.ajax({
			type: "GET",
			url: "PLATFORM_MAIN/member/check_username",
			async : false,
			data: {"username":username},
			success: function(data){
				if(data){
					flag = false;
					$("#username").css("border","1px solid red");
					$("#usernameyz").css("color","red").text("用户名已存在");
					$("#isset_username").attr("value","存在");
				}
			} 
		});
		return flag;
	}
	if (password == null || password.length < 6) {
		showMessage('error','密码必须不小于6位！');
		return;
	}
	if(tel.length > 0){
		if(!(/^1(3|4|5|7|8)\d{9}$/.test(tel))){ 
			showMessage('error',"手机号码有误，请重填");
			return; 
		}
	}
	if(email.length > 0){
		if(!(/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/.test(email))){ 
			showMessage('error','邮箱错误,请重填');
			return; 
		}
	}
	$.ajax({
		type : "post",
		url : "PLATFORM_MAIN/member/addmember",
		data : {
			'username' : username,
			'nickname' :nickname,
			'password' : password,
			'level_name' : level_name,
			'tel' : tel,
			'email' : email,
			'sex' : sex,
			'status' : status
		},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success',data['message'],'PLATFORM_MAIN/member/memberlist');
				$("#add_user").modal("hide");
// 				LoadingInfo(getCurrentIndex(1,'#productTbody'));
			} else {
				showMessage('error',data['message']);
				flag = false;
			}
		}
	});
		
}
	//全选
	function CheckAll(event){
		var checked = event.checked;
		$(".style0list tbody input[type = 'checkbox']").prop("checked",checked);
	}
	//充值购物币弹出
	function showRechargeCoin(uid){
	$("#uid").val(uid);
	$("#rechargeCoin").modal('show');
	}
	//充值购物币提交
	function addRechargeCoin(){
		var uid = $("#uid").val();
		var num =$("#num").val();
		var text = $("#text").val();
		if(isNaN(num)){
			showMessage('error', '输入的购物币必须是整数！');
			return;
		}
		//alert(uid);
		$.ajax({
			type:"post",
			url:"PLATFORM_MAIN/Member/addRechargeCoin",
			data:{
				'id' : uid,
				'num' : num,
				'text' : text
			},
			async:true,
			success:function (data) {
				//alert(JSON.stringify(data));
				if (data["code"] > 0) {
					showMessage('success', data["message"],"PLATFORM_MAIN/Member/memberList");
					$("#rechargeCoin").modal('hide');
				}else{
					showMessage('error', data["message"]);
				}	
			}
		});
	}
	//积分充值
	function recharge_point(uid,point){
		$("#recharge_point").modal("show");
		$("#point_id").val(uid);
		$("#current_point").text(point);
	}
	//余额充值
	function recharge_balance(uid,balance){
		$("#recharge_balance").modal("show");
		$("#balance_id").val(uid);
		$("#current_balance").text(balance);
	}
	//充值
	function addAccount(type){
		if(type == 1){
			var id = $("#point_id").val();
			var num = $("#point").val();
			var current_point = $("#current_point").text();
			var point = (parseInt(current_point) + parseInt(num));
			if(num == ''){
				showMessage('error','积分不能为空');
				return false;
			}
			var text = $("#remark_point").val();
			if(parseInt(point) < 0){
				showMessage('error','积分不能为负数');
				return false;
			}
		}else{
			var id = $("#balance_id").val();
			var num = $("#balance").val();
			var current_balance = $("#current_balance").text();
			var balance = (parseInt(current_balance) + parseInt(num));
			if(num == ''){
				showMessage('error','余额不能为空');
				return false;
			}
			var text = $("#remark_balance").val();
			if(parseInt(balance) < 0){
				showMessage('error','余额不能为负数');
				return false;
			}
		}
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/member/addmemberaccount",
			data : {
				"id" : id,
				"type" : type,
				"num" : num,
				"text" : text
			},
			success : function(data) {
				if (data["code"] > 0) {
					//LoadingInfo(getCurrentIndex(id,'#productTbody'));
					showMessage('success',data['message'],'PLATFORM_MAIN/member/memberlist');
				}else{
					showMessage('error',data['message']);
				}
			}
		});
	}
	//修改会员弹出
	function modify_user(uid){
		var id = parseInt(uid);
		$("#modify_user").modal("show");
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/member/getmemberdetail",
			data : { 'uid':id, },
			success : function(data) {
				$("#modify_uid").val(data.uid);
				$("#modify_username").text(data.user_name);
				$("#modify_nickname").val(data.nick_name);
				//$("#modify_password").val(data.user_password);
				$("#modify_username_hidden").val(data.user_name);
				$("#modify_telephone").val(data.user_tel);
				$("#modify_member_email").val(data.user_email);
				$("#modify_member_level").find("option[value="+data.member.member_level+"]").attr("selected",true);
				$("#sex").find("input[value="+data.sex+"]").attr("checked",true);
				$("#status").find("input[value="+data.user_status+"]").attr("checked",true);
			}
		});
	}
	/**
	重置密码弹出
	*/
	function modify_password(uid){
		$("#modify_password").modal("show");
		$("#modify_userid").val(uid);
	}
	/**
	修改密码提交
	*/
	function modifypassword(){
		var uid = $("#modify_userid").val();
		var password = $("#modify_passwords").val(); 
		if (password == null || password.length < 6) {
			showTip('密码必须不小于6位！','warning');
			return false;
		}
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/member/updatememberpassword",
			data : {
				'uid':uid,
				'user_password' :password
			},
			success : function(data) {
				if (data['code'] > 0) {
					showMessage('success','修改成功','PLATFORM_MAIN/member/memberlist');
					//LoadingInfo(getCurrentIndex(uid,'#productTbody'));
				} else {
					showMessage('error','修改失败');
					flag = false;
				}
			}
		});
	}
	
	
	function delete_user(uid){
		$( "#dialog" ).dialog({
			buttons: {
				"确定": function() {
					$.ajax({
						type : "post",
						url : "PLATFORM_MAIN/member/deletemember",
						data : { "uid" : uid.toString() },
						dataType : "json",
						success : function(data) {
							if(data["code"] > 0 ){
								//LoadingInfo(getCurrentIndex(uid.toString(),'#productTbody'));
								showMessage('success',data["message"],'PLATFORM_MAIN/member/memberlist');
								$("#chek_all").prop("checked", false);
							}else{
								showMessage(data["message"],'error');
							}
						}
					});
					$(this).dialog('close');
				},
				"取消,#e57373": function() {
					$(this).dialog('close');
				},
			},
			contentText:"删除会员同时会删除会员相关账户信息，确定要删除吗？",
		});
	}
// 	//修改会员
	function modifyUser(){
		var uid = $("#modify_uid").val();
		var username = $("#modify_username").text();
		var nickname = $("#modify_nickname").val();
		var tel = $("#modify_telephone").val();
		var email = $("#modify_member_email").val();
		var level_name = $("#modify_member_level").val();
		var sex = $("input[name='sex']:checked").val();
		var status = $("input[name='status']:checked").val();
			
		 if(tel.length > 0){
			if(!(/^1(3|4|5|7|8)\d{9}$/.test(tel))){ 
				showMessage('error',"手机号码有误，请重填");
				return false; 
			}
		}
		 if(email.length > 0){
			if(!(/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/.test(email))){ 
				showMessage('error','邮箱错误,请重填');
				return false; 
			}
		}
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/member/updatemember",
			data : {
				'uid':uid,
				'user_name' :username,
				'nick_name' : nickname,
				'level_name' : level_name,
				'tel' : tel,
				'email' : email,
				'sex' : sex,
				'status' : status
			},
			success : function(data) {
				if (data['code'] > 0) {
					showMessage('success',data['message'],'PLATFORM_MAIN/member/memberlist');
					LoadingInfo(getCurrentIndex(uid,'#productTbody'));
					$("#modify_user").hide();
				} else {
					showMessage('error',data['message']);
					flag = false;
				}
			}
		});
	}
	//批量删除
	function batchDelete() {
		var uid= new Array();
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				uid.push($(this).val());
			}
		});
		if(uid.length ==0){
			$( "#dialog" ).dialog({
				buttons: {
					"确定,#e57373": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		delete_user(uid);
	}
	
	//锁定会员
	function lockuser(uid)
	{
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/Member/memberLock",
			async : true,
			data : {
				"id" : uid
			},
			success : function(data) {
				if (data["code"] > 0) {
					showMessage('success', data["message"],'PLATFORM_MAIN/Member/memberList');
				}else{
					showMessage('error', data["message"]);
				}
			}
		});
	}
	//解锁会员
	function unlockuser(uid)
	{
		$.ajax({
			type : "post",
			url : "PLATFORM_MAIN/Member/memberUnlock",
			async : true,
			data : {
				"id" : uid
			},
			success : function(data) {
				if (data["code"] > 0) {
					showMessage('success', data["message"],'PLATFORM_MAIN/Member/memberList');
				}else{
					showMessage('error', data["message"]);
				}
			}
		});
	}
	$("#search_text").keypress(function(e){
		if(e.keyCode == 13){
			LoadingInfo(1);
		}
	});
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