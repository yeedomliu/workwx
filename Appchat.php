<?php

namespace yeedomliu\workwx;


/**
 * 群聊会话
 *
 * @package yeedomliu\workwx
 */
class Appchat extends Base
{

    public function getList() {
        return ((new Request())->setUrl('agent/list')->request())['agentlist'];
    }

    public function getDetail($agentId = '') {
        empty($agentId) && ($agentId = $this->getList()[0]['agentid']);

        return (new Request())->setUrl("agent/get?agentid={$agentId}")->request();
    }

}