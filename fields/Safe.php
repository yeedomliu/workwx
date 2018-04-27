<?php

namespace yeedomliu\workwx\fields;

trait Safe
{

    /**
     * 表示是否是保密消息，0表示否，1表示是，默认0
     *
     * @var string
     */
    protected $safe = '';

    /**
     * @return string
     */
    public function getSafe(): string {
        return $this->safe;
    }

    /**
     * @param string $safe
     *
     * @return $this
     */
    public function setSafe(string $safe) {
        $this->safe = $safe;

        return $this;
    }


}
