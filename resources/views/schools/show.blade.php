@extends('app')

@section('content')

<section id="property-detail">
                     <header class="property-title">
                         <h1>{{$school->name}}</h1>
                         <figure>{{$school->area->name}}-ku</figure>
                         <span class="actions">
                             <!--<a href="#" class="fa fa-print"></a>-->
                             <a href="#" class="bookmark" data-bookmark-state="empty"><span class="title-add">Add to List</span><span class="title-added">Added</span></a>
                         </span>
                     </header>
                     <section id="property-gallery">
                         <div class="owl-carousel property-carousel">
                             <div class="property-slide">
                                 <a href="{{asset('img/property-01.jpg')}}" class="image-popup">
                                     <div class="overlay"><h3>Front View</h3></div>
                                     <img alt="" src="{{ asset('img/property-02.jpg')}}">
                                 </a>
                             </div><!-- /.property-slide -->
                             <div class="property-slide">
                                 <a href="assets/img/properties/property-detail-02.jpg" class="image-popup">
                                     <div class="overlay"><h3>Bedroom</h3></div>
                                     <img alt="" src="{{ asset('img/property-01.jpg')}}">
                                 </a>
                             </div><!-- /.property-slide -->
                             <div class="property-slide">
                                 <a href="assets/img/properties/property-detail-03.jpg" class="image-popup">
                                     <div class="overlay"><h3>Bathroom</h3></div>
                                     <img alt="" src="{{ asset('img/property-03.jpg')}}">
                                 </a>
                             </div><!-- /.property-slide -->
                         </div><!-- /.property-carousel -->
                     </section>
                     <div class="row">
                         <div class="col-md-4 col-sm-12">
                             <section id="quick-summary" class="clearfix">
                                 <header><h2>Quick Summary</h2></header>
                                 <dl>
                                     <dt>Grade</dt>
                                         <dd>{{$school->grades}}</dd>
                                     <dt>Term Start</dt>
                                         <dd>{{$school->term}}</dd>
                                     <dt>Gender</dt>
                                         <dd>{{$school->genders}}</dd>
                                 </dl>
                             </section><!-- /#quick-summary -->
                         </div><!-- /.col-md-4 -->
                         <div class="col-md-8 col-sm-12">
                             <section id="description">
                                 <header><h2>Property Description</h2></header>
                                 <p>
                                     {{$school->description}}
                                 </p>

                             </section><!-- /#description -->
                             <section id="property-features">
                                 <header><h2>Property Description</h2></header>
                                 <ul class="list-unstyled property-features-list">
                                     <li>Sauna</li>
                                     <li>Fireplace or fire pit</li>
                                     <li>Outdoor Kitchen</li>
                                     <li>Tennis Courts</li>
                                     <li>Trees and Landscaping</li>
                                     <li>Sun Room</li>
                                     <li>Family Room</li>
                                     <li>Concrete Flooring</li>
                                 </ul>
                             </section><!-- /#property-features -->
                             <section id="property-map">
                                 <header><h2>Map</h2></header>
                                 <div class="property-detail-map-wrapper">
                                     <div class="property-detail-map" id="property-detail-map"></div>
                                 </div>
                             </section><!-- /#property-map -->
                             <section id="video-presentation">
                                 <header><h2>Video Presentation</h2></header>
                                 <div class="video">
                                     <iframe src="//player.vimeo.com/video/34741214?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" ></iframe>
                                 </div>
                             </section><!-- /#video-presentation -->
                         </div><!-- /.col-md-8 -->

                     </div><!-- /.row -->
                 </section><!-- /#property-detail -->

@endsection
