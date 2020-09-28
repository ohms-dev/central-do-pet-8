<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;

class usuario extends Model implements Authenticatable
{
    use HasFactory;

    use Notifiable;
    protected $fillable = ['nome','sexo','contato','email','funcao','senha','endereco','data_de_nascimento'] ;
    public static $rules = ['nome'=> 'required|min:3|max:50', 'sexo'=>'required|min:7|max:11','contato'=>'required|min:11|max:11','data_de_nascimento'=>'required',
        'endereco'=>'required|min:10|max:100','senha'=>'required|min:4|max:9','funcao'=>'required','email'=>'required|min:5|max:30'];
    public static $messages = ['nome.*'=>'O campo nome é obrigatório e deve ter entre 5 e 30 letras',
        'sexo.*'=>'O campo sexo é obrigatório e deve ser masculino, feminino e não binário','contato.*'=>'O campo contato é obrigatório e deve possuir 11 digitos ddd + número',
        'data_de_nascimento.*'=> 'O campo data de nascimento é obrigatório','endereco.*'=>'O campo endereço é obrigatório e deve possuir entre 5 e 30 dígitos',
        'senha.*'=>'O campo senha é obrigatório e deve ter entre 4 e 9 dígitos','funcao.*'=>'O campo função é obrigatório',
        'email.*'=>'O campo email é obrigatório'];


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
