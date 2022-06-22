<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
    	'title', 'description', 'author', 'publisher', 'price', 'stock', 'cover'
    ];

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
}
