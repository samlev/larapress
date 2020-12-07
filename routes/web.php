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

$router->get('index', 'IndexController@list');
$router->get('single', 'PostController@single');

$router->get('archive-post', function () use ($router) {
    return 'archive-post.php';
});
$router->get('archive', function () use ($router) {
    return 'archive.php';
});

$router->get('page', 'PostController@page');
$router->get('404', function () use ($router) {
    return view('404');
});
$router->get('search', function () use ($router) {
    return view('search');
});

$router->get('author-{name}', 'AuthorController@byName');
