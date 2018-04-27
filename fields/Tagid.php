<?php

namespace yeedomliu\workwx\fields;

trait Tagid
{

    /**
     * 标签id，非负整型，指定此参数时新增的标签会生成对应的标签id，不指定时则以目前最大的id自增。
     *
     * @var string
     */
    protected $tagid = '';

    /**
     * @return string
     */
    public function getTagid(): string {
        return $this->tagid;
    }

    /**
     * @param string $tagid
     *
     * @return $this
     */
    public function setTagid(string $tagid) {
        $this->tagid = $tagid;

        return $this;
    }


}
