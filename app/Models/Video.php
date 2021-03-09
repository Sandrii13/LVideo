<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'route',
        'user_id'
    ];
    public function user(){
        return $this->hasOne('App\User','id');
    }
}
