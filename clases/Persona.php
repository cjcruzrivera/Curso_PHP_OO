<?php 
/**Ejemplo de definicion de clases */
    class Persona{

        //atributos
        public $nombre = "nombre";
        public $apellido = "apellido";

        //metodos
        public function guardar($nombre,$apellido){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function mostrar(){
            self::formato($this->nombre, $this->apellido);
        }

        public function formato($nombre, $apellido){
            echo "Nombre: $nombre | Apellido: $apellido";
        }
    }


?>