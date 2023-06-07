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





// articles
Route::get("/articles","App\Http\Controllers\ArticleCtrl@index");

Route::get("/articles/create","App\Http\Controllers\ArticleCtrl@create");

Route::post("/articles","App\Http\Controllers\ArticleCtrl@store");

Route::get(
        "/articles/{linux_id}",
        "App\Http\Controllers\ArticleCtrl@show"
    );

Route::get(
        "/articles/{linux_id}/edit",
        "App\Http\Controllers\ArticleCtrl@edit"
    );

Route::put(
        "/articles/{linux_id}",
        "App\Http\Controllers\ArticleCtrl@update"
    );

Route::delete(
        "/articles/{linux_id}",
        "App\Http\Controllers\ArticleCtrl@destroy"
    );






//linux
Route::get("/linux","App\Http\Controllers\LinuxCtrl@index");

Route::get("/linux/create","App\Http\Controllers\LinuxCtrl@create");

Route::post("/linux","App\Http\Controllers\LinuxCtrl@store");

Route::get(
        "/linux/{article_id}",
        "App\Http\Controllers\LinuxCtrl@show"
    );

Route::get(
        "/linux/{article_id}/edit",
        "App\Http\Controllers\LinuxCtrl@edit"
    );

Route::put(
        "/linux/{article_id}",
        "App\Http\Controllers\LinuxCtrl@update"
    );

Route::delete(
        "/linux/{article_id}",
        "App\Http\Controllers\LinuxCtrl@destroy"
    );