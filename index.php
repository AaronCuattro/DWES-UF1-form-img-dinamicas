<?php 
    if(isset($_GET["buscarGoogle"])) {
        header("Location: https://www.google.com/search?q=".$_GET["buscar"]);
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Actividad UF1 - Aarón Fdez Moreno</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./styleCSS.css">
    </head>
    <body>
        <?php require "claseActividades.php"; ?>
        <?php if(isset($_POST["control"])) {
            $actividad = new Actividad( $_POST["titulo"],
                                        $_POST["ciudad"],
                                        $_POST["fecha"],
                                        $_POST["tipo"],
                                        $_POST["precio"]);
            }
        ?>
        <div id="divcabecera" >
            <header class="cabecera">
                <div id="titulos">
                    <h1>ACTIVIDAD UF1 DWES.</h1>
                    <h3>P&aacute;gina web para generar un listado de actividades.</h3>
                </div>
                <div id="enunciado">
                    <p>Con el objetivo de promocionar diferentes movimientos culturales en nuestra comunidad, hemos desarrollado una aplicación web en la que publicar todas las nuevas actividades que están disponibles.</p>
                </div>
            </header>
            <nav>
                <div id="tablaInicio">
                    <table>
                        <tr id="menuInicio">
                            <td><a href="index.php">Inicio.</a></td>
                            <td><?php if(isset($_POST["control"])): ?><a href="imagenes/<?php echo $actividad->tipo ?>.jpg">Im&aacute;gen de la &uacute;ltima actividad creada.</a><?php else: ?><a href="imagenes/arbol.jpg">Im&aacute;gen.</a><?php endif ?></td>
                            <td><a href="formulario.html">Formulario.</a></td>
                            <td><a href="imagenes/arbol.jpg">Im&aacute;gen de un &aacute;rbol.</a></td>
                        </tr>
                    </table>
                </div>
                <div id="formInicio">
                    <form role="form" method="get" action="">
                        <input type="search" name="buscar" placeholder="Buscar en Google">
                        <input type="submit" name="buscarGoogle" value="¡Vamos!">
                    </form>
                </div>
            </nav>
        </div>
        <div id="divcuerpo">
            <div id="divmain">
                <main>
                    <div class="cuerpo">                        
                        <div class="formulario" id="vacio">
                            <fieldset>
                                <legend>Rellena los campos del formulario</legend>
                                    <?php include "formulario.html" ?>
                            </fieldset>
                        </div>
                        <div class="formulario" id="lleno" >
                            <?php if(isset($_POST["control"])): ?>
                                <fieldset>
                                    <legend>&Uacute;ltima actividad añadida:</legend>
                                    <div class="resultado" > 
                                        <div id="resulAñadido">             
                                            <dl>
                                                <dt>Nombre de la actividad:</dt>
                                                <dd><?php echo $actividad->titulo; ?></dd>
                                                <dt>Ciudad del evento:</dt>
                                                <dd><?php echo $actividad->ciudad; ?></dd>
                                                <dt>Fecha de inicio:</dt>
                                                <dd><?php echo date("d/m/Y", strtotime($actividad->fecha)) ?></dd>
                                                <dt>Tipo de actividad:</dt>
                                                <dd><?php echo $actividad->tipo; ?></dd>
                                                <dt>Precio del evento:</dt>
                                                <dd><?php echo $actividad->precio; ?></dd>
                                            </dl>
                                        </div>
                                        </br>
                                        <div class="img2" >
                                            <img src="imagenes/<?php echo $actividad->tipo ?>.jpg">
                                        </div>
                                    </div>
                                </fieldset>
                            <?php else: ?>
                                <fieldset>
                                    <legend>Añade una actividad para previsualizarla:</legend>
                                    <div class="resultado" > 
                                        <div id="resulVacio">             
                                            <dl>
                                                <dt>Titulo de la actividad:</dt>
                                                <dd>Campo vac&iacute;o</dd>
                                                <dt>Ciudad del evento:</dt>
                                                <dd>Campo vac&iacute;o</dd>
                                                <dt>Fecha de inicio:</dt>
                                                <dd>Campo vac&iacute;o</dd>
                                                <dt>Tipo de actividad:</dt>
                                                <dd>Campo vac&iacute;o</dd>
                                                <dt>Precio del evento:</dt>
                                                <dd>Campo vac&iacute;o</dd>
                                            </dl>
                                        </div>
                                        </br>
                                        <div class="img2" >
                                            <img src="imagenes/arbol.jpg" alt="arbol">
                                        </div>
                                    </div>
                                </fieldset>
                            <?php endif ?> 
                        </div>                            
                    </div>
                </main>
            </div>
            <div class="barralateral">
                <aside>
                    <h4>Enlaces:</h4>
                    <ul>
                        <li><a href="http://www.google.com"><img class="icon" src="./imagenes/icon/google.png"></br>Google.</a></li>
                            </br>
                        <li><a href="https://github.com/AaronCuattro"><img class="icon" src="./imagenes/icon/github.png"></br>Github.</a></li>
                            </br>
                        <li><a href="https://discord.com"><img class="icon" src="./imagenes/icon/discord.png"></br>Discord.</a></li>
                            </br>
                        <li><a href="https://open.spotify.com/user/mastter.quattro?si=d37a9b7b5be54bf6"><img class="icon" src="./imagenes/icon/spotify.png"></br>Spotify.</a></li>
                            </br>
                        <li><?php if(isset($_POST["control"])): ?><a href="imagenes/<?php echo $actividad->tipo ?>.jpg"><img class="icon" src="./imagenes/icon/imagen.png"></br>Im&aacute;gen de la &uacute;ltima actividad creada.</a><?php else: ?><a href="imagenes/arbol.jpg"><img class="icon" src="./imagenes/icon/imagen.png"></br>Im&aacute;gen</a><?php endif ?></li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="piepagina">
            <footer>
                <p>©Copyleft 2022 Aar&oacute;n Fern&aacute;ndez Moreno</br>2º DAW Online</p>
            </footer>
        </div>
    </body>
</html>