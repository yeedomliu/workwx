<?php

namespace yeedomliu\workwx\message;

class Voice extends Base
{

    /**
     * 语音文件id，可以调用上传临时素材接口获取
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
     * @return Image
     */
    public function setMediaId(string $mediaId): Image {
        $this->mediaId = $mediaId;

        return $this;
    }

    public function getType() {
        return Constant::TYPE_VOICE;
    }

    public function getTypeContent() {
        return [
            "media_id" => $this->getMediaId(),
        ];
    }

}