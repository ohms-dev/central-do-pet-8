<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','contato','funcao','endereco','data_de_nascimento','sexo',
    ];
    public static $rules = ['name'=> 'required|min:3|max:50', 'sexo'=>'required','contato'=>'required|min:11|max:11',
        'data_de_nascimento'=>'required','endereco'=>'required|min:10|max:100',
        'password'=>'required|min:4|max:255','funcao'=>'required',
        'email'=>'required|min:5|max:50'];

    public static $messages = ['name.*'=>'O campo nome é obrigatório e deve ter entre 5 e 30 letras',
        'sexo.*'=>'O campo sexo é obrigatório e deve ser masculino, feminino e não binário','contato.*'=>'O campo contato é obrigatório e deve possuir 11 digitos ddd + número',
        'data_de_nascimento.*'=> 'O campo data de nascimento é obrigatório','endereco.*'=>'O campo endereço é obrigatório e deve possuir entre 5 e 30 dígitos',
        'password.*'=>'O campo senha é obrigatório e deve ter entre 4 e 9 dígitos','funcao.*'=>'O campo função é obrigatório',
        'email.*'=>'O campo email é obrigatório'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
