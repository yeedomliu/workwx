<?php

namespace yeedomliu\workwx\fields;

trait Encodingaeskey
{

    /**
     * 用于消息体的加密，是AES密钥的Base64编码
     *
     * @var string
     */
    protected $encodingaeskey = '';

    /**
     * @return string
     */
    public function getEncodingaeskey(): string {
        return $this->encodingaeskey;
    }

    /**
     * @param string $encodingaeskey
     *
     * @return $this
     */
    public function setEncodingaeskey(string $encodingaeskey): Encodingaeskey {
        $this->encodingaeskey = $encodingaeskey;

        return $this;
    }


}
