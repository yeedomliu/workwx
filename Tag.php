<?php

namespace yeedomliu\workwx;

class Tag extends Base
{

    /**
     * 创建标签
     *
     * @link https://work.weixin.qq.com/api/doc#10915
     *
     * @param $fields
     *
     * @return mixed
     */
    public function create($fields) {
        return ((new Request())->setUrl("tag/create")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * 更新标签名字
     *
     * @link https://work.weixin.qq.com/api/doc#10919
     *
     * @param $fields
     *
     * @return mixed
     */
    public function update($fields) {
        return ((new Request())->setUrl("tag/update")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * 删除标签
     *
     * @link https://work.weixin.qq.com/api/doc#10920
     *
     * @param $tagId
     *
     * @return mixed
     */
    public function delete($tagId) {
        return ((new Request())->setUrl("tag/delete")->setFields(['tagid' => $tagId])->request());
    }

    /**
     * 获取标签成员
     *
     * @link https://work.weixin.qq.com/api/doc#10921
     *
     * @param $tagId
     *
     * @return mixed
     */
    public function detail($tagId) {
        return ((new Request())->setUrl("tag/get")->setFields(['tagid' => $tagId])->request());
    }

    /**
     * 增加标签成员
     *
     * @link https://work.weixin.qq.com/api/doc#10923
     *
     * @param $fields
     *
     * @return mixed
     */
    public function addTagUsers($fields) {
        return ((new Request())->setUrl("tag/addtagusers")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * 删除标签成员
     *
     * @link https://work.weixin.qq.com/api/doc#10925
     *
     * @param $fields
     *
     * @return mixed
     */
    public function deleteTagUsers($fields) {
        return ((new Request())->setUrl("tag/deltagusers")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * 获取标签列表
     *
     * @link https://work.weixin.qq.com/api/doc#10926
     *
     * @return mixed
     */
    public function list() {
        return ((new Request())->setUrl("tag/list")->request());
    }

}