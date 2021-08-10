<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cost', 'department_id'];

    //relacion 1*
    public function districts()
    {
        return $this->hasMany(District::class);
    }

    //relacion 1*
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
