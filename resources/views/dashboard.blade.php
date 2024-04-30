@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
        </h2>
        <div class="row justify-content-center">
            <div class="fs-3 text-center">Benvenuto/a {{ $user->name }}, queste sono le informazioni del tuo ristorante:
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="pt-3">
                <div class="py-3 text-center">
                    <h2>{{ $restaurant->name }}</h2>
                </div>

                <div class="d-flex justify-content-center">
                    <figure class="restaurant-image">
                        <img src="{{ $restaurant->image ? $restaurant->image : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg' }}"
                                alt="placeholder" id="placeholder-thumb">
                    </figure>
                </div>
            </div>


        </div>

    </div>

    <div class="dashboard-footer position-fixed start-0 bottom-0 w-100 py-1">
        <div class="container-sm">
            <p class="my-3"> <strong>Indirizzo:</strong> {{ $restaurant->address }}</p>
            <p><strong>Partita IVA: </strong>{{ $restaurant->vat_number }}</p>
        </div>

    </div>
@endsection
