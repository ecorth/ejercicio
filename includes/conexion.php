<?php
include('base_conexion.php');
function conectar($host, $user, $pass, $db, $cambio) {
$query = "select estados.nombre as Estado, ciudad.nombre as Ciudad, lugares.nombre as Lugar,
lugares.url,lugares_has_tipos.foto, lugares_has_tipos.descripcion, lugares_has_tipos.cap, 
lugares_has_tipos.tipos_id,lugares_has_tipos.lugares_id 
from estados inner join ciudad on ciudad.estados_id = estados.id inner join 
lugares on ciudad.id = lugares.ciudad_id inner join 
lugares_has_tipos on lugares.id = lugares_has_tipos.lugares_id inner join 
tipos on lugares_has_tipos.tipos_id = tipos.id where lugares_has_tipos.tipos_id = $cambio";
    if ($cone = new mysqli($host, $user, $pass, $db)) {
        $res = $cone->query($query);
        while ($fila = $res->fetch_assoc()) {
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
        $cone->close();
        $res->close();
        return true;
        } else {
        return false;
    }
}