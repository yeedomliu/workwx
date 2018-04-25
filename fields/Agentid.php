<?php

namespace yeedomliu\workwx\fields;

trait Agentid
{

    /**
     * 企业应用的id。当scope是snsapi_userinfo或snsapi_privateinfo时，该参数必填注意redirect_uri的域名必须与该应用的可信域名一致。
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
