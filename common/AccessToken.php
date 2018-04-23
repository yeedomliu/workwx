<?php

namespace app\models\workwx\common;

use app\models\workwx\Base;

class AccessToken extends Base
{

    /**
     * @var string
     */
    static protected $accessToken = '';

    public function getToken() {
        if (empty(self::$accessToken)) {
            // 追加corpid/corpsecret参数
            $config = \Wii::app()->workwxConfig;
            $return = \Wii::app()->workwxRequest->setUrl("gettoken?corpid={$config->corpid}&corpsecret={$config->secret}")->setAppendAccessToken(false)->request();
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