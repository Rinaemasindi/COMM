<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email','password'));
        return redirect()->route('home');
    }
}
