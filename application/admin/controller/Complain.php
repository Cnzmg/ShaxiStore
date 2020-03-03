<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 12:08
 */

namespace app\admin\controller;


use data\service\Manage as ManageService;
use data\service\Goods as GoodsService;
use data\service\User as UserService;
/*
 * 后台投诉管理
 */
class Complain extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    //投诉列表
    public  function  ajaxComplainList()
    {
        if (request()->isAjax()) {
            $complain = new ManageService();
            $shop_id = request()->post('shop_id','');
            $pageIndex = request()->post('pageIndex','');
            $complain_subject = request()->post('complain_subject','');
            $start_date = request()->post('start_date') == '' ? 0 : getTimeTurnTimeStamp(request()->post('start_date'));
            $end_date = request()->post('end_date') == '' ? time() : getTimeTurnTimeStamp(request()->post('end_date'));
            $complain_state = request()->post('complain_state','');
            $condition["complain_datetime"] = [[">",$start_date],["<",$end_date]];


            if (! empty($complain_subject))
            {
                  $condition["complain_subject_content"] = array("like","%" . $complain_subject . "%");
            }
            if (! empty($complain_state))
            {
                 $condition["complain_state"] = $complain_state;
            }
            if (! empty($shop_id))
            {
                $condition["accused_shop_id"] = $shop_id;
            }

            $complainNewList = $complain->getComplainList($pageIndex, PAGESIZE, $condition, "complain_datetime desc");
             $goods = new GoodsService();
             foreach($complainNewList['data'] as $k=>$v) {
                 $goods_id = $v['order_goods_id'];
                 $goodsDetail = $goods->getGoodsDetail($goods_id);

                 $complainNewList['data'][$k]['goods_name'] = $goodsDetail['goods_name'];

             }
            return $complainNewList;
        }

    }



    //投诉列表
    public function complainList()
    {
        $complain = new ManageService();
        $complainSubject = $complain->getComplainSubjectList();
        $this->assign('complainSubject',$complainSubject['data']);
        $shop_id = $this->instance_id;
        $this->assign('shop_id',$shop_id);
        return view($this->style . "Complain/complainList");


    }

    //添加申诉
    public function addComplainApply()
    {

        $complain = new ManageService();
        if(request()->isAjax()){
          $compalin_id = request()->post('complain_id','');
          $appeal_message = request()->post('appeal_message','');
          $appeal_pic1 = request()->post('appeal_pic1','');
          $appeal_pic2 = request()->post('appeal_pic2','');
          $appeal_pic3 = request()->post('appeal_pic3','');
          $res = $complain->addComplainAppeal($compalin_id,$appeal_message,$appeal_pic1,$appeal_pic2,$appeal_pic3);
          return AjaxReturn($res);
        }
        $compalin_id = request()->get('complain_id','');
        $complainInfo = $complain->getComplainInfo($compalin_id);
//        var_dump($complainInfo);die;
        $this->assign('complainInfo',$complainInfo);
        return view($this->style . "Complain/addComplainApply");

    }

    //对话中
    public function setcomplainTalk()
    {
        if(request()->isAjax()){
            $complain = new ManageService();
            $complain_id = request()->post('complain_id','');
            $complainTalk = $complain->setComplainTalk($complain_id);
            return AjaxReturn($complainTalk);
        }
    }

    //查看投诉详情
    public function complainDetail()
    {
        $complain = new ManageService();
        $compalin_id = request()->get('complain_id','');
        $complainInfo = $complain->getComplainInfo($compalin_id);
//        var_dump($complainInfo);die;
        $this->assign('complainInfo',$complainInfo);
        return view($this->style . "Complain/complainDetail");
    }


    //获取投诉对话
    public function getComplainTalk()
    {

//        $complain = new ManageService();
        if(request()->isAjax()){
            $complain = new ManageService();
            $complain_id = request()->post('complain_id','');
            $complainTalk = $complain->getComplainTalkList($complain_id);
            return $complainTalk;
        }

//        $complain_id = request()->get('complain_id','');
//        $complainInfo = $complain->getComplainInfo($complain_id);
//        $this->assign('complainTalk',$complainTalk);
//        var_dump($complainInfo);die;
//        $this->assign('complainInfo',$complainInfo);
//        return view($this->style . "Complain/complainDetail");
    }

    //发布投诉对话
    public function publishComplainTalk()
    {
        $complain = new ManageService();
        $user = new UserService();
        $talk_uid = $this->uid;
        $useInfo = $user->getUserInfoByUid($talk_uid);
        $userName = $useInfo['user_name'];
//        var_dump($userName);die;
        $complain_id = request()->post('complain_id','');
        $complain_talk = request()->post('complain_talk','');
        $res = $complain->addComplainTalk($complain_id,$talk_uid,$userName,2,$complain_talk);
        return AjaxReturn($res);
//        $complainInfo = $complain->getComplainInfo($complain_id);
//        $complainTalk = $complain->getComplainTalkList($complain_id);
//        $this->assign('complainTalk',$complainTalk);
//        var_dump($complainInfo);die;
//        $this->assign('complainInfo',$complainInfo);
        //return view($this->style . "Complain/complainDetail");
    }

    //提交仲裁
    public function complainHandle()
    {

        //setComplainArbitation
        if(request()->isAjax()){
            $complain = new ManageService();
            $complain_id = request()->post('complain_id','');
            $complainHand = $complain->setComplainArbitation($complain_id);
            return AjaxReturn($complainHand);
        }
    }
}