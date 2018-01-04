<?php 
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);

    require_once "Config/Autoload.php";
    Config\Autoload::run();
    Config\Enrutador::run(new Config\Request());
    // Pruebas
    // $est = new Models\Estudiante();
    // $est->set('id',1);
    // $result = $est->view()['nombre'];
    // print_r($result);
?>