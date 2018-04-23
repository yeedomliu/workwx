<?php

namespace yeedomliu\workwx;

use yeedomliu\workwx\common\AccessToken;

/**
 * Class Request
 * 默认get请求、把json转换成数组返回、带企业微信接口请求前缀、后缀默认带上access token
 *
 */
class Request extends \yii\base\Component
{


    /**
     * 请求前缀
     *
     * @var string
     */
    public $prefix = 'https://qyapi.weixin.qq.com/cgi-bin/';

    /**
     * @var string
     */
    protected $url = '';

    /**
     * @var array|string
     */
    protected $fields = [];

    /**
     * @var string
     */
    protected $method = 'get';

    /**
     * @var bool
     */
    protected $raw = false;

    /**
     * @return string
     */
    public function getUrl(): string {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Request
     */
    public function setUrl(string $url): Request {
        $this->url = $url;

        return $this;
    }

    /**
     * @return array|string
     */
    public function getFields() {
        return $this->fields;
    }

    /**
     * @param array|string $fields
     *
     * @return Request
     */
    public function setFields($fields) {
        $this->fields = $fields;

        return $this;
    }

    /**
     * json_encode请求参数
     *
     * @var bool
     */
    protected $jsonEncodeFields = false;

    /**
     * @return bool
     */
    public function isJsonEncodeFields(): bool {
        return $this->jsonEncodeFields;
    }

    /**
     * @param bool $jsonEncodeFields
     *
     * @return Request
     */
    public function setJsonEncodeFields(bool $jsonEncodeFields = true): Request {
        $this->jsonEncodeFields = $jsonEncodeFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string {
        return $this->method;
    }

    /**
     * @param string $method
     *
     * @return Request
     */
    public function setMethod(string $method): Request {
        $this->method = $method;

        return $this;
    }

    const METHOD_GET = 'get';

    const METHOD_POST = 'post';

    /**
     * 设置get请求
     *
     * @return $this
     */
    public function setGetMethod() {
        $this->method = self::METHOD_GET;

        return $this;
    }

    /**
     * 设置post方法
     *
     * @return $this
     */
    public function setPostMethod() {
        $this->method = self::METHOD_POST;

        return $this;
    }

    /**
     * 是否是post请求
     *
     * @return bool
     */
    public function isPostMethod() {
        return self::METHOD_POST == strtolower(trim($this->method));
    }

    /**
     * @return bool
     */
    public function isRaw(): bool {
        return $this->raw;
    }

    /**
     * @param bool $raw
     *
     * @return Request
     */
    public function setRaw(bool $raw): Request {
        $this->raw = $raw;

        return $this;
    }

    /**
     * 追加access token
     *
     * @var bool
     */
    protected $appendAccessToken = true;

    /**
     * @return bool
     */
    public function isAppendAccessToken(): bool {
        return $this->appendAccessToken;
    }

    /**
     * @param bool $appendAccessToken
     *
     * @return \yeedomliu\workwx\Request
     */
    public function setAppendAccessToken(bool $appendAccessToken) {
        $this->appendAccessToken = $appendAccessToken;

        return $this;
    }


    /**
     * 请求
     *
     * @return mixed
     */
    public function request() {
        $url = $this->prefix . $this->getUrl();

        // 追加access token
        if ($this->isAppendAccessToken()) {
            $url .= preg_match('/\?/is', $url) ? "&" : "?";
            $url .= "access_token=" . (new AccessToken())->getToken();
        }
        $ch = curl_init();

        if (stripos($url, "https://") !== false) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSLVERSION, 1);
        }

        $fields = $this->getFields();
        if ($this->isPostMethod()) {
            if ($this->isJsonEncodeFields()) {
                $fields = json_encode($fields);
            }
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        } else {
            $fieldString = is_array($fields) ? http_build_query($fields) : $fields;
            $url .= preg_match('/\?/is', $url) ? "&" : "?";
            $url .= $fieldString;
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        $status = curl_getinfo($ch);
        curl_close($ch);

        \Yii::info(['url' => $url, 'fields' => $fields, 'method' => $this->getMethod(), 'result' => $output], 'workwx.request_result');

        if ($output === false) {
            throw new \Exception("网络错误");
        }

        if (intval($status["http_code"]) != 200) {
            throw new \Exception("unexpected http code " . intval($status["http_code"]));
        }

        $return = ! $this->isRaw() ? json_decode($output, true) : $output;
        if (is_array($return)) {
            if (0 != $return['errcode']) {
            }
        }

        return $return;
    }

}