<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php include('includes/head.php') ?>
        <script src="js/jquery.tabber.js "></script>
        <link href="css/jquery.tabber.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        include('includes/header.php');
        include('includes/conexion.php');
        ?>
        <section id="bannerInt" class="jardin">
            <div class="bannerFrase contenedor">
                <img src="images/frase_jardin.png" />
            </div>
        </section>
        <div class="jardinTab">
            <menu class="tabber-menu">
                <div class="contenedor">
                    <a href="#tab-1-1" class="tabber-handle">JARDINES</a>
                    <a href="#tab-1-2" class="tabber-handle">HACIENDAS</a>
                    <a href="#tab-1-3" class="tabber-handle">SALONES</a>
                    <span class="ubicacion">
                        <select>
                            <option>Cuernavaca, Morelos</option>
                            <option>Cuernavaca, Morelos</option>
                        </select>
                    </span>
                </div>
            </menu>
            <div class="contenedor">
                <div class="tabber-tab" id="tab-1-1">
                    <ul class="jardinItem">
                        <?php 
                        //llamamos a la funcion conectar e indicamos que cambio
                        //es igual a 1 para que obtenga el tipo con id 1
                        $cambio = 1;
                        conectar($host, $user, $pass, $db, $cambio);
                        ?>
                        
                    </ul>
                </div>
                <div class="tabber-tab" id="tab-1-2">
                    <ul class="jardinItem">
                        <?php 
                        //En este apartado obtendremos los datos con id tipo = 2
                        $cambio=2; 
                        conectar($host, $user, $pass, $db, $cambio)
                        ?>
                    </ul>
                </div>
                <div class="tabber-tab" id="tab-1-3">
                    <ul class="jardinItem">
                        <?php 
                        //En este apartado obtendremos los datos con id tipo = 3
                        $cambio=3; 
                        conectar($host, $user, $pass, $db, $cambio)
                        ?>
                    </ul>
                </div>
            </div><!--/contenedor-->
        </div><!-- /jardinTab-->
<?php include('includes/footer.php') ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".jardinTab").tabber();
            });
        </script>
    </body>
</html>