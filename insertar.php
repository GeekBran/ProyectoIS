<?php
include("conexion.php");
$getmysql=new mysqlconex();
$getconex=getmysql->conex();

if(isset($_POST["Enviar"])){

    $correo=$_POST["Correo"];
    $nombre=$_POST["Nombre"];
    $numero=$_POST["Numero"];
    $pregunta=$_POST["Pregunta"];
    
    $query="INSERT INTO contacto(correo,nombre, numero, pregunta) VALUES(?,?,?,?)";
    $sentencia = mysqli_prepare($getconex,$query);
    mysqli_stmt_bind_param($sentenca, "SSIS",$correo,$nombre,$numero,$pregunta);
    mysqli_stmt_execute($sentenca);
    $afetado=mysqli_stmt_affected_rows($sentenca);
    if($afectado==1){
        echo "<script> alert('Sus dudas han sido enviadas'); location.href='../Index.php'; </script>";


    }else{
            echo "<script> alert('lo sentimos no se pudo enviar sus dudas'); location.href='../Index.php'; </script>";

        }
    mysqli_stmt_close(sentencia);
    mysql_close($getconex);

}

?>