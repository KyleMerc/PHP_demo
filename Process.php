<?php
session_start();


if (isset($_POST["submit"])) {


     if (isset($_POST["opr1"]) && isset($_POST["optr"]) && isset($_POST["opr2"])) {    
        $opr1 = $_POST["opr1"];
        $opr2 = $_POST["opr2"];
		$optr = $_POST["optr"];
		
		function Calculator($opr1, $opr2, $optr)
		{
			if ( ! is_numeric($opr1) || ! is_numeric($opr2)) {
				return $result = false;
			}

			switch ($optr) {
				case "+":
					$result = $opr1 + $opr2;
					
					break;
				case "-":
					$result = $opr1 - $opr2;
					
					break;
				case "/":
					$result = $opr1 / $opr2;
					
					break;
				case "*":
					$result = $opr1 * $opr2;
					
					break;
			}

			return $result;
		}

		$_SESSION["result"] = Calculator($opr1, $opr2, $optr);
		$_SESSION["optr"] = $optr;
		header("Location: Calc.php");
     }

     if (isset($_POST["fibolen"])) {
		$input = $_POST["fibolen"];

        function Fibo($input)
		{
			$sum = 0;
			$res = 1;
			$temp = 0;

			if ( ! is_numeric($input) ) {
				return $result = false;
			}

			echo $temp . " ";

			for ($i = 0; $i <= $input; $i++) {
				$result[] = $sum;
				$sum = $res + $temp;	
				$res = $temp;
				$temp = $sum;
				
			}
			return $result;
		}

		$_SESSION["fibolen"] = Fibo($input);
		header("Location: Fibonacci.php");
     }

     if (isset($_POST["tbllen"])) {
		$tbllen = $_POST["tbllen"];

        function MulTable($tbllen)
		{
			$result = [];

			if ( ! is_numeric($tbllen)) {
				return false;
			}

			for ($i = 1, $count = 0; $i <= $tbllen; $i++) {
				for ($j = 1; $j <= $tbllen; $j++) {
					$result[$count++] = $i * $j;
				}
			}

			return $ret = [
				"out" => $result,
				"size" => $tbllen
			];
		}

		// if ( ! is_numeric($tbllen)) {
		// 	$_SESSION["size"] = false;
		// } else {
		// 	$_SESSION["size"] = $tbllen;
		// }
		
		$_SESSION["result"] = MulTable($tbllen);
		header("Location: MulTable.php");
     }

     if (isset($_POST["word"])) {
		$word = $_POST["word"];

		function isPalindrome($word) 
		{
			$orig = str_split($word);
			$rev = [];
			$count = count($orig);
			
			if (is_numeric($word)) {
				return "Not a word";
			}

			for ($i = $count, $j = 0; $i >= 0; $i--, $j++) {
				$rev[$j] = $orig[$i];
			}

			$compare = strcasecmp($word, implode($rev));
			
			return $compare == 0 ? true : false;
		}  

		$_SESSION["word"] = isPalindrome($word);
		header("Location: Palindrome.php");
     }

     if (isset($_POST["plen"])) {
		$plen = $_POST["plen"];

		function Pyramid($plen)
		{
			$ctr = 0;
			$result = "";
			
			if ( ! is_numeric($plen)) {
				return false;
			}

			for ($i = $plen; $i > 0; $i--) {
				for ($j = $i; $j > 0; $j--) {
					$result .= "&nbsp;";
				}
		
				for ($k = 0; $k <= $ctr; $k++) {
					$result .= " *";
				}
				$ctr++;
				$result .= "<br />";
			}

			return $result;
		}
		
		$_SESSION["plen"] = Pyramid($plen);
		header("Location: Pyramid.php");
     }
}