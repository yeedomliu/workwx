<?php

namespace app\models\workwx\message;

use app\models\workwx\Base;
use app\models\workwx\Facade;
use app\models\workwx\Media;
use app\models\workwx\Request;

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

        return (new Request())->setUrl(self::RESOURCE_URL)->setPostMethod()->setJsonEncodeFields()->setFields($obj->getBody())->request();
    }

    /**
     * @param \app\models\workwx\message\NewsArticle[] $newsArticles
     *
     * @return mixed
     */
    public function news($newsArticles) {
        $obj = new News();
        $obj = $obj->setArticles($newsArticles)->setTouser($this->getToUser());

        return $this->getRequest()->setFields($obj->getBody())->request();
    }

}