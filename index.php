<?php
require "Calc.php";
require "Fibonacci.php";
require "MulTable.php";
require "Palindrome.php";

$menu = <<<MENU
--- Options ---
1   Calculator
2   Fibonacci
3   Multiplication Table
4   Palindrome
---------------\n
MENU;

do {
    echo $menu;
    $opt = readline("Choose: ");

    switch ($opt) {
        case 1:
            echo "\nCalculator\n";
            
            $ans1 = readline("Opr 1: ");
            $ans2 = readline("Opr 2: ");
            $optr = readline("Operator: ");

            Calculator(intval($ans1), intval($ans2), $optr);
            break;
        case 2:
            echo "\nFibonacci\n";
            
            $fibo = readline("Length of Fibo: ");
            
            Fibo($fibo);
            break;
        case 3:
            echo "\nMultiplication Table\n";

            $len = readline("Length: ");

            MulTable($len);
            break;
        case 4:
            echo "\nPalindrome\n";

            $word = readline("Enter Here: ");

            isPalindrome($word);
            break;
        default:
            echo "\nInvalid Input\n";
    }

    $again = readline("\nWant to try again?(Y/N): ");
    echo "\n";
} while ($again == "y" || $again == "Y");
