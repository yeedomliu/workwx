<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\fields\ArticleArray;

class News extends Base
{

    use ArticleArray;

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