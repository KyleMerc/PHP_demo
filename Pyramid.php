<?php
session_start();
?>

<?php require "templates/header.php"; ?>
    <div class="container">
        <div class="display-1">Pyramid</div>

        <form action="Process.php" method="post">
            <label for="">Enter length of Pyramid:</label>
            <input type="text" name="plen">
            
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            <a href="index.php" class="btn btn-primary">Go back</a>
        </form>

        <?php
            if (isset($_SESSION["plen"])) {
                $plen = $_SESSION["plen"];
                if ($plen) {
                    echo $plen;
                } else {
                    echo "<div class=\"alert alert-danger\">Not a Number</div>";
                }
                

                unset($_SESSION["plen"]);
            }
        ?>
    </div>
<?php require "templates/footer.php"; ?>