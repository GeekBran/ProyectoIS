<?php

$servername = "localhost";
$username = "academia";
$password = "academia";
$dbname = "vivel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(!empty($_POST["SESION"])){
    if(!empty($_POST["usuario"]) and empty($_POST["contraseña"])   ){
        echo "ERROR";

    }else{
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $sql=$conn->query("select * from usuario where usuario='$usuario' and contraseña='$contraseña' ");
        if($datos=$sql->fetch_object()){
            header("Location:newinfo.php");



          
 
    } else { 
        echo "ERROR";
      }


}
}

?>