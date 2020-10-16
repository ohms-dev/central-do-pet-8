<?php

namespace App\Validator;
use Illuminate\Support\Facades\Validator;

class doencaValidator extends \Exception
{
    public static function validate($data) {
        $validator = Validator::make($data, \App\Models\doenca::$rules, \App\Models\doenca::$messages);
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação de doença!");
        return $validator;

    }
}
