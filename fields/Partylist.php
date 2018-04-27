<?php

namespace yeedomliu\workwx\fields;

trait Partylist
{

    /**
     * 企业部门ID列表，注意：userlist、partylist不能同时为空，单次请求长度不超过100
     *
     * @var string
     */
    protected $partylist = '';

    /**
     * @return string
     */
    public function getPartylist(): string {
        return $this->partylist;
    }

    /**
     * @param string $partylist
     *
     * @return $this
     */
    public function setPartylist(string $partylist) {
        $this->partylist = $partylist;

        return $this;
    }


}
