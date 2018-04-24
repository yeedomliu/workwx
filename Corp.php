<?php

namespace yeedomliu\workwx;

/**
 * Class Corp
 *
 * 通过本接口来获取公司一段时间内的审批记录。一次拉取调用最多拉取10000个审批记录，可以通过多次拉取的方式来满足需求。
 *
 * @package yeedomliu\workwx
 */
class Corp extends Base
{


    /**
     * 获取审批数据
     *
     * @link https://work.weixin.qq.com/api/doc#11228
     *
     * @param $starttime 获取审批记录的开始时间。Unix时间戳
     * @param $endtime   获取审批记录的结束时间。Unix时间戳
     * @param $nextSpnum 第一个拉取的审批单号，不填从该时间段的第一个审批单拉取
     *
     * @return mixed
     */
    public function getData($starttime, $endtime, $nextSpnum) {
        return ((new Request())->setFields([
                                               'starttime'  => $starttime,
                                               'endtime'    => $endtime,
                                               'next_spnum' => $nextSpnum,
                                           ])->setUrl("corp/getapprovaldata")->setPostMethod()->request());
    }

}