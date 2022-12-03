<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group([
    'namespace' => 'Admin',
], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');
});

/**
 * Auth
 *
 */
Route::group([
    'namespace' => 'Admin',
    'middleware' => ['auth:admin'],
], function () {
    // Login
    Route::get('/','AdminController@index')->name('admin.index');

    // Question
    Route::group(['prefix' => 'questions'], function () {
        Route::get('/create','QuestionController@create')->name('admin.question.create');
        Route::get('/datatables','QuestionController@indexByDataTable')->name('admin.question.datatables');
        Route::get('/','QuestionController@index')->name('admin.question.index');
        Route::get('/{id}', 'QuestionController@show')->name('admin.question.show');
        Route::post('/store', 'QuestionController@store')->name('api.question.store');
        Route::get('/{id}/edit','QuestionController@edit')->name('admin.question.edit');
        Route::get('/{id}/delete','QuestionController@destroy')->name('admin.question.delete');
    });

    // Exams
    Route::group(['prefix' => 'exams'], function () {
        Route::get('/','ExamController@index')->name('admin.exam.index');
        Route::get('/create','ExamController@create')->name('admin.exam.create');
        Route::get('/datatables','ExamController@indexByDataTable')->name('admin.exam.datatables');
        Route::post('/store','ExamController@store')->name('admin.exam.store');
        Route::post('/{id}/update','ExamController@update')->name('admin.exam.update');
        Route::get('/{id}/edit','ExamController@edit')->name('admin.exam.edit');
        Route::get('/{id}/show','ExamController@show')->name('admin.exam.show');
        Route::get('/{id}/delete','ExamController@destroy')->name('admin.exam.delete');
    });

    // Files
    Route::group(['prefix' => 'files'], function () {
        Route::post('/image-single/upload', 'FileController@imageSingleUpload')->name('api.file.image-single.upload');
    });
});


