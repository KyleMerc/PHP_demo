<?php

    function Calculator(int $opr1, int $opr2, string $optr)
    {
        switch ($optr) {
            case "+":
                $sum = $opr1 + $opr2;
                echo "Sum is " . $sum . "\n";
                break;
            case "-":
                $diff = $opr1 - $opr2;
                echo "Difference is " . $diff . "\n";
                break;
            case "/":
                $qou = $opr1 / $opr2;
                echo "Qoutient is " . $qou . "\n";
                break;
            case "*":
                $prod = $opr1 * $opr2;
                echo "Product is " . $prod . "\n";
                break;
            default:
                echo "Invalid input\n";
        }
    }