<?php

namespace App\Validator;

class petValidator
{
    public static function validate($data) {
        $validator = \Validator::make($data, \App\Models\pet::$rules, \App\Models\pet::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação do pet");
        return $validator;
    }
}
