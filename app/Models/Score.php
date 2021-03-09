<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'score',
    ];
    public function user(){
        return $this->belongsToMany('App\User','id');
    }
    public function video(){
        return $this->belongsToMany('App\Video','id');
    }
}
