<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show()
    {
        $restaurants = Restaurant::all();
        return view('welcome', compact('restaurants'));
    }
}
