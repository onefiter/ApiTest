<?php
/**
 * Demo 统一入口
 */
//init.php 模块化文件
require_once dirname(__FILE__) . '/../init.php';

//装载你的接口
DI()->loader->addDirs('User');

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();


$rs = $api->response();

$rs->output();

