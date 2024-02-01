<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Report;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'HomeController@show')->name('show');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/user', 'UserController@index')->name('user')->middleware('admin');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');


Route::get('/addreport', function () {
    return view('report/addreport');
})->name('addreport')->middleware('admin');

Route::get('/manage', function () {
    return view('report/manage');
})->name('manage')->middleware('admin');

Route::get('/manage', 'ReportController@index')->name('manage')->middleware('admin');
Route::post('/addreport', [ReportController::class, 'simpan'])->name('simpan-report')->middleware('admin');

Route::delete('/manage/{report}', 'ReportController@destroy')->name('reports.destroy')->middleware('can:delete,report')->middleware('admin');

Route::get('/report/{id}/edit', 'ReportController@edit')->name('reports.edit')->middleware('admin');
Route::put('/report/{id}', 'ReportController@update')->name('reports.update')->middleware('admin');

Route::post('/upload/image/{id}', 'ReportController@uploadImage')->name('upload.image');

Route::prefix('reports')->group(function () {
    Route::post('{id}/mark-uploaded', [ReportController::class, 'markUploaded'])->name('reports.markUploaded');
});

