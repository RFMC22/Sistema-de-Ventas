<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //relacion 1*
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    //relacion 1*
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

