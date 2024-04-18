@extends('layouts.app')
@section('title', 'Dettagli Piatti')
@section('content')
    @include('includes.modal')
    <div>
        <div class="card container my-5">
            <div class="card-body container">
                <div class="d-flex justify-content-between align-items-center">

                    <h1 class="card-title mb-3">{{ $dish->name }}</h1>
                </div>
                <div class="d-flex justify-content-between my-3">
                    <p class="card-text">{{ $dish->ingredients }}</p>
                    <figure class="image-large-container">
                        <img class="image-large" src={{ $dish->image }} alt="{{ $dish->name }}" class="img-fluid">
                    </figure>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.dishes.index', $dish) }}" class="card-link btn cm-btn-primary">Torna alla
                        lista</a>
                    <div class="d-flex gap-3">
                        <a class="btn btn-warning" href="{{ route('admin.dishes.edit', $dish) }}"><i
                                class="fas fa-pencil me-2"></i>Modifica</a>
                        <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST"
                            class="delete-form" data-bs-toggle="modal" data-bs-target="#delete-modal"
                            data-dish="{{ $dish->name }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa-regular fa-trash-can me-2"></i>Elimina</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

@section('scripts')
   @vite('resources/js/modal.js') 
@endsection