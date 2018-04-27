<?php

namespace yeedomliu\workwx;

use yeedomliu\workwx\common\AccessToken;
use yeedomliu\workwx\fields\Url;
use yeedomliu\workwx\requestfields\ExcludeFields;
use yeedomliu\workwx\requestfields\Fields;
use yeedomliu\workwx\requestfields\Headers;
use yeedomliu\workwx\requestfields\JsonEncodeFields;
use yeedomliu\workwx\requestfields\Method;
use yeedomliu\workwx\requestfields\Options;
use yeedomliu\workwx\requestfields\Prefix;
use yeedomliu\workwx\requestfields\Raw;

/**
 * Class Request
 * 默认get请求、把json转换成数组返回、带企业微信接口请求前缀、后缀默认带上access token
 *
 */
class Request
{

    use Prefix, Url, Fields, Raw, Method, JsonEncodeFields, Headers, ExcludeFields, Options;

    const METHOD_GET = 'get';

    const METHOD_POST = 'post';

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
            $this->addOption(CURLOPT_SSL_VERIFYPEER, false);
            $this->addOption(CURLOPT_SSL_VERIFYHOST, false);
            $this->addOption(CURLOPT_SSLVERSION, 1);
        }

        $fields = $this->getFields();
        if ($this->isPostMethod()) {
            if ($this->isJsonEncodeFields()) {
                $fields = json_encode($fields);
            }
            $this->addOption(CURLOPT_POST, true);
            $this->addOption(CURLOPT_POSTFIELDS, $fields);
        } else {
            $fieldString = is_array($fields) ? http_build_query($fields) : $fields;
            $url .= preg_match('/\?/is', $url) ? "&" : "?";
            $url .= $fieldString;
        }

        // header处理
        if ($this->getHeaders()) {
            $this->addOption(CURLOPT_HTTPHEADER, $this->getHeaders());
        }

        $this->addOption(CURLOPT_URL, $url);
        $this->addOption(CURLOPT_RETURNTRANSFER, 1);
        curl_setopt_array($ch, $this->getOptions());

        $output = curl_exec($ch);
        $status = curl_getinfo($ch);
        curl_close($ch);

        \Yii::info(['url' => $url, 'fields' => $fields, 'method' => $this->getMethod(), 'result' => $output, 'options' => $this->getOptions()], 'workwx.request_result');

        if ($output === false) {
            throw new \Exception("网络错误");
        }

        if (intval($status["http_code"]) != 200) {
            throw new \Exception("unexpected http code " . intval($status["http_code"]));
        }

        $return = ! $this->isRaw() ? json_decode($output, true) : $output;
        if (is_array($return)) {
            if (0 != $return['errcode']) {
                throw new \Exception("调用接口出现错误[{$return['errmsg']}]");
            }
        }

        return $return;
    }

}