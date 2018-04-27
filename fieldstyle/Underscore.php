<?php

namespace yeedomliu\workwx\fieldstyle;

use wii\helpers\Inflector;

class Underscore extends Base
{

    public function handle($name) {
        return Inflector::underscore($name);
    }


}