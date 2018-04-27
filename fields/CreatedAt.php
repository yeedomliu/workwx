<?php

namespace yeedomliu\workwx\fields;

trait CreatedAt
{

    /**
     * 媒体文件上传时间戳
     *
     * @var string
     */
    protected $createdAt = '';

    /**
     * @return string
     */
    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(string $createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }


}
