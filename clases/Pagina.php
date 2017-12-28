<?php 
    class Pagina{

        //Atributos
        public $nombre = "Mi Pagina";
        public static $url = "www.mipaginaweb.com";
    
        //Metodos
        public function bienvenida(){
            echo "Bienvenido a <b> $this->nombre </b> <br> la pagina es ".self::$url;//self para atributos estaticos
        }
        
        public static function bienvenida2(){
            echo "Bienvenido a <b>". self::$url . "</b>";
        }

    }

?>