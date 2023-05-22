<?php
class Fs{
    public string $name;
    public string $kinds;
    public string $color;
    public function __construct (string $name, string $kinds, string $color) {
        $this->$name = $name;
        $this->$kinds = $kinds;
        $this->$color = $color;
    }
}

$objects = [
    $apple = [ 'name' => 'りんご', 'is_fruit' => true, 'is_flower' => false, 'is_red' => true, 'is_yellow' => false, ],
    $banana = [ 'name' => 'バナナ', 'is_fruit' => true, 'is_flower' => false, 'is_red' => false, 'is_yellow' => true, ],
    $mango = [ 'name' => 'マンゴー', 'is_fruit' => true, 'is_flower' => false, 'is_red' => true, 'is_yellow' => true, ],
    $grape = [ 'name' => 'ぶどう', 'is_fruit' => true, 'is_flower' => false, 'is_red' => false, 'is_yellow' => false, ],
    $rose = [ 'name' => 'バラ', 'is_fruit' => false, 'is_flower' => true, 'is_red' => true, 'is_yellow' => false, ],
    $dandelion = [ 'name' => 'タンポポ', 'is_fruit' => false, 'is_flower' => true, 'is_red' => false, 'is_yellow' => true, ],
    $tulip = [ 'name' => 'チューリップ', 'is_fruit' => false, 'is_flower' => true, 'is_red' => true, 'is_yellow' => true, ],
    $cherryBlossom = [ 'name' => 'さくら', 'is_fruit' => false, 'is_flower' => true, 'is_red' =>false , 'is_yellow' => false, ],
];

$objs = [
    $apple = new Fs('りんご', 'fruit', 'red'),
    $banana = new Fs('バナナ', 'fruit', 'yellow'),
];

function filterPrint($objects, $conditions){
    for($i=0; $i<$conditions.length; $i++){
        foreach($objects as $obj){
            if($condition){
                print($obj['name'].',');
            }
        }
        print("\n");
    }
}

// 1 リンゴ、バラ、マンゴー
print('1: ');
foreach($objects as $obj){
    $name = $obj['name'];           // string
    $isFruit = $obj['is_fruit'];    // bool
    $isFlower = $obj['is_flower'];  // bool
    $isRed = $obj['is_red'];        // bool
    $isYellow = $obj['is_yellow'];  // bool
    $condition = ( $isRed && ($isFruit || $isFlower && !$isYellow) );
    if( $condition ){
        print($name.',');
    }
}
print("\n");

// 2 ぶどう、バナナ、りんご、マンゴー、バラ
print('2: ');
foreach($objects as $obj){
    $name = $obj['name'];           // string
    $isFruit = $obj['is_fruit'];    // bool
    $isFlower = $obj['is_flower'];  // bool
    $isRed = $obj['is_red'];        // bool
    $isYellow = $obj['is_yellow'];  // bool
    $condition = ( $isFruit || $isFlower && ($isRed && !$isYellow) );
    if( $condition ){
        print($name.",");
    }
}
print("\n");

// 3 さくら、ぶどう、バラ、りんご、チューリップ
print('3: ');
foreach($objects as $obj){
    $name = $obj['name'];           // string
    $isFruit = $obj['is_fruit'];    // bool
    $isFlower = $obj['is_flower'];  // bool
    $isRed = $obj['is_red'];        // bool
    $isYellow = $obj['is_yellow'];  // bool
    $condition = (!$isRed && !$isYellow) || (!$isYellow) || ($isRed && $isFlower);  // bool
    if( $condition ){
        print($name.',');
    }
}
print("\n");

