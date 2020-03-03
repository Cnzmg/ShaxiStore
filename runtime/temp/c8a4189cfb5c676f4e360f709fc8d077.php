<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"template/admin/Goods/dialogSelectCategory.html";i:1581654292;s:41:"template/admin/controlCommonVariable.html";i:1581654310;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>商城</title>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
<script src="ADMIN_JS/art_dialog.source.js"></script>
<script src="ADMIN_JS/iframe_tools.source.js"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/css/common.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/css/seller_center.css">
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
<script>

function goodsAddCallBack(){
	var goodsid = "<?php echo $goodsid; ?>";
	var dialog_flag = "<?php echo $flag; ?>";
	var box_id = "<?php echo $box_id; ?>";
	var dis = $("#next_Page").attr("disabled");
	if (dis == "disabled") {
		return;
	}
	var quick_id = "";// 所选择的商品分类
	var goods_category_name = "";
	var selectSpan = $(".hasSelectedCategoryDiv span").last();
	var spanList = $(".hasSelectedCategoryDiv span");
	var count = spanList.length;
	for (var i = 1; i < count; i++) {
		var span = $(spanList[i]);
		var html = span.html();
		goods_category_name += html;
		quick_id += span.attr("cid") + ",";// 记录用户所选择的商品类目Id，用与在快速选择商品类目中显示
	}
	var goods_category_id = selectSpan.attr("cid");
	var goods_attr_id = selectSpan.attr("data-attr-id");//属性关联id
	quick_id = quick_id.substr(0, quick_id.length - 1);
	
	goods_category_name = goods_category_name.replace(/\s/g, "");
	
	// 判断当前所选择的商品分类与Cookie中的进行查询，是否存在，不存在则添加，
	var flag = true;// 标识，是否允许添加到Cookie中（防止出现重复数据）true:允许；flase：不允许
	if (goods_category_quick.length > 0) {
		for (var k = 0; k < goods_category_quick.length; k++) {
			if (quick_id == goods_category_quick[k]["quick_id"]) {
				flag = false;
				break;
			} else {
				flag = true;
			}
		}
	}
	// 允许添加到到Cookie中
	if (flag) {
		var json = {
			quick_name : $.trim(goods_category_name),
			quick_id : quick_id,
		};
		goods_category_quick.push(json);
		// alert("Cookie中没有，开始添加");
	} else {
		// alert("Cookie中已有，不进行重复添加操作");
	}
	$.ajax({
		url : "ADMIN_MAIN/goods/selectcategetdata",
		type : "post",
		data : {
			"goods_category_id" : goods_category_id,
			"goods_category_name" : goods_category_name,
			"goods_category_quick" : JSON.stringify(goods_category_quick),
			"goods_attr_id" : goods_attr_id
		},
		success : function(res) {
			var win = art.dialog.open.origin;
			win.location = "javascript:addGoodsCallBack(" + goods_category_id + ",'" + goods_category_name + "'," + goods_attr_id + ","+goodsid+",'"+dialog_flag+"','"+ box_id +"')";
			art.dialog.close();
			
		}
	});
	
	
}
</script>		
</head>
<body>
<script type="text/javascript" src="ADMIN_JS/goods/release_good_frist.js"></script>
<input type="hidden" value="<?php echo $category_select_ids; ?>" id="category_select_ids"/>
<input type="hidden" value="<?php echo $category_select_names; ?>" id="category_select_names"/>
<input type="hidden" value="<?php echo $category_extend_id; ?>" id="category_extend_id"/>
<div class="product-category">
	<div id="selectDiv" class="selectCat">
		<div class="sort_selector">
			<div class="sort_title">
				<span>您常用的商品分类：</span>
				<div class="text" id="commSelect">
					<div style="padding-left: 10px;">请选择</div>
					<div class="select_list" id="commListArea"></div>
				</div>
				<i class="icon-angle-down"></i>
			</div>
		</div>
		<div id="categoryDivContainer" class="categoryContainer">
			<div id="selectCategoryDiv1" class="selectCategoryDiv" style="height:auto;">
				<div class="category-search">
					<i class="icon-search-tabao"></i>
					<input type="text" name="search_category" placeholder="输入名称" />
				</div>
				<div class="categorySet">
					<?php if(is_array($cateGoryList) || $cateGoryList instanceof \think\Collection || $cateGoryList instanceof \think\Paginator): if( count($cateGoryList)==0 ) : echo "" ;else: foreach($cateGoryList as $key=>$category): ?>
					<div class="categoryItem " id="<?php echo $category['category_id']; ?>" data-attr-id="<?php echo $category['attr_id']; ?>" onclick="ClickHasSubCategory(this)">
						<span style="width: 170px;"><?php echo $category['category_name']; ?></span>
						<?php if($category['is_parent'] == 1): ?>
						<span>&gt;</span>
						<?php endif; ?>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<div class="cate-path">
			<div class="hasSelectedCategoryDiv">
				<span class="hasSelectedCategoryDivText">您当前选择的是：</span>
			</div>
		</div>
	</div>
	<div class="div-btn">
		<a class="btn btn-info disabled" href="javascript:goodsAddCallBack();" id="next_Page">已选好类目，进入下一步</a>
	</div>
</div>


</body>
</html>