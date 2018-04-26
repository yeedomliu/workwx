<?php

namespace yeedomliu\workwx\fields;

trait ArticleArray
{

    /**
     * 图文消息，一个图文消息支持1到8条图文
     *
     * @var array
     */
    protected $articles = [];

    /**
     * @return array
     */
    public function getArticles() {
        return $this->articles;
    }

    /**
     * @param array $articles
     *
     * @return $this
     */
    public function setArticles($articles) {
        $this->articles = $articles;

        return $this;
    }


}
