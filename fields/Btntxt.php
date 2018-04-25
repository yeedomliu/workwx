<?php

namespace yeedomliu\workwx\fields;

trait Btntxt
{

    /**
     * 按钮文字，仅在图文数为1条时才生效。
     *
     * @var string
     */
    protected $btntxt = '';

    /**
     * @return string
     */
    public function getBtntxt(): string {
        return $this->btntxt;
    }

    /**
     * @param string $btntxt
     *
     * @return $this
     */
    public function setBtntxt(string $btntxt): Btntxt {
        $this->btntxt = $btntxt;

        return $this;
    }


}
