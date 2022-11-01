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
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <form id="loginform" method="post" action="form.php" name="signin-form">
                    <label style="color: black;">Apellido:</label>
                    <input type="text" name="apellido" placeholder="Inserte Un Apellido" required="Por favor llene este campo" minlength="3" maxlength="36">
                    <label style="color: black;">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Inserte Un Nombre" required="Por favor llene este campo" minlength="3" maxlength="18">
                    <label style="color: black;">Direccion:</label>
                    <input type="text" name="direccion" placeholder="Inserte una direccion" required="Por favor llene este campo">
                    <label style="color: black;">Email:</label>
                    <input type="email" name="e-mail" placeholder="Inserte un email" required="Por favor llene este campo">
                    <label style="color: black;">Gustos Musicales:</label>
                    <select class="select-css-1" style="width:230px" name="Musica[]" required multiple> 
                        <option value="rock">Rock</option>
                        <option value="pop">Pop</option>
                        <option value="electronica">Electronica</option>
                        <option value="jazz">Jazz</option>
                        <option value="Tango">Tango</option>
                    </select>
                    <label style="color: black;">Actividades fisicas:</label>
                    <select class="select-css-1" style="width:230px" name="Activf[]" required multiple> 
                        <option value="atle">Atlestismo</option>
                        <option value="tenis">Tenis</option>
                        <option value="futbol">Futbol</option>
                        <option value="rugby">Rugby</option>
                        <option value="danza">Danza aerobica</option>
                    </select>
                    <label style="color: black;">Estudios:</label>
                    <select class="select-css" style="width:150px" name="Estudios" required> 
                        <option value="Primario">Primario</option>
                        <option value="Secundario">Secundario</option>
                        <option value="Terciario">Terciario</option>
                        <option value="Universidad">Universidad</option>
                    </select>
                    <button  type="submit" title="Ingresar" name="Ingresar" value="login">Siguiente</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>