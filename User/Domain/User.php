<?php
class  Domain_User
{
    public function  useradd($data)
    {
        $Model_User = new Model_User();
        $uId =  $Model_User->useradd($data);
        if (!$uId)
        {
            throw new PhalApi_Exception_BadRequest(T("Error UserAdd"),-1);
        }

        return $uId;

    }
}