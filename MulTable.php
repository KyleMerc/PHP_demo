<?php
    function MulTable($input)
    {
        for ($i = 1; $i <= $input; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                echo $i * $j . "\t";
            }
            
            echo "\n";
        }
    }

    
