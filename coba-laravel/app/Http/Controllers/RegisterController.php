<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'email' => ['required', 'email:dns', 'unique:users'],
                'password' => ['required', 'min:8', 'max:255']
            ], 
            [
                'required' => 'Kolom :attribute harus diisi!'
            ]
        );

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // sama" pake bcrypt tapi dari laravel 
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! please login');

        return redirect('login')->with('success', 'Registration successfull! please login');
    }
}
