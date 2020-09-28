<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacina extends Model
{
    use HasFactory;

    protected $fillable = ['historico_id', 'vacina', 'data'];

    public static $rules = ['historico_id'=>'required','vacina'=>'required','data'=>'required'];

    public static $messages = ['historico_id.*'=>'O campo histórico id é obrigatório!',
                                'vacina.*'=>'O campo nome da vacina é obrigatório!',
                                'data.*'=>'O campo de data é obrigatório!'];

    public function historico(){
      return $this->belongsTo('central-do-pet\Historico');
    }

        public function getAuthIdentifierName()
        {
            // TODO: Implement getAuthIdentifierName() method.
        }

        public function getAuthIdentifier()
        {
            // TODO: Implement getAuthIdentifier() method.
        }

        public function getAuthPassword()
        {
            // TODO: Implement getAuthPassword() method.
        }

        public function getRememberToken()
        {
            // TODO: Implement getRememberToken() method.
        }

        public function setRememberToken($value)
        {
            // TODO: Implement setRememberToken() method.
        }

        public function getRememberTokenName()
        {

            // TODO: Implement getRememberTokenName() method.
        }
}
