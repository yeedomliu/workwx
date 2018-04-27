<?php

namespace yeedomliu\workwx\requestfields;

trait Options
{

    /**
     * 请求选项配置
     *
     * @var array
     */
    protected $options = [];

    /**
     * @return array
     */
    public function getOptions(): array {
        return $this->options;
    }

    /**
     * @param array $options
     *
     * @return $this
     */
    public function setOptions(array $options) {
        $this->options = $options;

        return $this;
    }

    /**
     * 添加选项
     *
     * @param $name
     * @param $value
     *
     * @return $this
     */
    public function addOption($name, $value) {
        $this->options[ $name ] = $value;

        return $this;
    }


}
