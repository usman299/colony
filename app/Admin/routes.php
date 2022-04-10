<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('invoices-print/{id}', 'Visitor_RecordController@printInvoice')->name('admin/invoices-print');
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('properties', PropertyController::class);
    $router->resource('posts', PostController::class);
    $router->resource('visitor_-records', Visitor_RecordController::class);
    $router->resource('complains', ComplainController::class);
    $router->resource('bookings', BookingController::class);
    $router->resource('reviews', ReviewController::class);
    $router->resource('blogs', BlogController::class);


});
