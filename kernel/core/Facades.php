<?php
namespace kernel\core;

class Facades {

	/**
	 * 对象绑定
	 * @var array
	 */
	private static $bind = [];

	/**
	 * 获取对应类名
	 * @return mixed 返回类名
	 */
	public static function getFacadeClass() {
	}

	/**
	 * 创建单例绑定
	 * @return mixed 返回对应类对象
	 */
	public static function create() {
		$class = static::getFacadeClass();
		if (!isset(self::$bind[$class])) {
			self::$bind[$class] = new $class;
		}
		return self::$bind[$class];
	}

	/**
	 * 魔法函数，不存在的静态方法进入
	 * @param string $method
	 * @param array $arg
	 * @return mixed
	 */
	public static function __callStatic($method, $arg) {
		return call_user_func_array([self::create(), $method], $arg);
	}
}