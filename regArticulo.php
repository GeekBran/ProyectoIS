<?php
$servername = "localhost";
$username = "academia";
$password = "academia";
$dbname = "vivel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['registroArticulo'])){
    if (strlen($_POST['titulo']) >= 1 &&
        strlen($_POST['imagen']) >= 1 &&
        strlen($_POST['cuerpo']) >= 1 &&
        strlen($_POST['autor']) >= 1){
            $titulo = $_POST['titulo'];
            $img = $_POST['imagen'];
            $cuer = $_POST['cuerpo'];
            $aut = $_POST['autor'];
            $consulta = "UPDATE articulos SET Titulo='$titulo', Imagen ='$img', Texto ='$cuer', Autor = '$aut' WHERE id = 1";
            $resultado = mysqli_query($conn,$consulta);
            if($resultado){
                echo "Articulo actualizado";
            }
            else{
                echo "Error";
            }
    }
    else{
        echo "Ingrese los datos";
    }
}
$conn->close();
?>