<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $types = Type::select('label', 'id')->get();

        return view('auth.register', compact('types'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:50'],
            'surname' => ['required', 'string', 'min:5', 'max:50'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'same:password', Rules\Password::defaults()],
            'restaurant_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'vat_number' => ['required', 'string', 'size:13', 'unique:restaurants,vat_number'],
            'restaurant_types' => ['required', 'array', 'min:1'],
            'restaurant_types.*' => ['exists:types,id']
        ],  [
            'name.required' => 'Inserire un nome',
            'name.min' => 'Minimo :min caratteri',
            'name.max' => 'Massimo :max caratteri',
            'surname.required' => 'Inserire un cognome',
            'surname.min' => 'Minimo :min caratteri',
            'surname.max' => 'Massimo :max caratteri',
            'email.required' => 'Inserire un indirizzo e-mail',
            'email.unique' => 'Indirizzo e-mail già associato ad un username',
            'email.lowercase' => 'Inserire l\'indirizzo e-mail con caratteri minuscoli',
            'email.email' => 'Inserire un indirizzo e-mail valido',
            'email.max' => 'Inserire un indirizzo e-mail valido',
            'password.required' => 'Inserire una password',
            'password.confirmed' => 'Le password non coincidono',
            'password.min' => 'La password deve avere almeno :min caratteri',
            'password_confirmation.required' => 'Inserire la password',
            'password_confirmation.min' => 'La password deve avere almeno :min caratteri',
            'password_confirmation.same' => 'Le password non coincidono',
            'restaurant_name.required' => 'Inserire il nome del ristorante',
            'address.required' => 'Inserire un indirizzo',
            'vat_number.required' => 'Inserire una partita iva',
            'vat_number.unique' => 'Partita IVA già associata ad un utente',
            'vat_number.size' => 'La partita IVA deve avere :size caratteri',
            'restaurant_types.required' => 'ATTENZIONE: Selezionare almeno una tipologia',
            'restaurant_types.min' => 'Selezionare almeno una tipologia',
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        $restaurant = new Restaurant([
            'user_id' => $user->id ,
            'name' => $request->restaurant_name,
            'address' => $request->address,
            'vat_number' => $request->vat_number,
            'image' => $request->image,
        ]);

    

        $restaurant->save();

        $restaurant->types()->attach($request->restaurant_types);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}






