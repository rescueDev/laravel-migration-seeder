@extends('layouts.main-layout')

@section('content')
    <h1>
        Brand Details:
        <h4>ID: [{{ $brand->id }}]</h4>
        <h3>Name: {{ $brand->name }}</h3>
        <img src="{{ $brand->logo }}">
        <h3>Number of locations : {{ $brand->numberOfLocations }}</h3>
    </h1>
@endsection
