<?php

use App\Mail\MonthlyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('send-email', function(){
    $users = User::all();

    foreach ($users as $user) {
        $email = new MonthlyEmail();
        Mail::to($user->email)->send($email);
    }

    return 'success';
})->name('send-email');
