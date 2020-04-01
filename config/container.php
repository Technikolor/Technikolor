<?php declare(strict_types=1);

/**
 * Register your app dependencies here.
 * Auto-wiring delegate included. Remove it to disable auto-wiring.
 *
 * @var $container Technikolor\Container\Container
 */

$container->delegate(
    (new League\Container\ReflectionContainer())->cacheResolutions()
);
