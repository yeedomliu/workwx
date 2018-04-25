<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\MediaId;

class Image extends Base
{

    use MediaId;

    public function getType() {
        return Constant::TYPE_IMAGE;
    }

    public function getTypeContent() {
        return [
            "media_id" => $this->getMediaId(),
        ];
    }

}