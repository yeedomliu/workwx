<?php

namespace yeedomliu\workwx\fields;

trait FetchChild
{

    /**
     * 1/0：是否递归获取子部门下面的成员
     *
     * @var string
     */
    protected $fetchChild = '';

    /**
     * @return string
     */
    public function getFetchChild(): string {
        return $this->fetchChild;
    }

    /**
     * @param string $fetchChild
     *
     * @return $this
     */
    public function setFetchChild(string $fetchChild) {
        $this->fetchChild = $fetchChild;

        return $this;
    }


}
