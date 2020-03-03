<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"template/platform/Cms/updateArticle.html";i:1579055900;s:27:"template/platform/base.html";i:1579055862;s:44:"template/platform/controlCommonVariable.html";i:1579055862;s:33:"template/platform/openDialog.html";i:1579055862;}*/ ?>
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
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
</script>
<!-- 引入css js style等公共文件  start-->

<style type="text/css">
.required{
	color:red;margin-right:10px;
}
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
	<header class="panel-heading font-bold"> 修改文章</header>
	<div class="panel-body">
		<form class="form-horizontal" id="form" name="form" onsubmit="">
		   <input type="hidden" value="<?php echo $article_id; ?>" id="article_id"/>
			<div class="form-group">
				<label class="col-sm-2 control-label"><span class="required">*</span>文章标题</label>
				<div class="col-md-6">
					<input type="text" class="form-control" id="title" value="<?php echo $ArticleDetail['title']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">文章短标题</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="short_title" value="<?php echo $ArticleDetail['short_title']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">文章标签</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="tag"   value="<?php echo $ArticleDetail['tag']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<!-- 上传图片 -->
			<div class="form-group">
                                   <label class="col-sm-2 control-label">标题图片</label>
                                   <div class="col-sm-4">
                                   	<p>
                                   	       <?php if($ArticleDetail['image'] == ''): ?> 
										    	<img id="imgLogo" src=""> 
											<?php else: ?>
							 				    <img id="imgLogo" src="__ROOT__/<?php echo $ArticleDetail['image']; ?>"> 
											<?php endif; ?> 
                                   	
                                   	<a href="javascript:void(0);" style="display:block;position:relative;z-index:1;">
                                   		<span style="width: 97px;height: 34px;position: absolute;left: 0;top: 0;z-index: 2;cursor: pointer;"> 
                                   		<input hidefocus="true" size="1" class="input-file" name="file_upload"
					id="uploadImg" nc_type="change_store_label" type="file" style="width: 97px;height: 34px;padding: 0;margin: 0;border: none 0;opacity: 0;filter: alpha(opacity = 0);cursor: pointer;"
					onchange="imgUpload(this);"> 
					<input type="hidden" id="Logo" value="<?php echo $ArticleDetail['image']; ?>" />
				</span>
				<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
		            	</a>
                                   </div>
            </div>
		
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">文章作者</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="author" value="<?php echo $ArticleDetail['author']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">文章来源</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="source"   value="<?php echo $ArticleDetail['source']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">文章来源链接</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="url" value="<?php echo $ArticleDetail['url']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label"><span class="required">*</span>所属分类</label>
				<div class="col-sm-4">
					<select id="class_id" name="account" class="form-control m-b">
						<option value="0">请选择</option> 
						 <?php if(is_array($articleClassList['data']) || $articleClassList['data'] instanceof \think\Collection || $articleClassList['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articleClassList['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pid'] == 0): ?>
						<option value="<?php echo $vo['pid']; ?>" disabled="disabled"><?php echo $vo['name']; ?></option>
						 <?php endif; if(is_array($articleClassList['data']) || $articleClassList['data'] instanceof \think\Collection || $articleClassList['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articleClassList['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;if($vo['class_id'] == $v2['pid']): ?>
							<option value="<?php echo $v2['class_id']; ?>" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v2['name']; ?></option>
						    <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>   
					    
					</select>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">文章关键字</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="keyword" value="<?php echo $ArticleDetail['keyword']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
                <label class="col-sm-2 control-label">文章摘要</label>
               <textarea id="summary"  cols="10" rows="10" class="form-control" style="width:755px;height:150px;margin-left:210px;"><?php echo $ArticleDetail['summary']; ?></textarea>
                </div>
			<!-- 书签 -->
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label"><span class="required">*</span>文章内容</label>
				      <div class="col-sm-8">
	                         <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
	                             <div class="btn-group"> <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
	                                 <ul class="dropdown-menu">
	                                 </ul>
	                             </div>
	                             <div class="btn-group"> <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
	                                 <ul class="dropdown-menu">
	                                     <li>
	                                         <a data-edit="fontSize 5">
	                                             <font size="5">Huge</font>
	                                         </a>
	                                     </li>
	                                     <li>
	                                         <a data-edit="fontSize 3">
	                                             <font size="3">Normal</font>
	                                         </a>
	                                     </li>
	                                     <li>
	                                         <a data-edit="fontSize 1">
	                                             <font size="1">Small</font>
	                                         </a>
	                                     </li>
	                                 </ul>
	                             </div>
	                             <div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a> <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a> <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a> <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a> </div>
	                             <div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a> <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a> <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a> <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a> </div>
	                             <div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a> <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a> <a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a> <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a> </div>
	                             <div class="btn-group"> <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
	                                 <div class="dropdown-menu">
	                                     <div class="input-group m-l-xs m-r-xs">
	                                         <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink">
	                                         <div class="input-group-btn">
	                                             <button class="btn btn-default btn-sm" type="button">Add</button>
	                                         </div>
	                                     </div>
	                                 </div>
	                                 <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a> </div>
	                             <div class="btn-group"> <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
	                                 <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
	                             </div>
	                             <div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a> <a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a> </div>
	                             <input type="text" class="form-control-trans pull-left" data-edit="inserttext" id="voiceBtn" x-webkit-speech="" style="width:25px;height:28px;">
	                         </div>
	                         <div id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px"><?php echo $ArticleDetail['content']; ?></div>
	                     </div>
			    </div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">文章附件</label>
				    <div id='upload_file'>
					<div>
		                <input class="input-file" type="file" name="file_upload" id="file_upload_input" onchange="FileUpload(this)" style="margin-left:210px;">
		                <div class='files' style="margin-left:210px;width:250px;">
		                 <?php if(is_array($attachment_path) || $attachment_path instanceof \think\Collection || $attachment_path instanceof \think\Paginator): if( count($attachment_path)==0 ) : echo "" ;else: foreach($attachment_path as $key=>$vo): if($vo != ''): ?>
							    <p><span><?php echo $vo; ?></span><a href="javascript:;" onclick="delete_file('<?php echo $vo; ?>',this)">删除</a></p>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		                </div>
		            </div>
		            </div>
			    </div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">相关文章</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="article_id_array"   value="<?php echo $ArticleDetail['article_id_array']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label">推荐</label>
					 <div style="margin-top:5px;float:left;margin-left:15px;">
					  <?php if($ArticleDetail['commend_flag'] == 1): ?>
					     <input type="checkbox" value="" id="commend_flag" checked="checked"/>
				         <?php else: ?> <input type="checkbox" value="" id="commend_flag"/>
				       <?php endif; ?>   
			         </div>
					<label class="col-sm-2 control-label">允许评论</label>
					<div style="margin-top:5px;float:left;">
					   <?php if($ArticleDetail['comment_flag'] == 1): ?>
	                    <input type="checkbox" value="" id="comment_flag" checked="checked"/>
				        <?php else: ?> <input type="checkbox" value="" id="comment_flag"/>
				        <?php endif; ?>  
			        </div>
		       </div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">文章排序</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="sort"  value="<?php echo $ArticleDetail['sort']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">文章点击量</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="click" value="<?php echo $ArticleDetail['click']; ?>" >
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">文章评论数</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="comment_count" value="<?php echo $ArticleDetail['comment_count']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label">文章分享数</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="share_count" value="<?php echo $ArticleDetail['share_count']; ?>">
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			
			
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<a href="javascript:void(0);" onclick="save(1)" class="btn btn-primary">修改文章</a>
					<a href="javascript:void(0);" onclick="save(2)" class="btn btn-primary">修改并预览</a>
				</div>
			</div>
		</form>
	</div>
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
	
<script src="PLATFORM_JS/ajaxFileUpload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
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
  <script type="text/javascript">
  window.onload=function(){
	  $("#class_id").val(<?php echo $ArticleDetail['class_id']; ?>);
  }
     function save(type){
    	 var comment_flag=$('#comment_flag').is(':checked')?'1':'0';
    	 var commend_flag=$('#commend_flag').is(':checked')?'1':'0';
         var article_id=$("#article_id").val();
    	 var title=$("#title").val();
    	 var class_id=$("#class_id").val();
    	 var short_title=$("#short_title").val();
    	 var source=$("#source").val();
    	 var url=$("#url").val();
    	 var author=$("#author").val();
    	 var summary=$("#summary").val();
    	 var content=$("#editor").text();
    	 var image=$("#Logo").val();
    	 var keyword=$("#keyword").val();
    	 var article_id_array=$("#article_id_array").val();
    	 var click=$("#click").val();
    	 var sort=$("#sort").val();
    	 var tag=$("#tag").val();
    	 var comment_count=$("#comment_count").val();
    	 var share_count=$("#share_count").val();
    	 var attachment_path='';
    	 $('.files>p>span').each(function(){
    		 attachment_path+=$(this).text()+',';
    	 })
    	 attachment_path=attachment_path.substring(0,attachment_path.length-1);
     	 if(title==''){
    		 $("#title").focus();
    		 return false;
    	 }
    	 if(class_id==0){
    		 $("#class_id").focus();
    		 return false;
    	 }
    	 if(content==null || content.length==0){
    		 $("#editor").focus();
    		 return false;
    	 }
    	$.ajax({
    		type:"post",
    	    url:"PLATFORM_MAIN/Cms/ajax_updateArticle",
    	    data:{
    	      'article_id':article_id,
    	      'title':title,   
    	      'class_id':class_id,
    	      'short_title':short_title,
    	      'source':source,
    	      'url':url,
    	      'author':author,
    	      'summary':summary,
    	      'content':content,
    	      'image':image,
    	      'keyword':keyword,
    	      'article_id_array':article_id_array,
    	      'click':click,
    	      'sort':sort,
    	      'commend_flag':commend_flag,
    	      'comment_flag':comment_flag,
    	      'attachment_path':attachment_path,
    	      'tag':tag,
    	      'comment_count':comment_count,
    	      'share_count':share_count
    	     
    	},
    	    async : true,
    	    success:function(data){
    			   //alert(JSON.stringify(data)); 
    	    		if (data["code"] > 0) {
    						showMessage('success', data["message"]);
    						if(type==2 && article_id>0){
    							window.open("SHOP_MAIN/Cms/articleClassInfo?article_id="+article_id);
    						}else if(type==1){
    							location.href="PLATFORM_MAIN/Cms/articleList";	
    						}
    						
    					}else{
    						showMessage('error', data["message"]);
    					}
    	    }
    	
    	});
    	 
    	 
     }
     /**
 	 *图片上传
 	 */
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
//  	function imgUpload(event) {
//  		var fileid = $(event).attr("id");   var str = $(event).next().attr("id");
//  		fileCommonUpload("UPLOAD_URL", fileid,"__UPLOAD__",str);
//  	}
  	/**
	*上传附件
	*/
	function FileUpload(event) {
		var fileid = "file_upload_input";
		if($('#'+fileid).val()==''){
			$( "#dialog" ).dialog({
				            buttons: {
				                "确定,#e57373": function() {
				                    $(this).dialog('close');
				                }
				            },
				            contentText:"请选择附件"
				        });
		}else{
			$.ajaxFileUpload({
				url : 'PLATFORM_MAIN/System/File_Upload', //用于文件上传的服务器端请求地址
				secureuri : false, //一般设置为false
				fileElementId : fileid, //文件上传空间的id属性  <input type="file" id="file" name="file" />
				dataType : 'text', //返回值类型 一般设置为json
				async : false,
				data:{'Enclosure':1},
				contentType : "text/json;charset=utf-8",
				success : function(data) //服务器成功响应处理函数
				{
					if (data) {
						$( "#dialog" ).dialog({
				            buttons: {
				                "确定,#01B044": function() {
				                    $(this).dialog('close');
				                }
				            },
				            contentText:"附件上传成功",
				      		time:1,
				        });
						$('.files').append('<p><span>'+data+'</span><a href="javascript:;" onclick="delete_file(\''+data+'\',this)">删除</a></p>');
					}else{
						$( "#dialog" ).dialog({
				            buttons: {
				                "确定,#e57373": function() {
				                    $(this).dialog('close');
				                }
				            },
				            contentText:"附件上传失败"
				        });
					}
				}
			});
		}
	
	}
	/**
	 * 删除文件
	 * @param {Object} file_url
	 * @param {Object} even
	 */
 	function delete_file(file_url,even){
 	
 		$.ajax({
    		type:"post",
    	    url:"PLATFORM_MAIN/System/delete_file",
    	    data:{'file_url':file_url},
    	    async : true,
    	    dataType:'json',
    	    success:function(data){

    	    	if (data['code']>0) {
					$( "#dialog" ).dialog({
			            buttons: {
			                "确定,#01B044": function() {
			                    $(this).dialog('close');
			                }
			            },
			            contentText:"附件移除成功",
			      		time:1,
			        });
					 	$(even).parent().empty();
				}else{
					$( "#dialog" ).dialog({
			            buttons: {
			                "确定,#e57373": function() {
			                    $(this).dialog('close');
			                }
			            },
			            contentText:data['message'],
			        });
				}
    	    }
 		});
 	} 
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