<?php
session_start();
?>

<?php require "templates/header.php"; ?>
    <div class="container">
        <div class="display-1">Palindrome</div>

        <form action="Process.php" class="form" method="post">
            <label for="">Enter Word:</label>
            <input type="text" name="word">
            
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            <a href="index.php" class="btn btn-primary">Go Back</a>
        </form>
        <?php
            if (isset($_SESSION["word"])) :
                $result = $_SESSION["word"];

                if ( ! is_string($result)) :
                    if ($result) :
        ?>
                        <div class="alert alert-success" role="alert">It's a Palindrome</div>
            <?php   else : ?>
                        <div class="alert alert-danger" role="alert">Not Palindrome</div>
            <?php
                    endif;
                else :
            ?>
                    <div class="alert alert-danger">Not a word/sentence</div>
        <?php
                endif;
                unset($_SESSION["word"]);
            endif;
        ?>
    </div>
<?php require "templates/footer.php"; ?>