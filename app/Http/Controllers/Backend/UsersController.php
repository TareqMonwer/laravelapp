<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        echo "Showing users";
    }

    public function show($id, Request $request)
    {
        var_dump($request);
        echo "Showing details for user id: $id";
    }
}
