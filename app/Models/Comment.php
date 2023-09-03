<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'product_id',
        
        'content',
    ];
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
   
    
    
}
