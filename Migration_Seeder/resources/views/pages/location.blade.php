@extends('layouts.main-layout')

@section('content')
    Location Details:
    <h3>Name: {{ $location->name }}</h3>
    <h3>Street: {{ $location->street }}</h3>
    <h3>Number of employees: {{ $location->numberOfEmplooyees }}</h3>
@endsection
