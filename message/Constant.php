<?php

namespace app\models\workwx\message;

class Constant
{

    /**
     * 文本消息
     *
     * @var string
     */
    const TYPE_TEXT = 'text';

    /**
     * 图片消息
     *
     * @var string
     */
    const TYPE_IMAGE = 'image';

    /**
     * 语音消息
     *
     * @var string
     */
    const TYPE_VOICE = 'voice';

    /**
     * 视频消息
     *
     * @var string
     */
    const TYPE_VIDEO = 'video';

    /**
     * 文件消息
     *
     * @var string
     */
    const TYPE_FILE = 'file';

    /**
     * 卡片消息
     *
     * @var string
     */
    const TYPE_TEXTCARD = 'textcard';

    /**
     * 图文消息
     *
     * @var string
     */
    const TYPE_NEWS = 'news';

    /**
     * 图文消息（mpnews）
     *
     * mpnews类型的图文消息，跟普通的图文消息一致，唯一的差异是图文内容存储在企业微信。
     * 多次发送mpnews，会被认为是不同的图文，阅读、点赞的统计会被分开计算
     *
     * @var string
     */
    const TYPE_MPNEWS = 'mpnews';


}