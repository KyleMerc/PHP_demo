<?php
session_start();

$interval = 9;
?>


<?php require "templates/header.php"; ?>
    <div class="container">
        <div class="display-1">Multiplication Table</div>

        <form action="Process.php" method="post">
            <label for="">Length of the table: </label>
            <input type="text" name="tbllen">

            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            <a href="index.php" class="btn btn-primary">Go Back</a>
        </form>

        <table class="table">
            <tr>
                <?php
                    if (isset($_SESSION["result"])) {
                        $result = $_SESSION["result"]["out"];
                        $interval = $_SESSION["result"]["size"];
                        $size = $_SESSION["result"]["size"] - 1;
                       // $interval = range(10, 100, 10);
//  var_dump($_SESSION["result"]); die;
                        if ($result != false) :
                            foreach ($result as $i => $data) :
                ?>
                                <?php
                                    echo "<td>" . $data . "</td>";

                                    if ($i == $size) {
                                        echo "</tr>";
                                        $size += $interval;
                                    }
                                ?>
                <?php 
                            endforeach;
                        else :
                ?>
                            <div class="alert alert-danger">Not a Number</div>
                <?php
                        endif;
                        unset($_SESSION["result"]);
                    }
                ?>
        </table>

    </div>
<?php require "templates/footer.php"; ?>
    
