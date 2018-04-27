<?php

namespace yeedomliu\workwx\fields;

trait LogoMediaid
{

    /**
     * 企业应用头像的mediaid，通过素材管理接口上传图片获得mediaid，上传后会自动裁剪成方形和圆形两个头像
     *
     * @var string
     */
    protected $logoMediaid = '';

    /**
     * @return string
     */
    public function getLogoMediaid(): string {
        return $this->logoMediaid;
    }

    /**
     * @param string $logoMediaid
     *
     * @return $this
     */
    public function setLogoMediaid(string $logoMediaid) {
        $this->logoMediaid = $logoMediaid;

        return $this;
    }


}
