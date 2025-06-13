<?php

$a = "Ali";
$b = "Murtadho";

for ($i = 1; $i <= 100; $i++) :

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$a $b<br>";
    } elseif ($i % 3 == 0) {
        echo "$a<br>";
    } elseif ($i % 5 == 0) {
        echo "$b<br>";
    } else {
        echo "$i<br>";
    }
endfor;
