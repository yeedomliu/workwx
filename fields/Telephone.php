<?php

namespace yeedomliu\workwx\fields;

trait Telephone
{

    /**
     * 座机。由1-32位的纯数字或’-‘号组成
     *
     * @var string
     */
    protected $telephone = '';

    /**
     * @return string
     */
    public function getTelephone(): string {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone(string $telephone): Telephone {
        $this->telephone = $telephone;

        return $this;
    }


}
