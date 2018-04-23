<?php

namespace app\models\workwx\message;


use wii\helpers\Json;

abstract class Base extends \app\models\workwx\Base
{

    /**
     * @var string
     */
    protected $touser = '';

    /**
     * @var string
     */
    protected $toparty = '';

    /**
     * @var string
     */
    protected $totag = '';

    /**
     * @var string
     */
    protected $msgtype = 'text';

    /**
     * @var string
     */
    protected $agentid = '';

    /**
     * @var int
     */
    protected $safe = 0;

    /**
     * @return string
     */
    public function getTouser(): string {
        return $this->touser;
    }

    /**
     * @param string $touser
     *
     * @return Base
     */
    public function setTouser(string $touser): Base {
        $this->touser = $touser;

        return $this;
    }

    /**
     * @return string
     */
    public function getToparty(): string {
        return $this->toparty;
    }

    /**
     * @param string $toparty
     *
     * @return Base
     */
    public function setToparty(string $toparty): Base {
        $this->toparty = $toparty;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotag(): string {
        return $this->totag;
    }

    /**
     * @param string $totag
     *
     * @return Base
     */
    public function setTotag(string $totag): Base {
        $this->totag = $totag;

        return $this;
    }

    /**
     * @return string
     */
    public function getMsgtype(): string {
        return $this->msgtype;
    }

    /**
     * @param string $msgtype
     *
     * @return Base
     */
    public function setMsgtype(string $msgtype): Base {
        $this->msgtype = $msgtype;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgentid(): string {
        return empty($this->agentid) ? \Wii::app()->workwxConfig->agentid : $this->agentid;
    }

    /**
     * @param string $agentid
     *
     * @return Base
     */
    public function setAgentid(string $agentid): Base {
        $this->agentid = $agentid;

        return $this;
    }

    /**
     * @return int
     */
    public function getSafe(): int {
        return $this->safe;
    }

    /**
     * @param int $safe
     *
     * @return Base
     */
    public function setSafe(int $safe): Base {
        $this->safe = $safe;

        return $this;
    }

    /**
     * 获取类型
     *
     * @return mixed
     */
    abstract public function getType();

    /**
     * 获取类型内容
     *
     * @return mixed
     */
    abstract public function getTypeContent();

    public function getBody() {
        $return = [
            'touser'         => $this->getTouser(),
            'toparty'        => $this->getToparty(),
            'totag'          => $this->getTotag(),
            'msgtype'        => $this->getType(),
            'agentid'        => $this->getAgentid(),
            'safe'           => $this->getSafe(),
            $this->getType() => $this->getTypeContent(),
        ];

        return Json::encode($return);
    }

}