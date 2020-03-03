<?php
/**
 * Activity.php
 *
 * Niushop商城系统 - 团队十年电商经验汇集巨献!
 * =========================================================
 * Copy right 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
 * ----------------------------------------------
 * 官方网址: http://www.niushop.com.cn
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : niuteam
 * @date : 2015.4.24
 * @version : v1.0.0.0
 */
namespace data\service;

/**
 * 活动管理
 */
use data\service\BaseService as BaseService;
use data\api\IActivity;
use data\model\NsPlatformActivityModel;
use data\model\NsPlatformActivityDetailModel;
use data\model\NsPlatformFightGroupModel;
use data\model\NsPlatformFightGroupDetailModel;
use data\model\NsPlatformFightGroupRecordModel;
use data\service\Order as OrderService;
use data\model\BaseModel;
class Activity extends BaseService implements IActivity
{
    /**
     * (non-PHPdoc)添加修改平台活动
     * @see \data\api\IActivity::addUpdatePlatformActivity()
     */
    public function addUpdatePlatformActivity($activity_id, $activity_title, $activity_banner, $activity_desc, $activity_start_date, $activity_end_date, $activity_sort, $activity_state){
       $platform_activity_model = new NsPlatformActivityModel();   
       $data = array(
           'activity_title'         => $activity_title,
           'activity_type'          => 1,
           'activity_banner'        => $activity_banner,
           'activity_style'         => 'classical',
           'activity_desc'          => $activity_desc,
           'activity_start_date'    => $activity_start_date,
           'activity_end_date'      => $activity_end_date,
           'activity_sort'          => $activity_sort,
           'activity_state'         => $activity_state
       );
       
       if(empty($activity_id)){
           $platform_activity_model->save($data);
           $activity_id = $platform_activity_model->activity_id;
           
           $platform_service = new Platform();
           $platform_service->addShopNavigationTemplate($activity_title, '/activity/activityCenter?activity_id='.$activity_id, 1, 1);
       }else{
           $platform_activity_model->save($data,['activity_id'=> $activity_id]);
       }
       return $activity_id;
    }
    
    /**
     * (non-PHPdoc)平台活动列表
     * @see \data\api\IActivity::getPlatformActivityList()
     */
    public function getPlatformActivityList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = '*'){
        
        $platform_activity_model = new NsPlatformActivityModel();
        $platform_activity_list = $platform_activity_model->pageQuery($page_index, $page_size, $condition, $order, $field);
        return $platform_activity_list;
    }

    /**
     * 获取平台活动详情
     * @param unknown $activity_id
     * @param string $condition
     */
    function getPlatformActivityInfo($activity_id, $condition = ''){
        
        if(!empty($activity_id)){
            $condition['activity_id'] = $activity_id;
        }
        
        $platform_activity_model = new NsPlatformActivityModel();
        $platform_activity_info = $platform_activity_model->getInfo($condition,'*');
        return $platform_activity_info;
    }

    /**
     * 删除平台活动
     * @param unknown $activity_id
     * @param string $condition
     */
    function delPlatformActivity($activity_ids){
        
        $platform_activity_model = new NsPlatformActivityModel();
        $platform_activity_model->startTrans();
        try {
            $res = $platform_activity_model->destroy(array('in',$activity_ids));
            

            $activity_id_array = explode(',', $activity_ids);
            foreach($activity_id_array as $activity_id){
                
                //删除参与当前活动的商品记录
                $this->delPlatformActivityDetail('',['activity_id'=>$activity_id]);
                
                $platform_service = new Platform();
                $platform_service->delShopNavigationTemplate(0,['template_url'=>'/activity/activityCenter?activity_id='.$activity_id]);
            }
            
            $platform_activity_model->commit();
            return 1;
        } catch (\Exception $e) {
            $platform_activity_model->rollback();
            return $e->getMessage();
        }
    }
    
    
    /**
     * 活动及参加活动商品的状态修改
     * (non-PHPdoc)goods_fight_pricegoods_fight_price
     * @see \data\api\IActivity::setPlatformActivityState()
     */
    public function setPlatformActivityState($activity_id, $state){
    
        $platform_activity_model = new NsPlatformActivityModel();
        $platform_activity_model->startTrans();
        try {
            $platform_activity_model->save(['activity_state'=>$state],['activity_id'=>$activity_id]);
            if($state == 2)
            { //开始
    
                $this->setPlatformActivityDetailState(0, 3,['activity_id'=>$activity_id]);
            }elseif ($state == 3)
            { //结束
    
                $this->setPlatformActivityDetailState(0, 4,['activity_id'=>$activity_id]);
            }
    
            $platform_activity_model->commit();
            return 1;
        } catch (\Exception $e) {
            $platform_activity_model->rollback();
            return $e->getMessage();
        }
    }   
    
    
    

    /**
     * 添加平台活动参加的商品
     * @param unknown $activity_id
     * @param unknown $item_id
     * @param unknown $item_name
     * @param unknown $shop_id
     * @param unknown $shop_name
     */
    function addPlatformActivityDetail($activity_id, $item_id, $item_name, $shop_id, $shop_name){
        
        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $data = array(
            'activity_id'   => $activity_id,
            'item_id'       => $item_id,
            'item_name'     => $item_name,
            'shop_id'       => $shop_id,
            'shop_name'     => $shop_name,
            'activity_detail_state' => 0,
            'activity_detail_sort'  => 255
        );
        $platform_activity_detail_model->save($data);
        return $platform_activity_detail_model->activity_detail_id;
    }

    /**
     * 获取平台活动参加商品列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getPlatformActivityDetailList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = '*'){
        
        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $platform_activity_detail_list = $platform_activity_detail_model->pageQuery($page_index, $page_size, $condition, $order, $field);
        return $platform_activity_detail_list;
    }

    /**
     * (non-PHPdoc)设置平台活动详情状态
     * @see \data\api\IActivity::setPlatformActivityDetailState()
     */
    function setPlatformActivityDetailState($activity_detail_id, $activity_detail_state, $condition = ''){
        
        if(!empty($activity_detail_id)){
            $condition['activity_detail_id'] = $activity_detail_id;
        }
        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $res = $platform_activity_detail_model->save(['activity_detail_state'=>$activity_detail_state], $condition);
        return $res;
    }

    /**
     * 参加平台活动商品数据排序修改
     * @param unknown $activity_detail_id
     * @param unknown $activity_detail_sort
     */
    function setPlatformActivityDetailSort($activity_detail_id, $activity_detail_sort){
        
        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $res = $platform_activity_detail_model->save(['activity_detail_sort'=>$activity_detail_sort],['activity_detail_id'=> $activity_detail_id]);
        return $res;
    }

    /**
     * 删除参加平台活动商品详情数据
     * @param unknown $activity_detail_id
     * @param string $condition
     */
    function delPlatformActivityDetail($activity_detail_ids, $condition = ''){
        
        if(!empty($activity_detail_ids)){
            $condition['activity_detail_id']   = array('in',$activity_detail_ids);
        }
        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $res = $platform_activity_detail_model->destroy($condition);
        return $res;
    }

    /**
     * 批量添加参加平台发起活动的商品
     * @param unknown $goods_ids
     * @param unknown $shop_id
     */
    function addPlatformActivityDetailBatch($activity_id, $goods_ids, $shop_id){
        
        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $platform_activity_detail_model->startTrans();
        try {
            $goods_id_array = explode(',', $goods_ids);
            
            $shop_service = new Shop();
            $shop_info = $shop_service->getShopInfo($shop_id);
            $goods_service = new Goods();
            foreach($goods_id_array as $item_goods_id){
                $goods_info = $goods_service->getGoodsInfo($item_goods_id);
                $this->addPlatformActivityDetail($activity_id, $item_goods_id, $goods_info['goods_name'], $shop_id, $shop_info['shop_name']);
            }
            $platform_activity_detail_model->commit();
            return 1;
        } catch (\Exception $e) {
            $platform_activity_detail_model->rollback();
            return $e->getMessage();
        }
        
    }

    /**
     * 获取本店铺参加指定活动的列表数据
     * @param unknown $activity_id
     * @param unknown $shop_id
     */
    function getShopJoinPlatformActivityList($activity_id, $shop_id){
        
        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $shop_activity_detail_list = $platform_activity_detail_model->getQuery(['activity_id'=>$activity_id,'shop_id'=> $shop_id], '*', '');
        
        return $shop_activity_detail_list;
    }

    /**
     * 获取参与活动的商品
     * @param unknown $activity_id
     */
    function getPlatformActivityGoods($activity_id){

        $platform_activity_detail_model = new NsPlatformActivityDetailModel();
        $platform_activity_datail_list = $platform_activity_detail_model->getQuery(['activity_id'=>$activity_id], '*','activity_detail_sort asc');
        
        $goods_service = new Goods();
        foreach($platform_activity_datail_list as $item){
            $item['goods_info'] = $goods_service->getGoodsInfo($item['item_id']);
            $item['picture_info'] = $goods_service->getGoodsImg($item['item_id']);
        }
        return $platform_activity_datail_list;
    }


}