<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\MediaId;

class File extends Base
{

    use MediaId;

    public function getType() {
        return Constant::TYPE_FILE;
    }

    public function getTypeContent() {
        return [
            "media_id" => $this->getMediaId(),
        ];
    }

}