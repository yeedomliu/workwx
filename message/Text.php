<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\Content;

class Text extends Base
{

    public function url() {
        return 'message/send';
    }

    use Content;

    public function getType() {
        return Constant::TYPE_TEXT;
    }

    public function getTypeContent() {
        return [
            "content" => $this->getContent(),
        ];
    }

}