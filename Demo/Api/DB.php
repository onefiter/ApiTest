<?php

class Api_DB extends PhalApi_Api {

    public function getRules() {
        return array(

            'index'=>array(),
        );
    }

    public  function  index()
    {
//        $rs = DI()->notorm->user->fetch();
//        $rs = DI()->notorm->user->fetchAll();
//        $rs = DI()->notorm->user->where("id",2)->fetch(); //id等于2的记录
//        $rs = DI()->notorm->user->where("id != ?",2)->fetch(); //id不等于2的记录
//        $rs = DI()->notorm->user->where("id",array(1,2))->fetchAll(); //id等于1,2的记录
//        $rs = DI()->notorm->user->where("id",5)->update(array('note'=>'China')); //更改数据
//        $rs = DI()->notorm->user->insert(array('name'=>'够了','note'=>'heheda')); //插入数据
//        $rs = DI()->notorm->user->where('id',6)->delete(); //删除数据
//        $model_user = new Model_User();
//        $rs = $model_user->getByUserId(5);

        $sql = "select * from tbl_user where id = :id";
        $params = array(
          ":id"=>1
        );
        //原生的SQL语句
        $rs = DI()->notorm->example->queryAll($sql,$params);

        return $rs;
    }
}
