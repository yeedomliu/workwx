<?php

namespace yeedomliu\workwx\fields;

trait Tag
{

    /**
     * 标签ID列表，最多支持100个。
     *
     * @var string
     */
    protected $tag = '';

    /**
     * @return string
     */
    public function getTag(): string {
        return $this->tag;
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function setTag(string $tag) {
        $this->tag = $tag;

        return $this;
    }


}
