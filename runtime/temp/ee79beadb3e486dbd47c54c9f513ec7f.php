<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:39:"template/admin/Account/shopAccount.html";i:1581654279;s:24:"template/admin/base.html";i:1581654310;s:41:"template/admin/controlCommonVariable.html";i:1581654310;s:30:"template/admin/pageCommon.html";i:1581654310;s:30:"template/admin/openDialog.html";i:1581654310;}*/ ?>
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
		
<style  type="text/css">
.count-top-title{}
.count-top{border:1px solid #e7e7e7; }
.count-top-title{padding:20px;overflow:hidden;}
.count-top-img{float:left;width:100px; }
.count-shop-logo{margin-top:20px;}
.count-button{cursor:pointer;background-color:rgb(77, 184, 232);border-radius:2px;border:1px solid rgb(77, 184, 232);color:#FFF;font-size:13px;padding:3px 15px;}
.count-top-text{float:left;font-size:13px;}
.count-top-text p{height:20px;line-height:20px;}
.count-bottom-title{border-top:1px solid #e7e7e7;}
.count-bottom-title-top{font-size:15px;}
.count-float-left{display:block;float:left;font-size:24px;color:#f89406;height:30px;line-hegiht:30px;}
.count-float-right{display:block;float:right;color:#00e5f2;font-size:12px;line-height:25px;cursor:pointer;}
.count-bottom-title{padding:20px;}
.table-box{width:95%;margin:0 auto;}
.count-bottom-title table tr td{width:33%;padding-left:10px;padding-right:10px;}
.count-bottom-title table{width:100%;}
.count-bottom-title table tr td:nth-child(1){border-right:1px solid #e7e7e7;}
.count-bottom-title table tr td:nth-child(2){border-right:1px solid #e7e7e7;}
.float-box{overflow:hidden;}
.tab-nav{margin-top:20px;}
.tab-nav-ul{overflow:hidden;margin-left:0px; border-bottom: 1px solid #e7e7e7;width:100%;}
.tab-nav-ul li{float:left; padding:10px  20px;border:1px  solid #e7e7e7;}
.tab-nav-ul li:hover{background-color:#00C0FF;color:#FFF; border:1px solid #e7e7e7;}
.nav-active{background-color:#00C0FF;color:#FFF; border:1px solid #e7e7e7;}
.goods-name{
	max-width:30px;
	white-space: nowrap; 
 	overflow:hidden;  
	text-overflow:ellipsis;
}
.count-count-ul{overflow:hidden; padding:10px;width:100%;border:1px  solid #e7e7e7;}
.count-count-ul ul li{float:left;border-right:1px solid #e7e7e7; padding-left:10px;padding-right:10px;}
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
			
<div class = "count-box">
	<div class  =  'count-top'>
		<div class="count-top-title">
			<div class='count-top-img'>				
				<img src="__UPLOAD__/<?php echo $shop_logo; ?>" class="count-shop-logo"/>	
			</div>
			<div class="count-top-text">
				<p>店铺名称：<?php echo $shop_name; ?></p>
				<p>可用余额：<span style="color:#f89406;"><?php echo $shop_account_info["shop_balance"]; ?></span>元</p>
				<button class="count-button" onclick="window.location.href='ADMIN_MAIN/Account/applyShopAccountWithdraw'" >提现</button>			
			</div>
		</div>
		<div class="count-bottom-title">
			<div class="table-box">
			<table>
				<tr>
					<td>
						<p class="count-bottom-title-top">营业额</p>
						<div class="float-box">
							<div class="count-float-left" ><?php echo sprintf("%.2f",$shop_account_info["shop_profit"],2); ?></div>
							<div class="count-float-right"><!-- 抽成明细 --></div>
						</div>
					</td>
					<td >
						<p class="count-bottom-title-top">待结算</p>
						<div class="float-box">
							<div class="count-float-left" ><?php echo sprintf("%.2f", ($shop_account_info["shop_total_money"] - $shop_account_info["shop_proceeds"]));  ?></div>
							<div class="count-float-right"><!-- 结算明细 --></div>
						</div>
					</td>
					<td>
						<p class="count-bottom-title-top">已提现</p>
						<div class="float-box">
							<div class="count-float-left" ><?php echo $shop_account_info['shop_withdraw']; ?></div>
							<div class="count-float-right"><!-- 提现明细 --></div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		</div>
	 <table>
	 	<tr>
	 		<td>
	 		
	 		</td>
	 	</tr>
	 </table>
	</div>
</div>
<div >
	<div class="tab-nav">
		<ul class='tab-nav-ul'>
			<li onclick="LoadingInfo(1);">订单记录</li>
			<li onclick="getShopAccountWithdrawPage(1);">提现记录</li>
			<li onclick="getShopAccountRecordCount(1);">账户记录</li>
		</ul>
	</div>
	<div id="count_page">
		<!-- 订单类表 -->
		<div id="page_goods_order" >
			<table class="mytable" style="margin-top:20px;">
				<tr>
					<th>
						<!-- 方式：
						<select id="account_type">
				                    	<option value="0">请选择发生方式</option>
				                    	<option value="1">订单</option>
				                    	<option value="2">提现</option>
				        </select> -->
						<input type="text" id="startDate" class="input-sm form-control"placeholder="请选择开始日期" onclick="WdatePicker()" />
						<input type="text" id="endDate" placeholder="请选择结束日期" class="input-sm form-control"onclick="WdatePicker()" />
						<input type="button" onclick="LoadingInfo(1)" value="搜索" />
					</th>		
				</tr>
			</table>
			<div class="count-count-ul">
				<ul>
					<li>店铺营业额：<span id="shop_sale"></span></li>
					<li>店铺余额：<span id="shop_money"></span></li>
					<li>平台余额：<span id="platform_money"></span></li>
				</ul>
			</div>
			
			<div class="mod-table">
				<div class="mod-table-head">		
					<div class="style0list">
						<table>
							<colgroup>
						 		<col style="width: 10%;"> 
								<col style="width: 8%;">
								<col style="width: 10%;">
								<col style="width: 8%;">
								<col style="width: 8%;">
								<col style="width: 10%;">
								<col style="width: 8%;">
								<col style="width: 10%;">
								<col style="width: 10%;">
								<col style="width: 10%;">
								<col style="width: 8%;">
							</colgroup>
							<thead>
								<tr align="center">
				                      <th>订单编号 </th> 
				                      <th >实付金额</th>
				                      <th >平台获取金额</th>
				                      <th >产生时间</th>
				                      <th >是否结算</th>                     
				                 
								</tr>
							</thead>
							<!-- <colgroup>
						 		<col style="width: 20%;"> 
								<col style="width: 10%;">
								<col style="width: 15%;">
								<col style="width: 20%;">
								<col style="width: 8%;">
								
							</colgroup> -->
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- 提现列表 -->
		<div id="page_withdraw" class="hide">
			<table class="mytable" style="margin-top:20px;">
				<tr>
					<th>
						<!-- 方式：
						<select id="account_type">
				                    	<option value="0">请选择发生方式</option>
				                    	<option value="1">订单</option>
				                    	<option value="2">提现</option>
				        </select> -->
						<input type="text" id="startDate" class="input-sm form-control"placeholder="请选择开始日期" onclick="WdatePicker()" />
						<input type="text" id="endDate" placeholder="请选择结束日期" class="input-sm form-control"onclick="WdatePicker()" />
						<input type="button" onclick="getShopAccountWithdrawPage(1)" value="搜索" />
					</th>		
				</tr>
			</table>
			<div class="count-count-ul">
				<ul>
					<li>已提现(元)：<span id="shop_cash_withdraw"></span></li>
					<li>提现待审核(元)：<span id="shop_cash_isautit_withdraw"></span></li>					
				</ul>
			</div>
			<div class="mod-table">
				<div class="mod-table-head">
					<div class="con style0list">
						<table>
							<colgroup>

								<col style="width: 10%;">
								<col style="width: 10%;">
								<col style="width: 15%;">
								<col style="width: 9%;">
								<col style="width: 8%;">
								<col style="width: 6%;">
								<col style="width: 18%;">
								<col style="width: 18%;">
								<col style="width: 12%;">
							</colgroup>
							<thead>
								<tr>

									<th>提现流水号</th>
									<th>提现银行</th>
									<th>提现账户</th>
									<th>账户姓名</th>
									<th>手机</th>
									<th>金额</th>
									<th>提现日期</th>
									<th>到账日期</th>
									<th>状态</th>
								</tr>
							</thead>
							<colgroup>

								<col style="width: 10%;">
								<col style="width: 10%;">
								<col style="width: 15%;">
								<col style="width: 9%;">
								<col style="width: 8%;">
								<col style="width: 6%;">
								<col style="width: 18%;">
								<col style="width: 18%;">
								<col style="width: 12%;">
							</colgroup>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="page_shop_account" class="hide">
			<table class="mytable" style="margin-top:20px;">
				<tr>
					<th>
						<!-- 方式：
						<select id="account_type">
				                    	<option value="0">请选择发生方式</option>
				                    	<option value="1">订单</option>
				                    	<option value="2">提现</option>
				        </select> -->
						<input type="text" id="startDate" class="input-sm form-control"placeholder="请选择开始日期" onclick="WdatePicker()" />
						<input type="text" id="endDate" placeholder="请选择结束日期" class="input-sm form-control"onclick="WdatePicker()" />
						<input type="button" onclick="getShopAccountRecordCount(1)" value="搜索" />
					</th>		
				</tr>
			</table>
			<div class="count-count-ul">
				<ul>
					<li>已提现(元)：<span id="shop_cash"></span></li>
					<li>提现待审核(元)：<span id="shop_cash_isautit"></span></li>
					<li>营业额(元)：<span id="money"></span></li>
					<li>待结算营业额(元)：<span id="money_isuse"></span></li>
				</ul>
			</div>
			<div class="mod-table" >
				<div class="mod-table-head">
					<div class="con style0list">
						<table>
							<colgroup>
			
								<!-- <col style="width: 15%;"> -->
								<col style="width: 15%;">
								<col style="width: 15%;">
								<col style="width: 15%;">
								<col style="width: 20%;">
								<col style="width: 30%;">
							</colgroup>
							<thead>
								<tr>
									
									<!-- <th>店铺</th> -->
									<th>金额</th>
									<th>发生方式</th>
								
									<th>创建时间</th>
									<th>备注</th>						
								</tr>
							</thead>
							<colgroup>
								
								<!-- <col style="width: 15%;"> -->
								<col style="width: 20%;">
								<col style="width: 20%;">
								
								<col style="width: 20%;">
								<col style="width: 30%;">
							</colgroup>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
		<div>
		
		</div>
	</div>
	
</div>

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
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript">
function LoadingInfo(pageIndex) {
	$("#count_page>div").hide()
	$("#page_goods_order").show();
	$(".tab-nav-ul li").removeClass("nav-active");
	$(".tab-nav-ul li:eq(0)").addClass("nav-active");
	var start_date = $("#page_goods_order #startDate").val();
	var end_date = $("#page_goods_order #endDate").val();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/account/shopOrderAccountList",
		async : true,
		data : {
			"pageIndex" : pageIndex,
			"start_date":start_date,
			"end_date":end_date
		},
		success : function(data) {
			$("#shop_sale").text(data.count.shop_sale);
			$("#shop_money").text(data.count.shop_money);
			$("#platform_money").text(data.count.platform_money);
			$("#page_count").val(data.list.page_count);
			$("#pageNumber a").remove();
			var html = '';
			if (data.list["data"].length > 0) {
				for (var i = 0; i < data.list["data"].length; i++) {
					html += '<tr align="center">';
					html += '<td>' + data.list["data"][i]["order_no"] + '</td>';
					html += '<td>' + data.list["data"][i]["order_pay_money"] + '</td>';
					html += '<td>' + data.list["data"][i]["platform_money"] + '</td>';
					html += '<td>' + data.list["data"][i]["create_time"] + '</td>';
					if(data.list["data"][i]["is_issue"]){
						html += '<td><i class="fa fa-check text-success"></i></td>';
					}else{
						html += '<td><i class="fa  fa-times"></i></td>';
					}																												
					
					html += '</tr>';
				}
			} else {
				html += '<tr align="center"><th colspan="12">暂无符合条件的数据记录</th></tr>';
			}
			$("#page_goods_order .style0list tbody").html(html);
			var totalpage = $("#page_count").val();
			if (totalpage == 1) {
				changeClass("all");
			}
			var $html = pagenumShow(jumpNumber,totalpage,<?php echo $pageshow; ?>)
			$("#pageNumber").append($html);
			
		}
	});
}


function getShopAccountWithdrawPage(pageIndex){
	$("#count_page>div").hide()
	$("#page_withdraw").show();
	$(".tab-nav-ul li").removeClass("nav-active");
	$(".tab-nav-ul li:eq(1)").addClass("nav-active");
	var start_date = $("#page_withdraw #startDate").val();
	var end_date = $("#page_withdraw #endDate").val();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/account/shopAccountWithdrawList",
		async : true,
		data : {
			"pageIndex" : pageIndex,
			"start_date":start_date,
			"end_date":end_date
		},
		success : function(data) {	
			$("#shop_cash_withdraw").text(data.count.withdraw_cash);
			$("#shop_cash_isautit_withdraw").text(data.count.withdraw_isaudit);
			//alert(JSON.stringify(data));
			$("#page_count").val(data["list"]["page_count"]);
			$("#pageNumber a").remove();
			var html = '';
			if (data["list"]["data"].length > 0) {
				for (var i = 0; i < data["list"]["data"].length; i++) {
					var status = "";
					if(data["list"]["data"][i]["status"] == 1){
						status = "已通过";
						
					}else if(data["list"]["data"][i]["status"] == 1){
						status = "已拒绝";
					}else{
						status = "审核中";
						
					}
					var parent_realname ="";
					if(data["list"]["data"][i]["parent_realname"] != null){
						parent_realname = data["data"][i]["parent_realname"];
					}
					html += '<tr align="center">';
					html += '<td>' + data["list"]["data"][i]["withdraw_no"] + '</td>';
					html += '<td>' + data["list"]["data"][i]["bank_name"] + '</td>';
					html += '<td>' + data["list"]["data"][i]["account_number"] + '</td>';
					html += '<td>' + data["list"]["data"][i]["realname"] + '</td>';
					html += '<td>' + data["list"]["data"][i]["mobile"] + '</td>';
					html += '<td>' + data["list"]["data"][i]["cash"] + '</td>';
					html += '<td>' + data["list"]["data"][i]["ask_for_date"] + '</td>';
					if(data["list"]["data"][i]["payment_date"] == null){
						html += '<td> </td>';
					}else{
						html += '<td>' + data["list"]["data"][i]["payment_date"] + '</td>';
					}					
					html += '<td>' + status + '</td>';						
					html += '</tr>';
				}
			} else {
				html += '<tr align="center"><th colspan="11">暂无符合条件的数据记录</th></tr>';
			}
			
			$("#page_withdraw .style0list tbody").html(html);
			var totalpage = $("#page_count").val();
			if (totalpage == 1) {
				changeClass("all");
			}
			var $html = pagenumShow(jumpNumber,totalpage,<?php echo $pageshow; ?>)
			$("#pageNumber").append($html);
		}
	});
}
function getShopAccountRecordCount(pageIndex){
	$("#count_page>div").hide()
	$("#page_shop_account").show();
	$(".tab-nav-ul li").removeClass("nav-active");
	$(".tab-nav-ul li:eq(2)").addClass("nav-active");
	var start_date = $("#page_shop_account  #startDate").val();
	var end_date = $("#page_shop_account  #endDate").val();
	//var account_type = $("#account_type").val();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/Account/ShopAccountRecordCount",
		async : true,
		data : {
			"page_index" : pageIndex,
			"start_date":start_date,
			"end_date":end_date,
			//"account_type":account_type
		},
		success : function(data) {
			$("#shop_cash").text(data.count.withdraw_cash);
			$("#shop_cash_isautit").text(data.count.withdraw_isaudit);
			$("#money").text(data.count.shop_order_money);
			$("#money_isuse").text(data.count.shop_order_money_isuse); 
			$("#page_count").val(data["list"]["page_count"]);
			$("#pageNumber a").remove();
			var html = '';
			if (data["list"]["data"].length > 0) {
				for (var i = 0; i < data["list"]["data"].length; i++) {
					html += '<tr  align="center">';
		
					/* html += '<td>' + data["list"]["data"][i]["shop_name"] + '</td>'; */
					html += '<td>' + data["list"]["data"][i]["money"] + '</td>';
					if(data["list"]["data"][i]["account_type"] == 1){
						html += '<td>订单</td>';
					}else{
						html += '<td>提现</td>';
					}
			
					html += '<td>' + data["list"]["data"][i]["create_time"] + '</td>';															
					html += '<td>' + data["list"]["data"][i]["remark"] + '</td>';
					
					html += '</tr>';
				}
			} else {
				html += '<tr align="center"><th colspan="11">暂无符合条件的数据记录</th></tr>';
			}
			$("#page_shop_account .style0list tbody").html(html);
			var totalpage = $("#page_count").val();
			if (totalpage == 1) {
				changeClass("all");
			}
			var $html = pagenumShow(jumpNumber,totalpage,<?php echo $pageshow; ?>)
			$("#pageNumber").append($html);
		}
	});
}
</script>

</body>
</html>