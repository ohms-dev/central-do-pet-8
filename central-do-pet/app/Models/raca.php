<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raca extends Model
{
    use HasFactory;

    protected $fillable = ['pet_id', 'especie', 'porte', 'cor'];

    public static $rules = ['pet_id'=>'required', 'especie'=>'required',
                            'porte'=>'required', 'cor'=>'required'];

    public static $messages = ['pet_id.*' => 'O campo Pet Id é obrigatório',
                            'especie.*'=>'O campo especie é obrigatório',
                            'porte.*'=>'O campo porte é obrigatório',
                            'cor.*'=>'O campo cor é obrigatório'];

    public function pet(){
      return $this->belongsTo('central-do-pet\Pet');
    }
}
