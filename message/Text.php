<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\Content;

class Text extends Base
{

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