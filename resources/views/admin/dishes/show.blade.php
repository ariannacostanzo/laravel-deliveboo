@extends('layouts.app')
@section('title', 'Dettagli Piatti')
@section('content')
    <div>
        <div class="card">
            <div class="card-body container">
                <div class="d-flex justify-content-between align-items-center">

                    <h5 class="card-title">{{ $dish->name }}</h5>
                </div>
                <p class="card-text">{{ $dish->ingredients }}</p>
                <figure>
                    <img src={{ $dish->image }} alt="Immagine del {{ $dish->name }}" class="img-fluid">
                </figure>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.dishes.index', $dish) }}" class="card-link btn btn-info">Torna alla lista</a>
                    <div class="d-flex gap-3">
                        <form id="delete-form" action="{{ route('admin.dishes.destroy', $dish) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash-can me-2"></i>Elimina</button>
                        </form>
                        <a class="btn btn-warning" href="{{ route('admin.dishes.edit', $dish) }}"><i
                                class="fas fa-pencil me-2"></i>Modifica</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
