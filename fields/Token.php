<?php

namespace yeedomliu\workwx\fields;

trait Token
{

    /**
     * 用于生成签名
     *
     * @var string
     */
    protected $token = '';

    /**
     * @return string
     */
    public function getToken(): string {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken(string $token) {
        $this->token = $token;

        return $this;
    }


}
