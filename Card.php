<?php

namespace yeedomliu\workwx;

/**
 * 电子发票
 *
 * @package yeedomliu\workwx
 */
class Card extends Base
{

    /**
     * 查询电子发票
     *
     * @link https://work.weixin.qq.com/api/doc#11631
     *
     * @param $cardId      发票id
     * @param $encryptCode 加密code
     *
     * @return mixed
     */
    public function detail($cardId, $encryptCode) {
        return ((new Request())->setFields([
                                               'card_id'      => $cardId,
                                               'encrypt_code' => $encryptCode,
                                           ])->setUrl("card/invoice/reimburse/getinvoiceinfo")->setPostMethod()->request());
    }

    /**
     * 发票初始状态，未锁定
     */
    const STATUS_INIT = 'INVOICE_REIMBURSE_INIT';

    /**
     * 发票已锁定，无法重复提交报销
     */
    const STATUS_LOCK = 'INVOICE_REIMBURSE_LOCK';

    /**
     * 发票已核销，从用户卡包中移除
     */
    const STATUS_CLOSURE = 'INVOICE_REIMBURSE_CLOSURE';

    /**
     * 更新发票状态
     *
     * @link https://work.weixin.qq.com/api/doc#11633
     *
     * @param $cardId          发票id
     * @param $encryptCode     加密code
     * @param $reimburseStatus 发报销状态 INVOICE_REIMBURSE_INIT：发票初始状态，未锁定；INVOICE_REIMBURSE_LOCK：发票已锁定，无法重复提交报销;INVOICE_REIMBURSE_CLOSURE:发票已核销，从用户卡包中移除
     *
     * @return mixed
     */
    public function update($cardId, $encryptCode, $reimburseStatus) {
        return ((new Request())->setFields([
                                               'card_id'          => $cardId,
                                               'encrypt_code'     => $encryptCode,
                                               'reimburse_status' => $reimburseStatus,
                                           ])->setUrl("card/invoice/reimburse/updateinvoicestatus")->setPostMethod()->request());
    }

    public function batchUpdate($openid, ) {
        return ((new Request())->setFields([
                                               'card_id'          => $cardId,
                                               'encrypt_code'     => $encryptCode,
                                               'reimburse_status' => $reimburseStatus,
                                           ])->setUrl("card/invoice/reimburse/updateinvoicestatus")->setPostMethod()->request());
    }




}