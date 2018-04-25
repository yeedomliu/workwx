<?php

namespace yeedomliu\workwx\fields;

trait Url
{

    /**
     * 企业应用接收企业微信推送请求的访问协议和地址，支持http或https协议
     *
     * @var string
     */
    protected $url = '';

    /**
     * @return string
     */
    public function getUrl(): string {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl(string $url): Url {
        $this->url = $url;

        return $this;
    }


}
