@extends('layouts.app')
@section('title', 'Dettagli Piatti')
@section('content')
    @include('includes.modal')
    <div>
        <div class="card container my-5">
            <div class="card-body container">
                <div class="d-flex justify-content-between align-items-center">

                    <h1 class="card-title mb-3">{{ $restaurant->restaurant_name}}</h1>
                </div>
                <div class="d-flex justify-content-between my-3">
                    <p class="card-text">{{ $restaurant->address }}</p>
                    <p class="card-text">{{ $restaurant->vat_number }}</p>
                    <figure class="image-large-container">
                        <img class="image-large" src={{ $restaurant->image }} alt="{{ $restaurant->restaurant_name }}" class="img-fluid">
                    </figure>
                </div>
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