<?php
namespace App\Http\Services;

use PhpParser\Node\Expr\Cast\String_;

class LanguageService {
   // 
   private array $langs;
   private array $greets;
   private array $greetsByLangs;

   public function __construct()
   {
      $this->langs = [ 'ja', 'en', 'fr' ];
      $this->greets = [ 'こんにちは。', 'Hello.', 'Bonjour.' ];
      $this->greetsByLangs = array_combine($this->langs, $this->greets);
   }

   public function getGreeting(string $lang): string
   {
      return $this->greetsByLangs[$lang];
   }

   public function getGreetsAndLangs(): array
   {
      return $this->greetsByLangs;
   }

   public function getGreets(): array
   {
      return $this->greets;
   }

   public function getLangs(): array
   {
      return $this->langs;
   }
}