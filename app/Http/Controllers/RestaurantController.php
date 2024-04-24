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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_name' => 'required|string',
            'address' => 'nullable|string',
            'vat_number' => 'required|string|min:13|max:13',
            'image' => 'nullable|string|url',
        ], [
            'restaurant_name' => 'Nessun nome inserito',
            'address' => 'Indirizzo non valido',
            'vat_number' => 'La partita IVA devve essere di 13 cifre',
            'image' => 'Il testo inserito non è un immagine',

        ]);

        $data = $request->all();
        $new_res = new Restaurant();
        $new_res->fill($data);
        $new_res->save();



        return to_route('admin.resturant.show', $new_res->id)->with('message', "Il ristorante $new_res->name è stato creato con successo");
    }

};
