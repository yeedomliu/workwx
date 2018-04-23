<?php

namespace app\models\workwx\message;

class Video extends Base
{

    /**
     * 视频媒体文件id，可以调用上传临时素材接口获取
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

    /**
     * 视频消息的标题，不超过128个字节，超过会自动截断
     *
     * @var string
     */
    protected $title = '';

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Video
     */
    public function setTitle(string $title): Video {
        $this->title = $title;

        return $this;
    }

    /**
     * 视频消息的描述，不超过512个字节，超过会自动截断
     *
     * @var string
     */
    protected $description = '';

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Video
     */
    public function setDescription(string $description): Video {
        $this->description = $description;

        return $this;
    }

    public function getType() {
        return Constant::TYPE_VIDEO;
    }

    public function getTypeContent() {
        return [
            "media_id"    => $this->getMediaId(),
            'title'       => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
    }

}