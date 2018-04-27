<?php

namespace yeedomliu\workwx\fields;

trait State
{

    /**
     * 重定向后会带上state参数，企业可以填写a-zA-Z0-9的参数值，长度不可超过128个字节
     *
     * @var string
     */
    protected $state = '';

    /**
     * @return string
     */
    public function getState(): string {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState(string $state) {
        $this->state = $state;

        return $this;
    }


}
