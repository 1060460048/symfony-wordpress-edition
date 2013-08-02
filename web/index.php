<?php

use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

//load WordPress
require 'wp-load.php';

//on a cache hit, we don't get this far

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

//pretty exception messages
ExceptionHandler::register($kernel->isDebug());

//set base for relative paths
chdir(__DIR__ . '/..');

//create request object
$request = Request::createFromGlobals();

//do most of the work
$response = $kernel->handle($request);

//send the response (but don't flush because of Hypercache)
$response->sendHeaders();
$response->sendContent();

//do any further slow things (benefit is lost due to not flushing)
$kernel->terminate($request, $response);
