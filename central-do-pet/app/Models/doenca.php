<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doenca extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = ['doenca', 'historico_id', 'data'];

    public static $rules = ['doenca'=>'required','historico_id'=>'required', 'data'=>'required'];

    public static $messages = ['doenca.*'=>'O campo com o nome da doença é obrigatório!',
                              'historico_id.*' => 'O campo histórico id é obrigatório!',
                              'data.*'=> 'O campo de data é obrigatório!'];

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
