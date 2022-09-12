<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Register;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {

        return $input = $request->all();
        $user = Register::create($input);
      
        return back()->with('success', 'User created successfully.');
       
    }

}
