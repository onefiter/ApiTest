<?php

class Model_User extends PhalApi_Model_NotORM {

    protected function getTableName($id) {
        return 'user';
    }

    public function  useradd($data)
    {
        return $this->getORM()->insert(array(
            'username'=>$data->username,
            'password'=>$data->password,
            'phone'=>$data->phone,
            'time'=>time()
        ));
    }

    /**
     * 通过用户名获取信息
     */
    public  function getInfoByUserName($username)
    {
        //查询语句
        return $this->getORM()->where('username', $username)->fetch();
    }
}
