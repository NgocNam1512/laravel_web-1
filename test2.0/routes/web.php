<?php

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

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/myexam', 'MyExamController@getMyExam');
Route::post('/myexam','MyExamController@postMyExam')->name('postmyexam');
Route::get('/myexam/{id}','MyExamController@getCreateExam');
Route::get('/exam','ExamController@getExamList');
Route::get('exam/1','ExamController@getExam');





