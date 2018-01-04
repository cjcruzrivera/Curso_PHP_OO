<?php namespace Controllers;

    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;

    class estudiantesController{
        
        private $estudiante;
        private $seccion;

        public function __construct(){
            $this->estudiante = new Estudiante();
            $this->seccion = new Seccion();
        }

        public function index(){
            $datos = $this->estudiante->listar();
            return $datos;
        }

        public function agregar(){

            if(!$_POST){
                $datos = $this->seccion->listar();
                return $datos;
            }else{
                $permitidos = array("image/jpg","image/jpeg","image/png","image/gif");
                $limite_tamaño = 700*1024;
                
                if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_tamaño){
                    $nombre_imagen = $_FILES['imagen']['name'];
                    $ruta = "Views" . DS . "template" . DS . "imagenes" . DS . $nombre_imagen;
                    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);   
                }else{
                    $nombre_imagen = "standar.jpg";
                }

                $this->estudiante->set("nombre", $_POST['nombre']);
                $this->estudiante->set("edad", $_POST['edad']);
                $this->estudiante->set("promedio", $_POST['promedio']);
                $this->estudiante->set("id_seccion", $_POST['id_seccion']);
                $this->estudiante->set("imagen", $nombre_imagen);
                $this->estudiante->add();
                
                header("Location: " . URL . "/estudiantes");
            }
        }
    }

?>