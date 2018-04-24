<?php

namespace yeedomliu\workwx;

class User extends Base
{

    /**
     * @param $fields
     *
     * @return mixed
     */
    public function create($fields) {
        return ((new Request())->setUrl("user/create")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * @param $userId
     *
     * @return mixed
     */
    public function detail($userId) {
        return ((new Request())->setUrl("user/get?userid={$userId}")->request());
    }

    /**
     * @param $fields
     *
     * @return mixed
     */
    public function update($fields) {
        return ((new Request())->setUrl("user/update")->setPostMethod()->setJsonEncodeFields()->setFields($fields)->request());
    }

    /**
     * @param $userId
     *
     * @return mixed
     */
    public function delete($userId) {
        return ((new Request())->setUrl("user/delete?userid={$userId}")->request());
    }

    /**
     * 批量删除成员
     *
     * @link https://work.weixin.qq.com/api/doc#10060
     *
     * @param $userIds
     *
     * @return mixed
     */
    public function batchDelete($userIds) {
        return ((new Request())->setUrl("user/batchdelete")->setPostMethod()->setJsonEncodeFields()->setFields(['useridlist' => $userIds])->request());
    }

    /**
     * 获取部门成员
     *
     * @link https://work.weixin.qq.com/api/doc#10061
     *
     * @param     $departmentId
     * @param int $fetchChild
     *
     * @return mixed
     */
    public function simpleList($departmentId, $fetchChild = 0) {
        return ((new Request())->setUrl("user/simplelist")->setFields([
                                                                          'department_id' => $departmentId,
                                                                          'fetch_child'   => $fetchChild,
                                                                      ])->request());
    }

    /**
     * 获取部门成员详情
     *
     * @link https://work.weixin.qq.com/api/doc#10063
     *
     * @param     $departmentId
     * @param int $fetchChild
     *
     * @return mixed
     */
    public function getList($departmentId, $fetchChild = 0) {
        return ((new Request())->setUrl("user/list")->setFields([
                                                                    'department_id' => $departmentId,
                                                                    'fetch_child'   => $fetchChild,
                                                                ])->request());
    }

    /**
     * 根据code获取成员信息
     *
     * @link https://work.weixin.qq.com/api/doc#10028
     *
     * @param $code
     *
     * @return mixed
     */
    public function getUserinfo($code) {
        return ((new Request())->setUrl("user/getuserinfo")->setFields(['code' => $code])->request());
    }

    /**
     * 使用user_ticket获取成员详情
     *
     * @link https://work.weixin.qq.com/api/doc#10028
     *
     * @param $userTicket
     *
     * @return mixed
     */
    public function getUserdetail($userTicket) {
        return ((new Request())->setUrl("user/getuserdetail")->setFields(['user_ticket' => $userTicket])->request());
    }

    /**
     * userid与openid互换
     *
     * @link https://work.weixin.qq.com/api/doc#11279
     *
     * @param $userId
     *
     * @return mixed
     */
    public function convertToOpenid($userId) {
        return ((new Request())->setUrl("user/convert_to_openid")->setPostMethod()->setJsonEncodeFields()->setFields(['userid' => $userId])->request());
    }

    /**
     * 二次验证
     *
     * @link https://work.weixin.qq.com/api/doc#11378
     *
     * @param $userId
     *
     * @return mixed
     */
    public function authsucc($userId) {
        return ((new Request())->setUrl("user/authsucc")->setFields(['userid' => $userId])->request());
    }

}