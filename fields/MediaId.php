<?php

namespace yeedomliu\workwx\fields;

trait MediaId
{

    /**
     * 上传的csv文件的media_id
     *
     * @var string
     */
    protected $mediaId = '';

    /**
     * @return string
     */
    public function getMediaId(): string {
        return $this->mediaId;
    }

    /**
     * @param string $mediaId
     *
     * @return $this
     */
    public function setMediaId(string $mediaId): MediaId {
        $this->mediaId = $mediaId;

        return $this;
    }


}
