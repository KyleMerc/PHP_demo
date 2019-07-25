<?php

    function legal($age) 
    {
        if ($age < 21) {
            echo "Minor" . "\n";
        } elseif($age >= 21 && $age < 65) {
            echo "Teenager" . "\n";
        } elseif($age >= 65) {
            echo "Senior" . "\n";
        }
    }

    legal(20.5);