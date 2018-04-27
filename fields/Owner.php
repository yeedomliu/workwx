<?php

namespace yeedomliu\workwx\fields;

trait Owner
{

    /**
     * 指定群主的id。如果不指定，系统会随机从userlist中选一人作为群主
     *
     * @var string
     */
    protected $owner = '';

    /**
     * @return string
     */
    public function getOwner(): string {
        return $this->owner;
    }

    /**
     * @param string $owner
     *
     * @return $this
     */
    public function setOwner(string $owner) {
        $this->owner = $owner;

        return $this;
    }


}
