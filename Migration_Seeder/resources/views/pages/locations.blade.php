@extends('layouts.main-layout')

@section('content')
    <div class="locations-container">

        @foreach ($locations as $location)
            <ul>
                <li>
                    <a href="{{ route('show-location', $location->id) }}">
                        {{ $location->name }}
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
