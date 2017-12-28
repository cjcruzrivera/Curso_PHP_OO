<?php
    class Vehiculo1{

        //atributos

        public $motor = false;
        public $marca;
        public $color;

        //metodos
        public function estado(){
            if($this->motor){
                echo "El motor esta encendido <br>";
            }else{
                echo "El motor esta apagado <br>";
            }
        }

        public function switch_motor(){
            if($this->motor){
                $this->motor = false;
            }else{
                $this->motor = true;
            }
        }
    }
?>