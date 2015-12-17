@extends('app')

@section('content')


<div class="container">
    <div class="row">
        <!-- Results -->
        <div class="col-md-9 col-sm-9">

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
                   <figure>Minato-ku, 〒104-0011</figure>
               </header>

               <div class="tag price">Add to List</div>

               <aside>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                       bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt...
                   </p>
                   <dl>
                       <dt>Age Range</dt>
                           <dd>11-17</dd>
                       <dt>Term Start</dt>
                           <dd>April</dd>
                       <dt>Gender</dt>
                           <dd>Boys</dd>
                       <dt>Total Pupils</dt>
                           <dd>224</dd>
                   </dl>
               </aside>
               <a href="property-detail.html" class="link-arrow">Read More</a>
           </div>
       </div><!-- /.property -->
            @endforeach
        </section>
      </div>
      </div>
      </div>
    @endif

@endsection
