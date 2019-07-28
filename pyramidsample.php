<?php
function Pyramid($plen)
{
    $ctr = 0;
    $result = "";

    for ($i = $plen; $i > 0; $i--) {
        for ($j = $i; $j > 0; $j--) {
            $result .= "B";
        }

        for ($k = 0; $k <= $ctr; $k++) {
            $result .= "*";
        }
        $ctr++;
        $result .= "<br />";
    }

    return $result;
}

echo Pyramid(5); die;
var_dump(Pyramid(4));

// $test = <<<HERE
// This is my test.
// asd
// fdfsaf
// HERE;

// $test .= "Hello WOrld";

// echo $test;