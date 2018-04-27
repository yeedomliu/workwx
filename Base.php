<?php

namespace yeedomliu\workwx;

use yeedomliu\workwx\fieldstyle\LcfirstCamelize;

class Base
{

    /**
     * @return $this
     */
    public function getPostRequest() {
        return (new Request())->setPostMethod();
    }

    /**
     * @return $this
     */
    public function getGetRequest() {
        return (new Request())->setGetMethod();
    }

    /**
     * 是否是post请求
     *
     * @return bool
     */
    public function isPostRequest() {
        return false;
    }

    /**
     * 请求url地址
     *
     * @return string
     */
    public function url() {
        return '';
    }

    /**
     * 请求前缀
     *
     * @return string
     */
    public function requestPrefix() {
        return 'https://qyapi.weixin.qq.com/cgi-bin/';
    }

    /**
     * @param \yeedomliu\workwx\Request $requestObj
     *
     * @return \yeedomliu\workwx\Request
     */
    public function requestHandle(Request $requestObj) {
        return $requestObj;
    }

    /**
     * @return \yeedomliu\workwx\Request
     */
    public function getRequestObj() {
        $requestObj = $this->isPostRequest() ? $this->getPostRequest() : $this->getGetRequest();

        return $this->requestHandle($requestObj->setPrefix($this->requestPrefix()));
    }

    /**
     * @return \yeedomliu\workwx\fieldstyle\LcfirstCamelize
     */
    public function getFieldNameHandleObj() {
        return new LcfirstCamelize();
    }

    /**
     * @return mixed
     */
    public function start() {
        $requestObj = $this->getRequestObj();

        // 把trait的属性都转换为字段名
        $obj = new \ReflectionClass(get_called_class());
        $traits = $obj->getTraits();
        $fields = [];
        if ($traits) {
            foreach ($traits as $trait) {
                $props = $trait->getProperties();
                if (empty($props)) {
                    continue;
                }
                foreach ($props as $prop) {
                    $name = $this->getFieldNameHandleObj()->handle($prop->name);
                    $method = 'get' . Inflector::camelize($prop->name);
                    $fields[ $name ] = call_user_func_array([$this, $method], []);
                }
            }
        }
        $fields = array_merge($fields, $this->defaultFields(), $this->customFields());

        return $requestObj->setFields($fields)->setExcludeFields($this->excludeFields())->setUrl($this->url())->request();
    }

    /**
     * 自定义字段
     *
     * @return array
     */
    public function customFields() {
        return [];
    }

    /**
     * 排除字段
     *
     * @return array
     */
    public function excludeFields() {
        return [];
    }

    /**
     * 默认字段
     *
     * @return array
     */
    public function defaultFields() {
        return [];
    }


}