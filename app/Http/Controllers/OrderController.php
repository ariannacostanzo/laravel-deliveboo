<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $restaurant = $user->restaurant->first();
        $dishes = $restaurant->dishes;
        $dish_Ids = $dishes->pluck('id')->toArray();

        $orders = Order::with('dishes')->whereHas('dishes', function ($query) use ($dish_Ids) {
            $query->whereIn('dish_id', $dish_Ids);
        })->orderBy('created_at', 'desc')->get();


        return view('admin.orders.index', compact('orders', 'dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //colleziono i dati che mi sono arrivati dall'api
        $customer_name = $request->input('customer_info.customer_name');
        $customer_surname = $request->input('customer_info.customer_surname');
        $customer_address = $request->input('customer_info.customer_address');
        $customer_email = $request->input('customer_info.customer_email');
        $customer_phone_number = $request->input('customer_info.customer_phone_number');

        $total = $request->input('order_info.total');

        $dishes = $request->input('order_info.dishes');
        // [['id' => 230, 'quantity' => 1], ['id' => 231, 'quantity' => 1] ]

        //creo un nuovo ordine
        $order = new Order();
        $order->customer_name = $customer_name;
        $order->customer_surname = $customer_surname;
        $order->customer_address = $customer_address;
        $order->customer_email = $customer_email;
        $order->customer_phone_number = $customer_phone_number;
        $order->total = $total;

        $order->save();

        //per ogni piatto creo una colonna nella tabella ponte
        foreach ($dishes as $dish) {
            $order->dishes()->attach(
                $dish['id'],
                ['quantity' => $dish['quantity']]
            );
        }
        
        // return response()->json($request);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
