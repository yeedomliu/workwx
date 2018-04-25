<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\Btntxt;
use yeedomliu\workwx\fields\Description;
use yeedomliu\workwx\fields\Picurl;
use yeedomliu\workwx\fields\Title;
use yeedomliu\workwx\fields\Url;

class NewsArticle
{

    use Title, Description, Url, Picurl, Btntxt;

    public function getBody() {
        return [
            'title'       => $this->getTitle(),
            'description' => $this->getDescription(),
            'url'         => $this->getUrl(),
            'picurl'      => $this->getPicurl(),
            'btntxt'      => $this->getBtntxt(),
        ];
    }


}