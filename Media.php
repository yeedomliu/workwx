<?php

namespace yeedomliu\workwx;

use yeedomliu\workwx\media\Constant;

class Media extends Base
{

    /**
     * 媒体文件类型，分别有图片（image）、语音（voice）、视频（video），普通文件（file）
     *
     * @var string
     */
    protected $type = Constant::TYPE_FILE;

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Media
     */
    public function setType(string $type): Media {
        $this->type = $type;

        return $this;
    }


    /**
     * 上传临时素材
     *
     * @link https://work.weixin.qq.com/api/doc#10112
     *
     * 返回代码：
     * type : 媒体文件类型，分别有图片（image）、语音（voice）、视频（video），普通文件(file)
     * media_id : 媒体文件上传后获取的唯一标识，3天内有效
     * created_at : 媒体文件上传时间戳
     * <code>
     * Array
     * (
     * [errcode] => 0
     * [errmsg] => ok
     * [type] => file
     * [media_id] => 3J6pahCIcCKbNkVcfdUYcQtaZhH9zY2-K_jNQKV8Y65E
     * [created_at] => 1524236056
     * )
     * </code>
     *
     * @param $filename
     *
     * @return mixed
     */
    public function upload($filename) {
        $filename = realpath($filename);
        if ( ! file_exists($filename)) {
            throw new \Exception("文件不存在[{$filename}]");
        }

        return ((new Request())->setFields([
                                               'media' => new \CURLFile($filename),
                                           ])->setUrl("media/upload?type={$this->getType()}")->setPostMethod()->request());
    }

    /**
     * 获取临时素材
     * 完全公开，media_id在同一企业内所有应用之间可以共享。
     *
     * @link http://work.weixin.qq.com/api/doc#10115
     *
     * @param $mediaId 媒体文件id
     *
     * @return string 图片二进制数码,正确时返回（和普通的http下载相同，请根据http头做相应的处理）：
     */
    public function detail($mediaId) {
        return ((new Request())->setFields([
                                               'media_id' => $mediaId,
                                           ])->setUrl("media/get")->setRaw(true)->request());
    }

    /**
     * 获取高清语音素材
     * 可以使用本接口获取从JSSDK的uploadVoice接口上传的临时语音素材，格式为speex，16K采样率。该音频比上文的临时素材获取接口（格式为amr，8K采样率）更加清晰，适合用作语音识别等对音质要求较高的业务。
     * 仅企业微信2.4及以上版本支持。
     *
     *
     * @link http://work.weixin.qq.com/api/doc#12250
     *
     * @param $mediaId
     *
     * @return string 正确时返回（和普通的http下载相同，请根据http头做相应的处理）：
     */
    public function jssdkDetail($mediaId) {
        return ((new Request())->setFields([
                                               'media_id' => $mediaId,
                                           ])->setUrl("media/get/jssdk")->setRaw(true)->request());
    }

    /**
     * 上传图片
     * 上传图片得到图片URL，该URL永久有效
     * 返回的图片URL，仅能用于图文消息（mpnews）正文中的图片展示；若用于非企业微信域名下的页面，图片将被屏蔽。
     * 每个企业每天最多可上传100张图片
     *
     * 返回信息：
     * <code>
     * Array
     * (
     * [errcode] => 0
     * [errmsg] => ok
     * [url] => http://p.qpic.cn/pic_wework/461237922/afa98aa3fc4dbdf50783acbce171547e9e0bb596dc29f95a/0
     * )
     * </code>
     *
     * @link https://work.weixin.qq.com/api/doc#13219
     *
     * @param $filename
     *
     * @return string 图片的url地址
     */
    public function uploadimgByFilename($filename) {
        return ((new Request())->setUrl("media/uploadimg")->setPostMethod()->setFields([
                                                                                           'media' => new \CURLFile(realpath($filename)),
                                                                                       ])->request())['url'];
    }

}