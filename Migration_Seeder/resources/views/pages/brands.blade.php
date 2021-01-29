@extends('layouts.main-layout')

@section('content')
    <div class="brands-container">
        @foreach ($brands as $brand)
            <ul>
                <li>
                    <a href="{{ route('show-brand', $brand->id) }}">
                        {{ $brand->name }}
                    </a>
                </li>
            </ul>
        @endforeach
    </div>


@endsection
