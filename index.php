<?php

    /**AUTOLOAD */
    $_GET['folder'];//hay que acceder a la url index.php?folder=*nombrecarpeta*
    function autoload($clase){
        include $_GET['folder'] . "/$clase.php";
    }
    spl_autoload_register('autoload');


/**Pruebas definicion de clases  archivo: /clases/Persona.php*/

    // $persona = new Persona();
    // $persona->guardar("Camilo", "Cruz");
    // $persona->mostrar();
    
   
/** Pruebas Constructores y destructores archivo: /clases/Loteria.php*/
    
    // $lot = new Loteria(10,10);
    // $lot->sorteo();

/* Pruebas HERENCIA archivo /clases/Moto.php */
    

    // $moto = new Moto();
    // $moto->estado();
    // $moto->switch_motor();
    // $moto->estado();
    // $moto->switch_motor();
    // $moto->estado();
// 
    /**Pruebas Metodos y atributos estaticos archivo: clases/Pagina.php */
    
    
    // $pagina = new Pagina();
    // $pagina->bienvenida();

    //Pagina::bienvenida2(); //Se usa sin instancia objeto

    /**INTERFACE */
    interface Vehiculo{
        
        public function encender();

        public function apagar();
    }

    interface Gasolina extends Vehiculo{
        public function vaciarTanque($cant);
        public function llenarTanque($cant);
    }

    class Deportivo implements Gasolina{

        //Atributos
        private $estado = false;
        private $tanque = 0;

        //Metodos

        public function estado(){
            if($this->estado){
                print "El vehiculo esta encendido y tiene $this->tanque L de gasolina <br>";
            }else{
                print "El vehiculo esta apagado y tiene $this->tanque L de gasolina <br>";
            }
        }

        public function encender(){
            if($this->estado){
                print "vehiculo ya encendido <br>";
            }else{
                if($this->tanque <= 0){
                    print "No se puede encender el vehiculo ya que no tiene gasolina <br>";
                }else{
                    $this->estado = true;
                    print "Se ha encendido el vehiculo <br>";                    
                }
            }
        }

        public function apagar(){
            if($this->estado){
                $this->estado = false;
                print "Se ha apagado el vehiculo <br>";
            }else{
                print "Vehiculo ya apagado <br>";
            }
        }

        public function vaciarTanque($cant){
            $this->tanque -= $cant;
            if($this->tanque<=0){
                $this->tanque = 0;
                $this->estado = false;
            }
        }

        public function llenarTanque($cant){
            $this->tanque = $cant;
        }

        public function usar($km){
            if($this->estado){
                $reduccion = $km/3;
                self::vaciarTanque($reduccion);    
            }else{
                print "El vehiculo no se puede usar ya que esta apagado <br>";
            }            
        }
    }

    // $miAuto = new Deportivo();
    // $miAuto->llenarTanque(100);
    // $miAuto->estado();
    // $miAuto->encender();
    // $miAuto->usar(350);
    // $miAuto->estado();


//Prueba de autoload
    // MensajeAutoload1::imprimir("Hola Mundo");
?>
