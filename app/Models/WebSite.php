<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSite extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'site_name'
    ];

    public function subscribers(){
        return $this->hasMany(Subscriber::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
