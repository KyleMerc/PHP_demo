<?php 
    function Fibo($input)
    {
        $res = 1;
        $temp = 0;

        echo $temp . " ";

        for ($i = 0; $i <= $input; $i++) {
            $sum = $res + $temp;
            echo $sum . " ";
            $res = $temp;
            $temp = $sum;
            
        }

        echo "\n";
    }

    