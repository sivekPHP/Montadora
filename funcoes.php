<pre>
<?php

$a = 10;
$b = 20;
$c = 5;

function soma($a, $b) {
    return $a + $b;
}

echo soma(2, 5)."\n";


$soma = function ($a, $b) use ($c) {
    return $a + $b + $c;
};

//var_dump($soma);

echo $soma(2, 5)."\n";

$multi = function ($a, $b) {
    return $a * $b;
};

function calc($val1, $val2, $op) {
    return $op($val1, $val2);
}

echo calc(2, 3, $soma)."\n";
echo calc(2, 3, $multi)."\n";
