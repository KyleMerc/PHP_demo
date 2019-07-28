<?php
    function MulTable($input)
    {
        $res = [];
        //$out = [];
        
        for ($i = 1, $count = 0; $i <= $input; $i++) {
            for ($j = 1; $j <= $input; $j++) {
                $res[$count++] = $i * $j;
            }
        }
        $ret = [
            "out" => $res,
            "size" => $input
        ];
        return $ret;
    }
    $res = MulTable(4);
    //$interval = range(10, 100, 10);
    $out = $res["out"];
    $size = $res["size"] - 1;
    $cmpr = $res["size"];
    // foreach ($res as $data) {
    //     echo $data . " ";

    //     if ($interval[$size] == $data) {
    //         echo "<br />";
    //         $size++;
    //     }
    // }
    // foreach ($res as $i => $data) {
    //     echo $data . " ";

    //     if ($i == $size && $data % 10 == 0) {
    //         echo "<br />";
    //         $size += 10;
    //     }
    // }
     var_dump($out);
    foreach ($out as $i => $data) {
        echo $data . " ";

        if ($i == $size) {
            echo "<br />";
            $size += $cmpr;
        }
    }

    // array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
// foreach (range(0, 12) as $number) {
//     echo $number . " ";
// }
// echo "<br />";
// // The step parameter
// // array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
// foreach (range(10, 100, 10) as $number) {
//     echo $number . " ";
// }
// var_dump(range(10, 100, 10));

// echo implode("",range(9,"Q")) . "<br />";
// prints 9876543210

// echo implode("",range("9 ","Q")) . "<br />";  //space after the 9
// prints 9:;<=>?@ABCDEFGHIJKLMNOPQ

// echo implode("",range("q","9 ")) . "<br />";
// prints qponmlkjihgfedcba`_^]\[ZYXWVUTSRQPONMLKJIHGFEDCBA@>?=<;:987654
?>