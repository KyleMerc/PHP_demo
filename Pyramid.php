<?php
    function Pyramid($input)
    {
        $ctr = 0;

        for ($i = $input; $i > 0; $i--) {
            for ($j = $i; $j > 0; $j--) {
                echo " ";
            }
    
            for ($k = 0; $k <= $ctr; $k++) {
                echo " *";
            }
            $ctr++;
            echo "\n";
        }
    }