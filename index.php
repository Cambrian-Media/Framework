<?php

/**
 * Tells every other script that it has been safely loaded through the front
 * controller
 */
define('FRONT_LOADED', TRUE);

/**
 * Define system directories
 */
define('APPPATH', 'application/');
define('SYSPATH', 'system/');
define('EXT', 'php');

// Load core files
require_once('system/core/System_Exception.php');
require_once('system/core/System_Config.php');
require_once('system/core/System.php');

// Initialise the framework
System::init();

// Initialise the router
Router::find_uri();
Router::setup();

// Go!
System::instance();

//$a = new Home_Controller();

System_Log::save();


?>
