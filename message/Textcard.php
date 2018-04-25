<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\Btntxt;
use yeedomliu\workwx\fields\Description;
use yeedomliu\workwx\fields\Title;
use yeedomliu\workwx\fields\Url;

class Textcard extends Base
{

    use Title, Description, Url, Btntxt;

    public function getType() {
        return Constant::TYPE_TEXTCARD;
    }

    public function getTypeContent() {
        return [
            'title'       => $this->getTitle(),
            'description' => $this->getDescription(),
            'url'         => $this->getUrl(),
            'btntxt'      => $this->getBtntxt(),
        ];
    }

}