<?php

namespace yeedomliu\workwx;

class Department extends Base
{

    /**
     * 创建部门
     *
     * @link https://work.weixin.qq.com/api/doc#10076
     *
     * @param $fields
     *
     * @return mixed
     */
    public function create($fields) {
        return ((new Request())->setUrl("department/create")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * 更新部门
     *
     * @link https://work.weixin.qq.com/api/doc#10077
     *
     * @param $fields
     *
     * @return mixed
     */
    public function update($fields) {
        return ((new Request())->setUrl("department/update")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * 删除部门
     *
     * @link https://work.weixin.qq.com/api/doc#10079
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id) {
        return ((new Request())->setUrl("department/delete")->setFields(['id' => $id])->request());
    }

    /**
     * 获取部门列表
     *
     * @link https://work.weixin.qq.com/api/doc#10093
     *
     * @param $id
     *
     * @return mixed
     */
    public function list($id = '') {
        $fields = $id ? ['id' => $id] : [];

        return ((new Request())->setUrl("department/list")->setFields($fields)->request());
    }
}