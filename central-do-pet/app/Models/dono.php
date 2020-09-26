<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dono extends Model
{
    use HasFactory;

    public static function find(\Illuminate\Http\Request $request)
    {
    }

    public function pet(){
      return $this->belongsTo('central-do-pet\Pet');
    }
}
