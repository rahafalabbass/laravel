<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['owner_name'];
    use HasFactory;

    public function product(){
        return $this->belongsToMany(products::class);
    }
}
