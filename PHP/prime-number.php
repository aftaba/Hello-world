<?php
$count = 0;
for( $i= 2; $i < 100; $i++ ) {
    $count = 0;
    for( $j=1; $j<= $i; $j++ ) {
        if ( 0 == $i%$j ) {
            $count++;
        }
    }
  	
    if ( 2 == $count ) {
        echo $i;
        echo "\n";
    } 
}
