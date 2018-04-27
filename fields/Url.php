<?php

namespace yeedomliu\workwx\fields;

trait Url
{

    /**
     * 点击后跳转的链接。
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
    public function setUrl(string $url) {
        $this->url = $url;

        return $this;
    }


}
