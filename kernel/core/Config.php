<?php
namespace kernel\core;

class Config {

	private $conf = [];

	public function set($key, $val) {
		$this->conf[$key] = $val;
		echo 'config set: key =>' . $key . '; val => ' . $val;
		echo PHP_EOL;
	}

	public function get($key) {
		return isset($this->conf[$key]) ? $this->conf[$key] : false;
	}

}