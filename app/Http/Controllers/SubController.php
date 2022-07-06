<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubController extends Controller
{
    public function subscribe(Request $request){
        Subscriber::create([
            'email' => $request->email,
            'web_site_id' => $request->web_site_id
        ]);
    }
}
