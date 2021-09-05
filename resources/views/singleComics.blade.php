@extends('templates.base') <!-- richimiamo il nostro template base perche condiviso (header,footer) -->

@section('title, singleComics')

@section('main')
   <div class="jumbotron-card">
   <div class="container">
         <div class="field-content">
            <div class="content-type">COMIC BOOK</div>
            <img src="{{ $comics[$id]['thumb'] }}" alt="">
            <div class="nav-pic">VIEW GALLERY</div>
         </div>

      </div>
   
   </div>

   <div class="row-blue">
   </div>

   <div class="container mt-5 mb-5">
      <div class="row">
         <div class="col-8 info-card">
            <h1>{{ $comics[$id]['title'] }}</h1>
            <div class="container">
               <div class="row info-price">
                  <div class="col-9 price">
                     <span >U.S Price: <span class="numb-price">{{ $comics[$id]['price'] }}</span></span>
                     <span>AVAILABLE</span>
                  </div>
                  <span class="col-3 check">check availability</span>
               </div>
            </div>
            <div>
               <p>{{ $comics[$id]['description'] }}</p>
            </div>
         </div>
         <div class="col-4">
            <img src="https://via.placeholder.com/300x250" alt="">
         </div>
      </div>
   </div>
   
@endsection