<?php

namespace yeedomliu\workwx\fields;

trait Userid
{

    /**
     * 成员UserID。对应管理端的帐号，企业内必须唯一。不区分大小写，长度为1~64个字节
     *
     * @var string
     */
    protected $userid = '';

    /**
     * @return string
     */
    public function getUserid(): string {
        return $this->userid;
    }

    /**
     * @param string $userid
     *
     * @return $this
     */
    public function setUserid(string $userid) {
        $this->userid = $userid;

        return $this;
    }


}
