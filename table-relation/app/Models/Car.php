<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }
    
    public function owner()
    {
        return $this->hasOne(Owner::class);
    }
}
