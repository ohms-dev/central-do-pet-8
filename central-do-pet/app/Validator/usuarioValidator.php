<?php

namespace App\Validator;

use Dotenv\Validator;

class usuarioValidator
{
    public static function validate($data) {
        $validator = \Validator::make($data, \App\Models\usuario::$rules, \App\Models\usuario::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação do pet");
        return $validator;
    }
}
