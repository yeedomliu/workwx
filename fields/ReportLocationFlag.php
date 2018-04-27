<?php

namespace yeedomliu\workwx\fields;

trait ReportLocationFlag
{

    /**
     * 企业应用是否打开地理位置上报
     *
     * @var string
     */
    protected $reportLocationFlag = '';

    /**
     * @return string
     */
    public function getReportLocationFlag(): string {
        return $this->reportLocationFlag;
    }

    /**
     * @param string $reportLocationFlag
     *
     * @return $this
     */
    public function setReportLocationFlag(string $reportLocationFlag) {
        $this->reportLocationFlag = $reportLocationFlag;

        return $this;
    }


}
