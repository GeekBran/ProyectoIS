<?php
$mysqli =new mysqli("localhost","root","","vivel");

if($mysqli->connect_errno){
    echo "Lo sentimo este sitio web esta experimentando problemas";
    exit;
}
//rec var
if(isset($_POST['Correo'],$_POST['Nombre'],$_POST['Numero'],$_POST['Pregunta'])
and $_POST['Correo'] !="" and $_POST['Nombre'] !="" and $_POST['Numero'] !="" and $_POST['Pregunta'] !=""){

    $correo = $_POST["Correo"];
    $nombre = $_POST["Nombre"];
    $numero = $_POST["Numero"];
    $pregunta = $_POST["Pregunta"];

    $consulta = "INSERT INTO contacto (correo,nombre,numero,pregunta)VALUES ('$correo', '$nombre', '$numero', '$pregunta')";

        if(mysqli_query($mysqli,$consulta)){
            echo "<script> alert('Sus dudas han sido enviadas.'); location.href='Index.html' </script>"; 
        }else{
            echo"<script> alert('Fallo al enviar sus dudas.'); location.href='Index.html' </script>";
        }
}
else{
    echo"<script> alert('Fallo al enviar sus dudas.'); location.href='Index.html' </script>";
}


?>