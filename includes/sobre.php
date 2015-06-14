<?php
//incluimos los datos para conectarnos a la base
include('base_conexion.php');
//se crea una variable cambio que nos modifica los datos que queremos obtener
//dependiendo del where en la consulta sql
$cambio = 1;
function sobre($host, $user, $pass, $db, $cambio){
    //verificamos con un if si la conexion tuvo exito
    if ($cone3 = new mysqli($host, $user, $pass, $db)) {
        //si la conexion es exitosa realizamos las siguientes instrucciones
        $query3="SELECT atracciones.nombre as atrac, atracciones.descripcion as descrip,
        atracciones.foto_url as foto, ciudad.nombre as ciudad, estados.nombre as estado
        from atracciones 
        inner join ciudad on atracciones.ciudad_id = ciudad.id
        inner join estados on ciudad.estados_id = estados.id 
        inner join lugares on ciudad.id = lugares.ciudad_id where lugares.id = $cambio";
        $res3 = $cone3->query($query3); 
        while ($fila3 = $res3->fetch_assoc()) {
            //creamos el html de forma dinamica pasando los datos de la base
            echo utf8_encode("<div class='imagen'>
            <img src='".$fila3['foto']."' /></div>
            <h1>Sobre ".$fila3['ciudad'].", ".$fila3['estado']."</h1>
            <h2>".$fila3['atrac']."</h2>
            <p>".$fila3['descrip']."</p>");
         }
         //cerramos la conexion
         $cone3->close();
         $res3->close();
    }else{
         //si la conexion a la base tuvo algún error mostramos el siguiente texto
         echo "Por el momento no se puede mostrar la informacion comuniquese con el administrador de la pagina";
    }
}
