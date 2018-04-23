<?php

namespace yeedomliu\workwx;

use app\models\workwx\media\Constant;

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
     * @return mixed
     */
    public function uploadimg($filename) {
        return ((new Request())->setUrl("media/uploadimg")->setPostMethod()->setFields([
                                                                                           'media' => new \CURLFile(realpath($filename)),
                                                                                       ])->request())['url'];
    }

}