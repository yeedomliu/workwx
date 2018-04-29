<?php

namespace yeedomliu\workwx\common;

use yeedomliu\workwx\Factory;

class AccessToken extends \yeedomliu\workwx\Base
{

    public function url() {
        $config = Factory::getConfig();

        return "gettoken?corpid={$config->corpid}&corpsecret={$config->secret}";
    }


}