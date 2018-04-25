<?php

namespace yeedomliu\workwx\fields;

trait Chatid
{

    /**
     * 群聊的唯一标志，不能与已有的群重复；字符串类型，最长32个字符。只允许字符0-9及字母a-zA-Z。如果不填，系统会随机生成群id
     *
     * @var string
     */
    protected $chatid = '';

    /**
     * @return string
     */
    public function getChatid(): string {
        return $this->chatid;
    }

    /**
     * @param string $chatid
     *
     * @return $this
     */
    public function setChatid(string $chatid): Chatid {
        $this->chatid = $chatid;

        return $this;
    }


}
