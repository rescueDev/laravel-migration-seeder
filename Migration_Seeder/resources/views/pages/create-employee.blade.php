@extends('layouts.main-layout')
@section('content')
    <form id="newbrand" action="{{ route('employee-store') }}" method="POST">

        @csrf
        @method('POST')
        <label for="name">Name:</label>
        <input type="text" name="name">
        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname">
        <label for="hireDate">Hire Date:</label>
        <input type="text" name="hireDate">

        <input type="submit" value="SUBMIT">


    </form>
@endsection
