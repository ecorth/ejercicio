<?php
//incluimos los datos para conectarnos a la base
include('base_conexion.php');
function conectar($host, $user, $pass, $db, $cambio) {
$query = "select estados.nombre as Estado, ciudad.nombre as Ciudad, lugares.nombre as Lugar,
lugares.url,lugares_has_tipos.foto, lugares_has_tipos.descripcion, lugares_has_tipos.cap, 
lugares_has_tipos.tipos_id,lugares_has_tipos.lugares_id 
from estados inner join ciudad on ciudad.estados_id = estados.id inner join 
lugares on ciudad.id = lugares.ciudad_id inner join 
lugares_has_tipos on lugares.id = lugares_has_tipos.lugares_id inner join 
tipos on lugares_has_tipos.tipos_id = tipos.id where lugares_has_tipos.tipos_id = $cambio";
    //verificamos con un if si la conexion tuvo exito
    if ($cone = new mysqli($host, $user, $pass, $db)) {
        //si la conexion es exitosa realizamos las siguientes instrucciones
        $res = $cone->query($query);
        while ($fila = $res->fetch_assoc()) {
            //creamos el html de forma dinamica pasando los datos de la base
            echo utf8_encode("<li class = 'clearfix'>
            <div class = 'imagen'>
            <img src = '".$fila['foto']."'/>
            </div><!--/imagen-->
            <div class = 'jardinInfo'>
            <h1></h1>
            <H2>".$fila['Ciudad'].", ".$fila['Estado']."</H2>
            <p>".$fila['descripcion']."</p>
            <div class='personas'>
            <span class='num'>".$fila['cap']."</span>
            PERSONAS
            </div>
            <a href='".$fila['url']."' class='vermas'>VER MAS</a>
            </div><!--/jardinInfo-->
            </li>");
        }
        //cerramos la conexion
        $cone->close();
        $res->close();
        
        } else {
            //si la conexion a la base tuvo algún error mostramos el siguiente texto
        echo "Por el momento no se puede mostrar la informacion comuniquese con el administrador de la pagina";
    }
}