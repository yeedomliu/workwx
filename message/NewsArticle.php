<?php

namespace yeedomliu\workwx\message;

class NewsArticle
{


    /**
     * 标题，不超过128个字节，超过会自动截断
     *
     * @var string
     */
    protected $title = '';

    /**
     * 描述，不超过512个字节，超过会自动截断
     *
     * @var string
     */
    protected $description = '';

    /**
     * 点击后跳转的链接。
     *
     * @var string
     */
    protected $url = '';

    /**
     * 图文消息的图片链接，支持JPG、PNG格式，较好的效果为大图640320，小图8080。
     *
     * @var string
     */
    protected $picurl = '';

    /**
     * 按钮文字，仅在图文数为1条时才生效。 默认为“阅读全文”， 不超过4个文字，超过自动截断。该设置只在企业微信上生效，微信插件上不生效。
     *
     * @var string
     */
    protected $btntxt = '';

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return NewsArticle
     */
    public function setTitle(string $title): NewsArticle {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return NewsArticle
     */
    public function setDescription(string $description): NewsArticle {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return NewsArticle
     */
    public function setUrl(string $url): NewsArticle {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getPicurl(): string {
        return $this->picurl;
    }

    /**
     * @param string $picurl
     *
     * @return NewsArticle
     */
    public function setPicurl(string $picurl): NewsArticle {
        $this->picurl = $picurl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBtntxt(): string {
        return $this->btntxt;
    }

    /**
     * @param string $btntxt
     *
     * @return NewsArticle
     */
    public function setBtntxt(string $btntxt): NewsArticle {
        $this->btntxt = $btntxt;

        return $this;
    }

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