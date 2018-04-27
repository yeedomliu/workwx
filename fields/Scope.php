<?php

namespace yeedomliu\workwx\fields;

trait Scope
{

    /**
     * 应用授权作用域。snsapi_base：静默授权，可获取成员的基本信息；snsapi_userinfo：静默授权，可获取成员的敏感信息，但不包含手机、邮箱；snsapi_privateinfo：手动授权，可获取成员的敏感信息，包含手机、邮箱
     *
     * @var string
     */
    protected $scope = '';

    /**
     * @return string
     */
    public function getScope(): string {
        return $this->scope;
    }

    /**
     * @param string $scope
     *
     * @return $this
     */
    public function setScope(string $scope) {
        $this->scope = $scope;

        return $this;
    }


}
