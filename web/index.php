<?php

require __DIR__.'/../vendor/autoload.php';

use KejawenLab\Application\Bootstrap;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$app = new Bootstrap();
$app->handle($request);
