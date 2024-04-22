@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 rounded-3 container">
        <h3 class="text-center">Altri partner che hanno collaborato con noi:</h3>
        <div class="row pt-3">
            @foreach ($restaurants as $restaurant)
                <div class=" col-lg-4 col-md-6 col-sm-12 pt-3 ">
                    <div class="mb-4 shadow rest-card py-3">
                     <div class="d-flex justify-content-center">
                        @if ($restaurant->image)
                           <figure  class="home-restaurant-img">
                             <img src="{{ $restaurant->image }}" alt="Restaurant Image">
                           </figure>
                        @endif
                      </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>

                            <h5 class="card-title text-center fs-2 py-2">{{ $restaurant->name }}</h5>
                            <p class="card-text text-center">{{ $restaurant->address }}</p>
                          </div>
                          <span class="py-2 d-flex align-items-center justify-content-center "> 
                            @forelse ($restaurant->types as $type)
                              <img class="type-icon mx-2" src="{{ $type->icon}}" alt="{{ $type->label }}">
                              <p class="card-text text-center">{{ $type->label }}</p>
                              @empty
                              
                              @endforelse
                          </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div>
      <div class="dashboard-footer">
        <div class="container-sm py-2">
          <p class="my-3"> <strong>Indirizzo:</strong> {{$restaurant->address}}</p>
          <p class="mb-2"><strong>Partita IVA: </strong>{{$restaurant->vat_number}}</p>
        </div>
      
    </div>
      
      
    </div>
   
@endsection

