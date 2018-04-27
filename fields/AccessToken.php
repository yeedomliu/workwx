<?php

namespace yeedomliu\workwx\fields;

trait AccessToken
{

    /**
     * 调用接口凭证
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * @return string
     */
    public function getAccessToken(): string {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     *
     * @return $this
     */
    public function setAccessToken(string $accessToken) {
        $this->accessToken = $accessToken;

        return $this;
    }


}
