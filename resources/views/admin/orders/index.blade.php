@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($orders as $order)
        <p>{{$order->customer_name}}</p>
        @foreach ($order->dishes as $dish)
            {{$dish->id}}
            {{$dish->name}}
        @endforeach
        <p>{{$order->id}}</p>
    @empty
        <p>Non ci sono ordini</p>
    @endforelse
    
</div>

@endsection