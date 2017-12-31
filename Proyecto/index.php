<?php 

    require_once "Config/Autoload.php";
    Config\Autoload::run();

    $est = new Models\Estudiante();
    $est->set('id',1);
    $result = $est->view()['nombre'];
    print_r($result);
?>