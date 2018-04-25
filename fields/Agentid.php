<?php

namespace yeedomliu\workwx\fields;

trait Agentid
{

    /**
     * 企业应用的id
     *
     * @var string
     */
    protected $agentid = '';

    /**
     * @return string
     */
    public function getAgentid(): string {
        return $this->agentid;
    }

    /**
     * @param string $agentid
     *
     * @return $this
     */
    public function setAgentid(string $agentid): Agentid {
        $this->agentid = $agentid;

        return $this;
    }


}
