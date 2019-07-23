<?php
	
	function logger($msg){
		file_put_contents("./a.txt", $msg.PHP_EOL, FILE_APPEND);
	}

	error_reporting(E_ALL);
	ini_set("display_errors", "Off");
	ini_set("log_errors","On");
	ini_set("error_log","./errors.txt");

	function handleException(Exception $e){

		$msg = date("Y-m-d H:i:s")." :[".$e->getMessage()." in ".$e->getFile()." on ".$e->getLine()."]";

		logger($msg);

	}

	function handleError($errno, $errstr, $errfile, $errline){

		throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
	}

	function handleLast(){
		$lastError = error_get_last();
		if($lastError){
			var_dump($lastError);
			handleException(new ErrorException($lastError['message'], 0, $lastError['type'], $lastError['file'], $lastError['line']));
		}
	}

	set_exception_handler("handleException");
	set_error_handler("handleError");
	register_shutdown_function("handleLast");

	require "a.php";