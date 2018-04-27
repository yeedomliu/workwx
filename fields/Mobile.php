<?php

namespace yeedomliu\workwx\fields;

trait Mobile
{

    /**
     * 手机号码。企业内必须唯一。若成员已激活企业微信，则需成员自行修改（此情况下该参数被忽略，但不会报错）
     *
     * @var string
     */
    protected $mobile = '';

    /**
     * @return string
     */
    public function getMobile(): string {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile(string $mobile) {
        $this->mobile = $mobile;

        return $this;
    }


}
