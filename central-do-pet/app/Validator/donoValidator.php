<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;

class donoValidator extends \Exception
{
    public function validate($data) {
        $validator = Validator::make($data, \App\Models\dono::$rules, \App\Models\dono::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação de Historico");
        return $validator;

    }
}
