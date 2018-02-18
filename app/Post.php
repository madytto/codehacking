<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public $fillable = [
        'category_id',
        'photo_id',
        'title',
        'body',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function photo() {
        return $this->belongsTo('App\Photo');
    }
}
