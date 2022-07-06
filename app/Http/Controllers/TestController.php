<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
    }
}

