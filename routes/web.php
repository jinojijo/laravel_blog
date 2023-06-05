<?php

use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function()
    {
        return view('about');
    }
);

Route::get('/contact', function()
    {
        $data= array (
            "whatsapp"=>"by whatsapp",
            "instagram"=>"by instagram"
        );
        return view('contact_us',$data);
    }
);

Route::get('/contact/{id}', 'App\Http\Controllers\ContactController@index');


Route::get("/articles","App\Http\Controllers\ArticleCtrl@index");

Route::get("/articles/create","App\Http\Controllers\ArticleCtrl@create");

Route::post("/articles","App\Http\Controllers\ArticleCtrl@store");

Route::get(
        "/articles/{article_id}",
        "App\Http\Controllers\ArticleCtrl@show"
    );

Route::get(
        "/articles/{article_id}/edit",
        "App\Http\Controllers\ArticleCtrl@edit"
    );

Route::put(
        "/articles/{article_id}",
        "App\Http\Controllers\ArticleCtrl@update"
    );

Route::delete(
        "/articles/{article_id}",
        "App\Http\Controllers\ArticleCtrl@destroy"
    );