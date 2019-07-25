<?php
    function Asc($input) 
    {
        $desc = [];
        $count = $input;

        for ($i = $count; $i > 0; $i--) {
            $desc[$i] = $i;
        }
        
        return $desc;
    }

    $res = Asc(10);
    $count = sizeof($res);

    for ($i = 0; $i <= $count; $i++) {
        echo $res[$i] . "\n";
    }