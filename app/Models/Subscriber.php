<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'subscribers';

    protected $fillable = [
        'email',
        'web_site_id'
    ];

    public function webSite(){
        return $this->belongsTo(WebSite::class, 'web_site_id');
    }
}
