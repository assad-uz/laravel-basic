<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    public function carOwner() {
        return $this->hasOneThrough(Owner::class, Car::class);
    }
}
