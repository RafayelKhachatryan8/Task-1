<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(Request $request){
        $newPost = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'text' => $request->text,
            'web_site_id' => $request->web_site_id
        ]);
    }
}
