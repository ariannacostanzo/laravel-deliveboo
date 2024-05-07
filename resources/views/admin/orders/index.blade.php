@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1 class="text-center my-4">Ordini degli ultimi 12 mesi</h1>
        </header>

        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Nome cliente</th>
                    <th class="d-none d-md-table-cell">Indirizzo</th>
                    <th>Numero di telefono</th>
                    <th>Email</th>
                    <th>Data Ordine</th>
                    <th>Totale</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @forelse ($orders as $order)
                        <td>{{ $order->customer_name }} {{ $order->customer_surname }}</td>
                        <td class="d-none d-md-table-cell">{{ $order->customer_address }}</td>
                        <td>{{ $order->customer_phone_number }}</td>
                        <td>{{ $order->customer_email }}</td>
                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                        <td>{{ $order->total }} €</td>
                        <td>
                            <button class="btn cm-btn-primary cm-accordion-btn" data-accordion-target="accordion-body-{{ $order->id }}">
                                {{-- <i class="fa fa-plus "></i> --}}
                                Vedi Dettagli
                            </button>
                        </td>
                </tr>
                    <tr class="cm-accordion-header d-none">
                        <th colspan="4">Piatti</th>
                        <th colspan="2">Quantità</th>
                        <th>Prezzo singolo</th>
                    </tr>
                    @foreach ($order->dishes as $dish)
                        <tr  class="cm-accordion-body d-none accordion-body-{{ $order->id }}" data-order-id="{{ $order->id }}" >
                            <td colspan="4">{{ $dish->name }}</td>
                            @if ($dish->pivot->quantity)
                                <td colspan="2">{{ $dish->pivot->quantity }} </td>
                            @endif
                            <td>{{ $dish->price }} €</td>
                        </tr>
                    @endforeach

            

            @empty
                <tr>
                    <td colspan="7">Non ci sono ordini</td>
                </tr>
                @endforelse

            </tbody>


        </table>
        
        {{ $orders->withQueryString()->links() }}

    </div>

@endsection

@section('scripts')
    @vite('resources/js/accordion.js')
@endsection
