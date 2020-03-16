<?php

namespace App\Http\Requests;

use App\Http\Requests\Outputs;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request as BaseRequest;

abstract class Request extends FormRequest
{
    use \App\Http\Requests\Outputs;

    public function authorize(BaseRequest $request = null)
    {
        return true;
    }
    
    public function failedValidation(Validator $validator)
    {
        abort(\Illuminate\Http\Response::HTTP_NOT_ACCEPTABLE, json_encode($this->notAcceptable($validator->getMessageBag()->getMessages())));
    }
}
