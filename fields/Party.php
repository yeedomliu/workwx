<?php

namespace yeedomliu\workwx\fields;

trait Party
{

    /**
     * 部门ID列表，最多支持100个。
     *
     * @var string
     */
    protected $party = '';

    /**
     * @return string
     */
    public function getParty(): string {
        return $this->party;
    }

    /**
     * @param string $party
     *
     * @return $this
     */
    public function setParty(string $party) {
        $this->party = $party;

        return $this;
    }


}
