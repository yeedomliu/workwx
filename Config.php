<?php

namespace yeedomliu\workwx;

use yii\base\Component;

class Config extends Component
{

    /**
     * 每个应用都有唯一的agentid。在管理后台->“企业应用”->点进应用，即可看到agentid。
     *
     * @var string
     */
    public $agentid = '';

    /**
     * secret是企业应用里面用于保障数据安全的“钥匙”，每一个应用都有一个独立的访问密钥，为了保证数据的安全，secret务必不能泄漏。
     * 目前secret有两种：1. 通讯录管理secret； 2. 应用secret。
     * 1. 通讯录管理secret。在“管理工具”-“通讯录同步”里面查看（需开启“API接口同步”）；
     * 2. 应用secret。在管理后台->“企业应用”->点进应用，即可看到。
     *
     * @var string
     */
    public $secret = '';

    /**
     * 每个企业都拥有唯一的corpid，获取此信息可在管理后台“我的企业”－“企业信息”下查看（需要有管理员权限）
     *
     * @var string
     */
    public $corpid = '';

}