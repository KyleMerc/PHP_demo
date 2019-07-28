<?php
session_start();
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
            <a href="index.php" class="btn btn-primary">Go back</a>
        </form>

        <hr />

        <?php
            if (isset($_SESSION["result"]) && isset($_SESSION["optr"])) :
                $optr = $_SESSION["optr"];
                $result = $_SESSION["result"];

                if ($result != false) :
        ?>
                    <div class="alert alert-primary">
                        <?php
                            switch($optr) {
                                case "+":
                                    echo "Sum is " . $result;
                                    break;
                                case "-":
                                    echo "Difference is " . $result;
                                    break;
                                case "*":
                                    echo "Product is " . $result;
                                    break;
                                case "/":
                                    echo "Qoutient is " . $result;
                                    break;
                                case false:
                                    echo "Invalid input";
                            }
                        ?>
                    </div>

        <?php
                else:
        ?>
                    <div class="alert alert-danger"><?php echo "Not a Number"; ?></div>
        <?php
                endif;
                unset($_SESSION["result"], $_SESSION["optr"]);
            endif;
        ?>

    </div>
<?php require "templates/footer.php"; ?>