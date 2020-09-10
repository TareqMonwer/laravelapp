<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function showRegistrationForm()
    {
        return view('backend.registration');
    }

    public function processRegistrationForm(Request $request)
    {
        // return $request->all();
        // return $request->only(['email', 'password']);
        // return $request->except(['_token']);
        // echo $request->input('email');
        // echo $request->password;

        // Validation...
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
    }
}
