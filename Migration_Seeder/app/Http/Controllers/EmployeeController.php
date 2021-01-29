<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.employees', compact('employees'));
        dd($employees);
    }
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('pages.employee', compact('employee'));
    }
}
