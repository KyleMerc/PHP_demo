<?php 
    function Fibo($input)
    {
        $res = 1;
        $temp = 0;

        echo $temp . " ";

        for ($i = 0; $i <= $input; $i++) {
            $sum = $res + $temp;
            echo $sum . " ";
            $res = $temp;
            $temp = $sum;
            
        }

        echo "\n";
    }
?>

<?php require "templates/header.php"; ?>
    <div class="container">
        <div class="display-1">Fibonacci</div>

        <form action="Process.php" method="post">
            <label for="">Fibonacci Number: </label>
            <input type="text" name="fibolen">

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
<?php require "templates/footer.php"; ?>