<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacinas extends Model
{
    use HasFactory;

    public function historico(){
      return $this->belongsTo('central-do-pet\Historico');
    }
}
