<?php

namespace yeedomliu\workwx\fields;

trait Totag
{

    /**
     * 标签ID列表，多个接收者用‘|’分隔，最多支持100个。当touser为@all时忽略本参数
     *
     * @var string
     */
    protected $totag = '';

    /**
     * @return string
     */
    public function getTotag(): string {
        return $this->totag;
    }

    /**
     * @param string $totag
     *
     * @return $this
     */
    public function setTotag(string $totag) {
        $this->totag = $totag;

        return $this;
    }


}
