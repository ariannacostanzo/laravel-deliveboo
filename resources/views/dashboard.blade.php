@extends('layouts.app')

@section('content')

@if(isset($restaurant->name))
    


<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        
        <div class="col">
            <div class="card">
                <div class="card-header">Benvenuto </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@else

<h1 class="text-center">form registrazione ristorante</h1>

@endif


@endsection
