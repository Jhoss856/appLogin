<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class userController extends Controller
{
    public function create (){
        $careers = career::all();
        return view('register', compact ('careers'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'career_id' => 'required|exists:careers_id',
            'terms_accept' => 'accept',
        ]);

        Users::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => $bcrypt($request->password),
            'career_id' => $request->career_id,
            'terms_accept' => $request->has('terms_accepted'),
        ]);
        return redirect()->route('register')->with('sucess','Usuario registrado
        exitosamente.');
    }
}
