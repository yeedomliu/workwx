<?php

namespace yeedomliu\workwx\fields;

trait HomeUrl
{

    /**
     * 应用主页url。url必须以http或者https开头。
     *
     * @var string
     */
    protected $homeUrl = '';

    /**
     * @return string
     */
    public function getHomeUrl(): string {
        return $this->homeUrl;
    }

    /**
     * @param string $homeUrl
     *
     * @return $this
     */
    public function setHomeUrl(string $homeUrl) {
        $this->homeUrl = $homeUrl;

        return $this;
    }


}
