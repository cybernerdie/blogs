<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function posts(){
        return $this->hasMany('App\PostType');
    }
}
