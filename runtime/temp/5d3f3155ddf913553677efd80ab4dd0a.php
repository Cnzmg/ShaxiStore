<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"template/wap/default/joinCart.html";i:1579055748;}*/ ?>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/detail.css">
<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<style>
	.custom-tag-list .joinz-index{
		z-index: 7;
	}
	.s-buy{
		z-index: 8;
	}
</style>
<div class="success-tip-line" id="success_tip_line" style="display: none;">成功加入购物车！</div>
	<span class="" id="addcart_way" style="display: none;"><i></i></span>
<section class="s-buy" id="s_buy" >
		<div class="popup"  id="popup" style="-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;display: none"></div>
			<ul class="s-buy-ul">
				<li class="s-buy-pro">
					<span class="pro-img">
						<input type="hidden" id="default_img" value="<?php echo $goods_detail['img_list'][0]['pic_id']; ?>" />
						<img src="__ROOT__/<?php echo $goods_detail['img_list'][0]['pic_cover_micro']; ?>" >
					</span>
					<div class="pro-info">
						<p class="name" id="itemName"><?php echo $goods_detail['goods_name']; ?></p>
						<p class="pro-price" id="price">￥
						<?php if($goods_detail['promotion_price'] < $goods_detail['member_price']): ?><?php echo $goods_detail['promotion_price']; else: ?><?php echo $goods_detail['member_price']; endif; if($goods_detail['point_exchange_type']==1 && $goods_detail['point_exchange']>0): ?>
						<span style="font-size:16px;display: inline-block;vertical-align: middle;">+<?php echo $goods_detail['point_exchange']; ?>积分</span>
						<?php endif; ?>
						</p>
					</div>
					<i class="icon-close" id="icon_close"></i>
				</li>
			</ul>
			<hr class="with-margin-l" />
			<ul class="s-buy-ul specification" id="specification">
				<?php if(is_array($goods_detail['spec_list']) || $goods_detail['spec_list'] instanceof \think\Collection || $goods_detail['spec_list'] instanceof \think\Paginator): if( count($goods_detail['spec_list'])==0 ) : echo "" ;else: foreach($goods_detail['spec_list'] as $k=>$pro_prop): ?>
				<li class="s-buy-li" >
					<div class="left"><?php echo $pro_prop['spec_name']; ?>：</div>
					<div class="right" name="specvals" >
					<?php if(is_array($pro_prop['value']) || $pro_prop['value'] instanceof \think\Collection || $pro_prop['value'] instanceof \think\Paginator): if( count($pro_prop['value'])==0 ) : echo "" ;else: foreach($pro_prop['value'] as $key=>$pro_propvalue): ?>	
						<!-- <?php if($key == '0'): ?>				
							<button class="select current" name="Span<?php echo $k; ?>" id="<?php echo $pro_prop['spec_id']; ?>:<?php echo $pro_propvalue['spec_value_id']; ?>" onclick="change(this);" checked="checked">
							<?php echo $pro_propvalue['spec_value_name']; ?>
							</button>	
						<?php else: ?>	 -->
							<button class="select" name="Span<?php echo $k; ?>" id="<?php echo $pro_prop['spec_id']; ?>:<?php echo $pro_propvalue['spec_value_id']; ?>" onclick="change(this);">
							<?php echo $pro_propvalue['spec_value_name']; ?>
							</button>
						<!-- <?php endif; ?>	 -->				
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</li>
				<hr class="with-margin-l" />
				<?php endforeach; endif; else: echo "" ;endif; if(is_array($goods_detail['sku_list']) || $goods_detail['sku_list'] instanceof \think\Collection || $goods_detail['sku_list'] instanceof \think\Paginator): if( count($goods_detail['sku_list'])==0 ) : echo "" ;else: foreach($goods_detail['sku_list'] as $k=>$pro_skus): ?>				
					<input type="hidden" id="goods_sku<?php echo $k; ?>" value="<?php echo $pro_skus['attr_value_items']; ?>" stock="<?php echo $pro_skus['stock']; ?>" <?php if($pro_skus['promote_price'] < $pro_skus['member_price']): ?>price="<?php echo $pro_skus['promote_price']; ?>" <?php else: ?>price="<?php echo $pro_skus['member_price']; ?>"<?php endif; ?> promotion_price="<?php echo $pro_skus['promote_price']; ?>" member_price="<?php echo $pro_skus['member_price']; ?>" skuid="<?php echo $pro_skus['sku_id']; ?>" skuname="<?php echo $pro_skus['sku_name']; ?>" class="sku-array">
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<input type="hidden" id="goods_sku_num" value="100">
				<li class="s-buy-li">
					<div class="left" style="float:left;">购买数量：</div>
					<div class="right">
						<span class="reduce quantity-minus-disabled">-</span>
						<input class="number" name="quantity" autocomplete="off" value="1" min="1" max="<?php echo $goods_detail['stock']; ?>" id="num">
						<span class="add">+</span>
						<input id="hiddPDetailID" type="hidden" name="name" value="<?php echo $goods_detail['goods_id']; ?>">
						<input id="hiddSkuId" type="hidden" name="name" value="">
						<input id="hiddSkuName" type="hidden" name="name" value="">
						<input id="hiddSkuprice" type="hidden" name="name" value="">
					</div>
					<span style="display: inline-block;margin-top:5px;color:#333;" id="Stock">剩余<?php echo $goods_detail['stock']; ?>件</span>
					<?php if($goods_detail['max_buy'] != '0' AND $goods_detail['max_buy'] != -1): ?>
						<span style="display: inline-block;margin-top:5px;color:#333;">限购<?php echo $goods_detail['max_buy']; ?>件</span>
					<?php endif; ?>
				</li>
			</ul>
			<ul class="s-buy-ul">
				<li class="s-buy-btn">
					<a class="btn" id="submit_ok" tag="addCart">确定</a>
				<input type="hidden" id="hidden_shop_name" value="<?php echo $goods_detail['shop_name']; ?>"/>
				<input type="hidden" id="hidden_shop_id" value="<?php echo $goods_detail['shop_id']; ?>"/>
				</li>
			</ul>
		</section>
		<div class="motify" style="display: none;"><div class="motify-inner">请选择 颜色</div></div>
		<input type="hidden" id="max_buy" value="<?php echo $goods_detail['max_buy']; ?>" />
			<input type="hidden" id="heima_module" value="APP_MAIN" />
<div class="mask joinz-index" id="mask" style="display: block;"></div>
<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
<script type="text/javascript">	
var heima_module = 'APP_MAIN';	
</script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/goods_product.js"></script>