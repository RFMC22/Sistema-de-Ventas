<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    CONST PUBLICADO = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion 1*
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    // relacion 1* inversa
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //relacion **
    public function colors()
    {
        return $this->belongsToMany(Color::class)->withPivot('quantity');
    }

    //relacion 1* polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
