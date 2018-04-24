<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\Base;
use yeedomliu\workwx\Facade;
use yeedomliu\workwx\Media;
use yeedomliu\workwx\Request;

class Send extends Base
{

    const RESOURCE_URL = 'message/send';

    /**
     *
     *
     * @var string|array
     */
    protected $toUser = '';

    /**
     * @return array|string
     */
    public function getToUser() {
        return $this->toUser;
    }

    /**
     * @param array|string $toUser
     *
     * @return Send
     */
    public function setToUser($toUser) {
        $this->toUser = $toUser;

        return $this;
    }

    /**
     * @return $this
     */
    public function getRequest() {
        return Facade::getRequestByUrl(self::RESOURCE_URL);
    }

    public function text($content) {
        $obj = (new Text())->setContent($content)->setTouser($this->getToUser());

        return $this->getRequest()->setFields($obj->getBody())->request();
    }

    public function image($filename) {
        $mediaId = ((new Media())->setType(Constant::TYPE_IMAGE)->upload($filename))['media_id']; // 上传图片得到media_id
        $obj = (new Image())->setMediaId($mediaId)->setTouser($this->getToUser());

        return (new Request())->setUrl(self::RESOURCE_URL)->setPostMethod()->setFields($obj->getBody())->request();
    }

    public function imageByMediaid($mediaId) {
        $obj = (new Image())->setMediaId($mediaId)->setTouser($this->getToUser());

        return (new Request())->setUrl(self::RESOURCE_URL)->setPostMethod()->setFields($obj->getBody())->request();
    }
    
    /**
     * @param \yeedomliu\workwx\message\NewsArticle[] $newsArticles
     *
     * @return mixed
     */
    public function news($newsArticles) {
        $obj = (new News())->setArticles($newsArticles)->setTouser($this->getToUser());

        return $this->getRequest()->setFields($obj->getBody())->request();
    }

}