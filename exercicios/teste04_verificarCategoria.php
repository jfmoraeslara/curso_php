<?php

    function verificarCategoria($a) {
        switch($a) {
            case "eletrônicos":
                echo "Essa categoria é de produtos eletrônicos <br>";
                break;
            case "vestuário":
                echo "Essa categoria é de produtos de vestuário <br>";
                break;
            case "alimentos":
                echo "Essa categoria é de produtos alimentícios <br>";
                break;
            default:
                echo "Categoria desconhecida";        
        }
    }

    verificarCategoria("eletrônicos");
    verificarCategoria("vestuário");
    verificarCategoria("alimentos");
    verificarCategoria("computadores");
        
?>