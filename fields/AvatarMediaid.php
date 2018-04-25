<?php

namespace yeedomliu\workwx\fields;

trait AvatarMediaid
{

    /**
     * 成员头像的mediaid，通过素材管理接口上传图片获得的mediaid
     *
     * @var string
     */
    protected $avatarMediaid = '';

    /**
     * @return string
     */
    public function getAvatarMediaid(): string {
        return $this->avatarMediaid;
    }

    /**
     * @param string $avatarMediaid
     *
     * @return $this
     */
    public function setAvatarMediaid(string $avatarMediaid): AvatarMediaid {
        $this->avatarMediaid = $avatarMediaid;

        return $this;
    }


}
