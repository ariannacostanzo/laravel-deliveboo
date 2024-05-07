<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\Order; 
use Illuminate\Support\Facades\DB;

class GraphsController extends Controller
{

    public function graphs(Request $request)
    {
        
        $user = Auth::user();
        $restaurant = $user->restaurant->first();
        $dishes = $restaurant->dishes;
        $dish_Ids = $dishes->pluck('id')->toArray();

        $orders = Order::with('dishes')->whereHas('dishes', function ($query) use ($dish_Ids) {
            $query->whereIn('dish_id', $dish_Ids);
        })->orderBy('created_at', 'desc')->get();
       
      

       $monthOrders = Order::selectRaw('MONTH(orders.created_at) AS month, COUNT(DISTINCT orders.id) AS total')
       ->groupByRaw('MONTH(orders.created_at)')
       ->get(); 
       return view('admin.graphics.graphic', compact('monthOrders'));
    
    }
  
}
