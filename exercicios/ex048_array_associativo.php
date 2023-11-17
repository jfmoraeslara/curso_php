<?php

    $arr = ['parachoque' => 100, 'motor' => 3000, 'câpo' => 500, 'porta' => 300];

    function itensCaros($arr) {

        $arrItensCaros = [];

        foreach($arr as $item => $preco) {
            if($preco > 400) {
                array_push($arrItensCaros, $item);
            }
        }
        return $arrItensCaros;

    }

    $novoArr = itensCaros($arr);

    print_r($novoArr);

?>