<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raca extends Model
{
    use HasFactory;

    public static function find($id)
    {
    }

    public function pet(){
      return $this->belongsTo('central-do-pet\Pet');
    }
}
