<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view("users.register");
    }

    public function store(Request $request) {
        $formValidation = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['email', "required", Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $formValidation['password'] = bcrypt($formValidation['password']);

        $user = User::create($formValidation);

        auth()->login($user);

        return redirect('/')->with('message', "User created and logged in");
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with("message", "You are logged out");
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formValidation = $request->validate([
            'email' => ['email', "required"],
            'password' => 'required'
        ]);

        if(auth()->attempt($formValidation)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Your are logged in');
        }

        return back()->withErrors([
            'email' => 'Invalid Credential', 
        ])->onlyInput('email');
    }
}
