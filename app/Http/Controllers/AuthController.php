<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('backend.registration');
    }

    public function processRegistrationForm(Request $request)
    {
        // validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed',
        ]);

        // Data Prepare
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ];

        // Store data
        try
        {
            User::create($data);
            return redirect()->route('login');
            session()->flash('message', 'Your account has been created.');
            session()->flash('type', 'success');
        } catch (Exception $e)
        {
            return redirect()->back();
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');
        }
    }

    public function showLoginForm()
    {
        return view('backend.login');
    }
}
