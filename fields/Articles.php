<?php

namespace yeedomliu\workwx\fields;

trait Articles
{

    /**
     * 图文消息，一个图文消息支持1到8条图文
     *
     * @var string
     */
    protected $articles = '';

    /**
     * @return string
     */
    public function getArticles(): string {
        return $this->articles;
    }

    /**
     * @param string $articles
     *
     * @return $this
     */
    public function setArticles(string $articles): Articles {
        $this->articles = $articles;

        return $this;
    }


}
