<?php
/**
 * 请在下面放置任何您需要的应用配置
 */

return array(

    /**
     * 应用接口层的统一参数
     */
//    'apiCommonRules' => array(
//        //'sign' => array('name' => 'sign', 'require' => true),
//    ),
    'Config-index' => array(
        'userId' => array('name' => 'user_id', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID')
    ),

);
