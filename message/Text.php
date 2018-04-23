<?php

namespace app\models\workwx\message;

class Text extends Base
{

    /**
     * 消息内容，最长不超过2048个字节
     *
     * @var string
     */
    protected $content = '';

    /**
     * @return string
     */
    public function getContent(): string {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return Text
     */
    public function setContent(string $content): Text {
        $this->content = $content;

        return $this;
    }


    public function getType() {
        return Constant::TYPE_TEXT;
    }

    public function getTypeContent() {
        return [
            "content" => $this->getContent(),
        ];
    }

}