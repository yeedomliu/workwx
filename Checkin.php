<?php

namespace yeedomliu\workwx;

class Checkin extends Base
{

    /**
     * 获取打卡规则
     *
     * @link https://work.weixin.qq.com/api/doc#12423
     *
     * @param $datetime   需要获取规则的日期当天0点的Unix时间戳
     * @param $useridlist 需要获取打卡规则的用户列表
     *                    1.用户列表不超过100个，若用户超过100个，请分批获取。
     *                    2.用户在不同日期的规则不一定相同，请按天获取。
     *
     * @return mixed
     */
    public function getOption($datetime, $useridlist) {
        return ((new Request())->setFields([
                                               'datetime'   => $datetime,
                                               'useridlist' => $useridlist,
                                           ])->setUrl("checkin/getcheckinoption")->setPostMethod()->request());
    }

    /**
     * 
     * @link https://work.weixin.qq.com/api/doc#11196
     *
     * @param $opencheckindatatype
     * @param $starttime
     * @param $endtime
     * @param $useridlist
     *
     * @return mixed
     */
    public function getData($opencheckindatatype, $starttime, $endtime, $useridlist) {
        return ((new Request())->setFields([
                                               'opencheckindatatype' => $opencheckindatatype,
                                               'starttime'           => $starttime,
                                               'endtime'             => $endtime,
                                               'useridlist'          => $useridlist,
                                           ])->setUrl("checkin/getcheckindata")->setPostMethod()->request());
    }

}