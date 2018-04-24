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
     * 发票卡券的card_id
     *
     * @var string
     */
    protected $cardId = '';

    /**
     * 发票卡券的加密code，和card_id共同构成一张发票卡券的唯一标识
     *
     * @var string
     */
    protected $encryptCode = '';

    /**
     * @return string
     */
    public function getCardId() {
        return $this->cardId;
    }

    /**
     * @param string $cardId
     *
     * @return Card
     */
    public function setCardId($cardId) {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptCode() {
        return $this->encryptCode;
    }

    /**
     * @param string $encryptCode
     *
     * @return Card
     */
    public function setEncryptCode($encryptCode) {
        $this->encryptCode = $encryptCode;

        return $this;
    }

    /**
     * 执行请求
     *
     * @param       $url
     * @param array $fields
     *
     * @return mixed
     */
    public function request($url, $fields = []) {
        $fields = array_merge($fields, [
            'card_id'      => $this->getCardId(),
            'encrypt_code' => $this->getEncryptCode(),
        ]);

        return ((new Request())->setFields($fields)->setUrl($url)->setPostMethod()->request());
    }

    /**
     * 查询电子发票
     *
     * @link https://work.weixin.qq.com/api/doc#11631
     *
     * @return mixed
     */
    public function detail() {
        return $this->request('card/invoice/reimburse/getinvoiceinfo');
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
     * @param $reimburseStatus 发报销状态 INVOICE_REIMBURSE_INIT：发票初始状态，未锁定；INVOICE_REIMBURSE_LOCK：发票已锁定，无法重复提交报销;INVOICE_REIMBURSE_CLOSURE:发票已核销，从用户卡包中移除
     *
     * @return mixed
     */
    public function update($reimburseStatus) {
        return $this->request('card/invoice/reimburse/updateinvoicestatus', ['reimburse_status' => $reimburseStatus]);
    }

    /**
     * 批量更新发票状态
     *
     * @link https://work.weixin.qq.com/api/doc#11634
     *
     * @param $openid           用户openid，可用“userid与openid互换接口”获取
     * @param $reimburse_status 发报销状态 INVOICE_REIMBURSE_INIT：发票初始状态，未锁定；INVOICE_REIMBURSE_LOCK：发票已锁定，无法重复提交报销;INVOICE_REIMBURSE_CLOSURE:发票已核销，从用户卡包中移除
     * @param $invoice_list     发票列表，必须全部属于同一个openid
     *
     * @return mixed
     */
    public function batchUpdate($openid, $reimburse_status, $invoice_list) {
        return $this->request("card/invoice/reimburse/updateinvoicestatus", [
            'openid'           => $openid,
            'reimburse_status' => $reimburse_status,
            'invoice_list'     => $invoice_list,
        ]);
    }

    /**
     * 批量查询电子发票
     *
     * @link https://work.weixin.qq.com/api/doc#11974
     *
     * @param $itemList 发票列表
     *
     * @return mixed
     */
    public function batchDetail($itemList) {
        return $this->request("card/invoice/reimburse/getinvoiceinfobatch", [
            'item_list	' => $itemList,
        ]);
    }


}