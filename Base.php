<?php

namespace yeedomliu\workwx;

use yeedomliu\workwx\fieldstyle\LcfirstCamelize;

class Base extends \wii\interfaces\Base
{

    public function requestPrefix() {
        return 'https://qyapi.weixin.qq.com/cgi-bin/';
    }

    public function getFieldNameHandleObj() {
        return new LcfirstCamelize();
    }

}