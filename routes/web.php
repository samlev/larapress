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
    return view('index');
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
    return view('single');
});
$router->get('page', function () use ($router) {
    return view('page');
});
$router->get('404', function () use ($router) {
    return view('404');
});
$router->get('search', function () use ($router) {
    return view('search');
});

$router->get('author-{name}', 'AuthorController@byName');
