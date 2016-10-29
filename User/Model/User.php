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
}
