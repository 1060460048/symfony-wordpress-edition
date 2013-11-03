<?php

/**
 * Create the Symfony application kernel.
 *
 * Used in the main index.php front controller and also in the Symfony Event Bridge WP plugin.
 */

//load Composer autoloader
require_once __DIR__ . '/../app/autoload.php';
require_once __DIR__ . '/../app/AppKernel.php';

if (defined('WP_DEBUG') && WP_DEBUG) {
	//create debug mode kernel
	$kernel = new AppKernel('dev', true);
} else {
	//in production mode, class and config cache must be explicitly cleared
	$kernel = new AppKernel('prod', false);
	$kernel->loadClassCache();
}

return $kernel;