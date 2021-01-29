@extends('layouts.main-layout')

@section('content')
    <div class="home-container">

        <h1>
            HOME PAGE

        </h1>
        <ul class="nav">
            <a href="{{ route('employees') }}">
                <li>Employees</li>

            </a>

            <a href="{{ route('brands') }}">

                <li>Brands</li>
            </a>
            <a href="{{ route('locations') }}">

                <li>Locations</li>
            </a>
        </ul>

    </div>
@endsection
