<?php

namespace yeedomliu\workwx\fields;

trait Touser
{

    /**
     * 成员ID列表（消息接收者，多个接收者用‘|’分隔，最多支持1000个）。特殊情况：指定为@all，则向该企业应用的全部成员发送
     *
     * @var string
     */
    protected $touser = '';

    /**
     * @return string
     */
    public function getTouser(): string {
        return $this->touser;
    }

    /**
     * @param string $touser
     *
     * @return $this
     */
    public function setTouser(string $touser) {
        $this->touser = $touser;

        return $this;
    }


}
