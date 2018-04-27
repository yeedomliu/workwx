<?php

namespace yeedomliu\workwx\fields;

trait Enable
{

    /**
     * 启用/禁用成员。1表示启用成员，0表示禁用成员
     *
     * @var string
     */
    protected $enable = '';

    /**
     * @return string
     */
    public function getEnable(): string {
        return $this->enable;
    }

    /**
     * @param string $enable
     *
     * @return $this
     */
    public function setEnable(string $enable) {
        $this->enable = $enable;

        return $this;
    }


}
