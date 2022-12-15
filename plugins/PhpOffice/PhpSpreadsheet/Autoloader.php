<?php

namespace PhpOffice\PhpSpreadsheet;


//PHPExcel_Shared_ZipStreamWrapper::register();
// check mbstring.func_overload
if (ini_get('mbstring.func_overload') & 2) {
	throw new Exception('Multibyte function overloading in PHP must be disabled for string functions (2).');
}

if (!defined('PLUGINS_ROOT')) {
	define('PLUGINS_ROOT', dirname(__FILE__) . '/../../');
}

Autoloader::Register();
class Autoloader
{
	public static function Register() {
		spl_autoload_register(function($name) {
            Autoloader::Load($name);
        });
	}	//	function Register()


	public static function Load($pObjectName){

		//TODO:check if from  lib or from dep
		
		$pObjectFilePath =	PLUGINS_ROOT . "/"  . $pObjectName . '.php';

		if ((file_exists($pObjectFilePath) === false) || (is_readable($pObjectFilePath) === false)) {
			return false;
		}

		require($pObjectFilePath);
	}	//	function Load()

}