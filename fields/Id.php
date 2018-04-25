<?php

namespace yeedomliu\workwx\fields;

trait Id
{

    /**
     * 部门id，32位整型，指定时必须大于1。若不填该参数，将自动生成id
     *
     * @var string
     */
    protected $id = '';

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id): Id {
        $this->id = $id;

        return $this;
    }


}
