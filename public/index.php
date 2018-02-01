<?php

define('MARS_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../boot/app.php';

$app->run();
