<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;

class transfusaoValidator extends \Exception
{
    public function validate($data) {
        $validator = Validator::make($data, \App\Models\transfusao::$rules, \App\Models\transfusao::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação de Transfusao");
        return $validator;

    }
}
