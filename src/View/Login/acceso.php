<?php 
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['pass']) ) {
    echo "Acceso denegado";
    exit();
  }
  $name = $_SESSION['username'];
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
            <h1> Bienvenido <?php echo $name ?> </h1>
            <div class="inferior">
                    <a href="logout.php">Cerrar sesion</a>
                </div> 
            <br>
            <div>
            <form action="form.php" method="POST">
            <label>Apellido:</label>
            <input type="text" name="apellido" placeholder="Inserte Un Apellido" required="Por favor llene este campo" minlength="3" maxlength="36">
            <br><br>
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Inserte Un Nombre" required="Por favor llene este campo" minlength="3" maxlength="18">
            <br><br>
            <label>Direccion:</label>
            <input type="text" name="direccion" placeholder="Inserte una direccion" required="Por favor llene este campo">
            <br><br>
            <label>Email:</label>
            <input type="email" name="e-mail" placeholder="Inserte un email" required="Por favor llene este campo">
            <br><br>
            <label>Gustos Musicales:</label>
            <br>
            <select style="width:150px" name="Musica[]" required multiple> 
                <option value="rock">Rock</option>
                <option value="pop">Pop</option>
                <option value="electronica">Electronica</option>
                <option value="jazz">Jazz</option>
                <option value="Tango">Tango</option>
            </select><br><br>
            <label>Actividades fisicas:</label>
            <br>
            <select style="width:150px" name="Activf[]" required multiple> 
                <option value="atle">Atlestismo</option>
                <option value="tenis">Tenis</option>
                <option value="futbol">Futbol</option>
                <option value="rugby">Rugby</option>
                <option value="danza">Danza aerobica</option>
            </select><br><br>
            <label>Estudios:</label>
            <br>
            <select style="width:150px" name="Estudios" required> 
                <option value="Primario">Primario</option>
                <option value="Secundario">Secundario</option>
                <option value="Terciario">Terciario</option>
                <option value="Universidad">Universidad</option>
            </select><br><br>
            <button type="submit">Echo</button>
            </form>
            </div>
            <br><br>


    </body>

</html>