<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content',
        'price',
        'brand_id',
        'item_id',
        'slug',
        'depscription',
        'status',
        'img'
    ];
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function item()
    {
        return $this->belongsTo('App\Models\Item');
    }
}
