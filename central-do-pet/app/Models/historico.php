<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class historico extends Model implements Authenticatable
{

    use HasFactory;
<<<<<<< HEAD

    use HasFactory;
=======
>>>>>>> origin/master

    protected $fillable = ['pet_id', 'alergias'];

    public static $rules = ['pet_id'=>'required'];

    public static $messages = ['pet_id.*' => 'O campo Pet Id é obrigatório'];

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
