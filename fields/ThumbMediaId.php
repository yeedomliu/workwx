<?php

namespace yeedomliu\workwx\fields;

trait ThumbMediaId
{

    /**
     * 图文消息缩略图的media_id,
     *
     * @var string
     */
    protected $thumbMediaId = '';

    /**
     * @return string
     */
    public function getThumbMediaId(): string {
        return $this->thumbMediaId;
    }

    /**
     * @param string $thumbMediaId
     *
     * @return $this
     */
    public function setThumbMediaId(string $thumbMediaId) {
        $this->thumbMediaId = $thumbMediaId;

        return $this;
    }


}
