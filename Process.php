<?php
if (isset($_POST["submit"])) {


     if (isset($_POST["opr1"]) && isset($_POST["optr"]) && isset($_POST["opr2"])) {
        require "Calc.php";
        
        $opr1 = $_POST["opr1"];
        $opr2 = $_POST["opr2"];
        $optr = $_POST["optr"];

        Calculator($opr1, $opr2, $optr);
     }

     if (isset($_POST["fibolen"])) {
        require "Fibonacci.php";

        $len = $_POST["fibolen"];

        Fibo($len);
     }

     if (isset($_POST["tbllen"])) {
        require "MulTable.php";
     }

     if (isset($_POST["word"])) {
        require "Palindrome.php";
     }

     if (isset($_POST[""])) {
        require "Pyramid.php";
     }
}