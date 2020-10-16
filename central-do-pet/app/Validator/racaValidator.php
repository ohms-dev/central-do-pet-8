<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;

class racaValidator extends \Exception
{
    public static function validate($data) {
        $validator = Validator::make($data, \App\Models\raca::$rules, \App\Models\raca::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação de Raca");
        return $validator;

    }
}
