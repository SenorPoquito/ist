@extends('app')

@section('content')


    <h2>Schools</h2>
    @if ( !$schools->count() )
        You have no schools
    @else
  <section id="properties" class="display-lines">
            @foreach( $schools as $school )
            <div class="property">
           <!-- <figure class="type" title="Apartment"><img src="assets/img/property-types/apartment.png" alt=""></figure> -->
           <div class="property-image">
               <a href="property-detail.html">
                   <img height:"330px" alt="" src="{{ asset('img/property-02.jpg')}}">
               </a>
           </div>
           <div class="info">
               <header>
                   <a href="property-detail.html"><h3>{{$school->name}}</h3></a>
                   <figure>{{$school->ward}}-ku</figure>
               </header>

               <div class="tag price">Add to List</div>

               <aside>
                   <p>{{$school->description}}
                   </p>
                   <dl>
                       <dt>Grade</dt>
                           <dd>{{$school->grades}}</dd>
                       <dt>Term Start</dt>
                           <dd>{{$school->term}}</dd>
                       <dt>Gender</dt>
                           <dd>{{$school->genders}}</dd>
                   </dl>
               </aside>
               <a href="{{ route('schools.show', [$school->slug]) }}" class="link-arrow">Read More</a>
           </div>
       </div><!-- /.property -->
            @endforeach
        </section>

    @endif

@endsection
