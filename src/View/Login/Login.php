<?php
 session_start();
if (isset($_POST['username']) && isset($_POST['pass'])) {

    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    
    $archivo=fopen('users.dat','a+')or die("no puedo abrir archivo");
    while(!feof($archivo))
    {   
        
        $linea=fgets($archivo); //Recupera la linea de datos ingresados
		$datos=explode("|",$linea); //explode — Divide un string en varios string en un caracter/letra/numero/punto de corte que se le especifique
		$username_file = $datos[0];
        $password_file = $datos[1];

        if($username==$username_file && $password == $password_file)
        {
            $_SESSION["username"] = $username;
            header ("Location: acceso.php");
            exit();
        }else{
            echo "<script> window.location='index.php?valid=error'; </script>";
        }

      
    }
}
 
?>