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
?>

<?php require "templates/header.php"; ?>
    <div class="container">
        <div class="display-1">Calculator</div>

        <form action="Process.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" name="opr1" placeholder="Operand 1">
                </div>
                <div class="col">
                    <select name="optr" id="">
                        <option value="+"> + </option>
                        <option value="-"> - </option>
                        <option value="/"> / </option>
                        <option value="*"> * </option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" name="opr2" placeholder="Operand 2">
                </div>
            </div>
            <br /><br />
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </form>

    </div>
<?php require "templates/footer.php"; ?>