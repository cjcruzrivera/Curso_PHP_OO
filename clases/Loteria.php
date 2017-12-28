<?php 
/**Ejemplo de Costructores */
    class Loteria{

        //Atributos
        public $numero;
        public $intentos;
        public $intentoGanador;
        public $resultado = false;

        //Metodos

        public function __construct($numero, $intentos){
            $this->numero = $numero;
            $this->intentos = $intentos;
        }

        public function sorteo(){
            $min = $this->numero / 2;
            $max = $this->numero * 2;

            for($i=0; $i < $this->intentos; $i++){
                $int = rand($min,$max);
                self::jugar($int,$i+1);
                if($this->resultado){
                    break;
                }
            }
        }

        public function jugar($intento, $i){
            if($intento == $this->numero){
                $this->resultado = true;
                $this->intentoGanador = $i;
                echo "$this->numero == $intento <br>";
            }else{
                echo "$this->numero != $intento <br>";
            }
        }

        public function __destruct(){
            if($this->resultado){
                echo "Felicidades ha ganado con el numero $this->numero al intento numero $this->intentoGanador";
            }else{
                echo "Lo sentimos ha perdido sus $this->intentos intentos";
            }
        }
        
    }

?>