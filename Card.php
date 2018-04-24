<?php

namespace yeedomliu\workwx;

/**
 * 电子发票
 *
 * @package yeedomliu\workwx
 */
class Card extends Base
{

    public function detail($cardId, $encryptCode) {
        return ((new Request())->setFields([
                                               'card_id'      => $cardId,
                                               'encrypt_code' => $encryptCode,
                                           ])->setUrl("card/invoice/reimburse/getinvoiceinfo")->setPostMethod()->request());
    }

    /**
     * 获取打卡数据
     *
     * @link https://work.weixin.qq.com/api/doc#11196
     *
     * @param $opencheckindatatype 打卡类型。1：上下班打卡；2：外出打卡；3：全部打卡
     * @param $starttime           获取打卡记录的开始时间。Unix时间戳
     * @param $endtime             获取打卡记录的结束时间。Unix时间戳
     * @param $useridlist          需要获取打卡记录的用户列表
     *                             1.获取记录时间跨度不超过三个月
     *                             2.用户列表不超过100个。若用户超过100个，请分批获取
     *                             3.有打卡记录即可获取打卡数据，与当前”打卡应用”是否开启无关
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