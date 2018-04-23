<?php

namespace yeedomliu\workwx;

use yii\base\Component;

class Facade extends Component
{

    /**
     * @param        $url
     * @param string $method
     *
     * @return \yeedomliu\workwx\Request
     */
    static public function getRequestByUrl($url, $method = Request::METHOD_POST) {
        $return = (new Request())->setUrl($url);
        if (Request::METHOD_POST == $method) {
            $return->setPostMethod();
        }

        return $return;
    }

    static public function request($url, $fields, $method = 'get', $raw = false) {
        $method = strtolower($method);
        $ch = curl_init();

        if (stripos($url, "https://") !== false) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSLVERSION, 1);
        }
        if ('post' == $method) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        $status = curl_getinfo($ch);
        curl_close($ch);

        if ($output === false) {
            throw new NetWorkError("network error");
        }

        if (intval($status["http_code"]) != 200) {
            throw new HttpError("unexpected http code " . intval($status["http_code"]));
        }

        return $output;
    }

}