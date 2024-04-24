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
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'restaurant_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'vat_number' => ['required', 'string', 'unique:restaurants'],
            'restaurant_types' => ['required', 'array', 'min:1'], //deve esserci almeno una tipologia
            'restaurant_types.*' => ['exists:types,id']
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






