<?php
require "templates/header.php";

// require "Calc.php";
// require "Fibonacci.php";
// require "MulTable.php";
// require "Palindrome.php";
// require "Pyramid.php";

?>
    <div class="container">
        <h1 class="display-1">PHP EXERCISES</h1>
        <div class="jumbotron">
            <span class="display-4">Select Function</span><br /><br />

                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="Calc.php" class="btn btn-primary">Calculator</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="Fibonacci.php" class="btn btn-primary">Fibonacci</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="MulTable.php" class="btn btn-primary">Multiplication Table</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="Palindrome.php" class="btn btn-primary">Palindrome</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="Pyramid.php" class="btn btn-primary">Pyramid</a>
                    </li>
                </ul>

        </div>
    </div>

<?php require "templates/footer.php"; ?>