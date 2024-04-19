@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="row">
            @foreach ($restaurants as $restaurant)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        @if ($restaurant->image)
                            <img src="{{ $restaurant->image }}" class="card-img-top" alt="Restaurant Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $restaurant->name }}</h5>
                            <p class="card-text">{{ $restaurant->address }}</p>
                            <p class="card-text">{{ $restaurant->vat_number }}</p>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection