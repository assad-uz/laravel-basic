<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Employee extends Model
{
    use HasFactory;


     public function clients()
    {
        return $this->hasManyThrough(Client::class, TeamMember::class);
    }

      public function teams()
      {
        return $this->hasMany(TeamMember::class);
    }
}