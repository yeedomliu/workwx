<?php

namespace yeedomliu\workwx\fields;

trait RedirectDomain
{

    /**
     * 企业应用可信域名。注意：域名需通过所有权校验，否则jssdk功能将受限，此时返回错误码85005
     *
     * @var string
     */
    protected $redirectDomain = '';

    /**
     * @return string
     */
    public function getRedirectDomain(): string {
        return $this->redirectDomain;
    }

    /**
     * @param string $redirectDomain
     *
     * @return $this
     */
    public function setRedirectDomain(string $redirectDomain): RedirectDomain {
        $this->redirectDomain = $redirectDomain;

        return $this;
    }


}
