<?php
/**
 * 默认接口服务类
 *
 * @author: dogstar <chanzonghuang@gmail.com> 2014-10-04
 */

class Api_Config extends PhalApi_Api {

	public function getRules() {
        return array(
            'index' => DI()->config->get("app.Config-index"),
        );
	}
	
	/**
	 * 默认接口服务
	 * @return string title 标题
	 * @return string content 内容
	 * @return string version 版本，格式：X.X.X
	 * @return int time 当前时间戳
	 */
	public function index() {

        return DI()->config->get("app.Config-index");
	}
}
