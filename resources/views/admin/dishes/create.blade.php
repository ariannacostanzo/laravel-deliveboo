@extends('layouts.app')
@section('content')
<header>
    <h1 class="text-center mt-5 mb-1">Aggiungi un nuovo piatto</h1>
</header>
<main>
    <div class="container py-5">
        <form action="{{route('admin.dishes.store')}}" method="POST" validate>
            @csrf
            <div class="row align-items-center justify-content-start">
                <div class="col-6 py-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control @error('name') is-invalid @elseif(old('name', '')) is-valid  @enderror" id="name" name="name" placeholder="Piatto..." value="{{ old('name') }}" required>
                    @error ('name') <div class="invalid-feedback"> {{$message}}</div> @enderror
                </div>
                <div class="col-12 py-3">
                    <label for="ingredients" class="form-label">Ingredienti</label>
                    <input type="text" class="form-control @error('ingredients') is-invalid @elseif(old('ingredients', '')) is-valid  @enderror" id="ingredients" name="ingredients" value="{{ old('ingredients') }}" placeholder="Pomodoro, Mozzarella ...">
                    @error ('ingredients') <div class="invalid-feedback"> {{$message}}</div> @enderror
                </div>
                <div class="col-3 py-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" step=".01" class="form-control @error('price') is-invalid @elseif(old('price', '')) is-valid  @enderror" id="price" name="price" value="{{ old('price') }}" placeholder="6.50" required>
                    @error ('price') <div class="invalid-feedback"> {{$message}}</div> @enderror
                </div>
                <div class="col-4 py-3">
                        <div class="form-group">
                            <label for="is_visible"
                                class="col-6 col-form-label text-right">È visibile?</label>

                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_visible" id="is_visible"
                                        checked value="1">
                                    <label class="form-check-label" for="is_visible">
                                        Sì
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_visible" id="is_visible"
                                        value="0">
                                    <label class="form-check-label" for="is_visible">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>                                                          
                </div>
                <div class="col-12 py-3 d-flex align-items-center">
                    <div class="col-8">

                        <label for="image" class="form-label">Immagine</label>
                        <input type="text" class="form-control @error('image') is-invalid @elseif(old('image', '')) is-valid  @enderror" id="image" name="image" value="{{ old('image') }}" placeholder="http:// o https://">
                        @error ('image') <div class="invalid-feedback"> {{$message}}</div> @enderror
                    </div>
                    <div class="col-4 ms-3">
                        <figure class="image-placeholder">
                            <img src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" alt="placeholder" id="placeholder-thumb" >
                        </figure>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center container">
                <div class="my-5 ">
                    <a href="{{ route('admin.dishes.index')}}" class="btn btn-secondary"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>
                </div>
                <div class="my-5">
                    <button class="btn btn-success"><i class="fa-solid fa-plus me-2"></i>Crea</button>
                </div>
            </div>
        </form> 
    </div>
</main>
@endsection

@section('scripts')
    @vite('resources/js/preview_img.js')
@endsection