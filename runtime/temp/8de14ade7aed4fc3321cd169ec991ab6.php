<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:46:"template/admin/System/goodsRecommendClass.html";i:1581654306;s:24:"template/admin/base.html";i:1581654310;s:41:"template/admin/controlCommonVariable.html";i:1581654310;s:30:"template/admin/pageCommon.html";i:1581654310;s:30:"template/admin/openDialog.html";i:1581654310;}*/ ?>
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
		
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<style  type="text/css">
.goodsRecommend{
	width:660px;
	display:inline-block;
	
}
.goodsRecommend .panel-heading{
	height:40px;
	line-height:40px;
	margin-top:15px;
	background:#F9F9F9;
	padding:0 15px;
	color:#00C0FF;
}
.goodsRecommend .handle{
	display:inline-block;
	background:#FB6B5B;
	padding:0 8px;
	font-size:12px;
	color:#fff;
	margin:7px;
	line-height:25px;
	float:right;
}
.td{
	width:20%;
	text-align:center;
}
.set-style{
	width:100%;
}
.set-style dl{
	width:100%;
	font-size: 0;
	/* line-height: 20px; */
	clear: both;
	padding: 0;
	margin: 0;
	border-bottom: dotted 1px #E6E6E6;
	overflow: hidden;
}
.set-style dl dt{
	font-size: 12px;
	line-height: 32px;
	vertical-align: top;
	letter-spacing: normal;
	word-spacing: normal;
	text-align: right;
	display: inline-block;
	width: 19%;
	padding: 10px 1% 10px 0;
	margin: 0;
	font-weight:normal;
}
.set-style dl dd{
	
	font-size: 12px;
	line-height: 32px;
	vertical-align: top;
	letter-spacing: normal;
	word-spacing: normal;
	display: inline-block;
	width: 78%;
	padding: 10px 0 10px 0;
}
.set-style dl dd input[type="text"]{
	font: 12px/20px Arial;
	color: #777;
	background-color: #FFF;
	vertical-align: top;
	display: inline-block;
	height:24px;
	line-height:24px;
	padding: 4px;
	border: 1px solid #CCC;
	outline: 0 none;
	width: 400px;
	margin:0;
}
.set-style dl dd textarea{
    font: 12px/20px Arial;
    color: #777;
    background-color: #FFF;
    vertical-align: top;
    display: inline-block;
    height: 60px;
    padding: 4px;
    border: solid 1px #CCC;
    outline: 0 none;
	width: 400px;
	margin:0;
}
.hint{
    font-size: 12px;
    line-height: 16px;
    color: #BBB;
    margin-top: 10px;
}
.set-style dl dd p img{
	border: medium none;
	vertical-align: middle;
}
.info{
	width:405px;
	color: #c09853;
    background-color: #fcf8e3;
    border-color: #faebcc;
	padding: 8px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-goods-info{
	padding:5px;
	width:80px;
	height:110px;
	background:#D9EDF7;
	border:1px solid #BCE8F1;
	float:left;
	margin-right:2px;
}
.alert-goods-info img{
	display:block;
	margin:20px auto 0 auto;
}
.goods-name{
	display:block;
	white-space:nowrap;
	overflow:hidden; 
	text-overflow:ellipsis;
	text-align:center;
	margin-top:3px;
}
.search-goods-info{
	padding:5px;
	width:80px;
	height:110px;
	border:1px dashed #ddd;
	float:left;
	margin:5px 5px 0 0;
	cursor:pointer;
}
.tip-box{
	width: 975px;
	line-height: 150px;
	text-align: center;
}

.table tr .td img{
	width:100px;
	display:inline-block;
}
.goods-logo-class{
	width:100%;
}
.goods-logo-class ul{
	overflow:hidden;
	margin: 0px;
}
.goods-logo-class ul li{
	float:left;	
	width:20%;
	cursor:pointer;
}
.imglogo{
	width:90%;
	margin:0 auto;
}
.mlr15{
	margin:0;
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
					
<li><a class="nscs-table-handle_green" href="javascript:void(0);" onclick="addBlock()"><i class="fa fa-plus-circle"></i>&nbsp;添加促销版块</a></li> 

				</ul>
			</div>
		</div>
		<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;"  />
		<div class="main">
			
  <div class="mb10 mlr15">
       <div class="tiphelp-info"><strong>提示：</strong>设置促销版块，设置方法如下：<br>
                点击“添加促销版块”按钮，在出现的下方列表中点击“编辑”按钮，按照要求输入相应内容，点击“保存”按钮，如果想要取消，点击“关闭”按钮即可，添加成功后会在前台首页轮播图下方显示所添加的版块内容。同时也可以进行删除操作。
       </div>
 </div>
<div class="goodsRecommend">

	<?php if(!(empty($goods_recommend_class) || (($goods_recommend_class instanceof \think\Collection || $goods_recommend_class instanceof \think\Paginator ) && $goods_recommend_class->isEmpty()))): ?>
	<form class="" id="block_list">		
		<?php if(is_array($goods_recommend_class) || $goods_recommend_class instanceof \think\Collection || $goods_recommend_class instanceof \think\Paginator): if( count($goods_recommend_class)==0 ) : echo "" ;else: foreach($goods_recommend_class as $key=>$v): ?>		
             <header class="panel-heading">
             	<?php echo $v['class_name']; ?> 
             	<a href="javascript:void(0);" onclick="delGoodsRecommendClass(<?php echo $v['class_id']; ?>,this)" class="handle"><i class="fa fa-trash-o"></i>&nbsp; 删除 </a>   	
               	<a href="javascript:void(0);" onclick="updateGoodsRecommendClass(<?php echo $v['class_id']; ?>)" class="handle" style="background:#01B044;"><i class="fa fa-cog"></i>&nbsp; 编辑 </a>       	    	
             </header>
             <div class="goods-logo-class">
             	<ul>
             		<?php if(!(empty($v['goods_list']) || (($v['goods_list'] instanceof \think\Collection || $v['goods_list'] instanceof \think\Paginator ) && $v['goods_list']->isEmpty()))): if(is_array($v['goods_list']) || $v['goods_list'] instanceof \think\Collection || $v['goods_list'] instanceof \think\Paginator): if( count($v['goods_list'])==0 ) : echo "" ;else: foreach($v['goods_list'] as $key=>$vg): ?>
             			<li >
             				<img class="imglogo" src="__UPLOAD__/<?php echo $vg['picture_info']['pic_cover_small']; ?>" alt="<?php echo $vg['goods_info']['goods_name']; ?>" title="<?php echo $vg['goods_info']['goods_name']; ?>"  style="border:1px dashed #e9e9e9;text-align:center;">
             			</li>
             		<?php endforeach; endif; else: echo "" ;endif; else: ?>
                    	<li>暂未选择商品</li>
                   	<?php endif; ?>
             	</ul>
             </div>          
          <?php endforeach; endif; else: echo "" ;endif; ?>
	</form>
	<?php else: ?>
  	<div class="tip-box">
  		当前系统还未设置促销板块，<a href="javascript:void(0);" onclick="addBlock()">马上设置</a>
  	</div>
   <?php endif; ?>
</div>
<div class="goodsRecommend" id="add-goodsRecommend">
</div>
<div class="modal fade hide" id="data" style="width:800px;">
    <div class="modal-dialog">
        <div class="modal-content" style="width:800px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">促销商品推荐</h4>
            </div>
            <div class="modal-body" style="height:700px;overflow:auto;">
            	<div class="set-style">
            		<dl>
						<dt><span class="color-red">*</span>模块名称</dt>
						<dd>
							<input type="hidden" class="form-control" id="class_id" value="">
							<input type="text" class="form-control" id="class_name" value="" placeholder="请输入模块名称">
							<span class="error">请输入模块名称</span>
						</dd>
					</dl>
					<dl>
						<dt>排序</dt>
						<dd>
							<input type="text" class="form-control" id="sort" value="" onkeyup="this.value=this.value.replace(/\D/g,'')" placeholder="排序">
						</dd>
					</dl>
					<dl>
						<dt>已选商品</dt>
						<dd>
						<div class="info" >
		                  	<button type="button" class="close" data-dismiss="alert" style="margin-top:4px;">×</button>
		                  	<p>单击查询出的商品选中，双击已选择的可以删除，最多5个，保存后生效。</p>
		                </div>
		                </dd>
		                <dt></dt>
		                <dd>
		                	<div id="goods_list">
		                		
		                	</div>
		                </dd>
					</dl>
					<dl>
						<dt>选择要促销的商品:</dt>
						<dd></dd>
						<dt>选择分类</dt>	
						<dd>
<!-- 							<select id="category_id" name="account" class="form-control m-b"> -->
<!-- 								<option value="0">--请选择--</option> -->
<!-- 								<?php if(is_array($category_list_1) || $category_list_1 instanceof \think\Collection || $category_list_1 instanceof \think\Paginator): if( count($category_list_1)==0 ) : echo "" ;else: foreach($category_list_1 as $key=>$vc1): ?> -->
<!-- 			           				<option value="<?php echo $vc1['category_id']; ?>"><?php echo $vc1['category_name']; ?></option> -->
<!-- 			           			<?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- 							</select>	 -->
							
							<select name="account" class="form-control m-b category_first" id="category_first_id" onchange="changeCategory(this, 1)" style="width:145px;height:34px;">
								<option value="0">商品分类一级</option>
								<?php if(is_array($category_list_1) || $category_list_1 instanceof \think\Collection || $category_list_1 instanceof \think\Paginator): $i = 0; $__LIST__ = $category_list_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc1): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $vc1['category_id']; ?>"><?php echo $vc1['category_name']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
							<select name="account" class="form-control m-b hide category_second" id="category_second_id" onchange="changeCategory(this, 2)" style="width:145px;height:34px;">
								<option value="0">商品分类二级</option>
							</select>
							<select name="account" class="form-control m-b hide category_three" id="category_three_id" onchange="changeCategory(this, 3)" style="width:145px;height:34px;">
								<option value="0">商品分类三级</option>
							</select>			
						</dd>
						<dt>商品名称</dt>	
						<dd>
							<input type="text" class="form-control" id="search_info" value="" placeholder="请输入商品名称">				
							<button type="button" class="btn btn-info"  onclick="search_goods()" style="display:inline-block;">搜索</button>
						</dd>
					</dl>
					<dl>
						<dt></dt>
						<dd id="search_goods_list">
						
						</dd>
					</dl>
            	</div>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-info" onclick="save()" style="display:inline-block;">保存</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="display:inline-block;">关闭</button>                
            </div>
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


<script>
//改变商品分类触发事件
function changeCategory(event, level){
	var category_id = $(event).val();
	if(category_id == 0){
		$(event).parent().find(".category_second option:gt(0)").remove();
		$(event).parent().find(".category_three option:gt(0)").remove();
		return false;
	}
	if(level == 1){
		$(event).parent().find(".category_second").show(300);
		$(event).parent().find(".category_second option:gt(0)").remove();
		$(event).parent().find(".category_three option:gt(0)").remove();
		loadCategoryData(category_id, $(event).parent().find(".category_second"));
	}else if(level == 2){
		$(event).parent().find(".category_three").show(300);
		$(event).parent().find(".category_three option:gt(0)").remove();
		loadCategoryData(category_id, $(event).parent().find(".category_three"));
	}
}
// 加载数据
function loadCategoryData(category_id, obj){
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/system/getgoodscategorylistajax",
		data : {
			'category_id' : category_id,
		},
		async : true,
		success : function(data) {
			var html = '';
			if(data.length > 0){
				for(var i = 0; i < data.length; i++){
					html += '<option value="'+data[i]['category_id']+'">'+data[i]['category_name']+'</option>';
				}
			}
			$(obj).append(html);
		}
	});
}
/*
 * 添加促销版块
 */
function addBlock(){
	$(".tip-box").hide();
	$("#class_id").val(null);
	var num = $("#add-goodsRecommend").prev().find(".panel-heading").length;
	if(num >4){
		showMessage('error','模块最多只能添加5个！');
	}else{
		var html = '';
		html += '<div class="goodsRecommend" id="recommendAdd">';
		html += '<header class="panel-heading">促销商品推荐 <a href="javascript:void(0);" onclick="delGoodsRecommendClass(0,this)" class="handle"><i class="fa fa-trash-o"></i>&nbsp; 删除 </a>';
		html += '<a href="javascript:void(0);" data-toggle="data" onclick="updateGoodsRecommendClass(0)" class="handle" style="background:#01B044;"><i class="fa fa-cog"></i>&nbsp; 编辑 </a></header>';
		html += '<table class="table table-striped m-b-none text-sm"><tbody align="center">';
		html += '<tr>';
		html += '</tr></table></div>';
		$("#add-goodsRecommend").html(html);
	}
	
	
}
/*
 * 编辑促销版块
 */
function updateGoodsRecommendClass(class_id){
	$("#data").modal("show");
	if(class_id > 0){
		$.ajax({
			type : 'post',
			url : 'ADMIN_MAIN/system/getgoodsrecommendclass',
			data : {'class_id' : class_id},
			async : true,
			success : function(data){
				$("#class_name").val(data['class_name']);
				$("#sort").val(data['sort']);
				$("#class_id").val(class_id);	
				goods_list_html = "";
	    		for(var i=0;i<data['goods_list'].length;i++){
					goods_list_html += '<div class="alert-goods-info" onDblClick="remove_selected_goods(this)">';
					goods_list_html += '<button type="button" class="close" data-dismiss="alert" style="color:#555;">×</button>';
					goods_list_html += '<input type="checkbox" name="selected_goods" value="'+data['goods_list'][i]['goods_id']+'" style="display:none;">';
					goods_list_html += '<img class="imglogo" src="__UPLOAD__/'+data['goods_list'][i]['picture_info']['pic_cover_small']+'" width="60" height="60">';
					goods_list_html += '<label  class="goods-name" title="'+data['goods_list'][i]['goods_info']['goods_name']+'">'+data['goods_list'][i]['goods_info']['goods_name']+'</label>';
					goods_list_html += '</div>';
					$('#goods_list').html(goods_list_html);
				}
			}
		})
	}else{
		$("#class_name").val('');
		$("#sort").val('');
		$("#class_id").val('');	
		$('#goods_list .alert-goods-info').remove();
	}
}
/*
 * 搜索商品
 */
function search_goods(){
	var goods_name = $("#search_info").val();
	if($("#category_three_id").val() > 0){
		var category_id = $("#category_three_id").val();
		var category_level = 3;
	}else if($("#category_second_id").val() > 0){
		var category_id = $("#category_second_id").val();
		var category_level = 2;
	}else{
		var category_id = $("#category_first_id").val();
		var category_level = 1;
	}
	$.ajax({
		type : 'post',
		url : 'ADMIN_MAIN/system/searchgoods',
		data : {'goods_name':goods_name,'category_id':category_id, 'category_level':category_level},
		async : true,
		success : function(data){
			var html = '';
			if(data['data'].length > 0){
				for(var i=0;i<data['data'].length;i++){
					html += '<div class="search-goods-info" >';
					html += '<input type="checkbox" name="select_goods" value="'+data['data'][i]['goods_id']+'" style="display:none;">';
					html += '<img class="imglogo" src="__UPLOAD__/'+data['data'][i]['pic_cover_micro']+'"  onclick="addSelectGoods(this)" width="70" height="70">';
					html += '<label class="goods-name" title="'+data['data'][i]['goods_name']+'"></label>';
					html += '</div>';
				}
			}else{
				html += '<div class="col-sm-12"><p>暂无商品</p></div>';
			}
			$("#search_goods_list").html(html);
		}
	})
}
/*
 * 向板块中添加商品
 */
function addSelectGoods(event){
	var goods_id_obj = $("#goods_list").find('input[name="selected_goods"]');
	var goods_id_str = '';
	for(var i=0; i<goods_id_obj.length; i++){ 
		goods_id_str += ','+goods_id_obj[i].value; //如果选中，将value添加到变量s中 
	} 
	var goods_id = $(event).parent('.search-goods-info').children('input[name="select_goods"]').val();
	var goods_url = $(event).attr("src");
	var goods_name = $(event).parent('.search-goods-info').children('label').html();
	//判断添加商品的个数
	var goods_list_obj = $("#goods_list").find('input[name="selected_goods"]');
	
	if(goods_id_str.indexOf(goods_id) > 0){
		return false;
	}else{
		var html = '';
		html += '<div class="alert-goods-info" onDblClick="remove_selected_goods(this)">';
		html += '<button type="button" class="close" data-dismiss="alert" style="color:#555;">×</button>';
		html += '<input type="checkbox" name="selected_goods" value="'+goods_id+'" style="display:none;">';
		html += '<img class="imglogo" src="'+goods_url+'" width="60" height="60">';
		html += '<label  class="goods-name" title="'+goods_name+'">'+goods_name+'</label>';
		html += '</div>';
		$("#goods_list").append(html);
	}
}
// $("#class_name").keyup(function(){
// 	var class_name = $("#class_name").val();
// 	if(class_name == ''){
// 		$("#class_name").focus().next("span").show();
// 		return false;
// 	}else{
// 		$("#class_name").next("span").hide();
// 	}
// })
/*
 * 保存促销版块
 */
 function save(){
	var class_id = $("#class_id").val();
	var class_name = $("#class_name").val();
	//alert(class_name.length);
	var sort = $("#sort").val();
	var goods_id_obj = $("#goods_list").find('input[name="selected_goods"]');
	var goods_id_str = '';
	for(var i=0; i<goods_id_obj.length; i++){ 
		goods_id_str += ','+goods_id_obj[i].value; //如果选中，将value添加到变量s中 
	} 
	goods_id_str = goods_id_str.substr(1);
	if(class_name == ''){
		showMessage('error','模块名称不能为空！');
		$("#class_name").focus();
		return false;
	}
	if(class_name.length>4){
		showMessage('error','促销模块名称不能超过4个字！');
		$("#class_name").focus();
		return false;
	}
	$.ajax({
		type: 'post',
		url: 'ADMIN_MAIN/system/updategoodsrecommendclass',
		data: {'class_id':class_id,'class_name':class_name,'goods_id_str':goods_id_str,'sort':sort},
		async: true,
		success:function(data){
			$("#data").modal("hide");
			if(data['code'] > 0){
				showMessage('success',data['message'],'ADMIN_MAIN/system/goodsrecommendclass');
			}else{
				showMessage('error',data['message']);
			}
		}
	});
}
 /**
  * 删除 促销版块
  */
 function delGoodsRecommendClass(class_id,e){
 	if(class_id > 0){
 		$( "#dialog" ).dialog({
 	        buttons: {
 	            "确定": function() {
 	                $(this).dialog('close');
 	                $.ajax({
 	    				type:"post",
 	    				url:"ADMIN_MAIN/system/delgoodsrecommendclass",
 	    				data:{'class_id':class_id},
 	    				async:true,
 	    				success:function (data) {
 	    					if(data['code'] > 0){
 	    						showMessage('success', data['message'], 'ADMIN_MAIN/system/goodsrecommendclass');
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
 	}else{
 		$(e).parents('#recommendAdd').remove()
 	}
 }
//双击 移除已选择的商品
function remove_selected_goods(event){
	$(event).remove();
}
</script>

</body>
</html>