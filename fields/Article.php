<?php

namespace yeedomliu\workwx\fields;

trait Article
{

    /**
     * 图文消息，一个图文消息支持1到8条图文
     *
     * @var string
     */
    protected $article = '';

    /**
     * @return string
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * @param string $article
     *
     * @return $this
     */
    public function setArticle($article) {
        $this->article = $article;

        return $this;
    }


}
