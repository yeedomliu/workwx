<?php

namespace yeedomliu\workwx\fields;

trait MediaId
{

    /**
     * 媒体文件上传后获取的唯一标识，3天内有效
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
