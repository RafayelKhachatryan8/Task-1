<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'description',
        'text',
        'status',
        'web_site_id'
    ];

    public function website(){
        return $this->belongsTo(WebSite::class, 'web_site_id');
    }
}
