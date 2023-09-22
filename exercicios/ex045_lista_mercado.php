<?php

    $lista = ["Arroz", "Feijão", "Refri", "Cerveja", "Pipoca", "Óleo"];

    function listaString($arr){
        $str = "Sua lista de mercado: ";

        for($i = 0; $i < count($arr); $i++) {

            // finalizar com ponto (.) a lista
            if($i + 1 == count($arr)) {
                $str .= "$arr[$i]. ";
            } else {
                $str .= "$arr[$i], ";
            }

        }

        return $str;
    }

    echo listaString($lista);

?>