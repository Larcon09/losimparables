<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Cavs;
use App\Models\Ciudades;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('claro.index');
    }

   
    public function create()
    {
        return view('claro.registro', [
            'ciudades' => Ciudades::all(),
        ] );
    }

    public function cavs($id)
    {
    $ciudad=Ciudades::find($id); 
    return Cavs::where('ciudad_id', $ciudad->id)->get();
    }


    public function store(Request $request): RedirectResponse
    {
   $request->validate([
        'cedula' => ['required', 'string', 'max:255','regex:/[0-9]+/'],
        'email' => ['required', 'confirmed', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required','confirmed', Rules\Password::defaults()],
        'ciudad' => ['required', 'string', 'max:255'],
        'cav' => ['required', 'string', 'max:255']
    ]);

    $user = User::create([
        'cedula' => $request->cedula,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'ciudad' => $request->ciudad,
        'cav' => $request->cav,        
    ]);

    
    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}


