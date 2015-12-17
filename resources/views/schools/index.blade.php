@extends('app')

@section('content')

<h2>Schools</h2>

    @if ( !$schools->count() )
        You have no schools
    @else
        <ul>
            @foreach( $schools as $school )
                <li><a href="{{ route('schools.show', $school->id) }}">{{ $school->name }}</a></li>
            @endforeach
        </ul>
    @endif

@endsection
