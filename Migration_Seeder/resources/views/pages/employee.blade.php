@extends('layouts.main-layout')
@section('content')

    <div>
        <h2>ID: {{ $employee->id }}</h2>
        <h2>Name: {{ $employee->name }}</h2>
        <h2>Lastname: {{ $employee->lastname }}</h2>
        <h2>Hire Date: {{ $employee->hireDate }}</h2>
    </div>


@endsection
