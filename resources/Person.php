<?php
// --- クラス定義 ---
class Person {
    public static string $companyName = 'Zeus-Enterprise';
    public string $firstName = '青';
    public string $lastName = '渡邊';

    public function __construct(string $firstName, string $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public static function work(){
        print self::$companyName.":お疲れさまでした。\n";
    }

    public function show() : void {
        print "\n私の名前は{$this->lastName} {$this->firstName}です。\n";
    }
}
// ------


// === メイン処理 ===
$person = new Person('樹', '渡邊');
print $person->lastName;
print "\n";
$person->age = 20;
print $person->age;

$person->show();

Person::work();
// ======