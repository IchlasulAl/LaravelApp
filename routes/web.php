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

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/home', 'PagesController@home');
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
// Route::get('/about', function () {
//     $nama = 'Ichlasul Al';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/mahasiswa', 'MahasiswaController@index');


//Students
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}','StudentsController@update');
Route::resource('students','StudentsController');