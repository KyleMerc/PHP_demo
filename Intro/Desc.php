<?php
    function Desc($input) 
    {
        $desc = [];
        $count = $input;

        for ($i = 0; $i <= $count; $i++) {
            $desc[$i] = $input--;
        }
        
        return $desc;
    }

    $res = Desc(17);
    $count = sizeof($res);

    for ($i = 0; $i < $count; $i++) {
        echo $res[$i] . "\n";
    }