<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //evitar campos que se llenen con asignacion masiva
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion 1*
    public function products(){
        return $this->hasMany(Product::class);
    }

    //relacion 1* inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
