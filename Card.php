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


    

}