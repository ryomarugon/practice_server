<?php
for ($i = 1; $i <= 1000; $i++) {
    $count = 0;
    
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $count += 1;
        }
    }
    
    if ($count == 2) {
        echo $i ;
        echo '<br>';
    }
}

?>