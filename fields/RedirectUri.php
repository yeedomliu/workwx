<?php

namespace yeedomliu\workwx\fields;

trait RedirectUri
{

    /**
     * 授权后重定向的回调链接地址，请使用urlencode对链接进行处理
     *
     * @var string
     */
    protected $redirectUri = '';

    /**
     * @return string
     */
    public function getRedirectUri(): string {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     *
     * @return $this
     */
    public function setRedirectUri(string $redirectUri) {
        $this->redirectUri = $redirectUri;

        return $this;
    }


}
