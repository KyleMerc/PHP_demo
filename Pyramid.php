<?php
    function Pyramid($input)
    {
        $ctr = 0;

        for ($i = $input; $i > 0; $i--) {
            for ($j = $i; $j > 0; $j--) {
                echo " ";
            }
    
            for ($k = 0; $k <= $ctr; $k++) {
                echo " *";
            }
            $ctr++;
            echo "\n";
        }
    }
?>

<?php require "templates/header.php"; ?>
    <div class="container">
        <div class="display-1">Pyramid</div>
    </div>
<?php require "templates/footer.php"; ?>