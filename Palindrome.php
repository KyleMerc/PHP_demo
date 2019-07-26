<?php
    function isPalindrome($word) 
    {
        $orig = str_split($word);
        $rev = [];
        $count = count($orig);

        for ($i = $count, $j = 0; $i >= 0; $i--, $j++) {
            $rev[$j] = $orig[$i];
        }

        $compare = strcasecmp($word, implode("", $rev));
        
        if ($compare == 0) {
            echo "It's a Palindrome\n";
        } else {
            echo "Not a Palindrome\n";
        }
    }
    
    