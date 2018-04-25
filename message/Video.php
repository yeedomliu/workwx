<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\Description;
use yeedomliu\workwx\fields\MediaId;
use yeedomliu\workwx\fields\Title;

class Video extends Base
{

    use MediaId, Title, Description;

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