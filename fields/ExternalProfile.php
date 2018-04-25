<?php

namespace yeedomliu\workwx\fields;

trait ExternalProfile
{

    /**
     * 成员对外属性，字段详情见对外属性；第三方暂不可设置
     *
     * @var string
     */
    protected $externalProfile = '';

    /**
     * @return string
     */
    public function getExternalProfile(): string {
        return $this->externalProfile;
    }

    /**
     * @param string $externalProfile
     *
     * @return $this
     */
    public function setExternalProfile(string $externalProfile): ExternalProfile {
        $this->externalProfile = $externalProfile;

        return $this;
    }


}
