<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::orderByDesc('updated_at')->orderByDesc('created_at')->paginate(10);
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'ingredients' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_visible' => 'required|boolean',
            'image' => 'nullable|string|url',
        ], [
            'name' => 'Nessun nome inserito',
            'ingredients' => 'Gli ingredienti devono essere una stringa',
            'price' => 'Il prezzo deve essere un numero decimale',
            'is_visible' => 'Il valore inserito non è valido',
            'image' => 'Il testo inserito non è un immagine',

        ]);

        $data = $request->all();
        $user_id = Auth::id();
        $dish = new Dish();
        $dish->restaurant_id = $user_id;
        $dish->fill($data);
        $dish->save();
       


        return to_route('admin.dishes.index', $dish->id)->with('message', "$dish->name creato con sucesso")->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate([
            'name' => 'required|string',
            'ingredients' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_visible' => 'required|boolean',
            'image' => 'nullable|string|url',
        ], [
            'name' => 'Nessun nome inserito',
            'ingredients' => 'Gli ingredienti devono essere una stringa',
            'price' => 'Il prezzo deve essere un numero decimale',
            'is_visible' => 'Il valore inserito non è valido',
            'image' => 'Il testo inserito non è un immagine',

        ]);

        $data = $request->all();
        $dish->update($data);

        return to_route('admin.dishes.index', $dish->id)->with('message', "$dish->name modificato con sucesso")->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return to_route('admin.dishes.index') > with('message', "Il piatto $dish->name è stato eliminato con successo")->with('type', 'danger');;
    }


    // Rotta Per I piatti visibili

    public function toggleVisible(Dish $dish)
    {
        $dish->is_visible = !$dish->is_visible;
        $dish->save();

        $action = $dish->is_visible ? 'visibile' : 'non pubblicato';
        $type = $dish->is_visible ? 'success' : 'info';


        return back()->with('message', "Il piatto $dish->name è stato $action")->with('type', $type);
    }
}
