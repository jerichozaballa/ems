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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'EmployeesController@index')->name('employees.index');

Route::get('employees', 'EmployeesController@index')->name('employees.index');
Route::get('employees/create', 'EmployeesController@create')->name('employees.create');
Route::post('employees', 'EmployeesController@store')->name('employees.store');
Route::patch('employees/{employee}', 'EmployeesController@update')->name('employees.update');
Route::delete('employees/{employee}', 'EmployeesController@destroy')->name('employees.destroy');