<?php

namespace yeedomliu\workwx\fields;

trait ArticleArray
{

    /**
     * 图文消息，一个图文消息支持1到8条图文
     *
     * @var NewsArticle[]
     */
    protected $articles = [];

    /**
     * @return \yeedomliu\workwx\fields\NewsArticle[]
     */
    public function getArticles() {
        return $this->articles;
    }

    /**
     * @param \yeedomliu\workwx\fields\NewsArticle[] $articles
     *
     * @return $this
     */
    public function setArticles($articles) {
        $this->articles = $articles;

        return $this;
    }


}
