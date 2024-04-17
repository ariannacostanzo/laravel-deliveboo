@extends('layouts.app')

@section('title', 'Piatti')

@section('content')

    <header>
        <h1 class="text-center my-4">Piatti</h1>
    </header>

    <table class="table table-dark table-striped container">
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
                        {{-- <a href="{{ route('admin.dishes.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa-plus me-2"></i>Nuovi Piatti</a> --}}
                </th>
                </div>
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
                            {{ $dish->ingredients }}
                        @else
                            Nessun Ingrediente
                        @endif
                    </td>
                    <td>{{ $dish->price }}</td>
                    <td> <img src="{{ $dish->image }}" alt="" width="50px"> </td>
                    <td> Qui mettere il visibile si/no </td>
                    <td>{{ $dish->created_at }}</td>
                    <td>{{ $dish->updated_at }}</td>
                    <td>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-sm btn-primary"><i
                                    class="fas fa-eye"></i></a>

                            {{-- <a href="{{ route('admin.dishes.edit', $dish) }}" class="btn btn-sm btn-warning"> <i
                                    class="fas fa-pencil"></i></a>
                            <form action="{{ route('admin.dishes.destroy', $dish) }}" method="POST" class="delete-form"> --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-can"></i></button>
                            </form>
                    </td>
                </tr>
                </div>

            @empty

                <tr>
                    <td colspan="9">
                        <h3 class="text-center mt-4">Non ci sono piatti</h3>
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

@endsection
