<?php
require 'vendor/autoload.php';

use kernel\core\Config;
use kernel\facade\Config as ConfigFacade;

class App {

	public static function run() {

		$config = new Config();

		$config->set('app_name', 'php_facades');

		echo $config->get('app_name');
		
		echo PHP_EOL;

		ConfigFacade::set('version', 'v1.0.1');
		echo ConfigFacade::get('version');
	}

}

// start
App::run();
