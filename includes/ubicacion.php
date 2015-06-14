<?php
//incluimos los datos para conectarnos a la base
include('base_conexion.php');
//se crea una variable cambio que nos modifica los datos que queremos obtener
//dependiendo del where en la consulta sql
$cambio = 1;
function ubicacion($host, $user, $pass, $db, $cambio){
    //verificamos con un if si la conexion tuvo exito
    if ($cone4 = new mysqli($host, $user, $pass, $db)) {
        //si la conexion es exitosa realizamos las siguientes instrucciones
    $query4 ="select mapa, descripcion from lugares where id = $cambio";
    $res4 = $cone4->query($query4);
    while($fila4 = $res4->fetch_assoc()){
        //creamos el html de forma dinamica pasando los datos de la base
        echo utf8_encode("<div class='mapa'>
        <iframe src='".$fila4['mapa']."' width='730' height='300' frameborder='0' style='border:0'></iframe>
        </div><p>".$fila4['descripcion']."</p>");    
    }
    //cerramos la conexion
    $cone4->close();
    $res4->close();
    }else{
         //si la conexion a la base tuvo algún error mostramos el siguiente texto
        echo "Por el momento no se puede mostrar la informacion comuniquese con el administrador de la pagina";
    }
}

