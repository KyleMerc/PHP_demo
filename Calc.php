<?php

    function Calculator(int $opr1, int $opr2, string $optr)
    {
        switch ($optr) {
            case "+":
                echo "Sum is " . $opr1 + $opr2 . "\n";
                break;
            case "-":
                echo "Difference is " . $opr1 - $opr2 . "\n";
                break;
            case "/":
                echo "Qoutient is " . $opr1 / $opr2 . "\n";
                break;
            case "*":
                echo "Product is " . $opr1 * $opr2 . "\n";
                break;
            default:
                echo "Invalid input\n";
        }
    }