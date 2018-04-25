<?php

namespace yeedomliu\workwx\fields;

trait Department
{

    /**
     * 成员所属部门id列表，不超过20个
     *
     * @var string
     */
    protected $department = '';

    /**
     * @return string
     */
    public function getDepartment(): string {
        return $this->department;
    }

    /**
     * @param string $department
     *
     * @return $this
     */
    public function setDepartment(string $department): Department {
        $this->department = $department;

        return $this;
    }


}
