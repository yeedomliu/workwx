<?php

namespace yeedomliu\workwx\fields;

trait Description
{

    /**
     * 描述，不超过512个字节，超过会自动截断
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
