<?php
class  Domain_User
{
    /**
     * 用户注册
     */
    public function  useradd($data)
    {
        $Model_User = new Model_User();
        $uId =  $Model_User->useradd($data);
        if (!$uId)
        {
            throw new PhalApi_Exception_BadRequest(T("Error UserAdd"),-1);
        }

        return (int)$uId['id'];

    }
    /**
     * 验证用户名是否存在
     */
    public  function  checkUsername($username)
    {
        $Model_User = new Model_User();
        $userinfo =   $Model_User -> getInfoByUserName($username);
        if ($userinfo)
        {
            throw  new PhalApi_Exception_BadRequest(T('userName existing'),-1);
        }
    }
}