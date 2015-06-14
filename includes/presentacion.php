<?php
include('base_conexion.php');
$cambio = 1;
function presentacion($host, $user, $pass, $db, $cambio) {
    if ($cone = new mysqli($host, $user, $pass, $db)) {
        $query = "select lugares.foto, lugares.nombre as lugar, lugares.descripcion, 
        lugares.cap_max, ciudad.nombre as ciudad, estados.nombre estado, tipos.tipo 
        from estados 
        inner join ciudad on estados.id = ciudad.estados_id
        inner join lugares on ciudad.id = lugares.ciudad_id
        inner join lugares_has_tipos on lugares.id = lugares_has_tipos.lugares_id
        inner join tipos on lugares_has_tipos.tipos_id = tipos.id where lugares.id = $cambio";
        $res = $cone->query($query);
        while ($fila = $res->fetch_assoc()) {   
        echo utf8_encode("<div class = 'banner_detalle'>
        <img src = '".$fila['foto']."' />
        </div>
        <div class = 'jardinInfo'>
        <h1>".$fila['lugar']."</h1>
        <H2 CLASS = 'clearfix'>".$fila['ciudad'].", ".$fila['estado'].
        "<span class = 'tipo'>".$fila['tipo']."/</span></H2>
        <p>".$fila['descripcion']."</p>
        <div class = 'personas right'>
        <span class = 'num'><span class = 'capmax'>CAP. MAX.</span>".$fila['cap_max']."</span>
        PERSONAS
        </div>
        <a href = '#' class = 'vermas left'>COTIZAR &iexclAQUI!</a>
        </div>");
        break;
        }
        $cone->close();
        $res->close();
    }else{
         echo "Por el momento no se puede mostrar la informacion comuniquese con el administrador de la pagina";
    }
}
