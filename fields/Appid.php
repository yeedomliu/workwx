<?php

namespace yeedomliu\workwx\fields;

trait Appid
{

    /**
     * 企业的CorpID
     *
     * @var string
     */
    protected $appid = '';

    /**
     * @return string
     */
    public function getAppid(): string {
        return $this->appid;
    }

    /**
     * @param string $appid
     *
     * @return $this
     */
    public function setAppid(string $appid) {
        $this->appid = $appid;

        return $this;
    }


}
