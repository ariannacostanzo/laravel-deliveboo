@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
    </h2>
    <div class="row justify-content-center">
        
        <div class="col">
            <div class="card">
                <div class="card-header">Benvenuto {{$user->name}}, queste sono le informazioni del tuo ristorante:</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column justify-content-between">
                            <h2>{{$restaurant->name}}</h2>
                            <div>
                                <p class="my-3"> <strong>Indirizzo:</strong> {{$restaurant->address}}</p>
                                <p><strong>Partita IVA: </strong>{{$restaurant->vat_number}}</p>
                            </div>
                        </div>
                        <div>
                            <figure class="restaurant-image">
                                <img src="{{$restaurant->image}}" alt="{{$restaurant->name}}">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
