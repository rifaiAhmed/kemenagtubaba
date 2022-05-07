<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('login.register');
    }
    public function store(Request $request)
    {
        $dataValiadated = $request->validate([
            'name'  => 'required|min:5|unique:users,name',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:5|max:255'
        ]);
        $dataValiadated['password'] = Hash::make($dataValiadated['password']);

        User::create($dataValiadated);
        return redirect('/login')->with('success', 'Registration Succesfull !');
        
    }
}
