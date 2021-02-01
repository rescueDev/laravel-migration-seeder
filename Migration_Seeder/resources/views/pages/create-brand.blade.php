@extends('layouts.main-layout')
@section('content')
    <form id="newbrand" action="{{ route('brand-store') }}" method="POST">

        @csrf
        @method('POST')
        <label for="name">Name:</label>
        <input type="text" name="name">
        <label for="logo">Logo:</label>
        <input type="text" name="logo">
        <label for="numberOfLocations">Locations count:</label>
        <input type="text" name="numberOfLocations">

        <input type="submit" value="SUBMIT">


    </form>

@endsection
