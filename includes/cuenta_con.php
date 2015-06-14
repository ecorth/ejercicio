<?php
//incluimos los datos para conectarnos a la base
include('base_conexion.php');
//se crea una variable cambio que nos modifica los datos que queremos obtener
//dependiendo del where en la consulta sql
$cambio = 1;
function cuentaCon($host, $user, $pass, $db, $cambio) {
    //verificamos con un if si la conexion tuvo exito
    if ($cone2 = new mysqli($host, $user, $pass, $db)) {
        //si la conexion es exitosa realizamos las siguientes instrucciones
    $query = "select caracteristicas_lugar.nombre as nombre, 
    caracteristicas_lugar.descripcion as descrip, caracteristicas_lugar.foto as foto from
    caracteristicas_lugar inner join
    cuenta_con on caracteristicas_lugar.id = cuenta_con.caracteristicas_lugar_id 
    inner join lugares on cuenta_con.lugares_id = lugares.id where lugares.id =$cambio";
    $res2 = $cone2->query($query);
        while ($fila2 = $res2->fetch_assoc()) {
        //creamos el html de forma dinamica pasando los datos de la base
        echo utf8_encode("<div class='imagen'>
        <img src='".$fila2['foto']."' />
        </div><!--/imagen-->
        <h3 class='rosa'>".$fila2['nombre']."</h3>
        <p>".$fila2['descrip']."</p>
        <div class='clearfix'></div>");
        }
        //cerramos la conexion
    $cone2->close();
    $res2->close();
    
    }else{
         //si la conexion a la base tuvo algún error mostramos el siguiente texto
        echo "Por el momento no se puede mostrar la informacion comuniquese con el administrador de la pagina";
    }
}
