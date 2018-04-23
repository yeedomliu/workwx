<?php

namespace yeedomliu\workwx\message;

class MpnewsArticle
{

    /**
     * 标题，不超过128个字节，超过会自动截断
     *
     * @var string
     */
    protected $title = '';

    /**
     * 图文消息缩略图的media_id, 可以通过素材管理接口获得。此处thumb_media_id即上传接口返回的media_id
     *
     * @var string
     */
    protected $thumbMediaId = '';

    /**
     * 图文消息的作者，不超过64个字节
     *
     * @var string
     */
    protected $author = '';

    /**
     * 图文消息点击“阅读原文”之后的页面链接
     *
     * @var string
     */
    protected $contentSourceUrl = '';

    /**
     * 图文消息的内容，支持html标签，不超过666 K个字节
     *
     * @var string
     */
    protected $content = '';

    /**
     * 图文消息的描述，不超过512个字节，超过会自动截断
     *
     * @var string
     */
    protected $digest = '';

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return MpnewsArticle
     */
    public function setTitle(string $title): MpnewsArticle {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbMediaId(): string {
        return $this->thumbMediaId;
    }

    /**
     * @param string $thumbMediaId
     *
     * @return MpnewsArticle
     */
    public function setThumbMediaId(string $thumbMediaId): MpnewsArticle {
        $this->thumbMediaId = $thumbMediaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string {
        return $this->author;
    }

    /**
     * @param string $author
     *
     * @return MpnewsArticle
     */
    public function setAuthor(string $author): MpnewsArticle {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentSourceUrl(): string {
        return $this->contentSourceUrl;
    }

    /**
     * @param string $contentSourceUrl
     *
     * @return MpnewsArticle
     */
    public function setContentSourceUrl(string $contentSourceUrl): MpnewsArticle {
        $this->contentSourceUrl = $contentSourceUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return MpnewsArticle
     */
    public function setContent(string $content): MpnewsArticle {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getDigest(): string {
        return $this->digest;
    }

    /**
     * @param string $digest
     *
     * @return MpnewsArticle
     */
    public function setDigest(string $digest): MpnewsArticle {
        $this->digest = $digest;

        return $this;
    }

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