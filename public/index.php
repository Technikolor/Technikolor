<?php declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

$bootstrap = require_once __DIR__ . '/../bootstrap.php';

$app = $bootstrap->app();

$app->run();
