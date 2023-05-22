<?php
function square(float $base = 1, float $height = 1) : float {
    $area = $base * $height;
    print($area.' cm^3');
    return $area;
}

square($base=10, $height=90);
