<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'price',
        'category_id'
    ];
    use HasFactory;

    public function category(){
        return $this->belongsTo(categories::class);
    }

    public function owner(){
        return $this->belongsToMany(owners::class);
    }
}
