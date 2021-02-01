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
    public function create()
    {
        return view('pages.create-employee');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // $newEmployee = new Employee;
        // $newEmployee->name = $request->get('');
        // $newEmployee->lastname = $request->get();
        // $newEmployee->hireDate = $request->get();
        Employee::create($request->all());
        return redirect()->route('employees');
    }
}
