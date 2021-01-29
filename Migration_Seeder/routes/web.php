<?php

use Illuminate\Support\Facades\Route;

//creo rotta per funzione index nel controller Employee
Route::get('/employees', 'EmployeeController@index')->name('employees');

//creo rotta per funzione show nel controller Employee
Route::get('/employee/{id}', 'EmployeeController@show')->name('show-employee');


//creo rotta per funzione index nel controller Brand
Route::get('/brands', 'BrandController@index')->name('brands');

//creo rotta per funzione index nel controller Brand
Route::get('/brand/{id}', 'BrandController@show')->name('show-brand');
