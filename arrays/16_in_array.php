<?php

    // verificar um item dentro da array
    $arr = ['banana', 'maçã', 'batata', 'melância', 'limão'];

    if(in_array("batata", $arr)) {
        echo "Há um item batata dentro da array! <br>";
    } else {
        echo "Não há um item batata no array <br>";
    }

    $b = "banana";

    if(in_array($b, $arr)) {
        echo "Há um item batata dentro da array! <br>";
    } else {
        echo "Não há um item batata no array <br>";
    }

    if(in_array("perâ", $arr)) {
        echo "Há um item perâ dentro da array! <br>";
    } else {
        echo "Não há um item perâ no array <br>";
    }

?>