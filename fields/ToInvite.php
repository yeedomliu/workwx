<?php

namespace yeedomliu\workwx\fields;

trait ToInvite
{

    /**
     * 是否邀请新建的成员使用企业微信（将通过微信服务通知或短信或邮件下发邀请，每天自动下发一次，最多持续3个工作日），默认值为true。
     *
     * @var string
     */
    protected $toInvite = '';

    /**
     * @return string
     */
    public function getToInvite(): string {
        return $this->toInvite;
    }

    /**
     * @param string $toInvite
     *
     * @return $this
     */
    public function setToInvite(string $toInvite) {
        $this->toInvite = $toInvite;

        return $this;
    }


}
