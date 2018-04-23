<?php

namespace yeedomliu\workwx;


class Agent extends Base
{

    public function getList() {
        return ((new Request())->setUrl('agent/list')->request())['agentlist'];
    }

    public function getDetail($agentId = '') {
        empty($agentId) && ($agentId = $this->getList()[0]['agentid']);

        return (new Request())->setUrl("agent/get?agentid={$agentId}")->request();
    }

}