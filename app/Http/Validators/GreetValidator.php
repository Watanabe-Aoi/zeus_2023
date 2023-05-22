<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use App\Http\Services\LanguageService;

class GreetValidator extends Validator
{
   public function validateLang($attribute, $value, $parameters) {
      $ls = new LanguageService();
      return in_array($value, $ls->getLangs());
   }
}