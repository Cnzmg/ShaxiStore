<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:43:"template/admin/Express/expressTemplate.html";i:1581654290;s:24:"template/admin/base.html";i:1581654310;s:41:"template/admin/controlCommonVariable.html";i:1581654310;s:30:"template/admin/pageCommon.html";i:1581654310;s:30:"template/admin/openDialog.html";i:1581654310;}*/ ?>
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
		
 <script src="ADMIN_JS/easydrag.js" type="text/javascript"></script>
 <script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script>
<script src="ADMIN_JS/image_common.js" type="text/javascript"></script>
 
<style>
.movefield{
	width: 145px;
    height: 26px;
    line-height: 26px;
    margin: 5px 0 0 5px;
    padding: 0 0 0 5px;
    border: 1px solid #ff4200;
    cursor: move;
    background-color: #fef5e6;
    color: #000;
    font-size: 16px;
	
}
.edit_button{
	    display: inline-block;
}
.btn {
	padding:25px;
}
.btn p{
    font-size: 12px;
    line-height: 20px;
    background-color: #F5F5F5;
    color: #999;
    text-align: center;
    color: #666;
    width: 78px;
    height: 20px;
    padding: 4px 0;
    border: solid 1px;
    border-color: #DCDCDC #DCDCDC #B3B3B3 #DCDCDC;
    position: absolute;
    left: 12px;
    top: 9px;
    z-index: 1;
}
label {
    font-weight: normal;
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
			

<!--title begin-->
    <!--form begin-->
    <div class="mod-form t20" style="content: '';clear: both;display: inline-block;">
        <div class="con style0page">

            <ul class="list-ul l26" id="sysTemplate" style="display: block;">
                <li class="list-li" style="content: '';clear: both;display: inline-block;">

                    <div class="float-l w130" style="width: 100px;float: left;">
                        <span class="star" style="float:left;">*&nbsp;&nbsp;&nbsp;</span>
                        <label>快递公司:</label>
                    </div>
                    <div class="float-l" style="float:left;">
                        <label><?php echo $express_company_select['company_name']; ?></label>
                    </div>
                    <div class="float-l">
                        <span class="prompt"></span>
                    </div>
                </li>
            </ul>
            <ul class="list-ul l26">
                <li class="list-li _selfTemplate" style="display: none;">
                    <div class="float-l w130" style="width:200px;">
                        <span class="star" style="float:left;">*&nbsp;&nbsp;&nbsp;</span>
                        <label>模版名称</label>
                    </div>
                    <div class="float-l">
                        <input type="text" class="w230" id="selfTemplateName" value="<?php echo $express_shipping_select['template_name']; ?>"></div>
                    <div class="float-l">
                        <span class="prompt"></span>
                    </div>
                </li>
                <li class="list-li _selfTemplate" style="display: none;">
                    <div class="float-l w130">
                        <span class="star">*</span>
                        <label>快递公司</label>
                    </div>
                    <div class="float-l">
                        <select class="w242" name="ExpressName" id="ExpressName"></select>
                    </div>
                    <div class="float-l" style="float:left;">
                        <span class="prompt"></span>
                    </div>
                    <div class="clear"></div>
                </li>
                <li class="list-li _selfTemplate" style="display: none;">
                    <div class="float-l w130">
                        <span class="star">*</span>
                        <label>尺寸</label>
                    </div>
                    <div class="float-l">
                        <select id="measureType">
                            <option value="pxMeasure">像素（px）</option>
                            <option value="mmMeasure">毫米（mm）</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp; 宽&nbsp;
                        <input id="sysTemplateWidth" value="869.00" type="text" onblur="javascript:picAttrChange();" onkeyup="value=value.replace(/[^\d]/g,&#39;&#39;)" class="v5-input in50 l5">
                        <label class="l30">高&nbsp;</label>
                        <input id="sysTemplateHeight" onblur="javascript:picAttrChange();" onkeyup="value=value.replace(/[^\d]/g,&#39;&#39;)" value="480.00" type="text" class="v5-input in50 l5"></div>
                    <div class="float-l" style="float:left;">
                        <span class="prompt"></span>
                    </div>
                    <div class="clear"></div>
                </li>
                <li class="list-li">
                    <div class="float-l w130" style="width:200px;">
                        <span class="star" style="float:left;">*&nbsp;&nbsp;&nbsp;</span>
                        <label>选择打印项</label>
                    </div>
                    <div class="overflow" style="float:left;width:880px;">
                        
                        <ul class="overflow" id="Template_All">
                        <?php if($print != ''): if(is_array($print) || $print instanceof \think\Collection || $print instanceof \think\Paginator): if( count($print)==0 ) : echo "" ;else: foreach($print as $key=>$v): ?>
                            <li class="float-l w150" style="float:left;width:140px;">
                                <input id="ckb_<?php echo $v['field_name']; ?>"  <?php if($v['is_print'] == 1): ?>checked="checked"<?php endif; ?> type="checkbox" onclick="javascript:ckbClick(event);" style="float:left;margin:8px 7px 0 0;" >
                                <label for="ckb_<?php echo $v['field_name']; ?>"><?php echo $v['field_display_name']; ?></label>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </ul>
                        <div class="clear"></div>
                        <!--设置快递单 begin-->
                        <div class="templet" style="position: relative;z-index:0;">
                            <!--img begin-->
                            <div class="file01 w800 t10">
                            	<?php if($express_shipping_select['image'] == ''): ?> 
                                		<img id="imgLogo" src="" alt="请上传图片" style="width: 869px; height: 480px;">
                               	<?php else: ?>
                                		<img id="imgLogo" src="__ROOT__/<?php echo $express_shipping_select['image']; ?>" alt="请上传图片" style="width: 869px; height: 480px;">
                               			
                               	<?php endif; ?>
                               	<input type="hidden"id="Logo"value="<?php echo $express_shipping_select['image']; ?>"/>
                                <div class="btn" style="z-index:10;position:relative">
                                    <!-- <input style="width:80px;" class="btn-pic" type="button" onclick="$(&#39;#fileUploadImg&#39;).click();" value="上传图片"> -->
                                    <input class="inputfile" id="fileUploadImg" type="file" style="display: none;" name="file_upload" onchange="javascript:btnUploadFile();">
                                    <p  onclick="$(&#39;#fileUploadImg&#39;).click();"><i class="fa fa-cloud-upload text"></i>上传图片</p>
                                </div>
                            </div>
                            <!--img end-->
                            <!--label01 begin-->
                            <div class="templet-label" style="padding:-5px;margin:-5px;">
                                <div class="col01">
                                    <?php if(is_array($print) || $print instanceof \think\Collection || $print instanceof \think\Paginator): if( count($print)==0 ) : echo "" ;else: foreach($print as $k=>$v): ?>
                                    <!--<?php echo $v['field_name']; ?> begin-->    
                                    <?php if($v['is_print'] == 1): ?>
	                                    <div class="field movefield" id="field_drag<?php echo $v['field_name']; ?>" onclick="DragRule(event);" style="position: absolute; display:block; top: <?php echo $v['y']; ?>px; left: <?php echo $v['x']; ?>px; cursor: move;">
	                                        <span class="field-name"><?php echo $v['field_display_name']; ?></span>
	                                        <a id="A_<?php echo $v['field_name']; ?>" style="float:right;position:absolute;width:20px;height:26px;" onclick="javascript:closeA(event);" class="closeA" href="javascript:void(0)">X</a>
	                                    </div>
                                    <?php else: ?>
	                                    <div class="field movefield" id="field_drag<?php echo $v['field_name']; ?>" onclick="DragRule(event);" style="position: absolute; display:none; top: <?php echo $v['y']; ?>px; left: <?php echo $v['x']; ?>px; cursor: move;">
	                                        <span class="field-name"><?php echo $v['field_display_name']; ?></span>
	                                        <a id="A_<?php echo $v['field_name']; ?>" style="float:right;position:absolute;width:20px;height:26px;" onclick="javascript:closeA(event);" class="closeA" href="javascript:void(0)">X</a>
	                                    </div>
                                    <?php endif; ?>
                                    <!--<?php echo $v['field_name']; ?> end--> 
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <!--label01 End--> 
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
            </ul>
            <!--自定义模版 end-->
            <div class="l156 t30 b20" style="margin:0 0 10px 0px; text-align: center;z-index:100">
                <input type="button" id="btnSave" class="submit01 r10 edit_button" onclick="javascript:SaveState();" value="保存">
                <button onclick="javascript:cancel()" class="reset01 edit_button" style="margin-left:10px;">取消</button>
                <input type="hidden" value="869.00" id="firstPicWidth">
                <input type="hidden" value="480.00" id="firstPicHeight">
                <input type="hidden" value="sysTemplate" id="isSysOrSelf">
                <input type="hidden" value="<?php echo $express_id; ?>" id="update_expressid">
                <input type="hidden" value="<?php echo $express_shipping_select['sid']; ?>" id="templateID"></div>
        </div>
    </div>
    <!--------------公用js开始-------->
    <script type="text/javascript">
        var picWidth;
        var picHeight;

        $(function () {
            // 要实现拖拽的DIV标签
            $('.field').easydrag();
            // 第一次加载图片
            onLoadPic();

            // 初始加载布局
            tipsLayout();

            // 显示或者隐藏模版设置
            displaySelfOrSysTemplate();

            // 度量单位改变时
            measureTypeChange();
        });

        // 度量单位改变时
        function measureTypeChange() {
            $("#measureType").change(function () {
                var measureType = $("#measureType").val();
                var length = $("#sysTemplateWidth").val();
                var width = $("#sysTemplateHeight").val();

                if (measureType == "pxMeasure") { // px
                    length = length * 3.78;
                    width = width * 3.78;
                } else { // mm 单位
                    length = length / 3.78;
                    width = width / 3.78;
                };

                if (length > 0) {
                    $("#sysTemplateWidth").val(length);
                }
                if (width > 0) {
                    $("#sysTemplateHeight").val(width);
                }

            });
        };

        // 显示或者隐藏模版设置
        function displaySelfOrSysTemplate() {
            var isSysOrSelf = $("#isSysOrSelf").val();
            if ("sysTemplate" == isSysOrSelf) {
                $("#sysTemplate").css("display", "block");
                $("._selfTemplate").css("display", "none");
            } else if ("selfTemplate" == isSysOrSelf) {
                $("#sysTemplate").css("display", "none");
                $("#selfTemplate").css("display", "block");
            };
        };

        // 初始加载布局
        function tipsLayout() {
        	return false;
            // 先将所有的checkbox的选中状态为false及tip都隐藏
//             $("#Template_All input[type=checkbox]").each(function () {
//                 $(this).attr({ "checked": false });
//             });

            for (var i = 1; i < 20; i++) {
                var tip = "#field_dragA" + i;
                if ($('#Template_All #ckb_A' + i).attr("checked") == "checked") { // jquery 的这个版本 要用true 和false判断
                    var tip = "#field_dragA" + i;
                    $(tip).css("display", "block");
                }else{
                    $(tip).css("display", "none");
                }
            }

            var templateID = $("#templateID").val();
            $.getJSON("GetTemPalteElement", "templateID=" + templateID + "", function (returnData) {
//                 var ImageUrl = returnData.ImageUrl;
//                 var Length = returnData.Length;
//                 var Width = returnData.Width;
                // tips 坐标的集合
                var templateElements = returnData;
                // 循环把每一个tip的坐标放上去
                var elementID = 0;
                alert(JSON.stringify(templateElements));
                for (var i = 0; i < templateElements.length; i++) {
                    // 取到 elementID
                    elementID = templateElements[i].ElementID;

                    // 控制checkbox和 tips 的显隐
                    var tip = "#field_drag" + elementID;

                    $(tip).css("display", "block");
                    $(tip).css('top', templateElements[i].OffSetY + "px");
                    $(tip).css('left', templateElements[i].OffSetX + "px");

                    var ckb = "#ckb_A" + elementID;
                    $(ckb).attr("checked", "checked");
                };
            });
        }

        // checkBox的点击事件
        function ckbClick(event) {
            event = event ? event : window.event;
            var eventSrc = event.srcElement ? event.srcElement : event.target;
            // 如果选中了对应的checkBox 将对应的tip显示出来
            if ($(eventSrc).attr("checked") == "checked") { // jquery 的这个版本 要用true 和false判断
                // 当前点击的 checkbox 的id  ckb_12
                var ckbClick = $(eventSrc).attr("id");
                var ckbID = ckbClick.substring(ckbClick.indexOf('_') + 1, ckbClick.length);
                // 让对应的tip 显示
                var tip = "#field_drag" + ckbID;
                $(tip).css("display", "block");
            } else {
                // 当前点击的 checkbox 的id  ckb_12
                var ckbClick = $(eventSrc).attr("id");
                var ckbID = ckbClick.substring(ckbClick.indexOf('_') + 1, ckbClick.length);
                // 让对应的tip 显示
                var tip = "#field_drag" + ckbID;
                $(tip).css("display", "none");
            }
        };

        // 点击a标签关闭时
        function closeA(event) {
            event = event ? event : window.event;
            var eventSrc = event.srcElement ? event.srcElement : event.target;

            var currentA = $(eventSrc).attr("id");
            var AID = currentA.substring(currentA.indexOf('_') + 1, currentA.length);
            var currentCkeck = "#ckb_" + AID;
            $(currentCkeck).attr("checked", false);

            // 关闭当前的tip
            $(eventSrc).parent().css("display", "none");
        };

        // 默认加载快递公司图片
        function onLoadPic() {
            var width = $("#firstPicWidth").val();
            var height = $("#firstPicHeight").val();
            $("#TemplatePic").css("width", width + "px");
            $("#TemplatePic").css("height", height + "px");

            picWidth = width;
            picHeight = height;
        }

        // 监控tips不能出了范围
        function DragRule(event) {
            event = event ? event : window.event;
            var eventSrc = event.srcElement ? event.srcElement : event.target;

            // 判断当前拖动的对象是谁 必须是 div 不是就装换成 div (防止点击的是<span>)
            if ($(eventSrc).attr("class") == "field-name") {
                eventSrc = $(eventSrc).parent();
            }

            var Left = $(eventSrc).css("left");
            var Top = $(eventSrc).css("top");

            Left = Left.substring(0, Left.indexOf('p'));
            Top = Top.substring(0, Top.indexOf('p'));

            if (Left < 0) {
                $(eventSrc).css("left", "0px");
            }
            if (Top < 0) {
                $(eventSrc).css("top", "0px");
            }
            if (Top > picHeight - 30) {
                $(eventSrc).css("top", picHeight - 30 + "px");  // picHeight-30
            }
            if (Left > picWidth - 126) {
                $(eventSrc).css("left", picWidth - 126 + "px");  // picWidth-126
            }

        };

        // 点击保存 记住所有checkBox 选中的对应的tip的 坐标 以及当前(快递公司的ID,传到后台获取模板ID)
        function SaveState() {
            var isSysOrSelf = $("#isSysOrSelf").val();
            
            // 遍历所有的checkBox
            var checks = $("#Template_All input[type=checkbox]");
            var sendDatas = "";
            for (var i = 0; i < checks.length; i++) {
                var checked = $(checks[i]).attr("checked");
                    if (checked == "checked") {
                        var is_print = 1;
                    }else{
                        var is_print = 0;
                    };

                    // 1,2,1,67,89; ID+name+is_print+left坐标+top坐标
                    var check = $(checks[i]).attr("id");
                    // 要传输的ID号
                    var sendID = check.substring(check.indexOf('_') + 1, check.length);
                    
                    var name = $('label[for=ckb_' + sendID + ']').text();
                    
                    // 对应的tip
                    var tip = "#field_drag" + sendID;
                    // 取tip的相对图片的left值
                    var sendLeft = $(tip).css("left");
                    var sendTop = $(tip).css("top");
                    //var sendLeft = $(tip).attr("left");

                    sendLeft = sendLeft.substring(0, sendLeft.indexOf('p'));

                    // 取tip的相对图片的top值
                    var sendTop = $(tip).css("top");
                    sendTop = sendTop.substring(0, sendTop.indexOf('p'));

                    sendTop = parseInt(sendTop) + 1;
                    // 组装发送到后台的数据

                    sendDatas += sendID + ',' + name + ',' + is_print + ',' + sendLeft + ',' + sendTop + ';';
            }
            var send_Data = "";
            var templateID = $("#templateID").val();
            sendDatas = sendDatas.substring(0, sendDatas.length - 1);
				
            //背景图片的路径
            var imgUrl = $("#Logo").val();
            var express_id=$("#update_expressid").val();
            var width_length=$("#firstPicWidth").val();
            var heigth_length=$("#firstPicHeight").val();
            send_Data = { "sendDatas": sendDatas, "templateID": templateID,"imgUrl": imgUrl, "express_id":express_id, "width_length": width_length, "heigth_length":heigth_length};
            $.ajax({
                url: "ADMIN_MAIN/express/setPrinttemplate",
                data: send_Data,
                dataType:'html',
                type: "post",
                success: function (returnData) {
                	if(returnData>0){
                		showMessage('success', "模板修改成功!", "ADMIN_MAIN/expresscompany");
                	}
                }
            });
        }

        // 自定义模版要js验证
        function Validate() {
            $(".prompt").text('');

            if ($("#selfTemplateName").val() == "") {
                $("#selfTemplateName").focus();
                validataPrompt($("#selfTemplateName"), '模版名称不能为空');
                return false;
            }

            if ($("#sysTemplateWidth").val() == "" && $("#sysTemplateHeight").val() != "") {
                $("#sysTemplateWidth").focus();
                validataPrompt($("#sysTemplateWidth"), '模版宽不能为空');
                return false;
            }

            if ($("#sysTemplateHeight").val() == "" && $("#sysTemplateWidth").val() != "") {
                $("#sysTemplateHeight").focus();
                validataPrompt($("#sysTemplateHeight"), "模版高不能为空");
                return false;
            }

            if ($("#sysTemplateWidth").val() == "" && $("#sysTemplateHeight").val() == "") {
                $("#sysTemplateWidth").focus();
                validataPrompt($("#sysTemplateHeight"), "模版宽、高不能为空");
                return false;
            }

            if ($("#TemplatePic").attr("src") == "") {
                $("#fileUploadImg").focus();
                validataPrompt($("#fileUploadImg"), "快递单不能为空");
                return false;
            }

            return true;
        }

        // 验证提示
        var validataPrompt = function ($element, msg) {
            $element.parent().next().find(".prompt").text(msg);
        };

        // 焦点离开宽高时的事件
        function picAttrChange() {
            var measureType = $("#measureType").val();
            var length = $("#sysTemplateWidth").val();
            var width = $("#sysTemplateHeight").val();
            if (measureType == "pxMeasure") { // px
                if (width > 465 || width != "") {
                    $("#sysTemplateHeight").val(465);
                    validataPrompt($("#sysTemplateHeight"), "推荐高度不超过465px");
                }
            } else {
                if (width < 124) {
                    length = length * 3.78;
                    width = width * 3.78;
                } else {
                    $("#sysTemplateHeight").val(123.1);
                    width = 123.1;
                    validataPrompt($("#sysTemplateHeight"), "推荐高度不超过124mm");
                    length = length * 3.78;
                    width = width * 3.78;
                }

            }

            if (length > 0 && width > 0) {
                $("#TemplatePic").css({ "width": length, "height": width });
            }
        };

        // 取消
        function cancel() {
            window.location.href = "ADMIN_MAIN/express/expresscompany";
        }
    </script>
    <!--------------公用js结束-------->
    <!--------------系统模版开始-------->
    <script type="text/javascript"></script>
    <script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script>
	<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
    <!--------------系统模版结束-------->
    <!--------------自定义模版开始-------->
    <script type="text/javascript">
        $(function () {
            // 快递公司选择变化时
            expressNameChanging();
        });

        // 快递公司变化的事件
        function expressNameChanging() {
            $("#ExpressName").change(function () {
                if (confirm('确定要重新载入模板吗？')) {
                    if ($("#ExpressName").val() != "All") {
                        // 快递公司的ID
                        var expressID = $("#ExpressName").val();

                        $.getJSON("/logistics/expressnamechanging", "id=" + expressID + "", function (returnData) {
                            if (returnData != null) {
                                var picUrl = returnData.picUrl;
                                // 把图片替换掉 (src)
                                $("#TemplatePic").attr("src", picUrl);
                            }
                        });
                    }
                }
            });
        };
        // 上传图片
        function btnUploadFile() {
            // 在上传图片之前一定要先让用户设置宽和高
            if ($("#sysTemplateWidth").val() == "" || $("#sysTemplateHeight").val() == "") {
                validataPrompt($("#sysTemplateHeight"), "上传文件之前请先设置模版的宽或者高");
                $("#sysTemplateHeight").focus();
                $("#fileUploadImg").val(''); // 如果不清空文件内容，下次将无法上传图片
                return false;
            } else {
                $(".prompt").text('');
            }
            var fileid = "fileUploadImg";

    		var data = { 'file_path' : UPLOADEXPRESS };
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
    </script>
    <!--------------自定义模版结束-------->

</div>
<!--Right End-->
<!--确认信息的公用弹层 开始-->
<div id="dvConfirm" style="display: none;">
    <div class="content" style="min-width: 300px; min-height: 50px;">
        <div class="mod-form">
            <div class="con style0alert">
                <span id="confirmMessage"></span>
            </div>
        </div>
    </div>
</div>
<!--确认信息的公用弹层 结束-->

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