<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\User;

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
            'career_id' => 'required|exists:careers,id',
            'terms_accept' => 'accepted',
        ]);

        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => bcrypt($request->password),
            'career_id' => $request->career_id,
            'terms_accepted' => $request->has('terms_accept'),
        ]);
        return redirect()->route('register')->with('sucess','Usuario registrado exitosamente.');
    }
}
