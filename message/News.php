<?php

namespace yeedomliu\workwx\message;

class News extends Base
{

    /**
     * 图文消息，一个图文消息支持1到8条图文
     *
     * @var \yeedomliu\workwx\message\NewsArticle[]
     */
    protected $articles = [];

    /**
     * @return \yeedomliu\workwx\message\NewsArticle[]
     */
    public function getArticles(): array {
        return $this->articles;
    }

    /**
     * @param \yeedomliu\workwx\message\NewsArticle[] $articles
     *
     * @return News
     */
    public function setArticles(array $articles): News {
        $this->articles = $articles;

        return $this;
    }

    /**
     * @param \yeedomliu\workwx\message\NewsArticle $article
     *
     * @return News
     */
    public function addArticle(NewsArticle $article): News {
        $this->articles[] = $article;

        return $this;
    }


    public function getType() {
        return Constant::TYPE_NEWS;
    }

    public function getTypeContent() {
        $articles = [];
        if ($this->getArticles()) {
            foreach ($this->getArticles() as $item) {
                $articles[] = $item->getBody();
            }
        }

        return [
            "articles" => $articles,
        ];
    }

}