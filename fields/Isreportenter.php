<?php

namespace yeedomliu\workwx\fields;

trait Isreportenter
{

    /**
     * 是否上报用户进入应用事件。0：不接收；1：接收。
     *
     * @var string
     */
    protected $isreportenter = '';

    /**
     * @return string
     */
    public function getIsreportenter(): string {
        return $this->isreportenter;
    }

    /**
     * @param string $isreportenter
     *
     * @return $this
     */
    public function setIsreportenter(string $isreportenter): Isreportenter {
        $this->isreportenter = $isreportenter;

        return $this;
    }


}
