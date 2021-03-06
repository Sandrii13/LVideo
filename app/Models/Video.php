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
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function Score(){
        return $this->hasMany(Score::class);
    }
}
