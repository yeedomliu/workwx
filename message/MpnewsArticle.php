<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\Author;
use yeedomliu\workwx\fields\Content;
use yeedomliu\workwx\fields\ContentSourceUrl;
use yeedomliu\workwx\fields\Digest;
use yeedomliu\workwx\fields\ThumbMediaId;
use yeedomliu\workwx\fields\Title;

class MpnewsArticle
{

    use Title, Author, ThumbMediaId, ContentSourceUrl, Content, Digest;

    public function getBody() {
        return [
            'title'              => $this->getTitle(),
            'thumb_media_id'     => $this->getThumbMediaId(),
            'author'             => $this->getAuthor(),
            'content_source_url' => $this->getContentSourceUrl(),
            'content'            => $this->getContent(),
            'digest'             => $this->getDigest(),
        ];
    }


}