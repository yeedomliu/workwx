<?php

namespace yeedomliu\workwx\fields;

trait Userlist
{

    /**
     * 群成员id列表。至少2人，至多500人
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
    public function setUserlist(string $userlist) {
        $this->userlist = $userlist;

        return $this;
    }


}
