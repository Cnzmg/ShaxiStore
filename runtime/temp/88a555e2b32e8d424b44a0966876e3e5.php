<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"template/platform/Wchat/shareConfig.html";i:1581654382;s:27:"template/platform/base.html";i:1581654383;s:44:"template/platform/controlCommonVariable.html";i:1581654383;s:33:"template/platform/openDialog.html";i:1581654383;}*/ ?>
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
							
<link rel="stylesheet" type="text/css" href="PLATFORM_CSS/set.css">
<script>
   $(document).ready(function () {
       $("#codeCancel").hide();
       $("#storeCancel").hide();
       $("#proCancel").hide();
       $("#storeCancel").hide();
       $("#codeCancel").click(function () {
           $(".card .text").show();
           $(".card input").hide();
           $("#codeEdit").show();
           $("#codeCancel").hide();
           buthide();
       })
       $("#platCancel").click(function () {
           $(".plat .text").show();
           $(".plat input").hide();
           $("#platEdit").show();
           $("#platCancel").hide();
           buthide();
       })
       $("#proCancel").click(function () {
           $(".product .text").show();
           $(".product input").hide();
           $("#proEdit").show();
           $("#proCancel").hide();
           buthide();
       })
       $("#storeCancel").click(function () {
           $(".store .text").show();
           $(".store input").hide();
           $("#storeEdit").show();
           $("#storeCancel").hide();
           buthide();
       })
       function buthide() {
           if ($("#proCancel").is(":hidden") && $("#storeCancel").is(":hidden")) {
               $(".button").hide();
           }
       }
       $("#codeEdit").click(function () {
           $(".card .text").hide();
           $(".card input").show();
           $("#codeEdit").hide();
           $("#codeCancel").show();
           $(".button").show();
           // $(".button").children('button').css('margin-left','120px');
       })
       $("#platEdit").click(function () {
           $(".plat .text").hide();
           $(".plat input").show();
           $("#platEdit").hide();
           $("#platCancel").show();
           $(".button").show();
           // $(".button").children('button').css('margin-left','775px');
       })
       $("#proEdit").click(function () {
           $(".product .text").hide();
           $(".product input").show();
           $("#proEdit").hide();
           $("#proCancel").show();
           $(".button").show();
           // $(".button").children('button').css('margin-left','445px');
       })
       $("#storeEdit").click(function () {
           $(".store .text").hide();
           $(".store input").show();
           $("#storeEdit").hide();
           $("#storeCancel").show();
           $(".button").show();
           // $(".button").children('button').css('margin-left','775px');
       })
   })
</script>
<section class="panel panel-default">
	<header class="panel-heading font-bold"> 分享内容设置</header>
	<div class="panel-body">
		<div class="container-fluid">
				<div class="main share" style="position: inherit;overflow-y: visible;">
				    <div class="mb10 mlr15">
				    	<div class="row">
				    		<div class="col-lg-12 col-md-12">
						        <div class="tiphelp-info" >
						            <strong>提示：</strong>设置分享内容，设置方法如下：
						            <br>点击下方的“编辑”按钮，在出现的对话框中填写您想要的内容，如果想要取消，点击“取消”按钮，如果需要保存点击保存即可。
						        </div>
					        </div>
					    </div>
				    </div>
				    <div  class="col-lg-6 col-md-6 col-xs-12">
					    <div class="card">
					        <h3 class="title" style="height:40px;line-height:40px;">推广二维码
					            <a href="javascript:void(0)" class="edit" id="codeEdit" style="display: block;">编辑</a>
					            <a href="javascript:void(0)" class="edit" id="codeCancel" style="display: none;">取消</a></h3>
					        <h4 class="pro-title">
					            <span>分享二维码</span></h4>
					        <dl>
					            <dt>
					                <span class="img">个人头像</span>
					            </dt>
					            <dd style="margin-left:10px;">
					                <p class="price">
					                    <span class="text" id="qrcode_one" style="display: inline;"><?php echo $config['qrcode_param_1']; ?></span>
					                    <input class="w60" type="text" value=" <?php echo $config['qrcode_param_1']; ?>" placeholder="请输入分享标题" style="display: none;" id="Qrcode_param_1"></p>
					                <p class="advertisiment">
					                    <span class="text" id="qrcode_two" style="display: block;"><?php echo $config['qrcode_param_2']; ?></span>
					                    <input class="input-medium" type="text" value="<?php echo $config['qrcode_param_2']; ?>" style="display: none;" id="Qrcode_param_2"></p>
					                <p class="hot">
					                    <span>收藏热度：</span>
					                    <span class="star">★★★★★</span></p>
					            </dd>
					        </dl>
					    </div>
					</div>
		 			<div  class="col-lg-6 col-md-6 col-xs-12">
					    <div class="plat">
					        <h3 class="title">
					            <span>平台设置</span>
					            <a href="javascript:void(0)" class="edit" id="platEdit" style="display: block;">编辑</a>
					            <a href="javascript:void(0)" class="edit" id="platCancel" style="display: none;">取消</a></h3>
					        <h4 class="plat-title">
					            <span class="text pre" id="platopendescspan" style="display: inline-block;"><?php echo $config['platform_param_1']; ?></span>
					            <input type="text" class="input-medium" value="<?php echo $config['platform_param_1']; ?>" placeholder="请输入欢迎语" style="display: none;">
					            <span class="storeName" id="platshopName">**店</span></h4>
					        <dl>
					            <dt>
					                <span class="img">平台Logo</span></dt>
					            <dd style="margin-left:10px;">
					                <p class="price">
					                    <span class="text advertisiment" id="platopenremarkspan1" style="display: block;"><?php echo $config['platform_param_2']; ?></span>
					                    <input id="plattxtOpenRemark" class="input-medium" type="text" value="<?php echo $config['platform_param_2']; ?>" placeholder="请输入内容" style="display: none;"></p>
					                <p class="platmore">
					                    <span class="text" id="platopenremarkspan2" style="display: block;"><?php echo $config['platform_param_3']; ?></span>
					                    <input class="input-medium" type="text" value="<?php echo $config['platform_param_3']; ?>" style="display: none;"></p>
					                <p class="hot">
					                    <span>收藏热度：</span>
					                    <span class="star">★★★★★</span></p>
					            </dd>
					        </dl>
					    </div>
					</div> 
					
					<div  class="col-lg-6 col-md-6 col-xs-12">
					    <div class="product">
					          <h3 class="title"><span>商品设置</span>
					          <a href="javascript:void(0)" class="edit" id="proEdit" style="display: block;">编辑</a>
					          <a href="javascript:void(0)" class="edit" id="proCancel" style="display: none;">取消</a></h3>
					          <h4 class="pro-title"><span>商品分享</span></h4>
					          <dl>
					            <dt>
					              <span class="img">商品图片</span>
					            </dt>            
					            <dd style="padding-left:10px;">
					              <p class="price"><span class="text" id="pricespan" style="display: inline;"><?php echo $config['goods_param_1']; ?></span><input class="w60" type="text" value="<?php echo $config['goods_param_1']; ?>"  placeholder="价格标题" style="display: none;" id="PriceDesc"><span class="number"><!-- ￥265.00 --></span></p>
					              <p class="advertisiment"><span class="text" id="descspan" style="display: block;"><?php echo $config['goods_param_2']; ?></span><input class="input-medium" type="text" value="<?php echo $config['goods_param_2']; ?>" style="display: none;" id="ProductDesc"></p>
					              <p class="hot"><span>收藏热度：</span><span class="star">★★★★★</span></p>
					            </dd>
					          </dl>
				        </div>
			        </div>
			        <div  class="col-lg-6 col-md-6 col-xs-12">
				        <div class="store">
					          <h3 class="title"><span>店铺设置</span><a href="javascript:void(0)" class="edit" id="storeEdit" style="display: block;">编辑</a><a href="javascript:void(0)" class="edit" id="storeCancel" style="display: none;">取消</a></h3>
					          <h4 class="store-title"><span class="text pre" id="opendescspan" style="display: inline-block;"><?php echo $config['shop_param_1']; ?></span><input type="text" class="input-medium" value="<?php echo $config['shop_param_1']; ?>" placeholder="请输入欢迎语" style="display: none;"><span class="storeName" id="shopName">**店</span></h4>
					          <dl>
					            <dt>
					              <span class="img">店铺Logo</span>
					            </dt>
					            <dd>
					              <p class="price"><span class="text advertisiment" id="openremarkspan1" style="display: block;"><?php echo $config['shop_param_2']; ?></span><input id="txtOpenRemark" class="input-medium" type="text" value="<?php echo $config['shop_param_2']; ?>" placeholder="请输入内容" style="display: none;"></p>
					              <p class="more"><span class="text" id="openremarkspan2" style="display: block;"><?php echo $config['shop_param_3']; ?></span><input class="input-medium" type="text" value="<?php echo $config['shop_param_3']; ?>" style="display: none;"></p>
					              <p class="hot"><span>收藏热度：</span><span class="star">★★★★★</span></p>
					            </dd>
					          </dl>        
				        </div>      
				    </div>
					
					
					
					<p class="button" style="display: none;text-align:center;" id="btnBut"><button class="btn btn-large btn-primary" id="btnSave" type="button">点击保存</button></p>  
				</div>
			</div>	
		</div>
<script>
    $(function () {
        $("#btnSave").click(function () {
            $("#btnSave").attr("disabled", true);
            var PriceDesc = $("#PriceDesc").val();
            var ProductDesc = $("#ProductDesc").val();
            var OpenDesc = $(".store-title input").val();
            var OpenRemark1 = $("#txtOpenRemark").val();
            var OpenRemark2 = $(".more input").val();
            var Qrcode_param_1=$("#Qrcode_param_1").val();
            var Qrcode_param_2=$("#Qrcode_param_2").val();
           // alert(PriceDesc+","+ProductDesc+","+OpenDesc+"，"+OpenRemark1+","+OpenRemark2);
 		   var platOpenDesc = $(".plat-title input").val();
           var platOpenRemark1 =  $("#plattxtOpenRemark").val();
           var platOpenRemark2 = $(".platmore input").val();

            $.ajax({
                type: "post",
                url: "PLATFORM_MAIN/wchat/shareconfig",
                data: { "goods_param_1":PriceDesc, 
                	    "goods_param_2":ProductDesc,
                	    "shop_param_1":OpenDesc,
                	    "shop_param_2":OpenRemark1,
                	    "shop_param_3":OpenRemark2,
                	    "qrcode_param_1":Qrcode_param_1,
                	    "qrcode_param_2":Qrcode_param_2, 
                	    
                	    "platform_param_1":platOpenDesc,
                	    "platform_param_2":platOpenRemark1,
                	    "platform_param_3":platOpenRemark2, 
                	  },
                async: false,
                success: function (data) {
                	if(data['code']){
                     showMessage('success', data['message'], 'PLATFORM_MAIN/wchat/shareconfig');
                	}else{
                     showMessage('error', data['message']);
                	}
                    $("#PriceDesc").val(PriceDesc);
                    $("#ProductDesc").val(ProductDesc);
                    $(".store-title input").val(OpenDesc);
                    $("#txtOpenRemark").val(OpenRemark1);
                    $(".more input").val(OpenRemark2);
                    $("#Qrcode_param_1").val(Qrcode_param_1);
                    $("#Qrcode_param_2").val(Qrcode_param_2);              

                    $(".plat-title input").val(platOpenDesc);
                    $("#plattxtOpenRemark").val(platOpenRemark1);
                    $(".platmore input").val(platOpenRemark2);
                    
                    
                    $("#pricespan").text(PriceDesc);
                    $("#descspan").text(ProductDesc);
                    $("#opendescspan").text(OpenDesc);
                    $("#openremarkspan1").text(OpenRemark1);
                    $("#openremarkspan2").text(OpenRemark2);
                    $("#qrcode_one").text(Qrcode_param_1);
                    $("#qrcode_two").text(Qrcode_param_2);

                      $(".card .text").show();
                      $(".card input").hide();
                      $("#codeEdit").show();
                      $("#codeCancel").hide();

                      $(".plat .text").show();
                      $(".plat input").hide();
                      $("#platEdit").show();
                      $("#platCancel").hide();
                      
                      $(".product .text").show();
                      $(".product input").hide();
                      $("#proEdit").show();
                      $("#proCancel").hide();

                      $(".store .text").show();
                      $(".store input").hide();
                      $("#storeEdit").show();
                      $("#storeCancel").hide();
                      $("#btnSave").attr("disabled", false); 
                      $("#btnBut").hide();  
//                       if ($("#proCancel").is(":hidden") && $("#storeCancel").is(":hidden")) {
//                           $(".button").hide();
//                       }
                }
            });
        });
    });
</script>
</section>

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