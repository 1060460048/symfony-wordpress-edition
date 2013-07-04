<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

require 'wp-load.php';

if (WP_DEBUG) {
	$loader = require_once __DIR__ . '/../app/autoload.php';
	Debug::enable();
	require_once __DIR__ . '/../app/AppKernel.php';
	$kernel = new AppKernel('dev', true);
} else {
	$loader = require_once __DIR__ . '/../app/bootstrap.php.cache';
	require_once __DIR__ . '/../app/AppKernel.php';
	$kernel = new AppKernel('prod', false);
	$kernel->loadClassCache();
}

//set base for relative paths
chdir(__DIR__ . '/..');

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
