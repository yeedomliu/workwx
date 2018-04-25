<?php

namespace yeedomliu\workwx\fields;

trait Extattr
{

    /**
     * 自定义字段。自定义字段需要先在WEB管理端添加，见扩展属性添加方法，否则忽略未知属性的赋值。自定义字段长度为0~32个字符，超过将被截断
     *
     * @var string
     */
    protected $extattr = '';

    /**
     * @return string
     */
    public function getExtattr(): string {
        return $this->extattr;
    }

    /**
     * @param string $extattr
     *
     * @return $this
     */
    public function setExtattr(string $extattr): Extattr {
        $this->extattr = $extattr;

        return $this;
    }


}
