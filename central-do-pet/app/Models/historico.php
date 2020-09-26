<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historico extends Model
{
    use HasFactory;

    public function Pet() {
      return $this->belongsTo('central-do-pet\Pet');
    }

    public function doencas(){
      return $this->hasMany('central-do-pet\Doenca');
    }

    public function transfusaos(){
      return $this->hasMany('central-do-pet\Transfusao');
    }

    public function vacinas(){
      return $this->hasMany('central-do-pet\Vacina');
    }
}
