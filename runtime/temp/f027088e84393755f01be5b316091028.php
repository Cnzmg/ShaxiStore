<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:37:"template/platform/Config/shopSet.html";i:1581654358;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
	<header class="panel-heading font-bold"> 购物设置 </header>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">自动收货时间</label>
				<div class="col-md-4">
					<input id="order_auto_delinery" type="number" min="0.00" step="1.00" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')" value="<?php echo $shopSet['order_auto_delinery']; ?>" style="margin-bottom: 10px;width: 100%;padding: 6px 12px;">
					<br/><a class="hint" style="color:#BBB;">订单多长时间后自动收货，单位为/天</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">订单自动关闭时间</label>
				<div class="col-md-4">
					<input id="order_buy_close_time" type="number" min="0.00" step="1.00" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')" value="<?php echo $shopSet['order_buy_close_time']; ?>" style="margin-bottom: 10px;width: 100%;padding: 6px 12px;">
					<br/><a class="hint" style="color:#BBB;">订单开始后多长时间未付款自动关闭，单位为/分钟(注：不填写或0默认关闭时间为60分钟)</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">是否开启余额支付</label>
				<div class="col-md-4">
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="order_balance_pay" value="1" <?php if($shopSet['order_balance_pay'] == 1): ?>checked="checked"<?php endif; ?> id="balanceResultYes">启用</label> 
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="order_balance_pay" value="0" <?php if($shopSet['order_balance_pay'] == 0): ?>checked="checked"<?php endif; ?> id="balanceResultNo">禁用</label>
					<input type="hidden" id="is_open" value="<?php echo $shopSet['order_balance_pay']; ?>">
					<br/><a class="hint" style="color:#BBB;">是否开启余额支付</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">是否开启货到付款</label>
				<div class="col-md-4">
					<label class="radio inline"><input type="radio" name="order_delivery_pay" value="1"  id="payResultYes" <?php if($shopSet['order_delivery_pay'] == 1): ?>checked<?php endif; ?>>启用</label> 
					<label class="radio inline"><input type="radio" name="order_delivery_pay" value="0"  id="payResultNo"  <?php if($shopSet['order_delivery_pay'] == 0): ?>checked<?php endif; ?>>禁用</label>
					<br/><a class="hint" style="color:#BBB;">是否支持货到付款</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">订单完成时间</label>
				<div class="col-md-4">
					<select id="order_delivery_complete_time" style="width:100%;padding:6px 12px;margin-bottom:10px;">
						<option id = 'closeday0' value="0" <?php if($shopSet['order_delivery_complete_time'] == 0): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;立即</option>
						<option id = 'closeday1' value="1" <?php if($shopSet['order_delivery_complete_time'] == 1): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;1天</option>
						<option id = 'closeday2' value="2" <?php if($shopSet['order_delivery_complete_time'] == 2): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;2天</option>
						<option id = 'closeday3' value="3" <?php if($shopSet['order_delivery_complete_time'] == 3): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;3天</option>
						<option id = 'closeday4' value="4" <?php if($shopSet['order_delivery_complete_time'] == 4): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;4天</option>
						<option id = 'closeday5' value="5" <?php if($shopSet['order_delivery_complete_time'] == 5): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;5天</option>
						<option id = 'closeday6' value="6" <?php if($shopSet['order_delivery_complete_time'] == 6): ?>selected="selected"<?php endif; ?> >&nbsp;&nbsp;6天</option>
						<option id = 'closeday7' value="7" <?php if($shopSet['order_delivery_complete_time'] == 7): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;7天</option>
  					</select>
  					<input type="hidden" id="closeday" value="<?php echo $shopSet['order_delivery_complete_time']; ?>">
  					<br/><a class="hint" style="color:#BBB;">收货后，多少时间订单自动完成，单位为/天</a>
				</div>
			</div>
           
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">是否显示购买记录</label>
				<div class="col-md-4">
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="order_show_buy_record" value="1" <?php if($shopSet['order_show_buy_record'] == 1): ?>checked="checked"<?php endif; ?> id="purchaseRecordYes">启用</label> 
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="order_show_buy_record" value="0" <?php if($shopSet['order_show_buy_record'] == 0): ?>checked="checked"<?php endif; ?> id="purchaseRecordNo">禁用</label><br/>
					<input type="hidden" id="or_open" value="<?php echo $shopSet['order_show_buy_record']; ?>">
					<a class="hint" style="color:#BBB;">是否显示购买记录</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">是否开启买家自提</label>
				<div class="col-md-4">
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="buyer_self_lifting" value="1" <?php if($shopSet['buyer_self_lifting'] == 1): ?>checked="checked"<?php endif; ?> id="sinceYes">启用</label> 
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="buyer_self_lifting" value="0" id="sinceNo" <?php if($shopSet['buyer_self_lifting'] == 0): ?>checked="checked"<?php endif; ?>>禁用</label><br/>
					<input type="hidden" id="is_start" value="<?php echo $shopSet['buyer_self_lifting']; ?>">
					<a class="hint" style="color:#BBB;">是否启用买家自提</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">是否开启商家配送</label>
				<div class="col-md-4">
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="seller_dispatching" value="1" <?php if($shopSet['seller_dispatching'] == 1): ?>checked="checked"<?php endif; ?> id="dispatchingYes">启用</label> 
					<label class="radio inline" style="margin-bottom:10px;"><input type="radio" name="seller_dispatching" value="0" <?php if($shopSet['seller_dispatching'] == 0): ?>checked="checked"<?php endif; ?> id="dispatchingNo">禁用</label>
					<input type="hidden" id="is_dispatching" value="<?php echo $shopSet['seller_dispatching']; ?>">
					<br/><a class="hint" style="color:#BBB;">是否启用商家配送</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">购物返积分设置:</label>
				<div class="col-sm-4">
					<select id="shopping_back_points" style="margin-bottom:10px;width:100%;padding:6px 12px;">
						<option  value="1" <?php if($shopSet['shopping_back_points'] == 1): ?>selected<?php endif; ?>>&nbsp;&nbsp;订单已完成</option>
						<option  value="2" <?php if($shopSet['shopping_back_points'] == 2): ?>selected<?php endif; ?>>&nbsp;&nbsp;已收货</option>
						<option  value="3" <?php if($shopSet['shopping_back_points'] == 3): ?>selected<?php endif; ?>>&nbsp;&nbsp;支付完成</option>
  					</select>
  					<br/><a class="hint" style="color:#BBB;">购物返积分设置</a>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">发票税率:</label>
				 <div class="col-sm-4">
					<input id="order_invoice_tax" type="number" min="0.00" step="0.01" value="<?php echo $shopSet['order_invoice_tax']; ?>" style="margin-bottom:10px;width:100%;padding:6px 12px;"/>
					<br/><a class="hint" style="color:#BBB;">设置开发票的税率，单位为%</a>
		 	     </div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">发票内容</label>
				 
				 <div class="col-sm-4">
					<textarea  rows="2" id="order_invoice_content" class="textarea w400" style="width:100%;height:150px;margin-bottom:10px;"><?php echo $shopSet['order_invoice_content']; ?></textarea>
				    <br/><a class="hint" style="color:#BBB;">客户要求开发票时可以选择的内容，逗号分格代表一个选项，例如：办公用品,明细</a>
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
var validation = true;//验证余额输入
$("#order_invoice_tax").live("keyup",function(){
	var reg = /^\d+(.{0,1})(\d{0,2})$/;
	if(!reg.test($(this).val())){
		showTip("请输入大于0的数字，并且保留两位小数","warning");
		validation = false;
	}else{
		validation = true;
	}
})
	window.onload=function(){
		var is_open = $("#is_open").val();
		if(is_open == ''){
			is_open = 0;
		}
		if(parseInt(is_open) == 0){
			$("#balanceResultNo").prop("checked","checked");
		}else{
			$("#balanceResultYes").prop("checked","checked");
		}
		
		var or_open = $("#or_open").val();
		if(or_open == ''){
			or_open = 0;
		}
		//alert(or_open);
		if(parseInt(or_open) == 0){
			$("purchaseRecordNo").prop("checked","checked");
		}else{
			$("#purchaseRecordYes").prop("checked","checked");
		}
		
		var closeday = $("#closeday").val();
		//alert(closeday);
		$("#closeday"+closeday).attr("selected", true);
		
		var is_start = $("#is_start").val();
		if(is_start == ''){
			is_start = 0;
		}
		if(parseInt(is_start) == 0){
			$("#sinceNo").prop("checked","checked");
		}else{
			$("#sinceYes").prop("checked","checked");
		}
		
		var is_dispatching = $("#is_dispatching").val();
		if(is_dispatching == ''){
			is_dispatching = 0;
		}
		if(parseInt(is_dispatching) == 0){
			$("#dispatchingNo").prop("checked","checked");
		}else{
			$("#dispatchingYes").prop("checked","checked");
		}
		
	};
	function setConfigAjax(){
		var order_delivery_complete_time = $('#order_delivery_complete_time').val();
		var order_buy_close_time = $('#order_buy_close_time').val();
		var order_balance_pay = $("input[type='radio'][name='order_balance_pay']:checked").val();
		var order_delivery_pay = $("input[type='radio'][name='order_delivery_pay']:checked").val();
		var order_auto_delinery = $("#order_auto_delinery").val();
		var order_show_buy_record = $("input[type='radio'][name='order_show_buy_record']:checked").val();
		var buyer_self_lifting = $("input[type='radio'][name='buyer_self_lifting']:checked").val();
		var seller_dispatching = $("input[type='radio'][name='seller_dispatching']:checked").val();
		var order_invoice_tax = $("#order_invoice_tax").val();
		var order_invoice_content = $("#order_invoice_content").val();
		var shopping_back_points = $("#shopping_back_points").val();
		 $.ajax({
			type:"post",
			url:"PLATFORM_MAIN/Config/shopset",
			data:{
				"order_delivery_complete_time" : order_delivery_complete_time,
				"order_buy_close_time":order_buy_close_time,
				"order_balance_pay" : order_balance_pay,
				"order_delivery_pay" : order_delivery_pay,
				"order_auto_delinery" : order_auto_delinery,
				"order_show_buy_record" : order_show_buy_record,
				"buyer_self_lifting" : buyer_self_lifting,
				"seller_dispatching" : seller_dispatching,
				"order_invoice_tax" : order_invoice_tax,
				"order_invoice_content" : order_invoice_content,
				"shopping_back_points" : shopping_back_points
			},
			async:true,
			success:function (data) {
				if (data["code"] > 0) {
					showMessage('success', data["message"],"PLATFORM_MAIN/config/shopset");
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