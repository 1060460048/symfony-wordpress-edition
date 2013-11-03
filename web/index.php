<?php

use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

//load WordPress
require 'wp-load.php';

//on a cache hit, we don't get this far

$kernel = require_once 'create-kernel.php';

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
