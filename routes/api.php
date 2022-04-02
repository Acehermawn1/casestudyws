<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
Route::get('/mobile-legends/hero', [\App\Http\Controllers\WrapperAPI::class, 'hero'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)    
    ->name('hero');
Route::get('/mobile-legends/role', [\App\Http\Controllers\WrapperAPI::class, 'role'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)  
    ->name('role');
Route::get('/mobile-legends/specially', [\App\Http\Controllers\WrapperAPI::class, 'specially'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)  
    ->name('specially');
Route::get('/mobile-legends/hero/{hero_id}', [\App\Http\Controllers\WrapperAPI::class, 'filterhero'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)    
    ->name('filterhero');
    Route::get('/mobile-legends/specially', [\App\Http\Controllers\WrapperAPI::class, 'filterspecially'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)  
    ->name('filterspecially');
Route::get('/user/identitas', function(){
    return [
        'code' => '0',
        'data' => [
            'npm' => '197006001',
            'nama' => 'Ace Hermawan',
            'email' => '197006001@student.unsil.ac.id'
            ]
        ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class) ;

    //Heroku pw : Ace/197006001