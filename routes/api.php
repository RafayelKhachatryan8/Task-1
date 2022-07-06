<?php

use App\Console\Commands\TestCommand;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\UserFollowController;
use App\Jobs\SendEmailJob;
use App\Models\Post;
use App\Models\WebSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[TestController::class, 'test']);

Route::get('/WebSite',[WebSiteController::class, 'site']);

Route::get('/Subscribers',[SubController::class, 'subscribe']);

Route::get('/Subs',function (){
    return WebSite::where('id', 2)->with('subscribers')->first();
});

Route::get('/EmailTake',function (){
    $webSite =  WebSite::where('id', 2)->first();
    $subscribers = $webSite->subscribers;
    dd($subscribers[0]->email);
});

Route::get('/WebSitePosts',[PostController::class, 'posts']);

Route::post('/posts',function (){
    $posts =  Post::where('id', 1)->first();
    $site = $posts->sitePost->site_name;
    dd($site);
});

Route::get('/sendMail',[TestCommand::class, 'handle']);
