<?php

namespace yeedomliu\workwx;

class Corp extends Base
{


    /**
     * @param $opencheckindatatype
     * @param $starttime
     * @param $endtime
     * @param $useridlist
     *
     * @return mixed
     */
    public function getData($opencheckindatatype, $starttime, $endtime, $useridlist) {
        return ((new Request())->setFields([
                                               'opencheckindatatype' => $opencheckindatatype,
                                               'starttime'           => $starttime,
                                               'endtime'             => $endtime,
                                               'useridlist'          => $useridlist,
                                           ])->setUrl("checkin/getcheckindata")->setPostMethod()->request());
    }

}