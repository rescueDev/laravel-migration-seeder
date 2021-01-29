@extends('layouts.main-layout')

@section('content')
    @foreach ($brands as $brand)
        <ul>
            <li>
                <a href="{{ route('show-brand', $brand->id) }}">
                    {{ $brand->name }}
                </a>
            </li>
        </ul>
    @endforeach
@endsection
