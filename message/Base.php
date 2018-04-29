<?php

namespace yeedomliu\workwx\message;

use wii\interfaces\Request;
use yeedomliu\workwx\fields\Agentid;
use yeedomliu\workwx\fields\Msgtype;
use yeedomliu\workwx\fields\Safe;
use yeedomliu\workwx\fields\Toparty;
use yeedomliu\workwx\fields\Totag;
use yeedomliu\workwx\fields\Touser;

abstract class Base extends \yeedomliu\workwx\Base
{

    use Touser, Toparty, Totag, Msgtype, Agentid, Safe;

    public function requestHandle(Request $requestObj) {
        return (parent::requestHandle($requestObj))->setJsonEncodeFields(true);
    }


}