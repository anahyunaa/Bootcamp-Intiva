<?php

// for ($i = 1; $i <=3; $i++) {
//         $data = $i *3;

//         // echo "$i ";
//         echo "$data ";
// }


// for ($i = 10; $i>=1 ; $i--) {
//         $data = $i *3;

//         // echo "$i ";
//         echo "$data ";
// }

// for ($i = 1; $i <= 5 ; $i++) {
    
//     for ($j = 1; $j <= 5; $j++) {
//         echo "proses $i: $j <br/>";
//     }

// }

for ($i = 1; $i <= 10 ; $i++) {
    
    for ($j = 1; $j <= $i; $j++) {
        $data = $i *$j;

        echo "$data ";
    }
    
    echo " <br/>";
}