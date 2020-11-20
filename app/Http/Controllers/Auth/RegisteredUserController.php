<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($ref=null)
    {
        return view('auth.register',['ref'=>$ref]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:30',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'cellphone' => 'required|string|min:10|max:13',
            'ref' => 'string|max:30|nullable',
        ]);

        $referrer = 1;
        if($request->ref)
        {
            $referrer = User::where('username',$request->ref)->value('id');
        }

        Auth::login($user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cellphone' => $request->cellphone,
            'referrer_id' => $referrer,
            'ipaddress' => request()->ip()
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
