<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'username' => 'required|min:2|max:12',
            'email' => 'required|min:5|max:40|unique:users|email',
            'password' => 'required|alpha_num|min:8|max:20|confirmed',
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $request->session()->put('username',$username);
        return redirect('added');
    }

    public function added(): View
    {
        return view('auth.added');
    }

}
