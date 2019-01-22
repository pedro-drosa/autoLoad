<?php 
// ########## Created on : 22/01/2018, 17:00:00
// ########## Author     : @PEDRO_DROSA

// ########## FILE NAMES ##########
// ########## Change values ​​if necessary.	
	define('PATH_NAME', 'class'); //Default folder
	define('FILE_EXTENSION',".class.php"); // Default extension
// ########## AUTOLOAD ##########
	spl_autoload_register(function($className){	
	if (file_exists(PATH_NAME.DIRECTORY_SEPARATOR.$className.FILE_EXTENSION)) {
		require_once PATH_NAME.DIRECTORY_SEPARATOR.$className.FILE_EXTENSION;
	}else{
		trigger_error("Error while including: ".PATH_NAME.DIRECTORY_SEPARATOR.$className.FILE_EXTENSION,E_USER_ERROR);
	}
});