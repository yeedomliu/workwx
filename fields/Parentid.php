<?php

namespace yeedomliu\workwx\fields;

trait Parentid
{

    /**
     * 父部门id，32位整型
     *
     * @var string
     */
    protected $parentid = '';

    /**
     * @return string
     */
    public function getParentid(): string {
        return $this->parentid;
    }

    /**
     * @param string $parentid
     *
     * @return $this
     */
    public function setParentid(string $parentid): Parentid {
        $this->parentid = $parentid;

        return $this;
    }


}
