<?php

namespace yeedomliu\workwx\fields;

trait Useridlist
{

    /**
     * 成员UserID列表。对应管理端的帐号。最多支持200个。若存在无效UserID，直接返回错误
     *
     * @var string
     */
    protected $useridlist = '';

    /**
     * @return string
     */
    public function getUseridlist(): string {
        return $this->useridlist;
    }

    /**
     * @param string $useridlist
     *
     * @return $this
     */
    public function setUseridlist(string $useridlist) {
        $this->useridlist = $useridlist;

        return $this;
    }


}
