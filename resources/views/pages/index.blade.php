
@extends('layouts.master')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/slideshow/'. 'oys.jpg')}}"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slideshow/'. 'oys3.jpg')}}"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slideshow/'. 'oys2.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <hr>

 <div style="margin-top:10px" class="container">
   <h4><b>About Oyster: </b></h4>
  <p>
  Oyster is the common name for a number of different families of salt-water bivalve molluscs <br>
 that live in marine or brackish habitats. In some species, the valves are highly calcified, <br>
 and many are somewhat irregular in shape. Many, but not all, oysters are in the superfamily Ostreoidea. <br>
    <a href="https://en.wikipedia.org/wiki/Oyster" target="blank"> know more</a>
  </p>
  
 </div>

 <br>
 <div style="margin-top:15px" class="container">
   <h4><b>product review: </b></h4>
   <br>
   <b>Oyter black:</b>
  <p>
    Oyster is the common name for a number of different families of salt-water bivalve molluscs <br>
 	that live in marine or brackish habitats. In some species, the valves are highly calcified, <br>
  </p>

  <b> Oyster diamond:</b>
  <p>
     Oyster is the common name for a number of different families of salt-water bivalve molluscs <br>
 that live in marine or brackish habitats. In some species, the valves are highly calcified, <br>
  </p>
  
 </div>

 <br>


 <div class="row">
   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="{{asset('images/slideshow/'. 'oys.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey Nut</h5>
            <p class="card-text">
               Oyster is the common name for a number of different families of salt-water bivalve molluscs <br>
 		that live in marine or brackish habitats. In some species, the valves are highly calcified, <br>
            </p>
            <a href="{{route('products')}}" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>

   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="{{asset('images/slideshow/'. 'oys2.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Honey Nut chocolate</h5>
            <p class="card-text">
          Oyster is the common name for a number of different families of salt-water bivalve molluscs <br>
 		that live in marine or brackish habitats. In some species, the valves are highly calcified, <br>
            <a href="{{route('products')}}" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>

   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="{{asset('images/slideshow/'. 'oys3.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey Nut cream</h5>
            <p class="card-text">
                Oyster is the common name for a number of different families of salt-water bivalve molluscs <br>
		 that live in marine or brackish habitats. In some species, the valves are highly calcified, <br>
            </p>
            <a href="{{route('products')}}" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>
 </div>
 


@endsection