<?php declare(strict_types=1);

/**
 * Register app routes here
 *
 * @var $router Technikolor\Router\Router
 */

$router->get('/', App\Http\View\HomepageAction::class);

/**
 * API route group
 * More about routes https://route.thephpleague.com/4.x/routes
 */
$router->group('api/v1', function (League\Route\RouteGroup $group) {
    $group->get('book', [App\Http\Resource\BookResource::class, 'list']);
});
