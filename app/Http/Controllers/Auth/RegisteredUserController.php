<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use App\Models\Person;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $person = Person::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'frist_surname' => $request->first_surname,
            'second_surname' => $request->second_surname,
        ]);

        $user = User::create([
            'person_id' => $person->id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $cart = new Cart();

        $user->cart()->save($cart);

        event(new Registered($user));

        Auth::login($user);

        return redirect('manga-unicor');
    }
}
