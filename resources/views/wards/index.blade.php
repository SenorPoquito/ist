@extends('app')

@section('content')


    <h2>Wards</h2>
    @if ( !$wards->count() )
        You have no schools
    @else
  <section id="properties" class="display-lines">
<ul>
            @foreach( $wards as $ward )
<li>{{$ward->name}}</li>
            @endforeach
</ul>
        </section>

    @endif

@endsection
