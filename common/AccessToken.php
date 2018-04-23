<?php

namespace yeedomliu\workwx\common;

use yeedomliu\workwx\Request;

class AccessToken extends \yeedomliu\workwx\Base
{

    /**
     * @var string
     */
    static protected $accessToken = '';

    public function getToken() {
        if (empty(self::$accessToken)) {
            /**
             * 追加corpid/corpsecret参数
             *
             * @var \yeedomliu\workwx\Config $config
             */
            $config = \Yii::$app->workwxConfig;
            $return = (new Request())->setUrl("gettoken?corpid={$config->corpid}&corpsecret={$config->secret}")->setAppendAccessToken(false)->request();
            if (0 != $return['errcode']) {
                throw new \Exception("获取access token异常[{$return['errmsg']}]");
            }
            self::$accessToken = $return['access_token'];
        }

        return self::$accessToken;
    }

    public function refreshToken() {

    }

}