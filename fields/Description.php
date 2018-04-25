<?php

namespace yeedomliu\workwx\fields;

trait Description
{

    /**
     * 企业应用详情，长度为4至120个字符
     *
     * @var string
     */
    protected $description = '';

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description): Description {
        $this->description = $description;

        return $this;
    }


}
