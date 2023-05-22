<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class RegisterValidator extends Validator
{
   public function validateHello($attribute, $value, $parameters) {
      return $value % 2 == 0;
   }

}