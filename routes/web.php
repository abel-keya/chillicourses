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


Route::get('/', function () {
  return view('index');
});

/*Route::get('/about',          ['uses' => 'Home\HomeController@about']);

Route::get('/contact',        ['uses' => 'Home\HomeController@contact']);

Route::get('/terms',          ['uses' => 'Home\HomeController@terms']);

Route::get('/policy',         ['uses' => 'Home\HomeController@policy']);

Route::get('/account',        ['uses' => 'Account\AccountController@account']);

Route::get('/enroll',         ['uses' => 'Course\EnrollController@enroll']);

Route::get('/enrolled',       ['uses' => 'Course\EnrollController@enrolled']);


Route::resource('course',     'Course\CourseController');

Route::resource('assignment', 'Course\AssignmentController');

Route::resource('quiz',       'Course\QuizController');

Route::get('/results/quiz',   'Course\QuizController@results');

Route::resource('topic',      'Course\TopicController');

Route::get('/topic/delete/{id}', 'Course\TopicController@getdestroy');

Route::resource('subtopic',   'Course\SubtopicController');

Route::get('/subtopic/delete/{id}', 'Course\SubtopicController@getdestroy');

Route::resource('classes',    'Course\ClassesController');

Route::get('/class/delete/{id}', 'Course\ClassesController@getdestroy');
*/


/*	Social Authentication Routes
|--------------------------------------------------------------------------| */

