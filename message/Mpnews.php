<?php

namespace app\models\workwx\message;

class Mpnews extends News
{

    public function getType() {
        return Constant::TYPE_MPNEWS;
    }

}