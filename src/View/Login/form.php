<?php 
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['pass']) ) {
    echo "Acceso denegado";
    exit();
  }
  $musica = $_POST['Musica'];
  $name = $_SESSION['username'];
  $Afisica = $_POST['Activf'];
  ?>
<!doctype html>
<html lang="es">
    
    <head>
        <meta charset="utf-8">
        <title> Formulario de Acceso </title>
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        <link rel="stylesheet" href="../../Assets/css/style.css">
    </head>
    
    <body>    
    <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">Bienvenido <?php echo $name ?></div>
    <!-- NAVIGATION MENU -->
        <ul class="nav-links">
        <!-- NAVIGATION MENUS -->
        <div class="menu">
            <li><a href="logout.php">Cerrar sesion</a></li>
        </div>
        </ul>
   </nav>     
        <div id="contenedor">
            <div id="central">
                <div id="form2">
                <form id="loginform" name="signin-form">
                <p>Ud. es <?PHP echo $_POST['apellido'] ?>   <?PHP echo $_POST['nombre'] ?>, sus gustos musicales son: 
                <?PHP foreach ($musica as $r) :?>
                <li><?php echo $r ?></li>
                <?php endforeach?>
                El deporte que practica es: 
                <?PHP foreach ($Afisica as $r) :?>
                <li><?php echo $r ?></li>
                <?php endforeach?>
                Y sus estudios son: <?PHP echo $_POST['Estudios'] ?>
                Gracias por responder la esncuesta, sus datos serán procesador en los proximos días</p>
                </form>
                </div>
            </div>
        </div>