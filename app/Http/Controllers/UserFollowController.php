<?php

namespace App\Http\Controllers;

use App\Models\UserFollow;
use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\callback;

class UserFollowController extends Controller
{
    public function follow(Request $request){
        UserFollow::create([
            'followerId' => $request->followerId,
            'followId' => $request->followId
        ]);

        $user= User::where('id', $request->followerId)->firstOrFail();
        var_dump($user->name);

//        User::followers(1);

    }



}
