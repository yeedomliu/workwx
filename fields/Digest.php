<?php

namespace yeedomliu\workwx\fields;

trait Digest
{

    /**
     * 图文消息的描述，不超过512个字节，超过会自动截断
     *
     * @var string
     */
    protected $digest = '';

    /**
     * @return string
     */
    public function getDigest(): string {
        return $this->digest;
    }

    /**
     * @param string $digest
     *
     * @return $this
     */
    public function setDigest(string $digest): Digest {
        $this->digest = $digest;

        return $this;
    }


}
