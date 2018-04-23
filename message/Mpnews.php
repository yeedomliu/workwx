<?php

namespace yeedomliu\workwx\message;

class Mpnews extends News
{

    public function getType() {
        return Constant::TYPE_MPNEWS;
    }

}