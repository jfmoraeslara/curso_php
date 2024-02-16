<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2030, 10, 10);
    $dataC->setDate(2030, 10, 10);

    $dataB->setTime(01, 10, 10);
    $dataC->setTime(01, 10, 10);
    

    if($dataB > $dataA) {
        echo "Data B maior que a data A! <br>";
    }

    if($dataA < $dataB) {
        echo "Data A menor que a data B! <br>";        
    }

    if($dataB == $dataC) {
        echo "Data B igual data C! <br>";
    }


?>