<?php

namespace App\Exceptions\Custom;

/**
 * Klasa do obsługi wyjątków dla HTTP.
 *
 * @category Exceptions
 *
 * @author  Przemysław Drzewicki <przemyslaw.drzewicki@telestrada.pl>
 * @copyright (C) 2017 by Telestrada
 */
class HttpCodesExceptions
{
    /** Rozszerzenie klasy o wątek zwrotek */
    use \App\Http\Requests\Outputs;

    /**
    * Dostępne zwrotki dla wyjątków.
    *
    * @var array
    */
    private $availables = [
        404 => 'notFound',
        403 => 'forbidden',
        400 => 'badRequest',
        401 => 'unauthorized',
        406 => 'notAcceptable',
        504 => 'gatewayTimeout',
        415 => 'unsupportedType',
        503 => 'serviceUnavailable',
        500 => 'internalServerError'
    ];

    /**
         * Sprawdzenie wyjątku.
         *
         * @param  \Exception  $exception
         * @return \Illuminate\Http\Response
         */
    public function check($exception)
    {
        $code = $this->getExceptionHTTPStatusCode($exception);
        $message = $this->getExceptionHTTPMessage($exception);
var_dump($message);die();
        $message = json_decode($message, true)['data'];
        if (!is_null($message)) {
            $message = array_key_exists('customMessages', $message)? $message['customMessages'] : $message;
        }
        
        $this->checkIsCodeSystemError($code);
        return array_has($this->availables, $code)?
            response()->json($this->{$this->availables[$code]}(
                ($code == 406)? $message :
            ($code == 415 || $code == 503? $message : $code)
            ), $code) :
            false;
    }

    /**
     * Poberanie błędu kodu.
     *
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function getExceptionHTTPStatusCode($exception)
    {
        return
            $exception->getCode() > 0? $exception->getCode() :
            (method_exists($exception, 'getStatusCode') ? $exception->getStatusCode() : 500);
    }

    /**
     * System error.
     * @param  Int  $code
     */
    protected function checkIsCodeSystemError($code): void
    {
        if (!array_key_exists($code, $this->availables)) {
            \Exceptions::throwSystemError();
        }
    }

    /**
     * Pobranie wiadomości błędu.
     *
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    protected function getExceptionHTTPMessage($exception)
    {
        return method_exists($exception, 'getMessage') ? $exception->getMessage() : '';
    }
}
