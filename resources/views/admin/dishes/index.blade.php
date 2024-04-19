@extends('layouts.app')

@section('title', 'Piatti')

@section('content')

    <header>
        <h1 class="text-center my-4">Piatti</h1>
    </header>

    {{-- Filtro di ricerca per i piatti --}}
    <div class="d-flex justify-content-end">
        <form method="GET" action="{{ route('dishes.index') }}" class="w-25">
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Cerca..." name="search" value="{{ $search }}"
                    autofocus>
                <div class="input-group-append">
                    <button class="btn btn-outline-primary">Cerca</button>
                </div>
            </div>
        </form>
    </div>

    <table class="table table-striped container">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Ingredienti</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Immagine</th>
                <th scope="col">Visibile</th>
                <th scope="col">Creata il</th>
                <th scope="col">Modificata il</th>
                <th>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.dishes.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa-plus me-2"></i>Nuovi Piatti</a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($dishes as $dish)
                <tr>
                    <td>
                        {{ $dish->name }}
                    </td>
                    <td>
                        @if ($dish->ingredients)
                            {{ $dish->getAbstract() }}
                        @else
                            Nessun Ingrediente
                        @endif
                    </td>
                    <td>{{ $dish->price }} €</td>
                    <td> <img class="image-small"
                            src="{{ $dish->image ? $dish->image : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg' }}"
                            alt="{{ $dish->name }}"> </td>
                    <td>
                        <form action="{{ route('admin.dishes.visible', $dish->id) }}" method="POST" class="visible-form"
                            onclick="this.submit()">
                            @csrf
                            @method('PATCH')
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="button"
                                    id="{{ 'is_visible' . $dish->id }}" name="is_visible"
                                    @if ($dish->is_visible) checked @endif>
                                <label class="form-check-label"
                                    for="{{ 'is_visible' . $dish->id }}">{{ $dish->is_visible ? 'Visibile' : 'Non Visibile' }}</label>
                            </div>
                        </form>
                    </td>
                    <td>{{ $dish->getFormattedDate($dish->created_at) }}</td>
                    <td>{{ $dish->getFormattedDate($dish->updated_at) }}</td>
                    <td>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-sm btn-primary"><i
                                    class="fas fa-eye"></i></a>

                            <a href="{{ route('admin.dishes.edit', $dish) }}" class="btn btn-sm btn-warning"> <i
                                    class="fas fa-pencil"></i></a>
                            <form action="{{ route('admin.dishes.destroy', $dish) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash-can"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="9">
                        <h3 class="text-center mt-4">Non ci sono piatti</h3>
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>
    <div class="container">
        @if ($dishes->hasPages())
            {{ $dishes->links() }}
        @endif
    </div>
@endsection
