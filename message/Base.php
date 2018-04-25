<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\adapter\Config;
use yeedomliu\workwx\Factory;
use yeedomliu\workwx\fields\Agentid;
use yeedomliu\workwx\fields\Chatid;
use yeedomliu\workwx\fields\Msgtype;
use yeedomliu\workwx\fields\Safe;
use yeedomliu\workwx\fields\Toparty;
use yeedomliu\workwx\fields\Totag;
use yeedomliu\workwx\fields\Touser;

abstract class Base extends \yeedomliu\workwx\Base
{

    use Touser, Toparty, Totag, Msgtype, Agentid, Safe, Chatid;

    /**
     * 获取类型
     *
     * @return mixed
     */
    abstract public function getType();

    /**
     * 获取类型内容
     *
     * @return mixed
     */
    abstract public function getTypeContent();

    /**
     * 获取请求体json
     *
     * @return string
     */
    public function getBody($jsonEncode = true) {
        $return = [
            'touser'         => $this->getTouser(),
            'toparty'        => $this->getToparty(),
            'totag'          => $this->getTotag(),
            'msgtype'        => $this->getType(),
            'agentid'        => $this->getAgentid(),
            'safe'           => $this->getSafe(),
            $this->getType() => $this->getTypeContent(),
        ];
        if ($this->getChatId()) {
            $return['chatid'] = $this->getChatId();
        }

        return $jsonEncode ? json_encode($return) : $return;
    }

}