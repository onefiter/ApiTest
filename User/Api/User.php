<?php
/**
 *USE模块
 */
class Api_User extends PhalApi_Api {
    /**
     *getRules:定义验证规则
     */
    public function getRules() {
        return array(
            //用户注册'
            'useradd'=>array(
               'username'=>array('name' => 'username', 'type' => 'string', 'min' => 6, 'max' => 25, 'require' => true, 'desc' => '用户名称' ),
               'password'=>array('name' => 'password', 'type' => 'string', 'min' => 8, 'max' => 32, 'require' => true, 'desc' => '用户密码' ),
               'phone'=>array('name' => 'phone', 'type' => 'string', 'min' => 11, 'max' => 11, 'require' => true, 'desc' => '用户电话' ),

            ),
            //用户登录
            'userlogin'=>array(
                'username'=>array('name' => 'username', 'type' => 'string', 'min' => 6, 'max' => 25, 'require' => true, 'desc' => '用户名称' ),
                'password'=>array('name' => 'password', 'type' => 'string', 'min' => 8, 'max' => 32, 'require' => true, 'desc' => '用户密码' ),
            ),
            //获取用户详情
            'getuserinfo'=>array(
                'uId'=>array('name' => 'uId', 'type' => 'string', 'min' => 0,  'require' => true, 'desc' => '用户ID' ),
            ),
            //获取用户列表
            'getuserlist'=>array(),

        );
    }
    /**
     * 用户注册
     */
   public  function  useradd()
   {
       $Domain_User = new Domain_User();
       //验证用户名称是否存在
       $Domain_User->checkUsername($this->username);
       return $Domain_User ->useradd($this);

   }
    /**
     * 用户登录
     */
    public  function  userlogin()
    {
        return "userlogin";
    }
    /**
     * 获取用户详情
     */
    public  function  getuserinfo()
    {
        return "getuserinfo";
    }
    /**
     * 获取用户李彪
     */
    public  function  getuserlist()
    {
        return "getuserlist";
    }
}
