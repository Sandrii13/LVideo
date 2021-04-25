<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'score',
        'user',
        'video',
    ];
    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function video(){
        return $this->belongsToMany(Video::class);
    }
}
