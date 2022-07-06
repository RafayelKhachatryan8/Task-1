<?php

namespace App\Http\Controllers;

use App\Models\WebSite;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function site(Request $request){
        WebSite::create([
            'site_name' => $request->siteName,
        ]);
    }
}
