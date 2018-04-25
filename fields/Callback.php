<?php

namespace yeedomliu\workwx\fields;

trait Callback
{

    /**
     * 回调信息。如填写该项则任务完成后，通过callback推送事件给企业。具体请参考应用回调模式中的相应选项
     *
     * @var string
     */
    protected $callback = '';

    /**
     * @return string
     */
    public function getCallback(): string {
        return $this->callback;
    }

    /**
     * @param string $callback
     *
     * @return $this
     */
    public function setCallback(string $callback): Callback {
        $this->callback = $callback;

        return $this;
    }


}
