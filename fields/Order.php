<?php

namespace yeedomliu\workwx\fields;

trait Order
{

    /**
     * 部门内的排序值，默认为0。数量必须和department一致，数值越大排序越前面。有效的值范围是[0,
     *
     * @var string
     */
    protected $order = '';

    /**
     * @return string
     */
    public function getOrder(): string {
        return $this->order;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder(string $order) {
        $this->order = $order;

        return $this;
    }


}
