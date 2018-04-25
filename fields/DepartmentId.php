<?php

namespace yeedomliu\workwx\fields;

trait DepartmentId
{

    /**
     * 获取的部门id
     *
     * @var string
     */
    protected $departmentId = '';

    /**
     * @return string
     */
    public function getDepartmentId(): string {
        return $this->departmentId;
    }

    /**
     * @param string $departmentId
     *
     * @return $this
     */
    public function setDepartmentId(string $departmentId): DepartmentId {
        $this->departmentId = $departmentId;

        return $this;
    }


}
