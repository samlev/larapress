<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__ . '/../bootstrap/app.php';

$app->bootWordPressRouter();
$app->boot();

// Queue up mixed CSS
add_action( 'wp_enqueue_scripts', 'larapress_scripts' );
function larapress_scripts() {
    wp_enqueue_style('larapress-style', mix('/dist/css/style.css'));
}