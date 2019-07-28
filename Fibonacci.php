<?php 
session_start();
?>

<?php require "templates/header.php"; ?>
    <div class="container">
        <div class="display-1">Fibonacci</div>

        <form action="Process.php" method="post">
            <label for="">Fibonacci Number:</label>
            <input type="text" name="fibolen">

            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            <a href="index.php" class="btn btn-primary">Go back</a>
        </form>
        
        <table class="table">
            <tr>
            <?php
                if (isset($_SESSION["fibolen"])) :
                    $result = $_SESSION["fibolen"];

                    if ($result != false) : 
                        foreach ($result as $data) :
            ?>      
                    
                            <td><?php echo $data;?></td>
                        
            <?php
                        endforeach;
                    else :
            ?>
                        <td class="div alert alert-danger">Not a Number</td>
            <?php
                    endif;
                    unset($_SESSION["fibolen"]);
                endif;
            ?>
            </tr>
        </table>

    </div>
<?php require "templates/footer.php"; ?>