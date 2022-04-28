<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $timestamps = false;
    protected $fillable = ['title',
    'type',
    'description',
    'filename',
    'height',
    'width',
    'price',
    'rating'
];

}
