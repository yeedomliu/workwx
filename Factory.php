<?php

namespace yeedomliu\workwx;

class Factory
{

    /**
     * @return \yeedomliu\workwx\adapter\Config
     */
    static public function getConfig() {
        return \Wii::app()->workwxConfig;
    }

}