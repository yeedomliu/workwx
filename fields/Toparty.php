<?php

namespace yeedomliu\workwx\fields;

trait Toparty
{

    /**
     * 部门ID列表，多个接收者用‘|’分隔，最多支持100个。当touser为@all时忽略本参数
     *
     * @var string
     */
    protected $toparty = '';

    /**
     * @return string
     */
    public function getToparty(): string {
        return $this->toparty;
    }

    /**
     * @param string $toparty
     *
     * @return $this
     */
    public function setToparty(string $toparty): Toparty {
        $this->toparty = $toparty;

        return $this;
    }


}
