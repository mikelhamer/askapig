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

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'questions');

Route::get('questions/random', [
    'as' => 'questions.random', 'uses' => 'QuestionController@showRandom'
]);

Route::resource('questions', 'QuestionController');

Route::post('questions/{id}/answers', [
    'as' => 'questions.answers.save', 'uses' => 'QuestionController@saveAnswer'
]);
