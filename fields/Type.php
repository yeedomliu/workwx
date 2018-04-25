<?php

namespace yeedomliu\workwx\fields;

trait Type
{

    /**
     * 媒体文件类型，分别有图片（image）、语音（voice）、视频（video），普通文件（file）
     *
     * @var string
     */
    protected $type = '';

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type): Type {
        $this->type = $type;

        return $this;
    }


}
