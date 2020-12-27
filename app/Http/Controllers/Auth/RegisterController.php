<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterUserRequest;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }


	public function index()
	{
		return view('auth.register');
	}


	public function store(RegisterUserRequest $request)
    {
        User::create([
            'name'  =>  $request->name,
            'username'  =>  $request->username,
            'email' =>  $request->email,
            'password'  =>  Hash::make($request->password)
        ]);

        auth()->attempt($request->only(['username','password']));

        return redirect()->route('dashboard');
    }
}
