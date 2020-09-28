<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;

class vacinaValidator extends \Exception
{
    public function validate($data) {
        $validator = Validator::make($data, \App\Models\vacina::$rules, \App\Models\vacina::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação de vacina!");
        return $validator;

    }
}
