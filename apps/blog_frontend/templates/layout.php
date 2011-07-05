<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="contenedor_blog">
            <div id="blog">
                <div id="logo"></div>
                <div id="titulo">
                    <h2>Bienvenidos</h2>
                </div>
                <div id="nav">
                    <ul class="botonera">
                        <li> <?php echo link_to('HOME','@homepage')?></li>
                        <li> <?php echo link_to('NOTICIAS','@b_menu?tag=Noticias')?></li>
                        <li> <?php echo link_to('FOTOS','@b_menu?tag=Fotos')?></li>
                        <li> <?php echo link_to('EVENTOS','@b_menu?tag=Eventos')?></li>
                        <li> <?php echo link_to('VIDEOS','@b_menu?tag=Videos')?></li>
                        <li> <?php echo link_to('SERVICE CENTER','@b_menu?tag=Service Center')?></li>
                        <li> <?php echo link_to('PRODUCTOS','@b_menu?tag=Productos')?></li>

                    </ul>
                    <div id="buscador">
                        <label>buscador: </label>
                        <form id="busqueda"action="<?php echo url_for('@homepage') ?>"  method="get">
                            <input class="buscador-input" type="text" value="" name="search"/>
                            <div class="btn-enviar">
                                <input type="image" src="/images/buscar-btn.png" width="10" height="10"> 
                            </div>
                        </form>
                    </div>
                </div>
                <div class="separador"></div>

                <?php echo $sf_content ?>   


                <div id="seccion_b">
                            <?php if (has_slot('seccion_archivos')): ?>
                                <?php include_slot('seccion_archivos') ?>
                            <?php endif; ?>
                    
                            <?php if (has_slot('post-azar')): ?>
                                <?php include_slot('post-azar') ?>
                            <?php endif; ?>
                    
                    
                </div>
                <div id="banners">

                    <div id="banner_blog"><img src="/images/banner01.png" width="467" height="84" /></div>
                    <div id="banner_blog"><img src="/images/banner02.png" width="467" height="84" /></div>
                    <div id="banner_blog"><img src="/images/banner03.png" width="467" height="84" /></div>

                </div>
            </div>
        </div>
























































<!-- 

        <div id="wrapper">
            <div id="header">
            </div>

            <div id="content">

            </div>
            <div id="navigation">
                <div id="menu">
                    <ul>
                        <li><?php echo link_to('Administración', '/adminBlog', array('target' => '_blank')) ?></li>
                        <?php if (!$sf_user->isAuthenticated()): ?>
                            <li><?php echo link_to('Registrate', '@register') ?></li>

                            <?php if (has_slot('signIn')): ?>
                                <?php include_slot('signIn') ?>
                            <?php endif; ?>



                        <?php endif ?>
                        <?php if ($sf_user->isAuthenticated()): ?>
                            <li><a class="last logout" href="<?php echo url_for('@sf_guard_signout') ?>">Logout</a></li>
                        <?php endif ?>
                    </ul>

                </div>
            </div>
            <div id="footer">

            </div>
        </div>-->
    </body>
</html>
