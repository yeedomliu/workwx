<?php

namespace yeedomliu\workwx\fieldstyle;

use wii\helpers\Inflector;

class Camelize extends Base
{

    public function handle($name) {
        return Inflector::camelize($name);
    }


}