<?php

namespace yeedomliu\workwx\fields;

trait Tagname
{

    /**
     * 标签名称，长度限制为32个字（汉字或英文字母），标签名不可与其他标签重名。
     *
     * @var string
     */
    protected $tagname = '';

    /**
     * @return string
     */
    public function getTagname(): string {
        return $this->tagname;
    }

    /**
     * @param string $tagname
     *
     * @return $this
     */
    public function setTagname(string $tagname) {
        $this->tagname = $tagname;

        return $this;
    }


}
