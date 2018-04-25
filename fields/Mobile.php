<?php

namespace yeedomliu\workwx\fields;

trait Mobile
{

    /**
     * 手机号码。企业内必须唯一，mobile/email二者不能同时为空
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
    public function setMobile(string $mobile): Mobile {
        $this->mobile = $mobile;

        return $this;
    }


}
