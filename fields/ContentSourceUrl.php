<?php

namespace yeedomliu\workwx\fields;

trait ContentSourceUrl
{

    /**
     * 图文消息点击“阅读原文”之后的页面链接
     *
     * @var string
     */
    protected $contentSourceUrl = '';

    /**
     * @return string
     */
    public function getContentSourceUrl(): string {
        return $this->contentSourceUrl;
    }

    /**
     * @param string $contentSourceUrl
     *
     * @return $this
     */
    public function setContentSourceUrl(string $contentSourceUrl) {
        $this->contentSourceUrl = $contentSourceUrl;

        return $this;
    }


}
