<?php

namespace yeedomliu\workwx\fields;

trait Gender
{

    /**
     * 性别。1表示男性，2表示女性
     *
     * @var string
     */
    protected $gender = '';

    /**
     * @return string
     */
    public function getGender(): string {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function setGender(string $gender) {
        $this->gender = $gender;

        return $this;
    }


}
