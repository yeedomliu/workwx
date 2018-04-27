<?php

namespace yeedomliu\workwx\fields;

trait User
{

    /**
     * 成员ID列表,
     *
     * @var string
     */
    protected $user = '';

    /**
     * @return string
     */
    public function getUser(): string {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return $this
     */
    public function setUser(string $user) {
        $this->user = $user;

        return $this;
    }


}
