<?php

namespace App\Libraries;

class PasswordValidate
{    
    static public function password($attribute, $value, $parameters, $validator)
    {
      if(strlen($value) < 8) {
        return false;
      }
      if(!preg_match('/[A-Z]/', $value)) {
        return false;
      }
      if(!preg_match('/\d/', $value)) {
        return false;
      }
      if(preg_match('/[ęóąśłżźćńĘÓĄŚŁŻŹĆŃ ]/', $value)) {
        return false;
      }
      return true;
    }  
}
