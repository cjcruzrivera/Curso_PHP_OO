<h3>VISTA PRINCIPAL DE ESTUDIANTES</h3>    
<?php
    $datos = $estudiantes->index();
    while($row = pg_fetch_array($datos)){
        echo $row['nombre'] . "<br>";
    }
?>