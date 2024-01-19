<?php

    class Humano {

        public $masculino = "M";
        public $feminino = "F";
        public $temporario = "Temporário";
        public $efetivo = "Efetivo";
        
        public function sexo() {
            echo "Sexo: ";
        }

        public function contrato() {
            echo "Contrato: ";
        }

    }

    class Professor extends Humano {

        public $materia = "Manutenção";
        private $curso = "Eletromêcanica";
        public $aulas = 2;

        public function academico() {
            echo "Professor da matéria: $this->materia";
        }        

        public function tipoCurso() {
            echo "Curso de : $this->curso";
        }

        public function quantidadeAulas() {
            echo "Quantidade de aulas : $this->aulas";
        }


    }

    $joao = new Professor;

    echo $joao->sexo() . $joao->masculino . "<br>";
    echo $joao->contrato() . $joao->temporario . "<br>";

    echo $joao->academico() . "<br>";   
    echo $joao->tipoCurso() . "<br>";
    echo $joao->quantidadeAulas() . "<br>";

?>