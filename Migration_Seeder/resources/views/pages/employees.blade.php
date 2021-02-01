@extends('layouts.main-layout')
@section('content')
    <div class="employees-container">

        <a href="{{ route('employee-create') }}">Create New Employee</a>

        @foreach ($employees as $employee)
            <ul>
                <li>
                    <a href="{{ route('show-employee', $employee->id) }}">
                        {{ $employee->name }}
                        {{ $employee->lastname }}
                    </a>
                </li>
            </ul>
        @endforeach
    </div>

@endsection
