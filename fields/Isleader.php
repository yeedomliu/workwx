<?php

namespace yeedomliu\workwx\fields;

trait Isleader
{

    /**
     * 上级字段，标识是否为上级。在审批等应用里可以用来标识上级审批人
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
    public function setIsleader(string $isleader): Isleader {
        $this->isleader = $isleader;

        return $this;
    }


}
