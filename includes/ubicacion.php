<?php
include('base_conexion.php');
$cambio = 1;
function ubicacion($host, $user, $pass, $db, $cambio){
    if ($cone4 = new mysqli($host, $user, $pass, $db)) {
    $query4 ="select mapa, descripcion from lugares where id = $cambio";
    $res4 = $cone4->query($query4);
    while($fila4 = $res4->fetch_assoc()){
        echo utf8_encode("<div class='mapa'>
        <iframe src='".$fila4['mapa']."' width='730' height='300' frameborder='0' style='border:0'></iframe>
        </div><p>".$fila4['descripcion']."</p>");    
    }
    $cone4->close();
    $res4->close();
    }else{
        echo "Por el momento no se puede mostrar la informacion comuniquese con el administrador de la pagina";
    }
}

