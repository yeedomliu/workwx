<?php

namespace yeedomliu\workwx\fields;

trait Msgtype
{

    /**
     * 消息类型，此时固定为：video
     *
     * @var string
     */
    protected $msgtype = '';

    /**
     * @return string
     */
    public function getMsgtype(): string {
        return $this->msgtype;
    }

    /**
     * @param string $msgtype
     *
     * @return $this
     */
    public function setMsgtype(string $msgtype): Msgtype {
        $this->msgtype = $msgtype;

        return $this;
    }


}
