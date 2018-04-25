<?php

namespace yeedomliu\workwx\fields;

trait Picurl
{

    /**
     * 图文消息的图片链接，支持JPG、PNG格式，较好的效果为大图640320，小图8080。
     *
     * @var string
     */
    protected $picurl = '';

    /**
     * @return string
     */
    public function getPicurl(): string {
        return $this->picurl;
    }

    /**
     * @param string $picurl
     *
     * @return $this
     */
    public function setPicurl(string $picurl): Picurl {
        $this->picurl = $picurl;

        return $this;
    }


}
