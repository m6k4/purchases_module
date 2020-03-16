<?php

namespace App\Exceptions;

class CustomExceptions
{
    public static function throwDataBaseError(): void
    {
        throw new \Exception(json_encode(['data' => ['database' => 'Błąd składni SQL']]), 406);
    }

    public static function throwEnvironmentError(String $environment): void
    {
        throw new \Exception(json_encode(['data' => ['environment' => "The environment is not set or environment '".$environment."' is turned off."]]), 503);
    }

    public static function throwNoContentError(): void
    {
        throw new \Exception(json_encode(['data' => ['database' => 'Brak rekordow do zmiany']]), 204);
    }

    public static function throwForbiddenError(): void
    {
        throw new \Exception(json_encode(['data' => ['request' => 'forbidden']]), 403);
    }
    public static function throwSystemError(): void
    {
        throw new \Exception(json_encode(['data' => ['system' => 'error']]), 503);
    }

    public static function throwError(array $data, $code = 406): void
    {
        throw new \Exception(json_encode(['data' => $data]), $code);
    }
}
