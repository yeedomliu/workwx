<?php

namespace yeedomliu\workwx\fields;

trait Name
{

    /**
     * 成员名称。长度为1~64个字符
     *
     * @var string
     */
    protected $name = '';

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): Name {
        $this->name = $name;

        return $this;
    }


}
