<?php

namespace app\models\workwx\message;

class Textcard extends Base
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
     * 按钮文字。 默认为“详情”， 不超过4个文字，超过自动截断。
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
     * @return Textcard
     */
    public function setTitle(string $title): Textcard {
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
     * @return Textcard
     */
    public function setDescription(string $description): Textcard {
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
     * @return Textcard
     */
    public function setUrl(string $url): Textcard {
        $this->url = $url;

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
     * @return Textcard
     */
    public function setBtntxt(string $btntxt): Textcard {
        $this->btntxt = $btntxt;

        return $this;
    }

    public function getType() {
        return Constant::TYPE_TEXTCARD;
    }

    public function getTypeContent() {
        return [
            "title"       => $this->getTitle(),
            'description' => $this->getDescription(),
            'url'         => $this->getUrl(),
            'btntxt'      => $this->getBtntxt(),
        ];
    }

}