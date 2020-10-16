<?php

namespace App\Validator;

class historicoValidator extends \Exception
{
    public static function validate($data) {
        $validator = \Validator::make($data, \App\Models\historico::$rules, \App\Models\historico::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação de Historico");
        return $validator;

    }
}
