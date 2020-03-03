<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:44:"template/wap/default//Member/addAccount.html";i:1581654514;s:30:"template/wap/default/base.html";i:1581654581;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<!-- <title><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title> -->
<title>我的商城</title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var ADMINMAIN='ADMIN_MAIN';

$(function(){
	showLoadMaskLayer();
})

$(document).ready(function(){
	hiddenLoadMaskLayer();
	//编写代码
});

//页面底部选中
function buttomActive(event){
	clearButton();
	if(event == "#buttom_home"){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#buttom_classify"){
		$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#buttom_stroe"){
		$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//显示加载遮罩层
function showLoadMaskLayer(){
	$(".mask-layer-loading").fadeIn(300);
}

//隐藏加载遮罩层
function hiddenLoadMaskLayer(){
	$(".mask-layer-loading").fadeOut(300);
}
</script>
<style>
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
</style>

<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/member_address.css">

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" onclick="window.history.go(-1)"
		href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title">添加账户</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	

<form class="form-info">
	<div class="div-item">
		<span>姓名</span> <input type="text" placeholder="请输入真实姓名" id="realname" />
	</div>
	<div class="div-item">
		<span>手机号</span> <input type="text" placeholder="请输入手机号" id="mobile" />
	</div>
	<div class="div-item">
		<span>账号类型</span> 
		<select id="bank_type">
		   <option  value="银行卡" >银行卡 </option>
		   <option value="支付宝" style="display:none;">支付宝</option>
		</select>
	</div>
	<div class="div-item">
		<span>支行信息</span> <input type="text" placeholder="请输入支行信息" id="branch_bank_name" />
	</div>
	<div class="div-item">
		<span>银行账号</span> <input type="text" placeholder="请输入银行账号" id="account_number" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')"/>
	</div>
	<input type="hidden" value="<?php echo $shop_id; ?>" id="shop_id"/>
</form>
<button onclick="save()" class="btn-save">保存</button>

	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
	
	function save(){
		var shop_id = $("#shop_id").val();
		var realname = $("#realname").val();
		var mobile = $("#mobile").val();
		var bank_type = $("#bank_type").val();
		var account_number = $("#account_number").val();
		var branch_bank_name = $("#branch_bank_name").val();
        if(realname==''){
        	showBox("姓名不能为空");
    		$("#realname").focus();
        	return false;
        }
        if(!(/^1[3|4|5|7|8][0-9]{9}$/.test(mobile))){
			showBox("手机号格式不正确");
    		$("#mobile").focus();
        	return false;
        }
        if(branch_bank_name==''){
        	showBox("支行信息不能为空");
    		$("#branch_bank_name").focus();
        	return false;
        }
        if(account_number==''){
        	showBox("银行账号不能为空");
    		$("#account_number").focus();
        	return false;
        }
		$.ajax({
			type : "post",
			url : "APP_MAIN/member/addaccount",
			dataType : "json",
			data : {
				"realname":realname,
				"mobile":mobile,
				"bank_type":bank_type,
				"account_number":account_number,
				"branch_bank_name":branch_bank_name
			},
			success : function(data) {
				//alert(JSON.stringify(data));
				if(data['code']>1){
					showBox("添加成功");
					window.location.href = "APP_MAIN/member/accountlist?shop_id="+shop_id;
				}else{
					showBox("添加失败");
				}
				
			}
		})
	}
</script>

</body>
</html>