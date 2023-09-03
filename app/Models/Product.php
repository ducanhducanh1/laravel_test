<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'depscription',
        'img',
        'status',
        'category_id',
        'slug',
        'brand_id',
        'size',
        'comment',
        'content',
        'sale',
        'image'
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    
    
}
