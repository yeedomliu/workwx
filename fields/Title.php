<?php

namespace yeedomliu\workwx\fields;

trait Title
{

    /**
     * 标题，不超过128个字节，超过会自动截断
     *
     * @var string
     */
    protected $title = '';

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title): Title {
        $this->title = $title;

        return $this;
    }


}
