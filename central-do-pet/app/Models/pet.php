<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;

class pet extends Model implements Authenticatable
{
    use HasFactory;

    public function historico(){
      return $this->hasOne('central-do-pet\Historico');
    }

    public function raca(){
      return $this->hasOne('central-do-pet\Raca');
    }

    public function dono(){
      return $this->hasOne('central-do-pet\Dono');
    }

    use Notifiable;
    protected $fillable = ['nome','sexo','castrado','data_de_nascimento'] ;
    public static $rules = ['nome'=> 'required|min:3|max:30', 'sexo'=>'required|min:5|max:5','castrado'=>'required','data_de_nascimento'=>'required'];
    public static $messages = ['nome.*'=>'O campo nome é obrigatório e deve ter entre 5 e 30 letras',
        'sexo.*'=>'O campo sexo é obrigatório e deve ser macho ou fêmea','castrado.*'=>'O campo castrado é obrigatório e deve ser informado se o pet foi castrado ou não',
        'data_de_nascimento.*'=> 'O campo data de nascimento é obrigatório'];

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
