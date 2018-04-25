<?php

namespace yeedomliu\workwx\fields;

trait Userlist
{

    /**
     * 企业成员ID列表，注意：userlist、partylist不能同时为空，单次请求长度不超过1000
     *
     * @var string
     */
    protected $userlist = '';

    /**
     * @return string
     */
    public function getUserlist(): string {
        return $this->userlist;
    }

    /**
     * @param string $userlist
     *
     * @return $this
     */
    public function setUserlist(string $userlist): Userlist {
        $this->userlist = $userlist;

        return $this;
    }


}
