<?php

namespace yeedomliu\workwx\fields;

trait Position
{

    /**
     * 职位信息。长度为0~128个字符
     *
     * @var string
     */
    protected $position = '';

    /**
     * @return string
     */
    public function getPosition(): string {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition(string $position) {
        $this->position = $position;

        return $this;
    }


}
