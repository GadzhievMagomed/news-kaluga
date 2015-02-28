<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');


//
Route::bind('news_categories', function($value, $route) {
    $category = News_categories::where('alias', $value)->where('parent', '=', 1)->first();
   return  $category;
});

Route::bind('organizations_categories', function($value, $route) {
    $category = News_categories::where('alias', $value)->where('parent', '=', 1)->first();
    return  $category;
});

Route::get('{news_categories}', array('as' => 'news_general_category',
        "uses" =>'NewsController@general_category')
);



//
Route::get('каталог-калуги/{organizations_categories}', 'OrganizationsController@general_category');

