<?php

use Illuminate\Support\Facades\Route;

Route::get('/employees', 'EmployeeController@index')->name('employees');

Route::get('/employee/{id}', 'EmployeeController@show')->name('show-employee');
