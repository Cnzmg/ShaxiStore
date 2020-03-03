<?php
/**
 * IActivity.php
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
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\api;

/**
 * 活动接口
 */
interface IActivity
{
    /**
     * 平台添加修改活动
     * @param unknown $activity_title
     * @param unknown $activity_type
     * @param unknown $activity_banner
     * @param unknown $activity_style
     * @param unknown $activity_desc
     * @param unknown $activity_start_date
     * @param unknown $activity_end_date
     * @param unknown $activity_sort
     * @param unknown $activity_state
     */
    function addUpdatePlatformActivity($activity_id, $activity_title, $activity_banner, $activity_desc, $activity_start_date, $activity_end_date, $activity_sort, $activity_state);
    
    /**
     * 平台活动列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getPlatformActivityList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = '*');
    
    /**
     * 获取平台活动详情
     * @param unknown $activity_id
     * @param string $condition
     */
    function getPlatformActivityInfo($activity_id, $condition = '');
    
    /**
     * 删除平台活动
     * @param unknown $activity_id
     * @param string $condition
     */
    function delPlatformActivity($activity_ids);
    
    
    /**
     * 添加平台活动参加的商品
     * @param unknown $activity_id
     * @param unknown $item_id
     * @param unknown $item_name
     * @param unknown $shop_id
     * @param unknown $shop_name
     */
    function addPlatformActivityDetail($activity_id, $item_id, $item_name, $shop_id, $shop_name);
    
    /**
     * 获取平台活动参加商品列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getPlatformActivityDetailList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = '*');
    
    /**
     * 参加平台活动商品数据状态修改
     * @param unknown $activity_detail_id
     * @param unknown $activity_detail_state  活动状态 0为关闭 1为开启 2开始 3结束
     */
    function setPlatformActivityDetailState($activity_detail_id, $activity_detail_state, $condition = '');
    
    /**
     * 参加平台活动商品数据排序修改
     * @param unknown $activity_detail_id
     * @param unknown $activity_detail_sort
     */
    function setPlatformActivityDetailSort($activity_detail_id, $activity_detail_sort);
    
    /**
     * 删除参加平台活动商品详情数据
     * @param unknown $activity_detail_id
     * @param string $condition
     */
    function delPlatformActivityDetail($activity_detail_ids, $condition = '');
    
    /**
     * 批量添加参加平台发起活动的商品
     * @param unknown $goods_ids
     * @param unknown $shop_id
     */
    function addPlatformActivityDetailBatch($activity_id, $goods_ids, $shop_id);
    
    /**
     * 获取本店铺参加指定活动的列表数据
     * @param unknown $activity_id
     * @param unknown $shop_id
     */
    function getShopJoinPlatformActivityList($activity_id, $shop_id);
    
    /**
     * 获取参与活动的商品
     * @param unknown $activity_id
     */
    function getPlatformActivityGoods($activity_id);
  
    /**
     * 活动及参加活动商品的状态修改
     * @param unknown $group_id
     * @param unknown $state
     */
    function setPlatformActivityState($activity_id, $state);
    
    
    
}
