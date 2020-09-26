<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    use HasFactory;

    public function historico(){
      return this->hasOne('central-do-pet\Historico');
    }

    public function raca(){
      return this->hasOne('central-do-pet\Raca');
    }

    public function dono(){
      return this->hasOne('central-do-pet\Dono');
    }

}
