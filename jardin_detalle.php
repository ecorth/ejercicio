<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php include('includes/head.php') ?>
        <script src="js/jquery.tabber.js "></script>
        <link href="css/jquery.tabber.css" rel="stylesheet" type="text/css" />
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
    </head>
    <body>
        <?php
        include('includes/header.php');
        include('includes/presentacion.php');
        include('includes/cuenta_con.php');
        include('includes/sobre.php');
        include('includes/ubicacion.php');
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
            <div class="contenedor"  style="position:static;">
                <div class="tabber-tab" id="tab-1-1">
                    <ul class="jardinItem" style="position:static;">
                        <li class="jardinDetalle clearfix">
                        <?php presentacion($host, $user, $pass, $db, $cambio) ?>
                            <div class="jardin_galeria">
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria1.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria2.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria3.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria4.jpg" alt="" /></a>

                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria5.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria6.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria7.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria8.jpg" alt="" /></a>

                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria9.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria10.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria11.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria12.jpg" alt="" /></a>
                            </div><!--/jardin_galeria-->
                            <div class="clearfix"></div>
                            <section id="cuentaCon">
                                <div class="iconos"><img src="images/icono_novios.png" /> <img src="images/icono_coctel.png" /> <img src="images/icono_cama.png" /> <img src="images/icono_golf.png" /></div>
                                <h3>ESTE LUGAR CUENTA CON</h3>
                                <?php cuentaCon($host, $user, $pass, $db, $cambio) ?>
                            </section>

                            <section id="about">
                                <div class="contenedor">
                                    <?php sobre($host, $user, $pass, $db, $cambio) ?>
                                </div>
                            </section>
                            <div class="pushAbout"></div>

                            <section id="ubicacion" class="contenedor">
                                <h1>UBICACIÓN</h1>
                                <?php ubicacion($host, $user, $pass, $db, $cambio) ?>
                            </section>
                            <section id="contacto">
                                <div class="contenedor">
                                    <div class="form">
                                        <h1>¡Comienza a planear ahora!</h1>
                                        <br />
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br /><br />
                                        <input type="text" placeholder="Nombre" />
                                        <input type="text" placeholder="Número de personas" class="sm"/>
                                        <select class="sm completo">
                                            <option>Tipo de evento</option>
                                            <option>Boda</option>
                                            <option>Empresarial</option>
                                        </select>
                                        <input type="email" placeholder="Email"  />
                                        <input type="tel" placeholder="Teléfono" class="sm"/>
                                        <input type="text" placeholder="Fecha del evento" class="sm completo" />
                                        <button type="submit" >ENVIAR</button>
                                    </div><!--/form-->
                                </div>
                            </section>
                            <div class="pushContacto"></div>
                        </li>
                    </ul>
                </div>
                <div class="tabber-tab" id="tab-1-2">
                    <ul class="jardinItem" style="position:static;">
                        <li class="jardinDetalle clearfix">
                        <?php $cambio = 2; 
                        presentacion($host, $user, $pass, $db, $cambio) ?>
                            <div class="jardin_galeria">
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria1.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria2.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria3.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria4.jpg" alt="" /></a>

                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria5.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria6.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria7.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria8.jpg" alt="" /></a>

                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria9.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria10.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria11.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria12.jpg" alt="" /></a>

                            </div><!--/jardin_galeria-->
                            <div class="clearfix"></div>
                            <section id="cuentaCon">
                                <div class="iconos"><img src="images/icono_novios.png" /> <img src="images/icono_coctel.png" /> <img src="images/icono_cama.png" /> <img src="images/icono_golf.png" /></div>
                                <h3>ESTE LUGAR CUENTA CON</h3>
                                <?php cuentaCon($host, $user, $pass, $db, $cambio) ?>
                            </section>

                            <section id="about">
                                <div class="contenedor">
                                    <?php sobre($host, $user, $pass, $db, $cambio) ?>
                                </div>
                            </section>
                            <div class="pushAbout"></div>

                            <section id="ubicacion" class="contenedor">
                                <h1>UBICACIÓN</h1>
                                <?php ubicacion($host, $user, $pass, $db, $cambio) ?>
                            </section>
                            <section id="contacto">
                                <div class="contenedor">
                                    <div class="form">
                                        <h1>¡Comienza a planear ahora!</h1>
                                        <br />
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br /><br />
                                        <input type="text" placeholder="Nombre" />
                                        <input type="text" placeholder="Número de personas" class="sm"/>
                                        <select class="sm completo">
                                            <option>Tipo de evento</option>
                                            <option>Boda</option>
                                            <option>Empresarial</option>
                                        </select>
                                        <input type="email" placeholder="Email"  />
                                        <input type="tel" placeholder="Teléfono" class="sm"/>
                                        <input type="text" placeholder="Fecha del evento" class="sm completo" />
                                        <button type="submit" >ENVIAR</button>
                                    </div><!--/form-->
                                </div>
                            </section>
                            <div class="pushContacto"></div>
                        </li>
                    </ul>
                </div>
                <div class="tabber-tab" id="tab-1-3">
                    <ul class="jardinItem" style="position:static;">
                        <li class="jardinDetalle clearfix">
                        <?php $cambio = 3;
                        presentacion($host, $user, $pass, $db, $cambio) ?>
                            <div class="jardin_galeria">
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria1.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria2.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria3.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria4.jpg" alt="" /></a>

                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria5.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria6.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria7.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria8.jpg" alt="" /></a>

                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria9.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria10.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria11.jpg" alt="" /></a>
                                <a class="fancybox" rel="group" href="images/banner_realdelbosque.png"><img src="images/galeria12.jpg" alt="" /></a>

                            </div><!--/jardin_galeria-->
                            <div class="clearfix"></div>
                            <section id="cuentaCon">
                                <div class="iconos"><img src="images/icono_novios.png" /> <img src="images/icono_coctel.png" /> <img src="images/icono_cama.png" /> <img src="images/icono_golf.png" /></div>
                                <h3>ESTE LUGAR CUENTA CON</h3>
                                <?php cuentaCon($host, $user, $pass, $db, $cambio) ?>
                            </section>

                            <section id="about">
                                <div class="contenedor">
                                    <?php sobre($host, $user, $pass, $db, $cambio) ?>
                                </div>
                            </section>
                            <div class="pushAbout"></div>

                            <section id="ubicacion" class="contenedor">
                                <h1>UBICACIÓN</h1>
                                <?php ubicacion($host, $user, $pass, $db, $cambio) ?>
                            </section>
                            <section id="contacto">
                                <div class="contenedor">
                                    <div class="form">
                                        <h1>¡Comienza a planear ahora!</h1>
                                        <br />
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br /><br />
                                        <input type="text" placeholder="Nombre" />
                                        <input type="text" placeholder="Número de personas" class="sm"/>
                                        <select class="sm completo">
                                            <option>Tipo de evento</option>
                                            <option>Boda</option>
                                            <option>Empresarial</option>
                                        </select>
                                        <input type="email" placeholder="Email"  />
                                        <input type="tel" placeholder="Teléfono" class="sm"/>
                                        <input type="text" placeholder="Fecha del evento" class="sm completo" />
                                        <button type="submit" >ENVIAR</button>
                                    </div><!--/form-->
                                </div>
                            </section>
                            <div class="pushContacto"></div>
                        </li>
                    </ul>
                </div>
            </div><!--/contenedor-->
        </div><!-- /jardinTab-->
<?php include('includes/footer.php') ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".jardinTab").tabber();

                $('.flor').hide();
            });


            $(document).ready(function () {
                $(".fancybox").fancybox({
                    padding: 5
                });
            });
        </script>
    </body>
</html>