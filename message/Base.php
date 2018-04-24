<?php

namespace yeedomliu\workwx\message;

abstract class Base extends \yeedomliu\workwx\Base
{

    /**
     * @var string
     */
    protected $toUser = '';

    /**
     * @var string
     */
    protected $toParty = '';

    /**
     * @var string
     */
    protected $toTag = '';

    /**
     * @var string
     */
    protected $msgType = 'text';

    /**
     * @var string
     */
    protected $agentId = '';

    /**
     * @var int
     */
    protected $safe = 0;

    /**
     * @return string
     */
    public function getTouser(): string {
        return $this->toUser;
    }

    /**
     * @param string $touser
     *
     * @return Base
     */
    public function setToUser(string $touser): Base {
        $this->toUser = $touser;

        return $this;
    }

    /**
     * @return string
     */
    public function getToparty(): string {
        return $this->toParty;
    }

    /**
     * @param string $toparty
     *
     * @return Base
     */
    public function setToparty(string $toparty): Base {
        $this->toParty = $toparty;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotag(): string {
        return $this->toTag;
    }

    /**
     * @param string $totag
     *
     * @return Base
     */
    public function setTotag(string $totag): Base {
        $this->toTag = $totag;

        return $this;
    }

    /**
     * @return string
     */
    public function getMsgtype(): string {
        return $this->msgType;
    }

    /**
     * @param string $msgtype
     *
     * @return Base
     */
    public function setMsgtype(string $msgtype): Base {
        $this->msgType = $msgtype;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgentid(): string {
        return empty($this->agentId) ? \Wii::app()->workwxConfig->agentid : $this->agentId;
    }

    /**
     * @param string $agentid
     *
     * @return Base
     */
    public function setAgentid(string $agentid): Base {
        $this->agentId = $agentid;

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
     * chatid所代表的群必须是该应用所创建
     *
     * @var string
     */
    protected $chatId = '';

    /**
     * @return string
     */
    public function getChatId() {
        return $this->chatId;
    }

    /**
     * @param string $chatId
     *
     * @return Base
     */
    public function setChatId($chatId) {
        $this->chatId = $chatId;

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

    /**
     * 获取请求体json
     *
     * @return string
     */
    public function getBody($jsonEncode = true) {
        $return = [
            'touser'         => $this->getTouser(),
            'toparty'        => $this->getToparty(),
            'totag'          => $this->getTotag(),
            'msgtype'        => $this->getType(),
            'agentid'        => $this->getAgentid(),
            'safe'           => $this->getSafe(),
            $this->getType() => $this->getTypeContent(),
        ];
        if ($this->getChatId()) {
            $return['chatid'] = $this->getChatId();
        }

        return $jsonEncode ? json_encode($return) : $return;
    }

}