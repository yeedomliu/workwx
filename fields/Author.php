<?php

namespace yeedomliu\workwx\fields;

trait Author
{

    /**
     * 图文消息的作者，不超过64个字节
     *
     * @var string
     */
    protected $author = '';

    /**
     * @return string
     */
    public function getAuthor(): string {
        return $this->author;
    }

    /**
     * @param string $author
     *
     * @return $this
     */
    public function setAuthor(string $author) {
        $this->author = $author;

        return $this;
    }


}
