<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\MediaId;

class Voice extends Base
{

    use MediaId;

    public function getType() {
        return Constant::TYPE_VOICE;
    }

    public function getTypeContent() {
        return [
            "media_id" => $this->getMediaId(),
        ];
    }

}