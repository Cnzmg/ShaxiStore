<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:36:"template/admin/System/albumList.html";i:1579055942;s:24:"template/admin/base.html";i:1579055938;s:41:"template/admin/controlCommonVariable.html";i:1579055938;s:41:"template/admin/System/uploadAlbumImg.html";i:1579055941;s:30:"template/admin/pageCommon.html";i:1579055938;s:30:"template/admin/openDialog.html";i:1579055938;}*/ ?>
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
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
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
		
<style type="text/css">
.dislog-style {
	width: 80%;
	margin: 40px auto;
}

.modal.fade {
	top: 50%;
}

.dislog-style ul {
	width: 100%;
}

.dislog-style ul li span {
	display: inline-block;
	width: 60px;
	text-align: center;
	height: 40px;
	line-height: 31px;
}

.dislog-style ul li input {
	width: 200px;
}
#albumList{
	border-top:1px solid #E3E3E3;
}
#albumList>li:hover {
	background-color: rgb(230, 230, 230);
}

#albumList>li:hover .buttons {
	display: block;
}
.input-file{
	position: absolute;
	top: -10px !important;
	right: 9px !important;
	height: 26px !important;
	width: 94px !important;
	filter: alpha(opacity : 0) !important; 
	opacity: 0 !important;
	line-height:auto;
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
					
	<li><a class="ncsc-btn ncsc-btn-green" style="right: 100px; position: static;" data-toggle="modal" data-target="#addalbum"><i class="fa fa-file-photo-o"></i>创建相册</a></li>
	<li>
		<a id="open_uploader" style="right: 100px; position: static;" class="ncsc-btn ncsc-btn-acidblue" >
		<i class="fa fa-cloud-upload" ></i>上传图片
		</a>
		<input  style="top:-12px !important; width:89px !important;right:10px !important;height: 30px !important;cursor:pointer;font-size:0;" type="file" id="fileupload" hidefocus="true" size="1" class="input-file" name="file_upload" multiple="multiple"/>	
	</li>	


				</ul>
			</div>
		</div>
		<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;"  />
		<div class="main">
			
<input type="hidden" id="album_id"value="<?php foreach($album_list as $vo): if($vo['is_default'] == '1'): ?><?php echo $vo['album_id']; endif; endforeach; ?>"/>
<table class="mytable">
	<tr>		
		<th width="10%">
			<input type="text" id='search_text' placeholder="请输入相册名称" />
			<input type="button" onclick="searchData()" value="搜索" />
		</th>
	</tr>
</table>
<div id="pictureIndex" class="ncsc-picture-folder">
	<div class="ncsc-album">
		<ul id="albumList"></ul>
	</div>
</div>
<!-- 相册创建  -->
<div class="modal fade hide" id="addalbum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">相册创建</h4>
			</div>
			<div class="modal-body">
				<div class="dislog-style">
					<ul>
						<li>
							<span>相册名称</span>
							<input type="text" value="" id="album_name" />
							<span style="width: inherit;color: red;display:none;">请输入相册名称</span>
						</li>
						<li><span>排序</span> <input type="text" value="" id="sort" onkeyup='this.value=this.value.replace(/\D/gi,"")' /></li>
						<li style="display: none;"><span>相册封面</span>
							<div class="ncsc-upload-btn" style="margin-top: -1px;">
								<a href="javascript:void(0);">
									<span><input hidefocus="true" size="1" id="uploadPhoto"class="input-file" name="file_upload" id="imgClassSave" nc_type="change_store_label" type="file" onchange="imgUpload(this);"></span>
									<p><i></i>图片上传</p>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onclick="addAlbumClass();">创建</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<!-- 相册编辑  -->
<div class="modal fade hide" id="editalbum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">相册编辑</h4>
			</div>
			<div class="modal-body">
				<div class="dislog-style">
					<input type="hidden" id="editAlbum_id" value="" />
					<ul>
						<li><span>相册名称</span><input type="text" value="" id="edit_album_name" /><span style="width: inherit;color: red;display:none;">请输入相册名称</span></li>
						<li><span>排序</span><input type="text" value="" id="edit_sort" onkeyup='this.value=this.value.replace(/\D/gi,"")' /></li>				
					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onclick="updateAlbumClass();">保存</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script> 
<script type="text/javascript" src="__STATIC__/js/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="__STATIC__/js/jquery.fileupload.js" charset="utf-8"></script>
<style>
.RIGHT{
	min-height:750px;
}
</style>
<div class="upload-con" id="uploader" style="display:none;overflow:auto;height:350px;width:185px;">    
      <div nctype="file_msg" ></div>
      <div class="upload-pmgressbar" nctype="file_loading"></div>
      <div class="upload-txt"><span>支持Jpg、Png格式，大小不超过1024KB的图片上传；浏览文件时可以按住ctrl或shift键多选。</span> </div>   
</div>
<script type="text/javascript">
$(function() {
    //鼠标触及区域li改变class
  	var album_id = $("#album_id").val();
  	var dataAlbum = {
  			"album_id" : album_id,
  			"type" : "1,2,3,4",
  			'file_path' : UPLOADGOODS
  		};
    // ajax 上传图片
    var upload_num = 0; // 上传图片成功数量
    $('#fileupload').fileupload({
        url: 'ADMIN_MAIN/upload/photoalbumupload',
        dataType: 'json',
        formData:dataAlbum,
        add: function (e,data) {
        	//显示上传图片框
        	if($("#uploader").is(":hidden")){
    			$("#uploader").show();
    		}
        	$.each(data.files, function (index, file) {
                $('<div nctype="' + file.name + '"><p>'+ file.name +'</p><p class="loading"></p></div>').appendTo('div[nctype="file_loading"]');
            });
        	data.submit();    	
        },
        done: function (e,data) {
        	var param = data.result;
            //alert(JSON.stringify(data));
            $this = $('div[nctype="' + param.origin_file_name + '"]');
            $this.fadeOut(3000, function(){
                $(this).remove();
                if ($('div[nctype="file_loading"]').html() == '') {
                	$("#uploader").hide();
                	LoadingInfo(1);
                    //setTimeout("window.location.reload()", 1000);
                }
            });
            if(param.state > 0){
                upload_num++;
                $('div[nctype="file_msg"]').html('<i class="icon-ok-sign">'+'</i>'+'成功上传'+upload_num+'张图片');

            } else {
                $this.find('.loading').html(param.message).removeClass('loading');
            }           
        }
    });

});
</script>
<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>

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
		<p style="color:#333333; display: none;" id="bottom_copyright">Copyright © 2015-2025 NIUSHOP开源商城&nbsp;版权所有 保留一切权利<br><a href="http://www.niushop.com.cn" target="_blank" style="text-decoration: none;color:#333333;">山西牛酷信息科技有限公司&nbsp;</a>
			<span>提供技术支持&nbsp;400-886-7993</span>
		</p>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= 'Niushop开源商城';
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

<script type="text/javascript">
//查询列表
function LoadingInfo(page_index) {
	var search_text = $("#search_text").val();
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/system/albumlist",
		data : {
			"page_index" : page_index, "page_size" : $("#showNumber").val(), "search_text" : search_text
		},
		success : function(data) {
			var html = '';
// 			document.write(JSON.stringify(data['data'][1]));
			if (data["data"].length > 0) {
				for (var i = 0; i < data["data"].length; i++) {
					if(i==0||i%5==0){
						html += '<li  style="opacity: 1;border-width:0 1px 1px 1px;"><dl><dt><div class="covers">';
					}else{
						html += '<li  style="opacity: 1;border-width:0 1px 1px 0;"><dl><dt><div class="covers">';
					}
					html += '<a href="ADMIN_MAIN/system/albumpicturelist?album_id='
							+ data["data"][i]["album_id"]
							+ '&&album_name='
							+ data["data"][i]["album_name"]
							+ '">';
					if($.trim(data["data"][i]["pic_album_cover"]) == ''){
						html += '<img src="ADMIN_IMG/album/album_cover_default.png">';//<i class="icon-camera-retro"></i>
					}else{
						html += '<i class=""><img src="__ROOT__/'+data["data"][i]["pic_album_cover"]+'"/></i>';
					}
					html += '</a></div>';
					html += '<h3 class="title"><a href="ADMIN_MAIN/system/albumpicturelist?album_id='+ data["data"][i]["album_id"]+ '&&album_name='+ data["data"][i]["album_name"]+ '">'
							+ data["data"][i]["album_name"]
							+ '</a></h3></dt><dd class="date">共'+data["data"][i]["pic_count"]+'张</dd>';
					html += '<dd class="buttons"><span nc_type="dialog" dialog_title="编辑相册" dialog_id="album_1" dialog_width="480" uri="">';
					html += '<a href="JavaScript:void(0);" onclick="editBoxShow('
							+ data["data"][i]["album_id"]
							+ ');"><i class="icon-pencil"></i>编辑</a></span>';
					if (data["data"][i]["is_default"] != 1) {
						html += '<a href="javascript:void(0)" onclick="deleteAlbumClass('
								+ data["data"][i]["album_id"]
								+ ')"><i class="icon-remove-sign"></i>删除</a>';
					}
					html += '</dd></dl></li>';
				}
			} else {
				html += '暂无符合条件的数据记录';
			}
			$("#albumList").html(html);
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}
function searchData(){
	LoadingInfo(1);
}

/**
 * 创建相册
 */
function addAlbumClass() {
	var album_name = $("#album_name").val();
	var sort = $("#sort").val();
	var album_cover = $("#addLogo").val();
	if(album_name == ""){
		$("#album_name").focus();
		$("#album_name").next().show();
		return;
	}
	if(sort == ""){
		sort = $("#albumList li").length+1;//如果没有输入排序，则取长度+1（最后一个）
	}
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/system/addalbumclass",
		data : {
			"album_name" : album_name,
			"sort" : sort,
			"album_cover" : album_cover
		},
		success : function(data) {
			if (data['code'] > 0) {
				LoadingInfo(1);
				showMessage('success', data["message"],"ADMIN_MAIN/system/albumlist");
				$("#addalbum").modal('hide');
			}else{
				showMessage('error', data["message"]);
			}
		}
	})
}

/**
 * 弹出编辑页面
 */
function editBoxShow(album_id) {
	$('#editalbum').modal(show);
	$("#editAlbum_id").val(album_id);
	/* 	var detailArray = getAlbumClassDetail(album_id); */
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/system/getalbumclassdetail",
		async : false,
		data : {
			"album_id" : album_id
		},
		success : function(data) {
			if (data) {
				$("#edit_album_name").val(data.album_name);
				$("#edit_sort").val(data.sort);
			}
		}
	})
/* 		$("#edit_album_name").val(detailArray.album_name);
		$("#edit_sort").val(detailArray.sort); */
}

/**
 * 删除相册
 */
function deleteAlbumClass(aclass_id_array) {
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$.ajax({
					type : "post",
					url : "ADMIN_MAIN/system/deletealbumclass",
					data : { "aclass_id_array" : aclass_id_array },
					success : function(data) {
						if(data['code'] > 0){
							LoadingInfo(getCurrentIndex(aclass_id_array.toString(),'#albumList'));
							showMessage('success', data['message']);
						}else{
							showMessage("error",data['message']);
						}
					}
				})
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			}
		},
		contentText:"删除相册?\n注意：相册内的图片将转移到默认相册",
	});
}	
	
/**
 * 修改相册
 */
function updateAlbumClass() {
	var album_name = $("#edit_album_name").val();
	var sort = $("#edit_sort").val();
	var album_id = Number($("#editAlbum_id").val());
	var album_cover = "";
	if(album_name == ""){
		$("#edit_album_name").focus();
		$("#edit_album_name").next().show();
		return;
	}
	$.ajax({
		type : "post",
		url : "ADMIN_MAIN/system/updatealbumclass",
		data : {
			"album_name" : album_name,
			"sort" : sort,
			"album_id" : album_id,
			"album_cover" : album_cover
		},
		success : function(data) {
			if (data['code'] > 0) {
				LoadingInfo(getCurrentIndex(album_id,'#albumList'));
				showMessage('success', data['message']);
				$("#editalbum").modal('hide');
			}else{
				showMessage("error",data['message']);
			}
		}
	})
}
</script>
<div id="append_parent"></div>

</body>
</html>