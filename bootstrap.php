<?php declare(strict_types=1);

use Technikolor\Container\Container;

$container = new Container();

// Remove this delegate if you not need auto-wiring
$container->delegate(
    (new \League\Container\ReflectionContainer())->cacheResolutions()
);
