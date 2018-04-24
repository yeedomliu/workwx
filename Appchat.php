<?php

namespace yeedomliu\workwx;


/**
 * 群聊会话
 *
 * @package yeedomliu\workwx
 */
class Appchat extends Base
{

    public function create($fields) {
        return ((new Request())->setUrl("appchat/create")->setPostMethod()->setFields($fields)->request());
    }

    public function update($fields) {
        return ((new Request())->setUrl("appchat/update")->setPostMethod()->setFields($fields)->request());
    }

    public function detail($chatId) {
        return ((new Request())->setUrl("appchat/get")->setGetMethod()->setFields(['chatid' => $chatId])->request());
    }

}