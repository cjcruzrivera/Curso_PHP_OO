<?php namespace Config;

    class Enrutador{

        public static function run(Request $request){
            $controlador = $request->get_controlador() . 'Controller';
            $ruta = ROOT . "Controllers" . DS . $controlador . ".php";
            $metodo = $request->get_metodo();
            $argumento = $request->get_argumento();

            if(is_readable($ruta)){
                require_once $ruta;
                $mostrar = "Controllers\\" . $controlador;
                $controlador = new $mostrar;
                if(!isset($argumento)){
                    call_user_func(array($controlador,$metodo));
                }else{
                    call_user_func_array(array($controlador, $metodo),$argumento);
                }
            }
        }
    }

?>