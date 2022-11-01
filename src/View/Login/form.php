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
            <li><a href="/">Home</a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </div>
        </ul>
   </nav>
            <form class="form-login">
                <h3>Apellido :<?PHP echo $_POST['apellido'] ?></h3>
                <h3>Nombre : <?PHP echo $_POST['nombre'] ?></h3>
                <h3>Direccion : <?PHP echo $_POST['direccion'] ?></h3>
                <h3>Email :<?PHP echo $_POST['e-mail'] ?></h3>
                <br>
                <h3>Gustos Musicales :
                <?PHP foreach ($musica as $r) :?>
                <li><?php echo $r ?></li></h3>
                <?php endforeach?>
                <br>
                <h3>Actividad Fisica :
                <?PHP foreach ($Afisica as $r) :?>
                <li><?php echo $r ?></li></h3>
                <?php endforeach?>
                <br>
                <h3>Estudios :<?PHP echo $_POST['Estudios'] ?></h3>
            </form>