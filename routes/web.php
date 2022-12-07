<?php

use Illuminate\Support\Facades\Route;

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


/**Email SEtting */
Route::post('/get-token', [App\Http\Controllers\OauthController::class, 'doGenerateToken'])->name('generate.token');
Route::get('/get-token', [App\Http\Controllers\OauthController::class, 'doSuccessToken'])->name('token.success');
Route::post('/send', [App\Http\Controllers\MailController::class, 'doSendEmail'])->name('send.email');

Route::get('ResetPassword',function(Request $request){
    $id = $request->token;
    return view('auth.passwords.reset',compact('id'));
});

