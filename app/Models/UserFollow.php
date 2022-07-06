<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UserFollow extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'user_follows';

    protected $fillable = [
        'followerId',
        'followId'
    ];

//    public function follows(){
//        return $this->hasMany(User::class, 'id');
//    }
}
