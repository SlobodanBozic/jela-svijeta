<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => '/response', 'namespace' => 'Api\Responses', 'as' => 'api.'], function () {

        Route::resource('languages', 'LanguagesController', ['except' => ['create', 'edit']]);

        Route::resource('categories', 'CategoriesController', ['except' => ['create', 'edit']]);

        Route::resource('tags', 'TagsController', ['except' => ['create', 'edit']]);

        Route::resource('ingredients', 'IngredientsController', ['except' => ['create', 'edit']]);

        Route::resource('meals', 'MealsController', ['except' => ['create', 'edit']]);

});
