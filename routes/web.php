<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('index', function () use ($router) {
    return $router->app->version();
});
$router->get('singular', function () use ($router) {
    return 'singular.php';
});

$router->get('archive-post', function () use ($router) {
    return 'archive-post.php';
});
$router->get('archive', function () use ($router) {
    return 'archive.php';
});

$router->get('single', function () use ($router) {
    return 'single.php';
});
$router->get('page', function () use ($router) {
    return 'page.php';
});
$router->get('home', function () use ($router) {
    return 'home.php';
});
$router->get('404', function () use ($router) {
    return '404.php';
});
$router->get('search', function () use ($router) {
    return 'search.php';
});

$router->get('author-{name}', function ($name) use ($router) {
    return 'author-name.php - ' . $name;
});
