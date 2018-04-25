<?php

namespace yeedomliu\workwx\fields;

trait EnglishName
{

    /**
     * 英文名。长度为1-64个字节，由字母、数字、点(.)、减号(-)、空格或下划线(_)组成
     *
     * @var string
     */
    protected $englishName = '';

    /**
     * @return string
     */
    public function getEnglishName(): string {
        return $this->englishName;
    }

    /**
     * @param string $englishName
     *
     * @return $this
     */
    public function setEnglishName(string $englishName): EnglishName {
        $this->englishName = $englishName;

        return $this;
    }


}
