<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use \App\Http\Requests\Outputs;

    /**
    * Throw custom exception.
    * @param Exception $exception
    * @return void
    */
    protected function throwException(\Exception $exception): void
    {
        $this->notAcceptable();
        $message = json_decode($exception->getMessage(), true);
    
        if (is_null($message)) {
            \Exceptions::throwSystemError();
        }
        $this->response['data'] = array_key_exists('data', $message)? $message['data'] : $message;
        
    }

    /**
    * Prepare output.
    * @return Array
    */
    protected function output()
    {
        return response()->json($this->response);
    }

    /**
    * Throw exception.
    * @return \Exception
    */
    protected function notValidRequest()
    {
        throw new \Exception(json_encode(['data' => ['request' => 'is_not_valid']]), 406);
    }
}
