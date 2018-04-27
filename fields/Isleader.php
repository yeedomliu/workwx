<?php

namespace yeedomliu\workwx\fields;

trait Isleader
{

    /**
     * 上级字段，标识是否为上级。
     *
     * @var string
     */
    protected $isleader = '';

    /**
     * @return string
     */
    public function getIsleader(): string {
        return $this->isleader;
    }

    /**
     * @param string $isleader
     *
     * @return $this
     */
    public function setIsleader(string $isleader) {
        $this->isleader = $isleader;

        return $this;
    }


}
