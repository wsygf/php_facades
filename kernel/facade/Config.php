<?php
namespace kernel\facade;

use kernel\core\Config as ConfigProvider;
use kernel\core\Facades;

class Config extends Facades {

	/**
	 * 设置对象类
	 * @return string 类名
	 */
	public static function getFacadeClass() {
		return ConfigProvider::class;
	}
}
