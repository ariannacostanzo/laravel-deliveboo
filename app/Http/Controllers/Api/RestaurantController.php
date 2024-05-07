<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::with('types')->with('dishes')->get();
        return response()->json($restaurants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $restaurant)
    {
        // Cerco il ristorante
        $restaurant = Restaurant::with('types')->with('dishes')->find($restaurant);
        // Se non lo trovo rispondo vuoto o 404
        if (!$restaurant) return response(null, 404);
        // Mando il restaurant in formato Json
        return response()->json($restaurant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }





    // funzione filtro search
    public function search(Request $request)
    {
        // Ottieni i parametri di ricerca
        $searchTerm = $request->input('searchTerm');
        $filters = $request->input('filters');
        // query per la ricerca
        $query = Restaurant::query()
            ->with('types')
            ->with('dishes')
            ->when($searchTerm, function ($query, $searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            })
            ->when($filters, function ($query, $filters) {
                // filtri  per filtrare i ristoranti
                $query->whereHas('types', function ($q) use ($filters) {
                    $q->whereIn('label', $filters);
                });
            });

        // Esegui la query e restituisci i risultati
        $restaurants = $query->get();

        return response()->json($restaurants);
    }
}
