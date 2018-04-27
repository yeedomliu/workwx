<?php

namespace yeedomliu\workwx\fields;

trait Content
{

    /**
     * 图文消息的内容，支持html标签，不超过666
     *
     * @var string
     */
    protected $content = '';

    /**
     * @return string
     */
    public function getContent(): string {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent(string $content) {
        $this->content = $content;

        return $this;
    }


}
