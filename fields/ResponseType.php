<?php

namespace yeedomliu\workwx\fields;

trait ResponseType
{

    /**
     * 返回类型，此时固定为：code
     *
     * @var string
     */
    protected $responseType = '';

    /**
     * @return string
     */
    public function getResponseType(): string {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     *
     * @return $this
     */
    public function setResponseType(string $responseType): ResponseType {
        $this->responseType = $responseType;

        return $this;
    }


}
