<?php

namespace yeedomliu\workwx\fields;

trait Email
{

    /**
     * 邮箱。长度不超过64个字节，且为有效的email格式。企业内必须唯一
     *
     * @var string
     */
    protected $email = '';

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email) {
        $this->email = $email;

        return $this;
    }


}
