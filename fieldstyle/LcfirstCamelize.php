<?php

namespace yeedomliu\workwx\fieldstyle;

use wii\helpers\Inflector;

class LcfirstCamelize extends Base
{

    public function handle($name) {
        return lcfirst(Inflector::camelize($name));
    }


}