<?php

namespace yeedomliu\workwx\message;

use yeedomliu\workwx\Base;
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
     * @return Request
     */
    public function getRequest() {
        return (new Request())->setUrl(self::RESOURCE_URL)->setPostMethod();
    }

    /**
     * 开始发送信息
     *
     * @param \yeedomliu\workwx\message\File|\yeedomliu\workwx\message\Image|\yeedomliu\workwx\message\Mpnews|\yeedomliu\workwx\message\News|\yeedomliu\workwx\message\Text|\yeedomliu\workwx\message\Textcard|\yeedomliu\workwx\message\Video|\yeedomliu\workwx\message\Voice $obj
     *
     * @return mixed
     */
    public function start($obj) {
        return $this->getRequest()->setFields($obj->setToUser($this->getToUser())->getBody())->request();
    }

    /**
     * 文本消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E6%96%87%E6%9C%AC%E6%B6%88%E6%81%AF
     *
     * @param $content
     *
     * @return mixed
     */
    public function text($content) {
        return $this->start((new Text())->setContent($content));
    }

    /**
     * 根据图片文件发送图片消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E5%9B%BE%E7%89%87%E6%B6%88%E6%81%AF
     *
     * @param $filename
     *
     * @return mixed
     */
    public function imageByFilename($filename) {
        $mediaId = ((new Media())->setType(Constant::TYPE_IMAGE)->upload($filename))['media_id']; // 上传图片得到media_id

        return $this->start((new Image())->setMediaId($mediaId));
    }

    /**
     * 根据media_id发送图片消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E5%9B%BE%E7%89%87%E6%B6%88%E6%81%AF
     *
     * @param $mediaId
     *
     * @return mixed
     */
    public function imageByMediaid($mediaId) {
        return $this->start((new Image())->setMediaId($mediaId));
    }

    /**
     * 视频消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E8%A7%86%E9%A2%91%E6%B6%88%E6%81%AF
     *
     * @param        $mediaId
     * @param string $title
     * @param string $desc
     *
     * @return mixed
     */
    public function video($mediaId, $title = '', $desc = '') {
        return $this->start((new Video())->setTitle($title)->setDescription($desc)->setMediaId($mediaId));
    }

    /**
     * 语音消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E8%AF%AD%E9%9F%B3%E6%B6%88%E6%81%AF
     *
     * @param $mediaId
     *
     * @return mixed
     */
    public function voice($mediaId) {
        return $this->start((new Voice())->setMediaId($mediaId));
    }

    /**
     * 文件消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E6%96%87%E4%BB%B6%E6%B6%88%E6%81%AF
     *
     * @param $mediaId
     *
     * @return mixed
     */
    public function file($mediaId) {
        return $this->start((new File())->setMediaId($mediaId));
    }

    /**
     * 文本卡片消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E6%96%87%E6%9C%AC%E5%8D%A1%E7%89%87%E6%B6%88%E6%81%AF
     *
     * @param        $title  标题，不超过128个字节，超过会自动截断
     * @param        $desc   描述，不超过512个字节，超过会自动截断
     * @param        $url    点击后跳转的链接。
     * @param string $btntxt 按钮文字。 默认为“详情”， 不超过4个文字，超过自动截断。
     *
     * @return mixed
     */
    public function textcard($title, $desc, $url, $btntxt = '') {
        return $this->start((new Textcard())->setTitle($title)->setDescription($desc)->setUrl($url)->setBtntxt($btntxt));
    }

    /**
     * 图文消息
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E5%9B%BE%E6%96%87%E6%B6%88%E6%81%AF
     *
     * @param \yeedomliu\workwx\message\NewsArticle[] $newsArticles
     *
     * @return mixed
     */
    public function news($newsArticles) {
        return $this->start((new News())->setArticles($newsArticles));
    }

    /**
     * 图文消息（mpnews）
     * mpnews类型的图文消息，跟普通的图文消息一致，唯一的差异是图文内容存储在企业微信。
     * 多次发送mpnews，会被认为是不同的图文，阅读、点赞的统计会被分开计算。
     *
     * @link http://work.weixin.qq.com/api/doc#10167/%E5%9B%BE%E6%96%87%E6%B6%88%E6%81%AF%EF%BC%88mpnews%EF%BC%89
     *
     * @param \yeedomliu\workwx\message\MpnewsArticle[] $mpnewsArticles
     *
     * @return mixed
     */
    public function mpnews($mpnewsArticles) {
        return $this->start((new Mpnews())->setArticles($mpnewsArticles));
    }

}