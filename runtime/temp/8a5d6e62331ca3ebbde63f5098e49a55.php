<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:37:"template/admin/Order/orderDetail.html";i:1581654298;s:24:"template/admin/base.html";i:1581654310;s:41:"template/admin/controlCommonVariable.html";i:1581654310;s:37:"template/admin/Order/orderAction.html";i:1581654298;s:30:"template/admin/pageCommon.html";i:1581654310;s:30:"template/admin/openDialog.html";i:1581654310;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<meta charset="UTF-8">
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
		<link rel="shortcut icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
		<link rel="stylesheet" type="text/css" href="__STATIC__/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/bootstrap/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/seller_center.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
		<style>
		.wrapper{width:1268px;}
		.help-block{color:red;}
		.ncsc-admin-info{cursor: pointer;}
		.ncsc-path a{text-decoration:none;}
		.is-upgrade{width: 7px;height: 7px;background: red;border-radius: 50%;position: absolute;z-index: 5;bottom: 9px;display: none;}
		.modal-header:hover{cursor: move;}
		</style>
		<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
		<script src="__STATIC__/bootstrap/js/bootstrap.js"></script>
		<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
		<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
		<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
		<script src="__STATIC__/js/common.js"></script>
		<script src="__STATIC__/js/seller.js"></script>
		<script src="__STATIC__/js/load_task.js"></script>
		<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
		<script src="ADMIN_JS/jquery-ui.min.js"></script>
		<script src="ADMIN_JS/ns_tool.js"></script>
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
</script>
		
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/order.css">
<style>
.silider-express{
	padding-left: 10px;
	background: #fff;
	font-size: 12px;
}
.logistics-tracking{
 	padding-left:5px;
}
.popover-content{
	width:700px;
}
.popover{
	max-width:900px;
}
</style>

	</head>
<body>
<header class="ncsc-head-layout">
	<div class="wrapper">
		<div class="ncsc-admin">
			<div class="ncsc-admin-headimg">
			<?php if($user_headimg != ''): ?>
				<img src="__ROOT__/<?php echo $user_headimg; ?>"/>
			<?php else: ?>
				<img src="__STATIC__/images/default_user_portrait.gif"/>
			<?php endif; ?>
			</div>
			<span class="user-name ncsc-admin-info" data-toggle="dropdown"><?php echo $user_name; ?></span>
			<a class="ncsc-admin-a ncsc-admin-info" data-toggle="dropdown"><i class="ncsc-admin-i ncsc-admin-down"></i></a>
			<a class="ncsc-admin-a h40"><i class="ncsc-admin-line"></i></a>
			<a class="ncsc-admin-a" href="SHOP_MAIN" target="_blank"><i class="ncsc-admin-i ncsc-admin-home"></i></a>
			<a class="ncsc-admin-a" href="ADMIN_MAIN/login/logout" title="安全退出管理中心"><i class="ncsc-admin-i ncsc-admin-off"></i></a>
			<div class="user-operation dropdown-menu">
				<a href="javascript:;" title="修改密码" onclick="editpassword()"><i class="fa fa-wrench"></i>修改密码</a>
				<a href="javascript:;" title="更新缓存" onclick="delcache()"><i class="fa fa-send"></i>更新缓存</a>
			</div>
		</div>
		<div class="center-logo">
			<a href="ADMIN_MAIN"><img src="ADMIN_IMG/shop_logo.png"/></a>
		</div>
		<div class="index-search-container" style="position: relative;">
			<div class="index-sitemap" onclick="nav_open()">
				<a href="javascript:void(0);">导航管理<i class="icon-angle-down"></i></a>
				<div class="sitemap-menu" style="display: none; z-index: 1000;">
					<div class="title-bar" onclick="nav_close()">
						<h2>
							<i class="icon-sitemap"></i>管理导航<em></em>
						</h2>
						<span id="closeSitemap" class="close">X</span>
					</div>
					<div id="quicklink_list" class="content">
						<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
						<dl>
							<dt><?php echo $nav['data']['module_name']; ?></dt>
							<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
							<dd>
								<a href="ADMIN_MAIN/<?php echo $nav_sub['url']; ?>"> <?php echo $nav_sub['module_name']; ?></a>
							</dd>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</dl>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			<div class="search-bar">
				<input type="hidden" name="act" value="search" /> 
				<input type="text" id="search_goods" name="keyword" placeholder="商品搜索" class="search-input-text" />
				<input type="submit" class="search-input-btn pngFix" onclick="search()" value="" />
			</div>
		</div>
		<nav class="ncsc-nav">
			<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
			<dl class="current_nav" onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
				<dt>
					<a href="ADMIN_MAIN/<?php echo $per['url']; ?>"><?php echo $per['module_name']; ?></a>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</dt>
				<dd class="arrow"></dd>
			</dl>
			<?php else: ?>
			<dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
				<dt>
					<a href="ADMIN_MAIN/<?php echo $per['url']; ?>"><?php echo $per['module_name']; ?></a>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</dt>
			</dl>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</nav>
	</div>
</header>

<!-- 左边菜单的加载 -->
<div class="MAIN" style="min-height: 94vh;">
	
	<div class="LEFT">
		<div id="accordion2" class="accordion leftmenu">
			<div class="accordion-group">
				<div class="sidebarX">
					<?php if($frist_menu['module_picture'] != ''): ?>
					<img src="__UPLOAD__/<?php echo $frist_menu['module_picture']; ?>" />
					<?php else: ?>
					<img src="__STATIC__/images/admin_left_logo.png" />
					<?php endif; ?>
					<h2><?php echo $frist_menu['module_name']; ?></h2>
				</div>
				<div class="accordion-body collapse in" id="collapseOne">
					<ul class="nav nav-pills nav-stacked" id="left_menu-small">
						<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
						<li class="active"><h1></h1><a href="ADMIN_MAIN/<?php echo $leftitem['url']; ?>"><?php echo $leftitem['module_name']; ?></a></li>
						<?php else: ?>
						<li><a href="ADMIN_MAIN/<?php echo $leftitem['url']; ?>"><?php echo $leftitem['module_name']; ?></a></li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 右边主要内容的加载 -->
	<div class="RIGHT">
		<div class="ncsc-path">
			<a href="ADMIN_MAIN"><i class="icon-desktop"></i><?php echo $title_name; ?></a>
			<?php if($frist_menu['module_name'] != ''): ?>
			<i class="icon-angle-right"></i>
			<a href="ADMIN_MAIN/<?php echo $frist_menu['url']; ?>"><?php echo $frist_menu['module_name']; ?></a>
			<?php endif; if($secend_menu['module_name'] != ''): ?>
			<i class="icon-angle-right"></i>
				<!-- 需要加跳转链接用这个：ADMIN_MAIN/<?php echo $secend_menu['url']; ?> -->
				<a href="javascript:;"><?php echo $secend_menu['module_name']; ?></a>
			<?php endif; ?>
		</div>
		<!--顶部边框开始  -->
		<div class="tabmenu">
			<ul class="tab pngFix">
				<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
				<li class="active"><a href="ADMIN_MAIN/<?php echo $child_menu['url']; ?>"><?php echo $child_menu['menu_name']; ?></a></li>
				<?php else: ?>
				<li class="daohang_no"><a href="ADMIN_MAIN/<?php echo $child_menu['url']; ?>"><?php echo $child_menu['menu_name']; ?></a></li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="right_side_operation">
				<ul>
					
					<li><a class="nscs-table-handle_green" href="javascript:;" style="display: none;">右侧按钮测试</a></li>
					
				</ul>
			</div>
		</div>
		<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;"  />
		<div class="main">
			
<div class="mod-table">
<?php if($order['order_status'] < 5 && $order['order_status'] > 0): ?>
<div class="step-region">
	<ul class="ui-step ui-step-4">
		<li class="ui-step-done"><div class="ui-step-title">买家下单</div><div class="ui-step-number">1</div><div class="ui-step-meta">2016-08-17 10:40:49</div></li>
		<li class="<?php if($order["order_status"] > 0): ?>ui-step-done<?php endif; ?>"><div class="ui-step-title">买家付款</div><div class="ui-step-number">2</div><div class="ui-step-meta">2016-08-17 10:41:02</div></li>
		<li class="<?php if($order["order_status"] > 1): ?>ui-step-done<?php endif; ?>"><div class="ui-step-title">商家发货</div><div class="ui-step-number">3</div><div class="ui-step-meta"></div></li>
		<li class="<?php if($order["order_status"] == 4): ?>ui-step-done<?php endif; ?>"><div class="ui-step-title">交易完成</div><div class="ui-step-number">4</div><div class="ui-step-meta"></div></li>
	</ul>
</div>
<?php endif; ?>
<div class="step-region clearfix">
	<div class="info-region">
		<div class="info-div">订单信息<span class="secured-title">担保交易</span></div>
		<table class="info-table">
		<tbody>
			<tr><th>订单编号：</th><td><?php echo $order['order_no']; ?></td></tr>
			<tr style="display: table-row;"><th>订单类型：</th><td>普通订单</td></tr>
			<tr><th>付款方式：</th><td><?php echo $order['payment_type_name']; ?></td></tr>
			<tr><th>买家：</th><td><span><?php echo $order['user_name']; ?></span></td></tr>
		</tbody>
		</table>
		<div class="dashed-line"></div>
		<table class="info-table">
			<tbody>
					<tr><th>配送方式：</th><td><?php echo $order['shipping_type_name']; ?></td></tr>
				<?php switch($order['shipping_type']): case "1": ?>
					<!-- 物流 -->
					<tr>
						<th>收货信息：</th>
						<td>
							<p><?php echo $order['receiver_name']; ?>，<?php echo $order['receiver_mobile']; ?>，<?php echo $order['address']; ?>&nbsp;<?php echo $order['receiver_address']; ?></p>
						</td>
					</tr>
					<?php break; case "2": ?>
					<!-- 自提 -->
					<tr>
						<th>自提地址：</th>
						<td>
							<p><?php echo $order['order_pickup']['province_name']; ?>&nbsp;<?php echo $order['order_pickup']['city_name']; ?>&nbsp;<?php echo $order['order_pickup']['dictrict_name']; ?>&nbsp;<?php echo $order['order_pickup']['address']; ?></p>
						</td>
					</tr>
					<?php break; endswitch; if(!empty($order['buyer_invoice_info'])): ?>
				<tr>
					<th>发票抬头：</th>
					<td>
						<?php if(!empty($order['buyer_invoice_info'][0])): ?>
						<?php echo $order['buyer_invoice_info'][0]; endif; ?>
					</td>
				</tr>
				<tr>
					<th>发票内容：</th>
					<td>
						<?php if(!empty($order['buyer_invoice_info'][1])): ?>
						<?php echo $order['buyer_invoice_info'][1]; endif; ?>
					</td>
				</tr>
				<?php endif; ?>
				<tr>
					<th>买家留言：</th>
					<?php if($order['buyer_message'] !=''): ?>
					<td><?php echo $order['buyer_message']; ?></td>
					<?php else: ?>
					<td>此订单没有留言</td>
					<?php endif; ?>
				</tr>
				<?php if($order['seller_memo'] != ''): ?>
				<tr>
					<th>卖家备注：</th>
					<td><?php echo $order['seller_memo']; ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
	<div class="state-region">
		<div style="padding: 0px 0px 30px 40px;">
			<div class="state-title"><span class="icon info">!</span>订单状态：<?php echo $order['status_name']; ?></div>
			<div class="state-action">
			<?php if(is_array($order['operation']) || $order['operation'] instanceof \think\Collection || $order['operation'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['operation'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<button class="zent-btn zent-btn-primary test-send-goods" onclick="operation('<?php echo $v['no']; ?>',<?php echo $order['order_id']; ?>)"><?php echo $v['name']; ?></button>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="state-remind-region">
			<div class="dashed-line"></div>
			<div class="state-remind"><div class="tixing"><?php echo $title_name; ?>提醒：</div>
				<ul><li>如果无法发货，请及时与买家联系并说明情况后进行退款；</li>
				<li>买家申请退款后，须征得买家同意后再发货，否则买家有权拒收货物；</li>
				<li>买家付款后超过7天仍未发货，将有权申请客服介入发起退款维权；</li></ul>
			</div>
		</div>
	</div>
</div>
<table class="ui-table ui-table-simple goods-table order-detail-goods-table">
	<thead>
		<tr>
			<th style="width:8%;">商品图</th>
			<th class="cell-10" style="width:40%;">商品</th>
			<th style="width:10%;">价格(元)</th>
			<th style="width:10%;">数量</th>
			<th style="width:10%;">调整金额(元)</th>
			<th class="cell-13" style="width:10%;">小计(元)</th>
			<th style="width:15%;">状态</th>

		</tr>
	</thead>
	<tbody>
	<!-- 待发货商品 -->
	<?php if($order['order_goods_no_delive']): if(is_array($order['order_goods_no_delive']) || $order['order_goods_no_delive'] instanceof \think\Collection || $order['order_goods_no_delive'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_goods_no_delive'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="test-item">
				<td class="td-goods-image" rowspan="1">
					<div class="ui-centered-image" style="width: 48px; height: 48px;">
						<img src="__ROOT__/<?php echo $vo['picture_info']['pic_cover_micro']; ?>" style="max-width: 48px; max-height: 48px;">
					</div>
				</td>
				<td  class="cell-10" style="width:200px;">
					<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $vo['goods_id']; ?>" target="_blank"><?php echo $vo['goods_name']; ?></a>
					<p class="c-gray"><?php echo $vo['sku_name']; ?></p>
				</td>
				<td><?php echo $vo['price']; ?></td>
				<td><?php echo $vo['num']; ?></td>
				<td><?php echo $vo['adjust_money']; ?></td>
				<td><p><?php echo $vo['goods_money']; ?></p></td>
				<td>
					<p><?php echo $vo['shipping_status_name']; ?></p>
					<?php if($vo['refund_status'] != 0): ?>
						<p><a href="ADMIN_MAIN/order/orderrefunddetail?itemid=<?php echo $vo['order_goods_id']; ?>"><?php echo $vo['status_name']; ?></a></p>
					<?php endif; ?>
				</td>
			</tr>
			<tr><td colspan="9"></td></tr>
		<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	<!-- 已发货 -->
	<!--  -->
	<?php if($order['goods_packet_list']): if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_packet_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<tr style="background-color:#f2f2f2;color:#999;font-weight:bold;">
		 
		  <td colspan="7"><a href="javascript:;" style="color:rgba(34, 34, 34, 0.71);font-size:14px;"><?php echo $v['packet_name']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
		   <?php if($v['is_express'] == 1): ?>
		 	 <?php echo $v['express_name']; ?>&nbsp;&nbsp;运单号:<?php echo $v['express_code']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" data-html="true" class="logistics-tracking" data-container="body" data_express="<?php echo $v['express_name']; ?>" data-placement="top" data-trigger="manual" goods_id="<?php echo $v['express_id']; ?>" data-show="1">物流跟踪</a>
		  <?php endif; ?>
		  </td>
		
		</tr>
		<?php if(is_array($v['order_goods_list']) || $v['order_goods_list'] instanceof \think\Collection || $v['order_goods_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['order_goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr class="test-item">
			<td class="td-goods-image" rowspan="1">
				<div class="ui-centered-image" style="width: 48px; height: 48px;">
					<img src="__ROOT__/<?php echo $vo['picture_info']['pic_cover_micro']; ?>" style="max-width: 48px; max-height: 48px;">
				</div>
			</td>
			<td  class="cell-10" style="width:200px;">
				<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $vo['goods_id']; ?>" target="_blank"><?php echo $vo['goods_name']; ?></a>
				<p class="c-gray"><?php echo $vo['sku_name']; ?></p>
			</td>
			<td><?php echo $vo['price']; ?></td>
			<td><?php echo $vo['num']; ?></td>
			<td><?php echo $vo['adjust_money']; ?></td>
			<td><p><?php echo $vo['goods_money']; ?></p></td>
			<td>
				<p>
					<a href="ADMIN_MAIN/order/orderrefunddetail?itemid=<?php echo $vo['order_goods_id']; ?>" style="color:#666;"><?php echo $vo['shipping_status_name']; ?></a>
				</p>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endif; ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="9" class="text-right">
				<span>商品总金额：￥<?php echo $order['goods_money']; ?>，</span>
				
				<?php if($order['user_platform_money']>0): ?>
				<span>余额支付：￥<?php echo $order['user_platform_money']; ?>，</span>
				<?php endif; if($order['coupon_money']>0): ?>
				<span>优惠券：￥<?php echo $order['coupon_money']; ?>，</span>
				<?php endif; if($order['tax_money']>0): ?>
				<span>发票税额：￥<?php echo $order['tax_money']; ?>，</span>
				<?php endif; if($order['promotion_money']>0): ?>
				<span>满减优惠：￥<?php echo $order['promotion_money']; ?>，</span>
				<?php endif; ?>
				
				<span> 实际需支付：<b class="real-pay c-red">￥<?php echo $order['pay_money']; ?></b></span>
				<span>（含运费 ￥<?php echo $order['shipping_money']; ?>）</span>
			</td>
		</tr>
	</tfoot>
</table>

<table class="ui-table ui-table-simple goods-table order-detail-goods-table" style="border-top:none;">
	<thead>
		<tr>
			<th>订单日志</th>
		</tr>
	</thead>
	<tbody>
	<?php if(is_array($order['order_action']) || $order['order_action'] instanceof \think\Collection || $order['order_action'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_action'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
		<tr class="test-item">
			<td class="td-goods-image" colspan="9">
			 操作备注：&nbsp;&nbsp; <?php echo $v1['user_name']; ?>&nbsp;&nbsp;&nbsp;于&nbsp;&nbsp;&nbsp;<?php echo $v1['action_time']; ?>&nbsp;&nbsp;&nbsp;【<?php echo $v1['action']; ?>】
			</td>
		</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
</div>
<script type="text/javascript">
$(function(){
	//查询物流
	$(".logistics-tracking").mouseover(function(){
		$(".logistics-tracking").removeAttr("data-show");
		$(this).attr("data-show",1);
	});
	
	
	var html = '';
	$(".logistics-tracking").hover(function(){
		
		var curr = $(this);
		var order_goods_id = curr.attr('goods_id');
		var express_name = curr.attr('data_express');
		$.ajax({
			type : "post",
			url : "ADMIN_MAIN/order/getexpressinfo",
			data : {"order_goods_id":order_goods_id},
			beforeSend : function(){
				html = '<div class="silider-express">';
				html += '<div class="mask-layer-loading" style="text-align:center;">';
				html += '<img src="ADMIN_IMG/mask_load.gif"/>';
				html += '<div style="text-align:center;margin-top:10px;">努力加载中...</div>';
				html += '</div>';
				html += '</div>';
				$(".logistics-tracking").popover({content : html});
				curr.popover("show");
			},
			success : function(data) {
				html = '<div class="silider-express">';
				html += '<div class="express_names">快递公司:'+express_name+'</div>';
				html += '<div>';
				html += '<div>物流跟踪：</div>';
				if (data['Success'] == true || data['Success'] == "true") {
					for (var i = 0; i < data["Traces"].length; i++){
							html += '<p style="width:76%;float:left;">'+ data["Traces"][i]["AcceptStation"]+'</p>';
							html += '<p style="width:24%;float:right;">'+ data["Traces"][i]["AcceptTime"]+'</p>';
					}
				} else {
					html += '<p style="width:76%;float:left;">'+ data["Reason"]+'</p>';
				}
				html += '</div>';
		 		html += '</div>';
		 		curr.popover("destroy");
				curr.popover({content : html});
				curr.popover("show");
			}
		});
	},function(){
		$(this).popover("hide");
	});
	
})
</script>
<style>
.modal-body{max-height:none;}
.editprice-input{width:100px;}
.pick_title{float: left;line-height: 32px; width: 140px;text-align:right;}
.pick_title .required{color:red;margin-right:10px;}
textarea{width: 350px;}  
#pickup_name,#pickup_mobile{width: 350px;}  
</style>
<!-- 模态框（Modal） -->
<div id="edit-price" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 650px;display: none;overflow: overlay;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 10px;">×</button>
		<h3 id="H1">修改价格</h3>
	</div>
	<div class="modal-body">
		<table class="table table-striped table-main table-order-header">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody>
				<tr>
					<th>商品信息</th>
					<th>商品清单</th>
					<th>
						<div class="editprice-tiptxt">涨价或减价<i class="icon-tip"></i>
							<p class="text-tip">-表示减价<i class="icon-down-pic"></i></p>
						</div>
					</th>
					<th>邮费</th>
				</tr>
			</tbody>
		</table>
		<table class="table table-bordered table-order-list">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody id="OrderCommodity"></tbody>
		</table>
		<ul class="edit-price-amountpay">
			<li>
				<span class="amountpay-label">商品总价：</span>
				<span class="amountpay-price" id="goodsmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">商品优惠：</span>
				<span class="amountpay-price" id="discountmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">运费：</span>
				<span class="amountpay-price" id="modifiedFreight"></span>元
			</li>
			<li>
				<div>
					实收款： <span class="amountpay-price reality-price" id="changeTotal"></span>元
					<input type="hidden" id="hiedchangeTotal" />
				</div>
			</li>
		</ul>
	</div>
	<div class="modal-footer">
		<button class="btn btn-info" onclick="updPrice()" id="butSubmit" data-dismiss="modal" aria-hidden="true" style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<div class="modal fade" id="Delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">商品发货</h4>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<div>待发货<span id="no_shipping_num"></span>，已选<span id="checkedbox">0</span></div>
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead>
						<tr>
							<th><label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1" onclick="deliveryCheckAll(this)"></label></th>
							<th>商品</th>
							<th>数量</th>
							<th>物流 | 单号</th>
							<th>状态</th>
						</tr>
					</thead>
					<colgroup>
						<col style="width: 5%;">
						<col style="width: 40%;">
						<col style="width: 10%;">
						<col style="width: 30%;">
						<col style="width: 15%;">
					<colgroup>
					<tbody></tbody>
				</table>
				<div>
					<div style="margin-bottom:5px;">发货方式：</div>
					<label class="checkbox-inline" style="float:left;margin-right:30px;"><input type="radio" name="shipping_type" id="shipping_type0"  value="0"> 无需物流</label>
					<label class="checkbox-inline" style="float:left;"><input type="radio" name=shipping_type id="shipping_type1" value="1" checked="checked"> 需要物流</label>
						
				</div>
				<div style="clear:both;"></div>
				<div class="form-group" id="express_input">
					<select class="form-control input-lg" id="divlogistics_express_company" style="margin-bottom:5px;margin-right:15px;float:left;"></select>
					<div class="col-lg-2"><input type="text" id="divlogistics_express_no" class="form-control" placeholder="请填写快递单号" style="height:19px;"></div>
				</div>
				<div id="receiver_info"></div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="delivery_order_id" value=""/>
				<button type="button" class="btn btn-info" onclick="orderDeliverySubmit()" style="display:inline-block;">提交更改</button>
				<button type="button" class="btn" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<!-- 自提模态 -->
<div class="modal fade" id="pickup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none; margin-left:-365px; width: 700px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">商品提货</h4>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead></thead>
					<colgroup><colgroup>
					<tbody></tbody>
				</table>
				
				<div class="form-group">
				    <div class="pick_title"><span class="required">*</span>提货人：</div>
					<div class="col-lg-4"><input type="text" id="pickup_name" class="form-control" placeholder="请填写提货人姓名"></div>
				</div>
				<div class="form-group">
				    <div class="pick_title"><span class="required">*</span>提货人手机号：</div>
					<div class="col-lg-4"><input type="text" id="pickup_mobile" class="form-control" placeholder="请填写提货人手机号"></div>
				</div>
				<div class="form-group">
				    <div class="pick_title">备注：</div>
					<div class="col-lg-2"><textarea id="pickup_desc"></textarea></div>
				</div>
			
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="pickup_order_id" value=""/>
				<button type="button" class="btn btn-info" onclick="orderPickupSubmit(pickup_order_id)" style="display:inline-block;">确认提货</button>
				<button type="button" class="btn" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<script>
$("#shipping_type1").focus(function(){
	$("#express_input").show();
});

$("#shipping_type0").focus(function(){
	$("#express_input").hide();
});
/*****订单相关操作函数开始*****/
function operation(operation_type, order_id){
	if(operation_type == 'pay'){
		orderOffLinePay(order_id);//线下支付
	}else if(operation_type == 'complete'){
		orderComplete(order_id);//交易完成
	}else if(operation_type == 'delivery'){
		orderDelivery(order_id);//发货
	}else if(operation_type == 'close'){
		orderClose(order_id);//交易关闭
	}else if(operation_type == 'adjust_price'){
		modifyPrice(order_id);//修改价格
	}else if(operation_type == 'pickup'){
		pickuporder(order_id);//提货
	}else if(operation_type == 'seller_memo'){
		orderSellerMemo(order_id);//备注
	}else if(operation_type == 'logistics'){
		//查看物流
		location.href = ADMINMAIN+'/order/orderdetail?order_id='+order_id;
	}
}

function orderDelivery(order_id){
	$("#Delivery").modal('show');
	$("#divlogistics_express_company option").remove();
	$("#Delivery .modal-body table tbody tr").remove();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/orderdeliverydata",
		data : {'order_id':order_id},
		success : function(data) {
			$("#delivery_order_id").val(order_id);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_info").html(receiver_info);
			var co_html = '';
			co_html += '<option value="0">请选择物流公司</option>';
			for(var i=0;i<data['express_company_list'].length;i++){
				if(data['express_company_list'][i]['is_enabled'] == '1'){
					co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'">'+data["express_company_list"][i]["company_name"]+'</option>';
				}
			} 
			$("#divlogistics_express_company").append(co_html);
			$("#divlogistics_express_company").val(data['order_info']["shipping_company_id"]);
			
			var go_html = '';
			var no_shipping_num = 0;
			for(var i=0;i<data['order_goods_list'].length;i++){
				if(data['order_goods_list'][i]['shipping_status'] == 0){
					no_shipping_num++;
				}
				go_html += '<tr>';
				if(data['order_goods_list'][i]['shipping_status'] > 0){
					go_html += '<td><label class="checkbox-inline"><input type="checkbox" value="'+data['order_goods_list'][i]['shipping_status']+'" disabled="true"></label></td>';
				}else{
					go_html += '<td><label class="checkbox-inline"><input type="checkbox" id="'+data['order_goods_list'][i]['order_goods_id']+'" value="'+data['order_goods_list'][i]['shipping_status']+'" onclick="deliveryCheck(this)"></label></td>';
				}
				go_html += '<td><a>'+data['order_goods_list'][i]['goods_name']+'</a></td>';
				go_html += '<td>'+data['order_goods_list'][i]['num']+'</td>';
				if(data['order_goods_list'][i]['shipping_status'] == 0 || data['order_goods_list'][i]['express_info']['express_company'] == undefined){
					go_html += '<td></td>';
				}else{
					go_html += '<td>'+data['order_goods_list'][i]['express_info']['express_company']+' | '+data['order_goods_list'][i]['express_info']['express_no']+'</td>';
				}
				go_html += '<td>'+data['order_goods_list'][i]['shipping_status_name']+'</td>';
				go_html += '</tr>';
			}
			$("#no_shipping_num").html(no_shipping_num);
			$("#Delivery .modal-body table tbody").append(go_html);
		}
	});
}

function orderDeliverySubmit(){
	var order_id = $("#delivery_order_id").val();
	var order_goods_id_array = '';
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]").each(function(i){
		if(0==i){
			order_goods_id_array = $(this).attr('id');
		}else{
			order_goods_id_array += (","+$(this).attr('id'));
		}
	});
	if(order_goods_id_array == ''){
		showMessage('error', '必须选择商品');
		return false;		
	}
	var express_name = $("#divlogistics_express_company").find("option:selected").text();
	var shipping_type = $('#Delivery input[name="shipping_type"]:checked ').val();
	var express_company_id = $("#divlogistics_express_company").val();
	var express_no = $("#divlogistics_express_no").val();
	if(shipping_type == 1){
		if(express_company_id == "0"){
			showMessage('error', '必须选择物流公司');
			return false;		
		}
		if(express_no == ""){
			showMessage('error', '必须填写快递单号');
			return false;	
		}
	}
	
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/orderdelivery",
		data : {'order_id':order_id,"order_goods_id_array":order_goods_id_array,"express_name":express_name,"shipping_type":shipping_type,"express_company_id":express_company_id,"express_no":express_no},
		success : function(data) {
			$("#Delivery").modal('hide');
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}

function deliveryCheckAll(event){
	var checked = event.checked;
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0]").prop("checked",checked);
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

function deliveryCheck(event){
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

//全选
function CheckAll(event){
	var checked = event.checked;
	$(".style0list tbody input[type = 'checkbox']").prop("checked",checked);
}

function orderOffLinePay(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
					$.ajax({
						type : "post",
						url : "ADMIN_MAIN/order/orderofflinepay",
						data : {'order_id':order_id},
						success : function(data) {
							if (data["code"] > 0) {
								showMessage('success', data["message"],window.location.reload());
							}else{
								showMessage('error', data["message"]);
							}
						}
					});
					$(this).dialog('close');
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定线下支付吗？",
	});			
					
					
}
function orderComplete(order_id){
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/order/ordercomplete",
		data : {'order_id':order_id},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', data["message"],window.location.reload());
			}else{
				showMessage('error', data["message"]);
			}
		}
	});
}

function orderClose(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "ADMIN_MAIN/order/orderclose",
				data : {"order_id" : order_id},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定关闭订单吗？",
	});			
}

//修改价格
function modifyPrice(order_id,orderFreight){
	if(orderFreight == null){
		orderFreight = 0;
	}
	orderInfo ={
    	express_fee: 0,
		total: 0,
		goodsArray: new Array()
	};
	$("#butSubmit").val(order_id);
		var str = "";
		var Total = 0.00;
		var Count = 0;
		$.ajax({
			type: "post",
			url: "ADMIN_MAIN/order/getordergoods",
			data: { "order_id": order_id },
			dataType: "json",
			async: false,
			success: function (jsonData) {
				var Subtotal = 0.0;
				var order_info = jsonData[1];
				jsonData = jsonData[0];
				for (var i = 0 ; i < jsonData.length; i++) {
					Price = (jsonData[i].price * 1);
					Count = (jsonData[i].num * 1);
					Subtotal = parseFloat(Price) * parseInt(Count);//单商品总价
					Total += parseFloat(Subtotal * 1);
					str += "<tr>";
					str += "  <td>";
					str += "<div class='product-img'><img src='__ROOT__/"+jsonData[i]['picture_info']['pic_cover_micro'] + "'></div>";
					str += "<div class='product-infor'>";
					//原总金额
					var item_now_money = parseFloat(jsonData[i].price*jsonData[i].num)+parseFloat(jsonData[i].adjust_money);
					str += "<input type='hidden' id='total"+jsonData[i].order_goods_id+"' value='"+item_now_money*(item_now_money/parseFloat(jsonData[i].goods_money))+"'>";
					str += "<a class='name' href='APP_MAIN?id="+jsonData[i].goods_id+"' target='_blank'>" + jsonData[i].goods_name + "</a>";
					str += "<p class='specification'><span>规格:" + jsonData[i].sku_name + "</span></p>";
					str += "<div class='div-flag-style'>";
					str += "</div>";
					str += "</div>";
					str += "</td>";
					str += "<td>";
					str += "<div class='cell'><span name='Commoditymark' count='" + jsonData[i].num + "' id='" + jsonData[i].goods_id + "' dir='" + jsonData[i].price + "' value='" + jsonData[i].price + "'>￥" + jsonData[i].price + "</span></div>";
					str += "<div class='cell' id='Count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>" + jsonData[i].num + "件</div>";
					/*if(jsonData[i].adjust_money != 0){
						str += "<div class='cell' style='color:gray;'>(" + jsonData[i].adjust_money + "元)</div>";
					} */
					str += "</td>";
					str += "<td>";
					str += "<div class='editprice-discount'><input  type='hidden' id='productPrice" + jsonData[i].order_goods_id + "' value='" + jsonData[i].price + "'><input type='hidden' id='count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>";
					str += "<div class='editprice-minus'><input name='caculatePrice'  onchange=\"caculatePrice()\" id='" + jsonData[i].order_goods_id + "' value='"+jsonData[i].adjust_money+"'  class='editprice-input price' type='number'  placeholder='0'  /></div>";
					str += "</td>"; 
					if (i == 0) {
						str += "<td rowspan='"+jsonData.length+"'>";
						str += "<input onchange=\"caculatePrice()\" id='Freightnumber' type='number' placeholder='0'  class='editprice-input' value='"+order_info.shipping_money+"' ";
						if(orderFreight != 0 || orderFreight != ''){
							str += orderFreight;
						}
						str += "' min='0'/>";
						str += "<p class='muted'>直接输入邮费金额</p>";
						str += "<input type='hidden' id='hidorderNumber' value='" + jsonData[i].order_id + "'>";
						str += "<input type='hidden' id='freighthidden' value='" + orderFreight + "'>";
						str += "<input type='hidden' id='goodsmoneyhidden' value=''>";
						str += "<input type='hidden' id='favourable' value='0'>";
						str += "</td>";
						str += "</tr>";
					}
					$("#OrderCommodity").html(str);
					$("#changeTotal").html(Total.toFixed(2));
					$("#goodsmoney").html(order_info.goods_money);
					$("#goodsmoneyhidden").val(Total);
					var discount_money =order_info.point_money*1.00+order_info.coupon_money*1.00+order_info.user_money*1.00+order_info.promotion_money*1.00;
					$("#discountmoney").html(discount_money);
					$("#changeTotal").html(order_info.pay_money); 
					$("#hiedchangeTotal").html(Total);
				}
				$("#modifiedFreight").html(order_info.shipping_money);
				var freight = $("#Freightnumber").val() == 0 ? 0 : $("#Freightnumber").val(); 
				$('#edit-price').modal('show');
			}
		});
	}
	
	//重新计算
	function caculatePrice(){
		//设置邮费
		if($("#Freightnumber").val() < 0 || $("#Freightnumber").val() == ''){
			showMessage("error", "邮费错误！");
			return false;
		}
		var Freightnumber = $("#Freightnumber").val();//邮费input
		$("#modifiedFreight").html(Freightnumber);
		//调整金额
		var price = 0.00;
		$("input[name = 'caculatePrice']").each(function(i){
			if(0 == i){
				price = parseFloat($(this).val());
			}else{
				price = parseFloat($(this).val()) + parseFloat(price);
			}
		});
		var goods_money  = $("#goodsmoneyhidden").val();
		new_goods_money = (parseFloat(price)+parseFloat(goods_money)).toFixed(2);
		if(new_goods_money <0){
			$(".price").val(-goods_money);
			caculatePrice();
		}
		$("#goodsmoney").html(new_goods_money);
		// 获取邮费
		var modifiedFreight = $("#modifiedFreight").html(); 
		// 获取优惠金额
		var discountmoney = $("#discountmoney").html();
		//计算实收款
		new_hiedchangeTotal = (parseFloat(new_goods_money)+parseFloat(modifiedFreight)-parseFloat(discountmoney)).toFixed(2);
		$("#changeTotal").html(new_hiedchangeTotal);
	}
	
	/**
	* 保存修改的价格
	* $order_id, $goods_money, $shipping_fee
	*/
	function updPrice(){
		var order_id = $("#hidorderNumber").val();
		var order_goods_id_adjust_array = '';
		var shipping_fee = $("#Freightnumber").val();
		$("input[name = 'caculatePrice']").each(function(i){
			if(0 == i){
				order_goods_id_adjust_array = $(this).attr('id')+','+$(this).val();
			}else{
				order_goods_id_adjust_array += ';'+$(this).attr('id')+','+$(this).val();
			}
		});
		$.ajax({
			type: "post",
			url: "ADMIN_MAIN/order/orderadjustmoney",
			data: { "order_id": order_id, "order_goods_id_adjust_array":order_goods_id_adjust_array, "shipping_fee":shipping_fee},
			dataType: "json",
			async: false,
			success: function (data) {
			if (data["code"] > 0) {
					showMessage('success', data["message"],window.location.reload());
				}else{
					showMessage('error', data["message"]);
				}
			}
		});
	}
	
	//自提订单 进行提货
	function pickuporder(order_id)
	{
		$("#pickup").modal('show');
		$("#pickup .modal-body table tbody tr").remove();
		$("#pickup_order_id").val(order_id);
	}
	
	
	//查看订单备注
	function orderSellerMemo(order_id){
		$.ajax({
			type : 'post',
			url : "ADMIN_MAIN/order/getordersellermemo",
			data : { "order_id" : order_id },
			success : function(res){
				$("#order_id").val(order_id);
				$("#memo").val(res);
				$("#Memobox").modal("show");
			}
		});
	}
	
	// 提货进行提交数据
	function orderPickupSubmit(){
		var pickup_order_id = $("#pickup_order_id").val();
		var pickup_name = $("#pickup_name").val();
		var pickup_mobile = $("#pickup_mobile").val();
		var pickup_desc = $("#pickup_desc").val();
		if(pickup_name == ''){
			showMessage('error', '请填写提货人姓名');
			return false;
		}
		if(pickup_mobile == ''){
			showMessage('error', '请填写提货人手机号');
			return false;
		}
		if(pickup_mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
			showMessage('error', '请填写正确格式的手机号!');
			return false;
		}
		$.ajax({
			type: "post",
			url: "ADMIN_MAIN/order/pickuporder",
			data: { "order_id": pickup_order_id, "buyer_name":pickup_name, "buyer_phone":pickup_mobile, "remark":pickup_desc},
			dataType: "json",
			async: false,
			success: function (data) {
			if (data["code"] > 0) {
					showMessage('success', '提货成功',window.location.reload());
				}else{
					showMessage('error', '提货失败');
				}
			}
		});
	}
/*********订单相关操作函数结束*********/
</script>

		</div>
		<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination pagination-right">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" />条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
$(function() {
	try{
		$("#turn-ul").show();//显示分页
		LoadingInfo(1);//通过此方法调用分页类
	}catch(e){
		$("#turn-ul").hide();
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}

</script>
		
		<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
		<div class="common-tip-message js-common-tip">
			<div class="inner"></div>
		</div>
	</div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>原密码</label>
				<div class="controls">
					<input type="password" id="pwd0" placeholder="请输入原密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>新密码</label>
				<div class="controls">
					<input type="password" id="pwd1" placeholder="请输入新密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls">
					<input type="password" id="pwd2" placeholder="请输入确认密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn btn-info" onclick="submitPassword()"  style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!--修改密码弹框结束  -->
<div class="footer">
	<div id="faq" style="background: #eee; padding-top: 10px;">
		<div class="faq-wrapper"></div>
	</div>
	<div id="footer" class="wrapper">
		<p>
			<?php if(is_array($ShopNavigationData) || $ShopNavigationData instanceof \think\Collection || $ShopNavigationData instanceof \think\Paginator): if( count($ShopNavigationData)==0 ) : echo "" ;else: foreach($ShopNavigationData as $key=>$vo): if($key>0): ?> |<?php endif; if($vo['nav_type'] == 0): if($vo['is_blank'] == 1): ?>
						<a target="_blank" href="SHOP_MAIN<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php else: ?>
						<a href="SHOP_MAIN<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php endif; else: if($vo['is_blank'] == 1): ?>
						<a target="_blank" href="<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php else: ?>
						<a href="<?php echo $vo['nav_url']; ?>"  title="<?php echo $vo['nav_title']; ?>"><?php echo $vo['nav_title']; ?></a>
					<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
		</p>
		<!-- <p style="color:#333333; display: none;" id="bottom_copyright">Copyright © 2015-2025 NIUSHOP开源商城&nbsp;版权所有 保留一切权利<br><a href="http://www.niushop.com.cn" target="_blank" style="text-decoration: none;color:#333333;">山西牛酷信息科技有限公司&nbsp;</a>
			<span>提供技术支持&nbsp;400-886-7993</span>
		</p> -->
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '我的商城';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
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
	if(type == 'error'){
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

function showConfirm(content){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script>
$(function(){
	
	$('.index-sitemap > a').bind("click", function() {
		$(".sitemap-menu-arrow").slideDown("slow");
		$(".sitemap-menu").slideDown("slow");
	});
	$('.add-quickmenu > a').bind("click", function() {
		$(".sitemap-menu-arrow").slideDown("slow");
		$(".sitemap-menu").slideDown("slow");
	});
	$('#closeSitemap').bind("click", function() {
		$(".sitemap-menu-arrow").slideUp("fast");
		$(".sitemap-menu").slideUp("fast");
	});
});
function add_nav_class(doc) {
	$(doc).addClass("hover");
}

function remove_nav_class(doc) {
	$(doc).removeClass("hover");
}

// 显示导航管理
function nav_open() {
	var one = new Array();
	var two = new Array();
	var three = new Array();
	$(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
		if (c < 5) {
			one.push($(e).height());
		} else if (c > 4 && c < 10) {
			two.push($(e).height());
		} else if (c > 9 && c < 15) {
			three.push($(e).height());
		}
	})
	$(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
		if (c < 5) {
			var one_max_height = Math.max.apply(Math, one);
			$(e).height(one_max_height);
		} else if (c > 4 && c < 10) {
			var two_max_height = Math.max.apply(Math, two);
			$(e).height(two_max_height);
		} else if (c > 9 && c < 15) {
			var three_max_height = Math.max.apply(Math, three);
			$(e).height(three_max_height);
		}
	})
	$(".sitemap-menu-arrow").show();
	$(".sitemap-menu").show();
}
// 隐藏导航管理
function nav_close() {
	$(".sitemap-menu-arrow").hide();
	$(".sitemap-menu").hide();
}
// 系统注销菜单的控制
var closetimer = 0;
function exitSystemOver() {
	cancelColseMenu();
	$("#exit_System").css("display", "block");
};

function exitSystemOut() {
	closetimer = window.setTimeout(mclose, 600);
};

function cancelColseMenu() {
	window.clearTimeout(closetimer);
	closetimer = null;
};

function mclose() {
	$("#exit_System").css("display", "none");
}
</script>

</body>
</html>