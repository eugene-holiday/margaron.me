<?php


Route::get('/', [
    'as' => 'home',
    'uses' => 'BlogController@index'
]);

Route::get('{slug}', [
    'as' => 'page',
    'uses' => 'PagesController@showBySlug'
]);


Route::get('about', array('as' => 'about', function()
{
    return View::make('static.about');
}));
Route::get('contact', array('as' => 'contact', function()
{
    return View::make('static.contact');
}));
Route::get('portfolio', array('as' => 'portfolio', function()
{
    return View::make('static.portfolio');
}));


Route::resource('blog', 'BlogController');


Route::resource('profile', 'ProfileController',
    array('only' => array('index', 'update')));
Route::get('profile/edit', [
    'as' => 'profile.edit',
    'uses' => 'ProfileController@edit'
]);

Route::get('logout', [
    'as' => 'logout',
    'before' => 'auth',
    'uses' => 'HomeController@logout'
]);


Route::group(['before' => 'guest'], function()
{
    Route::get('login', [
        'as' => 'auth',
        'uses'=>'HomeController@auth'
    ]);

    Route::post('auth', [
        'as' => 'doAuth',
        'uses' => 'HomeController@doAuth',
        'before' => 'csrf'
    ]);
});


Route::get('dashboard', function()
{
    // we dont need to use Laravel Blade
    // we will return a PHP file that will hold all of our Angular content
    // see the "Where to Place Angular Files" below to see ideas on how to structure your app
    return View::make('dashboard'); // will return app/views/index.php
});

Route::group(array('prefix' => 'api'), function() {

    Route::resource('blog', 'BlogController',
        array('only' => array('index', 'store', 'destroy')));
});

App::missing(function($exception)
{
    return View::make('dashboard');
});


Route::resource('pages', 'PagesController');