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
                            {{ $dish->ingredients }}
                        @else
                            Nessun Ingrediente
                        @endif
                    </td>
                    <td>{{ $dish->price }}</td>
                    <td> <img src="{{ $dish->image }}" alt="{{ $dish->name }}" width="50px"> </td>
                    <td>
                        <form action="{{ route('admin.dishes.visible', $dish->id) }}" method="POST" class="visible-form">
                            @csrf
                            @method('PATCH')
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="button" id="is_visible"
                                    @if ($dish->is_visible) checked @endif>
                                <label class="form-check-label"
                                    for="is_visible">{{ $dish->is_visible ? 'Visibile' : 'Non Visibile' }}</label>
                            </div>
                        </form>
                    </td>
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
@section('scripts')

    <script>
        const toggleVisibleForms = document.querySelectionAll('.visible-form');

        toggleVisibleForms.forEach(form => {
            form.addEventListener('click', e => {
                form.submit();
            })
        })
    </script>
@endsection
